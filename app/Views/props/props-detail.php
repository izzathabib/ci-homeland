<!-- Import view from folder layouts and file app.php -->
<?= $this->extend('layouts/app.php'); ?>
<?= $this->section('content'); ?>

<!-- main slider part -->
<div class="slide-one-item home-slider owl-carousel">
<!-- Loop to display the data on the slider section -->
  <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/<?= $propsDetail['image']; ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span>
            <h1 class="mb-2"><?= $propsDetail['name']; ?></h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold">RM <?= $propsDetail['price']; ?></strong></p>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- End main slider part -->



<div class="site-section site-section-sm">
      <div class="container">
        <!-- Get flash data to display if form successfully submitted -->
        <?php if(session()->getFlashdata('sent')) : ?>
          <p class="alert alert-success"><?= session()->getFlashdata('sent'); ?></p>
        <?php endif; ?>
        <!---->
        <div class="row">
          <div class="col-lg-8">
            <div>
              <!-- Small slider -->
              <div class="slide-one-item home-slider owl-carousel">
                <?php foreach ($image_gallery as $image) : ?>
                <div><img src="images/<?= $image->image; ?>" alt="Image" class="img-fluid"></div>
                <?php endforeach; ?>  
              </div>
              <!-- End small slider -->
            </div>
            <div class="bg-white property-body border-bottom border-left border-right">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3">$1,000,500</strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">7,000</span>
                    
                  </li>
                </ul>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Home Type</span>
                  <strong class="d-block">Condo</strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Year Built</span>
                  <strong class="d-block">2018</strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Price/Sqft</span>
                  <strong class="d-block">$520</strong>
                </div>
              </div>
              <h2 class="h4 text-black">More Info</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.</p>
              <p>Nisi voluptatum error ipsum repudiandae, autem deleniti, velit dolorem enim quaerat rerum incidunt sed, qui ducimus! Tempora architecto non, eligendi vitae dolorem laudantium dolore blanditiis assumenda in eos hic unde.</p>
              <p>Voluptatum debitis cupiditate vero tempora error fugit aspernatur sint veniam laboriosam eaque eum, et hic odio quibusdam molestias corporis dicta! Beatae id magni, laudantium nulla iure ea sunt aliquam. A.</p>
              
              <!-- Gallery part -->
              <div class="row no-gutters mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Gallery</h2>
                </div>
                <?php foreach ($image_gallery as $image) : ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/<?= $image->image; ?>" class="image-popup gal-item"><img src="images/<?= $image->image; ?>" alt="Image" class="img-fluid"></a>
                </div>
                <?php endforeach; ?>
              </div>
              <!-- End gallery part -->

            </div>
          </div>
          <div class="col-lg-4">
            
            <!-- Contact form -->
            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
              <!-- Check input validation -->
              <?php if ($checkingSendingRequests > 0) : ?>
                <p class="alert alert-success">You sent a request to this property</p>
              <?php else : ?>    
                <form method="POST" action="<?= url_to('sendRequest',$propsDetail['id']); ?>" class="form-contact-agent">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" id="name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" id="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input name="phone" type="text" id="phone" class="form-control">
                  </div>
                  <div class="form-group">
                    <input value="<?= $propsDetail['name']; ?>" name="prop_name" type="hidden" id="prop_name" class="form-control">
                  </div>
                  <div class="form-group">
                    <input value="<?= $propsDetail['image']; ?>" name="prop_image" type="hidden" id="prop_image" class="form-control">
                  </div>
                  <div class="form-group">
                    <input value="<?= $propsDetail['price']; ?>" name="prop_price" type="hidden" id="prop_price" class="form-control">
                  </div>
                  <div class="form-group">
                    <input value="<?= $propsDetail['location']; ?>" name="prop_location" type="hidden" id="prop_location" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                  </div>
                </form>
              <?php endif; ?>
            </div>
            <!---->

            <!-- Share through social media -->
            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3 ml-0">Share</h3>
                  <div class="px-3" style="margin-left: -15px;">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= url_to('propDetail',$propsDetail['id']); ?>&quote=<?= $propsDetail['name']; ?>" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                    <a  href="https://twitter.com/intent/tweet?text=<?= $propsDetail['name']; ?>&url=<?= url_to('propDetail',$propsDetail['id']); ?>" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= url_to('propDetail',$propsDetail['id']); ?>" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>    
                  </div>            
            </div>
            <!---->

          </div>
       
        </div>
      </div>
    </div>

    <!-- Related property -->
    <div class="container">

        <div class="row">
          <div class="col-12">
            <div class="site-section-title mb-5">
              <h2>Related Properties</h2>
            </div>
          </div>
        </div>
      
        <div class="row mb-5">
          <?php foreach ($related_property as $property) : ?>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="<?= url_to('propDetail',$property->id) ; ?>" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-success"><?= $property->type; ?></span>
                </div>
                <img src="images/<?= $property->image; ?>" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="<?= url_to('propDetail',$property->id) ; ?>"><?= $property->name; ?></a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> <?= $property->location; ?></span>
                <strong class="property-price text-primary mb-3 d-block text-success">RM <?= $property->price; ?></strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number"><?= $property->num_beds; ?></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number"><?= $property->num_baths; ?></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number"><?= $property->sq_ft; ?></span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
    </div>
    <!---->

<?= $this->endsection(); ?>
