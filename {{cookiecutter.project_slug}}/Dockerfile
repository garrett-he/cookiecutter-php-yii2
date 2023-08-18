FROM composer:lts as builder

WORKDIR /app-build

COPY ./bin ./bin
COPY ./config ./config
COPY ./public ./public
COPY ./src ./src
COPY ./composer.* .

RUN composer install

FROM php:fpm-alpine

COPY --from=builder /app-build /app

EXPOSE 9000
