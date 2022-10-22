<?= $this->extend("Layouts/default")?>

<?= $this->section("title")?>
    Home
<?= $this->endSection()?>


<?= $this->section("content")?>
    <h1>Home</h1>
    <div class="userSection">
    <a href="<?=site_url("/signup") ?>">Register</a>
    </div>   
    <!-- current_user vem do auth_helper--> 
    <?php if(current_user()):?>
        <p>Hello, <?= esc(current_user()->name) ?></p>
       
        <a href="<?=site_url("/logout") ?>">Logout</a>
    <?php else:?>
        <p>User not logged in</p>
        <a href="<?=site_url("/login") ?>">Login</a>
    <?php endif;?>
<?= $this->endSection()?>

