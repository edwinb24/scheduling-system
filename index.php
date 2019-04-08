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
  $resp = processClasses();
  $all_week_classes = organizeClassesByDay($resp);

  for ($i=0; $i <7 ; $i++) {
  ?>
  <div class="my_class day<?php echo $i;?>">
  <?php foreach ($all_week_classes[$i] as $class_session): ?>
    <div class="class_session" id="<?echo $class_session->id ?>">
      <span class="class_name"><?php echo $class_session->course ?></span>
      <span class="class_instructor"><?php echo $class_session->instructor ?></span>
      <span class="class_time"><?php echo $class_session->time ?></span>
      <span class="class_duration"><?php echo $class_session->length ?></span>
    </div>
  <?php endforeach; ?>
  </div>
  <?php
  }
  ?>
  </div>
</body>
</html>
