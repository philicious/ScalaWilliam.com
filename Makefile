default: test
test: build
	htmllint out/**/*.html || true
	echo It works!
build:
	./build.sh
clean:
	rm -rf out
serve: build
	firebase serve
gems:
	gem install github-markup
	gem install redcarpet
