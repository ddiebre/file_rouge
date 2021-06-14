<header class="masthead" style="background-image:url('assets/img/home-bg.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="site-heading">
                    <h2>se former en toute liberté</h2><span class="subheading">Maintenir vos connaissance réviser à travers un programme complet&nbsp;</span></div>
            </div>
        </div>
    </div>
</header>
@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Course
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($course, ['route' => ['courses.update', $course->id], 'method' => 'patch']) !!}

                        @include('courses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
