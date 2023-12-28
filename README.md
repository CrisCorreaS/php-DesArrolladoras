# php-DesArrolladoras
![Badge Finalizado](https://img.shields.io/badge/STATUS-FINALIZADO-violet)
<img align="right" alt="License MIT" src="https://img.shields.io/badge/LICENSE-MIT-green" /> <br/>
<img alt="html5" src="https://img.shields.io/badge/-HTML5-E34F26?style=flat-square&logo=html5&logoColor=white" />
<img alt="css3" src="https://img.shields.io/badge/-CSS3-1572B6?style=flat-square&logo=css3&logoColor=white" />
<img alt="javascript" src="https://img.shields.io/badge/-JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=black" />
<img alt="php" src="https://img.shields.io/badge/-PHP-777BB4?style=flat-square&logo=php&logoColor=white" />
<br/><br/>
Ejercicio de Laboratorio del Curso "Desarrollo Full-Stack (Nivel 3) ED.2022" del programa Samsung DesArrolladoras. Formulario en el que tenemos que escribir los valores correspondientes a las columnas nombre, apellido y email para que se añada un nuevo registro en la base de datos "practicasqldesarrolladoras" en la tabla "usuario". La base de datos es la misma que la del repositorio <a href="https://github.com/CrisCorreaS/database-DesArrolladoras">database-DesArrolladoras</a>.

### Validaciones
El formulario incluye las siguientes validaciones:

Todos los campos son obligatorios. En caso de dejar algún campo en blanco, se mostrará un error.
- El campo "Nombre" y el campo "Primer Apellido" solo acepta caracteres de texto. Cualquier carácter numérico no será admitido.
- El campo "Email" debe ser una dirección de correo electrónico válida. Se utiliza una expresión regular para validar el formato del correo electrónico.


### Archivos y directorios
El repositorio está estructurado de la siguiente manera:

**index.php:** Archivo PHP que contiene la estructura del formulario y la lógica para insertar un nuevo registro en la base de datos desarrolladoras cuando se envía el formulario.

**style.css:** Archivo CSS que define los estilos del formulario y las validaciones correctas e incorrectas.

**script.js:** Archivo JavaScript que contiene la lógica de validación del formulario y muestra una alerta de registro exitoso al enviar el formulario.

### Uso
- Clona este repositorio en tu máquina local para luego ponerlo en la carpeta de XAMPP correspondiente: `git clone https://github.com/CrisCorreaS/php-DesArrolladoras`
- Abre el archivo index.php en tu servidor local o en un servidor web
- Completa el formulario con los datos requeridos y observa las validaciones en tiempo real.
- Al hacer clic en el botón "Enviar", se insertará un nuevo registro en la tabla "usuario" de la base de datos desarrolladoras si todos los campos se validan correctamente.

### Contribuciones
Las contribuciones son bienvenidas. Si encuentras algún problema o tienes alguna mejora que sugieras, puedes abrir un issue o enviar una solicitud de pull.
