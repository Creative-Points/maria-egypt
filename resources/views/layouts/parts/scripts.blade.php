<script src="/assets/js/all-jquery-combined-new.v1640264538.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery.material.init();
    });
</script>
<script type="text/javascript" charset="utf-8">
    jQuery(document).ready(function() {
        jQuery("a[rel^='prettyPhoto']").prettyPhoto();

        jQuery(function() {
            jQuery("img.lazy").lazyload({
                effect: "fadeIn"
            });

            jQuery("div.lazy").lazyload({
                effect: "fadeIn"
            });

        });
    });
</script>
<!--  -->

<!--  -->
<script src="/assets/js/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
