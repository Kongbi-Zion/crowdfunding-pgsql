# FROM php:8.2.11-fpm

# # Install composer
# RUN echo "\e[1;33mInstall COMPOSER\e[0m"
# RUN cd /tmp \
#     && curl -sS https://getcomposer.org/installer | php \
#     && mv composer.phar /usr/local/bin/composer

# RUN docker-php-ext-install pdo pdo_mysql

# RUN apt-get update

# # Install useful tools
# RUN apt-get -y install apt-utils nano wget dialog vim

# # Install important libraries
# RUN echo "\e[1;33mInstall important libraries\e[0m"
# RUN apt-get -y install --fix-missing \
#     apt-utils \
#     build-essential \
#     git \
#     curl \
#     libcurl4 \
#     libcurl4-openssl-dev \
#     zlib1g-dev \
#     libzip-dev \
#     zip \
#     libbz2-dev \
#     locales \
#     libmcrypt-dev \
#     libicu-dev \
#     libonig-dev \
#     libxml2-dev
    
# # Install Postgre PDO
# RUN apt-get install -y libpq-dev \
#     && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
#     && docker-php-ext-install pdo pdo_pgsql pgsql

# # Expose port 80
# EXPOSE 80



FROM richarvey/nginx-php-fpm:3.1.6

COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]
