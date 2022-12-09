<div>
    <form wire:submit.prevent='modificar'>
        @if(array_key_exists('message',$error))
        <div class="alert alert-danger">
            <b>FALTAN CAMPOS</b>
        </div>
        @endif

        <div class="form-group">
            <label for="exampleFormControlSelect1">Lugar</label>
            <select wire:model='data.id_lugar' class="form-control" id="exampleFormControlSelect1">

                @foreach($lugares as $lugar)
                <option>{{$lugar['id_lugar']}}</option>
                @endforeach
            </select>
            @if(array_key_exists('errors',$error) && array_key_exists('lugar',$error['errors']))
            <b class="text-danger">{{$error['errors']['nombre'][0]}}</b>
            @endif
        </div>
        <div class="form-group">
            <label>Viaje</label>
            <select wire:model='data.id_viaje' class="form-control" id="exampleFormControlSelect1">
                @foreach($viajes as $viaje)
                <option>{{$viaje['id_viaje']}}</h2>
                </option>
                @endforeach
            </select>
            @if(array_key_exists('errors',$error) && array_key_exists('viaje',$error['errors']))
            <b class="text-danger">{{$error['errors']['nombre'][0]}}</b>
            @endif
        </div>
        <div class="form-group">
            <label>Notas</label>
            <input wire:model='data.notas' type="text" class="form-control" placeholder="Notas">
            @if(array_key_exists('errors',$error) && array_key_exists('notas',$error['errors']))
            <b class="text-danger">{{$error['errors']['nombre'][0]}}</b>
            @endif
        </div>
        <button class="btn btn-success">Añadir</button>
    </form>
</div>