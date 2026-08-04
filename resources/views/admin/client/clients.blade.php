@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="page-title mb-3 mb-sm-0">
                <i class="fas fa-users"></i>
                <span class="d-none d-sm-inline"> Clients Management</span>
            </h1>
            <button class="btn btn-primary btn-modern w-60 w-sm-auto" data-bs-toggle="modal"
                data-bs-target="#createClientModal">
                <i class="fas fa-plus me-2"></i> Add New Client
            </button>
        </div>

        <!-- Stats Cards -->
        <div class="row mb-4">
            <!-- Total Clients Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm stats-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Clients</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $clients->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Active Clients Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm stats-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Active Clients</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ $clients->where('active', true)->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-check-circle fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inactive Clients Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm stats-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Inactive Clients
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ $clients->where('active', false)->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-pause-circle fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Countries Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm stats-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Countries</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ $clients->pluck('country_id')->unique()->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-globe fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search and Filter Section -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <div class="row align-items-center">
                    <!-- Search Input -->
                    <div class="col-md-6 mb-3 mb-md-0">
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i class="fas fa-search text-muted"></i></span>
                            <input type="text" class="form-control border-0 bg-light" id="searchInput"
                                placeholder="Search clients by name, username, or domain...">
                        </div>
                    </div>
                    <!-- Status Filter -->
                    <div class="col-md-3 mb-3 mb-md-0">
                        <select class="form-select border-0 bg-light" id="statusFilter">
                            <option value="">All Status</option>
                            <option value="active">Active Only</option>
                            <option value="inactive">Inactive Only</option>
                        </select>
                    </div>
                    <!-- Country Filter -->
                    <div class="col-md-3">
                        <select class="form-select border-0 bg-light" id="countryFilter">
                            <option value="">All Countries</option>
                            <!-- Options will be populated via JavaScript -->
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alert Container -->
        <div id="alerts-container"></div>

        <!-- Clients Table -->
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-0 py-3">
                <h6 class="m-0 font-weight-bold text-primary">Clients List</h6>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="clientsTable">
                        <thead class="table-light">
                            <tr>
                                <th class="border-0 ps-4">#</th>
                                <th class="border-0">Name</th>
                                <th class="border-0">Username</th>
                                <th class="border-0">Domain</th>
                                <th class="border-0">Country</th>
                                <th class="border-0">Status</th>
                                <th class="border-0">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $index => $client)
                                @if ($client)
                                    <tr class="client-row" data-status="{{ $client->active ? 'active' : 'inactive' }}"
                                        data-country-code="{{ $client->country_id }}">
                                        <td class="ps-4 align-middle">
                                            <span class="text-muted">#{{ $index + 1 }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-circle me-3">
                                                    {{ strtoupper(substr($client->name, 0, 2)) }}</div>
                                                <a href="{{ url('dashboard/mappedZones/' . $client->id) }}"
                                                    class="text-decoration-none fw-bold text-primary hover-primary client-name-link">
                                                    <i class="fas me-1 small"></i>{{ $client->name }}
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle">{{ $client->username }}</td>
                                        <td class="align-middle">
                                            @php
                                                $graphqlUrl =
                                                    config('app.env') !== 'production'
                                                        ? 'http://' . $client->domain
                                                        : 'https://' . $client->domain;
                                            @endphp
                                            <a href="{{ $graphqlUrl }}" target="_blank"
                                                class="text-primary text-decoration-none d-flex align-items-center domain-link">
                                                <i class="fas fa-external-link-alt me-2 small"></i>{{ $client->domain }}
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <div class="fw-medium country-name-display"
                                                data-country-code="{{ $client->country_id }}">
                                                {{ $client->country?->name ?? 'Unknown' }}
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <span
                                                class="badge rounded-pill {{ $client->active ? 'bg-success-soft text-success' : 'bg-danger-soft text-danger' }}">
                                                <i class="fas {{ $client->active ? 'fa-check' : 'fa-times' }} me-1"></i>
                                                {{ $client->active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="btn-group" role="group">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-primary edit-client-btn"
                                                    data-id="{{ $client->id }}" data-name="{{ $client->name }}"
                                                    data-username="{{ $client->username }}"
                                                    data-domain="{{ $client->domain }}"
                                                    data-country-code="{{ $client->country_id }}"
                                                    data-active="{{ $client->active }}" title="Edit Client">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-outline-danger"
                                                    data-bs-toggle="modal" data-bs-target="#delete_confirm_modal"
                                                    onclick="setDeleteClientId({{ $client->id }})"
                                                    title="Delete Client">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Empty State -->
        <div id="emptyState" class="text-center py-5" style="display: none;">
            <i class="fas fa-search fa-3x text-muted mb-3"></i>
            <h5 class="text-muted">No clients found</h5>
            <p class="text-muted">Try adjusting your search criteria</p>
        </div>
    </div>

    <!-- Page Loader HTML -->
    <div id="page-loader">
        <div class="loader-content">
            <i class="fas fa-sync-alt fa-spin fa-3x text-primary"></i>
            <h5 class="mt-4 text-muted fw-light">Loading zones mapping...</h5>
        </div>
    </div>


    <!-- Create Client Modal -->
    <div class="modal fade" id="createClientModal" tabindex="-1" aria-labelledby="createClientModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold" id="createClientModalLabel">
                        <i class="fas fa-user-plus text-primary me-2"></i> Add New Client
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <form id="createClientForm" action="{{ route('clients.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="name" class="form-control" id="createName"
                                        placeholder="Full Name">
                                    <label for="createName">Full Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="username" class="form-control" id="createUsername"
                                        placeholder="Username">
                                    <label for="createUsername">Username</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="domain" class="form-control" id="createDomain"
                                placeholder="Domain">
                            <label for="createDomain">Domain</label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="client_id" class="form-control" id="createClientId"
                                        placeholder="Client ID">
                                    <label for="createClientId">Client ID</label>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="client_secret" class="form-control"
                                        id="createClientSecret" placeholder="Client Secret">
                                    <label for="createClientSecret">Client Secret</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="webhook_secret" class="form-control" id="createWebhookSecret"
                                placeholder="Webhook Secret">
                            <label for="createWebhookSecret">Webhook Secret</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="createPassword"
                                placeholder="Password">
                            <label for="createPassword">Password</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password_confirmation" class="form-control"
                                id="createPasswordConfirmation" placeholder="Confirm Password">
                            <label for="createPasswordConfirmation">Confirm Password</label>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select name="country_id" class="form-select" id="createCountry">
                                        <option value="">Select Country</option>
                                        <!-- Options will be populated via JavaScript -->
                                    </select>
                                    <label for="createCountry">Country</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select name="active" class="form-select" id="createStatus">
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    <label for="createStatus">Status</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i> Create Client
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Edit Client Modal -->
    <div class="modal fade" id="editClientModal" tabindex="-1" aria-labelledby="editClientModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold" id="editClientModalLabel">
                        <i class="fas fa-user-edit text-primary me-2"></i> Edit Client
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <form id="editClientForm" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="name" class="form-control" id="editName"
                                        placeholder="Full Name" required>
                                    <label for="editName">Full Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="username" class="form-control" id="editUsername"
                                        placeholder="Username" required>
                                    <label for="editUsername">Username</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="domain" class="form-control" id="editDomain"
                                placeholder="Domain" required>
                            <label for="editDomain">Domain</label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="client_id" class="form-control" id="editClientId"
                                        placeholder="Client ID">
                                    <label for="editClientId">Client ID</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="client_secret" class="form-control"
                                        id="editClientSecret" placeholder="Client Secret">
                                    <label for="editClientSecret">Client Secret</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="webhook_secret" class="form-control" id="editWebhookSecret"
                                placeholder="Webhook Secret">
                            <label for="editWebhookSecret">Webhook Secret</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="editPassword"
                                placeholder="New Password (leave empty to keep current)">
                            <label for="editPassword">New Password</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password_confirmation" class="form-control"
                                id="editPasswordConfirmation" placeholder="Confirm New Password">
                            <label for="editPasswordConfirmation">Confirm New Password</label>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select name="country_id" class="form-select" id="editCountry">
                                        <option value="">Select Country</option>
                                        <!-- Options will be populated via JavaScript -->
                                    </select>
                                    <label for="editCountry">Country</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select name="active" class="form-select" id="editStatus">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    <label for="editStatus">Status</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i> Update Client
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="delete_confirm_modal" tabindex="-1" aria-labelledby="delete_confirm_label"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0 shadow">
                <div class="modal-body text-center p-5">
                    <div class="text-danger mb-4">
                        <i class="fas fa-exclamation-triangle fa-3x"></i>
                    </div>
                    <h5 class="mb-3">Delete Client</h5>
                    <p class="text-muted mb-4">Are you sure you want to delete this client? This action cannot be undone.
                    </p>
                    <div class="d-flex justify-content-center gap-2">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" id="delete-confirm-btn" class="btn btn-danger" onclick="confirmDelete()">
                            <i class="fas fa-trash me-2"></i> Delete Client
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Form -->
    <form id="delete-form" action="" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    <!-- Custom Styles -->
    <style>
        .client-name-link {
            transition: all 0.2s ease;
            border-bottom: 1px solid transparent;
        }

        .client-name-link:hover {
            color: #4f46e5 !important;
            border-bottom: 1px solid #4f46e5;
            transform: translateX(2px);
        }

        .domain-link {
            transition: all 0.2s ease;
        }

        .domain-link:hover {
            color: #059669 !important;
            transform: translateX(2px);
        }

        .avatar-circle {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
        }

        /* Make the entire client row slightly hoverable */
        .client-row:hover {
            background-color: rgba(99, 102, 241, 0.02);
        }

        /* Custom badge styles */
        .bg-success-soft {
            background-color: rgba(16, 185, 129, 0.1) !important;
        }

        .bg-danger-soft {
            background-color: rgba(239, 68, 68, 0.1) !important;
        }

        .stats-card {
            transition: transform 0.2s ease;
        }

        .stats-card:hover {
            transform: translateY(-2px);
        }

        .page-title {
            font-weight: 600;
            color: #1f2937;
        }

        .btn-modern {
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 500;
        }

        /* Page Loader Styles */
        #page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.85);
            z-index: 9999;
            display: none;
            /* Hidden by default */
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
        }

        #page-loader .loader-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
@endsection

@section('js')
    <script>
        let deleteClientId = null;
        let countriesMap = {}; // Stores { 'US': 'United States', 'CA': 'Canada' } for quick lookup

        /**
         * Set the ID of the client to delete.
         * @param {number} id - Client ID
         */
        function setDeleteClientId(id) {
            deleteClientId = id;
        }

        /**
         * Confirm and delete the selected client.
         */
        function confirmDelete() {
            if (deleteClientId) {
                var form = document.getElementById('delete-form');
                form.action = '/dashboard/clients/delete/' + deleteClientId;

                // Add small loading state on the delete button and disable modal buttons
                var deleteBtn = document.getElementById('delete-confirm-btn');
                if (deleteBtn) {
                    deleteBtn.disabled = true;
                    deleteBtn.innerHTML =
                        '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Deleting...';
                }
                var modal = document.getElementById('delete_confirm_modal');
                if (modal) {
                    var btns = modal.querySelectorAll('button');
                    btns.forEach(function(b) {
                        b.disabled = true;
                    });
                }

                form.submit();
            }
        }

        /**
         * Fetches countries from the API and populates the global countriesMap.
         */
        async function fetchCountries() {
            try {
                const routeUrlString = @json(route('countries'));
                const url = new URL(routeUrlString);
                url.protocol = window.location.protocol;

                const response = await fetch(url.toString(), {
                    headers: {
                        'Accept': 'application/json'
                    },
                    credentials: 'same-origin'
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();
                countriesMap = {}; // Reset map
                data.forEach(country => {
                    countriesMap[String(country.id)] = country.name;
                });

                populateCountrySelects();
                updateClientCountryNamesInTable();

            } catch (error) {
                console.error('Failed to fetch countries:', error);
                showAlert('danger', 'Unable to load countries for selection. Please try again or refresh.');
            }
        }

        /**
         * Populates all country select elements (Create, Edit, Filter).
         */
        function populateCountrySelects() {
            const selects = ['#createCountry', '#editCountry', '#countryFilter'];
            const currentEditCountry = $('#editCountry').data('selected');

            selects.forEach(selector => {
                const $select = $(selector);
                let defaultOptionText = 'Select Country';
                if (selector === '#countryFilter') {
                    defaultOptionText = 'All Countries';
                }
                $select.empty().append(`<option value="">${defaultOptionText}</option>`);

                const sortedCountries = Object.keys(countriesMap).sort((a, b) => {
                    return countriesMap[a].localeCompare(countriesMap[b]);
                });

                sortedCountries.forEach(id => {
                    const name = countriesMap[id];
                    const option = $('<option></option>')
                        .val(id)
                        .text(`${name}`);

                    if (selector === '#editCountry' && currentEditCountry &&
                        id === String(currentEditCountry)) {
                        option.prop('selected', true);
                    }
                    $select.append(option);
                });
            });
        }

        /**
         * Updates the full country names in the clients table using the fetched countriesMap.
         */
        function updateClientCountryNamesInTable() {
            $('.country-name-display').each(function() {
                const countryCode = $(this).data('country-code');
                if (countryCode) {
                    const countryName = countriesMap[countryCode];
                    if (countryName) {
                        $(this).text(countryName);
                    } else {
                        $(this).text('Unknown');
                    }
                }
            });
        }

        $(document).ready(function() {
            // Setup AJAX CSRF token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Show page loader when navigating to mapping page
            $('.client-name-link').on('click', function() {
                $('#page-loader').fadeIn('fast');
            });

            // *****************************************************************
            // NEW FIX: Hide loader when page is shown from back/forward cache
            // *****************************************************************
            $(window).on('pageshow', function() {
                $('#page-loader').hide();
            });

            // Fetch countries on page load
            fetchCountries();

            // Handle search and filters
            $('#searchInput').on('keyup', function() {
                filterClients();
            });

            $('#statusFilter, #countryFilter').on('change', function() {
                filterClients();
            });

            /**
             * Filter clients based on search input and selected filters.
             */
            function filterClients() {
                var searchTerm = $('#searchInput').val().toLowerCase();
                var statusFilter = $('#statusFilter').val();
                var countryFilter = $('#countryFilter').val();
                var visibleRows = 0;

                $('.client-row').each(function() {
                    var row = $(this);
                    var name = row.find('td:eq(1)').text().toLowerCase();
                    var username = row.find('td:eq(2)').text().toLowerCase();
                    var domain = row.find('td:eq(3)').text().toLowerCase();
                    var rowStatus = row.data('status');
                    var rowCountryCode = String(row.data('country-code')).toUpperCase();

                    var matchesSearch = name.includes(searchTerm) || username.includes(searchTerm) || domain
                        .includes(searchTerm);
                    var matchesStatus = !statusFilter || rowStatus === statusFilter;
                    var matchesCountry = !countryFilter || rowCountryCode === countryFilter;

                    if (matchesSearch && matchesStatus && matchesCountry) {
                        row.show();
                        visibleRows++;
                    } else {
                        row.hide();
                    }
                });

                // Toggle empty state
                if (visibleRows === 0) {
                    $('#emptyState').show();
                    $('#clientsTable').parent().hide();
                } else {
                    $('#emptyState').hide();
                    $('#clientsTable').parent().show();
                }
            }

            // Handle Create Client Form Submission
            $('#createClientForm').on('submit', function(e) {
                e.preventDefault();
                var form = $(this);
                var submitBtn = form.find('button[type="submit"]');
                var originalText = submitBtn.html();

                form.find('.text-danger').remove();
                form.find('.is-invalid').removeClass('is-invalid');

                submitBtn.html('<i class="fas fa-spinner fa-spin me-2"></i>Creating...').prop('disabled',
                    true);

                $.ajax({
                    type: 'POST',
                    url: form.attr('action'),
                    data: form.serialize(),
                    dataType: 'json',
                    success: function(response) {
                        $('#createClientModal').modal('hide');
                        showAlert('success', response.message ||
                            'Client created successfully!');
                        setTimeout(() => location.reload(), 1000);
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON?.errors;
                        if (errors) {
                            $.each(errors, function(key, messages) {
                                var input = form.find('[name="' + key + '"]');
                                if (input.length === 0) {
                                    input = form.find('[name^="' + key + '"]');
                                }

                                input.addClass('is-invalid');
                                input.closest('.form-floating').length ?
                                    input.closest('.form-floating').after(
                                        '<div class="text-danger small mt-1">' +
                                        messages[0] + '</div>') :
                                    input.after('<div class="text-danger small mt-1">' +
                                        messages[0] + '</div>');
                            });
                        } else {
                            showAlert('danger', xhr.responseJSON?.message ||
                                'An error occurred. Please try again.');
                        }
                    },
                    complete: function() {
                        submitBtn.html(originalText).prop('disabled', false);
                    }
                });
            });

            // Handle Edit Client Button Click
            $(document).on('click', '.edit-client-btn', function() {
                var button = $(this);
                var clientId = button.data('id');
                var clientName = button.data('name');
                var clientUsername = button.data('username');
                var clientDomain = button.data('domain');
                var clientCountryCode = String(button.data('country-code'))
                    .toUpperCase();
                var clientActive = button.data('active');

                var form = $('#editClientForm');
                form.attr('action', '/dashboard/clients/' + clientId);

                form.find('#editName').val(clientName);
                form.find('#editUsername').val(clientUsername);
                form.find('#editDomain').val(clientDomain);
                form.find('#editPassword').val('');
                form.find('#editPasswordConfirmation').val('');
                form.find('#editStatus').val(clientActive ? '1' : '0');

                $('#editCountry').data('selected', clientCountryCode);
                populateCountrySelects();

                $('#editClientModal').modal('show');
            });

            // Handle Edit Client Form Submission
            $('#editClientForm').on('submit', function(e) {
                e.preventDefault();
                var form = $(this);
                var submitBtn = form.find('button[type="submit"]');
                var originalText = submitBtn.html();

                form.find('.text-danger').remove();
                form.find('.is-invalid').removeClass('is-invalid');

                submitBtn.html('<i class="fas fa-spinner fa-spin me-2"></i>Updating...').prop('disabled',
                    true);

                $.ajax({
                    type: 'PUT',
                    url: form.attr('action'),
                    data: form.serialize(),
                    dataType: 'json',
                    success: function(response) {
                        $('#editClientModal').modal('hide');
                        showAlert('success', response.message ||
                            'Client updated successfully!');
                        setTimeout(() => location.reload(), 1000);
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON?.errors;
                        if (errors) {
                            $.each(errors, function(key, messages) {
                                var input = form.find('[name="' + key + '"]');
                                if (input.length === 0) {
                                    input = form.find('[name^="' + key + '"]');
                                }
                                input.addClass('is-invalid');
                                input.closest('.form-floating').length ?
                                    input.closest('.form-floating').after(
                                        '<div class="text-danger small mt-1">' +
                                        messages[0] + '</div>') :
                                    input.after('<div class="text-danger small mt-1">' +
                                        messages[0] + '</div>');
                            });
                        } else {
                            showAlert('danger', xhr.responseJSON?.message ||
                                'An error occurred. Please try again.');
                        }
                    },
                    complete: function() {
                        submitBtn.html(originalText).prop('disabled', false);
                    }
                });
            });

            // Clear form validations and reset forms when modals are closed
            $('.modal').on('hidden.bs.modal', function() {
                var form = $(this).find('form');
                if (form.length > 0) {
                    form[0].reset();
                }
                $(this).find('.text-danger').remove();
                $(this).find('.is-invalid').removeClass('is-invalid');
                $(this).find('select').removeData('selected');
                populateCountrySelects();
            });
        });

        /**
         * Display alert messages to the user.
         * @param {string} type - 'success' or 'danger'
         * @param {string} message - The alert message
         */
        function showAlert(type, message) {
            var alertClass = (type === 'success') ? 'alert-success' : 'alert-danger';
            var icon = (type === 'success') ? 'fa-check-circle' : 'fa-exclamation-circle';

            var alertHtml = `
            <div class="alert ${alertClass} alert-dismissible fade show border-0 shadow-sm" role="alert">
                <i class="fas ${icon} me-2"></i>${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
            $('#alerts-container').prepend(alertHtml);
            setTimeout(function() {
                $('.alert').alert('close');
            }, 5000);
        }
    </script>
@endsection
