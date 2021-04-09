install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even
	
brain-calc:
	./bin/brain-calc

validate:
	composer validate

lint:
	composer run-script phpcs -- --standard=PSR12 src bin
	
lintFix:
	composer run-script phpcbf -- --standard=PSR12 src bin

tree:
	tree -L 1

