<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title></title>
</head>
<body>

	<h1 style="font-size: 2rem;">Payment Receive mail</h1><br>


	<h4 style="font-size: 1rem;">Name: {{$first_name}} {{$last_name}}</h4><br>


	<h4 style="font-size: 1rem;">Name: {{$email}}</h4><br>

  
	<h4 style="font-size: 1rem;">Product :</h4><br>

	<table style="width: 25%;margin-bottom: 1rem;color: #212529;border: 1px solid #dee2e6;border-collapse: collapse;">
		<tr style="border: 1px solid #dee2e6;">
			<th>Price</th>
			<th>Name</th>
			<th>Quantity</th>
		</tr>

		<?php echo($order_details); ?>
		
	</table>

	<h4 style="font-size: 1rem;">payment_id:{{$payment_id}} </h4><br>



</body>
</html>