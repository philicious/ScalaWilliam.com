.PHONY: default
default:
	ls src 2>/dev/null || git clone https://github.com/ScalaWilliam/scala-native-libpcap.git snp && (cd snp && git pull)
	python source.py
