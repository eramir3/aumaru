COMPOSE ?= docker compose
MIGRATION := /var/www/html/wp-content/themes/aumaru/scripts/migrate-product-categories.php
WP_PATH ?= ../../..

.DEFAULT_GOAL := help
.PHONY: help tailwind migrate-categories docker-up docker-stop docker-down docker-restart docker-reset docker-reset-data docker-ps docker-logs docker-migrate-categories

help:
	@printf '%s\n' \
		'tailwind                   Watch and rebuild Tailwind CSS with npm' \
		'migrate-categories         Run the product category migration with host WP-CLI' \
		'docker-up                  Start the local stack in the background' \
		'docker-stop                Stop containers without removing them' \
		'docker-down                Remove containers and network; keep data volumes' \
		'docker-restart             Restart running containers' \
		'docker-reset               Recreate the stack; keep data volumes' \
		'docker-reset-data          Delete named volumes and restart; local wp-content stays' \
		'docker-ps                  Show service status' \
		'docker-logs                Follow service logs' \
		'docker-migrate-categories  Run the product category migration with WP-CLI'

tailwind:
	npm run tailwind

migrate-categories:
	wp eval-file scripts/migrate-product-categories.php --path=$(WP_PATH)

docker-up:
	$(COMPOSE) up -d

docker-stop:
	$(COMPOSE) stop

docker-down:
	$(COMPOSE) down

docker-restart:
	$(COMPOSE) restart

docker-reset:
	$(COMPOSE) down
	$(COMPOSE) up -d

docker-reset-data:
	$(COMPOSE) down -v
	$(COMPOSE) up -d

docker-ps:
	$(COMPOSE) ps

docker-logs:
	$(COMPOSE) logs -f

docker-migrate-categories:
	$(COMPOSE) run --rm --entrypoint wp wp-cli eval-file $(MIGRATION) --path=/var/www/html
