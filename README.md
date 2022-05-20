# Yii2 Language Select widget.

### Supported languages (ISO 639-1)
 and some  [i18n-locales](https://github.com/ladjs/i18n-locales) languages

Support Codes:
cs, cs-CZ, da, da-DK, de, de-DE, en, us, en-GB, en-US, gb, es, fi, fi-FI, fr, fr-FR, hu, hu-HU, id, id-ID, is, is-IS, it, it-IT, ja, ja-JP, lt, lt-LT, lv, ms, ms-MY, my, nl, nl-NL, no, nn-NO, pl, pl-PL, pt, pt-PT, ro, ro-RO, ru, ru-RU, sv, sv, sv-SE, th, th-TH, uk, uk-UA, vi, zh, zh-CN.
 

## Installation
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require  mardoc/yii2-language-select "*"
```

or add

```
"mardoc/yii2-language-select": "*"
```

to the require section of your `composer.json` file.

## Basic usage

![Single column example](./resources/video.gif?raw=true)

For example you want to have an ability of entering several emails of user on profile page.
In this case you can use yii2-multiple-input widget like in the following code

```php
use mardoc\LanguageSelect;
...
<?php
    echo  LanguageSelect::widget([
            'languages' => [
                'uk'=>'Ua',
                'en'=>'En',
                'de-DE'=>'De',
                'lt-LT'=>'Lt',
                'es'=>'Es'
            ],
            'languageParam'=>''
        ]);
?>
```

## License

[MIT](LICENSE)