@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="padding-top: 50px;">
        <div class="col-md-8">
            @if(Session::has('post_add'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">  
                  <span>{{Session::get('post_add')}}</span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <table class="table" style="width: 700px; height: 300px; padding-top: 50px;">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Action</th>

              </tr>
          </thead>
          <tbody>

              @foreach ($blog_posts as $blog_post)
              <tr>
                  <td> {{ $blog_post->id }} </td>
                  <td> {{ $blog_post->name }} </td>
                  <td> {{ $blog_post->description }} </td>
                  <td>
                      <!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{route('updatepost', $blog_post->id)}}">Update</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="{{route('deletepost', $blog_post->id)}}">Delete</a>
  </div>
</div>
                  </td>
              </tr>
              @endforeach
          </tbody>

      </table>

      <div class="action d-flex">
        <a class="btn btn-primary" href="{{route('addpost')}}">Add Post
        </a>
    </div>
</div>
</div>
</div>
@endsection
