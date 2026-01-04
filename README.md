# MaBoutique - Starter Frontend PHP

Starter HTML/CSS pour la formation PHP de 14 jours. Les apprenants vont progressivement "PHPiser" ce template statique.

## Objectif

Ce repository contient un **frontend complet** (HTML/CSS) d'une boutique e-commerce. Au fil de la formation, vous allez :

1. **Jours 1-5** : Remplacer les valeurs statiques par des variables et fonctions PHP
2. **Jours 6-7** : Ajouter les formulaires, sessions et base de données
3. **Jours 8-10** : Restructurer en POO avec le pattern Repository
4. **Jours 11-12** : Migrer vers une architecture MVC
5. **Jours 13-14** : Ajouter les outils de qualité et workflow moderne

## Prérequis

- **PHP 8.2+** ([php.net](https://www.php.net/downloads))
- **MySQL/MariaDB** ([XAMPP](https://www.apachefriends.org/), [MAMP](https://www.mamp.info/), ou [Docker](https://www.docker.com/))
- **Composer** ([getcomposer.org](https://getcomposer.org/))
- Un éditeur de code (VS Code recommandé)

## Installation

```bash
# 1. Cloner le repository
git clone https://github.com/[username]/boutique-php.git
cd boutique-php

# 2. Installer les dépendances (optionnel, pour Jour 13+)
composer install

# 3. Créer la base de données (Jour 7+)
mysql -u root -p < config/database.sql
```

## Lancement

```bash
# Serveur PHP intégré
php -S localhost:8000 -t public

# Ouvrir dans le navigateur
open http://localhost:8000
```

## Structure du projet

```
boutique-php/
├── public/                 # Fichiers accessibles (point d'entrée)
│   ├── index.html          # Page d'accueil
│   ├── catalogue.html      # Liste des produits
│   ├── produit.html        # Détail d'un produit
│   ├── panier.html         # Panier d'achat
│   ├── connexion.html      # Formulaire de connexion
│   ├── inscription.html    # Formulaire d'inscription
│   ├── contact.html        # Formulaire de contact
│   └── css/
│       └── style.css       # Styles CSS complets
├── app/                    # Code PHP (Jour 2+)
│   └── .gitkeep
├── views/                  # Templates (Jour 11+)
│   └── .gitkeep
├── config/
│   ├── .gitkeep
│   └── database.sql        # Script SQL pour la BDD
├── exercices/              # Vos exercices quotidiens
│   ├── jour-01/
│   ├── jour-02/
│   └── ...
├── docs/
│   ├── instructions.md     # Instructions de création
│   └── integration.md      # Guide d'intégration jour par jour
├── composer.json           # Configuration Composer
└── README.md
```

## Pages disponibles

| Page | Description | Commentaires PHP |
|------|-------------|------------------|
| `index.html` | Accueil avec hero, stats, produits vedettes | JOUR 1-4, 7, 12 |
| `catalogue.html` | Grille 8 produits, filtres, pagination | JOUR 3, 4, 6 |
| `produit.html` | Détail produit avec galerie | JOUR 4, 5, 6, 7 |
| `panier.html` | Tableau panier avec récapitulatif | JOUR 5, 7 |
| `connexion.html` | Formulaire login | JOUR 6, 7 |
| `inscription.html` | Formulaire register | JOUR 6, 7 |
| `contact.html` | Formulaire contact | JOUR 6 |

## Commentaires de guidance

Chaque fichier HTML contient des commentaires indiquant quoi modifier et quand :

```html
<!-- JOUR 1 : Remplacer 2024 par <?= date('Y') ?> -->
<p>&copy; 2024 MaBoutique</p>

<!-- JOUR 3 : Générer avec foreach -->
<div class="products-grid">
    <!-- ... -->
</div>

<!-- JOUR 7 : Formulaire POST ajout panier -->
<form action="panier.html" method="POST">
    <!-- ... -->
</form>
```

## Données produits

8 produits sont inclus avec différentes caractéristiques :

| Produit | Prix | Stock | Badges |
|---------|------|-------|--------|
| T-shirt Premium Bio | 35,99 € | 45 | Nouveau |
| Sneakers Urban | 79,99 € (99,99 €) | 3 | Promo -20%, Derniers |
| Casquette Vintage | 24,99 € | 28 | - |
| Jean Slim Stretch | 55,99 € (79,99 €) | 20 | Promo -30% |
| Sac à dos Urbain | 59,99 € | 12 | Nouveau |
| Montre Classic | 89,99 € | 0 | Rupture |
| Pull Col Roulé | 49,99 € | 15 | - |
| Ceinture Cuir | 34,99 € | 0 | Rupture |

## Composants CSS

Le fichier `style.css` inclut :

- **Variables CSS** : couleurs, espacements, typographie
- **Boutons** : `.btn`, `.btn--primary`, `.btn--secondary`, `.btn--danger`
- **Formulaires** : `.form-input`, `.form-select`, `.form-checkbox`
- **Cards** : `.product-card` avec badges
- **Alertes** : `.alert--success`, `.alert--error`, `.alert--warning`
- **Layout** : `.container`, `.header`, `.footer`, grilles responsive
- **Responsive** : breakpoints 1024px, 768px, 480px

## Scripts Composer (Jour 13+)

```bash
composer lint      # Vérifie le formatage (Pint)
composer fix       # Corrige le formatage
composer analyse   # Analyse statique (PHPStan)
composer quality   # Lance lint + analyse
```

## Progression recommandée

Consultez `docs/integration.md` pour le guide détaillé jour par jour.

## Ressources

- [Documentation PHP](https://www.php.net/docs.php)
- [PDO - PHP Data Objects](https://www.php.net/manual/fr/book.pdo.php)
- [Composer](https://getcomposer.org/doc/)
- [PHPStan](https://phpstan.org/)
- [Laravel Pint](https://laravel.com/docs/pint)

## Licence

MIT - Libre d'utilisation pour la formation.
