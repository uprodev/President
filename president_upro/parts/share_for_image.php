<ul>
   <li class="copy-li">
      <a href="#">
         <i class="fas fa-link"></i>
      </a>
      <span class="copy-text"><?php _e('הקישור הועתק', 'President') ?></span>
   </li>
   <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
   <li><a href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
   <li><a href="#" onclick="window.print(); return false;"><i class="far fa-print"></i></a></li> 
</ul>

<!-- <script>
	function copyText() {

   // Copy the text inside the text field
      navigator.clipboard.writeText("<?php the_permalink() ?>");

  }
</script> -->