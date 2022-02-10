### Содержание

- **[Установка через Cpanel](#cpanel)**
- **[Установка через Cpanel 2](#cpanel2)**

## Cpanel

1. Зайдите в Cpanel аккаунт.
2. Нажмите на Git version Control в разделе Файлы
3. Нажмите на кнопку Создать
4. Откройте терминал
5. Откройте папку где был импортирован файлы и есть composer.json (cd api)
6. Запустите команду /opt/cpanel/ea-php81/root/usr/bin/php /opt/cpanel/composer/bin/composer update

## Cpanel2
1. Зайдите в Cpanel аккаунт.
2. Откройте Terminal
```
ssh-keygen -t rsa -b 4096 -C "CPANEL_USERNAME"
```
3. Смените CPANEL_USERNAME на имя пользователя Cpanel
```
Generating public/private rsa key pair.
Enter file in which to save the key (/home/sandboxprocess/.ssh/id_rsa):
```
5. Нажмите Enter
```
Enter passphrase (empty for no passphrase):
```
6. Нажмите Enter
```
Enter same passphrase again:
```
7. Нажмите Enter
8. Введите команду:
```
cat ~/.ssh/id_rsa.pub
```
9. Скопируйте ответ
10. Перейдите по ссылке вашей репозитории https://github.com/GITHUB_USERNAME/REPO_NAME/settings/keys/new 
11. В поле Title введите "Сpanel" или другое свое имя
12. В поле Key вставьте скопированный ответ от команды 8
13. Нажмите Add key
14. Нажмите на Confirm password
15. Введите команду
```
git clone git@github.com:GITHUB_USERNAME/REPO_NAME.git FOLDER_NAME
```
16. Введите команду
```
cd FOLDER_NAME
```
17. Введите команду запуска composer
```
/opt/cpanel/ea-php81/root/usr/bin/php /opt/cpanel/composer/bin/composer install
```
18. Переименуйте файл .env.example на .env вводя команду:
```
mv .env.example .env
```
19. Сгенерировать новый ключ приложения 
```
/opt/cpanel/ea-php81/root/usr/bin/php artisan key:generate
```
20. Установите правильные разрешения для папки
```
chmod -R 775 storage
```
21. Переименуйте папку public_html
```
mv public_html public_html2
```
22. Затем создайте символическую ссылку
```
ln -s /home/CPANEL_USERNAME/api/public /home/CPANEL_USERNAME/public_html
```
23. Создайте символическую ссылку для вашего хранилища
```
ln -s /home/sandboxprocess/api/storage/app/public /home/sandboxprocess/public_html/storage
```
24. Запустить ссылку на хранилище 
```
/opt/cpanel/ea-php81/root/usr/bin/php artisan storage:link
```
Теперь приложение должно работать, и вы можете легко выполнить git pull в cPanel. 


The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
