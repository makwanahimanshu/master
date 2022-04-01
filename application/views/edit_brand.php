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
                  

                  <form method="post"  action="<?php echo base_url().'index.php/Brand_CI/editBrand/'.$brand['brand_id']; ?>">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="brand_name" value="<?php echo set_value('brand_name',$brand['brand_name']);?>" class="mdc-text-field__input" id="text-field-hero-input">
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

                      <div class="col-md-6 mb-4 pb-2">
                    <div class="form-group">
                        <label class="form-label" >Category</label>
                        <select class="select form-control"  id="cat_id" name="cat_id">

                        <?php
                            $catid=intval($brand['cat_id']);

                            echo "<option value=''>Select state</option>";

                            foreach ($category as $value) {
                                $cid = $value['cat_id'];
                                $name = $value['cat_name'];
                                
                                ?>
                                <option <?php echo $cid == $catid ? "selected='selected'" : ""; ?> value=<?php echo $cid  ; ?> > <?php echo $name; ?> </option>
                            <?php }
                            ?>
                          </select>
                       </div>
                  </div>
                                <?php echo form_error('cat_name'); ?>
                                
                               
                            <div class="mdc-line-ripple"></div>
                          </div>
                        
                 

                      <div class="mb-3">
                            <button class="mdc-button mdc-button--raised" name="save" value="Save Data">Add Brand</button>
                            <a href="<?php echo base_url().'index.php/Brand_CI/viewbrand';?>" class="mdc-button mdc-button--raised filled-button--dark mdc-ripple-upgraded">Cancel</a>
                            </button>
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