<?php

/*
¡Genial! Incorporar el inicio de sesión con Google puede ser una excelente manera de permitir a los 
usuarios acceder a tu aplicación de manera sencilla y segura. Aquí te dejo una guía básica para 
integrar el inicio de sesión con Google en tu proyecto:

1. Crear un Proyecto en Google Cloud Console
Accede a Google Cloud Console: Ve a Google Cloud Console.

Crea un nuevo proyecto:

Haz clic en el menú de proyectos (en la parte superior izquierda) y selecciona "Nuevo proyecto".
Introduce un nombre para tu proyecto y haz clic en "Crear".
Habilita la API de Google Sign-In:

En el menú de la izquierda, ve a "APIs y servicios" y luego a "Biblioteca".
Busca "Google Identity Services" y habilítala.
Configura el consentimiento del usuario:

En el menú de la izquierda, ve a "Pantalla de consentimiento OAuth".
Completa la información requerida, como el nombre del producto y el correo electrónico de soporte.
Configura las credenciales:

Ve a "Credenciales" en el menú de la izquierda.
Haz clic en "Crear credenciales" y selecciona "ID de cliente de OAuth".
Configura el tipo de aplicación según tu necesidad (p. ej., Web, iOS, Android).
Agrega los orígenes de redirección autorizados (por ejemplo, http://localhost:8000 para desarrollo local).
Obtén el ID de cliente y el secreto de cliente:

Después de crear las credenciales, se generará un ID de cliente y un secreto de cliente. 
Guarda esta información ya que la necesitarás en tu aplicación.


Instala las Dependencias:
Usa Composer para instalar el cliente de Google en tu proyecto:

composer require google/apiclient
*/

?>