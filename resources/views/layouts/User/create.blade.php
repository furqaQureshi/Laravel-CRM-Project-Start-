@extends('layouts.SideBar')

@section('sideBar')

<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-wrappe">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>User Create</h1>
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
                  <h3 class="card-title">User Create </h3>
                </div>
                <form class="mb-5" action="{{url('user/create')}}" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" class="form-control" name="first_name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">User Email</label>
                      <input type="email" class="form-control" name="user_email" id="exampleInputEmail1"
                        placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">User Password</label>
                      <input type="password" class="form-control" name="user_password" id="exampleInputPassword1"
                        placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">User Phone Number</label>
                      <input type="number" class="form-control" name="user_phone" id="exampleInputPassword1"
                        placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">User Phone Address</label>
                      <textarea name="user_address" class="form-control" rows="2" placeholder="User Address...."></textarea>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-primary">User Create</button>
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