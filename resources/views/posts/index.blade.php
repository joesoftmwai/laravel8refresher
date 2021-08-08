@extends('layouts.app')

@section('posts')
<div class="row my-1">
    <div class="col-md-8 offset-md-2">
        <div class="">
            <div class="alert alert-light">
                <form action="{{ route('posts') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Body</label>
                       <textarea name="body" class="form-control" id="exampleInputPassword1" cols="30" rows="4" placeholder="write something here..."></textarea>
                       @error('body')
                        <div class="text-danger form-text">
                           {{ $message}}
                        </div>
                    @enderror
                      </div>
                    
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
                <br>
                <hr>

                @if ($posts->count())
                   @foreach ($posts as $post)
                       <div class="alert alert-info">
                           <small class="h6">Article by: {{ $post->user->name}}
                            &nbsp;|&nbsp;<span>Date: {{ $post->created_at->diffForHumans()}}</span>
                           </small>
                          <p> {{ $post->body }} </p>
                       </div>
                   @endforeach 
                @else
                    <div class="alert alert-warnig">No posts found</div>
                @endif
            </div>
       </div>
    </div>
</div>
@endsection