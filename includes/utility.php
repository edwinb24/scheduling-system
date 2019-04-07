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

 ?>
