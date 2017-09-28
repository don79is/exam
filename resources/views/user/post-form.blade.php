@extends('layouts.app')

@section('content')
    {{--<div class="container">--}}
        {{--<div class="panel panel-info">--}}
            {{--<div class="panel-heading">--}}
                {{--<h4>Post</h4>--}}
            {{--</div>--}}
            {{--<div class="panel-body">--}}
                {{--<form action="{{ route('app.posts.create') }}">--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="title">Title</label>--}}
                        {{--<input class="form-control" type="text" id="title" name="title">--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="text">Text</label>--}}
                        {{--<textarea class="form-control" id="text" name="text">--}}
    {{--</textarea></div>--}}

                    {{--<div style="position:relative;">--}}
                        {{--<a class='btn btn-primary'>--}}
                            {{--Choose File...--}}
                            {{--<input type="file"--}}
                                   {{--style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'--}}
                                   {{--name="file_source" size="40" onchange='$("#upload-file-info").html($(this).val());'>--}}
                        {{--</a>--}}
                        {{--&nbsp;--}}
                        {{--<span class='label label-info' id="upload-file-info"></span>--}}
                    {{--</div>--}}
                    {{--<br>--}}
                    {{--<div class="form-group">--}}
                        {{--<button type="submit" class="btn btn-success"--}}
                                {{--name="button">Add post--}}
                        {{--</button>--}}
                        {{--<button type="button" class="btn btn-default" href="app.users.index" name="button">Back</button>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="container">
        <form action="{{ route('app.posts.store') }}" method="post" enctype="multipart/form-data">
            {{Form::token()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="titleHelp"
                       placeholder="Enter title" name="title">
                <small id="titleHelp" class="form-text text-muted">Think of a title that describes the content best
                </small>
            </div>

            <div class="form-group">
                <label for="text">Post content</label>
                <textarea draggable="" class="form-control" id="text" rows="3" aria-describedby="textHelp"
                          placeholder="Enter text" name="text"></textarea>
                <small id="textHelp" class="form-text text-muted">Tell us more about the content of your post</small>
            </div>

            <div class="form-group">
                <label for="path">Upload a picture</label>
                <input type="file" class="form-control-file" id="path" name="path">
                <small id="pathHelp" class="form-text text-muted">Add a picture to represent your post</small>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection