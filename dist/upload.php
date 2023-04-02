<?php include('header.php'); ?>


                <div class="container-fluid">
                    <h3 class="text-dark mb-4">vcf upload</h3>
                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Forum Settings</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">


		
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
// include 'database.php';
if(isset($_POST['submit']))
{
	 $imgname=$_FILES['vcf']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);

	//$randomno=rand(0,100000);
	$rename='VCF-For-'.date('d-m-Y');

	 $newname=$rename.'.'.$extension;

     $filename=$_FILES['vcf']['tmp_name'];

     $title='VCF-For-'.date('d-m-Y');
	if(move_uploaded_file($filename, '../upload/'.$newname))
	{
		echo "uploaded";
		$insertqry="INSERT INTO vcf (filename, title)
        VALUES ('$newname', '$title')";
		$insertes=mysqli_query($conn,$insertqry);
	}
	else
	{
		echo "not uploaded";
	}
}
?>
                                
                                    <form method="post"  enctype="multipart/form-data">
                                        <div class="mb-3"><label class="form-label" for="signature"><strong>Signature</strong><br></label>
                                        <input class="form-control" type="file"  name="vcf"  accept=".vcf"></div>
                                        
                                        <div class="mb-3"><button class="btn btn-primary btn-sm" name="submit" type="submit">upload</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>


<?php include('footer.php'); ?>