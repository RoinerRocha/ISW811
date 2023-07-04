# Entregable proyecto #2

## Indice Sección 9


 Ingresar al [capitulo 45](#capitulo-45)

 Ingresar al [capitulo 46](#capitulo-46)

 Ingresar al [capitulo 47](#capitulo-47)

 Ingresar al [capitulo 48](#capitulo-48)


 ## Capitulo 45

 En esta ocasión se realizó un registro de usuario, el cual añadirá los datos del usuario como el nombre, el username, email y contraseña

 ### Primero se debe crear las rutas, una para visualizar el formulario y la otra para almacenar los datos

 ![Imagen](../Section9/images/video45/imagen1.PNG  "Código")

 ### Se colocó una validación de datos, los cuales serán ingresados a la base de datos normal, ademas de agregarle un minimo y maximo de caracteres, si estos requisitos no se cumplen, entonces nos rediccionará al formulario de vuelta

 ![Imagen](../Section9/images/video45/imagen2.PNG  "Código")

 ### Se configuró el formulario para que el usuario inserte los datos, ademas el @csrf nos da un token el cual nos permite viajar a otra pagina al insertar el boton de registrarse

 ![Imagen](../Section9/images/video45/imagen3.PNG  "Código")

 ### Se configuró el user php para que los datos puedan ser insertados en la base de datos

 ![Imagen](../Section9/images/video45/imagen4.PNG  "codigo")

 ### Resultado de la pagina

 ![Imagen](../Section9/images/video45/imagen5.PNG  "pagina")

 ### Resultado de la base de datos

 ![Imagen](../Section9/images/video45/imagen6.PNG  "BD")


 ## Capitulo 46

 En esta ocasión el único nuevo cambio fue realizar la contraseña encriptada

 ### Configuración en el modelo de usuario para encriptar la contraseña
 
 ![Imagen](../Section9/images/video46/imagen7.PNG  "codigo")

 ### Resultado de la base de datos con las ultimas inserciones encriptadas

 ![Imagen](../Section9/images/video46/imagen8.PNG  "codigo")

 ## Capitulo 47

 Para esta ocasión, se modificó el formulario, haciendo que cuando un error ocurra, se nos muestre que error fue, ya sea que se intentó agregar un correo ya existente, que la contraseña no cumpla con los caracteres necesarios, entre otros

 ![Imagen](../Section9/images/video47/imagen9.PNG  "pagina")

 ### Se le agregó un unique al username y email para evitar datos repetidos en la base de datos y que esto provoque una caida de la pagina 

 ![Imagen](../Section9/images/video47/imagen10.PNG  "codigo")

 ### Se le agregó el @error para que cuando el usuario inserte un dato mal, pueda ser visible el porque esta mal

 ![Imagen](../Section9/images/video47/imagen11.PNG  "codigo")


 ## Capitulo 48

 En este capitulo, logramos comprender sobre como crear un aviso el cual le indique al usuario que se logró registrar con exito

 ### Se agrega la clave y el mensaje para que cuando sea disparado el aviso

 ![Imagen](../Section9/images/video48/imagen13.PNG  "codigo")

 ### Se agrega el componente a la vista

 ![Imagen](../Section9/images/video48/imagen14.PNG  "codigo")

 ### En el componente se debe agregar el siguiente codigo, el cual le permite aparecer durante 4 segundos en la parte inferior derecho

 ![Imagen](../Section9/images/video48/imagen15.PNG  "codigo")

 ### Resultado (esquina inferior derecha)

 ![Imagen](../Section9/images/video48/imagen16.PNG  "codigo")

 ## Capitulo 49

 En este capitulo se implementó un sistema de logout y que cuando el usuario se encuentre logueado el boton de registrarse desaparezca, de igual forma cuando el usuario ya no se encuentra logueado se le mostrará el boton de registrarse y loguearse.

 ### Configuración del sitio web para que se muestre diferentes links dependiendo de la situación

 ![Imagen](../Section9/images/video49/imagen17.PNG  "codigo")

 ### Se configura el controlador del inicio de sesión, para cuando dejemos la sesion, nos dirijamos a la pagina principal

 ![Imagen](../Section9/images/video49/imagen18.PNG  "codigo")

 ### Lo mismo se hace con el siguiente archivo

 ![Imagen](../Section9/images/video49/imagen19.PNG  "codigo")

 ### En el archivo web se agrega la clase destroy, la cual nos permite dejar de estar con la sesion iniciada

 ![Imagen](../Section9/images/video49/imagen20.PNG  "codigo")

 ### Se agrega el logueo del usuario para que nos pueda permitir tener una sesion iniciada

 ![Imagen](../Section9/images/video49/imagen21.PNG  "codigo")

 ### Resultado de la pagina

 ![Imagen](../Section9/images/video49/imagen22.PNG  "codigo")

 ## Capitulo 50

 


