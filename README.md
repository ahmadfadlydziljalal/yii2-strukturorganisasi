yii2-struktur-organisasi
========================
Module Struktur Organisasi

Instalasi
------------

Untuk menggunakan extension ini sebaiknya gunakan [composer](http://getcomposer.org/download/).

Ketikkan perintah ini pada root project Yii2 Anda untuk menambahkan ekstensi ini pada project Yii2 Anda.

```
composer require --prefer-dist ahmadfadlydziljalal/yii2-strukturorganisasi "dev-main" -vvv
```

Atau tambahkan baris code ini 

```
"ahmadfadlydziljalal/yii2-strukturorganisasi": "dev-main"
```

pada composer.json di root folder project Yii2 Anda.


Cara penggunaan.
-----
Extension ini bersifat module, artinya kita tidak bisa langsung memakainya dengan memanggil `class` menggunakan namespace-nya. 


Anda harus menambahkan baris kode berikut pada file konfigurasi Projek Yii2 Anda.
Misalnya pada Yii2 basic template di `config/web.php`:

```php
return [
    'modules' => [
        'dzil' => [
            'class' => 'ahmadfadlydziljalal\strukturorganisasi\Module',
        ]
    ]
]

```

Lakukan migration
```php
php yii migrate --migrationPath=@ahmadfadlydziljalal/strukturorganisasi/migrations
```

Jika terpasang dengan benar, Anda bisa mengaskes module ini pada alamat
```
http://localhost/path/to/index.php?r=struktur-organisasi/manage
```

atau setelah pretty-url sudah diaktikan, cukup gunakan: 
```
http://localhost/path/to/struktur-organisasi/manage
```
