<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layout/app')
    @section('title','Halaman Latihan Layout : Home')

    @section('content')
    <p>Ini adalah halaman home</p>
    <p>Selamat Datang!</p>
    @endsection
    
    @include('layout.componen')

</body>
</html>