<?php
include('inc/header.php');

$i = 2;
$quesList = "SELECT * FROM onlinetest WHERE id=" . $i;


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
                                                <td><?php echo $rs['question'];?></td>

                                        </tr>
                                        <td>
                                               
                                                        <input type="radio" value="<?php echo $rs['ans1'];?>" name="<?php echo $rs['id'];?>"  />&nbsp  <?php echo $rs['ans1'];?>
		                                        <input type="radio" value="<?php echo $rs['ans2'];?>" name="<?php echo $rs['id'];?>"  />&nbsp<?php echo $rs['ans2'];?>
			                                <input type="radio" value="<?php echo $rs['ans3'];?>" name="<?php echo $rs['id'];?>"  />&nbsp<?php echo $rs['ans3'];?>
                                                        <input type="radio" value="<?php echo $rs['ans4'];?>" name="<?php echo $rs['id'];?>"  />&nbsp<?php echo $rs['ans4'];?>
		                                        <input type="radio" value="no_answer" checked="checked" style="display:none;" name="<?php echo $rs['id'];?>"  />
		
	  
                                        </td>
                                        <td><input type="submit" value="Submit"></td>
                                        <td><input type="button" value="Skip"></td>
                                </table>
                                
                        </form>
                </body>

                </html>






<?php



        }
}


?>