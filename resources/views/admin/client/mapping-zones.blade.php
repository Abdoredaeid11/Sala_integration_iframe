@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="d-flex flex-wrap justify-content-between align-items-start mb-4">
            <!-- Left side: Title, Subtitle, and Client Info -->
            <div>
                <h1 class="page-title">
                    <i class="fas fa-map-marked-alt text-primary"></i> Zone Mapping
                </h1>
                <p class="text-muted mb-0">Map your provinces to accurate shipping zones</p>

                <!-- MOBILE-ONLY Action Buttons -->
                <div class="d-flex d-md-none gap-2 mt-3">
                    <button type="button" class="btn btn-outline-secondary flex-fill" id="resetAllBtnMobile">
                        <i class="fas fa-undo me-1"></i> Reset All
                    </button>
                    <button type="button" class="btn btn-success flex-fill" id="saveAllBtnMobile" disabled>
                        <i class="fas fa-save me-1"></i> Save All
                    </button>
                </div>

                <div class="mt-3 d-inline-flex align-items-center client-chip">
                    <div class="avatar-circle me-2">{{ strtoupper(substr($client->name, 0, 2)) }}</div>
                    <div class="fw-semibold">{{ $client->name }}</div>
                </div>
            </div>

            <!-- DESKTOP-ONLY Action Buttons -->
            <div class="d-none d-md-flex gap-2">
                <button type="button" class="btn btn-outline-secondary" id="resetAllBtn">
                    <i class="fas fa-undo me-2"></i> Reset All
                </button>
                <button type="button" class="btn btn-success" id="saveAllBtn" disabled>
                    <i class="fas fa-save me-2"></i> Save All Mappings
                </button>
            </div>
        </div>

        <!-- Search and Filter Section -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <div class="row align-items-center gy-3">
                    <div class="col-lg-4">
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0">
                                <i class="fas fa-search text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-0 bg-light" id="searchProvinces"
                                placeholder="Search Salla zones...">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <select class="form-select border-0 bg-light" id="filterStatus">
                            <option value="">All Salla zones</option>
                            <option value="mapped">Mapped Only</option>
                            <option value="unmapped">Unmapped Only</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <select class="form-select border-0 bg-light" id="perPageSelect">
                            @foreach ([10, 25, 50, 100] as $option)
                                <option value="{{ $option }}" {{ $perPage == $option ? 'selected' : '' }}>
                                    {{ $option }} per page</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <button type="button" class="btn btn-outline-primary w-100" id="bulkMapBtn">
                            <i class="fas fa-layer-group me-2"></i> Bulk Assign
                        </button>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <div class="text-muted small text-lg-end">
                            Showing
                            <strong>{{ $provincesPaginator->firstItem() ?? 0 }}</strong>–<strong>{{ $provincesPaginator->lastItem() ?? 0 }}</strong>
                            of <strong>{{ $provincesPaginator->total() }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alert Container -->
        <div id="alertContainer"></div>

        <!-- Main Form -->
        <form id="zonesForm" action="{{ url('dashboard/mappedZones/save', ['userId' => $userId]) }}" method="POST">
            @csrf

            <!-- Table Header (Desktop Only) -->
            <div class="card border-0 shadow-sm mb-4 d-none d-md-block">
                <div class="card-header bg-white py-3">
                    <div class="row align-items-center fw-bold text-muted">
                        <div class="col-md-3">Salla zone</div>
                        <div class="col-md-3">Zone</div>
                        <div class="col-md-3">Subzone</div>
                        <div class="col-md-3 text-end">Status</div>
                    </div>
                </div>
            </div>

            <div class="province-list-container">
                <div class="province-list" id="provincesContainer">
                    @foreach ($provinces['data'] as $index => $province)
                        @php
                            $existingMapping = $mappedZones->firstWhere('mapped_zone_id', $province['id']);
                            $selectedZoneId = $existingMapping ? $existingMapping->zone_id : null;
                            $selectedSubzoneId = $existingMapping ? $existingMapping->subzone_id : null;
                            $isMapped = $selectedZoneId || $selectedSubzoneId;
                            $zoneName = $selectedZoneId
                                ? collect($accurateZones)->firstWhere('id', $selectedZoneId)['name'] ?? ''
                                : '';
                            $subzoneName = $selectedSubzoneId ? 'Selected Subzone' : '';
                        @endphp

                        <div class="card province-row shadow-sm mb-3 {{ $isMapped ? 'mapped' : 'unmapped' }}"
                            data-province-id="{{ $province['id'] }}"
                            data-province-name="{{ strtolower($province['name']) }}">
                            <div class="card-body">
                                <input type="hidden" name="{{ $province['id'] }}" value="{{ $province['id'] }}">
                                <div class="row align-items-center gy-3">
                                    <!-- Province Info -->
                                    <div class="col-12 col-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="province-indicator me-2"></div>
                                            <div>
                                                <div class="fw-bold">{{ $province['name'] }}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Zone Selection -->
                                    <div class="col-12 col-md-3">
                                        <label for="{{ $province['id'] }}_accurateZones"
                                            class="form-label d-md-none">Zone</label>
                                        <select class="form-select accurate-zones"
                                            name="{{ $province['id'] }}_accurateZones"
                                            id="{{ $province['id'] }}_accurateZones"
                                            data-province-id="{{ $province['id'] }}" data-bs-toggle="tooltip"
                                            title="Select a zone for this shopify zone">
                                            <option value=""></option>
                                            @foreach ($accurateZones as $accurateZone)
                                                <option value="{{ $accurateZone['id'] }}"
                                                    {{ $accurateZone['id'] == $selectedZoneId ? 'selected' : '' }}>
                                                    {{ $accurateZone['name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Subzone Selection -->
                                    <div class="col-12 col-md-3 subzone-container">
                                        <label for="{{ $province['id'] }}_accurateSubzones"
                                            class="form-label d-md-none">Subzone</label>
                                        <div class="position-relative subzone-wrapper">
                                            <select class="form-select accurate-subzones"
                                                name="{{ $province['id'] }}_accurateSubzones"
                                                id="{{ $province['id'] }}_accurateSubzones"
                                                data-province-id="{{ $province['id'] }}" data-bs-toggle="tooltip"
                                                title="Select a subzone" disabled>
                                                <option value=""></option>
                                            </select>
                                            <div class="no-subzones d-none">
                                                <small class="text-muted"><i class="fas fa-info-circle me-1"></i>No
                                                    subzones available</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Status & Actions -->
                                    <div class="col-12 col-md-3 text-md-end">
                                        <div
                                            class="d-flex align-items-center justify-content-between justify-content-md-end mt-2 mt-md-0">
                                            <div class="d-flex align-items-center">
                                                <span class="mapping-preview small me-2 {{ $isMapped ? '' : 'd-none' }}"
                                                    data-bs-toggle="tooltip"
                                                    title="{{ $province['name'] }} mapped to {{ $zoneName }} {{ $subzoneName ? '→ ' . $subzoneName : '' }}">
                                                    <i class="fas fa-link text-primary"></i>
                                                </span>
                                                <span
                                                    class="mapping-status badge {{ $isMapped ? 'bg-success' : 'bg-warning' }}">
                                                    {{ $isMapped ? 'Mapped' : 'Pending' }}
                                                </span>
                                            </div>
                                            <button type="button"
                                                class="btn btn-sm btn-link text-danger clear-mapping ms-2"
                                                {{ !$isMapped ? 'disabled' : '' }} title="Clear mapping">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Pagination Controls -->
            @if ($provincesPaginator->lastPage() > 1)
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body py-2">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                            <div class="text-muted small">
                                Page <strong>{{ $provincesPaginator->currentPage() }}</strong> of
                                <strong>{{ $provincesPaginator->lastPage() }}</strong>
                            </div>
                            <nav aria-label="Zone mapping pagination">
                                <ul class="pagination pagination-sm mb-0">
                                    {{-- Previous --}}
                                    <li class="page-item {{ $provincesPaginator->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link"
                                            href="{{ $provincesPaginator->appends(['per_page' => $perPage])->previousPageUrl() }}"
                                            aria-label="Previous">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                    </li>

                                    {{-- Page Numbers --}}
                                    @php
                                        $current = $provincesPaginator->currentPage();
                                        $last = $provincesPaginator->lastPage();
                                        $start = max(1, $current - 2);
                                        $end = min($last, $current + 2);
                                    @endphp

                                    @if ($start > 1)
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="{{ $provincesPaginator->appends(['per_page' => $perPage])->url(1) }}">1</a>
                                        </li>
                                        @if ($start > 2)
                                            <li class="page-item disabled"><span class="page-link">&hellip;</span></li>
                                        @endif
                                    @endif

                                    @for ($i = $start; $i <= $end; $i++)
                                        <li class="page-item {{ $i === $current ? 'active' : '' }}">
                                            <a class="page-link"
                                                href="{{ $provincesPaginator->appends(['per_page' => $perPage])->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    @if ($end < $last)
                                        @if ($end < $last - 1)
                                            <li class="page-item disabled"><span class="page-link">&hellip;</span></li>
                                        @endif
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="{{ $provincesPaginator->appends(['per_page' => $perPage])->url($last) }}">{{ $last }}</a>
                                        </li>
                                    @endif

                                    {{-- Next --}}
                                    <li class="page-item {{ $provincesPaginator->hasMorePages() ? '' : 'disabled' }}">
                                        <a class="page-link"
                                            href="{{ $provincesPaginator->appends(['per_page' => $perPage])->nextPageUrl() }}"
                                            aria-label="Next">
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Empty State -->
            <div id="emptyState" class="text-center py-5 d-none">
                <i class="fas fa-search fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No Shopify zones found</h5>
                <p class="text-muted">Try adjusting your search criteria</p>
            </div>
        </form>

        <!-- Bulk Mapping Modal -->
        <div class="modal fade" id="bulkMappingModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header border-0">
                        <h5 class="modal-title">
                            <i class="fas fa-layer-group text-primary me-2"></i>
                            Bulk Zone Assignment
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label"> for All Unmapped Shopify zones</label>
                            <select class="form-select" id="bulkZoneSelect">
                                <option value="">Select Accurate Zone</option>
                                @foreach ($accurateZones as $zone)
                                    <option value="{{ $zone['id'] }}">{{ $zone['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="alert alert-info border-0">
                            <i class="fas fa-info-circle me-2"></i>
                            This will assign the selected zone to all currently unmapped shopify zones.
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="confirmBulkMapping">
                            <i class="fas fa-check me-2"></i>Apply to All
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .page-title {
            font-weight: 600;
            color: #1f2937;
        }

        .avatar-circle {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
        }

        .client-chip {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 9999px;
            padding: 6px 10px;
        }

        .btn-success {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border: none;
        }

        .btn-success:hover {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
            transform: translateY(-1px);
        }

        #saveAllBtn:disabled,
        #saveAllBtnMobile:disabled {
            background: #6b7280;
            border-color: #6b7280;
        }

        .province-row {
            transition: border-color 0.2s ease;
            border-left: 4px solid transparent;
        }

        .province-row.mapped {
            border-left-color: #10b981;
        }

        .province-row.unmapped {
            border-left-color: #f59e0b;
        }

        .province-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .province-row.mapped .province-indicator {
            background-color: #10b981;
        }

        .province-row.unmapped .province-indicator {
            background-color: #f59e0b;
        }

        .mapping-status {
            transition: all 0.3s ease;
        }

        .bg-success {
            background-color: #10b981 !important;
        }

        .bg-warning {
            background-color: #f59e0b !important;
        }

        .subzone-wrapper {
            position: relative;
        }

        .subzone-loading {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.9);
            z-index: 1;
        }

        .form-select:focus,
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        /* ----- Responsive Adjustments ----- */
        @media (max-width: 767.98px) {
            .page-title {
                font-size: 1.75rem;
            }

            #resetAllBtnMobile,
            #saveAllBtnMobile {
                padding-left: 0.5rem;
                padding-right: 0.5rem;
                font-size: 0.9rem;
            }

            .province-list-container {
                margin-top: -1rem;
            }

            .province-row {
                border-left-width: 4px !important;
            }

            .province-row .form-label {
                margin-bottom: 0.25rem;
                font-size: 0.8rem;
                color: #6b7280;
                font-weight: 500;
            }

            .province-row .form-select {
                font-size: 0.9rem;
            }
        }

        @media (min-width: 768px) {
            .province-list {
                background-color: #fff;
                border-radius: 0.375rem;
                overflow: hidden;
                border: 1px solid #dee2e6;
            }

            .province-row {
                border-radius: 0 !important;
                box-shadow: none !important;
                border-bottom: 1px solid #dee2e6;
                margin-bottom: 0 !important;
            }

            .province-row:last-child {
                border-bottom: none;
            }

            .province-row .card-body {
                padding: 0;
            }

            .province-row .row {
                padding: 1rem 1.25rem;
            }

            .province-row .form-select {
                font-size: 0.875rem;
            }
        }

        /* Pagination Styles */
        .pagination .page-link {
            border: none;
            color: #6366f1;
            border-radius: 0.375rem;
            margin: 0 2px;
            min-width: 32px;
            text-align: center;
        }

        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: #fff;
        }

        .pagination .page-link:hover {
            background-color: #eef2ff;
            color: #4f46e5;
        }

        .pagination .page-item.disabled .page-link {
            background: transparent;
            color: #d1d5db;
        }
    </style>
@endsection

@section('js')
    <script>
        class ZoneMappingManager {
            constructor() {
                this.userId = {{ $userId }};
                this.baseUrlTemplate =
                    "{{ route('zones.subzones', ['zoneId' => 'ZONE_ID_PLACEHOLDER', 'userId' => $userId]) }}";
                this.mappedCount = 0;
                this.totalCount = {{ $provincesPaginator->total() }};
                this.pageCount = {{ count($provinces['data']) }};
                this.hasChanges = false;
                this.init();
            }

            init() {
                this.loadExistingSubzones();
                this.bindEvents();
                this.setupAutoSave();
                this.initTooltips();
            }

            initTooltips() {
                const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                tooltipTriggerList.forEach((tooltipTriggerEl) => {
                    new bootstrap.Tooltip(tooltipTriggerEl, {
                        placement: 'top'
                    });
                });
            }

            bindEvents() {
                $(document).on('change', '.accurate-zones', (e) => {
                    this.handleZoneChange(e.target);
                });

                $(document).on('change', '.accurate-subzones', (e) => {
                    this.handleSubzoneChange(e.target);
                });

                $('#searchProvinces').on('input', () => {
                    this.filterProvinces();
                });

                $('#filterStatus').on('change', () => {
                    this.filterProvinces();
                });

                $(document).on('click', '.clear-mapping', (e) => {
                    this.clearMapping(e.target);
                });

                $('#saveAllBtn').on('click', () => {
                    this.saveAllMappings();
                });

                $('#saveAllBtnMobile').on('click', () => {
                    this.saveAllMappings();
                });

                $('#resetAllBtn').on('click', () => {
                    this.resetAllMappings();
                });

                $('#resetAllBtnMobile').on('click', () => {
                    this.resetAllMappings();
                });

                $('#bulkMapBtn').on('click', () => {
                    $('#bulkMappingModal').modal('show');
                });

                $('#confirmBulkMapping').on('click', () => {
                    this.applyBulkMapping();
                });

                $('#zonesForm').on('change', 'select', () => {
                    this.hasChanges = true;
                    this.updateSaveButton();
                });

                // Per-page selector
                $('#perPageSelect').on('change', (e) => {
                    this.navigateWithCheck(() => {
                        const url = new URL(window.location.href);
                        const lastPage = Math.ceil({{ $provincesPaginator->total() }} / e.target.value);
                        const page = {{ $page }};
                        url.searchParams.set('per_page', e.target.value);
                        url.searchParams.set('page', page > lastPage ? lastPage : page);
                        window.location.href = url.toString();
                    });
                });

                // Intercept pagination links when there are unsaved changes
                $(document).on('click', '.pagination .page-link', (e) => {
                    if (this.hasChanges) {
                        e.preventDefault();
                        const href = $(e.currentTarget).attr('href');
                        if (href) {
                            this.navigateWithCheck(() => {
                                window.location.href = href;
                            });
                        }
                    }
                });

                $(window).on('beforeunload', (e) => {
                    if (this.hasChanges) {
                        e.preventDefault();
                        return "You have unsaved changes. Are you sure you want to leave?";
                    }
                });
            }

            navigateWithCheck(callback) {
                if (this.hasChanges) {
                    if (confirm('You have unsaved changes. Are you sure you want to leave this page?')) {
                        this.hasChanges = false;
                        callback();
                    }
                } else {
                    callback();
                }
            }

            // **CONCURRENT IMPLEMENTATION**
            async loadExistingSubzones() {
                const mappedZones = @json($mappedZones->keyBy('mapped_zone_id'));

                // Create array of promises for concurrent execution
                const subzonePromises = Object.entries(mappedZones)
                    .filter(([provinceId, mapping]) => mapping.zone_id)
                    .map(([provinceId, mapping]) => {
                        return this.loadSubzonesWithErrorHandling(
                            mapping.zone_id,
                            provinceId,
                            mapping.subzone_id
                        );
                    });

                // Execute all requests concurrently
                if (subzonePromises.length > 0) {
                    console.log(`Loading ${subzonePromises.length} subzone requests concurrently...`);

                    try {
                        const results = await Promise.all(subzonePromises);
                        const successful = results.filter(r => r.success).length;
                        const failed = results.filter(r => !r.success).length;

                        console.log(`Subzone loading completed: ${successful} successful, ${failed} failed`);

                        if (failed > 0) {
                            this.showAlert('warning',
                                `${successful} zones loaded successfully, ${failed} failed to load.`);
                        }
                    } catch (error) {
                        console.error('Critical error in concurrent subzone loading:', error);
                        this.showAlert('danger', 'Some zones failed to load. Please refresh the page.');
                    }
                }
            }

            // Wrapper method for individual request error handling
            async loadSubzonesWithErrorHandling(zoneId, provinceId, selectedSubzoneId = null) {
                try {
                    await this.loadSubzones(zoneId, provinceId, selectedSubzoneId);
                    return {
                        success: true,
                        provinceId,
                        zoneId
                    };
                } catch (error) {
                    console.error(`Failed to load subzones for province ${provinceId}, zone ${zoneId}:`, error);
                    return {
                        success: false,
                        provinceId,
                        zoneId,
                        error: error.message
                    };
                }
            }

            async handleZoneChange(selectElement) {
                const $select = $(selectElement);
                const provinceId = $select.data('province-id');
                const zoneId = $select.val();
                const $container = $(`.province-row[data-province-id="${provinceId}"]`);

                if (zoneId) {
                    await this.loadSubzones(zoneId, provinceId);
                    const zoneName = $select.find('option:selected').text();
                    this.updateMappingPreview($container, zoneName);
                } else {
                    this.hideSubzones(provinceId);
                    this.hideMappingPreview($container);
                }

                this.updateRowStatus($container);
                this.hasChanges = true;
                this.updateSaveButton();
            }

            handleSubzoneChange(selectElement) {
                const $select = $(selectElement);
                const provinceId = $select.data('province-id');
                const $container = $(`.province-row[data-province-id="${provinceId}"]`);
                const subzoneName = $select.find('option:selected').text();

                if ($select.val()) {
                    const $zoneSelect = $container.find('.accurate-zones');
                    const zoneName = $zoneSelect.find('option:selected').text();
                    this.updateMappingPreview($container, zoneName, subzoneName);
                } else {
                    const $zoneSelect = $container.find('.accurate-zones');
                    const zoneName = $zoneSelect.find('option:selected').text();
                    this.updateMappingPreview($container, zoneName);
                }
            }

            async loadSubzones(zoneId, provinceId, selectedSubzoneId = null) {
                const $subzoneSelect = $(`.accurate-subzones[data-province-id="${provinceId}"]`);
                const $subzoneWrapper = $subzoneSelect.closest('.subzone-wrapper');
                let $loading = $subzoneWrapper.find('.subzone-loading');

                // Create loading indicator if it doesn't exist
                if ($loading.length === 0) {
                    // $loading = $('<div class="subzone-loading position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-white bg-opacity-75" style="z-index: 10;"><div class="spinner-border spinner-border-sm text-primary" role="status"></div></div>');
                    $subzoneWrapper.append($loading);
                }

                $subzoneSelect.prop('disabled', true);
                $loading.removeClass('d-none');

                try {
                    const finalUrl = this.baseUrlTemplate.replace('ZONE_ID_PLACEHOLDER', zoneId);
                    const response = await fetch(finalUrl);

                    if (!response.ok) {
                        throw new Error(`API call failed! Status: ${response.status}. URL: ${response.url}`);
                    }

                    const subzones = await response.json();
                    $loading.addClass('d-none');

                    if (subzones.length === 0) {
                        $subzoneSelect.html('<option value=""></option>');
                        $subzoneWrapper.find('.no-subzones').removeClass('d-none');
                        return;
                    }

                    $subzoneWrapper.find('.no-subzones').addClass('d-none');
                    $subzoneSelect.html('<option value=""></option>');

                    subzones.forEach(subzone => {
                        const option = $('<option></option>')
                            .val(subzone.id)
                            .text(subzone.name);

                        if (selectedSubzoneId && subzone.id == selectedSubzoneId) {
                            option.prop('selected', true);
                        }
                        $subzoneSelect.append(option);
                    });

                    $subzoneSelect.prop('disabled', false);

                    if (selectedSubzoneId) {
                        const $container = $(`.province-row[data-province-id="${provinceId}"]`);
                        const $zoneSelect = $container.find('.accurate-zones');
                        const zoneName = $zoneSelect.find('option:selected').text();
                        const subzoneName = $subzoneSelect.find('option:selected').text();
                        this.updateMappingPreview($container, zoneName, subzoneName);
                    }

                } catch (error) {
                    console.error('Error loading subzones:', error);
                    $loading.addClass('d-none');
                    $subzoneSelect.prop('disabled', false);
                    throw error; // Re-throw for error handling in concurrent loading
                }
            }

            hideSubzones(provinceId) {
                const $container = $(`.province-row[data-province-id="${provinceId}"]`);
                $container.find('.accurate-subzones').html('<option value=""></option>');
                $container.find('.subzone-wrapper .subzone-loading, .subzone-wrapper .no-subzones').addClass('d-none');
            }

            updateMappingPreview($container, zoneName, subzoneName = null) {
                const $preview = $container.find('.mapping-preview');
                const provinceName = $container.find('.fw-bold').text();
                let tooltipText = `${provinceName} mapped to ${zoneName}`;

                if (subzoneName && subzoneName !== '') {
                    tooltipText += ` → ${subzoneName}`;
                }

                $preview.attr('title', tooltipText);
                $preview.attr('data-bs-original-title', tooltipText);
                $preview.removeClass('d-none');

                if ($preview.length > 0) {
                    const tooltip = bootstrap.Tooltip.getInstance($preview);
                    if (tooltip) {
                        tooltip.dispose();
                    }
                    new bootstrap.Tooltip($preview, {
                        placement: 'top'
                    });
                }
            }

            hideMappingPreview($container) {
                $container.find('.mapping-preview').addClass('d-none');
            }

            updateRowStatus($container) {
                const $zoneSelect = $container.find('.accurate-zones');
                const $clearBtn = $container.find('.clear-mapping');
                const $status = $container.find('.mapping-status');

                const isMapped = $zoneSelect.val() !== '';

                $container.removeClass('mapped unmapped').addClass(isMapped ? 'mapped' : 'unmapped');
                $clearBtn.prop('disabled', !isMapped);

                if (isMapped) {
                    $status.removeClass('bg-warning').addClass('bg-success').text('Mapped');
                } else {
                    $status.removeClass('bg-success').addClass('bg-warning').text('Pending');
                }
            }

            clearMapping(button) {
                const $container = $(button).closest('.province-row');
                const provinceId = $container.data('province-id');

                $container.find('.accurate-zones').val('').trigger('change');
                this.hideSubzones(provinceId);
                this.hideMappingPreview($container);
                this.updateRowStatus($container);

                this.hasChanges = true;
                this.updateSaveButton();
            }

            filterProvinces() {
                const searchTerm = $('#searchProvinces').val().toLowerCase();
                const statusFilter = $('#filterStatus').val();
                let visibleCount = 0;

                $('.province-row').each(function() {
                    const $row = $(this);
                    const provinceName = $row.data('province-name');
                    const isMapped = $row.hasClass('mapped');

                    let matchesSearch = provinceName.includes(searchTerm);
                    let matchesStatus = true;

                    if (statusFilter === 'mapped') {
                        matchesStatus = isMapped;
                    } else if (statusFilter === 'unmapped') {
                        matchesStatus = !isMapped;
                    }

                    if (matchesSearch && matchesStatus) {
                        $row.show();
                        visibleCount++;
                    } else {
                        $row.hide();
                    }
                });

                if (visibleCount === 0) {
                    $('#emptyState').removeClass('d-none');
                    $('#provincesContainer').parent().addClass('d-none');
                } else {
                    $('#emptyState').addClass('d-none');
                    $('#provincesContainer').parent().removeClass('d-none');
                }
            }

            applyBulkMapping() {
                const selectedZoneId = $('#bulkZoneSelect').val();
                if (!selectedZoneId) {
                    this.showAlert('warning', 'Please select a zone first.');
                    return;
                }

                let appliedCount = 0;

                $('.province-row.unmapped').each((index, element) => {
                    const $container = $(element);
                    const $zoneSelect = $container.find('.accurate-zones');
                    $zoneSelect.val(selectedZoneId).trigger('change');
                    appliedCount++;
                });

                $('#bulkMappingModal').modal('hide');
                this.hasChanges = true;
                this.updateSaveButton();
                this.showAlert('success', `Bulk mapping applied to ${appliedCount} provinces.`);
            }

            updateSaveButton() {
                const isDisabled = !this.hasChanges;
                $('#saveAllBtn').prop('disabled', isDisabled);
                $('#saveAllBtnMobile').prop('disabled', isDisabled);
            }

            async saveAllMappings() {
                const $saveBtn = $('#saveAllBtn');
                const $saveBtnMobile = $('#saveAllBtnMobile');
                const originalText = $saveBtn.html();
                const originalTextMobile = $saveBtnMobile.html();

                $saveBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i> Saving...');
                $saveBtnMobile.prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-1"></i>');

                try {
                    const payload = {
                        mappings: []
                    };
                    $('.province-row').each(function() {
                        const id = $(this).data('province-id');
                        const zoneId = $(this).find('.accurate-zones').val() || null;
                        const subzoneId = $(this).find('.accurate-subzones').val() || null;
                        payload.mappings.push({
                            id,
                            zone_id: zoneId,
                            subzone_id: subzoneId
                        });
                    });

                    const response = await fetch("{{ route('mappedZones.bulk-save', ['userId' => $userId]) }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        body: JSON.stringify(payload)
                    });

                    if (response.ok) {
                        this.hasChanges = false;
                        this.showAlert('success', 'All mappings saved successfully!');
                        setTimeout(() => window.location.reload(), 1500);
                    } else {
                        throw new Error('Failed to save mappings');
                    }
                } catch (error) {
                    console.error('Error saving mappings:', error);
                    this.showAlert('danger', 'Failed to save mappings. Please try again.');
                } finally {
                    $saveBtn.html(originalText);
                    $saveBtnMobile.html(originalTextMobile);
                    this.updateSaveButton();
                }
            }

            resetAllMappings() {
                if (confirm('Are you sure you want to reset all mappings? This action cannot be undone.')) {
                    $('.province-row').each((index, element) => {
                        const $container = $(element);
                        $container.find('.accurate-zones').val('').trigger('change');
                    });

                    this.hasChanges = true;
                    this.updateSaveButton();
                    this.showAlert('info',
                        'All mappings have been reset. Click "Save All Mappings" to persist changes.');
                }
            }

            setupAutoSave() {
                setInterval(() => {
                    if (this.hasChanges) {
                        this.saveAllMappings();
                    }
                }, 300000);
            }

            showAlert(type, message) {
                const alertClass = {
                    'success': 'alert-success',
                    'danger': 'alert-danger',
                    'warning': 'alert-warning',
                    'info': 'alert-info'
                } [type] || 'alert-info';

                const icon = {
                    'success': 'fa-check-circle',
                    'danger': 'fa-exclamation-circle',
                    'warning': 'fa-exclamation-triangle',
                    'info': 'fa-info-circle'
                } [type] || 'fa-info-circle';

                const alertHtml = `
                    <div class="alert ${alertClass} alert-dismissible fade show border-0 shadow-sm" role="alert">
                        <i class="fas ${icon} me-2"></i>${message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                `;

                $('#alertContainer').html(alertHtml);
            }
        }

        $(document).ready(() => {
            window.zoneMappingManager = new ZoneMappingManager();
        });
    </script>
@endsection
