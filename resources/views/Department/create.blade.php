<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Create Department</title>
</head>
<body>
    <div class="container">
        <h2 class="text-primary text-center my-3">Create Department</h2>
        <form action="{{url('Department/store')}}" method="post">
            @csrf
            <div class="form-group">
                {{-- Name  --}}
                <label for="">Name:</label>
                <input type="text" class="form-control mt-2" name="name" id="">
            </div>
            <div class="form-group">
                <label for="">Short Name:</label>
                <input type="text" class="form-control mt-2" name="shortName" id="">
            </div>
            <div class="form-group">
                <label for="">Established At</label>
                <input type="date" class="form-control mt-2" name="estAt" id="">
            </div>
            <div>
                <button type="submit" class="mt-2 btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</body>
</html>
