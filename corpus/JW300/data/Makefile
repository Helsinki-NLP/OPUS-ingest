
content: content.json.gz
	cd scripts && python3 split_file_into_languages.py

publications: content
	cd scripts && python3 create_files.py

output: publications
	@mkdir output
	cd scripts && python3 sent-split.py -i ../publications -o ../output

clean:
	find content -type f | xargs rm
	find content -type d | sort -r | xargs rmdir
	find publications -type f | xargs rm
	find publications -type d | sort -r | xargs rmdir
	find output -type f | xargs rm
	find output -type d | sort -r | xargs rmdir
