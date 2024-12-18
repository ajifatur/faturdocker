CREATE DATABASE IF NOT EXISTS faturdocker;

-- Disamakan dengan MYSQL_USER dan MYSQL_PASSWORD di docker-compose.yml
GRANT ALL PRIVILEGES ON faturdocker.* TO 'user'@'%' IDENTIFIED BY 'password';

FLUSH PRIVILEGES;
