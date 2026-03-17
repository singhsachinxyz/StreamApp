<div style="display:flex; height:100vh;">

    <!-- LEFT: VIDEO -->
    <div style="flex:3; padding:20px;">
        <h2>{{ $lesson->title }}</h2>

        <video width="100%" controls>
            <source src="{{ asset('storage/'.$lesson->video_path) }}" type="video/mp4">
        </video>
    </div>

    <!-- RIGHT: LESSON LIST -->
    <div style="flex:1; border-left:1px solid #ccc; overflow-y:auto; padding:20px;">

        <h3>{{ $lesson->section->course->title }}</h3>

        @foreach($lesson->section->course->sections as $section)
            <div style="margin-bottom:20px;">
                <strong>{{ $section->title }}</strong>

                <ul>
                    @foreach($section->lessons as $l)
                        <li>
                            <a href="/lesson/{{ $l->id }}">
                                {{ $l->title }}
                            </a>

                            @if($l->is_preview)
                                (Preview)
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach

    </div>

</div>
