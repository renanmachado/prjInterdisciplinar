@extends('cms/master')

@section('title')
	Recursos
@stop

@section('styles')
@stop

@section('content')
	<div class="page-title">
	    <h3>Recursos</h3>
	    <div class="page-breadcrumb">
	        <ol class="breadcrumb">
	            <li><a href="/admin">Home</a></li>
	            <li class="active">Recursos</li>
	        </ol>
	    </div>
	</div>
	<div id="main-wrapper">
		<div class="row">
        	<div class="col-md-12">
        		<a href="/admin/recurso/cadastrar" class="btn fright btn-info" style="margin-bottom:10px;" type="button"><i class="fa fa-plus"></i>&nbsp;&nbsp;Novo registro</a>
				<div class="panel panel-white">
		            <div class="panel-heading clearfix">
		                <h4 class="panel-title">Recursos</h4>
		            </div>
		            <div class="panel-body">
		               <div class="table-responsive">
		                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
		                    <thead>
		                        <tr>
		                            <th>ID</th>
		                            <th>Descrição</th>
		                            <th>Quantidade</th>
		                            <th class="no-sort">Ações</th>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <th>ID</th>
		                            <th>Descrição</th>
		                            <th>Quantidade</th>
		                            <th class="no-sort" >Ações</th>
		                        </tr>
		                    </tfoot>
		                    <tbody>
		                        @if(count($recursos) > 0 )
		                        	@foreach($recursos as $r)
			                        <tr>
			                            <td>{{$r->Id_Recurso}}</td>
			                            <td>{{$r->Descricao}}</td>
			                            <td>{{$r->Quantidade}}</td>
			                            <td class = "text-right" style="width:15%" >
			                            	{!! Form::open(array('url' => 'admin/recurso/excluir', 'class' => 'register-edit')) !!}
			                                {!! Form::hidden('id', $r->Id_Recurso, array('class' => 'register-id')) !!}
			                                <button type="button" style="float:right;margin:2px" class="btn btn-danger remove-item"><i class="glyphicon glyphicon-remove"></i></button>
			                                {!! Form::close() !!}
			                                <a class="btn btn-primary" style="float:right;margin:2px"  href="{{URL::to('/')}}/admin/recurso/editar/{{$r->Id_Recurso}}"><i class="glyphicon glyphicon-edit"></i></a>                                        		
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