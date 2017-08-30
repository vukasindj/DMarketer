@extends('layouts.app')

@section('content') 
    
    @if(session('status'))
    <div class="notification is-success">
        {{ session('status') }}
    </div>
    @endif

   <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
          <div class="card">
            <div class="card-content">
              <h1 class="title">Forgot Password</h1>

              <form action="{{route('password.email')}}" method="POST" role="form">
              {{csrf_field()}}
              <div class="field">
                  <label for="email" class="label">Email Address</label>
                  <p class="control">
                  <input class="input" type="text" name="email" id="email" placeholder="name@example.com">
                  </p>
              </div>

              

    <button class="button is-primary is-outlined is-fullwidth m-t-30">Get reset link</button>
            </form>
          </div> 
          </div>
          
          <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted"><i class="fa fa-caret-left m-r-10"></i>Back to Login</a></h5>
        </div>
    </div>
@endsection
