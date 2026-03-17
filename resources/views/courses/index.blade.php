<h1>Courses</h1>

@foreach($courses as $course)
    <div style="margin-bottom:20px;">
        <h2>
            <a href="{{ route('courses.show', $course->slug) }}">
                {{ $course->title }}
            </a>
        </h2>

        <p>₹{{ $course->price }}</p>
    </div>
@endforeach
