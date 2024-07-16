@extends('layouts.app')

@section('content')
    @if (!$setting?->token)
        <div class="container">
            <div class="row h-100">
                <div class="bg-white text shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div>You don't have a token yet, you can start the Authorize from Salla</div>
                        <div class="mt-4">
                            <a href="{{ route('oauth.redirect') }}"
                               class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Get
                                Access Token</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        @php /** @var \Salla\OAuth2\Client\Provider\SallaUser $store **/ @endphp
        <div class="container mx-auto my-1">
            <div class="row">
                <!-- Right Side -->
                <div class="col-12">
                    @include('includes.errors')
                    <button type="button" class="btn btn-primary mb-2 add-ship" data-ids = "" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Shipment
                    </button>
                    @include('includes.add_shipment')
                    <div class="card">
                        <table class="table table-borderless table-dark">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Order Id</th>
                                    <th>Code</th>
                                    <th>Status</th>
                                    <th>Weight</th>
                                    <th>Total</th>
                                    <th>Address</th>
                                    <th>Consignee</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <ul class="list-group">
                                    @forelse ($shipments as $shipment)
                                            <tr>
                                                <td>
                                                    @if (!isset($shipment->code))
                                                        <li class="list-group-item">
                                                            <input class="form-check-input me-1 ship-select" name="selectedShipment" type="checkbox" value="{{ $shipment->id }}">
                                                        </li>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <div class="fw-bold">
                                                                {{ $shipment['order_id'] }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if (isset($shipment->tracking_url))
                                                        <a target="_blank" href="{{ $shipment->tracking_url }}">{{ $shipment->code }}</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ ucwords(str_replace('_', ' ', $shipment['status'])) }}
                                                </td>
                                                <td>
                                                    {{ $shipment['weight'] . ' Kg' }}
                                                </td>
                                                <td>
                                                    {{ $shipment['total'] }}
                                                </td>
                                                <td>
                                                    {{ $shipment['address'] }}
                                                </td>
                                                <td>
                                                    {{ $shipment['name'] }}
                                                </td>
                                                <td>
                                                    {{ $shipment['phone'] }}
                                                </td>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td>No Shipments Yet!</td>
                                            </tr>
                                    @endforelse
                                </ul>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <script>
        let selected = document.querySelectorAll('.ship-select');
        let btn = document.querySelector('.add-ship');
        let idsInput = document.getElementById('ids');
        const ids = new Set(...btn.getAttribute('data-ids'));

        const settingId = {{ $setting?->id }};
        const accurateToken = `{{ $setting?->accurate_token }}`
        localStorage.setItem('setting', settingId);
        localStorage.setItem('accurate_token', accurateToken);

        selected.forEach(s => {
            s.addEventListener('change', e => {
                if(! ids.has(e.target.value)){
                    ids.add(e.target.value);
                    btn?.setAttribute('data-ids', [...ids]);
                    idsInput?.setAttribute('value', [...ids]);
                } else {
                    ids.delete(e.target.value);
                    btn?.setAttribute('data-ids', [...ids]);
                    idsInput?.setAttribute('value', [...ids]);
                }
            });
        })


        let hiddenInput = document.querySelector('#setting');
        hiddenInput.setAttribute('value', localStorage.getItem('setting'));
    </script>
@endsection
