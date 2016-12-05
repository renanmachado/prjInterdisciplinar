@extends('cms/master')

@section('title')
	evento
@stop

@section('styles')
<style type="text/css">
    .dz-image-preview {
        display: none;
    }
</style>
@stop

@section('content')
	<div class="page-title">
	    <h3>evento</h3>
	    <div class="page-breadcrumb">
	        <ol class="breadcrumb">
	            <li><a href="/admin/evento">Eventos</a></li>
	            <li class="active">{{ empty($evento->Id_Evento) ? "Cadastrar" : "Editar"  }}</li>
	        </ol>
	    </div>
	</div>
	<div id="main-wrapper">
		<div class="row">
        	<div class="col-md-12">
				<div class="panel panel-white">
		            <div class="panel-heading clearfix">
		                <h4 class="panel-title">Evento</h4>
		            </div>
		            <div class="panel-body">
                        {!! Form::open(array('route' => 'admin.evento.upload', 'method' => 'POST', 'id' => 'my-dropzone', 'class' => 'form-horizontal form single-dropzone', 'files' => true)) !!}
                            {!! Form::hidden('input-name','Imagem' ) !!}
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Capa</label>
                                <div class="col-sm-4">   
                                    <div id="img-thumb-preview">
                                        @if(empty($evento->Imagem))
                                            <img style="max-width:200px;margin-bottom:4px;" id="img-thumb" class="user size-lg img-thumbnail" src="/cms/assets/images/default-image.png">
                                        @else
                                            <img style="max-width:200px;margin-bottom:4px;" id="img-thumb" class="user size-lg img-thumbnail" src="{{$evento->Imagem}}">
                                        @endif
                                    </div>
                                    <button id="upload-submit" style="width: 200px" class="btn btn-default margin-t-5"><i class="fa fa-upload"></i> Upload</button>       
                                </div>        
                            </div>
                        {!! Form::close() !!}

		            	{!! Form::open(array('url' => 'admin/evento/salvar', 'class' => 'form-horizontal')) !!}
        				{!! Form::hidden('Id_Evento', $evento->Id_Evento) !!}
                        {!! Form::hidden('Imagem', $evento->Imagem) !!}
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Nome</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Nome', $evento->Nome, array('class'=>'form-control')) !!}
                                </div>
                                <label class="col-sm-1 control-label">Status</label>
                                <div class="col-sm-4">   
                                {!! Form::select('Id_Status', $status, $evento->Id_Status, array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Data inical inscrição</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Dt_Inicial_Inscricao', date("m/d/Y", strtotime($evento->Dt_Inicial_Inscricao)), array('class'=>'form-control date-picker')) !!}
                                </div>
                                <label class="col-sm-1 control-label">Data final inscrição</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Dt_Final_Inscricao', date("m/d/Y", strtotime($evento->Dt_Final_Inscricao)), array('class'=>'form-control date-picker')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Data inical execução</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Dt_Inicial_Execucao', date("m/d/Y", strtotime($evento->Dt_Inicial_Execucao)), array('class'=>'form-control date-picker')) !!}
                                </div>
                                <label class="col-sm-1 control-label">Data final execução</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Dt_Final_Execucao', date("m/d/Y", strtotime($evento->Dt_Final_Execucao)), array('class'=>'form-control date-picker')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Data inical disponibilidade</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Dt_Inicio_Disponibilidade', date("m/d/Y", strtotime($evento->Dt_Inicio_Disponibilidade)), array('class'=>'form-control date-picker')) !!}
                                </div>
                                <label class="col-sm-1 control-label">Data final disponibilidade</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Dt_Final_Disponibilidade', date("m/d/Y", strtotime($evento->Dt_Final_Disponibilidade)), array('class'=>'form-control date-picker')) !!}
                                </div>
                            </div>
                            <a href="/admin/evento" class="btn btn-lg btn-default">Cancelar</a>
                            <button type="submit" style="float:right;" class="btn btn-lg btn-primary">Salvar</button>

                        {!! Form::close() !!}	   
		            </div>
		        </div>
		    </div>
		</div>		
	</div><!-- Main Wrapper -->
@stop

@section('scripts')
<script src="/cms/assets/js/datepicker-PT-BR.js"></script>
<script src="/cms/assets/plugins/dropzone/dropzone.min.js"></script>
<script src="/cms/assets/js/dropzone-single.js"></script>
@stop