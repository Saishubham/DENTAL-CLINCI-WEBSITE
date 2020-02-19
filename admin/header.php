
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
              <a class="navbar-brand" href="#">Task Manager</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <?php 
				  if(isset($_SESSION['user_id'])){
					  ?>
                  <li class="nav-item <?php if($page=="home" || $page==""){ echo "active"; } ?>">
                    <a class="nav-link" href="?page=home">Home</a>
                  </li>
                   <li class="nav-item <?php if($page=="department"){ echo "active"; } ?>">
                    <a class="nav-link" href="?page=department">Department</a>
                  </li>
                  <li class="nav-item <?php if($page=="addtask"){ echo "active"; } ?>">
                    <a class="nav-link" href="?page=addtask">Add Task</a>
                  </li>
                  <li class="nav-item <?php if($page=="viewtasks"){ echo "active"; } ?>">
                    <a class="nav-link" href="?page=viewtasks">View Tasks</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                  </li>
                  <?php
				  }
				  ?>
                </ul>
              </div>  
            </nav>