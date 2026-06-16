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
            C = G.subgraph(max(nx.connected_components(G), key=len))
            score = sum(data['weight'] for n1,n2,data in C.edges(data=True)) / len(C.edges())
            langstr = ','.join(sorted(set([n.split('/')[0] for n in C.nodes])))
            print(f"{movie}\t{langstr}\t{score}\t{C.edges}")
            
        movie = m
        G = nx.Graph()

    ## add edges corresponding to linked movie subtitles
    ## skip intra-lingual alignments
    
    if l1 != l2:
        G.add_edge(parts[0], parts[1], weight=float(parts[2]))



