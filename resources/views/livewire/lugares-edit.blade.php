<div>
    <form wire:submit.prevent='modificar'>
        @if(array_key_exists('message',$error))
        <div class="alert alert-danger">
            <b>FALTAN CAMPOS</b>
        </div>
        @endif

        <div class="form-group">
            <label>Nombre</label>
            <input wire:model='olddata.nombre' type="text" class="form-control" placeholder="{{$olddata['nombre']}}">
            @if(array_key_exists('errors',$error) && array_key_exists('nombre',$error['errors']))
            <b class="text-danger">{{$error['errors']['nombre'][0]}}</b>
            @endif

        </div>
        <div class="form-group">
            <label>Latitud</label>
            <input wire:model="olddata.latitud" type="text" class="form-control" placeholder="{{$olddata['latitud']}}">
            @if(array_key_exists('errors',$error) && array_key_exists('latitud',$error['errors']))
            <b class="text-danger">{{$error['errors']['latitud'][0]}}</b>
            @endif
        </div>
        <div class="form-group">
            <label>Longitud</label>
            <input wire:model="olddata.longitud" type="text" class="form-control" placeholder="{{$olddata['longitud']}}">
            @if(array_key_exists('errors',$error) && array_key_exists('longitud',$error['errors']))
            <b class="text-danger">{{$error['errors']['longitud'][0]}}</b>
            @endif
        </div>
        <div class="form-group">
            <label>Poblacion</label>
            <input wire:model="olddata.id_poblacion" type="text" class="form-control" placeholder="{{$olddata['id_poblacion']}}">
            @if(array_key_exists('errors',$error) && array_key_exists('id_poblacion',$error['errors']))
            <b class="text-danger">{{$error['errors']['id_poblacion'][0]}}</b>
            @endif
        </div>
        <button class="btn btn-success">Modificar</button>
    </form>
</div>