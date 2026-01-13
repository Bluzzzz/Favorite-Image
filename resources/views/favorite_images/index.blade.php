<!DOCTYPE html>
<html>
<head>
    <title>My Favorite Images</title>
</head>
<body>

<h2>My Favorite Images</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<form method="POST" action="/favorite-images" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" placeholder="Title" required><br><br>

    <textarea name="description" placeholder="Description"></textarea><br><br>

    <input type="file" name="image" required><br><br>

    <button type="submit">Save</button>
</form>

<hr>

@foreach($images as $img)
    <h4>{{ $img->title }}</h4>
    <img src="{{ asset('storage/'.$img->image_path) }}" width="200">
    <p>{{ $img->description }}</p>

    <form method="POST" action="/favorite-images/{{ $img->id }}">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>

    <hr>
@endforeach
</body>
</html>
