<!doctype html>
<?php
  @include_once './includes/dba.php';

  $json = CallAPI('GET', "http://localhost/schedule_system_API/api/post/read.php", false);
  $resp = json_decode($json);

?>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Class Scheduling System</title>
  <meta name="description" content="Class Scheduling System">
  <meta name="author" content="Edwin Broce">

  <link rel="stylesheet" type="text/css" href="src/css/styles.css">
  <script type="text/javascript" src="src/js/libs.js"></script>
</head>

<body>
HELOOOOOOWWWW!! aaaa bbbbb
<h1>
  <?php
  foreach ($resp as $myclass) {
    $class = (array) $myclass;
    var_dump($class["id"]);
  }?>
</h1>
</body>
</html>
