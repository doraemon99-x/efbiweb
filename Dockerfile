# Gunakan image PHP resmi dengan Apache
FROM php:7.4-apache

# Set direktori kerja
WORKDIR /var/www/html

# Copy semua file ke dalam direktori kerja di container
COPY . /var/www/html

# Install ekstensi PHP yang dibutuhkan
RUN docker-php-ext-install mysqli

# Ubah izin pada direktori agar Apache bisa menulis
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Perintah untuk menjalankan Apache di dalam container
CMD ["apache2-foreground"]
