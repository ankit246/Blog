@extends('layouts.app')
@section('stylesheet')
<link rel="stylesheet" href="{{('css/select2.min.css')}}">
  <link rel="stylesheet" href="{{('css/bootstrap-datepicker.min.css')}}">
  @endsection
@section('content')

@component('_partials.breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Form</li>
@endcomponent

  <!-- Main content -->
    <section class="content">
      <div class="tab-pane active" id="settings">
                <form class="form-horizontal" method="post" action="{{route('post.content.edit',['postId' => $post->id])}}">
                  @csrf
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Title</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="{{old('title') ?? $post->title}}" name="title" id="title" placeholder="Title">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Sub Title</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="{{old('subTitle') ?? $post->sub_title}}" name="subTitle" id="subTitle" placeholder="Sub Title">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Content</label>

                    <div class="col-sm-8">
                      <textarea type="text" class="form-control" name="content" id="content">{{old('content') ?? $post->content}}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Created By:</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="{{old('createdBy') ?? $post->created_by}}" name="createdBy" id="subTitle" placeholder="Sub Title">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Image</label>

                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="image" id="image">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
    </section>
    @endsection
<!-- ./wrapper -->
@section('scripts')
		<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <script>
			CKEDITOR.replace( 'content' );
		</script>
@endsection