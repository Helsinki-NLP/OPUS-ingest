import os
# import ijson.backends.yajl2_cffi as ijson
import ijson  
from itertools import islice
import json
import copy
import sys

arguments = sys.argv
if len(arguments) > 1:
    fileName = arguments[1]
else:
    fileName = "../content-full.json"

languages = open('../languages.json', encoding="utf8")
languages_json = json.load(languages)

language_dict = {}
language_dict_content = {}
language_dict_html = {}
language_dict_watchtower = {}
language_dict_watchtower_content = {}
language_dict_watchtower_html = {}
language_dict_awake = {}
language_dict_awake_content = {}
language_dict_awake_html = {}

for language in languages_json:
    language_dict[language['language_short']] = []
    language_dict_content[language['language_short']] = []
    language_dict_html[language['language_short']] = []
    language_dict_watchtower[language['language_short']] = []
    language_dict_watchtower_content[language['language_short']] = []
    language_dict_watchtower_html[language['language_short']] = []
    language_dict_awake[language['language_short']] = []
    language_dict_awake_content[language['language_short']] = []
    language_dict_awake_html[language['language_short']] = []


with open(fileName, 'r', encoding="utf8") as file:
    items = ijson.items(file, 'item')
    # items = islice(items, 5)

    counter = 0

    for item in items:
        # indicator if it's doing something
        counter = counter + 1
        if counter % 1000 == 0:
            print (counter)

        # fix awake editions:
        if item['publication'] == 'g':
            item['publication'] = 'g' + (item['publication_id'])[-5:-3]

        language_dict[item['language']].append(item)

        content_only = copy.deepcopy(item)
        del content_only['content_html']

        html_only = copy.deepcopy(item)
        del html_only['content']

        language_dict_content[item['language']].append(content_only)
        language_dict_html[item['language']].append(html_only)

        if (item['publication'])[0] == 'w':
            language_dict_watchtower[item['language']].append(item)
            language_dict_watchtower_content[item['language']].append(content_only)
            language_dict_watchtower_html[item['language']].append(html_only)
        else:
            language_dict_awake[item['language']].append(item)
            language_dict_awake_content[item['language']].append(content_only)
            language_dict_awake_html[item['language']].append(html_only)

language_dict_files = {}
language_dict_files_content = {}
language_dict_files_html = {}
language_dict_files_watchtower = {}
language_dict_files_watchtower_content = {}
language_dict_files_watchtower_html = {}
language_dict_files_awake = {}
language_dict_files_awake_content = {}
language_dict_files_awake_html = {}

# saving files
print("Saving files...")
for item in language_dict.values():
    if item:
        language = (item[0])['language']
        language_directory = "../content/" + language

        print (language)

        if not os.path.exists(language_directory):
            os.makedirs(language_directory)


        language_dict_files[language] = open(language_directory + "/" + language + ".json",'w', encoding="utf8")
        language_dict_files_content[language] = open(language_directory + "/" + language + "_content" + ".json",'w', encoding="utf8")
        language_dict_files_html[language] = open(language_directory + "/" + language + "_html" + ".json",'w', encoding="utf8")

        json.dump(language_dict[language], language_dict_files[language])
        json.dump(language_dict_content[language], language_dict_files_content[language])
        json.dump(language_dict_html[language], language_dict_files_html[language])


        if language_dict_watchtower[language]:
            language_dict_files_watchtower[language] = open(language_directory + "/" + language + "_watchtower" + ".json",'w', encoding="utf8")
            language_dict_files_watchtower_content[language] = open(language_directory + "/" + language + "_watchtower_content" + ".json",'w', encoding="utf8")
            language_dict_files_watchtower_html[language] = open(language_directory + "/" + language + "_watchtower_html" + ".json",'w', encoding="utf8")
            json.dump(language_dict_watchtower[language], language_dict_files_watchtower[language])
            json.dump(language_dict_watchtower_content[language], language_dict_files_watchtower_content[language])
            json.dump(language_dict_watchtower_html[language], language_dict_files_watchtower_html[language])


        if language_dict_awake[language]:
            language_dict_files_awake[language] = open(language_directory + "/" + language + "_awake" + ".json",'w', encoding="utf8")
            language_dict_files_awake_content[language] = open(language_directory + "/" + language + "_awake_content" + ".json",'w', encoding="utf8")
            language_dict_files_awake_html[language] = open(language_directory + "/" + language + "_awake_html" + ".json",'w', encoding="utf8")
            json.dump(language_dict_awake[language], language_dict_files_awake[language])
            json.dump(language_dict_awake_content[language], language_dict_files_awake_content[language])
            json.dump(language_dict_awake_html[language], language_dict_files_awake_html[language])