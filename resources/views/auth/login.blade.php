@extends('layouts.app')

@section('posts')
<div class="row my-1">
    <div class="col-md-6 offset-md-3">
        <div class="alert alert-light">
            <div class="alert-body mx-4 my-2">
              @if (session('status'))
                  <div class="alert alert-danger text-center">
                    {{ session('status') }}
                  </div>
              @else
                  
              @endif
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                   
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ old('email') }}">
                      @error('email')
                        <div class="text-danger form-text">
                           {{ $message}}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1"  value="{{ old('password') }}">
                      @error('password')
                        <div class="text-danger form-text">
                           {{ $message}}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                  </form>
            </div>
       </div>
    </div>
</div>
@endsection