<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Users</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/slide-bar.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php
    $key ="123456abcdefg" ;
	include 'inc/side-nav.php' ;
    include_once ("data/User.php");
    include_once ("../db_conn.php");
    $users = getAll($conn);
    ?>
	<div class ="main-table">
        <h3 class ="mb-3 ">All Users
            <a href="../signup.php" class ="btn btn-success">Add User</a>
        </h3>
        <?php if ($users !=0) { ?>
    
            <table class="table t1 table-bordered">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php foreach ($users as $user) { ?>
                    <tr>
                    <th scope="row"><?=$user['id'] ?></th>
                    <td><?=$user['fname'] ?></td>
                    <td><?=$user['username'] ?></td>
                    <td>
                        <a href="" class ="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        <?php } else {?>
        <div class ="alert alert-warning">
            Empty !
        </div>
        <?php } ?>


    </div>
        </section>
      </div>

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>
<?php }else {
	header("Location: ../admin_login.php");
	exit;
} ?>