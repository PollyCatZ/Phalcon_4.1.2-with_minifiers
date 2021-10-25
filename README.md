# Phalcon Framework 4.1.2 с CSS/JS минификаторами для Debian 9 + PHP 7.4

CSS и JS минификаторы написанные на C были удалены из Phalcon начиная с версии 4.0.x из официального репозитория, поэтому есть этот репозиторий, в котором минификаторы возвращены, остальной код фреймворка остаётся без изменений, возвращены только минификаторы. В директории replacements находятся файлы, которые были изменены. 

Есть 3 способа установки:
1. скопировать скомпилированное расширение "phalcon.so" в директорию с расширениями PHP и добавить его в php.ini
2. клонировать официальный репозиторий, заменить в нём файлы из директории replacements и выполнить список команд из 3-го пункта начиная с команды "cd"
3. скомпилировать расширение из исходников этого репозитория и прописать его в php.ini

## Копирование скомпилированного расширения

Скопировать phalcon.so в директорию с расширениями PHP и добавить его в php.ini

## Замена файлов

Клонировать официальный репозиторий версии 4.1.2, заменить файлы из директории replacements и выполнить команды из пункта "Сборка из исходников данного репозитория", перейдя в директорию с исходниками и далее с пункта "zephir fullclean"

## Сборка из исходников данного репозитория

Клонировать sources

git clone https://github.com/PollyCatZ/Phalcon_4.1.2-with_minifiers.git /tmp/cphalcon-sources_4.1.2

cd /tmp/cphalcon-sources_4.1.2/sources

zephir fullclean

zephir compile

cd ext

phpize

./configure

make && make install

Добавить phalcon.so в php.ini

/etc/init.d/php7.4-fpm restart


# Для компиляции из исходников у Вас должны быть установлены PHP7.4, Zephir Parser, Zephir, расширение php-psr.
