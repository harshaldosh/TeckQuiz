@extends('layouts.app')

@section('title', 'TeckQuiz - An Online Quiz Management System')
@section('content')
    <main>
        <style>
            p.home-lead {
                font-size: 26px;
            }

            h1.home-title {
                font-size: 72px;
            }
            .logo {
                background-image: url('/assets/img/logo.png');
                background-position: center;
                background-size: cover;
                height: 400px;
                width: 400px;
            }
        </style>
        
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 text-left mr-auto">
                        <img src="/assets/img/logo.png" alt="" class="img-fluid">
                        <p class="home-lead text-center" style="margin-top: -100px; font-size: 2rem">
                            An Online Quiz System built for the Web.
                        </p>
                    </div>
                    @if (Auth::guest())
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="text-center text-muted">
                                    Already have an account and just want to join to a class?
                                    <a href="">Click here</a> to join!
                                </p>
                                <hr>
                                @if($errors->has('usr'))
                                    <strong>{{ $errors->first('usr') }}</strong>
                                @endif
                                 @if($errors->has('password'))
                                    <strong>{{ $errors->first('password') }}</strong>
                                @endif
                                <form method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <div class="form">
                                            <input name="n_given" id="n_given" type="text" placeholder="Given name" class="form-control mb-2">
                                            <input name="n_middle" id="n_middle" type="text" placeholder="M.I." class="form-control mb-2">
                                            <input name="n_family" id="n_family" type="text" placeholder="Family name" class="form-control mb-2">
                                            <input name="n_ext" id="n_ext" type="text" placeholder="Ext." class="form-control mb-2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input name="usr" id="usr" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input name="password" id="password" type="password" class="form-control">
                                        <small class="form-text text-muted">At least 8 characters</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Class Code</label>
                                        <input name="class_code" id="class_code" type="text" class="form-control">
                                        <small class="form-text text-muted">Ask your teacher for the code</small>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block">Register</button>
                                        <small class="form-text text-muted text-center">By clicking "Register", you agree to our terms of service and privacy policy.</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @else
                        <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="card">
                            <!-- <div class="card-header">Register</div> -->
                            <div class="card-body">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, modi!
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <h3 class="text-muted">TeckQuiz</h3>
                    <p class="text-muted">An Online Quiz System built for the Web.</p>
                </div>
                <div class="col-lg-8 col-md-12">
                    <ul class="list-unstyled">
                        <li><a href="">Home</a></li>
                        <li><a href="">Changelog</a></li>
                        <li><a href="">Report a bug</a></li>
                        <li><a href="">About us</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </footer>
    
@endsection