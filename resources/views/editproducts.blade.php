<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($data)
    <h1>Edit Product</h1>
    <form action="{{url('/updateproducts')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $data->id }}">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $data->title }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ $data->description }}</textarea>
        <br>
        <button type="submit">Update Product</button>
    </form>
    @endif
</body>
</html>