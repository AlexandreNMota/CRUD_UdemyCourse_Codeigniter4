<?= $this->extend("Layouts/default") ?>

<!-- Title Section -->
<?= $this->section("title") ?>
Profile
<?= $this->endSection() ?>


<?= $this->section("content") ?>
<h1>Profile</h1>

<dl>
    <dt>Name</dt>
    <dd><?= esc($user->name) ?></dd>


    <dt>Email</dt>
    <dd><?= esc($user->email) ?></dd>
</dl>
<a href="<?= site_url("/profile/edit") ?>" class="btn btn-block">Edit</a>
<a href="<?= site_url("/profile/editPassword") ?>" class="btn btn-block">Change password</a>
<?= $this->endSection() ?>