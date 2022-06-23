<?php
include('inc/header.php');
@session_start();

if (isset($_SESSION["currentQuestion"]) && !empty($_SESSION["currentQuestion"])) {

        $quesList = "SELECT * FROM onlinetest WHERE id=" . $_SESSION["currentQuestion"];


        $res = mysqli_query($conn, $quesList);
        if (mysqli_num_rows($res) > 0) {
                while ($rs = mysqli_fetch_assoc($res)) {
?>


                        <html>

                        <head>
                                <style>
                                        table,
                                        th {
                                                margin: auto;
                                                border: 1px solid black;

                                        }

                                        td {
                                                padding-left: 20px;

                                        }
                                </style>
                        </head>

                        <body>


                                <form action="OnlineTestAnswersEvaluation.php" method="post" id="quiz">

                                        <table style="width:80%">
                                                <tr>
                                                        <td><?php echo $rs['question']; ?></td>

                                                </tr>
                                                <td>

                                                        <input type="radio" value="<?php echo $rs['ans1']; ?>" name="<?php echo $rs['id']; ?>" />&nbsp <?php echo $rs['ans1']; ?>
                                                        <input type="radio" value="<?php echo $rs['ans2']; ?>" name="<?php echo $rs['id']; ?>" />&nbsp<?php echo $rs['ans2']; ?>
                                                        <input type="radio" value="<?php echo $rs['ans3']; ?>" name="<?php echo $rs['id']; ?>" />&nbsp<?php echo $rs['ans3']; ?>
                                                        <input type="radio" value="<?php echo $rs['ans4']; ?>" name="<?php echo $rs['id']; ?>" />&nbsp<?php echo $rs['ans4']; ?>



                                                </td>
                                                <td><input type="submit" value="Submit"></td>
                                                <td><input type="button" value="Skip"></td>
                                                <td><input type="button" value="Restart"></td>
                                        </table>

                                </form>
                        </body>

                        </html>






<?php
                }
        }
}
else{
        $_SESSION["currentQuestion"] = 0;
}


?>