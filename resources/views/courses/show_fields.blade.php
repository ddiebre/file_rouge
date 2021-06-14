
<div class="container">
    <div class="row">
        <!-- Name Field -->
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            <p>{{ $course->name }}</p>
        </div>
    </div>
    <div class="row">

<!-- Description Field -->
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        <p>{{ $course->description }}</p>
    </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $course->keterangan }}</p>
</div>
</div>
</div>
@foreach ($course as  $course )
<img src="" alt="">
@endforeach
