# Étape suivante — Mise en production

## 1. Serveur
- Ubuntu 24.04 LTS
- Nginx
- PHP 8.3+
- PostgreSQL 16+
- Node.js 20+
- SSL/TLS

## 2. Backend
Créer une application Laravel 11 puis intégrer le contenu du dossier `backend/`.
Installer Sanctum pour les tokens API.

Commandes indicatives:
`composer install`
`php artisan migrate --seed`
`php artisan storage:link`

## 3. Frontend
Dans `frontend/`:
`npm install`
`npm run build`
`npm start`

Définir l'URL de l'API via une variable `NEXT_PUBLIC_API_URL`.

## 4. Sécurité avant ouverture publique
- Remplacer tous les secrets d'environnement
- HTTPS obligatoire
- CORS limité au domaine officiel
- Rate limiting
- Sauvegardes PostgreSQL quotidiennes
- Journal d'audit
- 2FA recommandé pour Comité, Point Focal et Admin National
- Contrôle RBAC côté serveur
- Validation stricte des fichiers PDF/Word
- Antivirus/scan des fichiers déposés

## 5. Intégrations à brancher
- WhatsApp Business / fournisseur officiel
- M-Pesa
- Orange Money
- Airtel Money
- Génération QR Code
- DOI via un prestataire ou dépôt institutionnel compatible
- Stockage objet pour les documents scientifiques
