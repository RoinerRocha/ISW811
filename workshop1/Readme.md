# Workshop1

## Instalacion de VirtualBox

![VirtualBox] (https://www.virtualbox.org/wiki/Downloads "descargar virtualbox")

## instalacion de vagrant
![Vagrant] (https://developer.hashicorp.com/vagrant/downloads?product_intent=vagrant "descargar vagrant")

## Imagenes de prueba
![Imagen](../workshop1/imagenes/maquina%20virtual.PNG "imagen de pruebas")

## Aprovisionamiento de la maquina virtual

primero será crear y movernos a las carpetas correspondientes para instalar lo necesario.

```bash
mkdir isw811
cd isw811
mkdir woorkshop1
cd workshop1
mkdir VMs
cd VMs
mkdir webserver
cd webserver

```

Lo siguiente es iniciar el archivo de Vagrant y abrirlo para configurar bien la ip
```bash
vagrant init debian/bullseye64
code Vagrantfile
```

lo siguiente consite en levantar la maquina virtual para ver si todo funcionó perfectamente

```bash
vagrant up
vagrant status
vagrant ssh
vagrant halt

```



