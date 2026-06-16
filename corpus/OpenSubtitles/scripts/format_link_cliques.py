
import sys
import ast

for line in sys.stdin:
    clique = ast.literal_eval(line)
    movie = clique.pop(0)
    langs = []
    subs = []
    for d in clique:
        lang,_,_,sub = d.split('/')
        langs.append(lang)
        subs.append(sub)
        
    size = len(clique)
    langs.sort()
    subs.sort()
    
    langstr = ','.join(langs)
    substr = ','.join(subs)
    print(f"{movie}\t{size}\t{langstr}\t{substr}")

    
