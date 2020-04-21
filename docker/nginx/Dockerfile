FROM nginx:latest
MAINTAINER Alex <alex@melentev.net>

COPY ./conf/fastcgi_params /etc/nginx/fastcgi_params
COPY ./conf/conf.d /etc/nginx/conf.d

WORKDIR /app