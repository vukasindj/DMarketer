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
              <h1 class="title">Reset Your Password</h1>

              <form action="{{route('register')}}" method="POST" role="form">
              {{csrf_field()}}
              <input type="hidden" name="token" value="{{$token}}">
              <div class="field">
                  <label for="email" class="label">Email Address</label>
                  <p class="control">
                  <input class="input" type="text" name="email" id="email" placeholder="name@example.com">
                  </p>
              </div>


              <div class="columns">
              <div class="column">
              <div class="field">
                  <label for="password" class="label">Password</label>
                  <p class="control">
                  <input class="input" type="password" name="password" id="password">
                  </p>
              </div> 
              </div>

              <div class="column">
              <div class="field">
                  <label for="password_confirmation" class="label">Confirm Password</label>
                  <p class="control">
                  <input class="input" type="password" name="password_confirmation" id="password_confirmation" >
                  </p>
              </div>
              </div>

              </div>
              <button class="button is-primary is-outlined is-fullwidth m-t-30">Reset Password</button>
            </form>
          </div> 


          </div>
          <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already have an Account</a></h5>
        </div>
    </div>
@endsection
