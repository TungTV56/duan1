<div class="container">
  <h2 style="text-align: center;">Đăng nhập</h2>
  <form class="form-horizontal" action="/handleLogin" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
          <a href="/client/signup"><label style="margin-left: 750px ;">Đăng ký</label></a>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Đăng Nhập</button>
      </div>
    </div>
  </form>
</div>
