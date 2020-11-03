<?php include('includes/header.php');?>

<!-- Main section starts here -->
<section id="main">
        <main>
            <div class="main-content">
                <div class="main-content-topic">
                    <div class="user-avatar user-topic-avatar">
                        <img src="img/avatar1.jpg" alt="user-name">
                        <p class="user-name">Rahul Rimal</p>
                    </div>
                    <article class="user-posted-topic">
                        <div class="topic-body">
                            <h3 class="topic-title">Introduce Yourself !</h3>
                            <p class="topic-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat similique nesciunt quibusdam sed nemo obcaecati perspiciatis est, doloribus, itaque suscipit consectetur magnam maxime? Labore rem laboriosam qui facilis, saepe fugit.
                            </p>
                        </div>
                    </article>
                </div>
                <div class="reply-heading">
                    <h5 class="replies-heading">Replies <hr></h5>
                </div>
                <!-- Replies start here -->
                <div class="main-content-replies">
                    <article class="recommanded-topics">
                        <div class="user-avatar user-info reply-avatar">
                            <img src="img/avatar1.jpg" alt="user-name">
                            <p>RahulR</p>
                        </div>
                        <div class="topic-body">
                            <p class="topic-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat similique nesciunt quibusdam sed nemo obcaecati perspiciatis est, doloribus, itaque suscipit consectetur magnam maxime? Labore rem laboriosam qui facilis, saepe fugit.
                            </p>
                        </div>
                    </article>
                </div>

                <!-- Replies ends here -->

                <!-- reply area -->

                <div class="reply-box">
                    <form action="#">
                        <textarea name="replybody" id="reply" cols="30" rows="10"></textarea>
                        <script>
                            CKEDITOR.replace('reply');
                        </script>

                        <button class="submit-reply-btn">Reply</button>
                    </form>
                </div>

                <!-- end of reply area -->

            </div>
        </main>

    <!-- Main Section Ends here  -->
    <?php include('includes/right_sidebar.php');?>
    <?php include('includes/footer.php');?>