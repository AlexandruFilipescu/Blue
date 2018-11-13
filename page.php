<div id="site_content">
<?php include_once('sidebar.php') ?>
<div id="content">
  <!-- insert the page content here -->
  <?php 
       $sql_content = "SELECT titlu_pagina, content FROM pages WHERE id='$id'";
       $result_content = $conn->query($sql_content);

            if($result_content->num_rows) {
                while($content = $result_content->fetch_assoc()){
                   echo "<h1>".$content['titlu_pagina']."</h1>";
                   echo $content['content'];
                }
            }

          ?>
</div>
</div>