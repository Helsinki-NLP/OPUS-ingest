#!/bin/bash
#
# update the OPUS API DB and copy to the pouta instance

OPUSAPIDIR=/proj/OPUS/API
cd ${OPUSAPIDIR}/update-opusapi
./update_opus_database.sh
chmod 664 opusdata.db
rsync opusdata.db cloud-user@193.166.25.9:/var/www/OPUS-API/
ssh cloud-user@193.166.25.9 "sudo systemctl restart apache2"
