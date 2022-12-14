<?= $this->extend("Layouts/default") ?>

<!-- Title Section -->
<?= $this->section("title") ?>
User
<?= $this->endSection() ?>

<!-- Content Section -->
<?= $this->section("content") ?>

<h1>User</h1>
<a class="btn btn-secondary" href="<?= site_url("/admin/users") ?>"> back</a>
<dl class="row">
    <dt class="col-sm-3">Name</dt>
    <dd class="col-sm-9"><?= esc($user->name) ?></dd>

    <dt class="col-sm-3">Email</dt>
    <dd class="col-sm-9"><?= $user->email ?></dd>

    <dt class="col-sm-3">Administrator</dt>
    <dd class="col-sm-9"><?= $user->is_admin ? 'yes' : 'no' ?></dd>

    <dt class="col-sm-3">Active</dt>
    <dd class="col-sm-9"><?= $user->is_active ? 'yes' : 'no' ?></dd>

    <dt class="col-sm-3">Created at</dt>
    <dd class="col-sm-9"><?= $user->created_at ?></dd>

    <dt class="col-sm-3">Updated at</dt>
    <dd class="col-sm-9"><?= $user->updated_at ?></dd>
</dl>

<a class="btn btn-primary" href="<?= site_url('/admin/users/edit/' . $user->id) ?>">Edit</a>

<!-- Avoid Admin to delete himself -->
<?php if ($user->id != current_user()->id) : ?>
<a class="btn btn-danger" href="<?= site_url('/admin/users/delete/' . $user->id) ?>">Delete</a>
<?php endif; ?>


<?= $this->endSection() ?>