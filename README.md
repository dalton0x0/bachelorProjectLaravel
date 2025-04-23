# Projet Bachelor en Laravel (Intranet d'une école)

Ce projet est une configuration Laravel utilisant **Webpack Mix** pour la gestion des assets, avec **Bootstrap CSS** et **Bootstrap Icons** au lieu de Vite et Tailwind CSS.

## Prérequis
- [Node.js](https://nodejs.org/) installé
- [Composer](https://getcomposer.org/) installé
- [Laravel](https://laravel.com/docs/12.x/) installé

## Étapes d'installation

### 1. Cloner le projet
```sh
git clone https://github.com/dalton0x0/bachelorProjectLaravel.git
```

### 2. Installer les dépendances PHP
```sh
composer install
```

### 3. Installer les dépendances JavaScript
```sh
npm install
```

### 4. Mettez en place la base de données (SQlite par défaut)
```sh
php artisan:migrate
```

### 5. (Optionnel) Peuplez la base de données
```sh
php artisan db:seed
```
ou
```sh
php artisan migrate:fresh --seed
```

### 6. Compiler les assets
```sh
npm run dev
```
Pour une version optimisée :
```sh
npm run prod
```

## 7. Lancer le projet Laravel
```sh
php artisan serve
```
Le projet est accessible sur `http://127.0.0.1:8000`

---
Le projet Laravel est maintenant accessible avec toutes les dépendances installées !
