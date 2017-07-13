#!/bin/sh

echo "enter root password for mysql"
read rootpwd

echo 'show tables;' | \
mysql -u root --password="$rootpwd" opus | \
grep '^...-...$' | \
sed 's/^/ALTER TABLE \`/;s/$/\` ADD COLUMN prob FLOAT;/' | \
mysql -u root --password="$rootpwd" opus
