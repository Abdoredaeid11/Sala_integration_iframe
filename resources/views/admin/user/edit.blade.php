@extends('layouts.app')

@section('content')
    <section class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
        <div class="profile-card">
            <div class="text-center mb-4">
                <h4 class="mt-2 fw-semibold">My Profile</h4>
                <p class="text-muted small">Update your information</p>
            </div>

            <!-- Dummy Avatar -->
            <div class="mb-3 text-center">
                <span class="dummy-avatar rounded-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 18" class="avatar-icon">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm4.5 8a.5.5 0 0 0 .5-.5v-1a4.5 4.5 0 0 0-9 0v1a.5.5 0 0 0 .5.5h8z" />
                    </svg>
                </span>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-sm">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('profile.update') }}" novalidate>
                @csrf

                <!-- Name -->
                <div class="form-floating mb-3">
                    <input type="text" id="name" name="name"
                        class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                        value="{{ old('name', $user->name) }}" required>
                    <label for="name">Full Name</label>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Username -->
                <div class="form-floating mb-3">
                    <input type="text" id="username" name="username"
                        class="form-control @error('username') is-invalid @enderror" placeholder="Username"
                        value="{{ old('username', $user->username) }}" required>
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Domain -->
                <div class="form-floating mb-3">
                    <input type="text" id="domain" name="domain"
                        class="form-control @error('domain') is-invalid @enderror" placeholder="Domain"
                        value="{{ old('domain', $user->domain) }}" required>
                    <label for="domain">Domain</label>
                    @error('domain')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Country -->
                <div class="mb-3">
                    <label class="form-label d-flex align-items-center">
                        Country
                        <span id="country-loader" class="ms-2 text-muted small"
                            style="display:inline-flex;align-items:center;">
                            <span class="spinner-border spinner-border-sm text-secondary ms-2" role="status"
                                aria-hidden="true"></span>
                            <span class="ms-2">Loading...</span>
                        </span>
                    </label>
                    <select id="country_select" name="country_id"
                        class="form-select @error('country_id') is-invalid @enderror" required disabled>
                        <option value="">Loading countries…</option>
                    </select>
                    <input id="country_fallback" type="text" name="country_id"
                        class="form-control d-none @error('country_id') is-invalid @enderror"
                        placeholder="Enter country code (e.g. us)" value="{{ old('country_id', $user->country_id) }}">
                    @error('country_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div id="country-help" class="form-text text-muted small mt-1">
                        If the list fails to load, you can enter your country code manually.
                    </div>
                </div>

                <!-- Change Password -->
                <hr class="my-4">
                <h6 class="mb-3">Change password <small class="text-muted">(leave blank to keep current)</small></h6>

                <!-- New Password with Toggle Icon -->
                <div class="position-relative">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                            name="password" placeholder="New password" autocomplete="new-password">
                        <label for="password">New Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <i class="fas fa-eye password-toggle-icon" data-target="password"></i>
                </div>

                <!-- Confirm Password with Toggle Icon -->
                <div class="position-relative">
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                            placeholder="Confirm password" autocomplete="new-password">
                        <label for="password_confirmation">Confirm Password</label>
                    </div>
                    <i class="fas fa-eye password-toggle-icon" data-target="password_confirmation"></i>
                </div>

                <!-- Actions -->
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ url()->previous() }}" class="btn btn-link text-decoration-none">Cancel</a>
                    <button type="submit" class="btn btn-primary px-4">Save changes</button>
                </div>
            </form>
        </div>
    </section>

    <style>
        .profile-card {
            width: 100%;
            max-width: 560px;
            background: rgba(255, 255, 255, .92);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.04);
            border-radius: 14px;
            padding: 2.0rem 1.75rem;
            box-shadow: 0 8px 30px rgba(16, 24, 40, 0.06);
            animation: fadeIn .5s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label {
            color: #6366f1;
        }

        .alert-sm {
            padding: .5rem .75rem;
            font-size: .925rem;
        }

        .dummy-avatar {
            width: 72px;
            height: 72px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #f3f4f8;
        }

        /* Style for the password toggle icon */
        .password-toggle-icon {
            position: absolute;
            top: 50%;
            right: 1.25rem;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }
    </style>

    <script>
        // --- NEW: Password Toggle Script ---
        document.addEventListener('DOMContentLoaded', function() {
            const toggleIcons = document.querySelectorAll('.password-toggle-icon');

            toggleIcons.forEach(icon => {
                icon.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const targetInput = document.getElementById(targetId);

                    if (targetInput) {
                        // Toggle input type
                        const type = targetInput.getAttribute('type') === 'password' ? 'text' :
                            'password';
                        targetInput.setAttribute('type', type);

                        // Toggle icon class
                        this.classList.toggle('fa-eye');
                        this.classList.toggle('fa-eye-slash');
                    }
                });
            });
        });

        // --- Country Loader Script (unchanged) ---
        const COUNTRY_CACHE_KEY = 'app:countries:v1';
        const COUNTRY_CACHE_TTL_MS = 24 * 60 * 60 * 1000; // 24 hours

        const countrySelect = document.getElementById('country_select');
        const countryFallback = document.getElementById('country_fallback');
        const countryLoader = document.getElementById('country-loader');

        const initialSelected = @json(old('country_id', $user->country_id ?? ''));

        function renderCountries(countries) {
            countrySelect.innerHTML = '';
            const placeholder = document.createElement('option');
            placeholder.value = '';
            placeholder.textContent = 'Choose…';
            countrySelect.appendChild(placeholder);

            countries.forEach(c => {
                const opt = document.createElement('option');
                opt.value = String(c.id);
                opt.textContent = `${c.name}`;

                if (opt.value === String(initialSelected)) {
                    opt.selected = true;
                }
                countrySelect.appendChild(opt);
            });

            countrySelect.disabled = false;
            countrySelect.classList.remove('is-invalid');
            countryLoader.style.display = 'none';
        }

        function showFallback() {
            countrySelect.classList.add('d-none');
            countrySelect.disabled = true;
            countryFallback.classList.remove('d-none');
            countryFallback.required = true;
            countryLoader.style.display = 'none';
        }

        function loadFromCache() {
            try {
                const raw = localStorage.getItem(COUNTRY_CACHE_KEY);
                if (!raw) return null;
                const parsed = JSON.parse(raw);
                if (!parsed || !parsed.timestamp || !parsed.data) return null;
                if ((Date.now() - parsed.timestamp) > COUNTRY_CACHE_TTL_MS) {
                    localStorage.removeItem(COUNTRY_CACHE_KEY);
                    return null;
                }
                return parsed.data;
            } catch (e) {
                return null;
            }
        }

        function saveToCache(data) {
            try {
                localStorage.setItem(COUNTRY_CACHE_KEY, JSON.stringify({
                    timestamp: Date.now(),
                    data
                }));
            } catch (e) {}
        }

        function fetchCountries() {
            const routeUrlString = @json(route('countries'));
            const url = new URL(routeUrlString);
            url.protocol = window.location.protocol;
            return fetch(url.toString(), {
                headers: {
                    'Accept': 'application/json'
                },
                credentials: 'same-origin'
            }).then(resp => {
                if (!resp.ok) throw new Error(`HTTP error! status: ${resp.status}`);
                return resp.json();
            });
        }

        (function initCountries() {
            if (initialSelected) {
                const tmpOpt = document.createElement('option');
                tmpOpt.value = String(initialSelected).toLowerCase();
                tmpOpt.textContent = String(initialSelected).toUpperCase();
                tmpOpt.selected = true;
                countrySelect.innerHTML = '';
                countrySelect.appendChild(tmpOpt);
            }

            const cached = loadFromCache();
            if (cached && Array.isArray(cached) && cached.length) {
                renderCountries(cached);
                fetchCountries().then(data => {
                    renderCountries(data);
                    saveToCache(data);
                }).catch(() => {});
                return;
            }

            fetchCountries()
                .then(data => {
                    if (!Array.isArray(data) || !data.length) throw new Error('Invalid data');
                    const normalized = data.map(item => ({
                        code: String(item.code).toLowerCase(),
                        name: String(item.name)
                    }));
                    renderCountries(normalized);
                    saveToCache(normalized);
                })
                .catch(err => {
                    console.error('Failed to load countries:', err);
                    showFallback();
                });
        })();
    </script>
@endsection
