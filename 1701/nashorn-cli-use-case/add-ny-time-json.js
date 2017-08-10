#!/usr/bin/jjs
function cstTime(unixTime) {
  var instant = java.time.Instant.ofEpochSecond(unixTime);
  var zoned = instant.atZone(java.time.ZoneId.of("America/New_York"));
  return java.time.format.DateTimeFormatter.ISO_ZONED_DATE_TIME.format(zoned);
}

java.nio.file.Files.lines(
  java.nio.file.Paths.get("/dev/stdin")
).map(JSON.parse)
 .map(function(obj) { obj.iso_timestamp = cstTime(obj.unix_timestamp); return obj; })
 .map(JSON.stringify)
 .forEach(print);

/*
Usage:
./add-ny-time-json.js << EOF
{"unix_timestamp": 1552134142}
{"unix_timestamp": 1552134143}
{"unix_timestamp": 1562134142}
EOF
*/
