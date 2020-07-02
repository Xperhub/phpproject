@extends('layouts.app')

@section('content')
<div class="container">
    <div class ="row">
        <div class="col-3 p-5">
        <img src="https://openlibrary.org/static/images/openlibrary-logo-tighter.svg">
        </div>

        <div class ="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                  <h1>{{ $user->username }}</h1>
                  <a href="#">Add new post </a>
            </div>
               <div class ="d-flex">
                   <div class = "pr-5"><strong>153k </strong>books</div>
                   <div class = "pr-5"><strong>23k </strong> users</div>
                   <div class = "pr-5"><strong>212 </strong> active users</div>
               </div>

               <div class ="pt-4 font-weight-bold">{{$user->profile->title}}</div>
               <div>{{$user->profile->description}}</div>
               <div class ="pt-2"><a href ="#">{{$user->profile->url}}</a></div>
            </div>
        </div>
    </div>
    <div class = "row pt-5">
        <div class = "col-4">
           <img src = "https://lh3.googleusercontent.com/proxy/jljveAqxBLL2xIen8Fqah-kCRUWoZL0Bhv9L6ga8mfR3UluI9YFdH9j65t6lvL842tBSnyRuBCeByJW61abLix43YtlNdT8u71zC8BMQOLMM7hT_rVggIGol" class ="w-100">
        </div>
        <div class = "col-4">
           <img src = "https://image.shutterstock.com/image-illustration/digital-library-elearning-online-bookstore-260nw-654096277.jpg" class ="w-100">
        </div>
        <div class = "col-4">
           <img src = "https://bibliotech.files.wordpress.com/2014/01/library_books_mouse.jpg" class = "w-100">
        </div>
    </div>
</div>
@endsection
