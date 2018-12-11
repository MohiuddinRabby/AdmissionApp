@extends('admin_layout')
@section('content')
<h2>Add a Notice:</h2>
<form class="form-horizontal" method="POST" action="{{URL::to('/storeNotice')}}">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="email" class="col-md-2 control-label">Title</label>

        <div class="col-md-6">
            <input id="email" type="text" class="form-control" name="title" value="" required autofocus>

        </div>
    </div>

    
    <div class="form-group">
        <label for="email" class="col-md-2 control-label">Description</label>

         <div class="col-md-6">
            <textarea id="email" rows="5" class="form-control" name="description" value="" required autofocus></textarea>

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