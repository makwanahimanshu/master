  <?php
echo "hello<pre>";
print_r($category);
exit;
  ?>
  
  <!-- partial:../../partials/_sidebar.php -->
        <!-- $base.'index.php/Welcome/sidebar' -->
        <?php include_once "sidebar.php"; ?>
         
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
                  <h5 class="card-title"><b>Brand</b></h5>
                  <div class="template-demo">
                  

                  <form method="post" name="createBrand" action="<?php echo base_url().'index.php/Brand_CI/create'; ?>">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="brand_name" class="mdc-text-field__input" id="brand_name">
                          
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Brand Name</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>

               <div  id="cat_name" name="cat_name">
                        <?php 
                 
                        
                        if(!empty($category))
                       
                        { 
                            // echo "<pre>";
                            // print_r($category);
                            // exit;

                            
                            foreach($category as $country1){ 
                            //  echo "<pre>";
                            // print_r($category['cat_name']);
                            // print_r($category['cat_name']);
                            
                              echo  $category['cat_name'];
                                }
                               } 
                               else 
                               {      
                                            
                              echo "data not found"  ;
                              } 
                              ?>
                    
                            </div>   
                  
                         
           
                
                       


                 
                 

                      <div class="mb-3">
                            <button class="mdc-button mdc-button--raised" name="save" value="Save Data"/>Add Brand</button>
                            <a href="<?php echo base_url().'index.php/Brand_CI/viewbrand';?>" class="mdc-button mdc-button--raised filled-button--dark mdc-ripple-upgraded">Cancel</a>
                        </div>
                   </form>
                      
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