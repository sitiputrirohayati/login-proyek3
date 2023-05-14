@extends('layouts.app')
@section('contents')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card" style="width: 25rem;">
        <div class="card-header text-center">
            Selamat datang Pasien
        </div>
        <div class="card-body">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-success">Logout</button>
            </form>
        </div>
    </div>
</div>
@endsection