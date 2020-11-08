<?php include('includes/header.php');?>

<section id="main">
        <main>
            <div class="main-content">
                <div class="main-content-topic">
                    <div class="user-avatar user-topic-avatar">
                        <img src="<?php echo BASE_URL;?>templates/img/<?php echo $topic->image;?>" alt="user-name">
                        <p class="user-name"><?php echo $topic->username;?></p>
                    </div>
                    <article class="user-posted-topic">
                        <div class="topic-body">
                            <h3 class="topic-title"><?php echo $topic->topic_title;?></h3>
                            <p class="topic-desc">
                            <?php echo $topic->topic_body;?>
                            </p>
                        </div>
                    </article>
                </div>
                <div class="reply-heading">
                    <h5 class="replies-heading">Replies <hr></h5>
                </div>
                <!-- Replies start here -->
                <div class="main-content-replies">
                <?php if($replies != null):?>
                <?php foreach($replies as $reply):?>
                    <article class="recommanded-topics">
                        <div class="user-avatar user-info reply-avatar">
                            <img src="<?php echo BASE_URL;?>templates/img/avatar1.jpg" alt="user-name">
                            <p>RahulR</p>
                        </div>
                        <div class="topic-body">
                            <p class="topic-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat similique nesciunt quibusdam sed nemo obcaecati perspiciatis est, doloribus, itaque suscipit consectetur magnam maxime? Labore rem laboriosam qui facilis, saepe fugit.
                            </p>
                        </div>
                    </article>
                <?php endforeach;?>
                <?php else: ?>
                    <h3>No Replies to this Forum.</h3>
                <?php endif;?>
                </div>

                <!-- Replies ends here -->

                <!-- reply area starts here -->
                <div class="reply-box">
                <?php if(isLoggedIn()):?>
                    <form action="#">
                        <textarea name="replybody" id="reply" cols="30" rows="10"></textarea>
                        <script>
                            CKEDITOR.replace('reply');
                        </script>

                        <button class="submit-reply-btn">Reply</button>
                    </form>
                <?php else:?>
                    <a href="login.php" class="login-alert-text"><h4>Please Login Reply</h4></a>
                </div>
                <!-- end of reply area -->
            
            <?php endif;?>
            </div>
        </main>




<?php include('includes/right_sidebar.php');?>
<?php include('includes/footer.php');?>