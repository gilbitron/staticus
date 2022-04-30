---
title: Installation
category: getting-started
sort: 1
---

## Requirements

Staticus requires the following:

* PHP 8.0+
* Composer
* Node & NPM

## Install Staticus

To install Staticus, use composer to create a new project:

```
composer create-project gilbitron/staticus my-site
```

## Directory structure

A Staticus project will have the following structure:

```text
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

* **/assets** - JS/CSS/images are stored here
* **/cache** - Where local files are cached during build
* **/content** - Collections of content files can be stored here
* **/dist** - The location of a site once it's built
* **/views** - Blade templates files are stored here
* **config.php** - The site config file
