<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hacktech
 */

?>

	<footer id="colophon" class="site-footer">

	</footer>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#carouselExample').on('slide.bs.carousel', function(e) {
            var $last = $('.carousel-item:last', this);
            var $first = $('.carousel-item:first', this);

            if (e.direction == 'left') {
                $first.appendTo('.carousel-inner');
            } else {
                $last.prependTo('.carousel-inner');
            }
        });
        $('#burger').click(function (){
            $(this).hide()
            $('#close_menu').show()
            $('.menu-header-container').addClass('show')
        })
        $('#close_menu').click(function (){
            $(this).hide()
            $('#burger').show()
            $('.menu-header-container').removeClass('show')
        })
    });
</script>
<?php wp_footer(); ?>
</body>
</html>
