<!DOCTYPE html>
<html>
<head>
    <title>Create a New Course</title>
    <style>
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; margin-top: 5px; }
        .error { color: red; font-size: 0.8em; }
    </style>
</head>
<body>

    <h1>Create a New Course</h1>
    <a href="{{ route('courses.index') }}">Back to List</a>
    <hr>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf 

        <div class="form-group">
            <label for="title">Course Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5" required>{{ old('description') }}</textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="price">Price (e.g. 50000)</label>
            <input type="number" name="price" id="price" value="{{ old('price', 0) }}" required>
            @error('price') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit" style="padding: 10px 20px; background: blue; color: white; border: none; cursor: pointer;">
            Post Course
        </button>
    </form>

</body>
</html>