

include ../Makefile.def
include ../../Makefile.def
include ../../Makefile.submit


## set mysql password !!!!

MYSQL_DB     = lexicon
MYSQL_USER   = opus
MYSQL_PASSWD = 


PHRASE2DICE = opus-pt2dice
DICETHR = 0.05
FREQTHR = 2

LANGDIC = $(sort $(patsubst ${CORPUSWORDALIGN}/%/model/phrase-table-filtered.gz,%.dic,\
		$(wildcard ${CORPUSWORDALIGN}/??-??/model/phrase-table-filtered.gz)) \
		$(wildcard *.dic))
LANGSQL = $(patsubst %.dic,%,$(LANGDIC))

ALIGNMENT = efmaral gdfa
DATE = $(shell stat -c %y ${CORPUSWORDALIGN} | cut -f 1 -d ' ')

all: sql insert clean

sql: general.sql ${LANGSQL}

## insert all data into my mySQL database
insert: general.sql ${LANGSQL}
	mysql -u ${MYSQL_USER} --password='${MYSQL_PASSWD}' ${MYSQL_DB} < general.sql
	for i in ${LANGSQL} ; do \
		echo "insert $$i"; \
		cat $$i | \
		mysql -u ${MYSQL_USER} --password='${MYSQL_PASSWD}' ${MYSQL_DB} \
		>/dev/null 2>/dev/null; \
	done
	touch insert

## remove SQL-command files
clean:
	rm -f general.sql
	rm -f ${LANGSQL} ${LANGDIC}

## SQL commands to create language tables
general.sql:
	echo  "CREATE TABLE IF NOT EXISTS user (ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,user VARCHAR( 15 ) NOT NULL ,UNIQUE INDEX ( user )) ENGINE = MYISAM;" >$@
	echo  "CREATE TABLE IF NOT EXISTS origin (ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,corpus VARCHAR( 100 ) NOT NULL , alignment VARCHAR( 100 ) NOT NULL ,date DATE NOT NULL, status VARCHAR( 50 ) NOT NULL ,UNIQUE INDEX ( corpus , alignment, date )) ENGINE = MYISAM;" >>$@
	for i in ${LANGUAGES}; do \
		echo "CREATE TABLE IF NOT EXISTS `${ISO639} $$i` (ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,item VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL , UNIQUE INDEX ( item )) ENGINE = MYISAM;" >>general.sql; \
	done;



## ... this looks complicated ..
## - need to convert 2-letter code to 3-letter code
## - need to check if we have to swap source and target language
##   (2-letter codes and 3-letter codes are sorted differently)


${LANGSQL}: %: %.dic
	( LANG=en_US.UTF8; \
	SRC=`echo '$@' | cut -f1 -d'-'`; \
	TRG=`echo '$@' | cut -f2 -d'-'`; \
	LANG1=`${ISO639} $${SRC}`; \
	LANG2=`${ISO639} $${TRG}`; \
	if [ `perl -e "print '$${LANG1}' gt '$${LANG2}';"` ]; then \
	  SRC3=`${ISO639} $${TRG}`; \
	  TRG3=`${ISO639} $${SRC}`; \
	else \
	  SRC3=`${ISO639} $${SRC}`; \
	  TRG3=`${ISO639} $${TRG}`; \
	fi; \
	echo "$${SRC3} -- $${TRG3}"; \
	echo "CREATE TABLE IF NOT EXISTS \`$${SRC3}-$${TRG3}_check\` (srcID INT NOT NULL, trgID INT NOT NULL, userID INT NOT NULL, correct TINYINT(1), UNIQUE INDEX (srcID,trgID,userID)) ENGINE = MYISAM;" >$@; \
	echo "CREATE TABLE IF NOT EXISTS \`$${SRC3}-$${TRG3}\` (srcID INT NOT NULL , trgID INT NOT NULL, freq INT NOT NULL, prob FLOAT, originID INT NOT NULL, ok INT DEFAULT 0, wrong INT DEFAULT 0, UNIQUE INDEX (srcID, trgID , originID))ENGINE = MyISAM;" >>$@; \
	echo "INSERT IGNORE INTO \`origin\` VALUES (NULL,'${CORPUS}','${ALIGNMENT}','${DATE}','automatic');" >>$@; \
	echo "SELECT @origin:=ID FROM origin WHERE corpus = '${CORPUS}' AND alignment = '${ALIGNMENT}' AND date = '${DATE}';" >>$@; \
	if [ `perl -e "print '$${LANG1}' lt '$${LANG2}';"` ]; then \
	  cat $< |\
	  sed "s/^\([0-9]*\)\t\([0-9\.]*\)\t\(.*\)\t\(.*\)$$/INSERT IGNORE INTO \`$${SRC3}\` VALUES(NULL,'\3'); INSERT IGNORE INTO \`$${TRG3}\` VALUES(NULL,'\4'); SELECT \@src:=ID FROM \`$${SRC3}\` WHERE item = '\3'; SELECT \@trg:=ID FROM \`$${TRG3}\` WHERE item = '\4'; INSERT IGNORE INTO \`$${SRC3}-$${TRG3}\` VALUES(\@src,\@trg,\1,\2,@origin,0,0);/" >> $@; \
	else \
	  echo "DROP TABLE IF EXISTS \`$${TRG3}-$${SRC3}\`;" >>$@; \
	  echo "DROP TABLE IF EXISTS \`$${TRG3}-$${SRC3}_check\`;" >>$@; \
	  cat $< |\
	  sed "s/^\([0-9]*\)\t\([0-9\.]*\)\t\(.*\)\t\(.*\)$$/INSERT IGNORE INTO \`$${SRC3}\` VALUES(NULL,'\4'); INSERT IGNORE INTO \`$${TRG3}\` VALUES(NULL,'\3'); SELECT \@src:=ID FROM \`$${SRC3}\` WHERE item = '\4'; SELECT \@trg:=ID FROM \`$${TRG3}\` WHERE item = '\3'; INSERT IGNORE INTO \`$${SRC3}-$${TRG3}\` VALUES(\@src,\@trg,\1,\2,@origin,0,0);/" >> $@; \
	fi )







initial.sql:
	( LANG=en_US.UTF8; \
	for i in ${LANGUAGES}; do \
	  echo "DROP TABLE IF EXISTS $${i}_first;" >> $@; \
	  echo "CREATE TABLE IF NOT EXISTS $${i}_first (letter CHAR(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL UNIQUE, freq INT NOT NULL) ENGINE = MYISAM;" >> $@; \
	  mysql -u ${MYSQL_USER} --password='${MYSQL_PASSWD}' ${MYSQL_DB} -e "select item from $$i" | \
	  cut -f2 -d' ' | sed 's/^\(.\).*$$/\1/' | \
	  perl -e 'while(<>){binmode(STDIN,"utf8");binmode(STDOUT,"utf8");print uc($$_);}' | \
	  sort | uniq -c | \
	  sed "s/^ *\([0-9][0-9]*\) \(.*\)$$/INSERT IGNORE INTO $${i}_first (letter,freq) VALUES ('\2',\1);/" >> $@; \
	done )


%.dic: ${CORPUSWORDALIGN}/%/model/phrase-table-filtered.gz
	zcat $< |\
	${PHRASE2DICE} -d ${DICETHR} -f ${FREQTHR} -m |\
	grep . |\
	cut -f1,2,3,4 |\
	sed "s/&quot/\'/g;s/&amp/&/g;s/&gt/>/g;s/&lt/</g;" > $@


