<h1>{{ $course->title }}</h1>

<p>{{ $course->description }}</p>

<p>Price: ₹{{ $course->price }}</p>

<hr>

<h2>Course Content</h2>

@foreach($course->sections as $section)
    <div style="margin-bottom:20px;">
        <h3>{{ $section->title }}</h3>

        <ul>
            @foreach($section->lessons as $lesson)
                <li>
                    <a href="/lesson/{{ $lesson->id }}">
                        {{ $lesson->title }}
                    </a>

                    @if($lesson->is_preview)
                        (Preview)
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
@endforeach
