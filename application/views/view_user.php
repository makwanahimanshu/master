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
            
            <a href="<?php echo $base.'index.php/User_CI/edituser/'.$user[0]['id']; ?>" class="mdc-button mdc-button--raised filled-button--info mdc-ripple-upgraded">Edit Profile</a>
           </div>
           <br>
              <table>
                <thead>
                  <tr class="table100-head">
                    <th class="column1">ID</th>
                    <th class="column1">Type</th>
                    <th class="column2">First Name</th>
                    <th class="column3">Last Name</th>
                    <th class="column4">Email</th>
                    <th class="column5">Password</th>
                    <th class="column6">Phone_no</th>
                    <th class="column7">Address</th>
                    <th class="column8">Pincode</th>
         
                  </tr>
                </thead>
                <tbody>
                  
                    <?php if($this->session->userdata('email'))
                    {
                      //  echo "Welcome: ",$this->session->userdata('email');
                      }?>
   
                      <td class="column1"><?php echo $user[0]['id'];?></td>
                      <td class="column1"><?php echo $user[0]['type'];?></td>
                      <td class="column2"><?php echo $user[0]['first_name'];?></td>
                      <td class="column3"><?php echo $user[0]['last_name'];?></td>
                      <td class="column4"><?php echo $user[0]['email'];?></td>
                      <td class="column5"><?php echo $user[0]['password'];?></td>
                      <td class="column6"><?php echo $user[0]['phone_no'];?></td>
                      <td class="column7"><?php echo $user[0]['street_address'];?></td>
                      <td class="column8"><?php echo $user[0]['pincode'];?></td>
                  
                              
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
