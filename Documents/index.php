<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rute Terpendek</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
	body{
		margin: 0;
    padding: 0;
    font-family: sans-serif;
		background-image: url(img/fixbat.png);
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
		/* background-position: center center; */
		align: center;
	}

	/* form{
		background-color: #85d3c1;
	} */

	.box {
    width: 500px;
    position: absolute;
    left: 71%;
    text-align: center;
    transition: 0.25s;
		margin-top: 250px;
	}

	.box input[type="text"],
	.box input[type="password"] {
	    border: 0;
	    background: none;
	    display: block;
	    margin: 20px auto;
	    text-align: center;
	    border: 4px solid #fa3343;
	    padding: 10px 10px;
	    width: 250px;
	    outline: none;
	    color: white;
	    border-radius: 24px;
	    transition: 0.25s
	}

	.box h1 {
	    color: white;
	    text-transform: uppercase;
	    font-weight: 500
	}

	.box input[type="text"]:focus,
	.box input[type="password"]:focus {
	    width: 300px;
	    border-color: #2ecc71;
			background-color: #36ab9c;
	}

	.box input[type="submit"] {
	    border: 0;
	    background: none;
	    display: block;
	    margin: 20px auto;
	    text-align: center;
	    border: 2px solid #2ecc71;
	    padding: 14px 40px;
	    outline: none;
	    color: white;
	    border-radius: 24px;
	    transition: 0.25s;
	    cursor: pointer
	}

	.box input[type="submit"]:hover {
	    background: #2ecc71
	}

	#judul{
			font-size: 30px;
	}

	label{
		font-size: 25px;
	}
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="box">
						<div>
							<!-- <center>
								<img src="img/gambar2.jpeg" alt="">
							</center> -->
						</div>
							<div class="rounded" style="text-align: center;">
					      <form method="post">
									<div>
										<strong>
										<label id="judul">Silahakan masukan tujuan anda</label>
									</div>
			            <div class="form-group">
			                <label>Titik pertama:</label>
			                <input type="text" name="fnum" value="<?=isset($_POST['fnum'])?>">
			            </div>
			            <div class="form-group">
			                <label>Titik tujuan:</label>
			                <input type="text" name="lnum" value="<?=isset($_POST['flnum'])?>">
			            </div>
			            <button type="submit" name="submit" class="btn btn-success">Submit</button>
				        </form>
								<center><label><?php include "fungsi.php"; ?></label></center>
									</strong>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
</body>
</html>
