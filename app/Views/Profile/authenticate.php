<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit profile<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="newTask">
    <div class="newTaskHeader">
        <h1>Edit profile</h1>
    </div>
    <div class="newTaskerror">
        <?php if (session()->has('errors')) : ?>
        <ul>
            <?php foreach (session('errors') as $error) : ?>
            <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif ?>
        <p>Please enter your password to continue</p>
    </div>
    <div class="newTaskForm">
        <?= form_open("/profile/processauthenticate") ?>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password"
                style="width:200px; border-radius:20px; text-indent: 10px;">
        </div>

        <div class="buttonsForm" style="display: flex; justify-content: right;">
            <button class="btn">Send</button>
            <a href="<?= site_url("/profile/show") ?>" class="btn">Cancel</a>
        </div>

        </form>
    </div>
</div>
<?= $this->endSection() ?>