<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Auth Project

El proyecto es una aplicación web construida con Laravel, que integra un sistema completo de autenticación utilizando Laravel Breeze para el manejo de usuarios mediante correo electrónico y contraseña, así como autenticación con Google mediante OAuth.

Incluye un dashboard personalizado, accesible únicamente para usuarios autenticados, y una página de bienvenida personalizada para usuarios no registrados, reemplazando el contenido original de welcome.blade.php.

El diseño de la interfaz fue desarrollado con Tailwind CSS, priorizando una experiencia de usuario moderna, responsiva y clara.

---

## Características principales

-   Registro de usuarios
-   Inicio de sesión seguro
-   Autenticación con Google
-   Diseño moderno con Tailwind CSS
-   Modo oscuro
-   Interfaz responsiva

---

## Tecnologías utilizadas

-   **Laravel** — Framework backend
-   **Blade** — Motor de plantillas
-   **Tailwind CSS** — Estilos y diseño UI
-   **Vite** — Compilación de assets
-   **MySQL** — Base de datos
-   **Laravel Breeze / Auth** — Autenticación
-   **Google OAuth** — Login social

---

## Estructura del proyecto

```bash
auth-project/
├── app/
├── resources/
│   ├── views/
│   │   ├── auth/
│   │   └── layouts/
│   ├── css/
│   └── js/
├── routes/
│   └── web.php
├── public/
└── README.md
```

## Ejemplo

<p align="center">
  <img src="./resources/screenshots/login.png" width="600" alt="Login">
</p>

<p align="center">
  <img src="./resources/screenshots/dashboard.png" width="600" alt="dashboard">
</p>

## Licencia

Este proyecto está bajo la licencia MIT
