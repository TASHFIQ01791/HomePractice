<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Deparment</title>
</head>
<body>
    <div class="container">
        <h2 class="text-primary text-center mt-3">All Department</h2>
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Short Name</th>
                <th>Established At</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($departments as $d)
                <tr>
                    <td> {{ $d->name }} </td>
                    <td> {{ $d->short_name }} </td>
                    <td> {{ $d->established_at}} </td>
                    <td>
                        <a href="{{url('Department/edit/'.$d->id)}}" class="btn btn-secondary">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
