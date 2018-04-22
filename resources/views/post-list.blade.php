@extends('layouts.app')

@section('stylesheet')
  <link rel="stylesheet" href="{{('css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')

@component('_partials.breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data tables</li>
@endcomponent

  <!-- Main content -->
    <section class="content">
      <div class="box-body">
      <a href="{{route('add.post')}}" class="btn btn-info" style="float:right">Add New Post</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Title</th>
                  <th>Sub-Title</th>
                  <th>Created By:</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                  $i = 1;
                @endphp                
                @foreach($post as $key => $value)
                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$value->title}}</td>
                    <td>{{$value->sub_title}}</td>
                    <td>{{$value->created_by}}</td>
                    <td>{{$value->created_at}}</td>
                    <td><a href="{{route('post.content.edit',['postId' => $value->id])}}" class="btn btn-info">View</a></td>
                  </tr>
                @php
                  $i++;
                @endphp  
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>Title</th>
                  <th>Sub-Title</th>
                  <th>Created By:</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
    </section>
<!-- ./wrapper -->
@endsection
@section('scripts')
<!-- DataTables -->
<script src="{{('js/jquery.dataTables.min.js')}}"></script>
<script src="{{('js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    /*$('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })*/
  })
</script>
@endsection