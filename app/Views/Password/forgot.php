<?= $this->extend("Layouts/default") ?>

<!-- Title Section -->
<?= $this->section("title") ?>
Forgot Password
<?= $this->endSection() ?>

<!-- Content Section-->
<?= $this->section("content") ?>
<h1>Forgot Password</h1>

<?= form_open("/password/processforgot") ?>
<div>
    <label for="email">email</label>
    <input type="text" name="email" id="email" value="<?= old('email') ?>">
</div>
<button class="btn btn-block" type="submit">Send</button>
</form>
<?= $this->endSection() ?>