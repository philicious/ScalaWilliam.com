default: build
build:
	./build.sh
serve: build
	firebase serve
