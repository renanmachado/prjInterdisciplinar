@extends('cms/master')

@section('title')
	Palestrantes
@stop

@section('styles')
@stop

@section('content')
	<div class="page-title">
	    <h3>Palestrantes</h3>
	    <div class="page-breadcrumb">
	        <ol class="breadcrumb">
	            <li><a href="/admin">Home</a></li>
	            <li class="active">Palestrantes</li>
	        </ol>
	    </div>
	</div>
	<div id="main-wrapper">
		<div class="row">
        	<div class="col-md-12">
        		<a href="/admin/palestrante/cadastrar" class="btn fright btn-info" style="margin-bottom:10px;" type="button"><i class="fa fa-plus"></i>&nbsp;&nbsp;Novo registro</a>
				<div class="panel panel-white">
		            <div class="panel-heading clearfix">
		                <h4 class="panel-title">Palestrantes</h4>
		            </div>
		            <div class="panel-body">
		               <div class="table-responsive">
		                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
		                    <thead>
		                        <tr>
		                            <th>ID</th>
		                            <th>Nome</th>
		                            <th>Mini Currículo</th>
		                            <th class="no-sort">Ações</th>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <th>ID</th>
		                            <th>Nome</th>
		                            <th>Mini Currículo</th>
		                            <th class="no-sort" >Ações</th>
		                        </tr>
		                    </tfoot>
		                    <tbody>
		                        @if(count($palestrantes) > 0 )
		                        	@foreach($palestrantes as $r)
			                        <tr>
			                            <td>{{$r->Id_Palestrante}}</td>
			                            <td>{{$r->Nome}}</td>
			                            <td>{{$r->Minicurriculo}}</td>
			                            <td class ="text-right" style="width:15%">
			                            	{!! Form::open(array('url' => 'admin/palestrante/excluir', 'class' => 'register-edit')) !!}
			                                {!! Form::hidden('Id_Palestrante', $r->Id_Palestrante, array('class' => 'register-id')) !!}
			                                <button type="button" style="float:right;margin:2px" class="btn btn-danger remove-item"><i class="glyphicon glyphicon-remove"></i></button>
			                                {!! Form::close() !!}
			                                <a class="btn btn-primary" style="float:right;margin:2px"  href="{{URL::to('/')}}/admin/palestrante/editar/{{$r->Id_Palestrante}}"><i class="glyphicon glyphicon-edit"></i></a>                                        		
			                            </td>
			                        </tr>
			                        @endforeach
		                        @endif
		                        
		                    </tbody>
		                   </table>  
		                </div>
		            </div>
		        </div>
		    </div>
		</div>		
	</div><!-- Main Wrapper -->
@stop

@section('scripts')

@stop