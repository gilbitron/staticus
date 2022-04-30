---
title: Compile Assets
category: getting-started
sort: 3
---

Staticus use [Laravel Mix](https://laravel-mix.com/) to compile JS & CSS assets.

To compile your project assets, first install the node dependencies:

```
npm install
```

Compile your JS and CSS by running:

```
npm run dev
```

## Watching for changes

To preview changes as you build your site run the NPM `watch` script:

```
npm run watch
```

This script uses Browsersync to run a development server at `http://localhost:3000` where any changes you make will be reflected in the browser.

## Compiling for production

When it comes to deploying your site, you'll want to run the `prod` script to compile your assets for production:

```text
npm run prod
```
