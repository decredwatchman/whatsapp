
<?php include('header.php'); ?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>number</th>
                                            <th>plan</th>
                                            <th>date</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>

                        <?php 
$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))


//echo $row["photo"];
{
  
  $names = $row['name'];
  $phone = $row['phone'];
  $plan = $row['plan'];
  $date = $row['date'];

 
?> 

<tr>
                                            <td><?php echo $names  ?></td>
                                            <td><?php echo $phone  ?></td>
                                            <td><?php echo $plan  ?></td>
                                            <td><?php echo $date  ?></td>
                                        </tr>
  <?php }?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
              
                <?php include('footer.php'); ?>
