//Servicio duckdns
1ª Crearemos el fichero sh con el siguiente comando: 
sudo nano  /usr/local/bin/duckdns.sh 
#!/bin/bash
curl "https://www.duckdns.org/update?domains=cjristian&token=824b8032-42cd-4146-b096-7c89352b82d5"

2ª Crearemos el fichero del servicio /etc/systemd/system
[Unit]
Description=este es el servicio de duckdns
After=network.target
[Service]
Type=simple
User=duckdns
Group=duckdns
ExecStart=/usr/local/bin/duckdns.sh
[Install]
WantedBy=multi-user.target

3ªCrear usuario para securizarlo
sudo useradd --system --no-create-home --shell=/sbin/nologin duckdns

4ªY le ponemos los permisos al usuario.
sudo chown duckdns:duckdns /usr/local/bin/duckdns.sh
sudo chmod 500 /usr/local/bin/duckdns.sh

5ªPor último habilitaremos el servicio con los siguientes comandos.
sudo systemctl enable duckdns.service
sudo systemctl start duckdns.service

//COMANDO PARA INSTALAR DOCKER

# Add Docker's official GPG k
sudo apt-get update
sudo apt-get install ca-certificates curl
sudo install -m 0755 -d /etc/apt/keyrings
sudo curl -fsSL https://download.docker.com/linux/ubuntu/gpg -o /etc/apt/keyrings/docker.asc
sudo chmod a+r /etc/apt/keyrings/docker.asc

echo   "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.asc] https://download.docker.com/linux/ubuntu \
$(. /etc/os-release && echo "$VERSION_CODENAME") stable" |   sudo tee /etc/apt/sources.list.d/docker.list > /dev/null


sudo apt-get update
sudo apt-get install docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin


// URL para saber aplicaciones https://qloudea.com/blog/6-contenedores-docker-recomendados/

//app de docker
https://hub.docker.com/r/louislam/uptime-kuma
