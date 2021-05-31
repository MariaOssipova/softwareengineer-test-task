FROM composer as builder

COPY composer.* ./
RUN composer install
RUN composer dump-autoload

FROM php:7.4-apache
