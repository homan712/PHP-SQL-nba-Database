<?php

$host="localhost";//server
$dbuser="root";//username
$pass="";//password
$dbname="cst3519";

//mysql_connect() is used to connect to the function

$conn=mysqli_connect($host,$dbuser,$pass,$dbname);

if(mysqli_connect_errno()){

    die("connection Failed".mysqli_connect_error());

}else{

    echo "Connected to database {$dbuser}";

}

?>
<html>


<head>



<title>Top Five oldest Team Detail</title>

<!-- link to external style sheet -->

<link href="style.css" rel="stylesheet">

</head>

<body>

<?php

//select query

$sqlQuery="select * from nba ORDER by YearFounded LIMIT 5";

$res=mysqli_query($conn,$sqlQuery);

if(!$res){

    die("Query Failed!!!");

}

?>

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