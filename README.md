README
Pasos para habilitar la pagina y api:
1-Crear un codespaces
2-Dentro del codespaces, en la terminal ejectura el siguiente comando: sudo ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/rewrite.load
3-Una vez ejecutado el comando, ejecutar el siguiente: apache2ctl restart
4-Dentro de sqltools, crear una nueva conexion usando mariadb con los siguienetes datos:
    Connection name*: tecni
    database: db
    user:mariadb
    password:mariadb
5-Ejectura el script de la base de datos "tecni.sql"
6-Acceder a la dirrecion ubicada en el puerto 8080
    Desde aqui ya se tiene acceso a toda la apgina web

Para acceder al api dirigirnos a la siguiente dirrecion /api/api.php?table=usuarios
