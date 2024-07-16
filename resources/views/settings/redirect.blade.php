@extends('layouts.app')

@section('content')
<script>
    if(localStorage.getItem('setting') != null) {
        const settingId = localStorage.getItem('setting');
        window.location.replace(`{{ url('dashboard/shipping') }}/${settingId}`);
    } else {
        window.location.replace(`{{ route('oauth.redirect') }}`);
    }
</script>
@endsection
