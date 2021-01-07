CREATE DATABASE editores;

USE editores;

CREATE TABLE IF NOT EXISTS autores(
    id INT(10) NOT NULL,
    nombre VARCHAR(45) NOT NULL,
    apellidos VARCHAR(45) NOT NULL,
    created_at DATE,
    updated_at DATE,
    CONSTRAINT pk_autores PRIMARY KEY(id)
)ENGINE = InnoDb;

CREATE TABLE IF NOT EXISTS editoriales(
    id INT(10) NOT NULL,
    nombre VARCHAR(45) NOT NULL,
    sede VARCHAR(45) NOT NULL,
    created_at DATE,
    updated_at DATE,
    CONSTRAINT pk_editoriales PRIMARY KEY(id)
)ENGINE = InnoDb;

CREATE TABLE IF NOT EXISTS libros(
    ISBN INT(13) NOT NULL,
    editoriales_id INT(10) NOT NULL,
    titulo VARCHAR(45) NOT NULL,
    sinopsis TEXT,
    n_paginas VARCHAR(45) NOT NULL,
    created_at DATE,
    updated_at DATE,
    CONSTRAINT pk_libros PRIMARY KEY(ISBN),
    CONSTRAINT fk_libros_editoriales FOREIGN KEY(editoriales_id) REFERENCES editoriales(id)
)ENGINE = InnoDb;

CREATE TABLE IF NOT EXISTS autores_has_libros(
    autores_id INT(10) NOT NULL,
    libros_ISBN INT(13) NOT NULL,
    created_at DATE,
    updated_at DATE,
    CONSTRAINT fk_autoreslibros_autores FOREIGN KEY(autores_id) REFERENCES autores(id),
    CONSTRAINT fk_autoreslibros_libros FOREIGN KEY(libros_ISBN) REFERENCES libros(ISBN)
)ENGINE = InnoDb;