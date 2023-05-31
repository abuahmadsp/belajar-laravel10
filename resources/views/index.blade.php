<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Data</title>
</head>
<body>
    <div class="container">
        <table border="1">
            <tr>
                <td>nama</td>
                <td>email</td>
            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d->name }}</td>
                <td>{{ $d->email }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>