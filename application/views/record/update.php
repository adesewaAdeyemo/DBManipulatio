<?php
    $album=$artist=$band=$rating=$id=$error='';
    $errors= array('album'=>'', 'artist'=>'', 'band'=>'', 'rating'=>'');
    if (isset($_POST['update'])){
        // $this->load->view('include/formerror');
        If (array_filter($errors)){
            echo '<center>';
            echo "<div class='hero-error'>Error in the form</div>";
            echo '</center>';
        }
            global $id;
            echo "hmmmmn".$id;
            $id=$_POST['id'];
            $album=$_POST['album'];
            $artist=$_POST['artist'];
            $band=$_POST['band'];
            $rating=$_POST['rating'];
            print_r($this->input->post());

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

    $this->load->view('include/updatecontent');
        foreach ($popArray as $val => $row){
            $album= $row['song_name'];
            $artist= $row['artist'];
            $band= $row['band_id'];
            $rating= $row['rating'];
            $id= $row['id'];

        echo '<center>';
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label>Album</label><input type="text" name="album" value="<?php echo $album; ?>"><br>
            <div class="error"><?php echo $errors['album']; ?></div>
            <label>Artist</label><input type="text" name="artist" value="<?php echo $artist; ?>"><br>
            <div class="error"><?php echo $errors['artist']; ?></div>
            <label>Band ID</label><input type="text" name="band" value="<?php echo $band; ?>" ><br>
            <div class="error"><?php echo $errors['band']; ?></div>
            <label>Rating</label><input type="text" name="rating" value="<?php echo $rating; ?>"><br>
            <div class="error"><?php echo $errors['rating']; ?></div>
            <input type="submit" name="update" id="add" value="Update">
            <div class="error"><?php echo $error; ?></div>
        </form>
        <?php
            echo '</center>';
        }


// $this->load->view('include/footer');
    ?>

    
</body>
</html>
