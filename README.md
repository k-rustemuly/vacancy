### Содержание

- **[Установка через Cpanel](#cpanel)**
- **[Установка через Cpanel 2](#cpanel_2)**

## Cpanel

1. Зайдите в Cpanel аккаунт.
2. Нажмите на Git version Control в разделе Файлы
3. Нажмите на кнопку Создать
4. Откройте терминал
5. Откройте папку где был импортирован файлы и есть composer.json (cd api)
6. Запустите команду /opt/cpanel/ea-php81/root/usr/bin/php /opt/cpanel/composer/bin/composer update

## Cpanel 2
1. Зайдите в Cpanel аккаунт.
2. Откройте Terminal
```
ssh-keygen -t rsa -b 4096 -C "CPANEL USERNAME"
```
3. Смените CPANEL USERNAME на имя пользователя Cpanel

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
