
@extends('layouts.app')
@section('content')
    <div class="home-h1">
        <h1>Hey, I'm Shibgat Ullah Al Mahmud</h1>
    </div>

    <div class="home-contain">
        <div class="home-img">
            <img src="{{ asset('images/suam.jpg')}}" alt="sum" style="width:150px">
        </div>
        
        <div class="home-pra">
            <h2>My journey in the world of web development has been a thrilling one, 
                where I've honed my skills to create seamless and sophisticated digital experiences.
            </h2>
        </div>

        <a href="https://shibgat.me" target="_blank">
            <button class="btn"><i class="fa fa-download"></i> CV Download</button>
        </a>
    </div>
@endsection
        

    

  
