@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Article</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Add Failed</strong> Doesn't match requirments<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('admin/article') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="text" name="title" class="form-control" required="required" placeholder="Please add Title">
                        <br>
                        <textarea name="body" rows="10" class="form-control" required="required" placeholder="Please add Content"></textarea>
                        <br>
                        <button class="btn btn-lg btn-info">Add New Article</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
