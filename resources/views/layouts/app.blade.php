<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary-color: #3b82f6;
            --accent-color: #8b5cf6;
            --success-color: #059669;
            --warning-color: #d97706;
            --danger-color: #dc2626;
            --navbar-height: 70px;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
        }

        * {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }

        body {
            background-color: #f8fafc;
        }

        .modern-navbar {
            background: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            min-height: var(--navbar-height);
            height: auto;
            /* ✅ allow auto height but keep min */
            border: none;
            position: sticky;
            top: 0;
            z-index: 1030;
            border-bottom: 1px solid #e2e8f0;
            padding-top: 0;
            /* ✅ remove extra padding */
            padding-bottom: 0;
        }

        .navbar-brand {
            color: var(--text-primary) !important;
            font-weight: 700;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.3s ease;
            padding: 0.5rem 0;
        }

        .navbar-brand:hover {
            color: var(--primary-color) !important;
            transform: scale(1.02);
        }

        .logo-img {
            height: 50px !important;
            /* ✅ consistent logo height */
            max-height: 50px !important;
            width: auto;
            margin-right: 0.75rem;
            border-radius: 6px;
            transition: all 0.3s ease;
            filter: none;
            object-fit: contain;
        }

        .logo-img:hover {
            transform: scale(1.02);
        }

        .brand-text {
            font-weight: 700;
            letter-spacing: -0.025em;
            color: var(--text-primary);
        }

        .navbar-toggler {
            border: 2px solid var(--primary-color);
            border-radius: 8px;
            padding: 0.4rem 0.6rem;
            color: var(--primary-color);
        }

        .navbar-toggler:focus {
            /* box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.25); */
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%232563eb' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='m4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            width: 1.2em;
            height: 1.2em;
        }

        /* Navigation Links Styles */
        .nav-link {
            color: var(--text-secondary) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            height: var(--navbar-height);
            /* ✅ align center vertically */
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
            background-color: rgba(37, 99, 235, 0.05);
        }

        .nav-link.active {
            color: var(--primary-color) !important;
            background-color: rgba(37, 99, 235, 0.1);
            font-weight: 600;
        }

        .nav-link i {
            font-size: 0.875rem;
        }

        /* User Dropdown Styles */
        .user-info {
            display: flex;
            align-items: center;
            color: var(--text-primary);
            text-decoration: none;
            padding: 0.5rem 0.75rem;
            border-radius: 10px;
            transition: all 0.3s ease;
            border: 1px solid transparent;
            height: var(--navbar-height);
            /* ✅ keep avatar centered */
        }

        .user-info:hover {
            color: var(--primary-color);
            background-color: rgba(37, 99, 235, 0.05);
            border-color: rgba(37, 99, 235, 0.1);
        }

        .user-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 0.85rem;
            margin-right: 0.75rem;
            transition: all 0.3s ease;
            /* box-shadow: 0 2px 8px rgba(37, 99, 235, 0.2); */
        }

        .user-info:hover .user-avatar {
            transform: scale(1.05);
            /* box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3); */
        }

        .user-details {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .user-name {
            font-weight: 600;
            font-size: 0.9rem;
            line-height: 1.2;
            color: var(--text-primary);
        }

        .user-role {
            font-size: 0.75rem;
            color: var(--text-secondary);
            line-height: 1;
        }

        .dropdown-toggle::after {
            color: var(--text-secondary);
            margin-left: 0.75rem;
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            border-radius: 12px;
            padding: 0.5rem 0;
            margin-top: 0.75rem;
            min-width: 220px;
        }

        .dropdown-item {
            padding: 0.75rem 1.25rem;
            display: flex;
            align-items: center;
            color: var(--text-primary);
            transition: all 0.2s ease;
            font-weight: 500;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            color: white;
            transform: translateX(4px);
        }

        .dropdown-item i {
            width: 18px;
            margin-right: 0.75rem;
            text-align: center;
        }

        .dropdown-divider {
            margin: 0.5rem 0;
            opacity: 0.15;
        }

        .dropdown-item-text {
            background-color: #f8fafc;
            margin-bottom: 0.5rem;
        }

        /* Page Header Styles */
        .page-header {
            background: white;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
            margin-bottom: 2rem;
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }

        .page-header-content {
            padding: 2rem;
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
            position: relative;
        }

        .page-header-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color) 0%, var(--accent-color) 100%);
        }

        .page-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
        }

        .page-title i {
            color: var(--primary-color);
            margin-right: 1rem;
            font-size: 1.75rem;
        }

        .page-subtitle {
            color: #64748b;
            font-size: 1.1rem;
            margin-bottom: 0;
            font-weight: 400;
        }

        .page-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .btn-primary-gradient {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            border: none;
            color: white;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }

        .btn-primary-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.5);
            color: white;
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-color) 100%);
        }

        .btn-primary-gradient i {
            margin-right: 0.5rem;
        }

        /* Stats Cards */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .stat-icon.primary {
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1), rgba(139, 92, 246, 0.1));
            color: var(--primary-color);
        }

        .stat-icon.success {
            background: linear-gradient(135deg, rgba(5, 150, 105, 0.1), rgba(4, 120, 87, 0.1));
            color: var(--success-color);
        }

        .stat-icon.warning {
            background: linear-gradient(135deg, rgba(217, 119, 6, 0.1), rgba(180, 83, 9, 0.1));
            color: var(--warning-color);
        }

        .stat-icon.info {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(37, 99, 235, 0.1));
            color: var(--secondary-color);
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.25rem;
        }

        .stat-label {
            color: #64748b;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 0;
        }

        /* Modern Card Styles */
        .card {
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.06);
            border: 1px solid #e2e8f0;
        }

        /* Button Styles */
        .btn-modern {
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .btn-modern:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        /* Table Styles */
        .table th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 0.5px;
            color: #64748b;
            padding: 1rem 0.75rem;
            background-color: #f8fafc;
            border-bottom: 2px solid #e2e8f0;
        }

        .table td {
            padding: 1rem 0.75rem;
            vertical-align: middle;
            border-bottom: 1px solid #f1f5f9;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(37, 99, 235, 0.02);
        }

        /* Avatar Styles */
        .avatar-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 0.875rem;
        }

        /* Utility Classes */
        .hover-primary:hover {
            color: var(--primary-color) !important;
        }

        .bg-success-soft {
            background-color: rgba(5, 150, 105, 0.1) !important;
            color: var(--success-color) !important;
        }

        .bg-danger-soft {
            background-color: rgba(220, 38, 38, 0.1) !important;
            color: var(--danger-color) !important;
        }

        .bg-warning-soft {
            background-color: rgba(217, 119, 6, 0.1) !important;
            color: var(--warning-color) !important;
        }

        .bg-info-soft {
            background-color: rgba(59, 130, 246, 0.1) !important;
            color: var(--secondary-color) !important;
        }

        .country-flag {
            width: 24px;
            height: 18px;
            background: #f8f9fa;
            border-radius: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: bold;
            color: #6c757d;
        }

        /* Form Styles */
        .form-floating>.form-control:focus,
        .form-floating>.form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.25);
        }

        .form-control,
        .form-select {
            border-radius: 8px;
            border-color: #d1d5db;
        }

        /* Modal Styles */
        .modal-content {
            border: none;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .modal-header {
            border-bottom: 1px solid #f1f5f9;
            padding: 1.5rem;
        }

        .modal-body {
            padding: 1.5rem;
        }

        .btn-group .btn {
            border-radius: 6px;
            margin-right: 4px;
        }

        .btn-group .btn:last-child {
            margin-right: 0;
        }

        /* Loading animations */
        @keyframes pulse {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
            }
        }

        .loading {
            animation: pulse 1.5s ease-in-out infinite;
        }

        /* Badge Styles */
        .badge.rounded-pill {
            padding: 0.5em 0.75em;
            font-weight: 500;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .brand-text {
                display: none !important;
            }

            .logo-img {
                margin-right: 0;
            }

            .user-details {
                display: none !important;
            }

            .user-avatar {
                margin-right: 0;
            }

            .dropdown-menu {
                margin-top: 0.5rem;
                min-width: 200px;
            }

            .page-header-content {
                padding: 1.5rem;
            }

            .page-title {
                font-size: 1.5rem;
            }

            .page-title i {
                font-size: 1.25rem;
                margin-right: 0.75rem;
            }

            .stats-container {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .table-responsive {
                border-radius: 12px;
            }

            .btn-group {
                display: flex;
                flex-direction: column;
                gap: 4px;
            }

            .page-actions {
                margin-top: 1rem;
            }
        }

        @media (max-width: 576px) {
            .logo-img {
                height: 50px;
            }

            .modern-navbar {
                height: 60px;
            }
        }

        /* keep avatar + arrow tight */
        #navbarDropdown::after {
            margin-left: 6px;
            vertical-align: middle;
        }

        /* ensure dropdown does not shift layout */
        .navbar-nav .dropdown-menu {
            position: absolute;
            right: 0;
        }
    </style>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md modern-navbar">
            <div class="container-fluid px-4 d-flex flex-wrap justify-content-between align-items-center">
                <!-- Brand -->
                <a class="navbar-brand ms-0" href="{{ url('dashboard') }}">
                    <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="logo-img">
                </a>

                <!-- ✅ Mobile Avatar Dropdown -->
                @auth
                    <ul class="navbar-nav d-block d-md-none">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle user-info" href="#" id="mobileUserDropdown"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="user-avatar">
                                    {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="mobileUserDropdown">
                                <div class="dropdown-item-text px-3 py-2 border-bottom">
                                    <div class="fw-semibold">{{ auth()->user()->name }}</div>
                                    <div class="text-muted small">{{ auth()->user()->username }}</div>
                                </div>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <i class="fas fa-user-cog"></i> Profile Settings
                                </a>
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Sign Out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                @endauth


                <!-- Collapsible Menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @auth
                        <!-- ✅ Desktop Avatar Dropdown (compact) -->
                        <ul class="navbar-nav ms-auto d-none d-md-flex">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link d-flex align-items-center dropdown-toggle"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-avatar">
                                        {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                                    </div>
                                    <span class="ms-2 d-none d-md-inline">
                                        {{ auth()->user()->name }}
                                    </span>
                                </a>


                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li class="dropdown-item-text px-3 py-2 border-bottom">
                                        <div class="fw-semibold">{{ auth()->user()->name }}</div>
                                        <div class="text-muted small">{{ auth()->user()->username }}</div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                            <i class="fas fa-user-cog"></i> Profile Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i> Sign Out
                                        </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    @endauth
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
        @yield('js')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- CSRF Token Setup for AJAX -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>

</html>
