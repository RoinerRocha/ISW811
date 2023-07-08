# Entregable proyecto #3

## Indice Sección 11


 Ingresar al [capitulo 58](#capitulo-58)

 Ingresar al [capitulo 59](#capitulo-59)

 Ingresar al [capitulo 60](#capitulo-60)

 Ingresar al [capitulo 61](#capitulo-61)



 ## Capitulo 58

 En esta ocasión realizamos una cuenta en mailchimp para utilizar una apikey que nos provee ese sitio y se realizó una animación la cual da mas fluidez a la hora de ir de un sitio a otro en la pagina

 ### Estilos agregados 

 ![Imagen](../Section11/images/video58/imagen1.PNG  "Código")

 ### Se agrega el token de mailchimp al archivo .env

 ![Imagen](../Section11/images/video58/imagen2.PNG  "Código")

 ### Se configura apropiadamente el mailchimp en los servicios

 ![Imagen](../Section11/images/video58/imagen3.PNG  "Código")

 ### Se configura la ruta en el archivo web para agregar a un participante a una campaña y ver si la api funciona correctamente

 ![Imagen](../Section11/images/video58/imagen4.PNG  "Código")

 ### Resultado de la pagina (Si funciona)

 ![Imagen](../Section11/images/video58/imagen5.PNG  "Pagina")



## Capitulo 59

En este capitulo realizamos una migración, un factory  y un model para hacer los comentarios dinámicos, mostrando los comentarios que se encuentran en la base de datos, para esto realizamos lo siguiente:

### Con el comando php artisan:make model Comment -mfc para crear el model, el factory y el controller

![Imagen](../Section10/images/video53/imagen4.PNG  "Código")

### En la migración de los comentarios, debemos asignarle un constrained y un cascadeOnDelete para que se asocie al id del usuario y cuando el usuario se elimine, el comentario también(Usé un codigo que encotré en los comentarios debido a que el del video no me funcionó y no me mostraba los resultados en la base de datos)

![Imagen](../Section10/images/video53/imagen5.PNG  "Código")

### Con este nuevo codigo el resultado si se puede observar en la BD

![Imagen](../Section10/images/video53/imagen6.PNG  "Código")

### Se le agrega lo mismo a la migracion de los posts

![Imagen](../Section10/images/video53/imagen7.PNG  "Código")





