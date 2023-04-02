<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Admin</h1>
    <table class="table table-hover">
        <thead>
           <tr>
               <th>#</th>
               <th>Name</th>
               <th>Email</th>
               <th>Password</th>
               <th>Action</th>

           </tr>
        </thead>
        <tbody>
            @foreach($insert as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->Name}}</td>
                    <td>{{$value->Email}}</td>
                    <td>{{$value->Password}}</td>
                    <td>
{{--                        <a href="{{url('delete')}}/{{$value->id}}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>--}}
                        <a href="{{route('admin.delete' , ['id' => $value->id])}}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                        <a href="{{route('admin.edit' , ['id' => $value->id])}}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
