#!bin/bash
#stop http service

#sudo service httpd stop
sudo systemctl stop httpd.service

#limpa o repositório
sudo rm -rf /var/www/html/*

#clona o repositório

#atualiza o repositório
