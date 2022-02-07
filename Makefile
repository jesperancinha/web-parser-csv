local:
	mkdir -p tmp
	mkdir -p src/tmp
coverage:
	phpunit --bootstrap src/upload.php tests
	phpunit --bootstrap src/upload.php --coverage-clover clover.xml tests
start:
	cd src && mkdir -p tmp && php -S localhost:8000
