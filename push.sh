#!/bin/bash
if [ "$REF" = "" ]; then
  REF="$1"
  echo "$REF"
fi
if [ ! -f "firebase.json" ]; then
  echo "Wrong location." >> /dev/stderr
  exit 1
fi
if [ "$REF" = "refs/heads/master" ]; then
  # Here we run the script itself over again if we've
  # made changed to the deployment.
  if [ -z "$FETCHED" ]; then
    git fetch
    git pull origin "$REF"
    FETCHED=yes REF="$REF" ./push.sh
  else
    make clean
    make
    firebase deploy --non-interactive --token "$TOKEN"
  fi
fi
