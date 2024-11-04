FROM php:7.4-apache

# نصب اکستنشن mysqli
RUN docker-php-ext-install mysqli
