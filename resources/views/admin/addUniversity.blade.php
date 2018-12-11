@extends('admin_layout')
@section('content')
<h2>Add a university:</h2>
<form class="form-horizontal" method="POST" action="{{URL::to('/admin/store')}}">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="email" class="col-md-2 control-label">Name</label>

        <div class="col-md-6">
            <input id="email" type="text" class="form-control" name="name" value="" required autofocus>

        </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-md-2 control-label">Min GPA for A:</label>

        <div class="col-md-6">
            <input id="email" type="text" class="form-control" name="a_gpa" value="" required autofocus>

        </div>
    </div>

     <div class="form-group">
        <label for="email" class="col-md-2 control-label">Min GPA for B:</label>

        <div class="col-md-6">
            <input id="email" type="text" class="form-control" name="b_gpa" value="" required autofocus>

        </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-md-2 control-label">Min GPA for C:</label>

        <div class="col-md-6">
            <input id="email" type="text" class="form-control" name="c_gpa" value="" required autofocus>

        </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-md-2 control-label">Min GPA for D:</label>

        <div class="col-md-6">
            <input id="email" type="text" class="form-control" name="d_gpa" value="" required autofocus>

        </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-md-2 control-label">Admission Date</label>

        <div class="col-md-6">
            <input id="email" type="date" class="form-control" name="admission_date" value="" required autofocus>

        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-md-2 control-label">Admission Time</label>

         <div class="col-md-6">
            <input id="email" type="time" class="form-control" name="admission_time" value="" required autofocus>

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Save
            </button>

        </div>
    </div>
</form>

@endsection