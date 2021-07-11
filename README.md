yii2-struktur-organisasi
========================
Module Struktur Organisasi

Instalasi
------------

Untuk menggunakan extension ini sebaiknya gunakan composer. [composer](http://getcomposer.org/download/).

Ketikkan perintah ini pada root project Yii2 Anda.

```
composer require --prefer-dist ahmadfadlydziljalal/yii2-strukturorganisasi "*" -vvv
```

Atau tambahkan baris code ini 

```
"ahmadfadlydziljalal/yii2-strukturorganisasi": "*"
```

pada composer.json di root folder project Yii2 Anda.


Cara penggunaan.
-----

Setelah extension ini berhasil terpasang dengan baik, 
tambahkan baris kode berikut pada file konfigurasi Yii2, misal di `config/web.php`:


```php
return [
    'modules => [
        'strukturOrganisasi' => [
            'class' => 'ahmadfadlydziljalal\strukturorganisasi\Module',
            ...
        ]
    ]
]

```
Jika terpasang dengan benar, Anda bisa mengaskes module ini pada alamat
```
http://localhost/path/to/index.php?r=ahmadfadlydziljalal/struktur-organisasi
```

atau setelah pretty-url sudah diaktikan, cukup gunakan: 
```
http://localhost/path/to/ahmadfadlydziljalal/struktur-organisasi
```
