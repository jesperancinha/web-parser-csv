local:
	mkdir -p tmp
	mkdir -p src/tmp
coverage:
	phpunit --bootstrap src/upload.php tests
	phpunit --bootstrap src/upload.php --coverage-clover clover.xml tests
