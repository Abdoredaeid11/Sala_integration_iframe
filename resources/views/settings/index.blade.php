@extends('layouts.app')

@section('content')
        @php /** @var \Salla\OAuth2\Client\Provider\SallaUser $store **/ @endphp
        <div class="container mx-auto my-1">
            <div class="row">
                <div class="col-4">
                    @include('includes.errors')
                    <form action="{{ url('/settings/save') }}" method="post">
                        @csrf
                        <input type="hidden" name="setting" id = "setting">
                        <div class="form-group">
                            <label for="service">Service</label>
                            <select id="service" class="form-control my-1" name="service">
                                <option value="null" selected>Select Service</option>
                            </select>
                        </div>

                        <div class="form-group zone d-none">
                            <label for="zone">Zone</label>
                            <select id="zone" class="form-control my-1" name="zone">
                                <option value="null" selected>Select Zone</option>
                            </select>
                        </div>
                        <div class="form-group sub_zone d-none">
                            <label for="sub_zone">Subzone</label>
                            <select id="sub_zone" class="form-control my-1" name="sub_zone">
                                <option value="null" selected>Select Sub Zone</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mt-1">Save</button>
                    </form>
                </div>
            </div>
        </div>

    <script>
        // window.addEventListener('load', e => {

        // })

        const hiddenInput = document.querySelector('#setting');
        hiddenInput.setAttribute('value', localStorage.getItem('setting'));
        let serviceSelect = document.getElementById('service');
        let getServiceReq = new XMLHttpRequest();
        const settingId = localStorage.getItem('setting');
        getServiceReq.open('GET', `http://127.0.0.1:8000/services/${settingId}`,true);
        getServiceReq.send();
        getServiceReq.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                serviceSelect.innerHTML = '<option value="null" selected>Select Service</option>'
                let response = JSON.parse(this.responseText)
                response.forEach(v => {
                    let node = document.createElement('option')
                    let name = document.createTextNode(v.name)
                    node.value = v.id;
                    node.appendChild(name)
                    serviceSelect.appendChild(node)
                })
                let zoneInput = document.querySelector('.zone')
                let zoneSelect = document.getElementById('zone')
                let subzoneInput = document.querySelector('.sub_zone')
                let subzoneSelect = document.getElementById('sub_zone')
                serviceSelect.addEventListener('change', e => {
                    let serviceId = e.target.value
                    if(serviceId != "null"){
                        let serviceRequest = new XMLHttpRequest();
                        serviceRequest.open('GET', `http://127.0.0.1:8000/zones/get/${serviceId}/${settingId}`,true);
                        serviceRequest.send();
                        serviceRequest.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                zoneSelect.innerHTML = '<option value="null" selected>Select Zone</option>'
                                let response = JSON.parse(this.responseText)
                                response.forEach(v => {
                                    let node = document.createElement('option')
                                    let name = document.createTextNode(v.name)
                                    node.value = v.id;
                                    node.appendChild(name)
                                    zoneSelect.appendChild(node)
                                })
                                zoneInput.setAttribute('class','form-group zone')
                                zoneSelect.addEventListener('change', e => {
                                    let zoneId = e.target.value
                                    if(zoneId != "null"){
                                        let zoneRequest = new XMLHttpRequest();
                                        zoneRequest.open('GET', `http://127.0.0.1:8000/zones/get/${serviceId}/${settingId}/${zoneId}`, true)
                                        zoneRequest.send();
                                        zoneRequest.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                                subzoneSelect.innerHTML = '<option value="null" selected>Select Zone</option>'
                                                let response = JSON.parse(this.responseText)
                                                response.forEach(v => {
                                                    let node = document.createElement('option')
                                                    let name = document.createTextNode(v.name)
                                                    node.value = v.id;
                                                    node.appendChild(name)
                                                    subzoneSelect.appendChild(node)
                                                })
                                                subzoneInput.setAttribute('class','form-group sub_zone')
                                            }
                                        }
                                    }

                                })

                            }
                        };
                    }
                })
            }
        }
    </script>
@endsection
