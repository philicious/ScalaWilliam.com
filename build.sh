#!/bin/bash

mkdir -p out
rsync -a 1404 out/
rsync -a 1406/sygments out/1406/
mkdir -p out/1406/xml-processing-in-scala
mkdir -p out/1607/quick-scala-tutorial
rsync -a 1412 out/
rsync -a cv out/
rsync -a shared --exclude '*.html' out/
rsync -a index out/
php index.php > out/index.html
mkdir -p out/content/
php content/index.php > out/content/index.html
php 1406/xml-processing-in-scala/index.php > out/1406/xml-processing-in-scala/index.html
php 1607/quick-scala-tutorial/index.php > out/1607/quick-scala-tutorial/index.html

function do_1612() {
mkdir -p out/1612/essential-scala-tutorial/
mkdir -p out/1611/firebase-static-site-deploy/
php 1612/essential-scala-tutorial/index.php > out/1612/essential-scala-tutorial/index.html
ruby -e '
    require "github/markup"
    file = "1611/firebase-static-site-deploy/README.md"
    puts GitHub::Markup.render(file, File.read(file))
' > out/1611/firebase-static-site-deploy/index.html
php surround.php out/1611/firebase-static-site-deploy/index.html
}
mkdir -p out/sitemap/
php sitemap.php > out/sitemap/index.html
php 404.php > out/404.html
php sitemap-xml.php > out/sitemap.xml
cp robots.txt out/robots.txt

php add-analytics.php $(find out -iname '*.html'|grep -v shared)
