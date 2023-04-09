@extends('layouts.SideBar')

@section('sideBar')

<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-wrappe">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Task Create</h1>
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Task Create</h3>
                </div>
                <form class="mb-5" method="POST" action="{{url('task/create')}}">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="First Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status</label>
                      <select name="status" class="form-control">
                        <option value="">Select Your Satus</option>
                        <option value="open">Open</option>
                        <option value="in progress">In Progress</option>
                        <option value="closed">Closed</option>
                      </select>
                      <label for="exampleInputEmail1">Project</label>
                      <select name="project" class="form-control">
                        <option value="">Select Your Project</option>
                        <option value="open">Open</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">User</label>
                      <select name="user" class="form-control">
                        <option value="">Select Your User</option>
                        <option value="open">Open</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Data</label>
                       <input type="date" min="{{date('Y-m-d')}}" class="form-control" name="data" placeholder="Enter Your Data">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Descritpion</label>
                       <textarea name="description" class="form-control" rows="2"></textarea>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-primary">Create Task</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>


@endsection