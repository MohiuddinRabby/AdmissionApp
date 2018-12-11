@extends('admin_layout')
@section('content')

<form class="form-horizontal" method="POST" action="{{URL::to('/admin/update/'.$university->id)}}">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="email" class="col-md-2 control-label">Name</label>

        <div class="col-md-6">
            <input id="email" type="text" class="form-control" name="name" value="{{$university->name}}" required autofocus>

        </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-md-2 control-label">gpa</label>

        <div class="col-md-6">
            <input id="email" type="text" class="form-control" name="gpa" value="{{$university->gpa}}" required autofocus>

        </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-md-2 control-label">Admission Date</label>

        <div class="col-md-6">
            <input id="email" type="date" class="form-control" name="admission_date" value="{{$university->admission_date}}" required autofocus>

        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-md-2 control-label">Admission Time</label>

         <div class="col-md-6">
            <input id="email" type="time" class="form-control" name="admission_time" value="{{$university->admission_time}}" required autofocus>

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                update
            </button>

        </div>
    </div>
</form>

@endsection