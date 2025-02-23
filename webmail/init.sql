-- Arquivo: ./mysql/init.sql
CREATE DATABASE IF NOT EXISTS wordpress1;
CREATE DATABASE IF NOT EXISTS wordpress2;
CREATE DATABASE IF NOT EXISTS wordpress3;
CREATE DATABASE IF NOT EXISTS wordpress4;

CREATE USER IF NOT EXISTS 'wordpress1'@'%' IDENTIFIED BY 'senha123';
CREATE USER IF NOT EXISTS 'wordpress2'@'%' IDENTIFIED BY 'senha123';
CREATE USER IF NOT EXISTS 'wordpress3'@'%' IDENTIFIED BY 'senha123';
CREATE USER IF NOT EXISTS 'wordpress4'@'%' IDENTIFIED BY 'senha123';

GRANT ALL PRIVILEGES ON wordpress1.* TO 'wordpress1'@'%';
GRANT ALL PRIVILEGES ON wordpress2.* TO 'wordpress2'@'%';
GRANT ALL PRIVILEGES ON wordpress3.* TO 'wordpress3'@'%';
GRANT ALL PRIVILEGES ON wordpress4.* TO 'wordpress4'@'%';

FLUSH PRIVILEGES;