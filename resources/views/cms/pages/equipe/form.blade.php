@extends('cms/master')

@section('title')
	Equipe
@stop

@section('styles')
@stop

@section('content')
	<div class="page-title">
	    <h3>Equipe</h3>
	    <div class="page-breadcrumb">
	        <ol class="breadcrumb">
	            <li><a href="/admin/equipe">Equipes</a></li>
	            <li class="active">{{ empty($equipe->Id_Equipe) ? "Cadastrar" : "Editar"  }}</li>
	        </ol>
	    </div>
	</div>
	<div id="main-wrapper">
		<div class="row">
        	<div class="col-md-12">
				<div class="panel panel-white">
		            <div class="panel-heading clearfix">
		                <h4 class="panel-title">Equipe</h4>
		            </div>
		            <div class="panel-body">
		            	{!! Form::open(array('url' => 'admin/equipe/salvar', 'class' => 'form-horizontal')) !!}
        				{!! Form::hidden('Id_Equipe', $equipe->Id_Equipe) !!}
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Nome</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Nome', $equipe->Nome, array('class'=>'form-control')) !!}
                                </div>
                                <label class="col-sm-1 control-label">Email</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Email', $equipe->Email, array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Senha</label>
                                <div class="col-sm-4">   
                                {!! Form::password('Senha', array('class'=>'form-control')) !!}
                                </div>
                                <label class="col-sm-1 control-label">Telefone</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Telefone', $equipe->Telefone, array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Repetir senha</label>
                                <div class="col-sm-4">   
                                {!! Form::password('confsenha', array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <a href="/admin/equipe" class="btn btn-lg btn-default">Cancelar</a>
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