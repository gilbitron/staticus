---
title: Installation
sort: 1
---

## Requirements

* PHP 8.0+
* Composer
* Node & NPM

## Install Staticus

Use composer to create a new Staticus site:

```
composer create-project gilbitron/staticus my-site
```

## Directory structure

```
assets/
├─ main.css
cache/
content/
├─ posts/
│  ├─ example-post.md
dist/
views/
├─ index.blade.php
config.php
```

* **assets** - Where JS/CSS/images are stored
* **cache** - Where local files are cached during build
* **content** - Collections of content files can be stored here
* **dist** - The location of a site once it's built
* **views** - Where blade templates files are stored
* **config.php** - The site config
