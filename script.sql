CREATE SCHEMA debugphp;
CREATE TABLE debugphp.persona (
    idpersona SERIAL PRIMARY KEY,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    idprofesion INTEGER,
    genero VARCHAR(1),
    notificacion BOOLEAN,
    correo VARCHAR(100)
);
