<p align="center"><a href="https://www.linkedin.com/in/jorge-romero-contreras/" target="_blank"><img src="public/img/logo_romeroc.png" width="100" alt="Laravel Logo"></a></p>

## Acerca del proyecto
# Proyecto CRUD de Estudiantes

## Descripción
Este proyecto es una aplicación web para la gestión de estudiantes, desarrollado utilizando Laravel en su versión 11. La aplicación permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre los registros de estudiantes. Además, se han integrado varias tecnologías y herramientas para mejorar la experiencia del usuario y la funcionalidad de la aplicación.

## Tecnologías Utilizadas
- **Laravel 11**: Framework PHP utilizado para el desarrollo de la aplicación.
- **Jetstream**: Proporciona un kit de inicio para la autenticación y la gestión de usuarios.
- **Tailwind CSS**: Framework CSS utilizado para el diseño y la personalización de la interfaz de usuario.
- **AlertifyJS**: Biblioteca JavaScript utilizada para mostrar notificaciones y alertas de manera elegante.

## Características
- **Registro y Autenticación de Usuarios**: Implementado con Jetstream, permite a los usuarios registrarse, iniciar sesión y gestionar sus perfiles.
- **Gestión de Estudiantes**: 
  - **Crear**: Permite agregar nuevos estudiantes a la base de datos.
  - **Leer**: Muestra una lista de todos los estudiantes registrados con detalles completos.
  - **Actualizar**: Permite modificar la información de los estudiantes existentes.
  - **Eliminar**: Permite borrar registros de estudiantes de la base de datos.
- **Interfaz de Usuario Responsiva**: Utilizando Tailwind CSS para asegurar que la aplicación se vea bien en dispositivos de todos los tamaños.
- **Notificaciones y Alertas**: Implementadas con AlertifyJS para proporcionar feedback al usuario sobre las acciones realizadas (por ejemplo, creación, actualización y eliminación de registros).
- **Búsqueda y Paginación**: Funcionalidad para buscar estudiantes y paginar los resultados para una mejor navegación.
- **Validación de Formularios**: Validación tanto en el lado del cliente como del servidor para asegurar la integridad de los datos.
- **Control de Acceso**: Gestión de permisos y roles para asegurar que solo los usuarios autorizados puedan realizar ciertas acciones.

## Estructura del Proyecto
- **Backend**: Desarrollado con Laravel, incluye controladores, modelos y migraciones para gestionar la lógica de la aplicación y la base de datos.
- **Frontend**: Diseñado con Blade Templates y estilizado con Tailwind CSS para una experiencia de usuario moderna y responsiva.
- **Autenticación y Seguridad**: Proporcionada por Jetstream, incluye inicio de sesión, registro, verificación de email, y recuperación de contraseñas.

## Instalación y Configuración
Para ejecutar este proyecto en tu entorno local, sigue los siguientes pasos:

1. Clona el repositorio:
   ```sh
   https://github.com/JorgeRomeroC/crud-once.git

2. Navega al directorio del proyecto:
   ```sh
   cd tu-proyecto

3. Instala las dependencias de Composer:
   ```sh
    composer install

4. Copia el archivo `.env.example` y renómbralo a `.env`:
    ```sh
    cp .env.example .env
5. Genera la clave de la aplicación:
   ```sh
   php artisan key:generate

6. Configura tu base de datos en el archivo `.env`:
   ```sh
    php artisan migrate

7. Migra la base de datos:
   ```sh
   php artisan migrate

8. Inicia el servidor de desarrollo:
   ```sh
   php artisan serve