<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    
    <header>

        <h2>Blog Malas Ngoding</h2>
        <nav>
            <a href="/blog">Home</a>
            <a href="/blog/tentang">Tentang</a>
            <a href="/blog/kontak">Kontak</a>
        </nav>
    </header>
    <hr>
    <br>

    {{-- bagian judul halaman blog --}}
    <h3>@yield('judul_halaman')</h3>


    {{-- bagian konten blog --}}
    @yield('konten')

    <br>
    <hr>
    <footer>
        <p>&copy; <a href="https://www.malasngoding.com">malas ngoding</a></p>
    </footer>
</body>
</html>