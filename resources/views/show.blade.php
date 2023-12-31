<!DOCTYPE html>
<html>

<head>
    <title>Multiple Upload Images</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .image-table {
            border-collapse: collapse;
            width: 100%;
        }

        .image-table th,
        .image-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .image-table img {
            max-width: 200px;
            max-height: 200px;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <h1 class="navbar-brand">Multiple Image Upload</h1>
        </div>
    </nav>
    <div class="container">
        <h1>Images List</h1>

        <table class="image-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Images</th>
                </tr>
            </thead>
            <tbody>
                @foreach($images as $image)
                <tr>
                    <td>{{ $image->id }}</td>
                    <td>
                        @foreach(json_decode($image->image) as $imageName)
                        <img src="{{ asset($imageName) }}" alt="{{ $imageName }}" />
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
