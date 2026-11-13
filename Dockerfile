FROM php:8.3-apache
RUN docker-php-ext-install pdo_mysql mysqli && a2dismod -f mpm_event mpm_worker && a2enmod mpm_prefork rewrite
RUN sed -ri 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html
ENV PORT=8080
EXPOSE 8080
CMD ["sh", "-c", "sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf; sed -i 's/:80>/:8080>/' /etc/apache2/sites-available/000-default.conf; exec apache2-foreground"]
