
<pre>
<?php
$host = 'db'; // service name from docker-compose.yml
$user = 'rgblab';
$password = 'rgblab';
$db = 'Busan';

$conn = new mysqli($host, $user, $password, $db);
$sql = 'SELECT * FROM Flight_Record';
$result = mysqli_query($conn , $sql);
$output = mysqli_fetch_array($result);
print_r($output);
$sql = 'SELECT * FROM Img_Record';
$result = mysqli_query($conn, $sql);
$output = mysqli_fetch_array($result);
print_r($output);
?> 
</pre>

