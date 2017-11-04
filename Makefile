SHELL := /bin/bash
default: test
test-only:
	grep hello@scalawilliam.com out/index.html > /dev/null
	grep -i GitHub out/index.html > /dev/null
	grep -i LinkedIn out/index.html > /dev/null
	grep google.com out/cv/index.html > /dev/null
	find out -iname '*.html' -print0 | while read -d '' -r file; do \
	    grep analytics $$file > /dev/null; \
	    if [ $$? -ne 0 ]; then  \
	        echo file $$file does not have analytics. \
	        exit 1; \
	    fi;\
	done
test: build
	make test-only
build: ensure-firebase
	./build.sh
clean:
	rm -rf out
serve: build
	firebase serve -p 7071
bs:
	browser-sync --proxy 'localhost:7071' start --files '**/*' --reload-delay 1000
ensure-firebase:
	ls firebase.json
