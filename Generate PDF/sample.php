<style type="text/css">
	table.page_header, table.page_footer{
		width: 100%;
		border: none;
		background-color: #245e8a;
		padding: 2mm;
		color: white;
	}
	div.note{
		color: #333;
		font-style: italic;
		width: 100%;
	}
	h1{
		text-align: center;
		font-size: 20mm;
	}
	h3{
		text-align: center;
		font-size: 14mm;
	}
	a{
		text-decoration: none;
		color: white;
	}
</style>

<?php
    session_start();
     
if(isset($_SESSION['name'])){
    
                }else{
                 header("Location:login.php?error=empty");
                 }
 ?>

<page backtop="14mm" backbottom="14mm" backleft="10mm" backright="10mm" style="font-size: 12pt;">
	<page_header>
		<table class="page_header">
			<tr>
				<td style="width: 50%; text-align: left;">This is the header
				</td>
				<td style="width: 50%; text-align: right;">this is the header (right)</td>
			</tr>
		</table>
	</page_header>
	<page_footer>
		<table class="page_footer">
			<tr>
				<td style="width: 33%; text-align: left;">
					<a href="#">this is the footer</a>
				</td>
				<td style="width: 34%; text-align: center;">
					Page [[page_cu]]/[[page_nb]]
				</td>
				<td style="width: 33%; text-align: right;">
					<?php echo date('d.m.y h.m.sA'); ?>
				</td>
			</tr>
		</table>
	</page_footer>
	<br><br><br><br><br><br><br><br><br><br>
	<div style="text-align: center; width: 100%;">
		<h3 style="font-style: italic; color: ##FF0000;"><?php echo $_SESSION['name']; ?></h3>
	</div>
	<br><br>
	<div class="note" style="text-align: center;">
		 o meu id: <?php echo $_SESSION['id']; ?><br>
		 o meu telemovel: <?php echo $_SESSION['phone']; ?>
	</div>
</page>