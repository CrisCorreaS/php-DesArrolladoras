# php-DesArrolladoras
Ejercicio de Laboratorio del Curso "Desarrollo Full-Stack (Nivel 3) ED.2022" del programa Samsung DesArrolladoras. Formulario en el que tenemos que escribir los valores correspondientes a las columnas nombre, apellido y email para que se añada un nuevo registro en la base de datos "desarrolladoras" en la tabla "usuario". La base de datos es muy parecida a la del repositorio <a href="https://github.com/CrisCorreaS/database-DesArrolladoras">database-DesArrolladoras</a> pero sin el id.

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
