@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="AddNews.php">Announcement</a></li>
              <li class="breadcrumb-item active">Add News</li>
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
      <form class="form-horizontal" action="/admin/addNews" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
        <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                News
              </h3>
              <a href="news" class="btn btn-icon icon-left btn-info" style="margin-right:1%;margin-top:-1%; position:absolute; right:0;">
	              <i class="fas fa-list"></i>ALL</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div>
              <label for="title">Title</label>
              <input type="text" name='title' class="form-control mb-3" placeholder="Entert title">
              </div>
              <div>
                     <label for="category">Category</label>
              <input type="text" name='category' class="form-control mb-3" placeholder="Enter Caterogy">
              </div>
              <div>
                     <label for="description">Description</label>
              <input type="text" name='description' class="form-control mb-3" placeholder="Enter description">
              </div>
              <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="image" placeholder="choose photo">
                    </div>
                  </div>
         <div>
          <label for="detail">Detail</label>
                <textarea id="summernote" name='detail'>

              </textarea>

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
