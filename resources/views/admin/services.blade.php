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
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="{{ route('admin-services') }}">services<span class='sr-only'>(current)</span></a>
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
                        @foreach($services as $service)
                        @if($loop->iteration % 2 == 0)
                        <form action="{{ route('serviceUpdate') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $service->id }}">
                        <div class="media my-3 mb-5 tm-service-media tm-service-media-img-l">
                        <img data-toggle="modal" data-target="#exampleModal{{ $service->id }}" src="{{ asset('img/'.$service->img) }}" alt="Image" class="tm-service-img">
                            <div class="media-body tm-service-text">
                            <h2 class="mb-4 tm-content-title">
                                        <input class="form-control" name="title" type="text" value="{{ $service->title }}"/>
                            </h2>
                            <p>
                                    <textarea name="text" class="form-control" rows="5" cols="70">{{ $service->text }}</textarea>
                                    <button class="custom-btn" type="submit">save</button>
                            </p>
                            </div> 
                        </div>

<div class="modal fade" id="exampleModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="color: black" class="modal-title" id="exampleModalLabel">Change Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input style="border: none" name="img" class="form-control" type="file">
      </div>
      <div class="modal-footer">
        <button style="color:red;background:none; border:none;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button style="color:green;" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

                        </form>
                        @else 
                        <form action="{{ route('serviceUpdate') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $service->id }}">
                        <div class="media my-3 mb-5 tm-service-media">                            
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">
                                    <input name="title" class="form-control" name="title" type="text" value="{{ $service->title }}">   
                                </h2>
                                <p>
                                    <textarea name="text" class="form-control" rows="5" cols="70">{{ $service->text }}</textarea>
                                </p>
                                <button class="custom-btn" type="submit">save</button> 
                            </div> 
                        <img style="cursor:pointer" data-toggle="modal" data-target="#exampleModal{{ $service->id }}" src="{{ asset('img/'.$service->img) }}" alt="Image" class="tm-service-img-r">

<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="color: black" class="modal-title" id="exampleModalLabel">Chane Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input style="border: none" name="img" class="form-control" type="file">
      </div>
      <div class="modal-footer">
      <button style="color:red;background:none; border:none;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button style="color:green;" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>


                        </div>
                        </form>
                        @endif
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