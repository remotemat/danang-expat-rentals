<?php include'header.php';?>
<!-- banner -->

<div class="inside-banner" id="landing">
    <h2 id="landing-title">Da Nang Expat Rentals</h2>
      <p1 id="landing-subtitle">Discover the Beach</p1>
    <a href="#page-wrap"><button type="button" class="btn btn-default" id="explore-us">View Listings</button></a>
     <div class="rectangle"> <img src="Rectangle.png">
    </div>
</div>
<!-- banner -->


<!--
<div class="row">
<div class="col-lg-3 col-sm-4 ">

 :// <div class="search-form">
    <h4><span class="glyphicon glyphicon-search"></span> Search of Properties</h4>
		<form action="search-result.php" method="get" class="form form-group">
            <input type="text" class="form-control" name="search" placeholder="Search by Name/Address">
            <button class="btn btn-primary">Find Now</button>
		</form>
  </div> -->
  
  
 <div id="page-wrap"><img src="Groupfive.png" class="bg">
    <div class="row" id="listings-row">

   
    <?php
    require_once ('../vendor/autoload.php');
    use App\Classes\RealEstate\RealEstate;
    $real_estate = new RealEstate();
    $allData = $real_estate->index();

    foreach ($allData as $oneData){
        $image = explode(",",$oneData->images);
    ?>

     <!-- properties -->
     
         
        <div class="image-holder"><img src="../resources/images/properties/<?php echo $image[0];?>" class="img-responsive" id="property-image" alt="properties">
        </div>
        <div class="property-detail">
        <h4><?php echo $oneData->name;?></h4>
        <p class="price">Price: $<?php echo $oneData->monthly_charges;?></p>
        <a id="view-details" class="btn btn-primary" href="property-detail.php?id=<?php echo $oneData->id;?>">View Details</a>
    </div>
      
      <!-- properties -->
    <?php } ?>



</div>
</div>




<?php include'footer.php';?>