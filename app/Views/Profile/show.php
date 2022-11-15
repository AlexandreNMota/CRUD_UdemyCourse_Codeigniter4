<?= $this->extend("Layouts/default") ?>

<!-- Title Section -->
<?= $this->section("title") ?>
Profile
<?= $this->endSection() ?>


<?= $this->section("content") ?>
<h1>Profile</h1>

<?php if ($user->profile_image) : ?>
<img id="profile-image" src="<?= site_url('/profile/image') ?>" width="200" height="200" alt="Profile Image">

<a href="<?= site_url("/profileimage/delete") ?>" class="btn btn-block">Delete profile image</a>
<?php else : ?>
<img id="profile-image" src="<?= site_url('/images/blank_picture.jpg') ?>" width="200" height="200" alt="Profile Image">
<?php endif; ?>
<dl>
    <dt>Name</dt>
    <dd><?= esc($user->name) ?></dd>


    <dt>Email</dt>
    <dd><?= esc($user->email) ?></dd>
</dl>
<a href="<?= site_url("/profile/edit") ?>" class="btn btn-block">Edit</a>
<a href="<?= site_url("/profile/editPassword") ?>" class="btn btn-block">Change password</a>
<a href="<?= site_url("/profileimage/edit") ?>" class="btn btn-block">Change profile image</a>
<?= $this->endSection() ?>