.PHONY: default
default:
	ls snp 2>/dev/null || git clone https://github.com/ScalaWilliam/scala-native-libpcap.git snp && (cd snp && git pull)
	SOURCE_ROOT=snp python source.py
