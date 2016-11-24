@extends('cms/master')

@section('title')
	Recurso
@stop

@section('styles')
@stop

@section('content')
	<div class="page-title">
	    <h3>Recurso</h3>
	    <div class="page-breadcrumb">
	        <ol class="breadcrumb">
	            <li><a href="/admin/recurso">Recursos</a></li>
	            <li class="active">{{ empty($recurso->Id_Recurso) ? "Cadastrar" : "Editar"  }}</li>
	        </ol>
	    </div>
	</div>
	<div id="main-wrapper">
		<div class="row">
        	<div class="col-md-12">
				<div class="panel panel-white">
		            <div class="panel-heading clearfix">
		                <h4 class="panel-title">Recurso</h4>
		            </div>
		            <div class="panel-body">
		            	{!! Form::open(array('url' => 'admin/recurso/salvar', 'class' => 'form-horizontal')) !!}
        				{!! Form::hidden('Id_Recurso', $recurso->Id_Recurso) !!}

                            <div class="form-group">
                                <label class="col-sm-1 control-label">Quantidade</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Quantidade',  $recurso->Quantidade, array('class'=>'form-control input-rounded')) !!}
                                </div>
                            </div>

                          	<div class="form-group">
                                <label class="col-sm-1 control-label">Descricao</label>
                                <div class="col-sm-4">
                                    <textarea name="Descricao" class="form-control"> {{$recurso->Descricao}} </textarea>
                                </div>
                            </div>
                            <a href="/admin/recurso" class="btn btn-lg btn-default">Cancelar</a>
                            <button type="submit" style="float:right;" class="btn btn-lg btn-primary">Salvar</button>
                        {!! Form::close() !!}	    
		            </div>
		        </div>
		    </div>
		</div>		
	</div><!-- Main Wrapper -->
@stop

@section('scripts')

@stop