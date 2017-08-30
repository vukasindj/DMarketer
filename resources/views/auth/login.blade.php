@extends('layouts.app')

@section('content')
    

    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
          <div class="card">
            <div class="card-content">
              <h1 class="title">Log In</h1>

              <form action="{{route('login')}}" method="POST" role="form">
              {{csrf_field()}}
              <div class="field">
                  <label for="email" class="label">Email Address</label>
                  <p class="control">
                  <input class="input" type="text" name="email" id="email" placeholder="name@example.com">
                  </p>
              </div>

              <div class="field">
                  <label for="password" class="label">Password</label>
                  <p class="control">
                  <input class="input" type="password" name="password" id="password">
                  </p>
              </div>

              <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>

              <button class="button is-primary is-outlined is-fullwidth m-t-30">Log In</button>
            </form>
          </div> 


          </div>
          <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">Forgot Your Password</a></h5>
        </div>
    </div>
@endsection
