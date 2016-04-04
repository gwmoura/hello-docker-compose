FROM php
RUN mkdir /app
WORKDIR /app
RUN wget https://getcomposer.org/composer.phar
ADD composer.json /app/composer.json
ADD composer.lock /app/composer.lock
RUN ./composer.phar install
ADD . /app/
