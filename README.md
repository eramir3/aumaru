# AUMARÚ

## Installation

Install dependencies with npm

```
npm install
```

Start the local Docker stack

```
make docker-up
```

Run `make` to see all local commands. `make docker-stop` stops containers; `make docker-down` removes containers but keeps the database and WordPress volumes. `make docker-reset` recreates the stack while keeping those volumes. `make docker-reset-data` deletes both named volumes and starts the stack again; the bind-mounted local `wp-content/` directory remains. Use `make docker-ps` for service status and `make docker-logs` to follow logs.

## Tailwind

To watch and rebuild Tailwind CSS, run:

```
make tailwind
```

## To synchronize local env with host env
1. Download the `wp-content` folder use `cPanelFileManager`
2. Download the sql dump file with `phpmyadmin`
3. Go to [Aumaru Local](http://localhost:8080/)

## Woocommerce template repo

Repo added as reference for template overrides

```
https://github.com/woocommerce/woocommerce/tree/trunk/plugins/woocommerce/templates
```

## Product categories

The `/shop/` URL permanently redirects to the fruit pulp category. The PRODUITS menu links directly to both categories. Category URLs use English slugs while their display names remain French:

- `/product-category/fruit-pulp/`
- `/product-category/dried-fruits/`

Run the category migration in the local Docker stack with:

```
make docker-migrate-categories
```

After deploying the theme to another WordPress environment, run this once from the WordPress root with WP-CLI to rename the existing pulp category and create the dried fruit category:

```
wp eval-file wp-content/themes/aumaru/scripts/migrate-product-categories.php
```

The script can be rerun safely. Assign dried fruit products to the new category in WooCommerce.
