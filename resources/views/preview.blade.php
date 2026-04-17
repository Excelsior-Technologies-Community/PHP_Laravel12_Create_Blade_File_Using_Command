<!DOCTYPE html>
<html>

<head>
    <title>Blade System</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
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

        button {
            padding: 10px 20px;
            margin: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
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
            <h3>Blade System</h3>
        </div>

        <div class="content">
            <div class="card">

                @if($type == 'preview')

                    <h2>📄 Blade Preview</h2>

                    <a href="/download-blade">
                        <button>Download Blade</button>
                    </a>

                    <p>Total Downloads: {{ $count }}</p>

                @elseif($type == 'upload')

                    <h2>📂 File Upload</h2>

                    <form action="/upload-file" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" required>
                        <button type="submit">Upload</button>
                    </form>

                    <hr>

                    @foreach($files as $file)
                        <p>{{ $file->filename }}</p>
                    @endforeach

                @endif

            </div>
        </div>

    </div>

</body>

</html>