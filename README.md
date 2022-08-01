# FINAL ***PWA 2022***


## Levantar el contenedor
docker-compose up -d
## Actualizar la carpeta Vendor para que funcione Yii
docker-compose exec APPServer composer update
## Dar permisos necesarios 
sudo chmod +777 src/ -R
## Hacer las migraciones necesarias:
1. sudo  chmod +777 ./bin/yii.sh migrate
1. ./bin/yii.sh migrate

