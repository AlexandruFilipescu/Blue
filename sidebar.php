<div class="sidebar">
<h3>Latest News</h3>
  <!-- insert your sidebar items here -->
 <?php 
  $sql_connect = "SELECT titlu, date, continut FROM news";
  $result_content = $conn->query($sql_connect);

  if($result_content->num_rows){
      while($content = $result_content->fetch_assoc()){
        // var_dump($content);
        echo "<h4>".$content['titlu']."</h4>";
        echo "<h5>".$content['date']."</h5>";
        echo "<p>". $content['continut'] ."<br /><a href='#'>Read more</a></p>";
      }
  }
 
 ?>

  
  <h3>Useful Links</h3>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
    <li><a href="#">link 3</a></li>
    <li><a href="#">link 4</a></li>
  </ul>
  <h3>Search</h3>
  <form method="post" action="#" id="search_form">
    <p>
      <input class="search" type="text" name="search_field" value="Enter keywords....." />
      <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
    </p>
  </form>
</div>