# Installation et Configuration de Laravel avec Webpack Mix, Bootstrap CSS et Bootstrap Icons

Ce projet est une configuration Laravel utilisant **Webpack Mix** pour la gestion des assets, avec **Bootstrap CSS** et **Bootstrap Icons** au lieu de Vite et Tailwind CSS.

## Prérequis
- [Node.js](https://nodejs.org/) installé
- [Composer](https://getcomposer.org/) installé
- [Laravel](https://laravel.com/docs/12.x/) installé

## Étapes d'installation

### 1. Cloner le projet et installer les dépendances PHP
```sh
composer install
```

### 2. Supprimer Vite et Tailwind CSS
```sh
npm remove vite laravel-vite-plugin tailwindcss postcss autoprefixer
rm vite.config.js
```

### 3. Installer Webpack Mix
```sh
npm i --save-dev webpack webpack-cli webpack-dev-server html-webpack-plugin
```

### 4. Installer Laravel Mix
```sh
npm install laravel-mix --save-dev
```
Créer un fichier `webpack.mix.js` à la racine du projet :
```js
const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .setPublicPath('public');
```

### 5. Installer Bootstrap et Bootstrap Icons
```sh
npm i --save bootstrap @popperjs/core
npm i bootstrap-icons
```

### 6. Installer les dépendances additionnelles de Bootsrap
```sh
npm i --save-dev autoprefixer css-loader postcss-loader sass sass-loader style-loader
```

### 7. Configurer les fichiers styles et scripts
Dans `resources/sass/app.scss` :
```scss
@import "bootstrap/scss/bootstrap";
```

Dans `resources/js/app.js` :
```js
import 'bootstrap';
```

### 8. Modifier `package.json`
Ajouter les scripts suivants :
```json
{
    "private": true,
    "scripts": {
        "dev": "npm run development",
        "development": "mix",
        "watch": "mix watch",
        "watch-poll": "mix watch -- --watch-options-poll=1000",
        "hot": "mix watch --hot",
        "prod": "npm run production",
        "production": "mix --production"
    }
}
```
Enlever la ligne :
```json
{
    "type": "module"
}
```

### 9. Compiler les assets
```sh
npm run dev
```
Pour une version optimisée :
```sh
npm run prod
```

## 10. Utiliser Mix dans vos templates Blade
Remplacer :
```html
@vite('resources/js/app.js')
@vite('resources/css/app.css')
```
Par :
```html
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}"></script>
```

## 10. Lancer le projet Laravel
```sh
php artisan serve
```
Le projet est accessible sur `http://127.0.0.1:8000`

---
🎉 Le projet Laravel est maintenant configuré avec Webpack Mix, Bootstrap CSS et Bootstrap Icons !
