<!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                
                    <p class="centered"><a href="profile.html"><img src="assets/img/ui-zac.jpg" class="img-circle" width="60"></a></p>
                    <h5 class="centered">Zac Schneider</h5>
                      
                    <li class="mt">
                        <a href="studentIndex.php" <?php if ($pg == 'index.php') echo 'class= \'active\''; ?> >
                            <i class="fa fa-home"></i>
                            <span>
                                Home
                            </span>
                        </a>
                    </li>

                    <li class="mt">
                        <a href="attendance.php" <?php if ($pg == 'attendance.php') echo 'class= \'active\''; ?>>
                            <i class="fa fa-check"></i>
                            <span>Attendance</span>
                        </a>
                    </li>


                    <li class="mt">
                        <a href="notifications.php" <?php if ($pg == 'notifications.php') echo 'class= \'active\''; ?>>
                            <i class="fa fa-bell-o"></i>
                            <span>Notifications</span>
                        </a>
                    </li>

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
<!--sidebar end-->