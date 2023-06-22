@extends('layouts.app')
@section('heading')
Update People
@endsection
@section('content')  
<div class="row flex-grow">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">               
                <form action="{{route('people.update',$people->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Jméno:</label>
                            <input required class="form-control mb-4 mb-md-0"  value="{{$people->name}}" name="name" placeholder="zadejte jméno"/>
                        </div>
                        <div class="col-6">
                            <label>Příjmení:</label>
                            <input required class="form-control mb-4 mb-md-0" value="{{$people->sur_name}}" name="sur_name" placeholder="zadejte příjmení"/>
                        </div>
                        <div class="col-6">
                            <label>Email:</label>
                            <input required class="form-control" type="email" value="{{$people->email}}" name="email" placeholder="zadejte email" />
                        </div>                                       
                        <div class="col-6">
                            <label>Heslo:</label>
                            <input class="form-control mb-4 mb-md-0" value="" name="password" placeholder="zadejte heslo" />
                        </div>      
                        <div class="col-6">
                        <label>Opravnění:</label>
                        <input required class="form-control mb-4 mb-md-0" name="role" placeholder="1 pro admina/2 pro uživatele" type="number" min="1" max="2" />
                        </div>                                                                                 
                </div>
                    <button class="btn btn-primary" type="submit">Aktualizovat</button>              
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection