# Gunakan image PHP 8.1 dengan Apache
FROM php:8.1-apache

# 1. Install dependensi sistem yang diperlukan Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libsqlite3-dev

# 2. Install ekstensi PHP (termasuk SQLite)
RUN docker-php-ext-install pdo pdo_sqlite mbstring exif pcntl bcmath gd

# 3. Aktifkan mod_rewrite Apache (PENTING untuk routing Laravel)
RUN a2enmod rewrite

# 4. Atur folder kerja
WORKDIR /var/www/html

# 5. Salin semua file dari laptop ke dalam container
COPY . .

# 6. Install Composer secara otomatis
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# 7. Beri izin akses folder (PENTING agar SQLite & Log bisa ditulis)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# 8. Konfigurasi Apache agar membaca folder /public sebagai landing page
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 9. Port standar web
EXPOSE 80

CMD ["apache2-foreground"]