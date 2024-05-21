<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All </title>
</head>

<body>
    <div class="container">
        <h2 class="text-center my-4 text-primary">All departments</h2>
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Short Name</th>
                <th>Established</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($departments as $d)
                    <tr>
                        <td> {{ $d->name }} </td>
                        <td> {{ $d->short_name }} </td>
                        <td> {{ $d->established_at }} </td>
                        <td>
                            {{-- Edit Button  --}}
                            <a href="{{ url('Department/edit/'.$d->id) }}" class="btn btn-secondary">Edit</a>

                            {{-- delete button  --}}
                            <a href="{{ url('Department/delete/'.$d->id) }}" data-toggle="modal"
                                data-target="#myModal{{ $d->id }}" class="btn btn-danger">Delete</a>
                            {{-- set here id for looping --}}
                            <div class="modal fade" id="myModal{{ $d->id }}" role="dialog">
                                {{-- set here id for looping --}}
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        {{-- modal header  --}}
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Confirmation</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        {{-- modal body  --}}
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete <b>{{$d->name}}</b> ? </p>
                                        </div>

                                        {{-- model footer  --}}
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="{{url('Department/delete/'.$d->id)}}" class="btn btn-danger"> Yes </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
