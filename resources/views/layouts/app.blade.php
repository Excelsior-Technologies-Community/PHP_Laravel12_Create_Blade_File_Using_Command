<!DOCTYPE html>
<html>
<head>
    <title>Blade System Pro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { display: flex; background: #f4f6f9; }
        .sidebar { width: 250px; height: 100vh; background: #212529; color: white; position: fixed; }
        .sidebar a { display: block; padding: 15px; color: #adb5bd; text-decoration: none; }
        .sidebar a:hover, .sidebar a.active { background: #343a40; color: white; border-left: 4px solid #0d6efd; }
        .main { margin-left: 250px; width: 100%; }
        .topbar { background: white; padding: 15px; shadow-sm: 0 2px 4px rgba(0,0,0,.08); }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center py-4 text-primary">🚀 Laravel Pro</h4>
        <a href="/" class="{{ Request::is('/') ? 'active' : '' }}"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
        <a href="/blade-preview?type=preview" class="{{ request('type') == 'preview' ? 'active' : '' }}"><i class="bi bi-file-earmark-code me-2"></i> Blade Preview</a>
        <a href="/blade-preview?type=upload" class="{{ request('type') == 'upload' ? 'active' : '' }}"><i class="bi bi-cloud-upload me-2"></i> File Upload</a>
        <a href="/users" class="{{ Request::is('users') ? 'active' : '' }}"><i class="bi bi-people me-2"></i> Users</a>
    </div>

    <div class="main">
        <div class="topbar border-bottom d-flex justify-content-between align-items-center">
            <h5 class="mb-0">System Control</h5>
            <span class="badge bg-primary">Admin Panel</span>
        </div>
        <div class="p-4">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>