<?php
/**
 * Creado por equipo de desarrollo RE.
 * Fecha: 01/01/2017
 * Hora: 05:18 PM
 * Editado por:
 * Fecha:
 * Editado por:
 * Fecha:
 */
@extends("layouts.app")
@section("content")
    <div class="big-padding text-center blue-grey white-text">
        <h1>Productos</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Titulo</td>
                <td>Descripcion</td>
                <td>Precio</td>
                <td>Acciones</td>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                   <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->pricing}}</td>
                    <td>Acciones</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    @endsection
?>