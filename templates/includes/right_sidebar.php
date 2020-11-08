<!-- right sidebar starts here -->

<div class="right-sidebar">
                <div class="sidebar-top">
                    <div class="add-topic">
                        <h5>Post new Topic</h5>
                    </div>
                    <div class="sidebar-items sidebar-logout">
                        <form action="logout.php" method="POST">
                            <?php if(isLoggedIn()): ?>
                            <button name="doLogOut">Logout</button>
                            <?php else: ?>
                            <h6><a href="<?php echo BASE_URL;?>login.php">LogIn</a></h6>
                            <?php endif;?>
                        </form>
                    </div>
                    <div class="user-all-topics sidebar-items">
                        <h6>
                            <i class="fas fa-paste"></i> All Discussion
                        </h6>
                    </div>
                    <div class="sidebar-items">
                        <h6>Interested Topics</h6>    
                    </div>
                    <div class="sidebar-items user-teams">
                        <h6>My Teams</h6>
                        <i class="fas fa-user-friends"></i>
                    </div>
                </div>

                <div class="sidebar-middle">
                    <div class="sidebar-items create-forume">
                        <?php if(isLoggedIn()):?>
                        <a href="<?php echo BASE_URL;?>create_topic.php"><h6><i class="fas fa-clipboard"></i> Create a new Topic</h6></a>
                        <?php else: ?>
                        <a href="login.php" class="login-alert-text"><h6>Please Login to create new topc</h6></a>
                        <?php endif;?>
                    </div>
                </div>

            </div>

</section>
            <!-- right sidebar ends here -->