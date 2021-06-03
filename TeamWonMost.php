<?php

$host="localhost";
$dbuser="root";
$pass="";
$dbname="cst3519";


$conn=mysqli_connect($host,$dbuser,$pass,$dbname);

    if(mysqli_connect_errno()){

        die("connection Failed".mysqli_connect_error());

    }else{

        echo "Connected to database {$dbuser}";

}

?>

<html>
    <head>

        <title>Team Detail</title>
        <link href="style.css" rel="stylesheet">
    </head>

<body>

<?php

//select query

$sqlQuery="select  * from nba order by NBAwins DESC LIMIT 1 ";
$res=mysqli_query($conn,$sqlQuery);

    if(!$res){

        die("Query Failed!!!");

}

?>

<div class="bostonimage"><img src="https://i.pinimg.com/originals/96/6e/67/966e67fb7ee7644680be0545eb05f1aa.jpg" width="500"> </div>

<table class="table">

<tr>
    <td>Team Name</td>
    <td>Year Founded</td>
    <td>NBA wins </td>
    <td>Years of win </td>
    
</tr>

<?php

//mysql_fetch_array() will return result row by row

while($row=mysqli_fetch_array($res)){

    ?>
    
    <tr>
        
        <td><?php echo $row{'Team'}?>
        </td><td><?php echo $row{'YearFounded'} ?></td>
        </td><td><?php echo $row{'NBAwins'} ?></td>
        </td><td><?php echo $row{'yearofwin'} ?></td>
    </tr>
    
    <?php }?>
    
    </table>
    
    <?php

    
    
    // close the db connection
    
    mysqli_close($conn);
    
    ?>
    
    <a href="index.html">Back</a>
    
    </body>
    
    </html>