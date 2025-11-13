# Diagrama de Base de Datos (Versión textual)

## Tabla: user
- id (int)
- username (varchar)
- password_hash (text)
- global_score (int)
- active (tinyint)
- created_at (datetime)
- updated_at (datetime)

## Tabla: level
- id (int)
- name (varchar)
- time_limit (int)
- base_score (int)
- active (tinyint)

## Tabla: session
- id (int)
- user_id (int)
- level_id (int)
- score (int)
- completed (tinyint)
- completed_at (datetime)

Relaciones:
- session.user_id → user.id
- session.level_id → level.id
