<form method="post">

<button type="submit" id="booking" name="book">ss</button>
</form>

<?php  

if (isset($_POST['insert_record'])) {

    $name=$_POST['name']; 
    $city=$_POST['city'];
    $num=$_POST['num'];
    $start=$_POST['start'];
    $end=$_POST['end'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $Rs="In Working";
   
    $sql="INSERT into booknow VALUES('','name','$city','$num','$start','$end','$date','$time','$rs')";
    $obj=new config();
    $obj->dbconfig($sql);


           }
 ?>