#!/usr/bin/env python3

## run like
##
#
#  uniq < ../devtest-xml/linked-docs-with-scores-0.9-sorted.txt | python find_link_cliques.py > cliques-per-movie-0.9.txt
#
#
# https://networkx.org/documentation/stable/reference/algorithms/clique.html


import sys
import networkx as nx
from itertools import groupby


# def subgraph(G):
#    for c in sorted(nx.connected_components(G), key=len, reverse=True):
        


def cliques(G):

    # nr_cliques = sum(1 for c in nx.find_cliques(G))
    # print(nr_cliques)

    # biggest_clique = max(nx.find_cliques(G), key=len)
    # max_size = len(biggest_clique)
    # print(biggest_clique)
    # print(max_size)

    clique_len = [len(c) for c in nx.find_cliques(G)]
    len_counts = {value: len(list(freq)) for value, freq in groupby(sorted(clique_len))}
    max_size = max(clique_len)
    nr_cliques = sum(len_counts.values())

    print(f"nr of cliques: {nr_cliques}, size of longest clique: {max_size}, {len_counts}")

    sets = {}
    for c in nx.find_cliques(G):

        if len(c) < max_size:
            continue
    
        _,_,movie,_ = c[0].split('/')
        langstr = ','.join(sorted([n.split('/')[0] for n in c]))
        docstr = ','.join(sorted(c))

        C = G.subgraph(c)
        score = sum(data['weight'] for n1,n2,data in C.edges(data=True))
        nrEdges = len(C.edges())

        if langstr not in sets:
            sets[langstr] = {}
        sets[langstr][docstr] = score/nrEdges


    ## print the longest clique with the highest score
    #
    # maxlangs = max(sets,key=len)
    # bestdocs = max(sets[maxlangs], key=sets[maxlangs].get)
    # print(f"{movie}\t{maxlangs}\t{sets[maxlangs][bestdocs]}\t{bestdocs}")

    
    ## print all cliques of maximum length
    
    for l in sets:
        bestdocs = max(sets[l], key=sets[l].get)
        print(f"{movie}\t{l}\t{sets[l][bestdocs]}\t{bestdocs}")

    



G = nx.Graph()
movie = None
movieCount = 0

for line in sys.stdin:
    parts = line.split()
    l1,_,m,_ = parts[0].split('/')
    l2,_,m,_ = parts[1].split('/')

    ## new movie? --> print cliques in current graph
    ##            --> start a new graph
    ## NOTE: requires input that is sorted by movie IDs

    if m != movie:
        if G.edges():
            movieCount += 1
            sys.stderr.write('.')
            if not movieCount % 100:
                sys.stderr.write(f" {movieCount}\n")
            sys.stderr.flush()
            print(f"\nmovie: {movie}")
            cliques(G)
        movie = m
        G = nx.Graph()

    ## add edges corresponding to linked movie subtitles
    ## skip intra-lingual alignments
    
    if l1 != l2:
        G.add_edge(parts[0], parts[1], weight=float(parts[2]))



