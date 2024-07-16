@extends('layouts.app')

@section('content')
    <div class="container">
        <form id="zonesForm" action="{{ url('dashboard/mappedZones/save', ['userId' => $userId]) }}" method="POST">
            @csrf
            @foreach ($provinces as $province)
                @php
                    // Find the existing mapped zone for this province
                    $existingMapping = $mappedZones->firstWhere('mapped_zone_id', $province['id']);
                    $selectedZoneId = $existingMapping ? $existingMapping->zone_id : null;
                    $selectedSubzoneId = $existingMapping ? $existingMapping->subzone_id : null;
                @endphp
                <div class="row mb-3" id="{{ $province['id'] }}">
                    <input name="province{{ $province['id'] }}" value="{{ $province['id'] }}" hidden />

                    <div class="col-2">
                        <p class="p-3">{{ $province['name'] }}</p>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="accurateZones{{ $province['id'] }}" class="mb-2">Accurate Zones</label>
                            <select id="accurateZones{{ $province['id'] }}" class="form-control accurateZones"
                                name="province{{ $province['id'] }}_accurateZones">
                                <option value="" selected>Select Accurate Zone</option>
                                @foreach ($accurateZones as $accurateZone)
                                    <option value="{{ $accurateZone['id'] }}"
                                        {{ $accurateZone['id'] == $selectedZoneId ? 'selected' : '' }}>
                                        {{ $accurateZone['name'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group accurateSubzones {{ $selectedSubzoneId ? '' : 'd-none' }}">
                            <label for="accurateSubzones{{ $province['id'] }}" class="mb-2">Accurate Subzones</label>
                            <select id="accurateSubzones{{ $province['id'] }}" class="form-control accurateSubzones"
                                name="province{{ $province['id'] }}_accurateSubzones">
                                <option value="" selected>Select Subzone</option>

                            </select>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row controls">
                <div class="col-4 mx-auto">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                {{ $provinces->links() }}
            </div>
        </form>
    </div>

    <script>
        const runOnce = (function() {

            const containers = document.querySelectorAll('.row');
            const userId = {{ $userId }};
            const baseUrl = "{{ url('dashboard/zones') }}";

            let zoneId
            containers.forEach(container => {
                const integrationZoneId = container.getAttribute('id');
                const selectZone = container.querySelector(`#accurateZones${integrationZoneId}`);

                if (selectZone) {
                    zoneId = selectZone.value;
                } else {
                    console.error('Select zone not found in container:', container);
                }

                if (zoneId !== "") {
                    (async () => {
                        try {
                            const response = await fetch(
                                `${baseUrl}/${zoneId}/${userId}`);
                            if (response.ok) {
                                const subzoneSelect = container.querySelector(
                                    `#accurateSubzones${integrationZoneId}`);
                                subzoneSelect.innerHTML =
                                    '<option value="" selected>Select Subzone</option>';
                                const data = await response.json();
                                data.forEach(subzone => {
                                    const option = document.createElement('option');
                                    option.value = subzone.id;
                                    option.textContent = subzone.name;
                                    subzoneSelect.appendChild(option);
                                });

                                container.querySelector('.accurateSubzones').classList.remove(
                                    'd-none');
                                const selectedSubzoneId = {!! json_encode($mappedZones->pluck('subzone_id', 'mapped_zone_id')->toArray()) !!};
                                if (selectedSubzoneId[integrationZoneId]) {
                                    const selectedOption = subzoneSelect.querySelector(
                                        `option[value="${selectedSubzoneId[integrationZoneId]}"]`
                                    );
                                    if (selectedOption) {
                                        selectedOption.selected = true;
                                    }
                                }
                            } else {
                                console.error('Failed to fetch subzones:', response.statusText);
                            }
                        } catch (error) {
                            console.error('Error fetching subzones:', error);
                        }
                    })();
                }
            });
        })();

        document.addEventListener('DOMContentLoaded', function() {
            const containers = document.querySelectorAll('.row');
            const userId = {{ $userId }};
            const baseUrl = "{{ url('dashboard/zones') }}";
            const existingMapping = {{ (bool) $mappedZones }};

            containers.forEach(container => {
                container.addEventListener('change', async function(e) {
                    if (e.target.classList.contains('accurateZones')) {
                        const selectZone = e.target;
                        const integrationZoneId = container.getAttribute('id');
                        const zoneId = selectZone.value;
                        if (zoneId !== "") {
                            try {
                                const response = await fetch(
                                    `${baseUrl}/${zoneId}/${userId}`);
                                if (response.ok) {
                                    const subzoneSelect = container.querySelector(
                                        `#accurateSubzones${integrationZoneId}`);
                                    subzoneSelect.innerHTML =
                                        '<option value="" selected>Select Subzone</option>';
                                    const data = await response.json();
                                    data.forEach(subzone => {
                                        const option = document.createElement(
                                            'option');
                                        option.value = subzone.id;
                                        option.textContent = subzone.name;
                                        subzoneSelect.appendChild(option);
                                    });
                                    container.querySelector('.accurateSubzones').classList
                                        .remove('d-none');
                                } else {
                                    console.error('Failed to fetch subzones:', response
                                        .statusText);
                                }
                            } catch (error) {
                                console.error('Error fetching subzones:', error);
                            }
                        } else {
                            const subzoneSelect = container.querySelector(
                                `#accurateSubzones${integrationZoneId}`);
                            subzoneSelect.innerHTML =
                                '<option value="" selected>Select Subzone</option>';
                            container.querySelector('.accurateSubzones').classList.add(
                                'd-none');
                        }
                    }
                });
            });

        });
    </script>
@endsection
