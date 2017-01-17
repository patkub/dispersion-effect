<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#E64A19">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antuple</title>
    <link rel="author" href="https://antuple.net">
    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/application.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css">
	<link rel="stylesheet" href="assets/dark.css">
</head>

<body>
    <div class="jumbotron">
        <div class="container">
            <h1>Dispersion Effect</h1>
			<h2>By Patrick Kubiak</h2>
            <p>
                <a href="/" target="_blank" class="btn btn-primary btn-lg"><i class="fa fa-link"></i> Antuple</a>
            </p>
        </div>
    </div>
    <div class="container">
		
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Photoshop Disperion Effect Tutorial</h3>
			</div>
			<div class="panel-body">
				Make objects disperse and splatter.
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Walkthrough</h3>
					</div>
					<div class="panel-body">
						<!-- insert tutorial here -->
						<a href="assets/download/tutorial.pdf" target="_blank" class="btn btn-danger btn-lg"><i class="fa fa-book fa-5x"></i></a><br>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Brushes</h3>
					</div>
					<div class="panel-body">
						<!-- insert brushes here -->
						<a href="assets/download/particle_brushes.abr" target="_blank" class="btn btn-danger btn-lg"><i class="fa fa-paint-brush fa-5x"></i></a><br>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Starter Kit</h3>
					</div>
					<div class="panel-body">
						<!-- insert starter kit here -->
						<a href="assets/download/starter_kit.psd" target="_blank" class="btn btn-danger btn-lg"><i class="fa fa-download fa-5x"></i></a><br>
					</div>
				</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Step 1</div>
			<div class="panel-body">
			Grab an image of a character.
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Step 2</div>
			<div class="panel-body">
			Use the quick selection tool to select only the character.
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Step 3</div>
			<div class="panel-body">
			Select > Refine Edge and tweak the settings to create a smooth edge for the selection. Set smooth to about 20.<br>
			<a onclick="toggler('refine_edge');" class="btn btn-info">Where is Select > Refine Edge?</a>
			<div id="refine_edge" style="display:none;">
				<img src="assets/checkpoints/step3.jpg" class="img-responsive img-rounded" style="margin: 10px auto 10px auto;">
			</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Step 4</div>
			<div class="panel-body">
			Copy the selected character onto a new layer.
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Step 5</div>
			<div class="panel-body">
			Duplicated the character layer. You should now have 2 layers with your cut out character.
			</div>
		</div>
		
		<div class="panel panel-warning">
			<div class="panel-heading">
			<h3 class="panel-title">Checkpoint 1</h3>
			</div>
			<div class="panel-body">
				<a href="assets/checkpoints/checkpoint1.jpg" data-toggle="lightbox" data-gallery="steps" data-title="Checkpoint 1"><img src="assets/checkpoints/checkpoint1.jpg" class="img-responsive img-rounded" style="margin: 0 auto 10px auto;"></a>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Step 6</div>
			<div class="panel-body">
			Resize the top character layer so that you have a normal and big character.
			</div>
		</div>
		
		<div class="panel panel-warning">
			<div class="panel-heading">
			<h3 class="panel-title">Checkpoint 2</h3>
			</div>
			<div class="panel-body">
				<a href="assets/checkpoints/checkpoint2.jpg" data-toggle="lightbox" data-gallery="steps" data-title="Checkpoint 2"><img src="assets/checkpoints/checkpoint2.jpg" class="img-responsive img-rounded" style="margin: 0 auto 10px auto;"></a>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Step 7</div>
			<div class="panel-body">
			Move the big character layer underneath the original character.
			</div>
		</div>
		
		<div class="panel panel-warning">
			<div class="panel-heading">
			<h3 class="panel-title">Checkpoint 3</h3>
			</div>
			<div class="panel-body">
				<a href="assets/checkpoints/checkpoint3.jpg" data-toggle="lightbox" data-gallery="steps" data-title="Checkpoint 3"><img src="assets/checkpoints/checkpoint3.jpg" class="img-responsive img-rounded" style="margin: 0 auto 10px auto;"></a>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Step 8</div>
			<div class="panel-body">
				On the second layer, Filter > Liquify with <span class="text-success">brush size of about 175</span>.<br>
				Drag the brush left to right.<br>
				<a onclick="toggler('liquify');" class="btn btn-info">Where is Filter > Liquify?</a>
				<div id="liquify" style="display:none;">
					<img src="assets/checkpoints/step8.jpg" class="img-responsive img-rounded" style="margin: 10px auto 10px auto;">
				</div>
			</div>
		</div>
		
		<div class="alert alert-success">
			<strong>Well done!</strong> This creates a big area for us to use as a base for the dispersion. You should end up with something like this:
		</div>
		
		<div class="panel panel-warning">
			<div class="panel-heading">
			<h3 class="panel-title">Checkpoint 4</h3>
			</div>
			<div class="panel-body">
				<a href="assets/checkpoints/checkpoint4.jpg" data-toggle="lightbox" data-gallery="steps" data-title="Checkpoint 4"><img src="assets/checkpoints/checkpoint4.jpg" class="img-responsive img-rounded" style="margin: 0 auto 10px auto;"></a>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Step 9</div>
			<div class="panel-body">
				Duplicate the liquefied layer
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Step 10</div>
			<div class="panel-body">
				Add a vector mask to both layers
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Step 11</div>
			<div class="panel-body">
				Fill one of the vector masks black, and the other white. Make sure the layer with the black vector mask is on top.
			</div>
		</div>
		
		<div class="panel panel-warning">
			<div class="panel-heading">
			<h3 class="panel-title">Checkpoint 5</h3>
			</div>
			<div class="panel-body">
				<a href="assets/checkpoints/checkpoint5.jpg" data-toggle="lightbox" data-gallery="steps" data-title="Checkpoint 5"><img src="assets/checkpoints/checkpoint5.jpg" class="img-responsive img-rounded" style="margin: 0 auto 10px auto;"></a>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Step 12</div>
			<div class="panel-body">
				Import the particle_brushes.abr file.
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Step 13</div>
			<div class="panel-body">
				Select your favorite particle brush. You may use more than one particle brush.
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Step 14</div>
			<div class="panel-body">
				Paint with the brush only on the layer masks. It is best to paint by clicking instead of dragging.<br>
				<span class="text-success">To make pixels appear: paint with a white brush on the black layer mask.</span><br>
				<span class="text-danger">To make pixels disappear: paint with a black brush on the white layer mask.</span>
			</div>
		</div>
		
		<div class="alert alert-info">
			<h4>Tip</h4>
			<p>It is best to paint by clicking instead of dragging. Play around with the type, size and opacity of the brush.</p>
		</div>
		
		<div class="alert alert-success">
			<h4>Result</h4>
			<p>You may end up with something like this:</p>
		</div>
		
		<div class="panel panel-warning">
			<div class="panel-heading">
			<h3 class="panel-title">Finished Product</h3>
			</div>
			<div class="panel-body">
				<a href="assets/checkpoints/checkpoint6.jpg" data-toggle="lightbox" data-gallery="steps" data-title="Finished Product"><img src="assets/checkpoints/checkpoint6.jpg" class="img-responsive img-rounded" style="margin: 0 auto 10px auto;"></a>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-body">
				Taken from: <a href="http://www.infoparrot.com/how-to-create-dispersion-effect-with-photoshop/">http://www.infoparrot.com/how-to-create-dispersion-effect-with-photoshop/</a>
			</div>
		</div>
		
		
		<div class="page-header page-banner"></div>
		<div id="footer">
			<ul class="list-inline pull-right">
				<li><a target="_blank" href="https://github.com/patkub"><i class="fa fa-github"></i></a></li>
			</ul>
			<small>&copy; <?php echo date("Y") ?> Patrick Kubiak</small>
		</div>
    </div>
</body>

<!-- jQuery -->
<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>

<!-- Bootstrap Latest compiled and minified JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!-- ekko-lightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js"></script>


<script>
function toggler(divId) {
    $("#" + divId).toggle();
}

$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
</script>

</html>
