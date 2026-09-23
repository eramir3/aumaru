# Agent guide for Aumarú

Read `spec.md` for the current site behavior before changing the theme. Keep changes focused on the requested feature and use the existing WordPress and WooCommerce structure.

## Repository map

- Root `*.php`: WordPress page, post, event, header, footer, and theme functions.
- `woocommerce/`: WooCommerce template overrides. Preserve relevant WooCommerce hooks and check template compatibility when updating them.
- `src/input.css`, `tailwind.config.js`, `src/output.css`: Tailwind source, scan configuration, and tracked generated CSS.
- `src/assets/styles/`, `src/assets/js/`, `src/assets/images/`, `src/assets/fonts/`: Theme styles, menu behavior, images, and fonts.
- `docker-compose.yml`, `docker/`: Local WordPress, MariaDB, and WP-CLI environment.
- `wp-content/`, `wp-content.zip`, `granbslj_aumaru.sql`: Local snapshots ignored by Git. Do not edit, commit, or rely on these as source files.

## Working conventions

- Use WordPress functions for URLs, templates, assets, and content. Escape dynamic output for its HTML, attribute, or URL context, and sanitize request data.
- Keep product and checkout behavior in WooCommerce hooks/templates. Preserve notices, nonces, and form submission fields when editing overrides.
- Keep the postal-code quantity groups in `aumaru_zip_quantity_rules()` and validate both cart and checkout behavior when changing them.
- The event archive uses the ACF `event_date` field in `Ymd` form for filtering; its template calls `get_field('event_date')`. Account for that field when changing event behavior.
- Product nutrition image names depend on product slugs. Add both `-fr.webp` and `-en.webp` files for a new product or adjust the template to handle missing images.
- Retain French customer-facing copy unless the task requests a language change. Keep layouts usable on mobile and desktop.
- When a task asks about a library, framework, SDK, API, CLI tool, or cloud service, resolve its library ID with Context7 and query current documentation before relying on API details. This does not apply to ordinary refactoring, business-logic debugging, or code review.

## Local workflow and checks

1. Install Node dependencies with `npm install` if needed. Start the local stack with `docker compose up -d`; the site uses `http://localhost:8080/` by default.
2. Check database settings before importing a snapshot: the Compose file currently defaults the MariaDB database to `aumaru`, while WordPress and WP-CLI default to `granbslj_aumaru`. Set `WORDPRESS_DB_NAME` consistently for all services in a local `.env` file or environment.
3. If PHP files change, run `php -l` on the changed files. If Tailwind classes or configuration change, regenerate the tracked CSS with `npx tailwindcss -i ./src/input.css -o ./src/output.css` (`npm run tailwind` runs a watcher).
4. For UI changes, check the affected page at mobile and desktop widths. For shop changes, check product, cart, and checkout flows. For event changes, check filtering, ordering, and date display with representative event data.
5. Review `git diff` and keep local database dumps, uploads, plugins, and generated local data out of commits.
