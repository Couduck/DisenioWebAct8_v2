@extends('layouts.app')
@section('content')
<div class="container">

    <h1>Lista de Superheroes guardados</h1><br>

    <a href="{{url('Superheroe/create')}}" class="btn btn-success btn-lg">Registrar a un nuevo heroe</a><br><br>

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
                    <img src="{{asset('storage').'/'.$superheroe->FotoURL}}" width="100" alt="" class="img-thumbnail">
                </td>
                <td>{{$superheroe->NombreReal}}</td>
                <td>{{$superheroe->NombreSuper}}</td>
                <td>{{$superheroe->InfoExtra}}</td>
                <td>
                    
                    <a href="{{url('/Superheroe/'.$superheroe->id.'/edit')}}" class="btn btn-info">
                        Editar
                    </a>
                    
                    <form action="{{url('/Superheroe/'.$superheroe->id)}}"  method="post" class="d-inline">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('¿Quieres eliminar este registro? Se perdera para siempre')" value="Eliminar" class= "btn btn-danger"/>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection