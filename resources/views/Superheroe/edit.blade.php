<h1>Formulario de edicion de heroe</h1>

<form action="{{url('/Superheroe/'.$superheroe->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}

    @include('Superheroe.form')
</form>