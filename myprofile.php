<?php
include "header.php";
include "db.php";
include "functions.php";

$user_data = check_login($con);

?>

<style>
form{
  margin-left: 300px;
  margin-right: 300px;
  margin-top: 50px;
  margin-bottom: 50px;
}
hr#hr2{
    height: 5px;
    background-color: black;
    border: none;
    color: black;
}
#editbtn{
  background-color: Black;
  color: white;

}

  </style>

<!-- My Profile -->
<form action="editacc.php" method="post">
  <div class="form-group">
    <span><h3><i class="fa fa-user-circle"></i>&nbsp;My Account </h3></span><hr id="hr2">
    <label for="name"><i class="fa-solid fa-id-badge float-left"></i>&nbsp;Name: </label>
    <input type="text" class="form-control" id="name" aria-describedby="name" name="first_name" value="<?php echo $user_data ['first_name'];?>" placeholder="Name">
  </div>
  <div class="form-group">
  <label for="phoneno"><i class="fa-solid fa-phone float-left"></i>&nbsp;Phone Number:</label>
    <input type="text" class="form-control" id="phoneno" aria-describedby="phone" name="mobile" value="<?php echo $user_data ['mobile'];?>" placeholder="Phone Number">
  </div>
  <div class="form-group">
    <label for="email"><i class="fa-solid fa-at float-left"></i>&nbsp;Email Address:</label>
    <input type="email" class="form-control" id="email" aria-describedby="email" name="email" value="<?php echo $user_data ['email'];?>" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="password1"><i class="fa-solid fa-lock float-left"></i>&nbsp;Password:</label>
    <input type="text" class="form-control" id="password1" name="password" value="<?php echo $user_data ['password'];?>" placeholder="Password">
  </div>
    <label><i class="fa-solid fa-venus-mars float-start"></i> Gender:</label><br />
    <input type="text" class="form-control" name="gender" value="<?php echo $user_data ['gender'];?>" placeholder="Gender">
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="Male" value="Male">
  <label class="form-check-label" for="Male">
    Male
  </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="Female" value="Female">
  <label class="form-check-label" for="Female">
    Female
  </label>
</div>
</div>
  </div>
  <div class="form-group">
    <label for="bday1"><i class="fa-solid fa-cake-candles float-left"></i>&nbsp;Birthday:</label>
    <input type="date" class="form-control" id="birthday" name="dateofbirth" value="<?php echo $user_data ['birthday'];?>" placeholder="Date of Birth">
  </div>
  <div class="form-group">
    <label for="address"><i class="fa-solid fa-location-dot float-left"></i>&nbsp;Shipping Address 1:</label>
    <input type="text" class="form-control" id="address" aria-describedby="Address" name="address1" value="<?php echo $user_data['address1'];?>" placeholder="Address 1">
  </div>
  <div class="form-group">
    <label for="address"><i class="fa-solid fa-location-dot float-left"></i>&nbsp;Shipping Address 2:</label>
    <input type="text" class="form-control" id="address" aria-describedby="Address" name="address2" value="<?php echo $user_data['address2'];?>" placeholder="Address 1">
  </div>
  <hr id="hr2">
  <input type="submit" class="btn" id="editbtn" style="float:right;" value="Edit"></input><br />
</form>

<!-- !My Profile -->

 <!-- Chat button--> 
 <div class="section mainn mainn-raised b">
                <button type="button" class="btn btn-dark btn-floating clearfix"  id="btn" style="width: 100px; height: 40px; padding: 7px; font-weight:bold;width: 100px; font-family: 'Archivo Black'; position" id="btn" data-target="#chatb" data-toggle="modal">Chat&nbsp;<i class="far fa-comment-alt"></i>
                </button>
				</div>
                <!-- !Chat Button-->

				<div class="modal fade modal-dialog float-right chats " id="chatb" tabindex="-1" aria-labelledby="chatlabel" aria-hidden="true" role="dialog">
              <div class="modal-dialog float-lg-right">
                <div class="modal-content chat">
                  <div class="modal-header d-block">
                    <button type="button" class="btn-close-white" data-dismiss="modal" aria-label="Close" style="margin-top: 15px; width: 15px; float: right;"></button>
                    <p class="modal-title text-center" id="chatlabel" style="font-weight:bold;"><img src="System Icons\white.png" alt="" width="30" height="20">Zero O'clock Prints</p>
                  </div>
                  <div style="background-color: white; border-width: thin;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    </div>
					
                  <div class="questions modal-body justify-content">
				  <h5 class="text-center" id="chatlabel" style="padding-top: 10px; font-weight:bold; color: white;">Question</h5>
                  <p class="solid">Payment Option<i class="fa-solid fa-paper-plane" style="float: right;"></i></p>
                  <p class="solid">Size Chart<i class="fa-solid fa-paper-plane" style="float: right;"></i></p>
                  <p class="solid">Track my Order<i class="fa-solid fa-paper-plane" style="float: right;"></i></p>
                  <p class="solid">Estimated Date of Delivery<i class="fa-solid fa-paper-plane" style="float: right;"></i></p>
                  </div>
				  <div class="foot input-group ">
                    <div class="input-group">
                      <div class="custom-file">
                  <span style="position: absolute;"><input class="custom-file-input" type="file" id="files" style="float: left"><label class="custom-file-label" for="files"><i class="fa-solid fa-paperclip"></i></label></span>
                  </div></div>
                  <textarea class="form-control" id="textinput" rows="1" placeholder="Send chat to Zero O'clock Prints..." style="width: 71%; margin-left: 45px;"></textarea>
                  <div class="input-group"><span>
                    <button class="btn btn-sm" type="button"  id="lightbtn" style="height:40px; font-family: 'Archivo Black'; float: right;">Send <i class="fa-solid fa-paper-plane"></i></button></label></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<?php
include "footer.php";
?>

