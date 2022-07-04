# MVC Arquitectura ultimas pruebas en PHP
App Web desarrollada em PHP bajo arquitectura MVC para creacion de reservas, las cuales se almacenaran en la Base de Datos (bdreservoir como especifica la materia).

# Dudas DBRESERVOIR

En el archivo .zip se encuentra tanto la tabla llamada 'reservas', como la base de datos 'bdreservoir' ambas estan en blanco 
En el archivo models/db.php encontrará: "$this->conexion = new PDO('mysql:host=localhost;dbname=bdreservoir', 'root', '1234');" y como puede apreciar 
Mi pc tiene la contraseña 1234, lo comento por si tuvieran algun problema al intentar ejecutar la BD

# Arquitectura Models/Views/Controllers (MVC)
Contiene la arquitectura de Models/Views/Controllers :

- Models (Modelo): Tiene las clases PHP para la conección con la Base de datos, la clase que se usara como objeto para las reservas.

- Views (Vista) : Tiene el formulario de reservas y las secciones Footer y Cabecera por separado (escogí esta forma para que los mensajes de conexion exitosa o incorrecta ), tambien esta la hoja de estilos CSS y otras carpetas tipicas de laestructura como: js e img.

- Controllers (Controlador) : Tiene la clase que construye la nueva reserva y las vistas (cabecera.php - formulario.php - footer.php).

# Hola Profesor como esta? 

Anteriormente en la primera evaluacion le envie una consulta por un chat interno, mi pc no me deja exportar bases de datos desde phpMyAdmin, ni tablas ni BD, por esta razon debo hacer la base de datos en otro computador ajeno, exportarla y pegarla en el zip que envio.
Por otra parte mi pc tiene como contrasena "1234" quizas en el suyo no tenga esa contrasena