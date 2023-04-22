# Login
![Imagen del proyecto](https://raw.githubusercontent.com/jesse5313/Login/main/prev.png)

## Descripción 📑
La aplicación consta de tres páginas principales: index.html, home.php y signup.html, y varias páginas secundarias PHP en la carpeta php: cerrar_sesion.php, conection.php, login.php y signup.php.

El archivo index.html es la página de inicio que muestra un formulario de inicio de sesión donde el usuario debe ingresar su nombre de usuario y contraseña. El formulario es procesado por el archivo login.php que verifica los datos de inicio de sesión y redirecciona al usuario a home.php si las credenciales son correctas, o muestra un mensaje de error en caso contrario.

La página home.php es la página de bienvenida que muestra un mensaje de bienvenida personalizado para el usuario que inició sesión correctamente. También tiene un botón de cierre de sesión que, al hacer clic en él, dirige al usuario al archivo cerrar_sesion.php que cierra la sesión actual y lo redirige de vuelta a la página de inicio de sesión.

La página signup.html es la página de registro que contiene un formulario para que los usuarios ingresen su información personal y de inicio de sesión. El formulario es procesado por el archivo signup.php que guarda la información del usuario en la base de datos y lo redirige a la página de inicio de sesión.

En la carpeta css hay dos archivos de estilo, style.css que se utiliza para la página de inicio de sesión y styleHome.css que se utiliza para la página de bienvenida.

En la carpeta partials hay un archivo welcomeName.php que se utiliza para mostrar el mensaje de bienvenida personalizado en la página home.php.

En la carpeta php se encuentran los archivos PHP necesarios para la funcionalidad de la aplicación, como el archivo conection.php que se encarga de la conexión con la base de datos, login.php que se utiliza para verificar las credenciales de inicio de sesión, signup.php que se utiliza para guardar la información del usuario en la base de datos y cerrar_sesion.php que se utiliza para cerrar la sesión actual.

En resumen, la aplicación es un sistema de inicio de sesión básico que utiliza PHP y MySQL para autenticar y almacenar información de usuario. El flujo de trabajo es el siguiente: el usuario ingresa sus credenciales en la página de inicio de sesión (index.html), el archivo login.php verifica las credenciales y redirige al usuario a home.php si son correctas, donde se muestra un mensaje de bienvenida personalizado y un botón de cierre de sesión. Si el usuario no tiene una cuenta, puede crear una en la página de registro (signup.html), que se procesa a través del archivo signup.php y guarda la información en la base de datos.

## Tecnologías 🛠
[![HTML](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://es.wikipedia.org/wiki/HTML5)
[![JS](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

## Base de datos ⚡
[![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)](https://en.wikipedia.org/wiki/MySQL)

## En conclusion
En resumen, la aplicación consiste en un sistema de inicio de sesión y registro de usuarios utilizando PHP y MySQL. La estructura de carpetas incluye una carpeta css para los archivos de estilo, una carpeta partials para los archivos parciales de la página de bienvenida, una carpeta php para los archivos de conexión, inicio de sesión y registro de usuarios, una carpeta view para las vistas de la aplicación y un archivo index.html como página de inicio.

El archivo login.php maneja la verificación de inicio de sesión del usuario, mientras que signup.php maneja el registro de nuevos usuarios. El archivo conection.php contiene las credenciales de la base de datos MySQL y se utiliza para establecer la conexión a la base de datos.

La página home.php es la página principal del sitio y contiene un mensaje de bienvenida con el nombre de usuario del usuario que inició sesión. La página signup.html es la página de registro y contiene campos para que los usuarios ingresen su información de registro, incluyendo dos campos de contraseña para verificar la contraseña ingresada.

En general, la aplicación es una buena introducción al uso de PHP y MySQL para crear un sistema de autenticación básico y puede servir como base para futuros proyectos más complejos.

## Autor ✒️
**Jesse Salomon Carranza Torres**         

* Pagina Web: (https://gc13.netlify.app)
* Correo: (gc13dev@hotmail.com)

 [![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/jesse-salomon-carranza-torres-343117225/)
