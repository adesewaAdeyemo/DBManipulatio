<?php
$content=$error=$_id='';
$content="Records deleted cannot be recovered!</br>";
$content.="Do you want to continue?<br>";
$content.= "<input type='radio' name='approve' value='Yes'>Yes<br><input type='radio' name='approve' value='No'>No<br>";
$content.= "<input type='submit' name='confirm' value='Confirm'>";
$count=0;
if (isset($_POST['confirm']) && !empty($_POST['approve'])){
    if ($_POST['approve'] === 'No'){
        header("Location: ./");
    }else{
        $content="<legend>Enter the unique ID of the record row to be deleted...<legend>";
        $content.= "<input type='text' name='record_id' max='10' value='". $_id ."'>";
        $content.= "<input type='submit' name='confirmid' id='confirmid' value='Confirmid'>";
    }
}
if (isset($_POST['confirmid'])){
    if(!empty($_POST['record_id'])){
        $_id= $_POST['record_id'];
        if (!is_numeric($_POST['record_id'])){
            $error= "Invalid ID";
            $count+=1;
            if ($count === 3){
                header("Location: ./");
            }
        }else{
            // if ($_id !== $qrow['id']){
            //     $error = "Id does not exist";
            // }else{
            //     $sql= "DELETE FROM highlife WHERE id=$_id";
            //     if(mysqli_query($conn, $sql)){
                        // $query= $this->db->query("SELECT * FROM highlife WHERE 'id'=$_id");
                        // foreach($query as $key => $row){
                        $content="<strong>Record permanently deleted</strong>". $_id;
                        $content.='<table border="1"><tr><td>'. $row['id'] .'</td><td>'. $row['song_name'] .'</td><td>'. $row['artist'] .'</td><td><center>'. $qrow['band_id'] .'</center></td><td><center>'. $qrow['rating'] .'</center></td></tr></table>';
                        $content.="<button type='submit' style='backgroud-color:#04f4f4; border:transparent; width=:40%; color:rgb(97, 93, 93); padding:10px 15px;margin-top:10px;'><a href='record.php' style='text-decoration:none; color:#fff;'>Ok</a></button>";
                        header("Location: ./");
            //     }else{
            //         $error = "error: ". mysqli_error($conn);
            //         echo 'id= '. $_id;
            //         return false;
            //     }
            // }        
        }
    }
}


    echo '<center>';?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
    <?php echo "<p class='content'>". $content ."<p>";
    echo "<div class='hero-error'>". $error ."</div>";
    echo "</form>";
    echo '</center>';
?>
