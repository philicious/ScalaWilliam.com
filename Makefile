default: test
test: build
	@ htmllint out/**/*.html
	echo It works!
build:
	./build.sh
serve: build
	firebase serve
gems:
	gem install github-markup
	gem install redcarpet
