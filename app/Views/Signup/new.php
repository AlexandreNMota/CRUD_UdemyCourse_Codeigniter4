<?= $this->extend("Layouts/default")?>

<!-- Title Section -->
<?= $this->section("title")?>
    Register Page
<?= $this->endSection()?>

<!-- Content Section-->
<?= $this->section("content")?>
    
    <h1>New User</h1>

    <?php if(session()->has('errors')):?>
        <ul>
            <?php foreach(session('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach;?>
        </ul>
    <?php endif ?>

    <!-- Creation Form  -->
    <?= form_open("/signup/create") ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?=old('name')?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?=old('email')?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Repeat Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        <button class="btn btn-primary btn-block">Signup</button>
        <a class="btn btn-primary btn-block" href="<?= site_url("/") ?>">Cancel</a>

    </form>

    <?= $this->endSection()?>