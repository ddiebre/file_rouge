
<div class="container-fluid">
    @foreach($lessons as $lessons)
    <div class=" card mt-5 mb-4">

        <div class="row">
            <div class="card-body">
                <div class="col-md-4 col-xs-4">
                    <img src="/assets/img/attestation.png" alt="" class="img-thumbnail shadow p-3 mb-5 bg-white rounded">
                    <p class="" >{{ $lessons->details }}</p>
                </div>
                <div class="col-md-8 col-xs-8 ">
                    <h3 class="name text-primary">{{ $lessons->course->name }} : {{ $lessons->name }}</h3>

                    @if (Auth::user() && Auth::user()->isAdmin())
                    {!! Form::open(['route' => ['lessons.destroy', $lessons->id], 'method' => 'delete']) !!}
                    <div class='btn-group mt-5'>
                        <a href="{{ route('lessons.show', [$lessons->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('lessons.edit', [$lessons->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    @else
                        <a href="{{ route('lessons.show', [$lessons->id, 'course_id' => Request::input('course_id')]) }}" class='btn btn-primary btn-xs'>Complete Lesson</a>

                    @endif
                    <div class="row">
                        <div class="col-md-8 col-xs-8">
                            <p class="" >{{ $lessons->details }}</p>
                        </div>
                        <div class="offset-4"></div>
                    </div>
                </div>

            </div>
        </div>

            </div>

    @endforeach
</div>

