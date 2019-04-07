<!doctype html>
<?php
@include_once './includes/calls.php';
@include_once './includes/utility.php';

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

  <div class="calendar">
  <?php
  $resp = processclasses();
  foreach ($resp as $key => $myclass) {

  $day = findWeekday($myclass->date);
  $time = convertTime($myclass->time);
  ?>
  <div class="my_class day<?php echo $day;?>">
    <span class="class_name"><?php echo $myclass->course ?></span>
    <span class="class_instructor"><?php echo $myclass->instructor ?></span>
    <span class="class_time"><?php echo $time ?></span>
    <span class="class_duration"><?php echo $myclass->length ?></span>
  </div>
  <?php
  }
  ?>
  </div>
</body>
</html>
