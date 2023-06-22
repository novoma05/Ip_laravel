@extends('layouts.app')
@section('heading')
Vítej na overview
@endsection
@section('content')  
<div class="row flex-grow">
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline">
          <h6 class="card-title mb-0">Lidé</h6>
          <div class="dropdown mb-2">                                            
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-xl-5">
            <h3 class="mb-2">@php $usersCount = DB::table('users')->count(); echo $usersCount @endphp</h3>
            <div class="d-flex align-items-baseline">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>

@endsection