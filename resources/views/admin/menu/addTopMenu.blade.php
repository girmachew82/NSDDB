@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.menu.topMenu') }}">Menu</a></li>
              <li class="breadcrumb-item active">Add Menu</li>
            </ol>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

              <!-- Horizontal Form -->
              <div class="card">

              <!-- /.card-header -->
              <div class='card-body'>
              <!-- form start -->
      <form class="form-horizontal" action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
        <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Name
              </h3>
              <a href="{{ route('admin.menu.topMenu') }}" class="btn btn-icon icon-left btn-info" style="margin-right:1%;margin-top:-1%; position:absolute; right:0;">
	              <i class="fas fa-list"></i>ALL</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div>
              <label for="name">Title</label>
              <input type="text" name='name' class="form-control mb-3" placeholder="Entert name">
              </div>
              <div>
                     <label for="link">Link</label>
              <input type="text" name='link' class="form-control mb-3" placeholder="Enter link">
              </div>
              <div>
                <label for="status">Status</label>
                <select name="status" id="" class="form-control">
                    <option value="">Select</option>
                    <option value="enabled">Enabled</option>
                    <option value="disabled">Disabled</option>
                </select>
              </div>



            </div>

          </div>
        </div>
        <!-- /.col-->
      </div>



                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" name='submit'>Submit</button>
                  <button type="reset" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
              </div>
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
