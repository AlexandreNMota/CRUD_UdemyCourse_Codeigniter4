<?= $this->extend("Layouts/default") ?>

<!-- Title Section -->
<?= $this->section("title") ?>
Login
<?= $this->endSection() ?>

<!-- Content Section-->
<?= $this->section("content") ?>
<div class="loginSection">
    <div class="loginHeader" style="display:flex; justify-content:center;">
        <h1>Login</h1>
    </div>
    <div class="formSection">
        <?= form_open("/login/create") ?>
        <div class="form-group">
            <label for="email"></label>
            <input type="text" name="email" id="email" value="<?= old('email') ?>" class="form-control"
                placeholder="Informe o seu email">
        </div>

        <div class="form-group">
            <label for="password"></label>
            <input type="password" name="password" class="form-control" placeholder="Informe a sua senha">
        </div>

        <button class="btn btn-primary btn-block"
            style="background-image: linear-gradient(var(--primary), var(--mygray)); color:black; border:none;">Log
            in</button>
        <a href="<?= site_url("/password/forgot") ?>">Forgot Password?</a>
        </form>
    </div>

</div>


<?= $this->endSection() ?>