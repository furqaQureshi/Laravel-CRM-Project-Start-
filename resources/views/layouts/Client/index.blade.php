@extends('layouts.SideBar')



@section('sideBar')
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
                        <th>Organization Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($client as $item)
                      @php
                      $user = App\Models\Organization::find($item->organization_id)
                      @endphp
                      <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$user->name}}</td>
                        <td>
                          <a href="{{url('client/destroy/' . $item->id)}}" class="btn text-danger">
                            <i class="fas fa-solid fa-trash mx-4 "></i>
                          </a>
                          <a href="" class="btn text-success">
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