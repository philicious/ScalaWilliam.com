#!/bin/bash
set -x
OUT=${OUT:-out}
mkdir -p $OUT

rsync -a \
    --exclude '$OUT' \
    --exclude 'build.sh' \
    --exclude '.git' \
    --exclude 'firebase.json' \
    --exclude 'scala-native-libpcap/target/*' \
    --exclude '*.scala' \
    --exclude 'README.md' \
    --exclude 'router.php' \
    ./ $OUT/

for PHP_FILE in $(find $OUT -iname 'index.php'); do
TARGET_FILE="${PHP_FILE/php/html}";
php $PHP_FILE > $TARGET_FILE
done

rm $(grep -l -r -F '<!-- DRAFT -->' $OUT)

mkdir -p $OUT/sitemap/
php sitemap.php > $OUT/sitemap/index.html
php 404.php > $OUT/404.html
php sitemap-xml.php > $OUT/sitemap.xml
rm -f $OUT/shared/template.html

php add-analytics.php $(find $OUT -iname '*.html'|grep -v shared)

rm -f $(find $OUT -iname '*.php')