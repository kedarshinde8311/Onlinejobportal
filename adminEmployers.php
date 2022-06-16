<?php 
include('header.php');
include('connection.php');
$query ="SELECT * FROM employers";


$result = mysqli_query($conn, $query);

?>
<br>
<div class="container">
<div class="row mb-5">
	<div class="col-lg-6">
    <h1>Employers<h1>
	</div>
  <div class="col-lg-4 text-right">
    <form class="navbar-form">
 
      <input type="text" id="myInput" onkeyup="myFunction()" class="form-control"  placeholder="Search..." autocomplete="off">
    </form>
</div>

</div>

  <table class="table table-striped" id="myTable">
   <thead>
      <tr>
        <th>No</th>
        <th> Name</th>
        <th> Address</th>
        <th> Hrname</th>
        <th> Contact</th>
        <th>Email</th>
        <th>Website</th>
      </tr>
    </thead>
    </div>
<?php
    $count = 1;
    if($result!=null)
    {
    while($row = mysqli_fetch_assoc($result)) {

?>
<tr>
    <td><?php echo $count; ?></td>
    <td><?=  $row['name']; ?></td>
    <td><?=  $row['address']; ?></td>
    <td><?=  $row['hrname']; ?></td>
    <td><?=  $row['contact']; ?></td>
    <td><?=  $row['email']; ?></td>
    <td><?=  $row['website']; ?></td>
  
</tr>
<?php
   
$count++; 
}
    }
?>
</tbody>
</table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");
		for (i = 1; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td");
			var show = false;
			for (j = 0; j < td.length; j++) {    
				if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
					show = true;
					break;
				}
			}
			if(show)
				tr[i].style.display = "";
			else
				tr[i].style.display = "none";
		}
	}
</script>
