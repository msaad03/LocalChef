<?php

    require_once('../../model/conn.php');
    include('../admin-controller.php');

?>

<div class="col-md-12">
<div class="row">
<h1 class="page-header">
   Incomplete Orders
</h1>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>Order Id</th>
           <th>Customer Name</th>
           <th>Customer Address</th>
           <th>Total Bill</th>
      </tr>
    </thead>
    <tbody>
        
        <?php

          $control = new Controller();
          $control->view_incomplete();  

        if(isset($_POST['deliver']))
        {
            $con = new Model();

            $deliver = mysqli_real_escape_string($con->getConn(),$_POST['deliver']);
            $query = "UPDATE orders SET status = 1 WHERE id='{$_POST['deliver']}'";
            $run_query = mysqli_query($con->getConn(), $query); 
            ?>
            
            
                <script>
                    window.open('admin-index.php?viewinc','_self');
                </script>

            <?php
         
        }
          
        ?>


    </tbody>
</table>
</div>