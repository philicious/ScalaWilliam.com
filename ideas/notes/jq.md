---
title: jq for me
date: 2017-10-31
---

## Find all 'url' nodes recursively
```bash
jq -r '.. | .url? | select (. != null)'
```

## Extract one node

```bash 
jq -r '.links.next.href|select(.!=null)' $fn
```

## Recursively download based on JSON file

``` bash
fn=first.json
url=https://...
curl -o first.json $url
while ["$url"]; do
# use this if you don't want to override anything
# [ ! -f $fn ] && \
curl -o $fn $next_url;
next_url=$(jq -r '.next|select(.!=null)' $fn);
done
```

# select item ids that have `comments>0`
```bash
jq -r '.items[] | select(.comments > 0) | .id'
```
