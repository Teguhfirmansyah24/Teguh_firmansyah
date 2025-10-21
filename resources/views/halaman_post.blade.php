<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <center>
        <h2>Data Siswa</h2>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No</th>
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
    </center>

</body>
</html>