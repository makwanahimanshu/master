<!-- partial:../../partials/_sidebar.php -->
        <!-- $base.'index.php/Welcome/sidebar' -->
        <?php include_once "sidebar.php"; ?>
         
         <!-- partial -->
       
         <div class="main-wrapper mdc-drawer-app-content">
           <!-- partial:../../partials/_navbar.php -->
           
           <?php include_once "navbar.php"; ?>
       
      <?php
        $base = $this->config->item("base_url");
      ?>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
     
      <div class="limiter">
        <div class="container-table100">
          <div class="wrap-table100">
            <div class="table100">
            <div class="col-12 text-right">
               <a href="<?php echo base_url().'index.php/Product_CI/product';?>" class="mdc-button mdc-button--raised">Add Product</a>
           </div>
           <br>
              <table>
                <thead>
                  <tr class="table100-head">
                    <th class="column1">ID</th>
                    <th class="column2">Quantity</th>
                    <th class="column3">Status</th>
                    <th class="column4">Edit</th>
                    <th class="column5">Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                      <td class="column1">2017-09-29 01:22</td>
                      <td class="column2">200398</td>
                      <td class="column3">iPhone X 64Gb Grey</td>
                      <td class="column4">$999.00</td>
                      <td class="column5">1</td>
                      <td class="column6">$999.00</td>
                    </tr> -->
    
                    <?php if(!empty($product)) { foreach($product as $product1) { ?>
                             <tr>
                      
                      <td class="column1"><?php echo $product1['id'];?></td>
                      <td class="column2"><?php echo $product1['quantity'];?></td>
                      <td class="column3"><?php echo $product1['status'];?></td>
<!--                       
                    <td>
                      <a href="<?php echo base_url().'index.php/cars/edit/'.$order1['id'] ?>" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                      <a href="<?php echo base_url().'index.php/cars/delete/'.$order1['id'] ?>" class="btn btn-danger">Delete</a>
                    </td> -->
                    </tr>   
                    <?php } } else { ?>
                    <tr>
                      <td colspan="5">Record Not Found</td>
                    </tr>
                    <?php } ?>
                  
    
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    
    
    
    </body>
    
            <!-- partial:../../partials/_footer.php -->
            
            <?php include("footer.php"); ?> 
            <!-- partial -->
    </html>