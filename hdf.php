<?php

?>

<!DOCTYPE html>
<html>
    <head>
      <title> HEALTH DECLARATION FORMS </title>
      <span><strong>HEALTH DECLARATION FORM</strong></span>
    </head>
<body>
  <form action="handler.php" method="post">
  <p> Put a checkmark on a appropriate column of your response. <p>
  <p> Are you experiencing or did you have any of the following in the last 14 days?<p>
  <p> a. Fever (Lagnat)  
  YES<input type="radio" values="yes" name="fever"/>
  NO<input type="radio" values="no" name="fever"/>
  <p> b. Cough and/or Colds (Ubo at/o Sipon) 
  YES<input type="radio" values="yes" name="cough"/>
  NO<input type="radio" values="no" name="cough"/>
  <p> c. Body pains (Pananakit ng katawan) 
  YES<input type="radio" values="yes" name="bodypains"/>
  NO<input type="radio" values="no" name="bodypaina"/>
  <p> d. Sore Throat (Pananakit o pamamaga ng /alamunan)
  YES<input type="radio" values="yes" name="sorethroat"/>
  NO<input type="radio" values="no" name="sorethroat"/>
  <p> e. Fatigue/Tiredness (Pagkapagod)
  YES<input type="radio" values="yes" name="fatigue"/>
  NO<input type="radio" values="no" name="fatigue"/>
  <p> f. Headache (Pananakit ng ulo)
  YES<input type="radio" values="yes" name="headache"/>
  NO<input type="radio" values="no" name="headache"/>
  <p> g. Diarrhea (Pagtatae)
  YES<input type="radio" values="yes" name="diarrhea"/>
  NO<input type="radio" values="no" name="diarrhea"/>
  <p> h. Loss of taste or smell (Nawalan ng panlasa o pang-amoy)
  YES<input type="radio" values="yes" name="taste"/>
  NO<input type="radio" values="no" name="taste"/>
  <p> i. Difficulty of breathing (Pagkahapo o hirap sa pag hinga)
  YES<input type="radio" values="yes" name="breathing"/>
  NO<input type="radio" values="no" name="breathing"/> </br>

    <input type="submit" value="submit"/>
    
  <ul class="pagination">
    <li><a href="?pageno=1">First</a></li>
    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
    </li>
    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
    </li>
    <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
</ul>

<a href="logout.php"> Logout </a>
</body>
</html>