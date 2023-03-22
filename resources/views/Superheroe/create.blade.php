<h1>Formulario para un nuevo superheroe</h1>

<form action="{{url('/Superheroe')}}" method="post" enctype="multipart/form-data">
@csrf

@include('Superheroe.form')

</form>