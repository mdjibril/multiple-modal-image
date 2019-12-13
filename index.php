<?php  

	include 'connect.php';
	include 'header.php';
	include 'modal.style.php';
		
	echo "<p>Multiple Modal Images on a Single page</p>";
	$output1 = "SELECT * FROM imagetb";
	$result1 = $con->query($output1) or die($con->error);

	echo "<div>";
	while ($row = $result1->fetch_assoc()) {

		$imageId = $row['imageId'];
		$imageName = $row['imageName'];
		

		echo "<div>";
		$dir = "images/".$imageId."/";
		$open = opendir($dir);

		while (($file = readdir($open)) != false) {
			if ($file != "." && $file != ".." && $file != "Thumbs.db") {
				echo"<img id='$imageId' src='$dir/$file' alt='$imageName' style='height:300px; width:200px; border-radius: 10%;'>
			            ";
			}
		}

		echo "<h4 style='text-align:center' id='".$imageId."'>".$imageName."</h4>";
			
		echo "
			<!-- The Modal -->
		    <div id='myModal' class='modal'>
		        <span class='close'>&times;</span>
		        <img class='modal-content' id='img01' style='height:300px; width:200px; border-radius: 10%;'>
		        <div id='caption'></div>
		    </div>
		";
		echo "</div>";
		echo "
			<script>
		        // Get the modal
		        var modal = document.getElementById('myModal');

		        // Get the image and insert it inside the modal - use its 'alt' text as a caption
			    var img = document.getElementById('$imageId');
			    var modalImg = document.getElementById('img01');
			    var captionText = document.getElementById('caption');
			    img.onclick = function(){
			      	modal.style.display = 'block';
			        modalImg.src = this.src;
			        captionText.innerHTML = this.alt;
			    }

			    // Get the <span> element that closes the modal
			    var span = document.getElementsByClassName('close')[0];

			    // When the user clicks on <span> (x), close the modal
			    span.onclick = function() { 
			        modal.style.display = 'none';
			    }
		   	</script>
		";
	}
	echo "</div>";
?>