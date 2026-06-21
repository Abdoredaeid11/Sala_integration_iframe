<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Accurate Logistics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/alpinejs@3.13.10/dist/cdn.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        [x-cloak] {
            display: none !important;
        }

        html,
        body {
            height: 100%;
        }

        body {
            font-size: 13px;
            /* slightly smaller */
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        .btn-loading {
            position: relative;
            color: transparent !important;
        }

        .btn-loading::after {
            content: "";
            position: absolute;
            width: 1rem;
            height: 1rem;
            border-radius: 50%;
            border: 2px solid #fff;
            border-top-color: transparent;
            animation: spinner 0.6s linear infinite;
            top: calc(50% - 0.5rem);
            left: calc(50% - 0.5rem);
        }

        @keyframes spinner {
            to {
                transform: rotate(360deg);
            }
        }

        /* Dot loader */
        .dots-loader {
            display: inline-flex;
            gap: 0.4rem;
            align-items: center;
            justify-content: center;
        }

        .dots-loader>span {
            width: 0.5rem;
            height: 0.5rem;
            background: #2563eb;
            /* blue-600 */
            border-radius: 9999px;
            animation: dotPulse 1s infinite ease-in-out;
        }

        .dots-loader>span:nth-child(2) {
            animation-delay: 0.15s;
        }

        .dots-loader>span:nth-child(3) {
            animation-delay: 0.3s;
        }

        @keyframes dotPulse {

            0%,
            80%,
            100% {
                transform: scale(0.8);
                opacity: 0.6;
            }

            40% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .filter-dropdown {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .filter-dropdown.open {
            max-height: 500px;
            transition: max-height 0.5s ease-in;
        }

        .loading-overlay {
            position: absolute;
            top: 4rem;
            /* Below the fixed navigation (h-16 = 4rem) */
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.95);
            z-index: 50;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(4px);
            border-radius: 0.5rem;
            margin: 1.5rem;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .loading-spinner {
            width: 3rem;
            height: 3rem;
            border: 4px solid #f3f4f6;
            border-top: 4px solid #3b82f6;
            border-radius: 50%;
            animation: spinner 1s linear infinite;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15);
        }

        .loading-text {
            margin-top: 1.5rem;
            color: #374151;
            font-size: 0.875rem;
            font-weight: 600;
            text-align: center;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        /* Loading enhancements */
        @keyframes progressSlide {
            0% {
                transform: translateX(-40%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        .progress-indicator {
            width: 10rem;
            height: 0.25rem;
            background: #e5e7eb;
            /* gray-200 */
            border-radius: 9999px;
            overflow: hidden;
        }

        .progress-indicator>div {
            width: 40%;
            height: 100%;
            background: #2563eb;
            /* blue-600 */
            border-radius: 9999px;
            animation: progressSlide 1.2s infinite linear;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <div x-data="sallaApp()" x-init="init()" x-cloak class="min-h-screen">
        <!-- Enhanced Toast Notification (bottom-left, above everything) -->
        <div x-show="toast.visible" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-2" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-end="opacity-0 translate-y-2" class="fixed bottom-5 left-5 z-50 max-w-sm w-full"
            style="display:none;">
            <div class="bg-white rounded-xl shadow-xl border border-gray-200 overflow-hidden"
                :class="toast.type === 'success' ? 'border-green-200' : 'border-red-200'">
                <div class="flex items-center p-4" :class="toast.type === 'success' ? 'bg-green-50' : 'bg-red-50'">
                    <!-- Icon -->
                    <div class="flex-shrink-0 mr-3">
                        <svg class="w-6 h-6" :class="toast.type === 'success' ? 'text-green-600' : 'text-red-600'"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path x-show="toast.type === 'success'" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            <path x-show="toast.type === 'error'" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z">
                            </path>
                        </svg>
                    </div>
                    <!-- Message -->
                    <div class="flex-1">
                        <p class="text-sm font-medium"
                            :class="toast.type === 'success' ? 'text-green-800' : 'text-red-800'"
                            x-text="toast.message"></p>
                    </div>
                    <!-- Close button -->
                    <div class="flex-shrink-0 ml-3">
                        <button @click="toast.visible = false"
                            class="inline-flex text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 rounded-full p-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Progress bar -->
                <div class="h-1 bg-gray-200">
                    <div class="h-full bg-gradient-to-r transition-all duration-4000 ease-linear"
                        :class="toast.type === 'success' ? 'from-green-400 to-green-600' : 'from-red-400 to-red-600'">
                    </div>
                </div>
            </div>
        </div>


        <!-- Top Navbar (solid modern, always visible) -->
        <div class="fixed top-0 left-0 right-0 h-16 bg-white border-b border-gray-200 shadow-sm z-50">
            <div class="max-w-none w-full h-full px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                <div class="text-gray-900 font-semibold">Accurate Logistics</div>
                <nav class="flex items-center gap-6" aria-label="Primary">
                    <button @click="switchTab('orders')"
                        class="text-sm font-medium transition-colors focus:outline-none"
                        :class="tab === 'orders' ? 'text-blue-600 border-b-2 border-blue-600 pb-1' :
                            'text-gray-600 hover:text-gray-900'">
                        Orders
                    </button>
                    <button @click="switchTab('settings')"
                        class="text-sm font-medium transition-colors focus:outline-none"
                        :class="tab === 'settings' ? 'text-blue-600 border-b-2 border-blue-600 pb-1' :
                            'text-gray-600 hover:text-gray-900'">
                        Settings
                    </button>
                </nav>
            </div>
        </div>

        <!-- Global page loading overlay (covers content area below navbar) -->
        <div x-show="pageLoading" style="display:none;"
            class="fixed inset-0 z-40 flex items-center justify-center bg-white bg-opacity-70 backdrop-blur-sm">
            <div class="bg-white rounded-xl shadow-2xl px-6 py-6 border border-gray-100 flex flex-col items-center">
                <div class="dots-loader" aria-label="Loading">
                    <span></span><span></span><span></span>
                </div>
                <div class="mt-3 text-sm font-medium text-gray-700" x-text="loadingMessage || 'Loading...' "></div>
                <div class="mt-3 progress-indicator">
                    <div></div>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="pt-16 min-h-screen" x-show="!pageLoading" style="display:none;">
            <div class="max-w-none w-full px-4 sm:px-6 lg:px-8 py-6 text-xs">
                @include('salla.settings')
                @include('salla.orders')
            </div>
        </div>
    </div>
    <script>
        function sallaApp() {
            return {
                tab: 'orders',
                pageLoading: false,
                loadingMessage: 'Loading...',
                toast: {
                    visible: false,
                    message: '',
                    type: 'success'
                },
                errors: {},
                showPassword: false,

                settings: {
                    user_id: '',
                    token: '',
                    service_id: '',
                    from_zone_id: '',
                    from_subzone_id: '',
                    openable_code: 'N'
                },
                loading: {
                    credentials: false,
                    operation: false,
                    services: false,
                    zones: false,
                    subzones: false
                },
                credentialsValidated: false,
                apiData: {
                    clients: [],
                    services: [],
                    zones: [],
                    subzones: [],
                    tags: []
                },
                orders: [],
                selectedOrders: [],
                allSelectedOrders: new Set(),
                filters: {
                    search: '',
                    financial_status: '',
                    fulfillment_status: '',
                    date_from: '',
                    date_to: '',
                    tagsInput: '',
                    tags: []
                },
                pageInfo: {},
                currentPage: 1,
                perPage: 25,

                isFilterMenuOpen: false,

                async init() {
                    this.pageLoading = true;
                    this.loadingMessage = 'Loading application...';

                    await this.fetchClients();
                    await this.fetchExistingSettings();

                    // Load orders since it's the default tab
                    this.loadingMessage = 'Loading orders...';
                    await this.fetchOrders({}, false);

                    this.pageLoading = false;
                },

                async switchTab(newTab) {
                    if (this.tab === newTab) return;

                    this.tab = newTab;

                    // Load data for specific tabs
                    if (newTab === 'orders') {
                        this.loadingMessage = 'Loading orders...';
                        this.pageLoading = true;
                        await this.fetchOrders();
                        this.pageLoading = false;
                    } else if (newTab === 'settings') {
                        this.loadingMessage = 'Loading settings...';
                        this.pageLoading = true;
                        // Ensure settings data is loaded
                        if (this.settings.user_id && this.settings.token) {
                            await this.loadDependentData();
                        }
                        this.pageLoading = false;
                    }
                },

                showToast(msg, type = 'success') {
                    this.toast = {
                        visible: true,
                        message: msg,
                        type
                    };
                    setTimeout(() => this.toast.visible = false, 4000);
                },

                formatDate(ds) {
                    if (!ds) return '-';
                    const d = new Date(ds);
                    return new Intl.DateTimeFormat(undefined, {
                        year: 'numeric',
                        month: 'short',
                        day: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit',
                        hour12: false
                    }).format(d);
                },

                formatCurrency(amt, curr) {
                    if (!amt) return '-';
                    return new Intl.NumberFormat(undefined, {
                        style: 'currency',
                        currency: curr || 'USD'
                    }).format(amt);
                },

                getStatusClass(status) {
                    if (!status) return 'bg-gray-500 text-white';
                    const statusLower = status.toLowerCase();
                    if (statusLower.includes('unfulfilled')) return 'bg-yellow-600 text-white';
                    if (statusLower.includes('partial')) return 'bg-blue-600 text-white';
                    if (statusLower.includes('fulfilled')) return 'bg-green-600 text-white';
                    if (statusLower.includes('paid')) return 'bg-green-700 text-white';
                    if (statusLower.includes('pending')) return 'bg-yellow-500 text-white';
                    if (statusLower.includes('refunded')) return 'bg-red-600 text-white';
                    if (statusLower.includes('partially_refunded')) return 'bg-orange-600 text-white';
                    return 'bg-gray-500 text-white';
                },

                formatStatusText(status) {
                    if (!status) return '-';
                    return status
                        .toLowerCase()
                        .replace(/_/g, ' ')
                        .split(' ')
                        .map(word => word.charAt(0).toUpperCase() + word.slice(1))
                        .join(' ');
                },

                getShipmentStatusClass(s) {
                    if (!s) return 'bg-gray-100 text-gray-800';
                    const ss = s.toLowerCase();
                    if (ss.includes('request')) return 'bg-yellow-100 text-yellow-800';
                    if (ss.includes('shipped')) return 'bg-green-100 text-green-800';
                    if (ss.includes('delivered')) return 'bg-green-100 text-green-800';
                    return 'bg-gray-100 text-gray-800';
                },

                async fetchClients() {
                    try {
                        const url = this.buildApiUrl('/api/users/');
                        const r = await fetch(url);
                        if (!r.ok) throw new Error('Could not load users.');
                        this.apiData.clients = await r.json();
                    } catch (error) {
                        this.showToast('Failed to load clients', 'error');
                    }
                },

                async fetchExistingSettings() {
                    try {
                        const url = this.buildApiUrl('/api/setting/get/');
                        const r = await fetch(url);
                        if (!r.ok) throw new Error('Could not load settings.');
                        const d = await r.json();
                        if (d.setting) {
                            const savedSettings = d.setting;
                            if (savedSettings.user_id && savedSettings.token) {
                                await this.loadDependentDataForSettings(savedSettings);
                            }
                            this.settings = {
                                ...this.settings,
                                ...savedSettings
                            };
                            this.credentialsValidated = !!(savedSettings.user_id && savedSettings.token);
                        }
                    } catch (error) {
                        this.showToast('Failed to load settings', 'error');
                    }
                },

                async loadDependentDataForSettings(savedSettings) {
                    const originalSettings = {
                        ...this.settings
                    };
                    this.settings.user_id = savedSettings.user_id;
                    this.settings.token = savedSettings.token;
                    await this.loadDependentData();
                    this.settings = originalSettings;
                },

                async loadDependentData() {
                    if (this.settings.user_id && this.settings.token) {
                        await Promise.all([
                            this.fetchServices(),
                            this.fetchZones()
                        ]);
                        if (this.settings.from_zone_id) {
                            await this.fetchSubzones();
                        }
                    }
                },

                async fetchServices() {
                    if (!this.settings.user_id || !this.settings.token) return;

                    this.loading.services = true;
                    try {
                        const url = this.buildApiUrl(
                            `/api/setting/services?user_id=${this.settings.user_id}&token=${encodeURIComponent(this.settings.token)}`
                        );
                        const r = await fetch(url);
                        if (r.ok) {
                            this.apiData.services = await r.json();
                        } else {
                            this.showToast('Failed to load shipping services. Check credentials.', 'error');
                        }
                    } catch (error) {
                        this.showToast('Failed to load services', 'error');
                    } finally {
                        this.loading.services = false;
                    }
                },

                async fetchZones() {
                    if (!this.settings.user_id || !this.settings.token) return;

                    this.loading.zones = true;
                    try {
                        const url = this.buildApiUrl(
                            `/api/setting/zones?user_id=${this.settings.user_id}&token=${encodeURIComponent(this.settings.token)}`
                        );
                        const r = await fetch(url);
                        if (r.ok) {
                            this.apiData.zones = await r.json();
                        } else {
                            this.showToast('Failed to load shipping zones. Check credentials.', 'error');
                        }
                    } catch (error) {
                        this.showToast('Failed to load zones', 'error');
                    } finally {
                        this.loading.zones = false;
                    }
                },

                async fetchSubzones() {
                    if (!this.settings.from_zone_id || !this.settings.user_id || !this.settings.token) return;

                    this.loading.subzones = true;
                    try {
                        const url = this.buildApiUrl(
                            `/api/setting/zones/${this.settings.from_zone_id}?user_id=${this.settings.user_id}&token=${encodeURIComponent(this.settings.token)}`
                        );
                        const r = await fetch(url);
                        if (r.ok) {
                            this.apiData.subzones = await r.json();
                        } else {
                            this.apiData.subzones = [];
                            this.showToast('Failed to load subzones. Check credentials.', 'error');
                        }
                    } catch (error) {
                        this.apiData.subzones = [];
                        this.showToast('Failed to load subzones', 'error');
                    } finally {
                        this.loading.subzones = false;
                    }
                },

                onClientChange() {
                    this.settings.token = '';
                    this.settings.service_id = '';
                    this.settings.from_zone_id = '';
                    this.settings.from_subzone_id = '';
                    this.apiData.services = [];
                    this.apiData.zones = [];
                    this.apiData.subzones = [];
                    this.credentialsValidated = false;
                },

                onTokenChange() {
                    this.settings.service_id = '';
                    this.settings.from_zone_id = '';
                    this.settings.from_subzone_id = '';
                    this.apiData.services = [];
                    this.apiData.zones = [];
                    this.apiData.subzones = [];
                    this.credentialsValidated = false;
                    if (this.settings.user_id && this.settings.token) {
                        this.loadDependentData();
                    }
                },

                onServiceChange() {
                    this.settings.from_zone_id = '';
                    this.settings.from_subzone_id = '';
                    this.apiData.zones = [];
                    this.apiData.subzones = [];
                    if (this.settings.service_id) {
                        this.fetchZones();
                    }
                },

                onZoneChange() {
                    this.settings.from_subzone_id = '';
                    this.apiData.subzones = [];
                    if (this.settings.from_zone_id) {
                        this.fetchSubzones();
                    }
                },

                async submitCredentials() {
                    this.loading.credentials = true;
                    this.errors = {};

                    try {
                        const url = this.buildApiUrl('/api/setting/save-credentials');
                        const validateResponse = await fetch(this.buildApiUrl('/api/setting/validate-token'), {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                user_id: this.settings.user_id,
                                token: this.settings.token
                            })
                        });

                        const validateData = await validateResponse.json();
                        if (!validateResponse.ok || !validateData.valid) {
                            this.errors.token = [validateData.message || 'Token validation failed'];
                            return;
                        }

                        const saveResponse = await fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                user_id: this.settings.user_id,
                                token: this.settings.token
                            })
                        });

                        const saveData = await saveResponse.json();
                        if (!saveResponse.ok) {
                            if (saveData.errors) {
                                this.errors = saveData.errors;
                            } else {
                                throw new Error(saveData.message || 'Failed to save credentials');
                            }
                            return;
                        }

                        this.showToast(saveData.message || 'Credentials saved successfully!');
                        this.credentialsValidated = true;

                        if (saveData.setting) {
                            this.settings = {
                                ...this.settings,
                                ...saveData.setting
                            };
                        }

                        await this.loadDependentData();

                    } catch (error) {
                        this.showToast(error.message || 'Failed to save credentials', 'error');
                    } finally {
                        this.loading.credentials = false;
                    }
                },

                async submitOperation() {
                    this.loading.operation = true;
                    this.errors = {};

                    try {
                        const url = this.buildApiUrl('/api/setting/save-operation');
                        const r = await fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                service_id: this.settings.service_id,
                                from_zone_id: this.settings.from_zone_id,
                                from_subzone_id: this.settings.from_subzone_id,
                                openable_code: this.settings.openable_code
                            })
                        });

                        const d = await r.json();
                        if (!r.ok) {
                            if (d.errors) {
                                this.errors = d.errors;
                            } else {
                                throw new Error(d.message || 'Failed to save operation settings');
                            }
                            return;
                        }

                        this.showToast(d.message || 'Operation settings saved successfully!');
                        if (d.setting) {
                            this.settings = {
                                ...this.settings,
                                ...d.setting
                            };
                        }
                    } catch (error) {
                        this.showToast(error.message || 'Failed to save operation settings', 'error');
                    } finally {
                        this.loading.operation = false;
                    }
                },

                async submitSettings() {
                    this.loadingMessage = 'Saving settings...';
                    this.pageLoading = true;
                    this.errors = {};

                    try {
                        const url = this.buildApiUrl('/api/setting/save');
                        const r = await fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify(this.settings)
                        });
                        const d = await r.json();
                        if (!r.ok) {
                            if (d.errors) {
                                this.errors = d.errors;
                            } else {
                                throw new Error(d.message || `Failed to save settings (Status: ${r.status})`);
                            }
                            return;
                        }
                        this.showToast(d.message || 'Settings saved successfully!');
                        if (d.setting) {
                            this.settings = {
                                ...this.settings,
                                ...d.setting
                            };
                        }
                    } catch (error) {
                        this.showToast(error.message || 'Failed to save settings', 'error');
                    } finally {
                        this.pageLoading = false;
                    }
                },

                applyFilters() {
                    this.filters.tags = this.filters.tagsInput.split(',').map(t => t.trim()).filter(t => t);
                    this.currentPage = 1;
                    this.fetchOrders();
                },

                clearFilters() {
                    this.filters = {
                        search: '',
                        financial_status: '',
                        fulfillment_status: '',
                        date_from: '',
                        date_to: '',
                        tagsInput: '',
                        tags: []
                    };
                    this.currentPage = 1;
                    this.fetchOrders();
                },

                clearFilter(k) {
                    if (k === 'tags') {
                        this.filters.tagsInput = '';
                        this.filters.tags = [];
                    } else {
                        this.filters[k] = '';
                    }
                    this.applyFilters();
                },

                hasActiveFilters() {
                    return Object.entries(this.filters).some(([k, v]) => {
                        if (k === 'tagsInput') return false;
                        if (Array.isArray(v)) return v.length > 0;
                        return v !== '';
                    });
                },

                activeFiltersCount() {
                    let c = 0;
                    for (const [k, v] of Object.entries(this.filters)) {
                        if (k === 'tagsInput') continue;
                        if (Array.isArray(v)) {
                            c += v.length;
                        } else if (v) {
                            c++;
                        }
                    }
                    return c;
                },

                getActiveFilters() {
                    const af = {};
                    for (const [k, v] of Object.entries(this.filters)) {
                        if (k === 'tagsInput') continue;
                        if (Array.isArray(v) && v.length > 0) af[k] = v;
                        else if (v) af[k] = v;
                    }
                    return af;
                },

                formatFilterLabel(k, v) {
                    const labels = {
                        search: 'Search',
                        financial_status: 'Financial Status',
                        fulfillment_status: 'Fulfillment Status',
                        date_from: 'Date From',
                        date_to: 'Date To',
                        tags: 'Tag'
                    };
                    if (k === 'date_from' || k === 'date_to') {
                        return `${labels[k]}: ${new Date(v).toLocaleDateString()}`;
                    }
                    if (Array.isArray(v)) {
                        return `${labels[k]}: ${v.join(', ')}`;
                    }
                    return `${labels[k]}: ${v}`;
                },

                toggleSelectAll(e) {
                    const isChecked = e.target.checked;
                    this.orders.forEach(order => {
                        if (isChecked) {
                            this.allSelectedOrders.add(order.reference_id);
                        } else {
                            this.allSelectedOrders.delete(order.reference_id);
                        }
                    });
                    // Force Alpine reactivity by syncing array
                    this.allSelectedOrders = new Set(this.allSelectedOrders);
                    this.selectedOrders = Array.from(this.allSelectedOrders);
                },

                toggleOrderSelection(orderId, event) {
                    if (event.target.checked) {
                        this.allSelectedOrders.add(orderId);
                    } else {
                        this.allSelectedOrders.delete(orderId);
                    }
                    // Force Alpine reactivity by syncing array
                    this.allSelectedOrders = new Set(this.allSelectedOrders);
                    this.selectedOrders = Array.from(this.allSelectedOrders);
                },

                allCurrentPageSelected() {
                    if (this.orders.length === 0) return false;
                    return this.orders.every(order => this.allSelectedOrders.has(order.reference_id));
                },

                nextPage() {
                    if (this.pageInfo.hasNextPage) {
                        this.currentPage++;
                        this.fetchOrders({
                            first: this.perPage,
                            after: this.pageInfo.endCursor
                        });
                    }
                },

                previousPage() {
                    if (this.pageInfo.hasPreviousPage && this.currentPage > 1) {
                        this.currentPage--;
                        this.fetchOrders({
                            last: this.perPage,
                            before: this.pageInfo.startCursor
                        });
                    }
                },

                async fetchOrders(pagination = {}, manageLoading = true) {
                    if (Object.keys(pagination).length === 0) {
                        this.currentPage = 1;
                        pagination = {
                            first: this.perPage
                        };
                    }

                    try {
                        if (manageLoading) {
                            this.loadingMessage = 'Loading orders...';
                            this.pageLoading = true;
                        }
                        const ps = new URLSearchParams();
                        for (const k in this.filters) {
                            const v = this.filters[k];
                            if (k === 'tags' && Array.isArray(v) && v.length > 0) {
                                ps.set('tag', v[0]);
                            } else if (Array.isArray(v) && v.length > 0) {
                                ps.set(k, v.join(','));
                            } else if (v) {
                                ps.set(k, v);
                            }
                        }
                        for (const k in pagination) {
                            if (pagination[k]) ps.set(k, pagination[k]);
                        }

                        const url = this.buildApiUrl(`/api/orders/list?${ps.toString()}`);
                        const r = await fetch(url);

                        if (!r.ok) throw new Error('Could not load orders from the server.');
                        const d = await r.json();

                        this.orders = d.orders || [];
                        this.pageInfo = d.pageInfo || {};
                        this.allSelectedOrders = new Set();
                        this.selectedOrders = [];
                    } catch (error) {
                        this.showToast('Failed to load orders', 'error');
                        this.orders = [];
                    } finally {
                        if (manageLoading) {
                            this.pageLoading = false;
                        }
                    }
                },

                async sendSelectedOrders() {
                    if (this.selectedOrders.length === 0) {
                        this.showToast('Please select orders to send.', 'error');
                        return;
                    }

                    try {
                        this.pageLoading = true;
                        const selectedIds = Array.from(this.allSelectedOrders);

                        const payload = this.orders.map(order => {
                            if (this.allSelectedOrders.has(order.reference_id)) {
                                return {
                                    id: order.reference_id,
                                    name: order.salla_shipment?.ship_to.name ?? null,
                                    phone: order.salla_shipment?.ship_to.phone ?? null,
                                    country_id: order.salla_shipment?.ship_to.country_id ?? null,
                                    city_id: order.salla_shipment?.ship_to.city_id ?? null,
                                    address_line: order.salla_shipment?.ship_to.address_line ?? null,
                                    items: order.salla_shipment?.packages ?? null,
                                    total_weight: order.salla_shipment?.total_weight.value ?? null,
                                    weight_unit: order.salla_shipment?.total_weight.units ?? null,
                                }
                            } else {
                                return null;
                            }
                        }).filter(order => order !== null);

                        const url = this.buildApiUrl('/api/shipping/send');
                        const r = await fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                orders: payload
                            })
                        });

                        if (!r.ok) {
                            let errorMessage = 'Failed to send orders';
                            try {
                                let errorData = await r.json();
                                if (typeof errorData === 'string' && (errorData.trim().startsWith('{') || errorData
                                        .trim().startsWith('['))) {
                                    try {
                                        errorData = JSON.parse(errorData);
                                    } catch (_) {
                                        /* ignore */
                                    }
                                }
                                if (typeof errorData === 'string') {
                                    errorMessage = errorData;
                                } else if (Array.isArray(errorData)) {
                                    errorMessage = errorData.join('; ');
                                } else if (errorData && typeof errorData === 'object') {
                                    if (errorData.message) {
                                        errorMessage = errorData.message;
                                    } else if (errorData.error) {
                                        errorMessage = errorData.error;
                                    } else if (errorData.errors) {
                                        if (Array.isArray(errorData.errors)) {
                                            errorMessage = errorData.errors.join('; ');
                                        } else if (typeof errorData.errors === 'object') {
                                            errorMessage = Object.values(errorData.errors).flat().join('; ');
                                        }
                                    }
                                }
                            } catch (parseError) {
                                errorMessage = r.statusText || `Request failed (HTTP ${r.status})`;
                            }
                            this.showToast(errorMessage, 'error');
                            return;
                        }

                        const responseData = await r.json();
                        const successMessage = responseData.message ||
                            `${selectedIds.length} order(s) sent successfully!`;
                        this.showToast(successMessage, 'success');
                        this.allSelectedOrders.clear();
                        this.selectedOrders = [];
                        await this.fetchOrders({}, false);
                    } catch (error) {
                        console.error('Send orders error:', error);
                        this.showToast('Network error occurred. Please try again.', 'error');
                    } finally {
                        this.pageLoading = false;
                    }
                },

                buildShipmentPrintUrl(ids) {
                    const lang = (navigator.language || 'en').slice(0, 2);
                    const idsSegment = Array.isArray(ids) ? ids.join(',') : ids;
                    return this.buildApiUrl(
                        `/api/shipments/${encodeURIComponent(idsSegment)}/print?lang=${encodeURIComponent(lang)}`);
                },

                printShipment(ids) {
                    const url = this.buildShipmentPrintUrl(ids);
                    window.open(url, '_blank', 'noopener');
                },

                printSelectedShipments() {
                    if (this.selectedOrders.length === 0) {
                        this.showToast('Please select orders to print.', 'error');
                        return;
                    }
                    // Map selected orders to shipment ids
                    const selectedSet = new Set(this.allSelectedOrders);
                    const shipmentsToPrint = [];
                    for (const order of this.orders) {
                        if (selectedSet.has(order.reference_id) && order.shipment?.id) {
                            shipmentsToPrint.push(order.shipment.id);
                        }
                    }

                    if (shipmentsToPrint.length === 0) {
                        this.showToast('No shipments found for selected orders.', 'error');
                        return;
                    }
                    this.printShipment(shipmentsToPrint);
                },

                // Helper function to build API URLs with shop parameter when needed
                buildApiUrl(path) {
                    return path;
                },
            };
        }
    </script>
</body>

</html>
