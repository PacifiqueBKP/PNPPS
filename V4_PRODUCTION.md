# PNPPS RDC V4 — Socle production

## Livré dans V4
- Authentification API avec Sanctum
- Préparation 2FA/TOTP pour comptes sensibles
- RBAC des cinq rôles
- Upload privé PDF/DOC/DOCX (20 MB max par fichier dans l'endpoint)
- Métadonnées de fichiers
- Identifiant public PNPPS
- Endpoint de vérification/QR prêt côté API
- DOI manuel et génération provisoire à la publication
- Centre de notifications Laravel
- Abstraction de paiement pour M-Pesa, Orange Money et Airtel Money
- Migrations PostgreSQL
- UI V4 avec bloc des services avancés

## Important
Les connecteurs opérateurs de paiement, WhatsApp/SMS, DOI et TOTP doivent être configurés avec leurs fournisseurs officiels avant toute mise en production. Les valeurs d'exemple ne sont pas des identifiants de production.

## Sécurité
- Stockage des documents sur disque privé
- RBAC côté serveur
- Validation MIME/extension et taille
- HTTPS/TLS en production
- Secrets dans `.env`
- Rate limiting
- Audit logs à ajouter/activer
- Sauvegardes chiffrées
- 2FA obligatoire recommandé pour Comité, Point Focal et Admin National
