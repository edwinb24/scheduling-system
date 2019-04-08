<?php
@require_once './includes/dba.php';



  function processClasses() {
    $json = CallAPI('GET', "http://localhost/schedule_system_API/api/post/read.php", false);
    $resp = json_decode($json);

    return $resp;
  }



?>
