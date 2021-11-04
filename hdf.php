<html>
  <head>
  <title>HEALTH DECLARATION FORM</title>
</head>
<body>
  <span><strong>HEALTH DECLARATION FORM</strong></span>
  </form> 
  <p> Put a checkmark on a appropriate column of your response. <p>
  <p> Are you experiencing or did you have any of the following in the last 14 days?<p>
  <p> a. Fever (Lagnat) 
  <p> b. Cough and/or Colds (Ubo at/o Sipon) 
  <p> c. Body pains (Pananakit ng katawan) 
  <p> d. Sore Throat (Pananakit o pamamaga ng /alamunan)
  <p> e. Fatigue/Tiredness (Pagkapagod)
  <p> f. Headache (Pananakit ng ulo)
  <p> g. Diarrhea (Pagtatae)
  <p> h. Loss of taste or smell (Nawalan ng panlasa o pang-amoy)
  <p> i. Difficulty of breathing (Pagkahapo o hirap sa pag hinga) 
    
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