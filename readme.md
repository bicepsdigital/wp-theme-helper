# WP Theme Helper

[![Build Status](https://travis-ci.org/bicepsdigital/wp-theme-helper.svg?branch=master)](https://travis-ci.org/bicepsdigital/wp-theme-helper)
[![Coverage Status](https://coveralls.io/repos/github/bicepsdigital/wp-theme-helper/badge.svg?branch=master)](https://coveralls.io/github/bicepsdigital/wp-theme-helper?branch=master)
[![CodeCov](https://codecov.io/gh/bicepsdigital/wp-theme-helper/branch/master/graph/badge.svg)](https://codecov.io/gh/bicepsdigital/wp-theme-helper)
[![Packagist](https://img.shields.io/packagist/v/bicepsdigital/wp-theme-helper.svg)](https://packagist.org/packages/bicepsdigital/wp-theme-helper)


This static class is providing simple functions for annoying tasks like setting body class etc.

## Instalation

include src/wp_theme_helper.php into your functions.php or (recomended way), use composer:

```
composer require bicepsdigital/wp-theme-helper
```


## Provides:

+ methods for adding / getting body classes (add_body_class, get_body_classes)
+ methods for setting / geting background (set_background, get_background)
+ method for creating BEM's modifier from background value - for example you set blue background, and then your menu needs --blue_background modifier -> just set background and use get_block_modifier_by_body_background


For examples look into tests/ThemeHelperTest.php test suite.

## Recommended usage:

Extend class WP_Theme_Helper for your theme name:

```php
class My_Theme_Helper extends WP_Theme_Helper {

}
```

Into this new class put specific methods for your theme (like set_background_blue etc) and use all methods using this new class, for example ```My_Theme_Helper::add_body_class('not_fixed_header')```

