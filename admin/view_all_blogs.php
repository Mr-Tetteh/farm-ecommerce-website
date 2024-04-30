<?php include "inculdes/header.php"?>
<?php $blogs = Blog_post::find_all()  ?>
<body>
<!-- Side Bar -->
<?php include "inculdes/navigation.php"?>

<!-- Page wrapper  -->
<div class="page-wrapper">
        <div class="content">
        <div class="row">
            <div class="col-12">
                <h2>All Admin Users</h2> <a class="btn btn-primary" href="../authentication/register_admin.php">Add New Admin User</a>
                <p>Manage user accounts for farmers, consumers, and admins.</p>
            </div>
        </div>
      
          <div class="container-fluid">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- User List Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Blog id</th>
                                            <th>Blog Title</th>
                                            <th>Blog Image </th>
                                            <th>Blog Context </th>
                                            <th>Edit BLog</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>

                                    <?php     foreach ($blogs as $blog) : ?>
                                        <tr>
                                            <td><?php echo $blog->id ?> </td>
                                            <td><?php echo $blog->blog_title ?> </td>
                                            <td><img src="./images/<?php echo $blog->blog_image ?>"  class="img-fluid Responsive image" alt="Responsive image" height="200px" width="200px">
                                            </td>
                                            <td> <?php echo $blog->blog_content ?> </td>
                                            <td><a class="btn btn-primary" href="actions/edit_blog.php?id=<?= $blog->id ?>">Edit Blog</a></td>
                                            <td><a class="btn btn-danger" href="actions/delete_blog.php?id=<?= $blog->id ?>">Delete BLog </a> </td>
                                        </tr>

                                    <?php endforeach; ?>
                                       
                                
                                </table>
                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        
    </div>
   
</div>


<!-- ALL JS FILES -->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/custom.js"></script>
<script>
    // JavaScript functions for handling the actions
    function viewUser(userId) {
        
        // Logic to view user details
        console.log('View details for user', userId);
    }
    //function viewUser(userId) {
    // Logic to fetch user details from the backend
    //$.ajax({
       // url: '/path/to/user/details',
        //method: 'GET',
        //data: { userId: userId },
        //success: function(response) {
            // Assuming response contains user details
            // Populate the details in a modal and show it
          //  $('#userDetailsModal .modal-body').php(response);
            //$('#userDetailsModal').modal('show');
       // }
    //});
//}//


    function editUser(userId) {
        // Logic to edit user
        console.log('Edit user', userId);
        // This would typically involve displaying a modal or a form to edit the user details
    }

    function toggleStatus(userId) {
        // Logic to toggle the active status
        console.log('Toggle active status for user', userId);
    }

    function deleteUser(userId) {
        // Logic to delete a user
        console.log('Delete user', userId);
        // Ensure you confirm from the admin before deletion
        if(confirm('Are you sure you want to delete this user?')) {
            // Proceed with deletion
        }
    }

    function upgradeUserRole(userId) {
        // Logic to upgrade user role
        console.log('Upgrade role for user', userId);
        // This could open a modal where the admin selects the new role for the user
    }

    function demoteUserRole(userId) {
        // Logic to demote user role
        console.log('Demote role for user', userId);
        // This could open a modal where the admin selects the new role for the user
    }
</script>