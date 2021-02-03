

<div class="col-md-4">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>
	<?php if (is_active_sidebar('sidebar')): ?>
	<?php dynamic_sidebar('sidebar');?>
	<?php endif; ?>


    </div>

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
	<div class="container">
  <p>&copy; <?php echo Date('Y');?> - <?php bloginfo('name')?> .</p>
  <?php bloginfo('description');?>
  <p>
    <a href="#">Back to top</a>
  </p></div>
</footer>
<?php wp_footer();?>
<script src="js/bootstrap.min.js"></script>
  </body>

</html>