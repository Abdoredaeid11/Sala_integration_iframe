@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('includes.errors')
            <div class="card">
                <div class="card-header">{{ __('Settings') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('settings.token.save') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="domain" class="col-md-4 col-form-label text-md-end">{{ __('Domain') }}</label>

                            <input type="hidden" name="data" id = "data">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select id="domain" class="form-control" name="url">
                                        <option value = "null">Select Domain</option>
                                        @foreach ($domains as $domain)
                                            <option value = "{{ $domain }}">{{ $domain }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if (session()->has('merchant') && session()->has('token'))
    <script>
        const merchant = {{ session('merchant') }};
        const accessToken = `{{ session('token')->getToken() }}`
        const expiresIn = `{{ session('token')->getExpires() }}`
        const refreshToken = `{{ session('token')->getRefreshToken() }}`

        const hiddenInput = document.querySelector('#data');
        const val = JSON.stringify({
            'merchant': localStorage.getItem('merchant'),
            'access_token': localStorage.getItem('access_token'),
            'expires_in' : localStorage.getItem('expires_in'),
            'refresh_token' : localStorage.getItem('refresh_token'),
        });
        hiddenInput.setAttribute('value', val)
        localStorage.setItem('merchant', merchant);
        localStorage.setItem('access_token', accessToken);
        localStorage.setItem('expires_in', expiresIn);
        localStorage.setItem('refresh_token', refreshToken);
    </script>
@endif

@endsection
