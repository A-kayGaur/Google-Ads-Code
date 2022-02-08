
Contact Form 7 Redirect After Submission


//This function prints the JavaScript to the footer
function cf7_footer_script(){ ?>
  
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'https://www.bankaccountuae.net/thank-you';
}, false );
</script>
  
<?php } 
add_action('wp_footer', 'cf7_footer_script'); 
