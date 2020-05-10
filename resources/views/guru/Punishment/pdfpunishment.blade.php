<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Punishment</title>
</head>

<body>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>POINT</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach($punishment as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->student_id}}</td>
                <td>{{$data->score}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>