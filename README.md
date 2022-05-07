# WooCommerce Hybrid Build Process Example

To integrate an existing plugin with modern WooCommerce features, such as WooCommerce Analytics, or WooCommerce Blocks, you will usually need to write modern JavaScript and/or React. Modifying an existing plugin to build these new resources can be challenging. If you are using a task runner like Grunt to build your plugin's assets, you might be wondering if there is away to build upon what you already have, instead of creating a new build process from scratch. There answer is that you can.

This is an example that illustrates how you can use `wp-scripts` and Webpack to build modern JavaScript as part of an existing build process based on Grunt. To test this:

- Run `npm install`.
- Run `grunt build`.

Assumptions used in this example: 

- Your legacy JavaScript code is located in `/resources/js/frontend/legacy.js` and will be enqueued from `/assets/js/frontend`.
- You also have some sass in `/resources/sass/frontend/styles.scss` that is enqueued from `assets/css/frontend/styles.css` (or `assets/css/frontend/styles-rtl.css`).
- The modern JavaScript or React code that you want to build is located in `/resources/js/frontend/blocks/index.js` and will be enqueued from `assets/dist/frontend`.

Note that:

- We included `@wordpress/scripts` and `@woocommerce/dependency-extraction-webpack-plugin` as dev dependencies in `package.json`. The latter is not used in this example, but will come in handy as you start to write code that relies on WooCommerce dependencies.
- We added some scripts in `package.json` to take advantage of the `@wordpress/scripts` package, as described in [this guide](https://developer.woocommerce.com/2020/11/13/tutorial-adding-react-support-to-a-woocommerce-extension/). Some scripts have been added to allow translatable strings in our JS code to be included in the generated potfile.
- Finally, we defined [a new Grunt task](https://github.com/woocommerce/woocommerce-hybrid-build-example/blob/trunk/Gruntfile.js#L145-L155) that executes these scripts via `npm run build && npm run i18n`.

