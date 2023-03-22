<label for="NombreReal">Nombre Real</label>   
<input type="text" name="NombreReal" id="NombreReal" value="{{isset($superheroe->NombreReal)?$superheroe->NombreReal:''}}">
<br>

<label for="NombreSuper">Nombre de Heroe</label>   
<input type="text" name="NombreSuper" id="NombreSuper" value="{{isset($superheroe->NombreSuper)?$superheroe->NombreSuper:''}}">
<br>

<label for="FotoURL">Archivo foto</label>   

@if(isset($superheroe->FotoURL))
    <img src="{{asset('storage').'/'.$superheroe->FotoURL}}" width="100" alt="">
@endif

<input type="file" name="FotoURL" id="FotoURL">
<br>

<label for="InfoExtra">Informacion extra</label>   
<input type="text" name="InfoExtra" id="InfoExtra" value="{{isset($superheroe->InfoExtra)?$superheroe->InfoExtra:''}}">
<br>
    
<input type="submit" value="Guardar Heroe">
<br><br><br>

<a href="{{url('Superheroe')}}">Regresar</a>