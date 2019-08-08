@extends('master')

@section('content')
@if($errors->all())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </div>
@endif

@if(session()->has('message'))
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
@endif
        <h1>All Posts</h1>
        {{-- @foreach ($posts as $post) --}}
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-striped text-nowrap table-responsive-lg">
                    <thead>
                        <tr>
                            <th class="align-text-table">
                                Title
                            </th>
                            <th class="align-text-table">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>
                                    <a href="{{route('posts.show', $post->id)}}">
                                        {{$post->title}}    
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info">Edit</a>
                                    <form class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this post?')" action="{{route('posts.destroy', $post->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                {{-- <h2>
                    <a href="{{route('posts.show', $post->id)}}">
                        {{$post->title}}    
                    </a>
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info">Edit</a>
                    <form class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this post?')" action="{{route('posts.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </h2> --}}
            </div>
        </div>    
        {{-- @endforeach --}}
        <div class="mt-4">
            {{$posts->links()}}
        </div>
@endsection