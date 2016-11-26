default: test
test: build
	echo It works!
build:
	./build.sh
serve: build
	firebase serve
