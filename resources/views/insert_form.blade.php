<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">
            {{$title}}
{{--            {{$insert->Name}}--}}
        </h1>
        <form action="{{$url}}" method="post">
            @csrf

                <div class="row">
                    <div class="col-6">
                        <lable>name</lable>
                        <input class="form-control"  type="text" name="name" value="{{isset($insert->Name) ? $insert->Name : ''}}" label="Name"/>
{{--                            <x-input type="text" name="name" value="{{isset($insert->Name) ? $insert->Name : ''}}" label="Name"/>--}}
                        <span class="text-danger">
                             @error('name')
                                {{$message}}
                             @enderror
                        </span>
                    </div>
                    <div class="col-6">
                        <lable>email</lable>
{{--                        <x-input type="email" name="email" value="{{isset($insert->Email) ? $insert->Email : ''}}" label="Email" />--}}
                        <input class="form-control"  type="email" name="email" value="{{isset($insert->Email) ? $insert->Email : ''}}" label="Email" />
                        <span class="text-danger">
                             @error('email')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6 mt-4">
                        <lable>password</lable>
{{--                        <x-input type="password" name="password" value="{{isset($insert->Password) ? $insert->Password : ''}}" label="Password" />--}}
                        <input class="form-control"  type="password" name="password" value="{{isset($insert->Password) ? $insert->Password : ''}}" label="Password" />
                        <span class="text-danger">
                             @error('password')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>

            <button class="btn btn-primary mt-4">Submit</button>

        </form>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
