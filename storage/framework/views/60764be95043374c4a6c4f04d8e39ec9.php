<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Boletin informativo</h4>
                        <p> Suscríbete a nuestra y obtén <span>10%</span> Suscríbete a nuestra newsletter y obtén</p>
                        <form action="<?php echo e(route('subscribe')); ?>" method="post" class="newsletter-inner">
                            <?php echo csrf_field(); ?>
                            <input name="email" placeholder="Your email address" required="" type="email">
                            <button class="btn" type="submit">Suscribir</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->
<?php /**PATH C:\laragon\www\Complete-Ecommerce-in-laravel-10-master\resources\views/frontend/layouts/newsletter.blade.php ENDPATH**/ ?>