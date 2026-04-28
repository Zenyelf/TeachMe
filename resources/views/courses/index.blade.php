<h1>All Available Courses</h1>
<a href="{{ route('courses.create') }}">Add New Course</a>

<hr>

@foreach($courses as $course)
    <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
        <h3>{{ $course->title }}</h3>
        <p>{{ $course->description }}</p>
        <p>{{ $course->mentor_id}}</p>
        <strong>Price: ${{ $course->price }}</strong>
    </div>
@endforeach