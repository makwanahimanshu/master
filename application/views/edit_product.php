 <!-- $base.'index.php/Welcome/sidebar' -->
 <?php include_once "sidebar.php"; ?>

 
         
         <!-- partial -->
     
         <div class="main-wrapper mdc-drawer-app-content">
           <!-- partial:../../partials/_navbar.php -->  
           <?php include_once "navbar.php"; ?>
           <form method="post" action="<?php echo base_url().'index.php/Product_CI/editProduct/'.$product['pro_id']; ?>">

          
         
        <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
       
           <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <h5 class="card-title"><b>Product</b></h5>
                  <div class="template-demo">

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-group">
                        <label class="form-label" >Brand</label>
                        <select class="select form-control"  id="brand_id" name="brand_id">

                        <?php
                            $brandid=intval($product['brand_id']);

                            echo "<option value=''>Select Brand</option>";

                            foreach ($brand as $value) {
                                $pid = $value['brand_id'];
                                $name = $value['brand_name'];
                                
                                ?>
                                <option <?php echo $pid == $brandid ? "selected='selected'" : ""; ?> value=<?php echo $pid  ; ?> > <?php echo $name; ?> </option>
                            <?php }
                            ?>
                          </select>
                       </div>
                  </div>


                  
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="textarea" cols="50" rows="40" name="pro_name" value="<?php echo set_value('pro_name',$product['pro_name']);?>" 
                          class="mdc-text-field__input" id="text-field-hero-input">
                        <?php echo form_error('pro_name'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Product Name</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>


                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                        <b><?php if(isset($response)) echo $response; ?></b>
                    <input type="file" name="image" 
                    value="<?php echo set_value('image',$product['image']);?>"
                    class="mdc-text-field__input" id="image">    
                       <?php echo form_error('image'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Image</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>     
                <div style="color:red;"><?php echo form_error('file'); ?></div> 
 
               
                
            

                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="textarea" cols="50" rows="40" name="discription"value="<?php echo set_value('discription',$product['discription']);?>"
                           class="mdc-text-field__input" id="text-field-hero-input">
                        <?php echo form_error('discription'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Product Discription</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>

                     


                 <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                      <input type="hidden" name="ram"  
                      
                      name="enhanced-select">
                        <i class="mdc-select__dropdown-icon"></i>
                        <div class="mdc-select__selected-text"></div> 
                            <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                <ul  class="mdc-list">
                                <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true">
                                </li>
                                <li class="mdc-list-item" data-value="4">
                                    4 GB
                                </li>
                                <li class="mdc-list-item" data-value="6">
                                    6 GB
                                </li>
                                <li class="mdc-list-item" data-value="8">
                                     8 GB
                                </li>
                                </ul>
                            </div>
                                <?php echo form_error('ram'); ?>
                                <span class="mdc-floating-label">Product RAM</span>
                               
                            <div class="mdc-line-ripple"></div>
                          </div>
 

                          <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                      <input type="hidden" 
                      
                      name="memory" name="enhanced-select">
                        <i class="mdc-select__dropdown-icon"></i>
                        <div class="mdc-select__selected-text"></div> 
                            <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                <ul  class="mdc-list">
                                <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true">
                                </li>
                                <li class="mdc-list-item" data-value="32"> 
                                    32 GB
                                </li>
                                <li class="mdc-list-item" data-value="64">
                                    64 GB
                                </li>
                                <li class="mdc-list-item" data-value="128">
                                     128 GB
                                </li>
                                </ul>
                            </div>
                              <?php echo form_error('memory'); ?>
                                <span class="mdc-floating-label">Product Memory</span>
                               
                            <div class="mdc-line-ripple"></div>
                          </div>

 
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="number" name="stock" 
                          value="<?php echo set_value('stock',$product['stock']);?>"
                          class="mdc-text-field__input" id="text-field-hero-input">
                          <?php echo form_error('stock'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Stock Quantity</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                    </div>  
                      
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                          <div class="mdc-text-field mdc-text-field--outlined">
                            <input type="number" name="price" value="<?php echo set_value('price',$product['price']);?>"
                             class="mdc-text-field__input" id="text-field-hero-input">
                            <?php echo form_error('price'); ?>
                            <div class="mdc-notched-outline">
                              <div class="mdc-notched-outline__leading"></div>
                              <div class="mdc-notched-outline__notch">
                                <label for="text-field-hero-input" class="mdc-floating-label">Product Price</label>
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