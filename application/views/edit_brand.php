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
                  

                  <form method="post" name="createBrand" value="<?php echo set_value('brand_name',$brand['brand_name']);?>" action="<?php echo base_url().'index.php/Brand_CI/create'; ?>">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="brand_name" class="mdc-text-field__input" id="text-field-hero-input">
                          <?php echo form_error('brand_name'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Brand Name</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>

                      
                      
                  
                     <!--  <select class="form-control" id="cat_name" name="cat_name" >
                        <i class="mdc-select__dropdown-icon"></i>
                        <div class="mdc-select__selected-text"></div> 
                            <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                <?php if(!empty($category)) { 
                                foreach($category as $category1){ ?>
                                    
                                    <option value="<?php echo $category1['cat_id'];?>"><?php echo $category1['cat_name'];?></option>
                                    <?php } } else {
                                  echo "data not found"  ;
                                } ?>
                              
                            </div>
                              <?php echo form_error('cat_name'); ?>
                                <span class="mdc-floating-label">Product Memory</span>
                               
                            <div class="mdc-line-ripple"></div>
                            </select>  -->
                          
                           
           
                
<!--                        
                          <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-group">
                                    
                                    <label class="form-label" >Category</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                    <select class="form-control" id="cat_name" name="cat_name" >
                                      <?php if(!empty($category)) { 
                                        foreach($category as $category1){ ?>
                                            
                                            <option value="<?php echo $category1['cat_id'];?>"><?php echo $category1['cat_name'];?></option>
                                            <?php } } else {
                                          echo "data not found"  ;
                                        } ?>
                                        
                                    </select>
                                </div>
                              
                            </div>   -->
                       


                   <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                      <input type="hidden" name="cat_name"  name="enhanced-select">
                        <i class="mdc-select__dropdown-icon"></i>
                        <div class="mdc-select__selected-text"></div> 
                            <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                <ul  class="mdc-list">

                                <?php if(!empty($category)) { 
                                  foreach($category as $category1){ ?>
                                
                                    <option value="<?php echo $category1['cat_id'];?>"><?php echo $category1['cat_name'];?></option> -->
                                    <li class="mdc-list-item" value="<?php echo $category1['cat_id'];?>"><?php echo $category1['cat_name'];?> </li>


                                      <?php } } else {
                                    echo "data not found"  ;
                                  } ?>
                             
                                </ul>
                            </div>
                                <?php echo form_error('cat_name'); ?>
                                <span class="mdc-floating-label">Category</span>
                               
                            <div class="mdc-line-ripple"></div>
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