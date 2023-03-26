<div class="form-group">
    <label for="NombreReal">Nombre Real</label>   
    <input type="text" name="NombreReal" id="NombreReal" value="{{isset($superheroe->NombreReal)?$superheroe->NombreReal:''}}" class="form-control">
    <br>
</div>

<div class="form-group">
    <label for="NombreSuper">Nombre de Heroe</label>   
    <input type="text" name="NombreSuper" id="NombreSuper" value="{{isset($superheroe->NombreSuper)?$superheroe->NombreSuper:''}}" class="form-control">
    <br>
</div>

<div class="form-group">
    <label for="FotoURL">Foto: </label>   
    @if(isset($superheroe->FotoURL))
        <img src="{{asset('storage').'/'.$superheroe->FotoURL}}" width="100" alt="" class="img-thumbnail">
    @endif

    <input type="file" name="FotoURL" id="FotoURL" class="form-control">
    <br>
</div>

<div class="form-group">
    <label for="InfoExtra">Informacion extra</label>   
    <input type="text" name="InfoExtra" id="InfoExtra" value="{{isset($superheroe->InfoExtra)?$superheroe->InfoExtra:''}}" class="form-control">
    <br>
</div>
    
<div class="form-group">
    <input type="submit" value="{{$modo}}" class="form-control btn btn-success">
    <br><br><br><br>
</div>

<a href="{{url('Superheroe')}}" class="btn btn-primary">Regresar</a>