# Entregable proyecto #3

## Indice Sección 10


 Ingresar al [capitulo 52](#capitulo-52)

 Ingresar al [capitulo 53](#capitulo-53)

 Ingresar al [capitulo 54](#capitulo-54)

 Ingresar al [capitulo 55](#capitulo-55)



 ## Capitulo 52

 En este capitulo aprendimos sobre como construir la estructura para los comentarios de los posts, es asi que primero se construyo un componente y lo exportamos en la pagina de los posts y en el componente colocamos la información como un link el cual nos trae una foto cualquiera, también colocamos la información respectiva como el nombre de usuario, el comentario y la fecha de publicación

 ### Resultado del código

 ![Imagen](../Section10/images/video52/imagen1.PNG  "Código")

 ![Imagen](../Section10/images/video52/imagen2.PNG  "Código")

 ### Resultado de la pagina

 ![Imagen](../Section10/images/video52/imagen3.PNG  "Pagina")



## Capitulo 53

En este capitulo realizamos una migración, un factory  y un model para hacer los comentarios dinámicos, mostrando los comentarios que se encuentran en la base de datos, para esto realizamos lo siguiente:

### Con el comando php artisan:make model Comment -mfc para crear el model, el factory y el controller

![Imagen](../Section10/images/video53/imagen4.PNG  "Código")

### En la migración de los comentarios, debemos asignarle un constrained y un cascadeOnDelete para que se asocie al id del usuario y cuando el usuario se elimine, el comentario también(Usé un codigo que encotré en los comentarios debido a que el del video no me funcionó y no me mostraba los resultados en la base de datos)

![Imagen](../Section10/images/video53/imagen5.PNG  "Código")

### Con este nuevo codigo el resultado si se puede observar en la BD

![Imagen](../Section10/images/video53/imagen6.PNG  "Código")

### Se le agrega lo mismo a la migracion de los posts

![Imagen](../Section10/images/video53/imagen7.PNG  "Código")

## Capitulo 54

Esta vez se implementaron los comentarios dinamicos en un post publicado

### Se Configura correctamente el factory de los comentarios

![Imagen](../Section10/images/video54/imagen8.PNG  "Código")

### Se Agregaron nuevas funciones en el archivo post para los comentarios

![Imagen](../Section10/images/video54/imagen9.PNG  "Código")

### Se Configura correctamente el comment.php para encontrar los datos de los usuarios y hacer post de los comentarios

![Imagen](../Section10/images/video54/imagen10.PNG  "Código")

### Se Configura correctamente la vista del post para mostrar los comentarios

![Imagen](../Section10/images/video54/imagen11.PNG  "Código")

### Se Configura un poco las fotos que se muestran

![Imagen](../Section10/images/video54/imagen12.PNG  "Código")

### Resultado de la pagina

![Imagen](../Section10/images/video54/imagen13.PNG  "Código")

## Capitulo 55


