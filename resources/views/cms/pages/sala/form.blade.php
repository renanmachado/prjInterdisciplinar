@extends('cms/master')

@section('title')
	Sala
@stop

@section('styles')
@stop

@section('content')
	<div class="page-title">
	    <h3>Sala</h3>
	    <div class="page-breadcrumb">
	        <ol class="breadcrumb">
	            <li><a href="/admin/sala">Salas</a></li>
	            <li class="active">{{ empty($sala->Id_Sala) ? "Cadastrar" : "Editar"  }}</li>
	        </ol>
	    </div>
	</div>
	<div id="main-wrapper">
		<div class="row">
        	<div class="col-md-12">
				<div class="panel panel-white">
		            <div class="panel-heading clearfix">
		                <h4 class="panel-title">Sala</h4>
		            </div>
		            <div class="panel-body">
		            	{!! Form::open(array('url' => 'admin/sala/salvar', 'class' => 'form-horizontal')) !!}
        				{!! Form::hidden('Id_Sala', $sala->Id_Sala) !!}

                            <div class="form-group">
                                <label class="col-sm-1 control-label">Adaptada</label>
                                <div class="col-sm-4">   
                                {!! Form::select('Adaptada', $options, $sala->Adaptada, array('class'=>'form-control')) !!}
                                </div>
                            </div>

                          	<div class="form-group">
                                <label class="col-sm-1 control-label">Descricao</label>
                                <div class="col-sm-4">
                                    <textarea name="Descricao" class="form-control"> {{$sala->Descricao}} </textarea>
                                </div>
                            </div>
                            <a href="/admin/sala" class="btn btn-lg btn-default">Cancelar</a>
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