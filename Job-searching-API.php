<html>
<head>
  <link rel="stylesheet" href="job-search.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

<?php

require_once "Careerjet_API.php" ;

$api = new Careerjet_API('en_GB') ;
$page = 1 ; # Or from parameters.
?>

<nav class="navbar">
<div class="nav-left">
<img src="logo.png" alt="logo" width="50px">
<h3>BIT LinkedIn</h3>
</div>
  <ul class="nav-right">
    <li>Home</li>
    <li>Search Job</li>
    <li>Plugins</li>
    <li>Contact</li>
</ul>
</nav>

      <center><div class="search-bar-content"><div class="search-bar"><input type="text" placeholder="Preferred Job.." name="search">
      <button type="submit" name=><i class="fa fa-search"></i></button><i class='fas fa-university' style='font-size:48px;color:red;margin-right:15px;'></i>
      <div class="search-bar"><input type="text" placeholder="Location.." name="search"></div>
      <button type="submit"><i class="fa fa-search"></i></button></div></div></center>

      <br>
<?php
$result = $api->search(array(
  'keywords' => 'php developer',
  'location' => 'London',
  'page' => $page ,
  'affid' => '678bdee048',
));

if ( $result->type == 'JOBS' ){
  ?><div class="pre-content"><div class="showing"><?php echo "Showing ".'<span>'.$result->hits.'</span>'." Jobs"."<br>" ;?></div>
  <div class="preference"><p>Based on your preference</p></div></div>
  <?php
  
  //echo " on ".$result->pages." pages".'<br>' ;
  $jobs = $result->jobs ;
echo('<br>');
?>
<div class="job-entire"><?php
  foreach( $jobs as $job ){?>


   <div class="content"> 
    <img src="verified.png" width="100px">
  <div class="top">
  <div class="job-company"><i class='fas fa-building' style='font-size:24px'></i> <?php echo $job->company ;?></div>
   <div class="job-date"><?php echo $job->date;?></div>
  </div>

   <div class="job-title"><?php echo $job->title."<br>" ;?></div>

  

    <div class="job-salary"><?php echo $job->salary."<br>" ;?></div>

    <div class="job-desc"><?php echo $job->description."<br>" ;?></div>

  <div class="bottom">
    <div class="job-location"><i class="fa fa-map-marker" style="font-size:20px;color:red"></i><?php echo " ".$job->locations."<br>";?></div>
    <div class="job-url"><i class="fa fa-address-book" style="font-size:20px"></i><a href=<?php echo $job->url ?> > Contact link</a></div><br>
  </div>
  </div>
 
    <?php }
    ?>
    </div>
    
 <?php
  # Basic paging code
  if( $page > 1 ){
    echo "Use \$page - 1 to link to previous page\n";
  }
  echo "You are on page $page\n" ;
  if ( $page < $result->pages ){
    echo "Use \$page + 1 to link to next page\n" ;
  }
}

# When location is ambiguous
if ( $result->type == 'LOCATIONS' ){
  $locations = $result->solveLocations ;
  foreach ( $locations as $loc ){
    echo $loc->name."\n" ; # For end user display
    ## Use $loc->location_id when making next search call
    ## as 'location_id' parameter
  }
}



?>
</body>
</html>