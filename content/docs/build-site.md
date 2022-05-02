---
title: Build Site
category: getting-started
sort: 2
---

To build your site run the NPM `build` script from the project root:

```
npm run build
```

Your static site will be generated in the `/dist` directory.

## Previewing changes

To preview a built site using PHP you can use PHPs built-in web server:

```
php -S localhost:8000 -t dist
```

To preview changes as you build your site run the NPM `watch` script:

```
npm run watch
```

This script uses Browsersync to run a development server at `http://localhost:3000` where any changes you make will be reflected in the browser.
