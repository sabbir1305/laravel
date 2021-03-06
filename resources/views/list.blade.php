<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todo List</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

<br>
	<div class="container">
			<div class="row">
				<div class="col-lg-offset-3 col-lg-3">
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">Todo List <a href="#" class="pull-right" data-toggle="modal" data-target="#myModal"><i class=" fa fa-plus" aria-hidden="true"></i> </a> </h3>
					  </div>
					  <div class="panel-body">
					    <ul class="list-group">
					      <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal" >Cras justo odio</li>
					      <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Dapibus ac facilisis in</li>
					      <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Morbi leo risus</li>
					      <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Porta ac consectetur ac</li>
					      <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Vestibulum at eros</li>
					    </ul>
					  </div>
					</div>
				</div>
			</div>
		</div>	

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Add New Item</h4>
		      </div>
		      <div class="modal-body">
		        <p> <input type="text" placeholder="Insert your list" id="addItem" class="form-control" > </p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal" style="display: none" >Delete</button>
		        <button type="button" class="btn btn-primary" id="saveChanges" style="display: none">Save changes</button>
		        <button type="button" class="btn btn-primary" id="addBtn">Add Item</button>

		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->




 	 	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
 				  crossorigin="anonymous"></script>

 	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity=" sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 	    <script type="text/javascript">
 	    	$(document).ready(function() {
 	    		$('.ourItem').each(function() {
 	    			$(this).click(function(event) {
 	    				var text = $(this).text('text');
 	    				$('#title').text('Edit item');
 	    				$('#addItem').val(text);
 	    				$('#delete').show('400'); 
 	    				$('#saveChanges').show('400');
 	    				$('#addBtn').hide('400');
 	    				
 	    				


 	    		});
 	    	});
 	    </script>


</body>

</html>