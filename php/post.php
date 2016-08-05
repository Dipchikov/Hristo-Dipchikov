<article class="post">

	<!-- Plugins Post Begin -->
	<?php Theme::plugins('postBegin') ?>

	<!-- Post's header -->
	<header>
			<div class="title">
			<h1 class="post-title"><a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a></h1>
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
	<?php echo $Post->content() ?>

	<!-- Post's footer -->
	<footer>

		<!-- Post's tags -->
		<div class="post-tags"><ul class="stats">
		<strong><?php $Language->p('Tags') ?></strong>
		<?php
			$tags = $Post->tags(true);

			foreach($tags as $tagKey=>$tagName) {
				echo '&nbsp;|&nbsp<li><a href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a></li>';
			}
		?>
		</ul></div>
	</footer>

	<!-- Plugins Post End -->
	<div class="share_wrap">
	<?php Theme::plugins('postEnd') ?>
</div>
<script>
 var isNS = (navigator.appName == "Netscape") ? 1 : 0;
  if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
  function mischandler(){
   return false;
 }
  function mousehandler(e){
     var myevent = (isNS) ? e : event;
     var eventbutton = (isNS) ? myevent.which : myevent.button;
    if((eventbutton==2)||(eventbutton==3)) return false;
 }
 document.oncontextmenu = mischandler;
 document.onmousedown = mousehandler;
 document.onmouseup = mousehandler;
  </script>
  <script type="text/JavaScript">
//courtesy of BoogieJack.com
function killCopy(e){
return false
}
function reEnable(){
return true
}
document.onselectstart=new Function ("return false")
if (window.sidebar){
document.onmousedown=killCopy
document.onclick=reEnable
}
</script>
</article>
