# Phalcon Framework 4.1.2 с CSS/JS минификаторами для Debian 9 + PHP 7.4


## Установка

Скопировать phalcon.so в директорию с расширениями PHP и добавить в php.ini

## Замена файлов

Клонировать официальный репозиторий версии 4.1.2, заменить файлы из директории replacements и выполнить команды из пункта "Сборка из не официальных исходников" начиная с cd /sources

## Сборка из не официальных исходников

Клонировать sources

cd /sources

zephir fullclean

zephir compile

cd ext

phpize

./configure

make && make install

Добавить phalcon.so в php.ini

/etc/init.d/php7.4-fpm restart
