<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Cours:') !!}
    {!! Form::select('course_id', $courseList, null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nom de la Leçon ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('lessons.index') }}" class="btn btn-default">annuler</a>
</div>

