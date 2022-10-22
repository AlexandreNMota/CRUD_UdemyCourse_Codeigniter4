<?= $this->extend("Layouts/default")?>

<!-- Title Section -->
<?= $this->section("title")?>
    Login 
<?= $this->endSection()?>

<!-- Content Section-->
<?= $this->section("content")?>
    <h1>Login</h1>
    <?= form_open("/login/create")?>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?=old('email')?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <button class="btn btn-primary">Log in</button>
    </form>
    

<?= $this->endSection()?>