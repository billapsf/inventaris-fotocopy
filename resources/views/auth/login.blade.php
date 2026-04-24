@extends('layouts.app')

@section('title', 'Login | INVENTARIS')

@section('content')
    <div class="login-wrapper">
        <div class="card login-card">
            <div class="login-heading">
                <h1>Login</h1>
                <p>Sistem Inventaris Fotocopy "PRIMA"</p>
            </div>

            @if (session('success'))
                <div class="alert alert-success" data-auto-hide>{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger" data-auto-hide>{{ $errors->first() }}</div>
            @endif

            <form action="{{ route('login.attempt') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>

            <p class="login-info">
                Akun default: <strong>admin@gmail.com</strong> / <strong>admin123</strong>
            </p>
        </div>
    </div>
@endsection
