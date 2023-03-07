<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 4">
            <div class="navbar-header">
                
                <style>
                 .navbar.navbar-default.navbar-cls-top {
                    background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(70,252,88,1) 100%);
}   
                    .navbar-default.navbar-side {
                        background-color: #007bff;
                        
                                                    }
                    .sidebar-collapse{
                     background-color: #007bff;
                         }

                     .navbar-toggle   {
                        background-color: #007bff;

                     }
                    
                                                   
                </style>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <a class="navbar-brand" href="index.php">DASHBOARD EVENTOS </a>
            </div>

        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
        <br> <br> 
           <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <!-- <div class="user-img-div">
                            <img src="img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $_SESSION['rainbow_name'];?>
                            <br />
                               
                            </div>
                        </div> -->

                    </li>


                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Home </a>
                    </li>
					
					 <li>
                        <a href="paquetes.php"><i class="fa fa-cutlery fa-3x "></i>Paquetes</a>
                    </li>
					
					 <li>
                        <a href="eventos.php"><i class="fa fa-calendar fa-3x"></i>Eventos</a>
                    </li>
					<li>
                        <a href="fees.php"><i class="fa fa-cubes fa-3x"></i>Servicios</a>
                    </li>
					 <li>
                        <a href="report.php"><i class="fa fa-table  fa-3x "></i>Ver resumen </a>
                    </li>
					
					 
					
					<li>
                        <a href="#"><i class="fa fa-cogs "></i>PANEL ADMIN</a>
                    </li>
					
					 <li>
                        <a href="#"><i class="fa fa-power-off "></i>Cerrar Sesión</a>
                    </li>
					
			
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->