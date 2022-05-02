---
title: Environments
category: getting-started
sort: 5
---

Sometimes you need to generate different content in different environments (e.g. only including analytics scripts in a production environment). Staticus supports this by allowing you pass an environment name to the `build` command. This is already pre-configured for you in our NPM scripts:

```text
npm run dev   // environment: local
npm run prod  // environment: production
```

Staticus uses the environment name to merge environment specific data into your `config.php`. For example, if a `config.production.php` file exists data from this file will be merged into the base config array if the site environment is `production`.

```php
// config.php
return [
    'siteTitle' => 'Staticus',
    'analyticsScript' => '',
    // ...
];

// config.production.php
return [
    'analyticsScript' => '<script>...',
];
```

You can then check for the existence of this data in your [templates](/docs/templates):

```php
@if ($staticus->config('analyticsScript'))
    {!! $staticus->config('analyticsScript') !!}
@endif
```
