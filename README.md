# P064_Producto2

Proyecto sobre gestión de actos en PHP puro.

## Instalación

#### Proyecto creado con Docker.

```http
  docker-compose up --build
```

## BBDD

Se requiere la creación de 3 tipos de Usuario para que la aplicación funcione correctamente:

| Id_tipo_usuario | Descripcion |
| :-------------- | :---------- |
| `1`             | `Admin`     |
| `2`             | `Usuario`   |
| `3`             | `Ponente`   |

#### Creación de usuarios

Al registrarse un usuario, éste se crea como Usuario por defecto (Ido_tipo_usuario 2). Para actuar como Admin es necesaria la modficiación del tipo de usuario en BBDD al Id_tipo_usuario 1.
