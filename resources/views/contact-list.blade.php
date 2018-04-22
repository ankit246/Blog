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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Message</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @php
                  $i = 1;
                @endphp                
                @foreach($contact as $key => $value)
                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->message}}</td>
                    <td>{{$value->created_at}}</td>
                  </tr>
                @php
                  $i++;
                @endphp  
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Message</th>
                  <th>Date</th>
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