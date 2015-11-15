# (CLOSED because included in the core) Parsedown integration  for Morfy CMS

### :fire: Fastest plugin for parsing Markdown syntax files.

Plugin use [Parsedown](http://parsedown.org/) and [ParsedownExtra](https://github.com/erusev/parsedown-extra) classes.

## Install
1. Place `parsedown` folder in `plugins` folder into Morfy CMS.
2. Edit `config.php`.

## Configuration
Just add `parsedown` to `plugins` array in `config.php`
```php
# config.php
return array(
    ...
    'plugins' => array(
        // 'markdown', // <= Disable Markdown Plugin
        'sitemap',
        'parsedown', // <= Enable Parsedown Plugin
    ),
    // Parsedown config ->
    'parsedown' => array(
        // Enable parsedownExtra
        // defaut: false
        'extra' => true, 
        // Enable automatic convertation url to link
        // defaut: false
        'autoLink' => true, 
    ),
    // <- Parsedown config
    ...
);
```

## License 
[MIT](https://github.com/pafnuty/morfy-parsedown/blob/master/LICENSE)






