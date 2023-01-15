<?php 
require_once('file/connection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title="BMS | Blood Availability"; ?>
    <?php require 'head.php'; ?>
    <script type="text/javascript">
        $(document).ready(function()
        {
    
        });


    </script>


</head>
<body>
    <?php require 'header.php'; ?>
    <div class="container">
        <div class="page-header mt-5">
            <h4 class="text-danger py-2">BLOOD STOCK AVAILABILITY</h4>
        </div>
        <div class="panel py-3 ps-3"><h5 class="text-white my-auto">Search Blood Stock</h5>
        </div>
        <form class="container" name="bavailabilty" action="" method="post">
            <div class="row row-box py-5">
                <div class="col-md-3 col-sm-6 col-12 mb-2">
                    <div class="blood-search">
                        <select name="blood" class="form-select" required>
                        <option value=""selected disabled>Select Province</option>
                        <?php
                        
                        $query = "select * from province";
                        $result = mysqli_query($conn,$query) or die("query unsuccessful.");
                        while($row=mysqli_fetch_assoc($result)){
                        ?>
                        <option value="<?php echo $row['id'] ?>"> <?php echo $row['province_name'] ?> </option>
                        <?php }?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 mb-2">
                    <div class="blood-search">
                        <select name="blood" class="form-select" required>
                        <option value=""selected disabled>Select District</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 mb-2">
                    <div class="blood-search">
                        <select name="blood" class="form-select" required>
                        <option value=""selected disabled>All Blood Groups</option>
                        <?php
                        $query = "select * from blood";
                        $result = mysqli_query($conn,$query) or die("query unsuccessful.");
                        while($row=mysqli_fetch_assoc($result)){
                        ?>
                        <option value="<?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
                        <?php }?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 mb-2">
                    <div class="blood-search">
                        <select name="blood" class="form-select" required>
                        <option value=""selected disabled>Select Blood Components</option>
                        <?php
                        $query = "select * from blood_component";
                        $result = mysqli_query($conn,$query) or die("query unsuccessful.");
                        while($row=mysqli_fetch_assoc($result)){
                        ?>
                        <option value="<?php echo $row['component_id'] ?>"> <?php echo $row['component_type'] ?> </option>
                        <?php }?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="search-button col-12 mb-2 text-center py-5">
                    <div><input type="submit" class="btn" name="search" value="Search" style="cursor:pointer">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--- Footer section --->
<?php require 'footer.php'; ?>
</body>
</html>