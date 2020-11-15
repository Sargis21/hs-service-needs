@extends('layouts.app')
@section('content')
<div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif

                            {{-- @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror --}}
                            @if ($errors->any())
                                @foreach ($errors->all() as $message)
                                    <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endforeach
                            @endif
                            <h1 class="tm-sitename text-uppercase">
                                <form action="{{ route('companyNameUpdate') }}" method="POST">
                                    @csrf
                                    <input class="form-control" name="name" value="{{ $companyName }}" />
                                    <button class="custom-btn" type="submit">save</button>
                                </form>
                            </h1>
                            
                        </div>
                    </div>
                </div> 
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div style="margin-left:-75px" class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="{{ route('admin-home') }}">Home<span class='sr-only'>(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="{{ route('admin-about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="{{ route('admin-services') }}">services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="{{ route('admin-contact') }}">contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="{{ route('admin-email') }}">Email</a>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-link tm-nav-link" aria-labelledby="navbarDropdown">
                                    <a class="nav-link tm-nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right">
                    <section class="tm-content">
                        @foreach($homeData as $data)
                    <h2 class="mb-5 tm-content-title">
                    <form action="{{ route('homeDataUpdate') }}" method="post">
                        @csrf
                        <input class="form-control" name="title" type="text" value="{{ $data->title }}">
                        <button class="custom-btn" type="submit">save</button>
                    </form>
                        
                    
                    </h2>
                    <p class="mb-5">
                        <form action="{{ route('homeDataUpdate') }}" method="post">
                            @csrf
                            <textarea name="text_1" class="form-control" rows="5" cols="70">{{ $data->text_1 }}</textarea>
                            <button class="custom-btn" type="submit">save</button>
                        </form>
                    </p>
                        <hr class="mb-5">
                        <p class="mb-5">
                            <form action="{{ route('homeDataUpdate') }}" method="post">
                                @csrf
                                <textarea name="text_2" class="form-control" rows="5" cols="70">{{ $data->text_2 }}</textarea>
                                <button class="custom-btn" type="submit">save</button>
                            </form>
                        </p>
                        @endforeach
                    </section>
                </main>
            </div>
        </div>

        <div class="tm-row">
            <div class="tm-col-left text-center">
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>
            </div>
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0">Copyright 2020 HS Services Needs. 
                    
                    | All Rights Reserved.</p>
                </footer>
            </div>
        </div>

        <!-- Diagonal background design -->
        <div class="tm-bg">
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

@endsection
