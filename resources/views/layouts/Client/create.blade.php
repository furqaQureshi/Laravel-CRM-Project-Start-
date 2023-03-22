  
@extends('layouts.SideBar')

@section('sideBar')
    
<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-wrappe">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Client Create</h1>
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
                  <h3 class="card-title">Client Create </h3>
                </div>
                <form class="mb-5" method="POST" action="{{url('client/create')}}">
                  @csrf
                  <div class="card-body">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Client Name</label>
                      <input type="text" class="form-control" name="client_name" placeholder="Client Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Client Email</label>
                      <input type="email" class="form-control" name="email" placeholder="client Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Client Phone</label>
                      <input type="number" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Client Oranization</label>
                      <select name="organization_id" class="form-control">
                        <option value="">Select Your Oranization</option>
                        @foreach ($client as $item)    
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div class="card-footer">
                    <button class="btn btn-primary">Client Create</button>
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
 