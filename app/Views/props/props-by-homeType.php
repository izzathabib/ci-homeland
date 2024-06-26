<!-- Import view from folder layouts and file app.php -->
<?= $this->extend('layouts/app.php'); ?>
<?= $this->section('content'); ?>

<!-- Slider part -->
<div class="slide-one-item home-slider owl-carousel">
<!-- Loop to display the data on the slider section -->
<?php foreach ($propByHomeType as $prop) : ?>
<div class="site-blocks-cover overlay" style="background-image: url(images/<?= $prop->image; ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded"><?= $prop->home_type; ?></span>
        <h1 class="mb-2"><?= $prop->name; ?></h1>
        <p class="mb-5"><strong class="h2 text-success font-weight-bold">RM <?= $prop->price; ?></strong></p>
        <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">See Details</a></p>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>  
</div>  

<!-- Sorting and search part -->


<!-- Part that display listing of the detail property -->
<div class="site-section site-section-sm bg-light"> 
<div class="container">
  <div class="row mb-5">
    <?php foreach ($propByHomeType as $prop) : ?>
    <div class="col-md-6 col-lg-4 mb-4">
      <div class="property-entry h-100">
        <a href="<?= url_to('propHomeType',$prop->home_type); ?>" class="property-thumbnail">
          <div class="offer-type-wrap">
            <span class="offer-type bg-success"><?= $prop->type; ?></span>
          </div>
          <img src="images/<?= $prop->image; ?>" alt="Image" class="img-fluid">
        </a>
        <div class="p-4 property-body">
          <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
          <h2 class="property-title"><a href="<?= url_to('propHomeType',$prop->home_type); ?>"><?= $prop->name; ?></a></h2>
          <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span><?= $prop->location; ?></span>
          <strong class="property-price text-primary mb-3 d-block text-success">RM <?= $prop->price; ?></strong>
          <ul class="property-specs-wrap mb-3 mb-lg-0">
            <li>
              <span class="property-specs">Beds</span>
              <span class="property-specs-number"><?= $prop->num_beds; ?></span>
              
            </li>
            <li>
              <span class="property-specs">Baths</span>
              <span class="property-specs-number"><?= $prop->num_baths; ?></span>
              
            </li>
            <li>
              <span class="property-specs">SQ FT</span>
              <span class="property-specs-number"><?= $prop->sq_ft; ?></span>
              
            </li>
          </ul>

        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
</div>

<!-- Why choose us part -->
<div class="site-section">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-7 text-center">
      <div class="site-section-title">
        <h2>Why Choose Us?</h2>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores quisquam saepe architecto error corporis aliquam. Cum ipsam a consectetur aut sunt sint animi, pariatur corporis, eaque, deleniti cupiditate officia.</p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-lg-4">
      <a href="#" class="service text-center">
        <span class="icon flaticon-house"></span>
        <h2 class="service-heading">Research Subburbs</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis ex odio molestia.</p>
        <p><span class="read-more">Read More</span></p>
      </a>
    </div>
    <div class="col-md-6 col-lg-4">
      <a href="#" class="service text-center">
        <span class="icon flaticon-sold"></span>
        <h2 class="service-heading">Sold Houses</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis ex odio molestia.</p>
        <p><span class="read-more">Read More</span></p>
      </a>
    </div>
    <div class="col-md-6 col-lg-4">
      <a href="#" class="service text-center">
        <span class="icon flaticon-camera"></span>
        <h2 class="service-heading">Security Priority</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis ex odio molestia.</p>
        <p><span class="read-more">Read More</span></p>
      </a>
    </div>
  </div>
</div>
</div>

<!-- <div class="site-section bg-light">
<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-7 text-center">
      <div class="site-section-title">
        <h2>Recent Blog</h2>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores quisquam saepe architecto error corporis aliquam. Cum ipsam a consectetur aut sunt sint animi, pariatur corporis, eaque, deleniti cupiditate officia.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
      <a href="#"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
      <div class="p-4 bg-white">
        <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
        <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by Mike Charles</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
      <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
      <div class="p-4 bg-white">
        <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
        <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by Mike Charles</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
      <a href="#"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
      <div class="p-4 bg-white">
        <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
        <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by Mike Charles</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
      </div>
    </div>

  </div>

</div>
</div> -->


<div class="site-section bg-light">
<div class="container">
<div class="row mb-5 justify-content-center">
  <div class="col-md-7">
    <div class="site-section-title text-center">
      <h2>Our Agents</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero magnam officiis ipsa eum pariatur labore fugit amet eaque iure vitae, repellendus laborum in modi reiciendis quis! Optio minima quibusdam, laboriosam.</p>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
      <div class="team-member">

        <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded mb-4">

        <div class="text">

          <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
          <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. Totam atque corporis nisi, veniam non. Tempore cupiditate, vitae minus obcaecati provident beatae!</p>
          <p>
            <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
            <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
            <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
          </p>
        </div>

      </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
      <div class="team-member">

        <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded mb-4">

        <div class="text">

          <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
          <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cumque vitae voluptates culpa earum similique corrupti itaque veniam doloribus amet perspiciatis recusandae sequi nihil tenetur ad, modi quos id magni!</p>
          <p>
            <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
            <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
            <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
          </p>
        </div>

      </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
      <div class="team-member">

        <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded mb-4">

        <div class="text">

          <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
          <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illo iusto, inventore, iure dolorum officiis modi repellat nobis, praesentium perspiciatis, explicabo. Atque cupiditate, voluptates pariatur odit officia libero veniam quo.</p>
          <p>
            <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
            <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
            <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
          </p>
        </div>

      </div>
    </div>

    

  </div>
</div>
</div>

<?= $this->endsection(); ?>