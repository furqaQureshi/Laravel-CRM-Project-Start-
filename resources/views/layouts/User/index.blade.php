@extends('layouts.SideBar')



@section('sideBar')
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Data</h1>
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
                <h3 class="card-title">User Data</h3>
              </div>
              <form action="" method="POST" enctype="multipart/form-data" class="mb-5">
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>User Name</th>
                        <th>User First Name</th>
                        <th>User Email</th>
                        <th>User Phone</th>
                        <th>User Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($user as $users)
                      <tr>
                        <td>{{$users->id}}</td>
                        <td>{{$users->first_name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->phone}}</td>
                        <td>{{$users->address}}</td>
                        <td>
                            <a href="{{url('user/destroy', ['id' => $users->id])}}" class="btn text-danger">
                              <i class="fas fa-solid fa-trash mx-4 "></i>
                            </a>
                            <a href="{{url('user/edit', ['id' => $users->id])}}" class="btn text-success">
                              <i class="fas fa-edit"></i>
                            </a>
                          </td>
                        </tr>
                        @endforeach
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