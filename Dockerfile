# Use official PHP image as a base
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev git unzip libxml2-dev

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql xml

# Install Composer (for Laravel)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory inside the container
WORKDIR /var/www

# Copy the Laravel app into the container
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose port 9000 and start PHP-FPM
EXPOSE 9000
CMD ["php-fpm"]
