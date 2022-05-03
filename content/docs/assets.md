---
title: Assets
category: templates
sort: 3
---

Compiled assets can be included in your templates using the `$staticus->asset()` method:

```blade
<link rel="stylesheet" href="{{ $staticus->asset('assets/main.css') }}">
```

This method ensures that assets are cache-busted when they have been updated.
