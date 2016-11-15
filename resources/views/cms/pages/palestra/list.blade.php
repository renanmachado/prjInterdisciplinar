@extends('cms/master')

@section('title')
	Palestras
@stop

@section('styles')
@stop

@section('content')
	<div class="page-title">
	    <h3>Palestras</h3>
	    <div class="page-breadcrumb">
	        <ol class="breadcrumb">
	            <li><a href="/admin">Home</a></li>
	            <li class="active">Palestras</li>
	        </ol>
	    </div>
	</div>
	<div id="main-wrapper">
		<div class="row">
        	<div class="col-md-12">
				<div class="panel panel-white">
		            <div class="panel-heading clearfix">
		                <h4 class="panel-title">Palestras</h4>
		            </div>
		            <div class="panel-body">
		               <div class="table-responsive">
		                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
		                    <thead>
		                        <tr>
		                            <th>ID</th>
		                            <th>Nome</th>
		                            <th>Descrição</th>
		                            <th>Evento</th>
		                            <th class="no-sort">Ações</th>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <th>ID</th>
		                            <th>Nome</th>
		                            <th>Descrição</th>
		                            <th>Evento</th>
		                            <th class="no-sort" >Ações</th>
		                        </tr>
		                    </tfoot>
		                    <tbody>
		                        @if(count($palestras) > 0 )
		                        	@foreach($palestras as $r)
			                        <tr>
			                            <td>{{$r->Id_Palestra}}</td>
			                            <td>{{$r->Titulo}}</td>
			                            <td>{{$r->Descricao}}</td>
			                            <td>{{$r->evento->Nome}}</td>
			                            <td class = "text-right" style="width:15%" >
			                            	{!! Form::open(array('url' => 'admin/palestra/excluir', 'class' => 'register-edit')) !!}
			                                {!! Form::hidden('id', $r->Id_Palestra, array('class' => 'register-id')) !!}
			                                <button type="button" style="float:right;margin:2px" class="btn btn-danger vitrine-products-remove"><i class="glyphicon glyphicon-remove"></i></button>
			                                {!! Form::close() !!}
			                                <a class="btn btn-primary" style="float:right;margin:2px"  href="{{URL::to('/')}}/admin/palestra/editar/{{$r->Id_Palestra}}"><i class="glyphicon glyphicon-edit"></i></a>                                        		
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