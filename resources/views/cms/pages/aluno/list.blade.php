@extends('cms/master')

@section('title')
	Alunos
@stop

@section('styles')
@stop

@section('content')
	<div class="page-title">
	    <h3>Alunos</h3>
	    <div class="page-breadcrumb">
	        <ol class="breadcrumb">
	            <li><a href="/admin">Home</a></li>
	            <li class="active">Alunos</li>
	        </ol>
	    </div>
	</div>
	<div id="main-wrapper">
		<div class="row">
        	<div class="col-md-12">
        		<a href="/admin/aluno/cadastrar" class="btn fright btn-info" style="margin-bottom:10px;" type="button"><i class="fa fa-plus"></i>&nbsp;&nbsp;Novo registro</a>
				<div class="panel panel-white">
		            <div class="panel-heading clearfix">
		                <h4 class="panel-title">Alunos</h4>
		            </div>
		            <div class="panel-body">
		               <div class="table-responsive">
		                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
		                    <thead>
		                        <tr>
		                            <th>RA</th>
		                            <th>Nome</th>
		                            <th>Email</th>
		                            <th class="no-sort">Ações</th>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <th>RA</th>
		                            <th>Nome</th>
		                            <th>Email</th>
		                            <th class="no-sort" >Ações</th>
		                        </tr>
		                    </tfoot>
		                    <tbody>
		                        @if(count($alunos) > 0 )
		                        	@foreach($alunos as $r)
			                        <tr>
			                            <td>{{$r->RA}}</td>
			                            <td>{{$r->Nome}}</td>
			                            <td>{{$r->Email}}</td>
			                            <td class = "text-right" style="width:15%" >
			                            	{!! Form::open(array('url' => 'admin/aluno/excluir', 'class' => 'register-edit')) !!}
			                                {!! Form::hidden('id', $r->RA, array('class' => 'register-id')) !!}
			                                <button type="button" style="float:right;margin:2px" class="btn btn-danger remove-item"><i class="glyphicon glyphicon-remove"></i></button>
			                                {!! Form::close() !!}
			                                <a class="btn btn-primary" style="float:right;margin:2px"  href="{{URL::to('/')}}/admin/aluno/editar/{{$r->RA}}"><i class="glyphicon glyphicon-edit"></i></a>                                        		
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