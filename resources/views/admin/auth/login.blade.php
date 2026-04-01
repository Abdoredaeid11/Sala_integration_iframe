@extends('layouts.app')

@section('content')
    <section class="d-flex align-items-center justify-content-center min-vh-100 bg-light">

        <div class="login-card">
            {{-- favicon --}}
            <div class="text-center mb-4">
                <img src="{{ asset('images/favicon.ico') }}" alt="Favicon" class="img-fluid">
            </div>
            <div class="text-center">
                <h4 class="mt-3 fw-semibold">Welcome back</h4>
                <p class="text-muted small">Sign in to continue</p>
            </div>

            <form method="POST" action="{{ route('login.store') }}" novalidate>
                @csrf

                <!-- Username -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                        name="username" placeholder="Username" value="{{ old('username') }}" required autofocus>
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-floating mb-3 position-relative">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    <span class="position-absolute top-50 end-0 translate-middle-y pe-3" style="cursor:pointer;"
                        onclick="togglePw()">
                        <i id="eye" class="bi bi-eye fs-5 text-secondary"></i>
                    </span>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Remember me -->
                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        Remember me
                    </label>
                </div>
                <!-- Submit -->
                <button class="btn btn-primary w-100 py-2 shadow-sm" type="submit">
                    Sign in
                </button>
            </form>
        </div>
    </section>


    <style>
        /* ---------- modern glass card ---------- */
        .login-card {
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, .85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, .3);
            border-radius: 16px;
            padding: 2.5rem 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, .1);
            animation: fadeIn .7s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ---------- floating label fix ---------- */
        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label {
            color: #6366f1;
        }
    </style>
@endsection
