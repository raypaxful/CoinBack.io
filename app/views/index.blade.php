@extends('layouts.master')

@section('content')
<!-- .page-header -->
    <header class="page-header container text-center">
        <div class="col-sm-8 col-sm-offset-2">
            <h1>— welcome —</h1>
        </div>
    </header>
    <!-- /.page-header -->

    <!-- CONTAINER -->
    <article class="container m-center">
        <div class="col-sm-4 col-sm-offset-1">
            <h3>About Company —</h3>
        </div>
        <div class="col-sm-6">
            <p>Ea nec enim accumsan, ut prima blandit mel, labores nonumes detraxit an sed. Omnis malis propriae an sed, eu mea erat utinam meliore, inciderint philosophia usu ne. Laudem labores eu sed, vix in omnis habemus omnesque.</p>
        </div>
    </article>
    <!-- /.container -->

    <!-- CONTAINER -->
    <article class="container m-center">
        <div class="col-sm-4 col-sm-offset-1">
            <h3>Merchant sign up —</h3>
        </div>
        <div class="col-sm-6">
            @if ( $errors->count() > 0 )
            <div class="alert alert-warning">
                <p>The following errors have occurred:</p>
                <ul>
                    @foreach( $errors->all() as $message )
                    <li>{{{ $message }}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            {{ Form::open(array('url' => 'control/register', 'role' => 'form', 'id' => 'registerForm')); }}
                <div class="form-group">
                    {{ Form::text('business_name', null, array('class' => 'form-control', 'id' => 'business_name', 'placeholder' => 'Business name')) }}
                </div>
                <div class="form-group">
                    {{ Form::email('email', null, array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email')) }}
                </div>
                <div class="form-group">
                    {{ Form::text('phone', null, array('class' => 'form-control', 'id' => 'phone', 'placeholder' => 'Phone number')) }}
                </div>
                <input class="btn btn-default btn-block" type="submit" value="Register">
                <span class="succs-msg">message was sent</span>
            {{ Form::close(); }}
        </div>
    </article>
    <!-- /.container -->

    <!-- CONTAINER -->
    <article class="container text-center">
        <h2>— services —</h2>
        <div class="col-sm-4">
            <div class="block bg-info">
                <div class="icon icon-norm color" data-icon="*"></div>
                <h4>consulting</h4>
                <ul>
                    <li>Project Scoping</li>
                    <li>System Design</li>
                    <li>Process Planning</li>
                    <li>Project management</li>
                    <li>Support</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block">
                <div class="icon icon-norm" data-icon="+"></div>
                <h4>web design </h4>
                <ul>
                    <li>Graphic design</li>
                    <li>Interface design</li>
                    <li>User Experience design</li>
                    <li>Search Engine Optimization</li>
                    <li>Authoring</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block">
                <div class="icon icon-norm" data-icon="&#xe000;"></div>
                <h4>sound art</h4>
                <ul>
                    <li>Filmmaking</li>
                    <li>Television Production</li>
                    <li>Sound Recording</li>
                    <li>Sound Reproduction</li>
                    <li>Performance</li>
                </ul>
            </div>
        </div>
    </article>
    <!-- /.container -->

    <!-- CONTAINER -->
    <div class="container team text-center">
        <div class="col-sm-3 person">
            <a href="" data-toggle="modal" data-target="#person-1"><img alt="" src="http://placehold.it/240" class="img-circle"></a>
            <h5>MIKE Jhonson <small>Founder</small></h5>
        </div>
        <div class="col-sm-3 person">
            <a href="" data-toggle="modal" data-target="#person-2"><img alt="" src="http://placehold.it/240" class="img-circle"></a>
            <h5>ROBERT PLANT <small>designer</small></h5>
        </div>
        <div class="col-sm-3 person vacancy">
            <a href="" data-toggle="modal" data-target="#vacancy" class="img-circle gag"></a>
            <h5>Vacancy <small>project manager</small></h5>
        </div>
    </div>
    <!-- /.container -->
@stop