FROM php:8.1-fpm
LABEL Name=phpdocker Version=0.0.1
RUN apt-get -y update && apt-get install -y fortunes && docker-php-ext-install pdo_mysql
CMD ["sh", "-c", "/usr/games/fortune -a | cowsay"]