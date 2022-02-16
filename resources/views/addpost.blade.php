@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if(Session::has('post_add'))
          <span>{{Session::get('post_add')}}</span>
          @endif
           <form method="post" action="{{route('savepost')}}" style="margin-top: 50px;">
            @csrf
            <input class="form-control form-control-lg" type="text" name="name" placeholder="Title">
            <label for="exampleFormControlTextarea1"></label>
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe" name="description" style="margin-top: 10px;"></textarea>
             
             <div class="buttons d-flex">
              <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
              <a href="{{route('home')}}">
                <button type="button" class="btn btn-primary" style="margin-top: 10px; margin-left: 30px;">Back</button>
              </a>
             </div>
           </form>

        </div>
    </div>
</div>
@endsection
