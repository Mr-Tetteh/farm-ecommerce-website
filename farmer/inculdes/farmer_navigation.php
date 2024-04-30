<?php global $session?>
<div class="span-12">
<aside class="sidebar">
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li> <a href="../farmer/farmer_product_Mgt.php">Add Product</a></li>
            <li> <a href="../farmer/view_all_farmer_product_Mgt.php">View All Product</a></li>
            <li> <a href="../farmer/farmer_profile.php?id=<?= $session->id?>">Profile</a></li>

        </ul>
    </nav>

    <a  class="btn-success" href="../farmer/farmer_authentication/logout.php" >Logout</a>
</aside>
</div>
