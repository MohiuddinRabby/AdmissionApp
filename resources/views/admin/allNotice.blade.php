@extends('admin_layout')
@section('content')
<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon user"></i><span class="break"></span>All Notices</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div>
			
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
						  <th>Id</th>
						  <th>Title</th>
						  <th>action</th>
					  </tr>
				  </thead>  
				  @php
				  	$i = 1;
				  @endphp 
				  @foreach($allNotices as $university)
				  <tbody>
					<tr>
						<td>{{$i++}}</td>
						<td>{{$university->title}}</td>
						
							<td class="center">
							<a class="btn btn-danger" href="/deleteNotice/{{$university->id}}" id="delete">
								delete
							</a>
						</td>

						
					</tr>
					
				  </tbody>
				  @endforeach
			  </table>            
			</div>
		</div><!--/span-->
	
	</div><!--/row-->
@endsection