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
               <h4>Runner Enroll Form</h4>
          </div>
          <div class="card-body">

          </div>
          <form action="{{ route('runner.enroll')}}" method="post" enctype="multipart/form-data">
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
            <label>Run</label>
            <select name="run_id" class="form-control">
            <option>-- Select Run --</option>
                @foreach($runs as $run)
                  <option value="{{ $run->id }}">{{ $run->title }}</option>
                @endforeach
            </select>
           </div>
           <div class="col-md-6">
              <input type="submit" class="btn btn-primary" value="Enroll"/>
           </div>
           </div>
        </form>

@endsection