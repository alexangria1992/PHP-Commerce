<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <center>
            <img src="customer_image/erika.jpg" alt="Mdev Profile">
        </center>
        <br/>
        <h3 align="center" class="panel-title">
            Name: Miss Erika
        </h3>
    </div>
    <div class="panel-body">
        <ul class="nav-pills nav-stacked nav">
            <li class="<?php if(isset($_GET['my_orders'])){ echo "active"; } ?>">
                <a href="my_account.php?my_orders">
                    <i class="fa fa-list">
                    My Orders
                    </i>
                </a>
            </li>
            <li class="<?php if(isset($_GET['pay_offline'])){echo "active";}?>">
                <a href="my_account.php?pay_offline">
                    <i class="fa fa-bolt">
                    Pay Offline
                    </i>
                </a>
            </li>
            <li class="<?php if(isset($_GET['edit_account'])){ echo "active"; } ?>">
                <a href="my_account.php?edit_account">
                    <i class="fa fa-pencil">
                    Edit Account
                    </i>
                </a>
            </li>
            <li class="<?php if(isset($_GET['change_pass'])){echo "active";}?>">
                <a href="my_account.php?change_pass">
                    <i class="fa fa-user">
                    Change Password
                    </i>
                </a>
            </li>
            <li class="<?php if(isset($_GET['delete_account'])){ echo "active"; } ?>">
                <a href="my_account.php?delete_account">
                    <i class="fa fa-trash-o">
                    Delete Account
                    </i>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out">
                    Log Out
                    </i>
                </a>
            </li>
       
        </ul>
    </div>
</div>