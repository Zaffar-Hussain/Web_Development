<!DOCTYPE html>
<html>
<head>
	<title>Contact form</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
  		<center>
  			<h2>User Contact Details</h2>
  		</center>        
  		<table class="table table-hover">
      		<thead>
        		<tr>
          		<th>Name</th>
          		<th>Phone</th>
          		<th>Email</th>
          		<th>Comment</th>
        		</tr>
      		</thead>
      		<tbody>
            <?php 
                foreach ($contact_details as $contact): 
            ?>
                <tr>
                    <td><?php print htmlentities($contact->name); ?></td>
                    <td><?php print htmlentities($contact->phone_number); ?></td>
                    <td><?php print htmlentities($contact->email); ?></td>
                    <td><?php print htmlentities($contact->message); ?></td>     
                </tr>
            <?php endforeach; ?>
            </tbody>
    	</table>	
	</div>
</body>
</html>