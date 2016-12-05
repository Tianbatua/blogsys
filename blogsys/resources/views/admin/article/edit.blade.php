@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Articles</div>
                <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Edit faided</strong>Input doesn't match requirments<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('admin/article/'.$article->id) }}" method="POST">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <input type="text" name="title" class="form-control" required="required" placeholder="Please add title" value="{{ $article->title }}">
                        <br>
                        <textarea name="body" rows="10" class="form-control" required="required" placeholder="Please add content">{{ $article->body }}</textarea>
                        <br>
                        <button class="btn btn-lg btn-info">Edit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection