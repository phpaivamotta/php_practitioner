<?php require('partials/header.php'); ?>

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

    <!-- header -->
    <h1>
        Your name
    </h1>

    <!-- name input -->
    <form method="POST" action="/names">
        <input name="name"></input>
        <button type="submit">Submit</button>
    </form>

<?php require('partials/footer.php'); ?>