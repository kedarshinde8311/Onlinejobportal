<?php 
include('header.php');
include('connection.php');
$employer_id = $_COOKIE["id"];
$query ="SELECT J.*,Q.name AS qualificationname FROM jobs AS J,qualifications AS Q WHERE(Q.id=J.qualification_id) AND J.employer_id=" . $employer_id;
$query .= " ORDER BY J.id DESC";

$result = mysqli_query($conn, $query);

?>
<br>
<div class="container">
<div class="row mb-5">
	<div class="col-lg-6">
	</div>
  <div class="col-lg-4 text-right">
    <form class="navbar-form">
      <input type="text" id="myInput" onkeyup="myFunction()" class="form-control"  placeholder="Search..." autocomplete="off">
    </form>
</div>
<div class="col-lg-2 text-right">		
	<a style="background-color:#0099cc; color:white; padding:5px;" href="postjob.php">+ Add New</a>
	</div>
</div>
  <table class="table table-striped" id="myTable">
   <thead>
      <tr>
        <th style="width:150px;" class="text-center">Action</th>
        <th>No</th>
        <th> Title</th>
        <th> Interview Date</th>
		    <th> Interview Time</th>
        <th> Required Candidate</th>
        <th> Qualification</th>  
        <th> Gender</th>
        <th> Percentage</th> 
        <th> Min Experience</th>
        <th> Action</th> 
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
    <td class="text-center" style="width:100px;">
        <a href="postjob.php?id=<?=$row['id'];?>" title="click to edit">Edit</a>&nbsp;
	    	<a href="deletepostjob.php?id=<?=$row['id'];?>" style="color:red;" title="click to delete" onclick="return confirm('Sure to delete?');">Delete</a>
	  </td>
    <td><?php echo $count; ?></td>
    <td data-toggle="tooltip" data-placement="top" title="<?=  $row['description']; ?>"><?=  $row['title']; ?></td>
    <td><?=  $row['idate']; ?></td>
    <td><?=  $row['itime']; ?></td>
    <td><?=  $row['required_count']; ?></td>
    <td><?=  $row['qualificationname']; ?></td>
    <td><?=  $row['gender']; ?></td>
    <td><?=  $row['minperc']; ?>%</td>
    <td><?=  $row['minexp_year']; ?> Years <?=  $row['minexp_month']; ?> Months</td>
    <td class="text-center" style="width:100px;">
        <a href="jobcandidates.php?id=<?= $row['id']; ?>" style="color:blue;" title="candidates">Candidates</a>&nbsp;
	</td>
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
