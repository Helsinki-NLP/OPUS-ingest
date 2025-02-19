#!/usr/bin/env python3


# run like
#
# sort -u <  ../devtest-xml/linked-docs-with-scores-0.9-sorted.txt | python3 find_link_cliques_multigraph.py

# https://networkx.org/documentation/stable/reference/algorithms/clique.html



import sys
import networkx as nx
from itertools import groupby
from collections import defaultdict

tsp = nx.approximation.traveling_salesman_problem


## create a multigraph with language/year/movie nodes
## and aligned subtitles pairs as edges (together with the alignment score as weight)

G = nx.MultiGraph()

for line in sys.stdin:
    parts = line.split()
    lang1,year1,movie1,sub1 = parts[0].split('/')
    lang2,year2,movie2,sub2 = parts[1].split('/')

    G.add_edge(f"{lang1}/{year1}/{movie1}", f"{lang2}/{year2}/{movie2}",
               weight=float(parts[2]), sub1=parts[0], sub2=parts[1])


## count the number of cliques of all lengths:

# clique_len = [len(c) for c in nx.find_cliques(G)]
# len_counts = {value: len(list(freq)) for value, freq in groupby(sorted(clique_len))}
# print(len_counts)

# nr_cliques = sum(1 for c in nx.find_cliques(G))
# print(nr_cliques)


## find the biggest clique

# biggest_clique = max(nx.find_cliques(G), key=len)
# max_size = len(biggest_clique)

# print(biggest_clique)
# print(max_size)




## find all cliques and print the movieID, year and the languages covered

for c in nx.find_cliques(G):
    langs = []
    for d in c:
        lang,year,movie = d.split('/')
        langs.append(lang)
        
    langstr = ','.join(langs)
    print(f"{movie}\t{year}\t{langstr}")


## maybe we could use a traveling salesmane solver
## BUT: the function in networkx does not return the actual path
##      it only returns a list of nodes and from that we do not
##      get the edge attributes that indicate the subtitles that are linked
## NOTE: for a TSP we also need to turn scores into edge costs (1-score)

#    path = tsp(G, nodes=c)
#    print(path)


    ## create a subgraph-view from the clique nodes

    C = G.subgraph(c)
    # print(C.edges(data=True))


    ## sum scores per subtitle document
    ## and count how often each document is included in a link

    docWeight = defaultdict(float)
    docCount = defaultdict(int)
    
    for n1,n2,data in C.edges(data=True):
        docWeight[data['sub1']] += data['weight']
        docWeight[data['sub2']] += data['weight']
        docCount[data['sub1']] += 1
        docCount[data['sub2']] += 1

    
    ## normalize the scores per document
    ## and list them for each language node

    docs = {n:{} for n in c}
    for d in docWeight:
        n = '/'.join(d.split('/')[0:3])
        docs[n][d] = docWeight[d]/docCount[d]


    ## print the best document for each language node

    # print(docs)
    for n in docs:
        d=max(docs[n], key=docs[n].get)
        print(f"{n}\t{d}\t{docs[n][d]}")
        
