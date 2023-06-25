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


![Imagen](../Section4/images/video19/imagen18.PNG  "Maquina virtual webserver")




## Capitulo 20

En esta ocasión se creo una tabla para los posts con su información correspondiente, luego, se eliminaron los html debido a que ya no los íbamos a ocupar gracias a que los post los creamos en la bases de datos, se modificaron las rutas para traer la información de la base de datos y mostrarla en nuestras paginas gracias a que se busca la información en base al id.

![Imagen](../Section4/images/Video20/imagen20.PNG  "Maquina virtual webserver")

![Imagen](../Section4/images/Video20/imagen21.PNG  "Maquina virtual webserver")

### Resultado de la pagina

![Imagen](../Section4/images/Video20/imagen22.PNG  "Pagina")

![Imagen](../Section4/images/Video20/imagen23.PNG  "Pagina")

### Modificación del código de las rutas y las views

![Imagen](../Section4/images/Video20/imagen24.PNG  "Código")

![Imagen](../Section4/images/Video20/imagen25.PNG  "Código")

### Como crear un nuevo model usando la console

![Imagen](../Section4/images/Video20/imagen26.PNG  "Consola")

![Imagen](../Section4/images/Video20/imagen27.PNG  "Consola")






## Capitulo 21

En esta ocasión se realizó un arreglo a la estructura del html usando algunos de los comandos que se vieron anteriormente, Es importante corregir el código de las views debido a que si no se hace apropiadamente, el html no se renderizará adecuadamente

###  Agregado de la etiqueta <p> para un mejor espaciado

![Imagen](../Section4/images/video21/imagen28.PNG  "Consola")

### Agregado de la etiqueta strong

![Imagen](../Section4/images/Video21/imagen29.PNG  "Consola")

### Resultado de la pagina

![Imagen](../Section4/images/Video21/imagen30.PNG  "Pagina")

### Configuracion de las vistas 
Los signos de !! se agregan con el fin de tener un mejor control sobre el html, permitiendo asi que no se produzcan errores como por ejemplo que las etiquetas se vean en nuestra pagina.


![Imagen](../Section4/images/Video21/imagen30.PNG  "Pagina")



## Capitulo 22



