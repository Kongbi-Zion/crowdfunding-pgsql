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





# Use an official PHP runtime as a parent image
FROM php:8.1-fpm

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql gd

# Copy existing application directory contents
COPY . /var/www/html

# Copy nginx configuration file
COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf

# Expose port 80
EXPOSE 80

# Start Nginx and PHP-FPM
CMD service nginx start && php-fpm
