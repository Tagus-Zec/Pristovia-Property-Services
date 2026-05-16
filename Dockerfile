FROM richarvey/nginx-php-fpm:latest

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN cp .env.example .env || true

RUN php artisan key:generate || true

RUN chmod -R 777 storage bootstrap/cache

EXPOSE 80
