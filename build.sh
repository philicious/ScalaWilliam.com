#!/bin/bash
pushd `dirname $0` > /dev/null
SCRIPTPATH=`pwd`
popd > /dev/null

cd "$SCRIPTPATH"

if [ ! -f "firebase.json" ]; then
  echo "Could not get to the right path, exiting." >> /dev/stderr
  exit 1
fi

rm -rf out
mkdir -p out
rsync -a 1404 out/
rsync -a 1406/sygments out/1406/
mkdir -p out/1406/xml-processing-in-scala
mkdir -p out/1607/quick-scala-tutorial
rsync -a 1412 out/
rsync -a cv out/
rsync -a shared out/
rsync -a index out/
php index.php > out/index.html
mkdir -p out/content/
php content/index.php > out/content/index.html
php 1406/xml-processing-in-scala/index.php > out/1406/xml-processing-in-scala/index.html
php 1607/quick-scala-tutorial/index.php > out/1607/quick-scala-tutorial/index.html
php add-analytics.php $(find out -iname '*.html'|grep -v shared)
