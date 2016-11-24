@extends('cms/master')

@section('title')
	Aluno
@stop

@section('styles')
@stop

@section('content')
	<div class="page-title">
	    <h3>Aluno</h3>
	    <div class="page-breadcrumb">
	        <ol class="breadcrumb">
	            <li><a href="/admin/aluno">Alunos</a></li>
	            <li class="active">{{ empty($aluno->RA) ? "Cadastrar" : "Editar"  }}</li>
	        </ol>
	    </div>
	</div>
	<div id="main-wrapper">
		<div class="row">
        	<div class="col-md-12">
				<div class="panel panel-white">
		            <div class="panel-heading clearfix">
		                <h4 class="panel-title">Aluno</h4>
		            </div>
		            <div class="panel-body">
		            	{!! Form::open(array('url' => 'admin/aluno/salvar', 'class' => 'form-horizontal')) !!}
                            {!! Form::hidden('id', $aluno->RA) !!}
                            <div class="form-group">
                                <label class="col-sm-1 control-label">RA</label>
                                <div class="col-sm-4">   
                                {!! Form::text('RA', $aluno->RA, array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Nome</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Nome', $aluno->Nome, array('class'=>'form-control')) !!}
                                </div>
                                <label class="col-sm-1 control-label">Email</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Email', $aluno->Email, array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Senha</label>
                                <div class="col-sm-4">   
                                {!! Form::password('Senha', array('class'=>'form-control')) !!}
                                </div>
                                <label class="col-sm-1 control-label">Telefone</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Telefone', $aluno->Telefone, array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Repetir senha</label>
                                <div class="col-sm-4">   
                                {!! Form::password('confsenha', array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <a href="/admin/aluno" class="btn btn-lg btn-default">Cancelar</a>
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