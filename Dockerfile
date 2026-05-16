FROM richarvey/nginx-php-fpm:latest

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

# IMPORTANT Laravel
ENV WEBROOT=/var/www/html/public
RUN touch /tmp/database.sqlite

RUN chmod -R 775 storage bootstrap/cache

RUN php artisan config:clear && php artisan config:cache

RUN mkdir -p database && touch database/database.sqlite

RUN chmod -R 777 database storage bootstrap/cache
