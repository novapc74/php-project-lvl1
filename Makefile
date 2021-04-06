install:
	composer install

brain-games:
	@./bin/brain-games

validate:
	@composer validate

lint:
	@composer run-script phpcs -- --standard=PSR12 src bin
	
lintFix:
	@composer run-script phpcbf -- --standard=PSR12 src bin
	
brain-even:
	@./bin/brain-even

tree:
	@tree -L 1

