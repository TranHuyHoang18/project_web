
<script src="{{asset('front_assets/js/odometer.js')}}"></script>
<script>
    window.odometerOptions = {
        format: '(ddd).dd'
    };
</script>
<script>
    setTimeout(function(){
        jQuery('#w3l_stats1').html(25);
    }, 1500);
</script>
<script>
    setTimeout(function(){
        jQuery('#w3l_stats2').html(330);
    }, 1500);
</script>
<script>
    setTimeout(function(){
        jQuery('#w3l_stats3').html(542);
    }, 1500);
</script>




<script type="text/javascript" src="{{asset('front_assets/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
<script src="{{asset('front_assets/js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>