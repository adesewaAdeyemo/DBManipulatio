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
    echo '<center>';
        echo '<table border=".2" width="60%" bgcolor="#F4f4f4" style="margin:6%;">';
        echo '<tr bgcolor="#09f9f9">';
            echo'<td><strong><center>Song Name</center></strong></td>';
            echo'<td><strong><center>Artist</center></strong></td>';
            echo'<td><strong><center>Band_ID</center></strong></td>';
            echo'<td><strong><center>Rating</center></strong></td>';
        echo '</tr>';

        foreach ($recordArray as $val => $row){
        echo '<tr>';
            echo'<td>'. $row['song_name'] .'</td>';
            echo'<td>'.$row['artist'] .'</td>';
            echo'<td><center>'. $row['band_id'] .'</center></td>';
            echo'<td><center>'. $row['rating'] .'</center></td>';
        echo '</tr>';
        }
        echo '</table';
        echo '</center>';
        $this->load->view('include/footer');
        ?>

    
</body>
</html>
