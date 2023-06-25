# Entregable proyecto

## Indice Sección 4

 Ingresar al [capitulo 17](#capitulo-17)

 Ingresar al [capitulo 18](#capitulo-18)

 Ingresar al [capitulo 19](#capitulo-19)




 ## Capitulo 17

En esta ocasión se realizó la inspección y creación de la base de datos, debido a que muchos de los pasos que se muestran en el video como el "migrate" ya los habiamos realizado en clases, actualmente poseemos la base de datos en una nueva maquina virtual y en el video se nos enseñó como acceder a la base de datos creadas con "user (nombre de la base de datos);" y saber cuantas tablas tenemos con "show tables;", ademas descargamos una aplicacion para el dominio de la base de datos en el futuro

### Ingreso y validacion de los datos en la aplicacion descargada

 ![Imagen](../Section4/images/video17/imagen8.PNG  "imagen de los cambios")

 ![Imagen](../Section4/images/video17/imagen9.PNG  "imagen de los cambios")

 ### Comandos usados en la maquina virtual de base de datos

 ![Imagen](../Section4/images/video17/imagen10.PNG  "imagen de los cambios")




## Capitulo 18

Para la realización de este ejercicio se creo la tabla en la aplicación de la base de datos, también pudimos ver las migraciones en el código. Tambien se pudo apreciar el uso de "php artisan migrate: rollback", el cual puede eliminar las tablas creadas y volver el batch a 1, y se advirtió sobre el uso de "php artisan migrate: fresh" debido a que puede borrar todos los datos de tus tablas.

### Base de datos

![Imagen](../Section4/images/video18/imagen11.PNG  "base de datos")

![Imagen](../Section4/images/video18/imagen12.PNG  "base de datos")

![Imagen](../Section4/images/video18/imagen13.PNG  "base de datos")




## capitulo 19

En esta ocasión se utilizaron los comando por consola para estudiar mejor la base de datos Primero en la maquina virtual de webserver nos dirigimos a la carpeta de la pagina y ahí realizamos los cambios correspondientes.

### Asignar datos a la tabla
Se le asignó un dato a cada elemento de la tabla como el nombre, email y la contraseña encriptada gracias al bcrypt, si se guardó correctamente lo podemos ver en la aplicación de la base de datos.

![Imagen](../Section4/images/video19/imagen14.PNG  "Asignación")

![Imagen](../Section4/images/video19/imagen15.PNG  "base de datos")


### Nuevos comandos

También se realizaron la ejecucion de algunos nuevos comandos cono el "User::find(1);", el cual permite encontrar al usuario con el id 1, también el comando "User::all();", el cual nos permite ver todos los usuarios que tenemos registrados en la base de datos o tambien el comando "$user ->pluck('name');" el cual nos permite encontrar todos nos nombres que se encuentren en la base de datos, pluck nos traerá todos los datos de lo que le solicitemos

![Imagen](../Section4/images/video19/imagen16.PNG  "Maquina virtual webserver")


![Imagen](../Section4/images/video19/imagen17.PNG  "Maquina virtual webserver")


![Imagen](../Section4/images/video19/imagen17.PNG  "Maquina virtual webserver")
