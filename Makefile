default: test
test: build
	htmllint out/**/*.html || true
	echo It works!
build:
	./build.sh
clean:
	rm -rf out
serve: build
	firebase serve -p 7071
bs:
	browser-sync --proxy 'localhost:7071' start --files '**/*'
gems:
	gem install github-markup
	gem install redcarpet
watch:
	fswatch -l 0.2 --exclude 'out' --exclude '.idea' --exclude '.git' --exclude '.*___jb_.*' . \
	| xargs -n1 -I {} 'make'
