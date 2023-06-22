@extends('layouts.app')
@section('heading')
Update Rooms
@endsection
@section('content')  
<div class="row flex-grow">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">               
                <form action="{{route('rooms.update',$room->id)}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group row">
                        <div class="col">
                            <label>Name:</label>
                            <input class="form-control mb-4 mb-md-0" name="name" value="{{$room->name}}" placeholder="Enter Name"/>
                        </div>
                        <div class="col-md-6">
                            <label>Room Number</label>
                            <input class="form-control" name="room_number" value="{{$room->number}}" placeholder="Enter Number" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Telephone:</label>
                            <input class="form-control mb-4 mb-md-0" name="telephone" value="{{$room->telephone}}" placeholder="Enter Telephone" />
                        </div>                     
                    </div>    
                    <button class="btn btn-primary" type="submit">Update</button>              
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection