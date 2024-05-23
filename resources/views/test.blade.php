<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <h2>test tok</h2>
    @php
        $link = route('user.detail', 9);
        $l = route('user.detail');
    @endphp
    <a href="{{ $link }}">user</a>
    <a href="{{ $l }}">user</a>
    <a href="/redirect-to-download">Download File.txt</a><a href="/redirect-to-website">Lanjutkan ke situs luar</a>
</body>
</html>