# PNPPS RDC V5 — Pilotage national

V5 transforme le socle V4 en centre de pilotage :
- gestion des utilisateurs et rôles par l'Admin National ;
- analytics nationales et par province ;
- journal d'audit des opérations sensibles ;
- endpoint de santé de l'API ;
- réception idempotente des webhooks de paiement ;
- suivi du workflow des publications ;
- annuaire des 26 provinces ;
- supervision du matching scientifique ;
- état sécurité et préparation des connecteurs.

## API V5
- `GET /api/health`
- `GET /api/admin/users`
- `PATCH /api/admin/users/{user}`
- `GET /api/admin/provinces`
- `GET /api/admin/analytics`
- `GET /api/admin/audit`
- `POST /api/webhooks/payments/{provider}`

## Mise en production
Les signatures des webhooks, les API opérateurs, le fournisseur DOI et le TOTP doivent être reliés à des intégrations officielles et testés en environnement sandbox puis production. Ne pas utiliser de secrets dans le code source.
