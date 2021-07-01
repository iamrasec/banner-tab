<?php
  $img1 = "https://dev2.cjdevsites.com/grubbylittlebubba/wp-content/uploads/2021/05/highlight1.jpg";
  $img2 = "https://dev2.cjdevsites.com/grubbylittlebubba/wp-content/uploads/2021/05/highlight2.jpg";
  $img3 = "https://dev2.cjdevsites.com/grubbylittlebubba/wp-content/uploads/2021/05/highlight3.jpg";
  $img4 = "https://dev2.cjdevsites.com/grubbylittlebubba/wp-content/uploads/2021/05/highlight4.jpg";
  
  $link1 = "https://dev2.cjdevsites.com/grubbylittlebubba/product-category/grubby-little-boys/";
  $link2 = "https://dev2.cjdevsites.com/grubbylittlebubba/product-category/grubby-little-girls/";
  $link3 = "https://dev2.cjdevsites.com/grubbylittlebubba/product-category/grubby-little-mum/";
  $link4 = "https://dev2.cjdevsites.com/grubbylittlebubba/the-grubby-little-story/";
  
  $header1 = "Grubby Little Boys";
  $header2 = "Grubby Little Girls";
  $header3 = "Grubby Little Mum";
  $header4 = "Grubby Little Story";
  
  $desc1 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
  $desc2 = "Phasellus id hendrerit mi, sed rutrum neque.";
  $desc3 = "Phasellus dictum elementum risus, in laoreet elit dapibus quis.";
  $desc4 = "Praesent consequat pretium lectus, ut sollicitudin nunc.";

?>
<div id="banner_tab">

  <div id="homesearch">
    <div class="homesearch_wrap">      
      <h3 class="home-intro">Grubby Little Bubba offers a wide range of quality products for your little baby, your kids and you.</h3>
    
      <div class="homepage-search">
        <?php echo do_shortcode('[widget id="woocommerce_product_search-2"]'); ?>
        <a class="home-shop-now orange-btn" href="https://dev2.cjdevsites.com/grubbylittlebubba/shop/">Shop Now</a>
      </div>
    </div>
  </div>

  <div class="hero-area mobile-hidden">
    <div class="hero-background-wrapper">
      <div class="hero-item-bg showbg" data-index="1">
        <img src="<?php echo $img1; ?>" />
      </div>
      <div class="hero-item-bg hidebg" data-index="2">
        <img src="<?php echo $img1; ?>" />
      </div>
      <div class="hero-item-bg hidebg" data-index="3">
        <img src="<?php echo $img1; ?>" />
      </div>
      <div class="hero-item-bg hidebg" data-index="4">
        <img src="<?php echo $img1; ?>" />
      </div>
    </div>
    
    <div class="row">

      <div class="column col-md-3 column-slides" data-index="1">
        <div class="hero-item">
          <div class="hero-overlay"></div>
          <a href="<?php echo $link1; ?>"></a>
          <div class="hero-item-caption">
            <h5 class="hero-item-title  text-uppercase"><?php echo $header1; ?></h5>
            <div class="hero-item-desc"><?php echo $desc1; ?></div>
          </div>
        </div>
      </div>

      <div class="column col-md-3 column-slides" data-index="2">
        <div class="hero-item">
          <div class="hero-overlay"></div>
          <a href="<?php echo $link2; ?>"></a>
          <div class="hero-item-caption">
            <h5 class="hero-item-title  text-uppercase"><?php echo $header2; ?></h5>
            <div class="hero-item-desc"><?php echo $desc2; ?></div>
          </div>
        </div>
      </div>

      <div class="column col-md-3 column-slides" data-index="3">
        <div class="hero-item">
          <div class="hero-overlay"></div>
          <a href="<?php echo $link3; ?>"></a>
          <div class="hero-item-caption">
            <h5 class="hero-item-title  text-uppercase"><?php echo $header3; ?></h5>
            <div class="hero-item-desc"><?php echo $desc3; ?></div>
          </div>
        </div>
      </div>

      <div class="column col-md-3 column-slides" data-index="4">
        <div class="hero-item">
          <div class="hero-overlay"></div>
          <a href="<?php echo $link4; ?>"></a>
          <div class="hero-item-caption">
            <h5 class="hero-item-title  text-uppercase"><?php echo $header4; ?></h5>
            <div class="hero-item-desc"><?php echo $desc4; ?></div>
          </div>
        </div>
      </div>

    </div>
    
  </div>
  
  
  <div class="hero-area desktop-hidden">
    
    <style>
      .mobile-hero-item1 {
        background-image: url('<?php echo $img1; ?>');
      }
      .mobile-hero-item2 {
        background-image: url('<?php echo $img1; ?>');
      }
      .mobile-hero-item3 {
        background-image: url('<?php echo $img1; ?>');
      }
      .mobile-hero-item4 {
        background-image: url('<?php echo $img1; ?>');
      }
    </style>
  
    <div class="mobile-hero">
      <a href="<?php echo $link1; ?>">
      <div class="mobile-hero-item mobile-hero-item1">
        <div class="mobile-hero-item-textwrap">
          <h5 class="hero-item-title  text-uppercase"><?php echo $header1; ?></h5>
          <div class="hero-item-desc"><?php echo $desc1; ?></div>
        </div>
      </div>
      </a>
      
      <a href="<?php echo $link2; ?>">
      <div class="mobile-hero-item mobile-hero-item2">
        <div class="mobile-hero-item-textwrap">
          <h5 class="hero-item-title  text-uppercase"><?php echo $header2; ?></h5>
          <div class="hero-item-desc"><?php echo $desc2; ?></div>
        </div>
      </div>
      </a>
      
      <a href="<?php echo $link3; ?>">
      <div class="mobile-hero-item mobile-hero-item3">
        <div class="mobile-hero-item-textwrap">
          <h5 class="hero-item-title  text-uppercase"><?php echo $header3; ?></h5>
          <div class="hero-item-desc"><?php echo $desc3; ?></div>
        </div>
      </div>
      </a>
      
      <a href="<?php echo $link4; ?>">
      <div class="mobile-hero-item mobile-hero-item4">
        <div class="mobile-hero-item-textwrap">
          <h5 class="hero-item-title  text-uppercase"><?php echo $header4; ?></h5>
          <div class="hero-item-desc"><?php echo $desc4; ?></div>
        </div>
      </div>
      </a>
    </div>
    
  </div>

</div>