<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laravel Dashboard</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
        }

        /* Sidebar */
        .sidebar {
            width: 220px;
            height: 100vh;
            background: #343a40;
            color: white;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #495057;
        }

        /* Main Content */
        .main {
            margin-left: 220px;
            width: 100%;
        }

        .topbar {
            background: #007bff;
            color: white;
            padding: 15px;
        }

        .content {
            padding: 30px;
            background: #f4f6f9;
            min-height: 100vh;
        }

        .cards {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            flex: 1;
            min-width: 250px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background: #28a745;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <!-- ✅ Sidebar ADDED -->
    <div class="sidebar">
        <h2>🚀 Laravel</h2>
        <a href="/">🏠 Dashboard</a>
        <a href="/blade-preview?type=preview">📄 Blade Preview</a>
        <a href="/blade-preview?type=upload">📂 File Upload</a>
        <a href="/users">👥 Users</a>
    </div>

    <!-- Main -->
    <div class="main">

        <div class="topbar">
            <h3>Admin Dashboard</h3>
        </div>

        <div class="content">

            <h2>Welcome 👋</h2>
            <p>This is your Laravel 12 Admin Dashboard.</p>

            <div class="cards">

                <div class="card">
                    <h3>📄 Blade Preview</h3>
                    <!-- ✅ FIXED -->
                    <a href="/blade-preview?type=preview" class="btn">Open</a>
                </div>

                <div class="card">
                    <h3>📂 File Upload</h3>
                    <!-- ✅ FIXED -->
                    <a href="/blade-preview?type=upload" class="btn">Upload</a>
                </div>

                <div class="card">
                    <h3>👥 Users</h3>
                    <a href="/users" class="btn">View</a>
                </div>

            </div>

        </div>

    </div>

</body>

</html>