<?php include('includes/header.php');?>

<!-- Main section starts here -->
<section id="main">
        <main>
            <div class="main-content">
                <div class="create-topic-main">
                    <div class="create-topic-heading">
                        <h3>Create a new Topic</h3>
                    </div>
                    <div class="create-topic-body">
                        <form id="create-topic-form">
                                <input type="text" placeholder="Enter the Title">
                                <div class="textarea-select-decoration">
                                <textarea name="topic_body" cols="80" rows="3" placeholder="Enter content here"></textarea>
                                
                                <select name="topic_category">
                                    <option value="1">Software Development</option>
                                    <option value="2">Web Development</option>
                                    <option value="3">Mobile Development</option>
                                    <option value="4">Graphics Design</option>
                                    <option value="5">Game Development</option>
                                    <option value="6">Business</option>
                                    <option value="7">Marketting</option>
                                </select>
                                </div>
                                <br>
                                <button type="submit">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

    <!-- Main Section Ends Here  -->
    <?php include('includes/right_sidebar.php');?>
    <?php include('includes/footer.php');?>