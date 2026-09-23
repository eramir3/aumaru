# Aumarú theme specification

## Purpose and scope

Aumarú is a WordPress theme for a French-language fruit pulp storefront. It presents the brand, products, news, events, services, and contact information, and provides a WooCommerce shopping flow. This document describes the behavior currently implemented in this repository; WordPress content, product records, orders, and plugin settings live outside the tracked theme.

## Site experience

- **Home:** A branded landing page with a rotating fruit image carousel and links to Instagram, Facebook, and WhatsApp (`front-page.php`).
- **Navigation:** Links to About Us, Shop, a recipe article, Learn More, Events, Services, Contact, and Cart. The cart badge updates through WooCommerce cart fragments (`header.php`, `functions.php`).
- **Content pages:** Dedicated About Us, Contact, and Services templates; a generic page template for other pages. The blog index lists posts, categories, excerpts, and featured images; single posts show the full content.
- **Events:** A public `event` post type at `/events`. The archive shows excerpts, optional featured images, and dates from the `event_date` custom field. Its main query includes only events dated today or later and sorts by that field in ascending order (`functions.php`, `archive-event.php`). The archive uses Advanced Custom Fields' `get_field()`.
- **Shop:** WooCommerce archive and product templates present the catalog and product details. Product pages include French and English nutrition images looked up by product slug at `src/assets/images/nutrition-facts/<slug>-fr.webp` and `<slug>-en.webp`.
- **Cart and checkout:** Theme overrides style the cart, empty cart, and checkout form while retaining WooCommerce hooks and purchase behavior. The cart displays quantity guidance in French.

## Order quantity rules

The total number of cart items is validated against the destination postal code on the cart and at checkout (`functions.php`). The rule uses the submitted shipping postal code first, then billing postal code; if neither is submitted, it uses the customer's saved shipping or billing postal code.

| Destination postal code | Minimum items | Maximum items |
| --- | ---: | ---: |
| Prefix `690`, `691`, or `695` | 3 | 25 |
| Any other nonempty postal code | 6 | 25 |

Postal codes are normalized before matching. A missing postal code produces no quantity violation until one is available. Limits and groups are configured in `aumaru_zip_quantity_rules()`; violations appear as WooCommerce errors.

## Implementation and content dependencies

- The repository root is the WordPress theme. `style.css` contains the theme metadata; `functions.php` registers theme support, assets, the event type, and commerce hooks.
- Templates are PHP. Styling comes from Tailwind CSS 3 (`src/input.css` compiled to tracked `src/output.css`) plus `src/assets/styles/main.css` and `carousel.css`. `tailwind.config.js` scans root PHP files, theme JavaScript, and WooCommerce overrides. The menu behavior is in `src/assets/js/responsive-menu.js`; the carousel uses enqueued Bootstrap 3 JavaScript.
- WooCommerce is required for the store. Advanced Custom Fields is required by the event archive's date display. The `event_date` field and product slug to nutrition image mapping must match the WordPress content.
- The theme contains French copy and some English WooCommerce strings. It is not a complete localization system.
- `docker-compose.yml` provides local MariaDB, WordPress, and a WP-CLI setup service. The local `wp-content` snapshot and SQL dump are ignored by Git and are not part of the distributable theme.

## Expected behavior for changes

Changes to page templates should preserve the working navigation, responsive layout, and WordPress header/footer hooks. Shop changes should preserve WooCommerce actions, notices, cart updates, and checkout submission. Changes to quantity rules should be checked for both matching Lyon postal codes and the default group, at both cart and checkout. Changes to events should preserve date filtering and ordering, including the `event_date` content dependency. New Tailwind classes must be compiled into `src/output.css` so the tracked theme renders correctly without a build step on the server.
