# site-setting

Adalah module penyedia site setting. Module ini membuat satu service baru dengan nama
`setting` yang bisa digunakan dari aplikasi dengan perintah `$this->setting->{name}`.

## Instalasi

Jalankan perintah di bawah di folder aplikasi:

```
mim app install site-setting
```

## Tipe

Tipe setting yang dikenal sampai saat init adalah:

1. `inline text`
1. `date`
1. `number`
1. `boolean`
1. `multiline text`
1. `url`
1. `email`
1. `color`