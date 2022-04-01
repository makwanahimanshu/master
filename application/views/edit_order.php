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
                  <h5 class="card-title"><b>Order</b></h5>
                  <div class="template-demo">
                 
               
                 <form method="post" name="editProduct" action="<?php echo base_url().'index.php/Order_CI/editorder/'.$order['order_id']; ?>">
                    
            

                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="order_id" value="<?php echo set_value('order_id',$order['order_id']);?>" class="mdc-text-field__input" id="text-field-hero-input"  readonly>
                        <?php echo form_error('order_id'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Order Number</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>


                   
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="number" name="quantity" value="<?php echo set_value('quantity',$order['quantity']);?>" class="mdc-text-field__input" id="text-field-hero-input"  readonly>
                          <?php echo form_error('quantity'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Stock Quantity</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                    </div>


                 <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                      <input type="hidden" name="status"  name="enhanced-select" value="<?php echo set_value('status',$order['status']);?>">
                        <i class="mdc-select__dropdown-icon"></i>
                        <div class="mdc-select__selected-text"></div> 
                            <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                <ul  class="mdc-list">
                                <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true">
                                </li>
                                <li class="mdc-list-item" data-value="Processing">
                                Processing
                                </li>
                                <li class="mdc-list-item" data-value="Completed">
                                Completed
                                </li>
                                <li class="mdc-list-item" data-value="Cancelled">
                                Cancelled
                                </li>
                                </ul>
                            </div>
                                <?php echo form_error('status'); ?>
                                <span class="mdc-floating-label">Status</span>
                               
                            <div class="mdc-line-ripple"></div>
                          </div>
 



                        <div class="mb-3">
                            <button class="mdc-button mdc-button--raised" value="save" name="save">Create</button>
                            <a href="<?php echo base_url().'index.php/Order_CI/vieworder';?>" class="mdc-button mdc-button--raised filled-button--dark mdc-ripple-upgraded">Cancel</a>
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