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


