<!DOCTYPE html>
   @include('header')  
    <body>
    <div class="pushdown-10p"></div>
      <div class="valign-wrapper">
        <div class="row mt4">
        <div class="col ">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Register</span>
             
            </div>
            <div class="input-field col s6">


        {{ Form::open() }}

            {!! csrf_field() !!}
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            <input  id="first_name" name="first_name" type="text" class="validate white-text">
            <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
            <input id="last_name" name="last_name" type="text" class="validate white-text">
            <label for="last_name">Last Name</label>
        </div>


        <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate white-text">
          <label for="email">Email</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="password" class="validate white-text">
          <label for="password">Password</label>
        </div>
        </div>



            <div class="card-action">
              <button class="btn">Submit</button>
            </div>
          </div>
          {{ Form::close() }}

        </div>
      </div>
      </div>
    </body>
</html>
