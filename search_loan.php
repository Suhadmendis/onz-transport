<?php
session_start();
include_once './connection_sql.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />


        <title>Search Customer</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">



            <!-- <script language="JavaScript" src="js/search_joborder.js"></script> -->

            <script language="JavaScript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script language="JavaScript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script language="JavaScript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


            <script language="JavaScript" src="js/search_loan.js"></script>

    </head>

    <body>

        <?php if (isset($_GET['cur'])) { ?>
            <input type="hidden" value="<?php echo $_GET['cur']; ?>" id="cur" />
            <?php
        } else {
            ?>
            <input type="hidden" value="" id="cur" />
            <?php
        }
        ?>
        <table width="735"   class="table table-bordered">

            <tr>
                <?php
                $stname = "";
                if (isset($_GET['stname'])) {
                    $stname = $_GET["stname"];
                }
                ?>
              
        </table>    
         <div id="filt_table" class="CSSTableGenerator container"> 
           <table id='example'  class='table table-bordered'>
               <thead><tr>
                    <th>Ref. No.</th>
                    <th>Date</th>
                    <th>Driver Ref.</th>


                </tr></thead><tbody>
                <?php

                $sql = "SELECT * from loan";


                $sql = $sql . " order by od_ref";

                $stname = "";
                if (isset($_GET['stname'])) {
                    $stname = $_GET["stname"];
                }

                foreach ($conn->query($sql) as $row) {
                    $cuscode = $row['od_ref'];
                    echo "<tr>                
                              <td onclick=\"custno('$cuscode');\">" . $row['od_ref'] . "</a></td>
                              <td onclick=\"custno('$cuscode');\">" . $row['date'] . "</a></td>
                              <td onclick=\"custno('$cuscode');\">" . $row['driver_ref'] . "</a></td>
                             </tr>";
                }
                ?>
            </table>
        </div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable( {
          "pageLength": 17
        } );
    } );

</script>
    </body>
</html>
