<?= $this->extend("Layouts/default") ?>

<!-- Title Section -->
<?= $this->section("title") ?>
Password reset
<?= $this->endSection() ?>


<?= $this->section("content") ?>
<h1>Password reset</h1>

<?php if (session()->has('errors')) : ?>
<ul>
    <?php foreach (session('errors') as $error) : ?>
    <li><?= $error ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>

<?= form_open("/password/processreset/$token") ?>
<div class="form-group">
    <label for="password">Password</label>
    <input class="form-control" type="password" name="password">
</div>
<div class="form-group">
    <label for="password_confirmation">Repeat Password</label>
    <input class="form-control" type="password" name="password_confirmation">
</div>

<button class="btn btn-block">Reset password</button>
</form>
<?= $this->endSection() ?>