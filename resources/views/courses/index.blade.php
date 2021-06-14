<!DOCTYPE html>
<html>

<head>

<body>

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
        {{-- <h1 class="pull-left">Courses</h1> --}}
        <h1 class="pull-right">
            @if(Auth::user()->isAdmin())
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('courses.create') }}">Ajouter cours</a>
            @endif
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary ">
            <div class="box-body">
                    @include('courses.table')
            </div>
            <div class="box-body">
                @include('courses.tablel')
        </div>
        </div>
        <div class="text-center">

        @include('adminlte-templates::common.paginate', ['records' => $courses])

        </div>
    </div>

    {{-- suite --}}

@endsection




    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/clean-blog.js"></script>
</body>

</html>
