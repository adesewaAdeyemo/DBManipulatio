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

    $this->load->view('include/deletecontent');

    $this->load->view('include/footer');
?>

    <!-- <script>
        document.querySelectorAll('submit').addEventListener(click,(e) =>{
            e.preventDefault();
        })
        document.querySelector('#confirmid').addEventListener(click, func);
        function func(){
            e.preventDefault();
            alert("Delete record permanently");
        }

    </script> -->

</body>
</html>
