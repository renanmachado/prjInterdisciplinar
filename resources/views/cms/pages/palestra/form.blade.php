@extends('cms/master')

@section('title')
	palestra
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
	    <h3>palestra</h3>
	    <div class="page-breadcrumb">
	        <ol class="breadcrumb">
	            <li><a href="/admin/palestra">Epalestra</a></li>
	            <li class="active">{{ empty($palestra->Id_Palestra) ? "Cadastrar" : "Editar"  }}</li>
	        </ol>
	    </div>
	</div>
	<div id="main-wrapper">
		<div class="row">
        	<div class="col-md-12">
				<div class="panel panel-white">
		            <div class="panel-heading clearfix">
		                <h4 class="panel-title">palestra</h4>
		            </div>
		            <div class="panel-body">
                        {!! Form::open(array('route' => 'admin.palestra.upload', 'method' => 'POST', 'id' => 'my-dropzone', 'class' => 'form-horizontal form single-dropzone', 'files' => true)) !!}
                            {!! Form::hidden('input-name','Imagem' ) !!}
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Imagem</label>
                                <div class="col-sm-4">   
                                    <div id="img-thumb-preview">
                                        @if(empty($palestra->Imagem))
                                            <img style="max-width:200px;margin-bottom:4px;" id="img-thumb" class="user size-lg img-thumbnail" src="/cms/assets/images/default-image.png">
                                        @else
                                            <img style="max-width:200px;margin-bottom:4px;" id="img-thumb" class="user size-lg img-thumbnail" src="{{$palestra->Imagem}}">
                                        @endif
                                    </div>
                                    <button id="upload-submit" style="width: 200px" class="btn btn-default margin-t-5"><i class="fa fa-upload"></i> Upload</button>       
                                </div>        
                            </div>
                        {!! Form::close() !!}

		            	{!! Form::open(array('url' => 'admin/palestra/salvar', 'class' => 'form-horizontal')) !!}
        				{!! Form::hidden('Id_Palestra', $palestra->Id_Palestra) !!}
                        {!! Form::hidden('Imagem', $palestra->Imagem) !!}
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Título</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Titulo', $palestra->Titulo, array('class'=>'form-control')) !!}
                                </div>
                                <label class="col-sm-1 control-label">Evento</label>
                                <div class="col-sm-4">   
                                {!! Form::select('Id_Evento', $eventos, $palestra->Id_Evento, array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Data</label>
                                <div class="col-sm-4">   
                                {!! Form::text('DataHora', date("m/d/Y", strtotime($palestra->DataHora)), array('class'=>'form-control date-picker')) !!}
                                </div>
                                <label class="col-sm-1 control-label">Hora</label>
                                <div class="col-sm-4">   
                                {!! Form::select('Hora', $horas, date("H:i:s", strtotime($palestra->DataHora)), array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Sala</label>
                                <div class="col-sm-4">   
                                {!! Form::select('Id_Sala', $salas, $palestra->Id_Sala, array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Conteúdo</label>
                                <div class="col-sm-4">   
                                {!! Form::textarea('Conteudo', $palestra->Conteudo, array('class'=>'form-control')) !!}
                                </div>
                                <label class="col-sm-1 control-label">Descrição</label>
                                <div class="col-sm-4">   
                                {!! Form::textarea('Descricao', $palestra->Descricao, array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <a href="/admin/palestra" class="btn btn-lg btn-default">Cancelar</a>
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