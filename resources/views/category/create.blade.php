<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
        <div class="bg-dark py-3">
        <h3 class="text-white text-center">Category CRUD Program</h3>
        </div>
        <div class="container mt-5">
            <div class="col-md-12">

                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Add Category
                            <a href="{{url('categories')}}"class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('categories/create')}}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}"/>
                                @error('name')<span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3">{{old('description')}}</textarea>
                                @error('description')<span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label>ia_active</label>
                                <input type="checkbox" name="ia_active" {{old('ia_active')== true ? checked: '' }}/>
                                @error('ia_active')<span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <button type="sumbit" class="btn btn-primary">Submit Here</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>