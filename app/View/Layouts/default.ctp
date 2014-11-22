<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<?= $this->Html->meta('icon'); ?>
		<?= $this->fetch('meta'); ?>
		<?= '<title>'.$this->fetch('title').'</title>'; ?>
		<?= $this->Html->css('app'); ?>
		<?= $this->fetch('css'); ?>
	</head>

	<body>
		<div class="app-container">

			<?= $this->Session->flash(); ?>
			<?= $this->Session->flash('auth'); ?>

			<div class="container">
				<?= $this->fetch('content'); ?>
			</div>
			
		</div>
	</body>

	<?= $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'); ?>
	<?= $this->Html->script('app/app'); ?>
	<?= $this->fetch('script'); ?>
	
	<!-- Browser-Update.org -->
	<script type="text/javascript"> 

		var $buoop = {}; 
		$buoop.ol = window.onload; 

		window.onload=function() { 
			
			try { if ($buoop.ol) $buoop.ol(); }
			catch (e) {} 
			
			var e = document.createElement("script"); 
			e.setAttribute("type", "text/javascript"); 
			e.setAttribute("src", "//browser-update.org/update.js"); 
			document.body.appendChild(e); 
		} 
	</script> 
</html>
