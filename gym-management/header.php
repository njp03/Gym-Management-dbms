    <header>
        <nav>
            <div class="main-wrapper">
                <div class="jumbotron"
                    style="border-radius:0;background:none;background-size:cover;height:0px;position:relative;">
                    <div class="container-fluid" style="position: fixed;width: 100%;top: 0;background: #0f350b;left: 0;padding:10px 30px;z-index:10">
                        <div class="row">
                            <div class="col-md-11">
                               <h2><a href="admin-panel.php" style="text-decoration:none;color:white;">GYM Management</a></h2>
                            </div>
                            <div class="col-md-1">

                                <div class="nav-login">
                                    <?php
				        if (isset($_SESSION['u_id'])) {
                          echo '<form action="includes/index.php" method="POST">
                          <button type="submit" class="btn btn-primary" name="submit" value="Logout">
					            
					              </form>';	
                                 } else{
							
							echo '<form action="includes/index.php" method="POST">
                              
                               						
				                </form>
				              <a href="index.php" class="btn btn-light" >Logout</a>';
							
						}
				   
				    ?>


                                </div>
                            </div>
                        </div>
                    </div>
        </nav>
    </header>