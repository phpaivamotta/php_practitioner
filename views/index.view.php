<?php require('partials/header.php'); ?>

    <!-- header -->
    <h1>
        My Tasks
    </h1>

    <!-- list of tasks -->
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike>
                        <?= $task->description; ?>
                    </strike>
                <?php else : ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?php require('partials/footer.php'); ?>