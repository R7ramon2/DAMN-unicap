# DAMN-Unicap

Ambiente criado para teste de vulnerabilidades WEB da cadeira de Segurança da faculdade UNICAP;
Alunos: Ramon Ranieri e Felipe Azevedo
Professor: Almir

# Passo a passo para instalação do ambiente em um ambiente linux:
```
sudo apt update
sudo apt install apache2 -y
sudo apt install mysql-server -y
sudo apt install php libapache2-mod-php php-mysql -y
sudo ufw allow in "Apache Full"
```
Copiar o projeto para o path do servidor. Path padrão: /var/www/html
