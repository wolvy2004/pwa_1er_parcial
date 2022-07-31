# FINAL ***PWA***

**Ejecutar**
# Levantar el contenedor
docker-compose up -d
# Actualizar la carpeta Vendor para que funcione Yii
docker-compose exec APPServer composer update
# Dar permisos
chmod +777 src/ -R
# Hacer las migraciones necesarias: ejecutar
./bin/yii migrate

