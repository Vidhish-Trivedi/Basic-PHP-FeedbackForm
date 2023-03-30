<?php include "include/header.php"; ?>

<?php
    // $feedback_items = [
    //     [
    //         "id" => '1',
    //         "name" => "User 1",
    //         "email" => "user1@email1",
    //         "body" => "lorem ipsum from user 1"
    //     ],
    //     [
    //         "id" => '1',
    //         "name" => "User 2",
    //         "email" => "user2@email2",
    //         "body" => "lorem ipsum from user 2"
    //     ],
    //     [
    //         "id" => '3',
    //         "name" => "User 3",
    //         "email" => "user3@email3",
    //         "body" => "lorem ipsum from user 3"
    //     ],
    // ];

    $sqlQuery = 'select * from feedback';
    $resultSet = mysqli_query($connection, $sqlQuery);

    $feedback_items = mysqli_fetch_all($resultSet, MYSQLI_ASSOC);      // Second argument is mode, in this case, an associative array.

?>

    <h2>Past Feedback</h2>

    <!-- Note the syntax here -->
    <?php if(empty($feedback_items)): ?>
        <p class="lead mt3">There is no feedback to display...</p>
    <?php endif; ?>

    <?php foreach($feedback_items as $item): ?>
        <div class="card my-3 w-75">
            <div class="card-body text-center">
                <?php echo $item["body"]; ?>
                <div class="text-secondary mt-2">
                    By: <?php echo $item["name"]; ?> on <?php echo $item["date"] ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

<?php include "include/footer.php"; ?>
