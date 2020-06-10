<h1 align="center"> Change Password </h1>

<form action="" method="post" enctype="multipart/form-data"> <!--form begin -->

  <div class="form-group">  <!--form group begin -->
    <label> Your Old Password:</label>

    <input type="text" name="old_pass" class="form-control" required>

  </div>  <!--form group end -->

  <div class="form-group">  <!--form group begin -->
    <label> Your New Password: </label>

    <input type="text" name="new_pass" class="form-control" required>

  </div>  <!--form group end -->
  <div class="form-group">  <!--form group begin -->
    <label> Confirm Your New Password: </label>

    <input type="text" name="new_pass_again" class="form-control" required>

  </div>  <!--form group end -->

  <div class="text-center"> <!--text-center start -->

    <button type="submit" name="Submit" class="btn btn-primary"> <!--btn btn-primary start -->
      <i class="fa fa-user-md"></i> Update New

    </button><!--btn btn-primary end  -->


  </div><!--text-center end  -->



</form>  <!--form end -->
