<?php require 'views/partials/header.view.php' ?>

<script src="js/partials/login.js"></script>

<h1> Login </h1>
<form method="GET" action="/userpage">
    <input name="username" id="username" placeholder="Your username">
    <input name="password" id="password" placeholder="Your password">
    <input type="checkbox" onclick="hidePassword()">Show Password 

    <button type="submit">Submit</button>
</form>


<h1> Register </h1>

<form method="POST" action="/register">
    <input name="username" id="username" placeholder="Chose your username">
    <input name="useremail" id="useremail" placeholder="Your e-mail">
    <!-- <input name="username" id="username" placeholder="Are you an artist?"> -->

    <!-- <input name="password" id="password" placeholder="Chose your password">
    <input name="password" id="password" placeholder="Verify your password"> -->

    <button type="submit">Submit</button>
</form>

<p> User overview </p>

<table>
    <tr>
        <th>Username</th>
        <th>E-mail</th>
        <th>Artist</th>
    </tr>
    <?php foreach ($users as $user) : ?>
    <tr>
        <td><?php echo $user->username?></td>
        <td><?php echo $user->useremail?></td>
        <td>
            <?php if($user->isArtist):?>
                <p>&#10003<p>
            <?php else: ?>
                <p>&#10007<p>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


<h1> Update email </h1>

<form method="POST" action="/updateuser">
    <input name="username" id="username" placeholder="Chose your username">
    <input name="useremail" id="useremail" placeholder="Your e-mail">


    <button type="submit">Submit</button>
</form>





<!-- <button type="submit">Delete user</button> -->


<?php require 'partials/footer.php' ?>