<?php
$value= "Update";
$_id=$error=$content='';    
$album=$artist=$band=$rating=$id='';
$errors= array('album'=>'', 'artist'=>'', 'band'=>'', 'rating'=>'');

    if (isset($_POST['edit'])){
        If (array_filter($errors)){
            echo '<center>';
            echo "<div class='hero-error'>Error in the form</div>";
            echo '</center>';
        }else{
            $newid=$_POST['id'];
            $newalbum=$_POST['album'];
            $newartist=$_POST['artist'];
            $newband=$_POST['band'];
            $newrating=$_POST['rating'];
            // include("conn.php");
            // if($conn){
            //     echo"Hurray";
            // }else{
            //     echo"Oooops!";
            // }
            // echo "id = ". $newid;
            // $query="UPDATE `highlife` SET `song_name` = '$newalbum', `artist` = '$newartist', `band_id` = '$newband', `rating` = '$newrating' WHERE id=$newid";
            // if(!$query){
            // $error = "error: ". mysqli_error($conn);
            // $error.= "error: ". $newid;
            // }else{
            //     echo "Updated successfully";
            // }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $this->load->view('include/head');
    ?>
</head>
<body>
    <?php
    $this->load->view('include/nav');
    echo '<center>'; ?>
    <form style="backgroud-color:#09f4f4; width:60%;">
        <?php
            echo '<table border=".2" width="100%" bgcolor="#F4f4f4">';
            echo '<tr bgcolor="#09f9f9">';
                echo'<td><strong><center>Song Name</center></strong></td>';
                echo'<td><strong><center>Artist</center></strong></td>';
                echo'<td><strong><center>Band_ID</center></strong></td>';
                echo'<td><strong><center>Rating</center></strong></td>';
                echo'<td><strong><center>Save</center></strong></td>';
            echo '</tr>';
            $i=0;
            // print_r($writeRecordArray);
            foreach($writeRecordArray as $val => $row){
                    $album= $row['song_name'];
                    $artist= $row['artist'];
                    $band= $row['band_id'];
                    $rating= $row['rating'];
                    $id= $row['id'];
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST' style="backgroud-color:#09f4f4; width:60%;">
                <?php
                echo '<tr>';
                    echo "<td><input type='text' name='album' style='border:none;' value='". $album ."'></td>";
                    echo'<div class="error">'. $errors['album'] .'</div>';
                    echo "<td><input type='text' name='artist' style='border:none;' value='". $artist ."'></td>";
                    echo'<div class="error">'. $errors['artist'] .'</div>';
                    echo "<td><input type='text' name='band' style='border:none;' value='". $band ."'></td>";
                    echo'<div class="error">'. $errors['band'] .'</div>';
                    echo "<td><input type='text' name='rating' style='border:none;' value='". $rating ."'></td>";
                    echo'<div class="error">'. $errors['rating'] .'</div>';
                    echo"<input type='hidden' name='id' value='". $id ."'>";
                    echo"<td><input type='submit' name='edit' id='edit' style='border:none;' value=' + '></td>";
                    echo'<div class="hero-error">'. $error .'</div>';
                echo '</tr>';
                echo '</form>';
                }
            ?>
    <?php echo '</form></div><center>'; ?>

        </script>

</body>
</html>


