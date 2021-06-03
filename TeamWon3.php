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

$sqlQuery= "select * from nba where yearofwin like '%1970%' or yearofwin like '%1980%' or yearofwin like '%1990%'"; 

 

$res=mysqli_query($conn,$sqlQuery);

    if(!$res){

        die("Query Failed!!!");

}

?>
<img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fbostonceltics&psig=AOvVaw0nnckljKe1DtyBGWy1rmr0&ust=1621643289681000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCNj9nJTC2fACFQAAAAAdAAAAABAa">

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