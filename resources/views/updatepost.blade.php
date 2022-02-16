@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if(Session::has('post_add'))
          <span>{{Session::get('post_add')}}</span>
          @endif
           <form method="post" action="{{route('saveupdate', $blog_post->id)}}" style="margin-top: 50px;">
            @csrf

            {{-- title area --}}
            <input type="hidden" name="id" value="{{$blog_post->id}}">
            <input class="form-control form-control-lg" type="text" name="name" value="{{$blog_post->name}} "placeholder="Title">

            {{-- textarea --}}
            <label for="exampleFormControlTextarea1"></label>
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe" name="description" value=" 
             {{$blog_post->description}} " style="margin-top: 10px;"></textarea>

              {{-- button submit --}}
             <div class="buttons d-flex">
              <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Update</button>
              <a href="{{route('home')}}">
                <button type="button" class="btn btn-primary" style="margin-top: 10px; margin-left: 30px;">Back</button>
              </a>
             </div>
           </form>

        </div>
    </div>
</div>
@endsection
