<h1>Courses</h1>

@foreach($courses as $course)
    <div>
        <h2>{{ $course->title }}</h2>
        <p>{{ $course->price }}</p>
    </div>
@endforeach
