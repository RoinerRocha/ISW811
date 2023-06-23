# Entregable proyecto

## Indice Sección 3

 Ingresar al [capitulo 14](#capitulo-14)

 Ingresar al [capitulo 6](#capitulo-6)

 Ingresar al [capitulo 7](#capitulo-7)

 Ingresar al [capitulo 8](#capitulo-8)

 Ingresar al [capitulo 9](#capitulo-9)

 Ingresar al [capitulo 10](#capitulo-10)

 Ingresar al [capitulo 11](#capitulo-11)

 Ingresar al [capitulo 12](#capitulo-12)

 Ingresar al [capitulo 13](#capitulo-13)


 ## capitulo 14

 En este aprendizaje, se logró observar que el la manipulación del html mediante un archivo .blade.php puede llegar a resultar mucho mas sencillo que como si el archivo fuera solo .php, gracias a esto se puede simplificar muchísimo el código a la hora de programar 

 ![Imagen](../Section3/images/video14/imagen1.PNG  "imagen de los cambios")

 ![Imagen](../Section3/images/video14/imagen2.PNG  "imagen de los cambios")


## Capitulo 6

### Editar la pagina
En esta parte editamos la pagina de laravel y colocamos un "hola mundo"

![Imagen](../Section2/images/video6/imagen8.PNG  "Imagen del código")

imagen de la pagina
![Imagen](../Section2/images/video6/imagen9.PNG  "Imagen del código")


### Modificacion del css
Primero se debe crear un archivo llamado app.css en el folder de public
![Imagen](../Section2/images/video6/imagen10.PNG  "Imagen del folder")

Ahora agregamos los cambios al archivo css
![Imagen](../Section2/images/video6/imagen11.PNG  "Imagen del código css")


Ahora enlazamos el link del css en el html de la siguiente forma
![Imagen](../Section2/images/video6/imagen12.PNG  "Imagen del código html")


### Agregar el js
Agregamos el js de la misma forma en la que agregamos el css
![Imagen](../Section2/images/video6/imagen13.PNG  "Imagen del archivo js")

Ahora modificamos el js de la siguiente forma

![Imagen](../Section2/images/video6/imagen14.PNG  "Imagen de la modificación del js")

y lo enlazamos de la siguiente manera

![Imagen](../Section2/images/video6/imagen15.PNG  "Imagen de enlace del js")

Y a la hora de probarlo nos saltará la siguiente alerta

![Imagen](../Section2/images/video6/imagen16.PNG  "Imagen de la alerta")






## Capitulo 7

### Cambiar la vista de la pagina
 Ahora se debe cambiar cual es la pagina que se desea observar en el archivo web

![Imagen](../Section2/images/video7/imagen17.PNG  "Cambio de pagina")

Una vez realizado el cambio se debe verificar, es normal que la pagina no se encuentre debido a que no esta creada aun 

![Imagen](../Section2/images/video7/imagen%2018.PNG "not found")

Ahora a la view de welcome la editamos y le cambiamos el nombre a "posts"

![Imagen](../Section2/images/video7/imagen18.PNG  "Cambio de nombre")

Y comprobamos que la pagina siga funcionando
![Imagen](../Section2/images/video7/imagen19.PNG  "Funcionamiento")

Ahora se debe eliminar el archivo js que habíamos creado anteriormente para evitar retrasos

![Imagen](../Section2/images/video7/imagen20.PNG  "Eliminación")

Debemos actualizar el css para la pagina y ver la pagina para ver si todo funciona correctamente

![Imagen](../Section2/images/video7/imagen21.PNG  "Cambio de css")

![Imagen](../Section2/images/video7/imagen22.PNG  "Verificación")

Ahora debemos crear un "article" con un titulo y un párrafo y observar como se ve el resultado final

![Imagen](../Section2/images/video7/imagen23.PNG "Nuevos elementos")

![Imagen](../Section2/images/video7/imagen24.PNG  "Resultado")

Ahora se deben agregar mas cambios al css y observar el resultado

![Imagen](../Section2/images/video7/imagen25.PNG  "Cambio de css")

![Imagen](../Section2/images/video7/imagen26.PNG  "Resultado")


Ahora se deben agregar mas artículos y agregarle estilos

![Imagen](../Section2/images/video7/imagen27.PNG  "Añadido article")

![Imagen](../Section2/images/video7/imagen28.PNG  "Resultado")

![Imagen](../Section2/images/video7/imagen29.PNG  "Configuración css")

![Imagen](../Section2/images/video7/imagen30.PNG  "Resultado con css")

Ahora se debe añadir mas artículos y arreglarlos con css

![Imagen](../Section2/images/video7/imagen31.PNG  "CSS añadido")

![Imagen](../Section2/images/video7/imagen32.PNG  "Resultado")

En el archivo de web se debe crear una nueva vista, vista la cual crearemos en la carpeta donde esta "posts", en la nueva vista realizaremos una copia del html de la otra pagina

![Imagen](../Section2/images/video7/imagen33.PNG  "Nueva Ruta")

![Imagen](../Section2/images/video7/imagen34.PNG  "html copiado")

Se le debe agregar un enlace a la pagina actual para que nos lleve a la nueva pagina, la cual no funcionará debido a que no ha sido creada
![Imagen](../Section2/images/video7/imagen35.PNG  "resultado")

![Imagen](../Section2/images/video7/imagen36.PNG  "Not found")

Una vez creada la nueva pagina se le debe agregar un "href" a los titulos para que nos lleven a la pagina anterior

![Imagen](../Section2/images/video7/imagen37.PNG  "Nuevas etiquetas")


![Imagen](../Section2/images/video7/imagen38.PNG  "Resultado")

Tambien se le agregó un enlace en la parte inferior

![Imagen](../Section2/images/video7/imagen39.PNG  "Resultado")

![Imagen](../Section2/images/video7/imagen40.PNG  "Código")





## Capitulo 8

Para este capitulo se modificó las rutas en el archivo de "web" de una forma eficaz para que si en el enlace colocamos el nombre de nuestra pagina, este aparezca, en cambio si no existe nos manda a la pagina principal


![Imagen](../Section2/images/video8/imagen41.PNG  "Código")


Para que la anterior configuración de ruta funcione, se crearon 3 paginas html diferentes en un nuevo folder llamado posts, los cuales los llama la pagina de post.blade.php con el siguiente código

![Imagen](../Section2/images/video8/imagen42.PNG  "Nuevas paginas")

![Imagen](../Section2/images/video8/imagen43.PNG  "Nuevas paginas")

Una vez realizado y creado los cambios, es importante asegurarse que todo se encuentre bien escrito y ver que funcione, para esto agregamos un poco de información a las nuevas paginas html y comprobamos el funcionamiento

![Imagen](../Section2/images/video8/imagen44.PNG  "Código")

![Imagen](../Section2/images/video8/imagen45.PNG  "Resultado")




## Capitulo 9

En este capitulo se realizó una forma mas ordenada que detectar las paginas que se crean que contengan caracteres especiales o números, también se puede ver un código especial "ddd" el cual sirve para ver los fallos en la pagina

![Imagen](../Section2/images/video9/imagen46.PNG  "código")

![Imagen](../Section2/images/video9/imagen47.PNG  "Resultado")


## Capitulo 10

Esta vez lo que se realizó fue el aprendizaje del uso de cache para ver datos guardados cada cierta cantidad de tiempo 

![Imagen](../Section2/images/video10/imagen48.PNG  "Resultado")

![Imagen](../Section2/images/video10/imagen49.PNG  "Código de uso del cache")


## Capitulo 11

En este capitulo se usaron las clases en el folder de Models y sobre las nuevas formas de formas de mostrar todos los posts en una misma pagina y no en paginas diferentes con un array

![Imagen](../Section2/images/video11/imagen50.PNG  "Código de la clase Post")

Se configuraron las rutas de forma adecuada para que fueran realizadas con las clases que se crearon anteriormente 

![Imagen](../Section2/images/video11/imagen51.PNG  "Rutas configuradas")

En la view de posts se realizó un foreach gracias a las clases para lograr que las paginas se muestren todas en una misma

![Imagen](../Section2/images/video11/imagen52.PNG  "Código de la pagina")

![Imagen](../Section2/images/video11/imagen53.PNG  "Código Resultado")


## Capitulo 12

Es esta ocasión en el archivo "web" se modificó varias veces pero el resultado final del archivo fue que el archivo obtuvo una funcion capaz de encontrar la pagina que solicitamos mediante un "find" que recibe como parametro el "slug" el cual es un metadata el cual contiene nombre de nuestra pagina.

![Imagen](../Section2/images/video12/imagen54.PNG  "Código del archivo web")

El meta data que se encargará de localizar nuestra pagina se encuentra en cada una de los html que creamos. 


![Imagen](../Section2/images/video12/imagen55.PNG  "Código del metadata")

El archivo "Post.php" fue el que mas se vio modificado debido a que gracias que es una clase, podemos tratar los titulos y las etiquetas del html como objetos, y asi que la clase navegue y cuando encuentre los datos correspondientes, los muestra

![Imagen](../Section2/images/video12/imagen56.PNG  "Código de Post")

![Imagen](../Section2/images/video12/imagen56-2.PNG  "Código de Post")


Por ultimo, las vistas tambien vieron reflejados cambios pero con el único fin de que muestre la información solicitada mediante el código correspondiente 


![Imagen](../Section2/images/video12/imagen57.PNG  "Imagen de las vistas")

![Imagen](../Section2/images/video12/imagen58.PNG  "Imagen de las vistas")



## Capitulo 13

Para este capitulo aprendí sobre como ver la información del caché de nuestra pagina en con el siguiente comando

![Imagen](../Section2/images/video13/imagen59.PNG  "Imagen del comando")

![Imagen](../Section2/images/video13/imagen60.PNG  "Imagen de la vista del comando")


También aprendí sobre como se puede eliminar el caché y ver si efectivamente se eliminó con el siguiente comando


![Imagen](../Section2/images/video13/imagen61.PNG  "Imagen del resultado")

También se puede modificar el caché con los siguientes comandos realizados

![Imagen](../Section2/images/video13/imagen62.PNG  "Imagen de los comandos")

En el código no se realizó un gran cambio, unicamente se modificó el codigo para que los posts
que realizaramos fueran en el orden de las fechas que le agregamos en el metadata, el resultado fue el siguiente.

Con el comando "->sortByDesc('date');" se ordenan los post en orden de fecha descendente.

![Imagen](../Section2/images/video13/imagen63.PNG  "Imagen del código")

Y el resultado de las paginas es el siguiente

![Imagen](../Section2/images/video13/imagen64.PNG  "Imagen del código")

![Imagen](../Section2/images/video13/imagen65.PNG  "Imagen de la pagina")