# Pruebas Funcionales para la API

---

## 1. Usuarios

### 1.1 GET /users  
**Resultado esperado:** Lista de usuarios.

### 1.2 POST /users  
Body:
```json
{
  "username": "test",
  "password": "1234"
}
```
**Esperado:** 201 Created.

### 1.3 PUT /users/:id  
**Esperado:** "User updated successfully"

### 1.4 DELETE /users/:id  
**Esperado:** "User deleted successfully"

---

## 2. Leaderboard

### GET /users/leaderboard  
**Esperado:** Lista de 10 puntajes más altos.

---

## 3. Niveles

### POST /levels  
**Esperado:** 201 Created.

---

## 4. Sesiones

### POST /sessions  
Body:
```json
{
  "user_id": 1,
  "level_id": 1,
  "score": 500,
  "completed": 1
}
```

**Esperado:** "Session created"

---
