<!DOCTYPE html>
<html>

<head>
    <title>Multiple Upload Images</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <h1 class="navbar-brand">Multiple Image Upload</h1>
        </div>
    </nav>
    <div class="container">
        <h2>Upload Images</h2>
        <form action="/file" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Select Images</label>
                <input type="file" class="form-control-file" id="images" name="file[]" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
        <a href="{{route('show')}}">
            <button type="submit" class="btn btn-primary mt-3">Show</button>
        </a>
    </div>
</body>

</html>