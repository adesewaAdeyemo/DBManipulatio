<?php
        $id='';
        $error='';
        $value = "Add to record";
        $album=$artist=$band=$rating='';
        $errors= array('album'=>'', 'artist'=>'', 'band'=>'', 'rating'=>'');    

    if (isset($_POST['add'])){
        if (empty($_POST['album'] || empty($_POST['artist']) || empty($_POST['album'] || empty($_POST['artist'])))){
            $errors['album']="Field cannot be Empty";
        }else{
            $album= $_POST['album'];
            $artist= $_POST['artist'];
            $band= $_POST['band'];
            $rating= $_POST['rating'];
            $id= $_POST['id'];
            if ((!preg_match('/^[a-zA-Z\s]+$/', $album))){
                $errors['album']="Invalid Album Name";
            }
            if ((!preg_match('/^[a-zA-Z\s]+$/', $artist))){
                $errors['artist']="Invalid Artist Name";
            }
            if ((!is_numeric($band))){
                $errors['band']="Invalid band Id";
            }
            if ((!is_numeric($rating))){
                $errors['rating']="Invalid rating";
            }
            If (array_filter($errors)){
                echo '<center>';
                echo "<div class='hero-error'>Error in the form</div>";
                echo '</center>';
            }else{
                // header("Location: ./");
            }
        }
    }
?>