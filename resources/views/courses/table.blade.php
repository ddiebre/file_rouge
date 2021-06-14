

{{-- test --}}
<div class="features-boxed">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">cours </h2>
            <p class="text-center">

            </div>

        <div class="row justify-content-center features">
            @foreach($courses as $course)

            <div class="col-sm-6 col-md-5 col-lg-4 item mt-5" >
                <div class="box shadow p-3 mb-5 bg-white rounded">

                    {{-- <i class="fa fa-book icon" aria-hidden="true"></i> --}}

                    <h3 class="name">{{ $course->name }}</h3>
                    <p class="description">{{ $course->description }}</p><a class="learn-more" href="{{ route('courses.show', [$course->id]) }}"> </a></div>
                    @if (Auth::user() && Auth::user()->isAdmin())
                    {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                    {{-- <div class='btn-group'> --}}
                        <a href="{{ route('courses.show', [$course->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('courses.edit', [$course->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    {{-- </div> --}}
                    {!! Form::close() !!}

                    @else
                        @if (in_array($course->id, $csids))
                            <a href="{{ route('lessons.index') }}?course_id={{$course->id}}" class='btn btn-primary btn-xs'>ouvrir le cours</a>
                        @else
                            <a href="{{ route('courses.subscribe', [$course->id]) }}" class='btn btn-success btn-xs'>S'inscrire</a>
                        @endif
                    @endif

                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
