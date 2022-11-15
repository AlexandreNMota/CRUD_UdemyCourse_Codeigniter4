<?= $this->extend("Layouts/default") ?>

<!-- Title Section -->
<?= $this->section("title") ?>
Edit Profile image
<?= $this->endSection() ?>

<!-- Content Section-->
<?= $this->section("content") ?>


<?= form_open_multipart("/profileimage/update") ?>
<div>
    <label for="image">File</label>
    <input type="file" name="image" id="image">
</div>

<button class="btn ">Upload</button>
<a class="btn " href="<?= site_url("/profile/show") ?>">Cancel</a>
</form>
<?= $this->endSection() ?>