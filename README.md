yupe-markitup
=============

Установка:

Установить модуль, добавить в настройки yupe модуля новый редактор:
```php
'visualEditors' => [
    'markitup'          => [
        'class' => 'application.modules.markitup.components.Markitup',
    ],
]
```
Например, в config/userspace/yupe.php:
```php
<?php
return array(
    'module' => array(
        'visualEditors' => [
            'markitup'          => [
                'class' => 'application.modules.markitup.components.Markitup',
            ],
        ]
    )
);
```
