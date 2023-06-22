@extends('layouts.app')
@section('heading')
Přidat Uživatele
@endsection
@section('content')  
<div class="row flex-grow">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">               
                <form action="{{route('people.store')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Jméno:</label>
                            <input required class="form-control mb-4 mb-md-0" name="name" placeholder="zadejte jméno"/>
                        </div>
                        <div class="col-6">
                            <label>Příjmení:</label>
                            <input required class="form-control mb-4 mb-md-0" name="sur_name" placeholder="zadejte příjmení"/>
                        </div>
                        <div class="col-6">
                            <label>Email:</label>
                            <input required class="form-control" type="email" name="email" placeholder="zadejte email" />
                        </div>                                       
                        <div class="col-6">
                            <label>Heslo:</label>
                            <input required class="form-control mb-4 mb-md-0" name="password" placeholder="zadejte heslo" />
                        </div>       
                        <div class="col-6">
                            <label>Opravnění:</label>
                            <input required class="form-control mb-4 mb-md-0" name="role" placeholder="1 pro admina/2 pro uživatele" type="number" min="1" max="2" />
                        </div>                                                                                   
                </div>
                    <button class="btn btn-primary" type="submit">Potvrdit</button>              
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection