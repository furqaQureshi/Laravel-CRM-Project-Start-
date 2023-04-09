@extends('layouts.SideBar')

@section('sideBar')

<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-wrappe">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Organization Create</h1>
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
                  <h3 class="card-title">Organization Create</h3>
                </div>
                <form class="mb-5" method="POST" action="{{url('organzition/create')}}">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Address</label>
                      <textarea class="form-control" name="address" rows="2"></textarea>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Website</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email"
                          name="website">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea class="form-control" name="description" rows="2"></textarea>

                      </div>
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