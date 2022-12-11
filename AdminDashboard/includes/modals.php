<div class="modal fade" id="addusermodal">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                  <h3>Add New User Form</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <?php require('entryform.php'); ?>
                </div>
            </div>
        </div>
       </div>

       
        <div class="modal fade" id="addnewadmin">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title">
                  <b>Create New Admin</b>
                </h3>
              </div>
              <div class="modal-body">           
                <form action="includes/functions.php" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label><strong>Fullname</strong></label>
                                <input type="text" placeholder="Enter your Fullname" class="form-control p-3 " id="fullname" name="fullname">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label><strong>Username</strong></label>
                                <input type="text" placeholder="Enter your username" class="form-control p-3 " id="username" name="username">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label><strong>Password</strong></label>
                                <input type="password" placeholder="Enter Your password" class="form-control p-3 " id="password" name="password">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label><strong>Confirm password</strong></label>
                                <input type="password" placeholder="Confirm Password" class="form-control p-3 " id="cpassword" name="cpassword">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label><strong>User Role</strong></label>
                                <select name="role" id="" class="form-control">
                                  <option value="Admin">Admin</option>
                                  <option value="editor">Editor</option>
                                </select>
                              </div>
                        </div>
                        
                      </div>      
              </div>
              <div class="modal-footer">
                <button type="submit" name="signupadmin" class="btn btn-primary btn-block p-3">
                  <strong>Signup</strong>
              </button>
              </div>
            </form>
            </div>
          </div>
        </div>
        <div class="modal fade" id="changepassword">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Chanage Password</h3>
              </div>
              <div class="modal-body">
                <form action="includes/functions.php" method="post">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="">Old Password</label>
                        <input type="password" placeholder="Enter Your Old Password" name="oldpassword" id="" class="form-control">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="">New Password</label>
                        <input type="password" name="newpassword" placeholder="Enter New Password" id="" class="form-control">
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-block p-3" name="change">Change</button>
              </div>
            </form>
            </div>
          </div>
        </div>

        