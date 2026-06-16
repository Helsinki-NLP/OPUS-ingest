#!/usr/bin/env python3



def dfs(graph, node, visited, subgraph):
    visited.add(node)
    subgraph.append(node)
    for neighbor in graph[node]:
        if neighbor not in visited:
            dfs(graph, neighbor, visited, subgraph)

def find_maximal_subgraphs(graph):
    visited = set()
    subgraphs = []
    
    for node in graph:
        if node not in visited:
            subgraph = []
            dfs(graph, node, visited, subgraph)
            subgraphs.append(subgraph)
    
    return subgraphs

# Example graph (Adjacency list)
graph = {
    0: [1, 2],
    1: [0, 2],
    2: [0, 1],
    3: [4],
    4: [3],
    5: []
}

subgraphs = find_maximal_subgraphs(graph)
print(subgraphs)





# import sys
# import networkx as nx
# from itertools import groupby

# G = nx.Graph()
# movie = None
# movieCount = 0

# for line in sys.stdin:
#     parts = line.split()
#     l1,_,m,_ = parts[0].split('/')
#     l2,_,m,_ = parts[1].split('/')

#     ## new movie? --> print cliques in current graph
#     ##            --> start a new graph
#     ## NOTE: requires input that is sorted by movie IDs

#     if m != movie:
#         if G.edges():
#             movieCount += 1
#             sys.stderr.write('.')
#             if not movieCount % 100:
#                 sys.stderr.write(f" {movieCount}\n")
#             sys.stderr.flush()
#             print(f"\nmovie: {movie}")
#             cliques(G)
#         movie = m
#         G = nx.Graph()

#     ## add edges corresponding to linked movie subtitles
#     ## skip intra-lingual alignments
    
#     if l1 != l2:
#         G.add_edge(parts[0], parts[1], weight=float(parts[2]))



