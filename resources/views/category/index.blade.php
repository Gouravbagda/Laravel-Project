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
                <div class="card">
                    <div class="card-header">
                        <h4>Categories
                            <a href="{{url('categories/create')}}"class="btn btn-primary float-end">Add Category</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    {{$categories}}
                    </div>
                </div>
            </div>
        </div>
</body>
</html>