<div>
    <div class="x_panel">
        <div class="x_title">
            <h2>Agregar nuevo viaje</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-plus"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form wire:submit.prevent='guardar'>
                @if(array_key_exists('message',$error))
                <div class="alert alert-danger">
                    <b>FALTAN CAMPOS</b>
                </div>
                @endif

                <div class="form-group">
                    <label>Nombre</label>
                    <input wire:model='data.nombre' type="text" class="form-control" placeholder="Nombre">
                    @if(array_key_exists('errors',$error) && array_key_exists('nombre',$error['errors']))
                    <b class="text-danger">{{$error['errors']['nombre'][0]}}</b>
                    @endif
                </div>
                <button class="btn btn-success">Añadir</button>
            </form>
        </div>
    </div>
    <!-- FIN FORMULARIO DE VIAJE -->
    <div class="x_panel">
        <div class="x_title">
            <h2>Viajes<small>Listado de viajes.</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">


            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th>
                                <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </th>
                            <th class="column-title">ID </th>
                            <th class="column-title">Nombre</th>
                            <th class="column-title no-link last"><span class="nobr">Acciones</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($viajes as $viaje)
                        <tr class="even pointer">
                            <td class="a-center ">
                                <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </td>
                            <td class=" ">{{ $viaje['id_viaje'] }}</td>
                            <td class=" ">{{ $viaje['nombre'] }}</td>
                            <td class=" ">
                                <button wire:click="borrar({{$viaje['id_viaje']}})" class="btn btn-round btn-info btn-sm"><i class="fa fa-eraser"></i></button>
                                <button wire:click="mostrar({{$viaje['id_viaje']}})" class="btn btn-round btn-info btn-sm"><i class="fa fa-eye"></i></button>
                                <a wire:click="redirigirModificar({{$viaje['id_viaje']}})"class="btn btn-round btn-info btn-sm" data-toggle="collapse" href="#modificar" role="button" aria-expanded="false" aria-controls="modificar"><i class="fa fa-pencil"></a>
                            </td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>