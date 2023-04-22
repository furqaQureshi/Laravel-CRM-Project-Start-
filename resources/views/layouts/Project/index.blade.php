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
                        <th>Id</th>
                        <th>Client Name</th>
                        <th>User Name</th>
                        <th>Status</th>
                        <th>Project Title</th>
                        <th>Project Deadline</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($project as $i)
                      <tr>
                        <td>{{$i->id}}</td>
                        @php
                        $client = App\Models\Client::find($i->client_id);
                        @endphp
                        <td>{{$client->name ?? null}}</td>
                        @php
                        $user = App\Models\User::find($i->manager_id);
                        @endphp
                        <td>{{$user->name}}</td>
                        @php
                        $status = App\Models\Status::find($i->status_id);
                        @endphp
                        <td>{{$status->name}}</td>
                        <td>{{$i->title}}</td>
                        <td>{{$i->deadline}}</td>
                        <td>
                          <a href="{{url("project/delete/" .$i->id)}}" class="btn text-danger">
                            <i class="fas fa-solid fa-trash mx-4 "></i>
                          </a>
                          <a href="{{url("project/edit/" .$i->id)}}" class="btn text-success">
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