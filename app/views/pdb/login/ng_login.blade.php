<div pdb-login-a ng-controller="loginController">
<div class="container">
  <div class="row">

    <div class="main">
      <h3>{{ Lang::get('pdb_msg.please_log_in_or') }}<a href="#">{{ Lang::get('pdb_msg.sign_up') }}</a></h3>
      <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8">
          <a href="#" class="btn btn-lg btn-danger btn-block">ProduktDatabasen</a>
        </div>
        
      </div>
      <div class="login-or">
        <hr class="hr-or">
      </div>

      <form role="form" ng-submit="login()" novalidate>
        <div class="form-group">
          <label for="inputEmail">Email</label>
          
            <input type="text" class="form-control" id="inputEmail" ng-model="inputEmail" autofocus>
            <span style="color:red; font-size:0.8em; font-style:italic;" class="alert" ng-show="flash_email" ng-bind="flash_email"></span>
        

        </div>
        

        <div class="form-group">
          <a class="pull-right" href="#">Forgot password?</a>
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" id="inputPassword" ng-model="inputPassword">
          <span style="color:red; font-size:0.8em; font-style:italic;" class="alert" ng-show="flash_password" ng-bind="flash_password"></span>
        </div>
        <div class="checkbox pull-right">
          <label>
            <input type="checkbox" ng-model="inputRememberme">
            Remember me </label>
        </div>
        <button type="submit" class="btn btn btn-primary">
          Log In
        </button>
      </form>
      
    
    </div>
    
  </div>
</div>
</div>
