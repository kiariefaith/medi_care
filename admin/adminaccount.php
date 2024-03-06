<?php
include("adheader.php");
include("../connections.php");

    session_start();
    if(!isset($_SESSION['adminid'])){
        echo "<script>window.location='adminlogin.php';</script>";
    }


?>


<div class="container-fluid">
    <div class="block-header">
        <h2>Dashboard</h2>
        <small class="text-muted">Welcome to Admin Panel</small>
    </div>

    <div class="row clearfix">
        <div class="col-lg-4 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-male-female col-blush"></i> </div>
                <div class="content">
                    <div class="text">Delivered Chats</div>
                    <div class="number">
                        <?php
                        $sql = "SELECT * FROM chat_message WHERE status='1'";
                        $qsql = mysqli_query($con,$sql);
                        echo mysqli_num_rows($qsql);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-account-circle col-cyan"></i> </div>
                <div class="content">
                    <div class="text">Registered Users</div>
                    <div class="number">
                        <?php
                        $sql = "SELECT * FROM login WHERE status='Active' ";
                        $qsql = mysqli_query($con,$sql);
                        echo mysqli_num_rows($qsql);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-account-box-mail col-blue"></i> </div>
                <div class="content">
                    <div class="text">Active Administrators</div>
                    <div class="number">
                        <?php
                        $sql = "SELECT * FROM admin WHERE status='Active'";
                        $qsql = mysqli_query($con,$sql);
                        echo mysqli_num_rows($qsql);
                        ?>
                    </div>
                </div>
            </div>
        </div>
      
    </div>


   

    <div class="clear"></div>
</div>
</div>
<?php
include("adfooter.php");
?>
