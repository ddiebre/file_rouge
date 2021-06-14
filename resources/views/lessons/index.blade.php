
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
        <h1 class="pull-left">Leçon </h1>
        <h1 class="pull-right">
            @if(Auth::user()->isAdmin())
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('lessons.create') }}">Ajouter Leçon </a>
            @endif
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('lessons.table')
            </div>
        </div>
        <div class="text-center">

        @include('adminlte-templates::common.paginate', ['records' => $lessons])

        </div>
    </div>
@endsection

