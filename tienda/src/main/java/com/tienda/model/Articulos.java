package com.tienda.model;

import io.micrometer.common.lang.NonNull;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;
import lombok.Getter;
import lombok.RequiredArgsConstructor;
import lombok.Setter;

@RequiredArgsConstructor
@Getter @Setter
@Entity
@Table(name = "articulos")
public class Articulos {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;

    @NonNull
    private String nombre;

    @NonNull
    private String descripcion;

    @NonNull
    private boolean genero; // true: hombre, false: mujer

    @NonNull
    private double precio;

    @NonNull
    private String tipo;

}
