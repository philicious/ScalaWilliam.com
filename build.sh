#!/bin/bash
set -x
mkdir -p out

rsync -a \
    --exclude 'out' \
    --exclude 'build.sh' \
    --exclude '.git' \
    --exclude 'firebase.json' \
    --exclude 'scala-native-libpcap/target/*' \
    --exclude '*.scala' \
    --exclude 'README.md' \
    --exclude 'router.php' \
    ./ out/

for PHP_FILE in $(find out -iname 'index.php'); do
TARGET_FILE="${PHP_FILE/php/html}";
php $PHP_FILE > $TARGET_FILE
done

mkdir -p out/sitemap/
php sitemap.php > out/sitemap/index.html
php 404.php > out/404.html
php sitemap-xml.php > out/sitemap.xml

php add-analytics.php $(find out -iname '*.html'|grep -v shared)

rm -f $(find out -iname '*.php')