
	<style>
		body{
			color: #000;
		}
	footer{
		background-color: #eee;
		display: flex;
		flex-wrap: nowrap;
		width: 100%;
		margin-top: 100px;
		flex-direction: row;
		padding: 20px 50px;
		justify-content: space-between;
		background: #FFFFE0;
	}
	footer .logo-msg{
		display: flex;
		padding: 10px 0;
		flex-direction: column;
		width: 30%;
	}
	.image{
		margin: 0 auto;
		padding-bottom: 10px;
	}
	.prancheta{
		width: 100%;
		max-width: 200px;
	}
	.txt{
		text-align: center;
	}
	.meio{
		display: flex;
		padding: 15px 10px;
		flex-direction: column;
		width: 30%;
		border-left: 1px solid #daa520;
		border-right: 1px solid #daa520;
	}
	.final{
		display: flex;
		padding: 10px 10px;
		flex-direction: column;
		width: 30%;
	}
	.final h3{
		text-align: center;
	}
	.meio h3{
		text-align: center;
	}
	.ul-nomes{
		display: flex;
		flex-direction: column;
		
	}
	.ul-nomes li{
		padding-top: 10px;
		text-align: center;
	}
	.ul-nomes li:last-child{
		padding-bottom: 10px;
	}
	.ul-nomes h4{
		text-align: center;
		padding-top: 10px;
	}
	.final .ul-redes{
		display: flex;
		flex-direction: column;
	}
	.ul-redes .item-rede{
		font-size: 1.2rem;
		display: flex;
		margin: 0 auto;
		align-items: center;
		padding-top: 20px;
		justify-content: space-between;
		width: 40%;
	}
	.ul-redes .item-rede i{
		padding: 5px;
	}
	
	li:hover, a:hover{
		color: #daa520 ;
	}
	@media screen and (max-width: 750px) {
		footer{
			flex-wrap: wrap;
		}
		footer .logo-msg, .meio,  .final{
			width: 90%;
			margin: 15px auto;
			border-bottom: 1px solid #222;
			background-color: #FFFFE0;
		}
		footer .meio{
			order: 3;
			border: none;
			margin-bottom: 0px;
		}
		.prancheta{
			width: 100%;
			max-width: 300px;
	}
	}
	</style>
    <link rel="stylesheet" type="text/css" href="../css/fonta/fontawesome-all.min.css">
<footer>

	<div class="logo-msg">

		<div class="image">
			<img src="../img/Prancheta1.png" class="prancheta" alt="Prancheta1">
		</div>
		<div class="txt">
			<p>Sua arte preferida em forma digital.</p>
		</div>
	</div>

	<div class="meio">
		<div class="nomes">
			<ul class="ul-nomes">
			<h3>Renascentistas</h3>
				<li>Camylly F.</li>
				<li>Gabriely B.</li>
				<li>Guilherme D.</li>
				<li>Vitória G.</li>
				<h4>Todos os direitos reservados.</h4>
			</ul>
		</div>
	</div>

	<div class="final">
		<div class="redes">
			<ul class="ul-redes">
				<h3>Nos encontre nas redes sociais
				</h3>
					<li class="item-rede" >
						<a href="">Facebook</a>
						<i class="fab fa-facebook-square"></i>
					</li>
					<li class="item-rede">
						<a href="">Instagram</a>
						<i class="fab fa-instagram"></i>
					</li>
					<li class="item-rede">
						<a href="">Linkedin</a>
						<i class="fab fa-linkedin"></i>
					</li>
				</ul>
		</div>
	</div>
</footer>