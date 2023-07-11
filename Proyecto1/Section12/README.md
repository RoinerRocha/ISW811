# Entregable proyecto #3

## Indice Sección 12


 Ingresar al [capitulo 62](#capitulo-62)

 Ingresar al [capitulo 63](#capitulo-63)

 Ingresar al [capitulo 64](#capitulo-64)

 Ingresar al [capitulo 65](#capitulo-65)

 Ingresar al [capitulo 66](#capitulo-66)

 Ingresar al [capitulo 67](#capitulo-67)

 Ingresar al [capitulo 68](#capitulo-68)

 Ingresar al [capitulo 69](#capitulo-69)



 ## Capitulo 62

 En esta aprendimos sobre como hacer que un usuario obtenga el rol de administrador 

 ### Primero debemos agregar middleware del archivo administrador en el archivo del kernel

 ![Imagen](../Section12/images/video62/imagen1.PNG  "Código")

 ### Se codifica el archivo del administrador de forma que solo deje acceder al usuario que le asignemos

 ![Imagen](../Section12/images/video62/imagen2.PNG  "Código")

 ### Configuramos la vista para el administrador y ver si todo funciona bien

 ![Imagen](../Section12/images/video62/imagen3.PNG  "Código")

 ### Se configura el controlador del post con la vista que creamos

 ![Imagen](../Section12/images/video62/imagen4.PNG  "Código")

 ### Se configura la ruta adecuadamente con el middleware que añadimos

 ![Imagen](../Section12/images/video62/imagen5.PNG  "Código")

 ### Resultado

 ![Imagen](../Section12/images/video62/imagen6.PNG  "Código")

## Capitulo 63

En este capitulo creamos un formulario para hacer un post y se le añadio la funcionalidad respectiva

### Se crea un formulario para crear posts y se agregan las categorias y los espacios asignados

![Imagen](../Section12/images/video63/imagen7.PNG  "Código")

### Asiganmos los campos del controlador para publicarlos en los posts

![Imagen](../Section12/images/video63/imagen8.PNG  "Código")

### Creamos la ruta para que se almacenen los datos que el usuario inserte en el formulario

![Imagen](../Section12/images/video63/imagen9.PNG  "Código")

### Resultados

![Imagen](../Section12/images/video63/imagen10.PNG  "Código")

![Imagen](../Section12/images/video63/imagen11.PNG  "Código")

## Capitulo 64

Para este capitulo aprendimos sobre como colocar imagenes y insertarlas en la base de datos de la siguiente forma

### Agregamos el espacio para agregar la foto que deseamos insertar

![Imagen](../Section12/images/video64/imagen12.PNG  "Código")

### En el archivo de filesystem cambiamos un poco el codigo para que estas se almacenen en el folder de public y lo mismo lo hacemos en el archivo .env

![Imagen](../Section12/images/video64/imagen13.PNG  "Código")

![Imagen](../Section12/images/video64/imagen14.PNG  "Código")

### En en controlador del post, le asignamos el espacio para agregar la imagen, lo mismo hacemos en el archivo de la migracion 

![Imagen](../Section12/images/video64/imagen15.PNG  "Código")

![Imagen](../Section12/images/video64/imagen16.PNG  "Código")

### Se configura la ruta para mostrar las imagenes en la pagina

![Imagen](../Section12/images/video64/imagen17.PNG  "Código")

### Resultado de las paginas con las imagenes

![Imagen](../Section12/images/video64/imagen18.PNG  "Código")

![Imagen](../Section12/images/video64/imagen19.PNG  "Código")

## Capitulo 65 
Para este capitulo unicamente se limpio un poco mas el codigo del archivo create, moviendo los componentes del formulario como el body, title, entre otros, a un archivo por aparte para solo importarlo en el archivo de la pagina

### Codigo modificado para asignarle el $name el cual nos detecta el dato que queremos insertarle

![Imagen](../Section12/images/video65/imagen21.PNG  "Código")

![Imagen](../Section12/images/video65/imagen22.PNG  "Código")

![Imagen](../Section12/images/video65/imagen23.PNG  "Código")

![Imagen](../Section12/images/video65/imagen24.PNG  "Código")

![Imagen](../Section12/images/video65/imagen25.PNG  "Código")

### Resultado final

![Imagen](../Section12/images/video65/imagen26.PNG  "Código")

## Capitulo 66

En este capitulo realizamos modificaciones al panel de realizar un post, dandole un nuevo diseño

### Se realizan diferentes componentes y se importan en el lugar de los archivos correspondientes, dejando asi el codigo de la pagina principal, mucho mas limpio y agradable a la vista

![Imagen](../Section12/images/video66/imagen27.PNG  "Código")

![Imagen](../Section12/images/video66/imagen28.PNG  "Código")

![Imagen](../Section12/images/video66/imagen29.PNG  "Código")

![Imagen](../Section12/images/video66/imagen30.PNG  "Código")

### Codigo de la pagina 

![Imagen](../Section12/images/video66/imagen31.PNG  "Código")

### Codigo del dropdown

![Imagen](../Section12/images/video66/imagen32.PNG  "Código")

### Codigo de la pagina

![Imagen](../Section12/images/video66/imagen33.PNG  "Código")


## Capitulo 67

Para este capitulo realizamos una modificacion a la vista de moderador, logrando asi poder editar los posts, verlos y eliminarlos. Entre los cambios mas importantes podemos encontrar

### Creacion de los routes para lograr editar, eliminar o movernos a las paginas de editar el contenido

![Imagen](../Section12/images/video67/imagen34.PNG  "Código")

### Crear las funciones que nos permitirán modificar o eliminar  los posts que creemos

![Imagen](../Section12/images/video67/imagen35.PNG  "Código")

### Creacion de un index para ver todos los posts que hay hasta el momento y las opciones para editarlo o eliminarlo

![Imagen](../Section12/images/video67/imagen36.PNG  "Código")

### Creacion de la pagina para editar el post

![Imagen](../Section12/images/video67/imagen37.PNG  "Código")

### Resltados del dashboard

![Imagen](../Section12/images/video67/imagen38.PNG  "Código")

### Se edita un articulo 

![Imagen](../Section12/images/video67/imagen39.PNG  "Código")

### En la pagina principal podremos verlo ya editado

![Imagen](../Section12/images/video67/imagen40.PNG  "Código")



 







