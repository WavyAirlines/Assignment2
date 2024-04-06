<?php
/**
 * Template Name: Custom Homepage
 * Template Post Type: page
 */
get_header();

// Get the post ID of the current page
$page_id = get_the_ID();

// Get the featured image URL of the homepage
$featured_image_url = get_the_post_thumbnail_url($page_id, 'full');
?>
<section class="hero" style="background-image: url('<?php echo $featured_image_url; ?>');">
  <div class="hero-content">
    <h1>HomeStead Kitchen & Grill</h1>
    <p>Our mission is to celebrate homemade cooking, foster community, and honor the bounty of our homestead through fresh, locally sourced ingredients and heartfelt hospitality.</p>
    <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn">Menu Items</a>
  </div>
</section>


<section class="about-us">
  <div class="container">
    <h2>Our Homestead Kitchen Story</h2>
    <p>Welcome to Our Homestead Kitchen, where every dish tells a story of passion, tradition, and a commitment to quality. Nestled in the heart of Barrie, our family-owned establishment takes pride in serving homemade meals crafted from ingredients sourced right here on our homestead. From the lush fields to the bustling kitchen, we strive to create a warm and welcoming atmosphere where guests can savor the flavors of home-cooked goodness in every bite. Join us on a culinary journey that celebrates the rich bounty of our land and the joy of sharing delicious food with loved ones.</p>
  </div>
</section>

<?php get_footer(); ?>
