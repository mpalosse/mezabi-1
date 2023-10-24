FROM mysql:8

ENV MYSQL_DATABASE=mezabi-1 \
    MYSQL_USER=mezabi-1 \
    MYSQL_PASSWORD=mezabi-1 \
    MYSQL_ROOT_PASSWORD=root

ADD sql/mezabi-mvc.sql /docker-entrypoint-initdb.d

EXPOSE 3306