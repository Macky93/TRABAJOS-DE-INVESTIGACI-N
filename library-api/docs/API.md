# Documentación de la API

**Base URL**
```
https://api-project-2025.onrender.com/api
```

La API permite la gestión de usuarios, niveles y sesiones. Todos los endpoints devuelven JSON.

---

## 1. Usuarios

### 1.1 GET /users  
Retorna todos los usuarios.

### 1.2 POST /users  
Crea un usuario.

Body:
```json
{
  "username": "usuario",
  "password": "1234"
}
```

### 1.3 PUT /users/:id  
Actualiza un usuario.

### 1.4 DELETE /users/:id  
Elimina un usuario.

---

## 2. Leaderboard

### GET /users/leaderboard  
Retorna los 10 jugadores con mayor puntaje.

---

## 3. Niveles

### 3.1 GET /levels  
Lista de niveles.

### 3.2 POST /levels  
Crea un nivel.

Body:
```json
{
  "name": "Level X",
  "time_limit": 60,
  "base_score": 100
}
```

### 3.3 PUT /levels/:id  
Actualiza nivel.

### 3.4 DELETE /levels/:id  
Desactiva nivel.

---

## 4. Sesiones

### 4.1 GET /sessions  
Lista de sesiones.

### 4.2 GET /sessions/:id  
Sesión por ID.

### 4.3 POST /sessions  
Crea una sesión.

Body:
```json
{
  "user_id": 1,
  "level_id": 2,
  "score": 500,
  "completed": 1
}
```

### 4.4 PUT /sessions/:id  
Actualiza sesión.

### 4.5 GET /sessions/highscore/:levelId  
Retorna el puntaje más alto logrado en un nivel.

---

## 5. Autenticación

### POST /login  
Body:
```json
{
  "username": "juan",
  "password": "1234"
}
```
