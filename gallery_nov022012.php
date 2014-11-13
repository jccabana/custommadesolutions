<?
	$page = "gallery";
	include('includes/header.php');
?>
		
		<div id="content" class="no-sidebar">
			<div id="title" class="type-2">
				
			</div>
			
			<div class="main">
						<h1 class="red">PROJECT GALLERY</h1>
						<p></p>
						<script type="text/javascript">
							$( function()
							{
								$('.post-nav').each( function()
								{
									setup_pagination($(this).children('li.prev'), $(this).prev('ul.media'), 'quicksand/pages/items-simple/page');
									setup_pagination($(this).children('li.next'), $(this).prev('ul.media'), 'quicksand/pages/items-simple/page');
								});
							});
						</script>
						<ul class="media">
							<?PHP for($i=1;$i<17;$i++){ ?>
							<li data-id="aa"><a href="media/db/<?PHP echo $i; ?>.jpg" rel="lightbox" class="frame-holder"><img src="media/db/thumb.php?src=<?PHP echo $i; ?>.jpg&w=200&h=285" alt="" width="200" height="285" /></a></li>
							 <? } ?>
						</ul>			
			</div>
			
			<div class="sidebar">
			</div>
		</div>
		<!-- #content - end -->

<?
	include('includes/footer.php');
?>