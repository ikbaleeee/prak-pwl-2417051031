<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'PWL App' }}</title>

    <!-- Bootstrap 5 CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f8fafc;
        }
        main {
            flex: 1;
        }
        .btn-action {
            transition: all 0.2s ease-in-out;
        }
        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.12);
        }
        .uuid-badge {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 0.82rem;
            letter-spacing: -0.2px;
            background-color: #f1f5f9;
            color: #475569;
            padding: 0.35rem 0.6rem;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
            display: inline-block;
        }
    </style>
</head>

<body>

    {{-- Navbar Component --}}
    <x-navbar />

    {{-- Konten Halaman --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer Component --}}
    <x-footer />

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>