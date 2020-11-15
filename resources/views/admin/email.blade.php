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
                                <h1 class="tm-sitename text-uppercase">{{ $companyName }}</h1>
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
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="{{ route('admin-home') }}">Home</a>
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
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="{{ route('admin-email') }}">Email<span class='sr-only'>(current)</span></a>
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
        </div>        

        <table class="table" style="color:wheat">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @foreach($emails as $key => $data)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->text}}</td>
            <td>
            <form action="{{ route('deleteEmail') }}" method="post">
                @csrf
                <input type="hidden" value="{{ $data->id }}" name="id">
                <button style="background: none; border:none;color:red" type="submit"><i class="fas fa-trash-alt"></i></td></button>
            </form> 
                
        </tr>
    @endforeach
  </tbody>
</table>


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

        <div class="tm-bg"> <!-- Diagonal background design -->
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>
@endsection