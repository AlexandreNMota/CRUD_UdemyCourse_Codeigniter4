<?= $this->extend("Layouts/default")?>

<?= $this->section("title")?>
    Home
<?= $this->endSection()?>


<?= $this->section("content")?>
    <h1>Home</h1>
    <a href="<?=site_url("/signup/new") ?>">Register</a>
<?= $this->endSection()?>

