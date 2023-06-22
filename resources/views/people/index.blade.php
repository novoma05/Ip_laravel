@extends('layouts.app')
@section('heading')
Uživatelé
@endsection
@section('styles')
<link rel="stylesheet" href="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">	
<link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">	
@endsection
@section('content')  
<div class="row flex-grow">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">    
    <div class="table-responsive">
  <table id="dataTableExample" class="table">
    <thead>
      <tr>
        <th>Jméno</th>
        <th>Přijímení</th>
        <th>Email</th>  
        <th>Akce</th>      
      </tr>
    </thead>
   <tbody>

    @foreach($peoples as $people)
    <tr>
        <td>{{$people->name}}</td>
        <td>{{$people->sur_name}}</td>
        <td>{{$people->email}}</td>
        <td>
            <a href="{{route('people.edit', $people->id)}}">   <i class="link-icon" data-feather="edit"></i></a>
            <form action="{{ route('people.destroy', $people->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button style="background: transparent;border: none;" type="submit" onclick="return confirm('Are you sure you want to delete this room?')"><i class="link-icon" data-feather="trash-2"></i></button>
          </form>                    
        </td>
    </tr>
    @endforeach
   </tbody>
  </table>
</div>
</div>
</div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/js/data-table.js')}}"></script> 
@endsection