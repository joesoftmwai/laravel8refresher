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

                @if ($posts->count())
                    
                @else
                    <div class="alert alert-warnig">No posts found</div>
                @endif
            </div>
       </div>
    </div>
</div>
@endsection