import os
import json


with open('../languages.json', encoding="utf8") as languages_file:
    languages = json.load(languages_file) 

language_statistics = []

for language_item in languages:
    language = language_item['language_short']
    folder = '../content/' + language

    if os.path.exists(folder):
        print (language)
        with open(folder + '/' + language + '_content.json', encoding="utf8") as f:
            data = json.load(f)

        for publication in data:
            publication_directory = "../publications/" + publication['publication']
            publication_name = publication['language'] + "." + publication['publication_id'] + ".txt"

            if not os.path.exists(publication_directory):
                os.makedirs(publication_directory)
            
            file = open(publication_directory + "/" + publication_name,"w+", encoding="utf8")
            file.write(publication["content"])
            file.close()