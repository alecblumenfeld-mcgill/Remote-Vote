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
        <h1 class="text-center"> <i class="em em-us"></i>Thanks!<i class="em em-us"></i></h1>
        <p class="lead">Fill out the following form and we will get you started to being registered to vote in the Vermont General Election.</p>
      </div>

      {{ Form::open(['url' => '/thanks']) }}
            {!! csrf_field() !!}
            
            <input type="hidden" name="filepath" value="{{$data['file']}}">

            <button type="submit" class="btn btn-default">Download a Copy</button>
      {{ Form::close() }}

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
