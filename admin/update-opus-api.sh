#!/bin/bash
#
# update the OPUS API DB and copy to the pouta instance

echo "Starting at `date`"

## for some reason module is not available in cron-jobs ...
## --> why?
module use -a /proj/nlpl/modules
module load nlpl-opus
module load python-env/3.4.1
module list

# module load python-env/3.5.3

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

echo -e "\nCreating opusdata.db in `pwd` ..."

## because we cannot load modules we need to give the full path for python3
## ---> do we need this? Does this work without setting up proper environment?
# python3 readopusdata.py 
/appl/opt/python/3.4.1-gcc491-shared/bin/python3 readopusdata.py 
# || echo "readopusdata failed!"

if [ -e opusdata.db ]; then 
  echo -e "\nUpload database to OPUS server ..."
  chmod 664 opusdata.db
  rsync -v opusdata.db cloud-user@193.166.25.9:/var/www/OPUS-API/ 
  # || echo "rsync failed!"
  ssh cloud-user@193.166.25.9 "sudo service apache2 restart"
else
  echo "no database file created!"
fi

echo -e "\nDatabase update done!"

echo "Finishing at `date`"