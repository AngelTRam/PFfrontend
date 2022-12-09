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
        
        <button class="btn btn-success">Modificar</button>
    </form>
</div>
