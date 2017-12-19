# WP Theme Helper

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

Into this new class put specific methods for your theme (like set_background_blue etc).

