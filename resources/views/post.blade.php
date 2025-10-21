<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Data Siswa</h1>

    <table border="2">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
        </tr>
        @foreach ($post as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->content }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>