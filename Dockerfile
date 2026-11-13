FROM php:8.3-cli
RUN docker-php-ext-install pdo_mysql mysqli
WORKDIR /app
COPY . /app
ENV PORT=8080
EXPOSE 8080
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/app", "/app/router.php"]
