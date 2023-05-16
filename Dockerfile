# Menggunakan image PHP-FPM sebagai base image
FROM php:latest

# Menyalin file PHP ke dalam container
COPY . /var/www/html

# Menentukan working directory
WORKDIR /var/www/html

# Menginstall dependensi yang diperlukan
RUN apt-get update && \
    apt-get install -y nginx && \
    docker-php-ext-install mysqli && \
    rm /etc/nginx/sites-enabled/default

# Menyalin konfigurasi Nginx ke dalam container
COPY nginx.conf /etc/nginx/sites-enabled/

# Menyalin konfigurasi PHP-FPM ke dalam container
COPY php-fpm.conf /usr/local/etc/php-fpm.d/

# Mengexpose port 80 (atau port lain yang sesuai dengan konfigurasi web server)
EXPOSE 80

# Menjalankan server PHP-FPM dan Nginx
CMD service php7.4-fpm start && nginx -g "daemon off;"
