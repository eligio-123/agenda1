@extends('layouts.app')
@section('content')
    
<div class="container">
    
        <div id="agenda">
            Calendario
        </div>

</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#evento">
  Launch
</button>

<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                
                <form action="">

                {{ csrf_field() }}

                <form class="form-inline">
                <label class="my-1 mr-2" for="evento">Tipo de evento</label>
                <select class="custom-select my-1 mr-sm-2" name="evento" id="evento">
                  <option selected>Elige una opcion</option>
                  <option value="1">Tarea</option>
                  <option value="2">Actividad</option>
                </select>


                <div class="form-group">
                  <label for="title">Titulo</label>
                  <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escribe el titulo del evento">
                  <small id="helpId" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                </div>


                <div class="form-group">
                  <label for="date">Fecha del evnto</label>
                  <input type="date" name="date" id="date">
                </div>


                <div class="form-group">
                  <label for="time">Hora del evento</label>
                  <input type="time" name="time" id="time">
                </div>

                

               



                </form>  


            </div>
            <div class="modal-footer">

            <button type="button" class="btn btn-sucess" id="btnGuardar">Guardar</button>
            <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
            <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                
            </div>
        </div>
    </div>
</div>

@endsection