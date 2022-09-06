<?php require('partials/header.php'); ?>


    <h1>All Users</h1>

    <h2>
        Names:
    </h2>
    
    <?php foreach ($users as $user) : ?>
        <ul>
            <li>
                <?= $user->name; ?>
            </li>
        </ul>
    <?php endforeach; ?>

    <h1>
        Your name
    </h1>

    <form method="POST" action="/users">
        <input name="name"></input>
        <button type="submit">Submit</button>
    </form>

<?php require('partials/footer.php'); ?>