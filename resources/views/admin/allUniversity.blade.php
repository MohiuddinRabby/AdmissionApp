@extends('admin_layout')
@section('content')
<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon user"></i><span class="break"></span>All University</h2>
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
						  <th>University Name</th>
						  <th>Admission Date</th>
						  <th>Admission Time</th>
						  <th>action</th>
					  </tr>
				  </thead>  
				  @php
				  	$i = 1;
				  @endphp 
				  @foreach($allUniversity as $university)
				  <tbody>
					<tr>
						<td>{{$i++}}</td>
						<td>{{$university->name}}</td>
						<td>{{$university->admission_date}}</td>
						<td>{{$university->admission_time}}</td>
						
							<td class="center">
						  
							<a class="btn btn-info" href="/editUniversity/{{$university->id}}">
								edit  
							</a>
							<a class="btn btn-danger" href="/deleteUniversity/{{$university->id}}" id="delete">
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