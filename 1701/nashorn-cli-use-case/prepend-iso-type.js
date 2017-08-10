#!/usr/bin/jjs
function isoTime(unixTime) {
  var instant = java.time.Instant.ofEpochSecond(unixTime);
  return java.time.format.DateTimeFormatter.ISO_INSTANT.format(instant);
}

java.nio.file.Files.lines(
  java.nio.file.Paths.get("/dev/stdin")
).map(function (line) line.split(",", -1))
 .map(function(columns) { columns.unshift(isoTime(columns[0])); return columns })
 .map(function(columns) columns.join(","))
 .forEach(print);

/**
Usage:
./prepend-iso-time.js <<EOF
1552134142,a
1552134143,b
1562134142,c
EOF
**/
