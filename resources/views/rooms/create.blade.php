@extends('layouts.app')
@section('heading')
Add Rooms
@endsection
@section('content')  
<div class="row flex-grow">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">               
                <form action="{{route('rooms.store')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col">
                            <label>Name:</label>
                            <input required class="form-control mb-4 mb-md-0" name="name" placeholder="Enter Name"/>
                        </div>
                        <div class="col-md-6">
                            <label>Room Number</label>
                            <input required class="form-control" name="room_number" placeholder="Enter Number" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Telephone:</label>
                            <input required class="form-control mb-4 mb-md-0" name="telephone" placeholder="Enter Telephone" />
                        </div>                     
                    </div>    
                    <button class="btn btn-primary" type="submit">Submit</button>              
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection