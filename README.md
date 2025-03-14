# Installation et Configuration de Laravel avec Webpack Mix, Bootstrap CSS et Bootstrap Icons

Ce projet est une configuration Laravel utilisant **Webpack Mix** pour la gestion des assets, avec **Bootstrap CSS** et **Bootstrap Icons** au lieu de Vite et Tailwind CSS.

## Prérequis
- [Node.js](https://nodejs.org/) installé
- [Composer](https://getcomposer.org/) installé
- Laravel installé

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

### 3. Installer Laravel Mix
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

### 4. Installer Bootstrap et Bootstrap Icons
```sh
npm install bootstrap@5 popper.js bootstrap-icons
```

### 5. Configurer les fichiers styles et scripts
Dans `resources/sass/app.scss` :
```scss
@import "node_modules/bootstrap/scss/bootstrap";
```

Dans `resources/js/app.js` :
```js
import 'bootstrap';
```

### 6. Compiler les assets
```sh
npm run dev
```
Pour une version optimisée :
```sh
npm run prod
```

### 7. Modifier `package.json`
Ajoute les scripts suivants :
```json
"scripts": {
    "dev": "npm run development",
    "development": "mix",
    "watch": "mix watch",
    "watch-poll": "mix watch -- --watch-options-poll=1000",
    "hot": "mix watch --hot",
    "prod": "npm run production",
    "production": "mix --production"
}
```

## Lancer le projet Laravel
```sh
php artisan serve
```
Le projet sera accessible sur `http://127.0.0.1:8000`

---
🎉 Ton projet Laravel est maintenant configuré avec Webpack Mix, Bootstrap CSS et Bootstrap Icons !

