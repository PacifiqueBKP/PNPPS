# V4 API

### Auth
POST /api/auth/register
POST /api/auth/login
POST /api/auth/logout
POST /api/auth/2fa/enable
POST /api/auth/2fa/verify

### Publications
POST /api/publications
POST /api/publications/{id}/submit
POST /api/publications/{id}/review
POST /api/publications/{id}/corrections
POST /api/publications/{id}/publish
POST /api/publications/{id}/files
GET /api/publications/{id}/files
GET /api/publications/{id}/qr
POST /api/publications/{id}/doi

### Notifications
GET /api/notifications
POST /api/notifications/{id}/read

### Paiements
POST /api/payments/initiate
POST /api/payments/{id}/confirm
