<?php include('includes/header.php');?>

<!-- Main section starts here -->
<section id="main">
        <main>
            <div class="main-content">
                <div class="filter-content">
                    <button class="filter-topics-btn">
                        Latest first <i class="fas fa-caret-down"></i>
                    </button>

                    <button class="mark-as-read-btn">
                        <i class="fas fa-check"></i> Mark all as read
                    </button>
                </div>

                <?php foreach($topics as $topic): ?>
                <!-- Topic start point -->
                <div class="main-content-topics">
                    <div class="topic-category">
                        <h5 class="topic-category-text">
                            <?php echo $topic->category_name;?>
                        </h5>
                    </div>
                    <article class="recommanded-topics">
                        <div class="break"></div>
                        <div class="user-avatar user-info">
                            <img src="<?php echo BASE_URL;?>templates/img/<?php echo $topic->image;?>" alt="user-name">
                            <p><?php echo $topic->username?></p>
                        </div>
                        <div class="break"></div>
                        <div class="topic-body">
                            <h3 class="topic-title"><?php echo $topic->topic_title;?></h3>
                            <p class="topic-desc">
                                <?php echo $topic->topic_body;?>
                            </p>
                        </div>
                        <div class="topic-members">
                        <?php 
                            $getReplies = new Forum();
                            $repliesCount = $getReplies->getRepliesCount($topic->id);
                            $commentors = $getReplies->getReplyingUsers($topic->id);
                        ?>
                            <ul class="member-avatar user-avatar">
                                <?php
                                    foreach($commentors as $commentor):
                                ;?>
                                <img src="<?php echo BASE_URL;?>templates/img/<?php echo $commentor->image?>" alt="user-name">
                                <?php endforeach;?>
                            </ul>
                            <a href="#" class="topic-replies">
                                <p>
                                    <i class="far fa-comment"></i> <span class="reply-count"><?php echo $repliesCount;?></span> Comments
                                </p>
                            </a>
                        </div>
                    </article>
                </div>
                <!-- Topic end point -->
                <?php endforeach;?>

            </div>
        </main>

    <!-- Main Section Ends Here  -->
    <?php include('includes/right_sidebar.php');?>
    <?php include('includes/footer.php');?>