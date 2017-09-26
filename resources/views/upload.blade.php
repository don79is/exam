@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4>Post</h4>
        </div>
        <div class="panel-body">
            <form >
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" id="title" name="title" >
                </div>

                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea class="form-control" type="text" id="text" name="text" >
          </textarea></div>

                <div class="form-group">
                    <button type="submit"  class="btn btn-success"
                            name="button">Add post
                    </button>
                    <button type="button" class="btn btn-default" routerLink="/admin/posts" name="button">Back</button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection