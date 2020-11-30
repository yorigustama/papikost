<?PHP  
require_once"sambung.php";	
 $member_id=$_SESSION['member_id'];
$update="UPDATE member SET member_status='Ofline' WHERE member_id='$_SESSION[member_id]'" or die($conn->error.__LINE__);
$mysqli->query($update);
ob_start();
session_start();
ob_end_clean();
session_destroy();
unset($_SESSION['member_id']);
header("location:./umum.php");
