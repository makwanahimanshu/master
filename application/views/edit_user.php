 <!-- $base.'index.php/Welcome/sidebar' -->
 <?php include_once "sidebar.php";
 
//  echo "yes<pre>";
//  print_r($user);
//  exit;
 
 ?>
         
         <!-- partial -->
     
         <div class="main-wrapper mdc-drawer-app-content">
           <!-- partial:../../partials/_navbar.php -->
           
           <?php include_once "navbar.php"; ?>
     
           <!-- partial -->
        <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
       
           <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <h5 class="card-title"><b>Admin Profile</b></h5>
                  <div class="template-demo">
                    <!-- <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field">
                          <input class="mdc-text-field__input" id="text-field-hero-input">
                          <div class="mdc-line-ripple"></div>
                          <label for="text-field-hero-input" class="mdc-floating-label">Name</label
                        </div>
                      </div> -->
                 <form method="post" action="<?php echo base_url().'index.php/User_CI/edituser/'.$user['id']; ?>">

                 

<!-- 
                 <form method="post" name="editCategory" action="<?php echo base_url().'index.php/Category_CI/editCategory/'.$category['cat_id']; ?>">
            
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" class="mdc-text-field__input" id="text-field-hero-input" name="cat_name"  value="<?php echo set_value('cat_name',$category['cat_name']);?>">
                          <?php echo form_error('cat_name'); ?>  
                          <div class="mdc-notched-outline">
                              <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                  <label for="text-field-hero-input" class="mdc-floating-label">Category Name</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>

                        </div>
                      </div> -->
                   


                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="first_name" value="<?php echo set_value('first_name',$user['first_name']);?>" class="mdc-text-field__input" id="text-field-hero-input">
                        <?php echo form_error('first_name'); ?>  

                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">First Name</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>


                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="last_name" value="<?php echo set_value('last_name',$user['last_name']);?>" class="mdc-text-field__input" id="text-field-hero-input">
                        <?php echo form_error('last_name'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Last Name</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>


                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="email" name="email" value="<?php echo set_value('email',$user['email']);?>" class="mdc-text-field__input" id="text-field-hero-input" readonly>
                        <?php echo form_error('email'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Email</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>

                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="password" value="<?php echo set_value('password',$user['password']);?>" class="mdc-text-field__input" id="text-field-hero-input">
                          <?php echo form_error('password'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Password</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                    </div>


                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="conform_password" value="<?php echo set_value('conform_password',$user['conform_password']);?>" class="mdc-text-field__input" id="text-field-hero-input">
                          <?php echo form_error('password'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Confirm Password</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                    </div>


                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="number" name="phone_no" value="<?php echo set_value('phone_no',$user['phone_no']);?>" class="mdc-text-field__input" id="text-field-hero-input">
                        <?php echo form_error('phone_no'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Phone No</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>


                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="textarea" cols="50" rows="40" name="street_address" value="<?php echo set_value('street_address',$user['street_address']);?>" class="mdc-text-field__input" id="text-field-hero-input">
                        <?php echo form_error('street_address'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Address</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>

 

                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                          <div class="mdc-text-field mdc-text-field--outlined">
                            <input type="number" name="pincode" value="<?php echo set_value('pincode',$user['pincode']);?>" class="mdc-text-field__input" id="text-field-hero-input">
                            <?php echo form_error('pincode'); ?>
                            <div class="mdc-notched-outline">
                              <div class="mdc-notched-outline__leading"></div>
                              <div class="mdc-notched-outline__notch">
                                <label for="text-field-hero-input" class="mdc-floating-label">Pincode</label>
                              </div>
                              <div class="mdc-notched-outline__trailing"></div>
                            </div>
                          </div>
                        </div> 
                  
       
                           <!-- <div class="mdc-layout-grid">
                            <div class="d-grid gap-2 col-6 mx-auto">
                               <button class="mdc-button mdc-button--raised">
                                   Add Product
                               </button>
                            </div>
                        </div> -->
 



                        <div class="mb-3">
                            <button class="mdc-button mdc-button--raised" value="save" name="save">Edit</button>
                            <a href="<?php echo base_url().'index.php/User_CI/viewuser';?>" class="mdc-button mdc-button--raised filled-button--dark mdc-ripple-upgraded">Cancel</a>
                        </div>
                   </form>
                     




                   <!-- 28/3/2022 3:59 pm -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          </main>
  

             <!-- partial:../../partials/_footer.php -->
             
             <?php include("footer.php"); ?> 
             <!-- partial -->