#!/bin/bash

increment() {
    echo $(("$1"+1))
}

# If this assertion fails, the whole thing quits 
[ 3 -eq $(increment 2) ] || exit 1

# Increment a stream of numbers
while read n; do
    increment $n;
done
