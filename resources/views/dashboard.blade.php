@extends('layouts.main_layout')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Bem-vindo, {{ Auth::user()->name }}!</h3>
                </div>
                <div class="card-body">
                    <p>Você está logado com sucesso.</p>
                    <p>Email: {{ Auth::user()->email }}</p>
                    
                    <form action="/logout" method="post" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
