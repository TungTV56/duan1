<div class="container">
  <h2 style="text-align: center;">Đăng nhập</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="user">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user" placeholder="Enter username" name="user">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
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
