FROM php
RUN mkdir /app
WORKDIR /app
RUN apt-get update
RUN apt-get install -y git-core
RUN curl -o composer.phar https://getcomposer.org/composer.phar
RUN chmod +x composer.phar
ADD composer.json /app/composer.json
ADD composer.lock /app/composer.lock
RUN ./composer.phar install
ADD . /app/
