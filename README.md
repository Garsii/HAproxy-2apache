# Proyecto de Balanceo de Carga con HAProxy, Apache y MySQL

Este proyecto implementa un sistema de balanceo de carga utilizando HAProxy como proxy inverso, dos servidores Apache como backend y un servidor MySQL como base de datos con capacidad de continuar sin cortes si un servidor apache falla. El objetivo es distribuir el tráfico entrante entre los servidores
de backend y proporcionar una solución escalable y confiable para aplicaciones web.

## Arquitectura

- **HAProxy**: Distribuye el tráfico entre los servidores Apache.
- **Apache (Servidor 1 y Servidor 2)**: Sirven contenido web y se conectan a la base de datos MySQL.
- **MySQL**: Almacena los datos necesarios para la aplicación web, como usuarios y configuraciones.

---

## Características

- **Balanceo de carga**: HAProxy distribuye el tráfico entre los servidores Apache.
- **Persistencia de datos**: MySQL almacena los datos de la aplicación.
- **Conexión a base de datos**: Los servidores Apache pueden conectarse a MySQL para insertar y recuperar datos.
- **Compatibilidad con PHP**: Los servidores Apache tienen PHP instalado para ejecutar aplicaciones dinámicas.

---

## Requisitos previos

- Docker y Docker Compose instalados en tu sistema.
- Un editor de texto o IDE para modificar los archivos si es necesario.


## Datos a tener en cuenta

- La configuración de HAproxy tiene como IP configurada mi IP, para que funcione correctamente debe cambiarla y asegurarse de que los puertos que se exponen no están ocupados por otros servicios, de lo contrario los contenedores no se levenatarán.


## Estructura del proyecto


.
├── docker-compose.yml                    # Archivo de configuración para todos los servicios
├── haproxy/
   ├── docker.compose.yml                # Imagen personalizada para HAProxy
   └── haproxy.cfg                       # Configuración de HAProxy
   └── Dockerfile.apache                 # Imagen personalizada para Apache
   └── Dockerfile.haproxy                # Imagen personalizada de HAproxy
   └── espera-mysql.sh                   # script simple para establecer contacto con la base de datos
   └── init.sql                          # Creacion de la tabla usuarios para la base de datos
   └── html/
        └── index.html                   # Archivos de la aplicación web (PHP y HTML)
        └── insertar-usuarios.php
        └── info.php                     

