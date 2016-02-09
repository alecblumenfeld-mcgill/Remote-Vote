<!DOCTYPE html>
   @include('header')  
    <body>




<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            
          </ul>
        </nav>
        <h3 class="text-muted">Remote Voting Registration</h3>
      </div>

      <div class="jumbotron">
        <h1 class="text-center"> <i class="em em-us"></i>Vote from Anywhere!<i class="em em-us"></i></h1>
        <p class="lead">Fill out the following form and we will send a Absentee ballot registration form to the Vermont clerk’s office on your behalf. </p>
      </div>

      <div class="row marketing">
        <div class="col-lg-12 form-group">
          {{ Form::open() }}

            {!! csrf_field() !!}

          <input type="hidden" name="token" value="{{ csrf_token() }}">
        

        <div class="row"> 
          <div class="col-lg-6">  
            <div class="form-group">
              <label >First Name</label>
              <input  name="first_name"   class="form-control" id="exampleInputEmail1" placeholder="">
            </div>

          </div>
          <div class="col-lg-6">
            <div class="form-group">
                <label >Last Name</label>
                <input  name="last_name"   class="form-control" id="exampleInput1" placeholder="">
            </div>
            
          </div>
        </div>

        <div class="row"> 
          <div class="col-lg-12">
            <div class="form-group">
              <label >Address</label>
              <input  name="address"  type="" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>
        </div>

        <div class="row"> 
          <div class="col-lg-12">
            <div class="form-group">
              <label >Town</label>
              <input  id="town" name="Town"   type="" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>
        </div>

        <div class="row"> 
          <div class="col-lg-12">
            <div class="form-group">
              <label >Phone</label>
              <input  id="phone" name="Phone"  type="phone" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>
        </div>
        <div class="row"> 
          <div class="col-lg-12">
            <div class="form-group">
              <label >Email</label>
              <input  id="email" name="Email" type="email" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>
        </div>
          
          <div class="radio">
            <label>
              <input type="radio" name="party" id="party1" value="Democrat" checked>
              <i class="em em-horse"></i>
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="party" id="party2" value="Republican">
              <i class="em em-elephant"></i>
            </label>
          </div>
          

          <div class="checkbox">
            <label>
              <input type="checkbox"> I agree to the arbitrary rules of Remote Voting Registration and the US Goverment
            </label>
          </div>


          <button type="submit" class="btn btn-default">Submit</button>
        {{ Form::close() }}

      </div>

      <footer class="footer">
      Made Posisble by <a href="http://lob.com">Lob</a>
      </footer>

    </div>
<!-- 
    <div class="pushdown-10p"></div>
      <div class="valign-wrapper">
        <div class="row mt4">
        <div class="col ">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"> Register for voting</span>
              <p>Please fill out the following form</p>
            </div>
            <div class="input-field col s6">


        
            



<label> Select Ballot Type</label>
  <select  name="party" class="browser-default">
    <option value="" disabled selected>Choose your option</option>
       <option value="Republican">Republican</option>
            <option value="Democrat">Democrat</option>
  </select>






            <div class="card-action">
              <button class="btn">Submit</button>
            </div>
          </div>

        </div>
      </div>
      </div> -->
    </body>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

</html>
