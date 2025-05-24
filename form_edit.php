<?php 
	$id= $_GET['id_edit'];
	include "koneksi.php";
	$data = $conn->query("select * from tbl_resapi where id = '$id'");

	$value= $data->fetch_assoc();
?>
<h1>Edit Resep</h1>

	<form method='POST' action="edit.php">
		 
		 <div class="form-group">
		    <label for="id">Id Resep</label>
			<input type="text" class="form-control" name="id" value="<?php echo $value['id'] ?>" readonly>
		</div>
		<div class="form-group">
		    <label for="Judul">Judul</label>
		    <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $value['judul'] ?>" required >    
		</div>

		<div class="form-group">
			<label for="bahan">Bahan</label>
			<textarea class="form-control" name="bahan" rows="10" required id="bahan"><?php echo $value['bahan'] ?></textarea>
		</div>
		<div class="form-group">
			<label for="cara">Cara</label>
			<textarea class="form-control" name="cara" rows="10" id="cara" required ><?php echo $value['cara'] ?></textarea>
		</div>
		<div class="form-group">
			<label for="rasa">Rasa</label>
			<input class="form-control" name="rasa" rows="10" id="rasa" required ></input>
		</div>

        <br>
		<button type="submit" class="btn btn-warning">Edit</button>
	</form>