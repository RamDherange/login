<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>registration list</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     
</head>
<body>
	<?php 
		$servername="localhost";
        $username="root";
        $password="";
        $dbname="trip";
        
        $con = mysqli_connect($servername,$username,$password,$dbname);
		$sqlnew="select * from freedom";
		$res=mysqli_query($con,$sqlnew);
		
	?>
	<div class="top mx-5">
	<nav class="navbar bg-light">
  <div class="container-fluid">
  <div class="text-end">
    <form class="d-flex" role="search">
		
      <input class="form-control me-2" id="myInput" onkeyup="myFunction()" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
      <button class="btn btn-outline-success " type="submit">Search</button>
	 
	</form>
	  </div>
      </div>
      </nav>
     
	 <table id="myTable" class="table table-bordered border-dark table table-hover table table-sm" border="1">
	 
	
		<tr>
			
			<th>Name</th>
			<th>Last Name</th>
			<th>Mobile</th>
			<th>Email Id</th>
			<th>Password</th>
			
		</tr>
		<?php while($row=mysqli_fetch_assoc($res)) { ?>   
		<tr>
			
			<td>
				<?php echo $row['fname'];?>
			</td>
			<td>
				<?php echo $row['lname'];?>
			</td>
			<td>
				<?php echo $row['mob'];?>
			</td>
			<td>
				<?php echo $row['mail'];?>
			</td>
			<td>
				<?php echo $row['pass'];?>
			</td>
		</tr>
	<?php } ?>
	</table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
		</div>
		<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>