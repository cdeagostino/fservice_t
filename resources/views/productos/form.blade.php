@csrf
<table class="table" id="empresas">
                      <thead class="thead-dark">
                      <tr>
                        <td>
                                {{ Form::label('nombre', 'Nombre')}}
                                {{ Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'true'])}}
                        </td>
                       </tr>
                       <tr>
                        <td>
                                {{ Form::label('descripcion', 'Descripcion')}}
                                {{ Form::text('descripcion', null, ['class' => 'form-control' , 'required' => 'true'])}}
                        </td>
                       </tr>
                       <tr>
                        <td>
                                {{ Form::label('cantidad', 'Cantidad')}}
                                {{ Form::text('cantidad', null, ['class' => 'form-control' , 'required' => 'true'])}}
                        </td>
                       </tr>
                       <tr>
                        <td>
                                {{ Form::label('observaciones', 'Observaciones')}}
                                {{ Form::text('observaciones', null, ['class' => 'form-control' , 'required' => 'true'])}}
                        </td>
                       </tr>
                      