#!/bin/bash

MYSQL_HOST=mysql

echo "Haciendo ping a MySQL en $MYSQL_HOST..."
ping -c 4 $MYSQL_HOST

echo "Ping completado."
