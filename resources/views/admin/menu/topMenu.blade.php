@extends('admin.master')
@section('content')
<div class="wrapper">

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Top menu</h3>
                      <a href="{{ route('admin.menu.addTopMenu') }}" class="btn btn-icon icon-left btn-info" style="margin-right:1%;margin-top:-1%;position:absolute; right:0;">
                        <i class="fas fa-plus"></i>Add</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Link</th>
                          <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($topMenus as $topMenu)

                            <tr>
                                <td> </td>
                                <td> {{ $topMenu->name }}</td>
                                <td> {{ $topMenu->link }}</td>
                                <td> {{ $topMenu->id }}</td>
                            </tr>


                                @endforeach
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
