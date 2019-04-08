<?php
  function findWeekday($date) {
    $day_of_week = date('w', strtotime($date));
    return $day_of_week;
  }

  function convertTime($time){
    $temp = strtotime($time);
    if(!empty($time)) {
      $time = strval(date("g:i a", strtotime($time)));
    }
    return $time;
  }

  function organizeClassesByDay($my_classes){
    $organize_classes = [[],[],[],[],[],[],[]];
    foreach ($my_classes as $individual_class) {
      $individual_class->weekday = findWeekday($individual_class->date);
      $individual_class->time = convertTime($individual_class->time);
      array_push($organize_classes[$individual_class->weekday],$individual_class);
    }
    return $organize_classes;
  }
 ?>
