 <?php







    include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/connection.php");





   $id= $_GET['id'];

  $query = "DELETE FROM blog WHERE id='$id' ";

    $query_run = mysqli_query($connection, $query);



    if($query_run)

    {

       ?>

      <script> location.replace("/Admin/blog_list.php?status=success"); </script>

      <?php

    }

    else

    {

         ?>

      <script> location.replace("/Admin/blog_list.php?status=failed#status"); </script>

      <?php

    }    




























    ?>