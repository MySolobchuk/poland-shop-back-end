start:
	@docker-compose -f ./docker-compose.yaml up -d

stop:
	@docker-compose -f ./docker-compose.yaml down

app:
	@docker-compose exec app bash

exec:
	@docker-compose exec app $$cmd

exec-bash:
	@docker-compose exec app bash -c "$(cmd)"

composer-install:
	@make exec-bash cmd="COMPOSER_MEMORY_LIMIT=-1 composer install --optimize-autoloader"

composer-update:
	@make exec-bash cmd="COMPOSER_MEMORY_LIMIT=-1 composer update"

migrate:
	@make exec cmd="php artisan migrate"

key:
	@make exec cmd="php artisan key:generate"

seed:
	@make exec cmd="php artisan db:seed"
