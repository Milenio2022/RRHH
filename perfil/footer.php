<!-- script-for sticky-nav -->
<script>
	$(document).ready(function() {
		var navoffeset = $(".header-main").offset().top;
		$(window).scroll(function() {
			var scrollpos = $(window).scrollTop();
			if (scrollpos >= navoffeset) {
				$(".header-main").addClass("fixed");
			} else {
				$(".header-main").removeClass("fixed");
			}
		});

	});
</script>


<!--COPY rights end here-->
</div>
</div>

<div class="sidebar-menu">
	<header class="logo1">
		<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
	</header>
	<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
	<div class="menu">
		<ul id="menu">
			<li><a href="home.php"><i class="fa fa-tachometer"></i> <span>Dashboard </span>
					<div class="clearfix"></div>
				</a></li>

			<li><a href="#"><i class="fa fa-user"></i><span>Empleado</span><span class="fa fa-angle-right" style="float: right"></span>
					<div class="clearfix"></div>
				</a>
				<ul>
					<li><a href="employeeadd.php">Agregar Empleado</a></li>
					<li><a href="employeeview.php">Ver Empleado</a></li>
					<li><a href="atten.php">Detalles de asistencia</a></li>
												<li><a href="modifiedlogout.php">Hora de cierre de sesión modificada</a></li>
												<li><a href="inquiry.php">Consulta</a></li> -->
				</ul>
			</li>
			<li><a href="leaverequest.php"><i class="fa fa-pagelines"></i><span>Permiso</span></a>

			</li>


			<li id="menu-academico"><a href="changepassword.php"><i class="fa fa-cogs"></i><span>Cambiar Contraseña</span></a>
				<span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div>
										 <ul id="menu-academico-sub">
											<li id="menu-academico-avaliacoes" ><a href="changepassword.php">Cambiar la Contraseña</a></li>
											

										  </ul> 
			</li>

			<li><a href="#"><i class="fa fa-check-square-o nav_icon"></i><span>Forms</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										  	<ul>
												<li><a href="employeeadd.php">All Employee</a></li>
											</ul>
										</li> -->

			<li><a href="#"><i class="fa fa-list"></i><span>Configuración</span> <span class="fa fa-angle-right" style="float: right"></span>
					<div class="clearfix"></div>
				</a>
				<ul>
					<li><a href="city.php">Ciudad</a></li>
					<li><a href="state.php">Departamento</a></li>
					<li><a href="country.php">País</a></li>
					<li><a href="position.php">Cargo</a></li>
				</ul>
			</li>

		</ul>
	</div>
</div>
<div class="clearfix"></div>
</div>
<script>
	var toggle = true;

	$(".sidebar-icon").click(function() {
		if (toggle) {
			$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
			$("#menu span").css({
				"position": "absolute"
			});
		} else {
			$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
			setTimeout(function() {
				$("#menu span").css({
					"position": "relative"
				});
			}, 400);
		}

		toggle = !toggle;
	});
</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- /Bootstrap Core JavaScript -->

</body>

</html>