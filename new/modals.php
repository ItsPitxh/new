<!-- logout alert modal -->
<div class="modal fade" id='logout-modal'>
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h5>Loggin Out...</h5>
                    <a class="close" data-toggle='modal' data-target='#logout-modal'>x</a>
                </div>
                <div class="modal-body">
                    <h4>Are you sure you want to log out?</h4>
                </div>
                <div class="modal-footer">
                    <a data-toggle='modal' data-target='#logout-modal' class='btn btn-success text-white'>No, I don't</a>
                    <a href="fn.php?logoutfn" class="btn btn-danger">Log Out</a>
                </div>
        </div>
    </div>
</div>

<!-- checkout modal -->



<!-- add product modal -->
<div class="modal" id="add-prod-modal">
  <form method="post" enctype='multipart/form-data' class="form-modal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Add Your Product</h4>
          <a class="close" id="close" data-dismiss="modal">x</a>
        </div>
        <div class="modal-body">

          <div class="row mx-0">
            <div class="col-12 px-0">
              <label for="prod-name" class="d-block">Product's Name</label>
              <input type="text" name="prod-name" id="prod-name" class="form-control" required>
            </div>
            <div class="col-12 px-0">
              <label for="prod-price" class="d-block">Product's Price (Baht)</label>
              <input type="number" name="prod-price" id="" class="form-control" required>
            </div>
            
            <div class="col-12 px-0">
                <div class="input-group">
                    <label for="prod-amt">Product's Amout</label>
                    <input type="text" name="prod-amt" id="prod-amt" class="form-control w-75">
                    <select name="prod-unit" id="prod-unit" class="form-control w-25" required>
                        <option value="">Please Select</option>
                        <option value="kilogram">kilogram</option>
                        <option value="kilometer">kilometer</option>
                        <option value="ton">ton</option>
                        <option value="foot">foot</option>
                        <option value="yards">yards</option>
                    </select>
                </div>
            </div>
          </div>
          <div class="col-12 px-0">
            <label for="prod-des">Descriptions</label>
            <textarea name="prod-des" id="prod-des" cols="30" rows="5" class="form-control"></textarea>
            
          </div>
          <label for="" class="float-left">Payment Verification</label>
                <div class='toclone'>
                  <label for="img2" class="display-img img-label" required>
                      <h3>+</h3>
                  </label>
                  <input type="file" name="prodimg[]" class="img-input" id="img2" multiple hidden>
                </div>
                
                  <!-- append .toclone here -->
                <div class="cloneto">
                </div>
        </div>
        <div class="modal-footer">
          <!-- <input type="submit" name='' class="btn btn-success" value="Submit Product"> -->
          <input type="submit" name='add-prod-submit' class="btn btn-success" value="Submit Product">
        </div>
      </div>
    </div>
  </form>

</div>



<!-- store registeration modal -->
<div class="modal fade" id='regis-store-modal'>
    <form action="" method="post">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Seller Registeration</h5>
                <a href="" data-dismiss="modal" class="close">x</a>
            </div>
            <div class="modal-body">
                <label for="username">username</label>
                    <input type="text" name="username" class="form-control" id="username" value="<?=$_SESSION['user_username']?>">
                <label for="username">Address</label>
                <textarea name="address" id="" cols="30" rows="5" class="form-control"><?=$_SESSION['user_home_address']?></textarea>
                <label for="bank-acc" class="d-block">Bank Account</label>
                <div class="input-group" id="bank-acc">
                    <input type="text" name="bank-id" class="form-control w-25" placeholder="Bank's Name" required>  
                    <input type="text" name="bank-name" class="form-control w-75" placeholder="Bank Account Id" required>
                </div>
                <label for="username">Phone Number</label>
                <div class="input-group">
                    <input type="text" name="phone-country" class="form-control w-25" placeholder="Country" required>
                    <input type="text" name="phone-num" class="form-control w-75" placeholder="Phone Number" required>
                </div>
                <label for="">Citizen Id</label>
                <input type="text" name="cit-id" class="form-control" id="cit-id" >


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" name="store-regis">Submit</button>
            </div>
        </div>
    </div>
    </form>
</div>









