<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .active {
            text-decoration: underline;
        }
    </style>
</head>
<body style="background: white">
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'APLIKASI BENGKEL') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                         <li class="nav-item">
                            <a class="nav-link {{ route('customers.index') == request()->fullUrl() ? 'active' : '' }}"  href="/customers">Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ route('keluhan.index')  == request()->fullUrl() ? 'active' : '' }}" href="/keluhan">Keluhan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ route('supplier.index') == request()->fullUrl() ? 'active' : '' }}" href="/supplier">Suppliers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ route('barang.index') == request()->fullUrl() ? 'active' : '' }}" href="/barang">Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ route('kendaraan.index') == request()->fullUrl() ? 'active' : '' }}" href="/kendaraan">Kendaraan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ route('pegawai.index') == request()->fullUrl() ? 'active' : '' }}" href="/pegawai">Pegawai</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            @yield('content')
</body>
            </html>

  