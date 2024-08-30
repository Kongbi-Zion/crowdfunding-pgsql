FROM php:8.2.11-fpm

# Install Composer and PHP Extensions
RUN echo "\e[1;33mInstall Composer and PHP Extensions\e[0m" \
    && apt-get update \
    && apt-get -y install \
        apt-utils \
        nano \
        wget \
        dialog \
        vim \
        build-essential \
        git \
        curl \
        libcurl4 \
        libcurl4-openssl-dev \
        zlib1g-dev \
        libzip-dev \
        zip \
        libbz2-dev \
        locales \
        libicu-dev \
        libonig-dev \
        libxml2-dev \
        libpq-dev \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        pdo_pgsql \
        pgsql \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Expose ports
EXPOSE 80
EXPOSE 9000
