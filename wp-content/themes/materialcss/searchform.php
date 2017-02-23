<form method="get" id="searchform" action="<?php echo home_url(); ?>/" class="searchform">
	<a href="#" id="searchClose" style="display:none;"><i class="material-icons">clear</i></a>
  <input type="search" name="s" id="s" 
 onclick="this.focus()" placeholder="<?php 
	if ($_GET["s"] !=null) {
			echo $_GET["s"];
		} else {
			_e('Search', 'fullby');
		}
	?>">
  <!-- <button type="submit" value="Submit" class="waves-effect waves-light btn darken-2 white-text text-lighten-4"><i class="icon-search"></i></button> -->
</form>