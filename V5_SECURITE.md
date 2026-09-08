# V5 — Checklist sécurité

- HTTPS/TLS obligatoire
- Sanctum + RBAC côté serveur
- 2FA obligatoire recommandé pour Comité, Point Focal et Admin National
- stockage privé des documents
- validation taille/MIME et antivirus côté infrastructure
- rate limiting sur authentification et webhooks
- idempotence des événements de paiement
- audit logs des actions sensibles
- secrets uniquement dans `.env` / secret manager
- sauvegardes PostgreSQL chiffrées et testées
- rotation des clés et tokens
- monitoring et alertes
