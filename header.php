//Add This Code in header.php in head tag

<?php
if ( is_page( array( 'thank-you' ) ) ) { ?>

<!-- Event snippet for Website lead conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-------/u--------'});
</script>
	
<?php } else {} ?>	
