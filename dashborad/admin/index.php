<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
$con = mysqli_connect('localhost', 'root', '', 'itstudia');
$res = mysqli_query($con, "SELECT * FROM user ORDER BY created_at DESC");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Leads</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Leads</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">ITStudia with Leads</h3>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Description</th>
                                    <th>Created at</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $i=1;
                                  while($row = mysqli_fetch_assoc($res)): ?>
                                <tr>
                                <td><?php echo $i; ?></td>
                                    <td><?php echo $row['user_name']; ?></td>
                                    <td><?php echo $row['user_email']; ?></td>
                                    <td><?php echo $row['user_mobile']; ?></td>
                                    <td><?php echo $row['user_description']; ?></td>
                                    <td><?php echo $row['created_at']; ?></td>
                                </tr>
                                <?php $i++;
                               endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include('includes/footer.php');
?>
