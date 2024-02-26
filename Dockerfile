# COmposer stage
FROM composer:latest AS composer_stage
WORKDIR /app


COPY . .
RUN composer install --optimize-autoloader --no-dev

# Apache Stage

FROM php:8.2.16-apache
RUN mkdir -p /var/www/app
WORKDIR /var/www/app

# Copy files
COPY --from=composer_stage /app/ ./

RUN chown -R www-data storage
RUN chown -R www-data bootstrap/cache

COPY app.conf /etc/apache2/sites-available/

RUN a2ensite app.conf

RUN a2enmod rewrite