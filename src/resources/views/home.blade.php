@extends('layouts.app')

@section('content')
<example-component></example-component>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <a class="nav-link" href="kurumsalajans">Kurumsal Ajans</a>
                    <a class="nav-link" href="users">Kullanıcılar</a>
                    <a class="nav-link" href="gorev">Gorevler</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
