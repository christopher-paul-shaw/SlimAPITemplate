FROM ubuntu
RUN apt-get update
RUN apt-get install -y supervisor vim
RUN apt-get install -y php7.4-cli php7.4-imagick php7.4-common php7.4-mysql
WORKDIR /var/www/public
