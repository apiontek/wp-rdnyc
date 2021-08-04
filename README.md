# RDNYC WordPress Bootstrap 5/PurgeCSS Theme
The WordPress theme for recoverydharma.org, based on Webpack 5, Bootstrap 5, and some development conveniences.

Originally forked from [WP 73k](https://github.com/apiontek/wp-73k/), itself forked from [WP Tailwind](https://github.com/cjkoepke/wp-tailwind)

## Development Requirements
- [NodeJS](https://nodejs.org)
- [Composer](https://getcomposer.org)

### How to get started

1. Clone or download the project into your `themes` directory (`./wp-content/themes`)
2. Run `composer install`
3. Run `npm install` if developing
4. Set environment variables for BrowserSyncPlugin to the domain/ports you need (see `webpack.config.js` for variables needed).
5. Run `npm run start` to begin development server, `npm run dev` for simple dev build, `npm run prod` for a production build, or `npm run build` to build both dev & prod concurrently.

### SVGs

#### Optimization

Images placed in `assets/images` will be copied to `dist/images` -- however, SVGs can be optimized by placing them in `assets/raw` and importing them in `main.js`, e.g.:

```js
import '../raw/rdnyc-logo.svg';
```
This will output an optimized version to `dist/images` with `svg-` prefix; these can be used per below:

#### Using optimized SVGs

SVG images can be implemented two ways:

- A normal `<img src="<?php echo get_template_directory_uri() . '/dist/images/svg-roll-mandala.svg'; ?>" ... >` tag
  - This cannot be colored but preserves SVG styling
  - Since resource is loaded separately, it can be cached.
- An inline SVG using the `inline_svg( $svg_name, $atts )` function in `custom-functions.php` -- see that file for supported `$atts` array keys.
  - This can be colored from parent element
  - SVG class requires `{{class-placeholder}}` for 'svg_class' `$atts` key to work
  - Since resource is inline, cannot be cached.
