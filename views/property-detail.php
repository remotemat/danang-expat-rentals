<?php include'header.php';?>
<!-- banner -->

<!-- banner -->
<div class="property-listing">

<div class="container">
<div class="properties-listing spacer">

<div class="row">


<div class="col-lg-10">

<!-- Php code block 1 of 2 starts -->
<?php
require_once ('../vendor/autoload.php');
use App\Classes\RealEstate\RealEstate;
$real_estate = new RealEstate();
$singleData = $real_estate->viewSingleData($_GET['id']);
?>
<!-- Php code block 1 of 2 ends -->
<h2><?php echo $singleData->name ?></h2>
    
<div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
  <p><?php echo $singleData->description ?></p>

  </div>


  </div>
  <div class="col-lg-12">
  <div class="col-lg-12">
<div class="property-info">
<p class="price">$ <?php echo $singleData->monthly_charges ?></p>
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span>Address :  <?php echo $singleData->address ?></p>
  <p class="area"><span class="glyphicon glyphicon-th-list"></span>Floor Space :  <?php echo $singleData->floor_space ?> square feet</p>
  <p class="area"><span class="glyphicon glyphicon-th-list"></span>Access :  <?php echo $singleData->access ?></p>
  <p class="area"><span class="glyphicon glyphicon-th-list"></span>Utility :  <?php echo $singleData->utility ?></p>
</div>    
    
    
<div class="row">
  <div class="col-lg-12">
  <div class="property-images">
    <!-- Slider Starts -->

      <?php
            $image = explode(",",$singleData->images);
            $image_count = count($image);
            $i = 0;
            while ($i<$image_count){
                if($i == 0){
      
          ?>
      <div class="property-img">
          <div class="container">
        <div class="col-lg-6 col-md-6">
          <img src="../resources/images/properties/<?php echo $image[$i]; ?>" class="img-responsive" alt="Responsive image"/>
        </div>
        <!-- #Item 1 -->
      <?php } else{ ?>
        <!-- Item 2 -->
         <div class="col-lg-3 col-md-6">
           <img src="../resources/images/properties/<?php echo $image[$i]; ?>" class="img-responsive" alt="Responsive image"/>
         </div>
       <?php
            }
            $i++;
            }
         ?>
         <!-- Php code block 2 of 2 ends -->
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

<?php include'footer.php';?>