@extends('admin.master')
<!-- DataTables -->
<link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@section('content')
<div class="wrapper">

    <div class="content-wrapper">

       <!-- Main content -->
       <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">News</h3>
                  <a href="addNews" class="btn btn-icon icon-left btn-info" style="margin-right:1%;margin-top:-1%;position:absolute; right:0;">
                    <i class="fas fa-plus"></i>Add</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Category</th>
                      <th>Description</th>
                      <th>Detail</th>
                      <th>Posting date</th>
                      <th>Last update</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($news as $nws)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $nws['title'] }}</td>
                                <td>{{ $nws['category'] }}</td>
                                <td>{{$nws['description'] }}</td>
                                <td>{!!$nws['detail'] !!}</td>
                                <td>{{ $nws['post_date'] }}</td>
                                <td>{{ $nws['last_update']}}</td>
                                <td><a href="newsShow/{{ $nws['news_id'] }}">Edit</a>|<a href="">Delete</a></td>
                            </tr>
                        @empty

                        @endforelse

                    </tbody>
                    <tfoot>

                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
    </div>
</div>

@endsection
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
