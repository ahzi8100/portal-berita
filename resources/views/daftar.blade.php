<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('kirim') }}" method="POST">
        @csrf
        <label for="">Nama</label> <br>
        <input type="text" name="nama"> <br> <br>
        <label for="">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="10"></textarea> <br> <br>
        <input type="submit" value="kirim">
    </form>
</body>

</html>
