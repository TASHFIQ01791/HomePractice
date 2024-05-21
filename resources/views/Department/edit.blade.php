<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit Department</title>
</head>
<body>
    <div class="container">
        <h2 class="text-primary text-center my-3">Edit Department</h2>
        {{-- edit form  --}}
        <form action="{{url('Department/update/'.$departments->id)}}" method="post">
            @csrf
            <div class="form-group">
                {{-- Name  --}}
                <label for="">Name:</label>
                <input type="text" class="form-control mt-2" value="{{$departments->name}}" name="name" id="">
            </div>
            {{-- Short Name  --}}
            <div class="form-group">
                <label for="">Short Name:</label>
                <input type="text" class="form-control mt-2" value="{{$departments->short_name}}" name="shortName" id="">
            </div>
            {{-- Established at  --}}
            <div class="form-group">
                <label for="">Established At</label>
                <input type="date" class="form-control mt-2" value="{{$departments->established_at}}" name="estAt" id="">
            </div>
            {{-- submit button  --}}
            <div>
                <button type="submit" class="mt-2 btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
