<!-- For each post on this page -->
<?php foreach ($posts as $Post): ?>

<article class="post">

	<!-- Show plugins, Hook: Post Begin -->
	<?php Theme::plugins('postBegin') ?>

	<!-- Post's header -->
	<header>
		<!-- Post's title  -->
		<div class="title">
			<h1 class="post-title"><a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a></h1>
		<!-- Post's date, author name and author avatar -->
				<div class="post-published">
				<?php
	                	$User = $Post->user();
	                	$author = $User->username();
				if( Text::isNotEmpty($User->firstName()) || Text::isNotEmpty($User->lastName()) ) {
					$author = $User->firstName().' '.$User->lastName();
				}
			?>
			<time><?php echo $Post->date() ?></time>&nbsp;|&nbsp
			<span  class="name"><?php echo $author ?></span>
		</div>			
		<!-- description -->
			<p><?php echo $Post->description() ?></p>
		</div>


	</header>

	<!-- Cover Image -->
	<?php
		if($Post->coverImage()) {
			echo '<a href="'.$Post->permalink().'" class="image featured"><img src="'.$Post->coverImage().'" alt="Cover Image"></a>';
		}
	?>

	<!-- Post's content, the first part if has pagebrake -->
	<?php echo $Post->content(false) ?>

	<!-- Post's footer -->
	<footer>

		<!-- Read more button -->
		<div class="readmore">
	        <?php if($Post->readMore()) { ?>
			<a href="<?php echo $Post->permalink() ?>"><?php $Language->p('Read more') ?></a>
		
		<?php } ?>
</div>
		<!-- Post's tags -->
		<div class="post-tags"><ul class="stats">
		<strong><?php $Language->p('Tags') ?></strong>
		<?php
			$tags = $Post->tags(true);

			foreach($tags as $tagKey=>$tagName) {
				echo '&nbsp;|&nbsp<a href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a></li>';
			}
		?>
		</ul></div>
	</footer>

	<!-- Show plugins, Hook: Post End -->
	<?php Theme::plugins('postEnd') ?>

</article>

<?php endforeach; ?>

<!-- Pagination -->
<ul class="actions pagination">
<?php
	if( Paginator::get('showNewer') ) {
		echo '<li><a href="'.Paginator::urlPrevPage().'" class="button  previous">По-нови публикации</a></li>';
	}

	if( Paginator::get('showOlder') ) {
		echo '<li><a href="'.Paginator::urlNextPage().'" class="button  next">По-стари публикации</a></li>';
	}
?>
</ul>