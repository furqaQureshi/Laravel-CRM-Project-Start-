@extends('layouts.SideBar')

@section('sideBar')

<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-wrappe">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Project Create</h1>
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
                  <h3 class="card-title">Project Create</h3>
                </div>
                <form class="mb-5" method="POST" action="{{url('project/create')}}">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Enter Your Title">
                    </div>
                    <div class="form-group">
                      <label for="my-input">Status</label>
                      <select name="status" class="form-control">
                        <option value="">Select Your Status</option>
                        @foreach ($status as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="my-input">Client Name</label>
                      <select name="client_name" class="form-control">
                        <option value="">Select Your Client</option>
                        @foreach ($client as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="my-input">User Name</label>
                      <select name="user_name" class="form-control">
                        <option value="">Select Your User</option>
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">DeadLine</label>
                      <input type="date" class="form-control" min="{{date('Y-m-d')}}" id="exampleInputEmail1" placeholder="Enter email"
                        name="DeadLine">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <textarea class="form-control" placeholder="Enter Your Description..." name="description" rows="2"></textarea>
                      <div class="card-footer">
                        <button class="btn btn-primary">Submit</button>
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