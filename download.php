<?php
include("header.php");
?>

    <style>
        main{
            margin-top:100px;
            padding :20px;
        }
        td{
            margin:30px;
            box-shadow:2px 1px 1px 1px gray;
            border-radius:8px;
            cursor: pointer;
           
        }
        .gg{
            padding-top:20px;
            padding-bottom:20px;
            
        }
        .lis{
            height :5px;
        }
    </style>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">VCF FILES download</h1>
            
            <div class="card mb-4" style="margin: bottom 20px;">
                <div class="card-body">
                The download links are always updated around 9:30pm in the evening. Everyday submission is needed for the views to work. 
                </div>
            </div>
            
            <div class="card mb-4">
             
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                
                            </tr>
                        </thead>
                   
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
<a href="user.png"  download>
                            <tr >
                                <td> VCF for wed mar 29 2023</td>
                               
                              
                            </tr>
</a>
                         <?php } ?>   
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?php
include("footer.php");
?>
<script>
    window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>