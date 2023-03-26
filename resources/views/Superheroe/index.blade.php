@extends('layouts.app')
@section('content')
<div class="container">

    <a href="{{url('Superheroe/create')}}">Registrar a un nuevo heroe</a><br><br>

    <h1>Lista de Superheroes guardados</h1>

    <h4>

        @if(Session::has('mensaje'))
            {{Session::get('mensaje')}}
        @endIf

    </h4>

    <br>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre Real</th>
                <th>Nombre de Heroe</th>
                <th>Informacion Extra</th>
                <th>Opciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($superheroes as $superheroe)
            <tr>
                <td>{{$superheroe->id}}</td>
                <td>
                    <img src="{{asset('storage').'/'.$superheroe->FotoURL}}" width="100" alt="">
                </td>
                <td>{{$superheroe->NombreReal}}</td>
                <td>{{$superheroe->NombreSuper}}</td>
                <td>{{$superheroe->InfoExtra}}</td>
                <td>
                    
                    <a href="{{url('/Superheroe/'.$superheroe->id.'/edit')}}">
                        Editar
                    </a>
                    
                    <form action="{{url('/Superheroe/'.$superheroe->id)}}"  method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('¿Quieres eliminar este registro? Se perdera para siempre')" value="Eliminar"/>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection