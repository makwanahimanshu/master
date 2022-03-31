 <!-- $base.'index.php/Welcome/sidebar' -->
 <?php include_once "sidebar.php";
 
//  echo "yes";
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
                  <h5 class="card-title"><b>Product</b></h5>
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
                
                    

                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="first_name" value="<?php echo $user[0]['id'];?>" class="mdc-text-field__input" id="text-field-hero-input">
                        <?php echo form_error('first_name'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">first_name</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>


                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="last_name" value="<?php echo set_value('last_name');?>" class="mdc-text-field__input" id="text-field-hero-input">
                        <?php echo form_error('last_name'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">last_name</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>


                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="email" name="email" value="<?php echo set_value('email');?>" class="mdc-text-field__input" id="text-field-hero-input">
                        <?php echo form_error('email'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">email</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>

                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="password" value="<?php echo set_value('password');?>" class="mdc-text-field__input" id="text-field-hero-input">
                          <?php echo form_error('password'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">password</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                    </div>


                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="phone_no" value="<?php echo set_value('phone_no');?>" class="mdc-text-field__input" id="text-field-hero-input">
                        <?php echo form_error('phone_no'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">phone_no</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>


                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="textarea" cols="50" rows="40" name="street_address" value="<?php echo set_value('street_address');?>" class="mdc-text-field__input" id="text-field-hero-input">
                        <?php echo form_error('street_address'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">street_address</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>

 

                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                          <div class="mdc-text-field mdc-text-field--outlined">
                            <input type="number" name="pincode" value="<?php echo set_value('pincode');?>" class="mdc-text-field__input" id="text-field-hero-input">
                            <?php echo form_error('pincode'); ?>
                            <div class="mdc-notched-outline">
                              <div class="mdc-notched-outline__leading"></div>
                              <div class="mdc-notched-outline__notch">
                                <label for="text-field-hero-input" class="mdc-floating-label">pincode</label>
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
                            <button class="mdc-button mdc-button--raised" value="save" name="save">Create</button>
                            <a href="<?php echo base_url().'index.php/Product_CI/viewproduct';?>" class="mdc-button mdc-button--raised filled-button--dark mdc-ripple-upgraded">Cancel</a>
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