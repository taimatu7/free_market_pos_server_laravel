FROM php:8.2.14-fpm-bullseye

# 設定ファイルをコピー
COPY php.ini /usr/local/etc/php/

# パッケージのインストール
RUN apt-get update \
    && apt-get -y install git zip unzip vim

# MySQLドライバのpdo_mysqlをインストール
RUN docker-php-ext-install pdo_mysql

# composerのインストール
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

WORKDIR /var/www/html

EXPOSE 9000
