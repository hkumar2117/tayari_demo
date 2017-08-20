<?php
?>
<html>
<head>
<meta charset="utf-8">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="comman.js"></script>
  
<body>
<form action="jobController.class.php" method="POST">
  Job Category: <input type="text" name="j_category"><br>
  Job Details: <input type="textarea" name="j_desc"><br>
  Job Experiance : <input type="textarea" name="j_desc"><br>
  Job Country:   <select id="country" name ="country"></select>
  Job State : <select name ="state" id ="state"></select>  </br> <hr>
  Status : <select name ="status" id ="status">
           <option value="0"> Active</option>
           <option value="1"> Hidden</option>
           </select>
  <input type="submit" value="Submit">
</form>
</body>
</html>