@extends('layouts.app')

@section('content')

@if (request()->is('settings/*') || request()->is('shipping/*') && !request()->is('dashboard/*'))
    <script>
        if(localStorage.getItem('setting') != null) {
            const settingId = localStorage.getItem('setting');
            window.location.replace(`{{ url('/shipping') }}/${settingId}`);
        } else {
            window.location.replace(`{{ route('oauth.redirect') }}`);
        }
    </script>
@endif
@if ((request()->is('dashboard/*') && auth()->check()) || auth()->check())
    <script>
        window.location.replace(`{{ route('clients') }}`);
    </script>
@endif
    <script>
        window.location.replace(`{{ route('oauth.redirect') }}`);
    </script>
@endsection
