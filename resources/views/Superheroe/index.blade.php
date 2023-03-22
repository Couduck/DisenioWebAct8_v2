<h1>Vista para mostrar empleados</h1>

<a href="{{url('Superheroe/create')}}">Registrar a un nuevo heroe</a><br><br>


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