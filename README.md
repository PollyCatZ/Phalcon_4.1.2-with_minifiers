# Phalcon Framework 4.1.2 с CSS/JS минификаторами для Debian 9 + PHP 7.4


## Установка

Скопировать phalcon.so в директорию с расширениями PHP и прописать в php.ini 


## Сборка из исходников

cd /tmp/cphalcon4

zephir fullclean

zephir compile

cd ext

phpize

./configure

make && make install

/etc/init.d/php7.4-fpm restart