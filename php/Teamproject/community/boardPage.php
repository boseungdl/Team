<?php
  $sql = "SELECT count(boardID) FROM myBoard";
  $result = $connect -> query($sql);
  $boardCount = $result -> fetch_array(MYSQLI_ASSOC);
  $boardCount = $boardCount['count(boardID)'];

  // echo $boardCount

//    echo "<pre>";
//    var_dump($boardCount);
//    echo "</pre>";


  //전체 페이지
  $boardCount = ceil($boardCount/$pageView);

  // echo $boardCount;
  //현제 페이지를 기준으로 보여주고 싶은 갯수
  $pageCurrent = 5;
  $startPage = $page - $pageCurrent;
  $endPage = $page + $pageCurrent;

  //처음페이지 초기화
  if($startPage < 1) $startPage = 1;

  //마지막페이지 초기화
  if($endPage >= $boardCount) $endPage = $boardCount;

 

   //처음으로 페이지
   if($page != 1){
      echo "<li><a href='boardQ.php?page=1'>처음으로</a></li>";
  }

   //이전 페이지
   if($page != 1){
    $prevPage = $page - 1;
    echo "<li><a href='boardQ.php?{$prevpage}'>◀</a></li>";
}
  

  for($i=$startPage; $i<=$endPage; $i++){
      $active = "";
      if($i == $page){
          $active = "active";
      }
      echo "  <li class='{$active}'><a href='boardQ.php?page={$i}'>{$i}</a></li>";
  }

     //다음 페이지
     if($page != $endPage){
          $nextPage = $page + 1;
          echo "<li><a href='boardQ.php?page={$nextPage}'>▶</a></li>";
  }

      //마지막 페이지
      if($page != $endPage){
          echo "<li><a href='boardQ.php?page={$boardCount}'>마지막으로</a></li>";
  }

 
?>