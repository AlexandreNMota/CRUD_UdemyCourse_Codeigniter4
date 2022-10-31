<?= $this->extend("Layouts/default")?>

<?= $this->section("title")?>
    Home
<?= $this->endSection()?>


<?= $this->section("content")?>    
    <!-- current_user vem do auth_helper--> 
    <?php if(current_user()):?>
    <h1>Hello, <?= esc(current_user()->name) ?></h1>        
    <?php endif;?>
    <p>Teste</p>
<?= $this->endSection()?>

