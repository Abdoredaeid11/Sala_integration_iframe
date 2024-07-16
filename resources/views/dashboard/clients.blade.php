@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="">
                <div
                    style="background-color: #f2f2f2; padding: 10px; border-radius: 5px; margin-top: 20px; margin-bottom: 20px; display: flex; justify-content: space-between;">
                    <h2 style="font-size: 24px; text-align: center; font-weight: bold; margin: 0;">Clients</h2>
                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_box">New</a>
                </div>

                <div class="modal fade" id="create_box" aria-labelledby="create_label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form id="create_box_form" action="{{ url('dashboard/clients') }}" method="POST">
                                    @csrf

                                    <div class="form-group pt-2">
                                        <label for="name"> <b>Name</b></label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group pt-2">
                                        <label for="username"> <b>Username</b></label>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                    <div class="form-group pt-2">
                                        <label for="domain"> <b>Domain</b></label>
                                        <input type="text" name="domain" class="form-control">
                                    </div>
                                    <div class="form-group pt-2">
                                        <label for="password"> <b>Password</b></label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group pt-2">
                                        <label for="country_code"><b>Country Code</b></label>
                                        <select name="country_code" class="form-control">
                                            <option>SA</option>
                                        </select>
                                    </div>
                                    <div class="form-group pt-2">
                                        <label for="active"><b>Select Value</b></label>
                                        <select name="active" class="form-control">
                                            <option value="true" selected>true</option>
                                            <option value="false">false</option>
                                        </select>
                                    </div>

                                    <div id="create_btn_err" class="text-center mt-3">
                                        <button id="submitBtn" type="submit" class="btn btn-primary m-3">Save</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="alerts-container">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>

                <div style="overflow-x: auto;">
                    <table class="table table-hover table-responsive" style="white-space: nowrap;">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Domain</th>
                                <th>Country Code</th>
                                <th>Country Name</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td><a href="{{ url('dashboard/mappedZones/' . $client->id) }}">{{ $client->name }}</a>
                                    </td>
                                    <td>{{ $client->username }}</td>
                                    <td>
                                        @php
                                            $graphqlUrl =
                                                config('app.env') != 'production'
                                                    ? 'http://' . $client->domain
                                                    : 'https://' . $client->domain;
                                        @endphp

                                        <a href="{{ $graphqlUrl }}">{{ $client->domain }}</a>
                                    </td>
                                    <td>{{ $client->country_code }}</td>
                                    <td>{{ $client->country->name }}</td>
                                    <td>
                                        <span
                                            style="border-radius: 12px; padding: 6px 12px; background-color: {{ $client->active ? 'green' : 'red' }}; color: white;">
                                            {{ $client->active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#edit_box_{{ $client->id }}">Edit</button>
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete_confirm_modal"
                                            onclick="setDeleteClientId({{ $client->id }})">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add Edit Modal for each client -->
        @foreach ($clients as $client)
            <div class="modal fade" id="edit_box_{{ $client->id }}" aria-labelledby="edit_label_{{ $client->id }}"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form id="edit_box_form_{{ $client->id }}" class="edit-box-form"
                                action="{{ url('dashboard/clients/' . $client->id) }}" method="POST">
                                @csrf
                                @method('POST')

                                <div class="form-group pt-2">
                                    <label for="name"> <b>Name</b></label>
                                    <input type="text" name="name" class="form-control" value="{{ $client->name }}">
                                </div>
                                <div class="form-group pt-2">
                                    <label for="username"> <b>Username</b></label>
                                    <input type="text" name="username" class="form-control" value="{{ $client->username }}">
                                    @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group pt-2">
                                    <label for="domain"> <b>Domain</b></label>
                                    <input type="text" name="domain" class="form-control"
                                        value="{{ $client->domain }}">
                                </div>
                                <div class="form-group pt-2">
                                    <label for="password"> <b>Password</b></label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group pt-2">
                                    <label for="country_code"><b>Country Code</b></label>
                                    <select name="country_code" class="form-control">
                                        <option>SA</option>
                                    </select>
                                </div>
                                <div class="form-group pt-2">
                                    <label for="active"><b>Select Value</b></label>
                                    <select name="active" class="form-control">
                                        <option value="true" {{ $client->active ? 'selected' : '' }}>true</option>
                                        <option value="false" {{ !$client->active ? 'selected' : '' }}>false</option>
                                    </select>
                                </div>

                                <div id="edit_btn_err_{{ $client->id }}" class="text-center mt-3">
                                    <button id="submitEditBtn_{{ $client->id }}" type="submit"
                                        class="btn btn-primary m-3">Save</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="delete_confirm_modal" tabindex="-1" aria-labelledby="delete_confirm_label"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5 id="delete_confirm_label">Are you sure you want to delete this client?</h5>
                        <div class="text-center mt-3">
                            <button id="confirmDeleteButton" type="button" class="btn btn-danger"
                                onclick="confirmDelete()">Delete</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete form -->
        <form id="delete-form" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    </div>
@endsection

@section('js')
    <script>
        let deleteClientId = null;

        function setDeleteClientId(id) {
            deleteClientId = id;
        }

        function confirmDelete() {
            var form = document.getElementById('delete-form');
            form.action = '/dashboard/clients/delete/' + deleteClientId;
            form.submit();
        }

        $(document).ready(function() {
            // Create form submission
            $("#create_box_form").submit(function(e) {
                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    success: function(data) {
                        $("#create_box").modal("hide");
                        location.reload();
                        showAlert('success', data.success); // Show success message
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        var errors = jqXHR.responseJSON.errors;
                        form.find('.text-danger').remove(); // Remove previous errors
                        $.each(errors, function(key, value) {
                            form.find("[name=" + key + "]").after(
                                "<div class='text-danger'>" + value[0] + "</div>");
                        });
                    }
                });
            });

            $('.edit-box-form').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    success: function(data) {
                        $("#edit_box_" + data.client.id).modal("hide");
                        showAlert('success', data.success); // Show success message
                        location.reload();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        var errors = jqXHR.responseJSON.errors;
                        var errorMsg = "";
                        $.each(errors, function(key, value) {
                            form.find("[name=" + key + "]").after(
                                "<div class='text-danger'>" + value[0] + "</div>");
                        });
                    }
                });
            });

            // Prevent modal close on validation errors
            $('#create_box').on('hidden.bs.modal', function() {
                if ($('.text-danger').length == 0) {
                    // location.reload();
                }
            });

            $('.edit-box-form').each(function() {
                var formId = $(this).attr('id');
                $('#' + formId).on('hidden.bs.modal', function() {
                    if ($('.text-danger').length == 0) {
                        // location.reload();
                    }
                });
            });

        });

        function showAlert(type, message) {
            var alertHtml = '<div class="alert alert-' + type + ' alert-dismissible fade show" role="alert">' +
                message +
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                '</div>';
            $('#alerts-container').prepend(alertHtml);

            // Optional: Auto-dismiss after 10 seconds
            setTimeout(function() {
                $('.alert').alert('close');
            }, 10000);
        }
    </script>
@endsection
