@extends('layouts.app')


@section('content')
@if(session('message'))
                            <div class="alert alert-success">
                                  {{ session('message') }}
                            </div>
@endif
<div class="container-fluid px-4">
    <div class="card mt-3">
          <div class="card-header">
               <h4>Runner Result Entry Form</h4>
          </div>
          <div class="card-body">

          </div>
          <form action="" method="post" enctype="multipart/form-data">
            @csrf
           <div class="mb-3">
            <label>Runner Name</label>
            <select name="runner_id" class="form-control">
                <option>-- Select Runner --</option>
                @foreach($users as $user)
                  <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
              </select>
           </div>
           <div class="mb-3">
            <label>Run time</label>
            
           </div>
           <div class="col-md-6">
              <input type="submit" class="btn btn-primary" value="Save"/>
           </div>
           </div>
        </form>

@endsection