
content: content.json.gz
	cd scripts && python3 split_file_into_languages.py

publications: content
	cd scripts && python3 create_files.py

clean:
	find content -type f | xargs rm
	find content -type d | xargs rmdir
	find publications -type f | xargs rm
	find publications -type d | xargs rmdir
