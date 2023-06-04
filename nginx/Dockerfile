FROM nginx:1.23.4-alpine as nginx

#WORKDIR /var/www/html/

RUN apk add --no-cache \
    curl \
    && rm -rf /var/cache/apk/*

LABEL org.opencontainers.image.authors="Wojciech Dziedzic"

COPY nginx.conf /etc/nginx/conf.d/nginx.conf
#COPY ../data/index.php /usr/share/nginx/html/index.php

EXPOSE 6666

HEALTHCHECK --interval=30s --timeout=30s --start-period=5s --retries=3 \
    CMD [ "curl localhost:6666" ]

CMD ["nginx", "-g", "daemon off;"]