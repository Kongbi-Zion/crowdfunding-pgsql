FROM php:8.2.11-fpm

# Install composer
RUN echo "\e[1;33mInstall COMPOSER\e[0m" && \
    curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Install dependencies
RUN apt-get update && \
    apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd

# Copy PHP configuration
COPY php.ini /usr/local/etc/php/

# Install PHP extensions and tools
RUN apt-get update && \
    apt-get -y install apt-utils nano wget dialog vim && \
    docker-php-ext-install pdo pdo_mysql && \
    apt-get -y install --fix-missing \
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
        libmcrypt-dev \
        libicu-dev \
        libonig-dev \
        libxml2-dev && \
    apt-get install -y libpq-dev && \
    docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql && \
    docker-php-ext-install pdo pdo_pgsql pgsql && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Expose port 9000
EXPOSE 9000