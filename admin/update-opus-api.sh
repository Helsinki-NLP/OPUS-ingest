#!/bin/bash
#
# update the OPUS API DB and copy to the pouta instance

module load python-env/3.5.3

OPUSAPIDIR=/proj/OPUS/API
cd ${OPUSAPIDIR}/update-opusapi
# ./update_opus_database.sh

echo -e "\nReading file structure from /proj/nlpl/data/OPUS/ ..."
ls -Rpsl /proj/nlpl/data/OPUS > opusdata.txt
echo `grep -c ^ opusdata.txt` "lines read"

if [ -e opusdata.db ]; then 
  echo "backup old database ..."
  d=$(date +"%Y%m%d%H%M%S")
  mv opusdata.db backups/${d}_opusdata.db
  echo "saved old database in backups/${d}_opusdata.db ..."
fi

echo -e "\nCreating opusdata.db ..."
python3 readopusdata.py
echo -e "\nopusdata.db created"

echo -e "\nUpload database to OPUS server ..."
chmod 664 opusdata.db
rsync opusdata.db cloud-user@193.166.25.9:/var/www/OPUS-API/
ssh cloud-user@193.166.25.9 "sudo service apache2 restart"
echo -e "\nDatabase update done!"
