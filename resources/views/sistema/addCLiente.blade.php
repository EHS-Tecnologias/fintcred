@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ADMINISTRACIÓN DE CLIENTES</h1>
@stop

@section('content')
    <p>Ingrese la información del cliente.</p>
    <div class="card">
        @php
            if(session()){
                if(session('message')=='ok'){
                    echo'<x-adminlte-alert class="bg-teal text-uppercase" icon="fa fa-lg fa-thumbs-up" title="Done" dismissable>Éxito, registro completado!</x-adminlte-alert>';
                }
            }
        @endphp
        <div class="card-body">
            <form action="{{route('cliente.store')}}" method="post">
                @csrf
                <x-adminlte-input type="text" name="dni" label="DNI" placeholder="Aquí su número de cédula" label-class="text-lightblue" value="{{old('dni')}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input type="text" name="apellido" label="APELLIDO" placeholder="Aquí sus apellidos" label-class="text-lightblue" value="{{old('apellido')}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input type="text" name="nombre" label="NOMBRES" placeholder="Aquí sus nombres" label-class="text-lightblue" value="{{old('nombre')}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input type="email" name="email" label="CORREO" placeholder="test@test.com" label-class="text-lightblue" value="{{old('email')}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fa fa-envelope text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input type="text" name="telefono" label="TELÉFONO" placeholder="t+522281966820" label-class="text-lightblue" value="{{old('telefono')}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fa fa-phone text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-textarea name="direccion" label="DIRECCIÓN" rows=5 label-class="text-lightblue"
                    igroup-size="sm" placeholder="Inserte su dirección...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    {{old('direccion')}}
                </x-adminlte-textarea>
                <x-adminlte-select name="estado" label="ESTADO CIVIL" label-class="text-lightblue"
                    igroup-size="lg">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-car-side"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccione el estado civil</option>
                    <option value="Casado">Casado</option>
                    <option value="Soltero">Soltero</option>
                    <option value="Unión libre">Unión Libre</option>
                </x-adminlte-select>
        
                <x-adminlte-button type="submit" label="Guardar" theme="primary" icon="fas fa-save"/>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script>
        $(document).ready(function(){
            $('.formEliminar').submit(function(e){
                e.preventDefault();
                Swal.fire({
                    title: "¿Estás seguro?",
                    text: "Se va a eliminar un registro!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Swal.fire({
                        //     title: "Deleted!",
                        //     text: "Your file has been deleted.",
                        //     icon: "success"
                        // });
                    }
                })
            })
        })
    </script> --}}
@stop