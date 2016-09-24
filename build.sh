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
rsync -a 1406 out/
rsync -a 1412 out/
rsync -a cv out/
rsync -a shared out/
rsync -a index out/
php index.php > out/index.html
