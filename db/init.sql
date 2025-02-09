CREATE DATABASE wordpress1;
CREATE USER 'wordpress1'@'%' IDENTIFIED BY 'senha123';
GRANT ALL PRIVILEGES ON wordpress1.* TO 'wordpress1'@'%';

CREATE DATABASE wordpress2;
CREATE USER 'wordpress2'@'%' IDENTIFIED BY 'senha123';
GRANT ALL PRIVILEGES ON wordpress2.* TO 'wordpress2'@'%';

FLUSH PRIVILEGES;