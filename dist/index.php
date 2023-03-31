
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
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
$hostname  = "localhost";
$user     = "root";
$pass     = "";
$databasename = "whatsapp";
// Create connection
$conn = mysqli_connect($hostname, $user, $pass,$databasename);
// Check connection
if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
?>
                        <?php 
$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))


//echo $row["photo"];
{
  
  $names = $row['name'];
  $about = $row['phone'];
  //$photo = $row['photo'];

 
?> 

<tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
  <?php }?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
              
                <?php include('footer.php'); ?>
