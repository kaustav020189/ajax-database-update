<?php
$t = $_POST['t'];

// Connect to MySQL
// Change the username, password and hostname in the function mysql_connect as per your configuration
$link = mysql_connect('localhost', 'kaustav', 'kaustav');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

// Make my_db the current database
$db_selected = mysql_select_db('projects', $link);

// Create tables
$query2="create table IF NOT EXISTS p_a_j (SCRAP char(50))";

        $results2 = mysql_query($query2, $link)
        or die(mysql_error());
        
// Insert the data
$query2="INSERT INTO p_a_j(scrap) VALUES('$t')";

        $results2 = mysql_query($query2, $link)
        or die(mysql_error());

    if(mysql_affected_rows()>=1){
        ?>
<span>You entered <?php echo $t; ?></span>
<br />
<p>Database updated</p>
<br />
<a href="index.html">Try this again</a>
<?php
    }
?>
