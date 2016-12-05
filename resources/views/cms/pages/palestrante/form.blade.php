@extends('cms/master')

@section('title')
	palestrante
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
	    <h3>palestrante</h3>
	    <div class="page-breadcrumb">
	        <ol class="breadcrumb">
	            <li><a href="/admin/palestrante">Palestrantes</a></li>
	            <li class="active">{{ empty($palestrante->Id_Palestrante) ? "Cadastrar" : "Editar"  }}</li>
	        </ol>
	    </div>
	</div>
	<div id="main-wrapper">
		<div class="row">
        	<div class="col-md-12">
				<div class="panel panel-white">
		            <div class="panel-heading clearfix">
		                <h4 class="panel-title">Palestrante</h4>
		            </div>
		            <div class="panel-body">
                        {!! Form::open(array('route' => 'admin.palestrante.upload', 'method' => 'POST', 'id' => 'my-dropzone', 'class' => 'form-horizontal form single-dropzone', 'files' => true)) !!}
                            {!! Form::hidden('input-name','Foto' ) !!}
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Foto</label>
                                <div class="col-sm-4">   
                                    <div id="img-thumb-preview">
                                        @if(empty($palestrante->Foto))
                                            <img style="max-width:200px;margin-bottom:4px;" id="img-thumb" class="user size-lg img-thumbnail" src="/cms/assets/images/default-image.png">
                                        @else
                                            <img style="max-width:200px;margin-bottom:4px;" id="img-thumb" class="user size-lg img-thumbnail" src="{{$palestrante->Foto}}">
                                        @endif
                                    </div>
                                    <button id="upload-submit" style="width: 200px" class="btn btn-default margin-t-5"><i class="fa fa-upload"></i> Upload</button>       
                                </div>        
                            </div>
                        {!! Form::close() !!}

		            	{!! Form::open(array('url' => 'admin/palestrante/salvar', 'class' => 'form-horizontal')) !!}
        				{!! Form::hidden('Id_Palestrante', $palestrante->Id_Palestrante) !!}
                        {!! Form::hidden('Foto', $palestrante->Foto) !!}
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Nome</label>
                                <div class="col-sm-4">   
                                {!! Form::text('Nome', $palestrante->Nome, array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Míni currículo</label>
                                <div class="col-sm-4">   
                                {!! Form::textarea('Minicurriculo', $palestrante->Minicurriculo, array('class'=>'form-control')) !!}
                                </div>
                                
                            </div>
                            <a href="/admin/palestrante" class="btn btn-lg btn-default">Cancelar</a>
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