<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User List</title>

    <style>
        body {
            margin: 0;
            font-family: Segoe UI;
            display: flex;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background: #343a40;
            color: white;
            position: fixed;
        }

        .sidebar h2 {
            text-align: center;
            padding: 20px;
        }

        .sidebar a {
            display: block;
            padding: 12px;
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #495057;
        }

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

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background: #007bff;
            color: white;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <h2>🚀 Laravel</h2>
        <a href="/">🏠 Dashboard</a>
        <a href="/blade-preview?type=preview">📄 Blade Preview</a>
        <a href="/blade-preview?type=upload">📂 File Upload</a>
        <a href="/users">👥 Users</a>
    </div>

    <div class="main">

        <div class="topbar">
            <h3>User Page</h3>
        </div>

        <div class="content">
            <div class="card">
                <h2>👥 User List</h2>

                <!-- ✅ Dummy Data Table -->
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Demo</td>
                        <td>demo@gmail.com</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Admin</td>
                        <td>admin@gmail.com</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Test User</td>
                        <td>test@gmail.com</td>
                    </tr>

                </table>

            </div>
        </div>

    </div>

</body>

</html>