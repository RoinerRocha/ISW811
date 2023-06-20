# Entregable proyecto

 ## capitulo 5

 ### Iniciar la maquina
 Primero iniciamos la maquina virtual donde tenemos alojados los sitios que creamos
 ```bash
cd /
cd D
cd isw811
cd VMs
cd webserver
vagrant up
```

### Editar un poco el documento 
Editar un poco el documento welcome.blade.php con un bold para ver si la pagina funciona correctamente, agregamos la etiqueta "<strong>" en la linea 71.

Antes del cambio
![Imagen](../Proyecto1/images/video5/imagen1.PNG  "imagen antes del cambio")

Se agrega la etiqueta
![Imagen](../Proyecto1/images/video5/imagen2.PNG  "imagen de la etiqueta")


Visualización después del cambio en la parte de Laracasts
![Imagen](../Proyecto1/images/video5/imagen3.PNG  "imagen con el cambio")

### Ver las rutas 
Para poner a prueba las rutas debemos ir al documento web.php y primero debemos comentar la linea 16 hasta la 18 para saber si funciona todo bien.

modificando la ruta
![Imagen](../Proyecto1/images/video5/imagen4.PNG  "imagen de la modificación ")

Pagina con la ruta modificada
![Imagen](../Proyecto1/images/video5/imagen5.PNG  "imagen de la pagina modificada")

Y si modificamos las rutas, podemos acceder desde las rutas que modificamos y retornando la vista que deseemos 

![Imagen](../Proyecto1/images/video5/imagen6.PNG  "imagen del código modificado")

![Imagen](../Proyecto1/images/video5/imagen7.PNG  "imagen de laravel modificada")







## Capitulo 6

### Editar la pagina
En esta parte editamos la pagina de laravel y colocamos un "hola mundo"

![Imagen](../Proyecto1/images/video6/imagen8.PNG  "Imagen del código")

imagen de la pagina
![Imagen](../Proyecto1/images/video6/imagen9.PNG  "Imagen del código")


### Modificacion del css
Primero se debe crear un archivo llamado app.css en el folder de public
![Imagen](../Proyecto1/images/video6/imagen10.PNG  "Imagen del folder")

Ahora agregamos los cambios al archivo css
![Imagen](../Proyecto1/images/video6/imagen11.PNG  "Imagen del código css")


Ahora enlazamos el link del css en el html de la siguiente forma
![Imagen](../Proyecto1/images/video6/imagen12.PNG  "Imagen del código html")


### Agregar el js
Agregamos el js de la misma forma en la que agregamos el css
![Imagen](../Proyecto1/images/video6/imagen13.PNG  "Imagen del archivo js")

Ahora modificamos el js de la siguiente forma

![Imagen](../Proyecto1/images/video6/imagen14.PNG  "Imagen de la modificación del js")

y lo enlazamos de la siguiente manera

![Imagen](../Proyecto1/images/video6/imagen15.PNG  "Imagen de enlace del js")

Y a la hora de probarlo nos saltará la siguiente alerta

![Imagen](../Proyecto1/images/video6/imagen16.PNG  "Imagen de la alerta")






## Capitulo 7

### Cambiar la vista de la pagina
 Ahora se debe cambiar cual es la pagina que se desea observar en el archivo web

![Imagen](../Proyecto1/images/video7/imagen17.PNG  "Cambio de pagina")

Una vez realizado el cambio se debe verificar, es normal que la pagina no se encuentre debido a que no esta creada aun 

![Imagen](../Proyecto1/images/video7/imagen%2018.PNG "not found")

Ahora a la view de welcome la editamos y le cambiamos el nombre a "posts"

![Imagen](../Proyecto1/images/video7/imagen18.PNG  "Cambio de nombre")

Y comprobamos que la pagina siga funcionando
![Imagen](../Proyecto1/images/video7/imagen19.PNG  "Funcionamiento")

Ahora se debe eliminar el archivo js que habíamos creado anteriormente para evitar retrasos

![Imagen](../Proyecto1/images/video7/imagen20.PNG  "Eliminación")

Debemos actualizar el css para la pagina y ver la pagina para ver si todo funciona correctamente

![Imagen](../Proyecto1/images/video7/imagen21.PNG  "Cambio de css")

![Imagen](../Proyecto1/images/video7/imagen22.PNG  "Verificación")

Ahora debemos crear un "article" con un titulo y un párrafo y observar como se ve el resultado final

![Imagen](../Proyecto1/images/video7/imagen23.PNG "Nuevos elementos")

![Imagen](../Proyecto1/images/video7/imagen24.PNG  "Resultado")

Ahora se deben agregar mas cambios al css y observar el resultado

![Imagen](../Proyecto1/images/video7/imagen25.PNG  "Cambio de css")

![Imagen](../Proyecto1/images/video7/imagen26.PNG  "Resultado")


Ahora se deben agregar mas artículos y agregarle estilos

![Imagen](../Proyecto1/images/video7/imagen27.PNG  "Añadido article")

![Imagen](../Proyecto1/images/video7/imagen28.PNG  "Resultado")

![Imagen](../Proyecto1/images/video7/imagen29.PNG  "Configuración css")

![Imagen](../Proyecto1/images/video7/imagen30.PNG  "Resultado con css")

Ahora se debe añadir mas artículos y arreglarlos con css

![Imagen](../Proyecto1/images/video7/imagen31.PNG  "CSS añadido")

![Imagen](../Proyecto1/images/video7/imagen32.PNG  "Resultado")

En el archivo de web se debe crear una nueva vista, vista la cual crearemos en la carpeta donde esta "posts", en la nueva vista realizaremos una copia del html de la otra pagina

![Imagen](../Proyecto1/images/video7/imagen33.PNG  "Nueva Ruta")

![Imagen](../Proyecto1/images/video7/imagen34.PNG  "html copiado")

Se le debe agregar un enlace a la pagina actual para que nos lleve a la nueva pagina, la cual no funcionará debido a que no ha sido creada
![Imagen](../Proyecto1/images/video7/imagen35.PNG  "resultado")

![Imagen](../Proyecto1/images/video7/imagen36.PNG  "Not found")

Una vez creada la nueva pagina se le debe agregar un "href" a los titulos para que nos lleven a la pagina anterior

![Imagen](../Proyecto1/images/video7/imagen37.PNG  "Nuevas etiquetas")


![Imagen](../Proyecto1/images/video7/imagen38.PNG  "Resultado")

Tambien se le agregó un enlace en la parte inferior

![Imagen](../Proyecto1/images/video7/imagen39.PNG  "Resultado")

![Imagen](../Proyecto1/images/video7/imagen40.PNG  "Código")





## Capitulo 8

Para este capitulo se modificó las rutas en el archivo de "web" de una forma eficaz para que si en el enlace colocamos el nombre de nuestra pagina, este aparezca, en cambio si no existe nos manda a la pagina principal


![Imagen](../Proyecto1/images/video8/imagen41.PNG  "Código")


Para que la anterior configuración de ruta funcione, se crearon 3 paginas html diferentes en un nuevo folder llamado posts, los cuales los llama la pagina de post.blade.php con el siguiente código

![Imagen](../Proyecto1/images/video8/imagen42.PNG  "Nuevas paginas")

![Imagen](../Proyecto1/images/video8/imagen43.PNG  "Nuevas paginas")

Una vez realizado y creado los cambios, es importante asegurarse que todo se encuentre bien escrito y ver que funcione, para esto agregamos un poco de información a las nuevas paginas html y comprobamos el funcionamiento

![Imagen](../Proyecto1/images/video8/imagen44.PNG  "Código")

![Imagen](../Proyecto1/images/video8/imagen45.PNG  "Resultado")




## Capitulo 9

En este capitulo se realizó una forma mas ordenada que detectar las paginas que se crean que contengan caracteres especiales o números, también se puede ver un código especial "ddd" el cual sirve para ver los fallos en la pagina

![Imagen](../Proyecto1/images/video9/imagen46.PNG  "código")

![Imagen](../Proyecto1/images/video9/imagen47.PNG  "Resultado")


## Capitulo 10





