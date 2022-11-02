Sentences

Download
1. http://downloads.tatoeba.org/exports/sentences.tar.bz2
2. http://downloads.tatoeba.org/exports/sentences_detailed.tar.bz2
Fields and structure
1. Sentence id [tab] Lang [tab] Text
2. Sentence id [tab] Lang [tab] Text [tab] Username [tab] Date added [tab] Date last modified
File description
Contains all the sentences. Each sentence is associated with a unique id and an ISO 639-3 language code.


Sentences (CC0)

Download
http://downloads.tatoeba.org/exports/sentences_CC0.tar.bz2
Fields and structure
Sentence id [tab] Lang [tab] Text [tab] Date last modified
File description
Contains all the sentences available under CC0.


Links

Download
http://downloads.tatoeba.org/exports/links.tar.bz2
Fields and structure
Sentence id [tab] Translation id
File description
Contains the links between the sentences. 1 [tab] 77 means that sentence #77 is the translation of sentence #1. The reciprocal link is also present, so the file will also contain a line that says 77 [tab] 1 .


Tags

Download
http://downloads.tatoeba.org/exports/tags.tar.bz2
Fields and structure
Sentence id [tab] Tag name
File description
Contains the list of tags associated with each sentence. 381279 [tab] proverb means that sentence #381279 has been assigned the "proverb" tag.


Lists

Download
http://downloads.tatoeba.org/exports/user_lists.tar.bz2
Fields and structure
List id [tab] Username [tab] Date created [tab] Date last modified [tab] List name [tab] Editable by
File description
Contains the list of sentence lists.
Sentences in lists

Download
http://downloads.tatoeba.org/exports/sentences_in_lists.tar.bz2
Fields and structure
List id [tab] Sentence id
File description
Indicates the sentences that are contained by any lists. 13 [tab] 381279 means that sentence #381279 is contained by the list that has an id of 13.


Japanese indices

Download
http://downloads.tatoeba.org/exports/jpn_indices.tar.bz2
Fields and structure
Sentence id [tab] Meaning id [tab] Text
File description
Contains the equivalent of the "B lines" in the Tanaka Corpus file distributed by Jim Breen. See this page for the format. Each entry is associated with a pair of Japanese/English sentences. Sentence id refers to the id of the Japanese sentence. Meaning id refers to the id of the English sentence.


Sentences with audio

Download
http://downloads.tatoeba.org/exports/sentences_with_audio.tar.bz2
Fields and structure
Sentence id [tab] Username [tab] License [tab] Attribution URL
File description
Contains the ids of the sentences, in all languages, for which audio is available. Other fields indicate who recorded the audio, its license and a URL to attribute the author. If the license field is empty, you may not reuse the audio outside the Tatoeba project.


User skill level per language

Download
http://downloads.tatoeba.org/exports/user_languages.tar.bz2
Fields and structure
Lang [tab] Skill level [tab] Username [tab] Details
File description
Indicates the self-reported skill levels of members in individual languages.


Users' sentence ratings

Download
http://downloads.tatoeba.org/exports/users_sentences.csv
Fields and structure
Username [tab] Lang [tab] Sentence id [tab] Rating [tab] Date added [tab] Date last modified
File description
Contains sentences rated by users. The value of the rating can be -1 (sentence not OK), 0 (undecided or unsure), or 1 (sentence OK). Warning: this data is still experimental.