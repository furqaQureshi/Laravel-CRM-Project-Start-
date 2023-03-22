@extends('layouts.SideBar')



@section('love')
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTabel</h3>
              </div>
              <form action="" method="POST" enctype="multipart/form-data" class="mb-5">
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Student Name</th>
                        <th>Student Email</th>
                        <th>Gender</th>
                        <th>Student Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>gender</td>
                          <td>gender</td>
                          <td>
                            <a href="" class="btn text-danger">
                              <i class="fas fa-solid fa-trash mx-4 "></i>
                            </a>
                            <a href="" class="btn text-success">
                              <i class="fas fa-edit"></i>
                            </a>
                          </td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                  </table>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection