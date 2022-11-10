<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Change Password<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="newTask">
    <div class="newTaskHeader">
        <h1>Change Password</h1>
    </div>
    <div class="newTaskerror">
        <?php if (session()->has('errors')) : ?>
            <ul>
                <?php foreach (session('errors') as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif ?>
    </div>
    <div class="newTaskForm">
        <?= form_open("/profile/updatePassword") ?>

        <div>
            <label for="current_password">Current Password</label>
            <input type="password" name="current_password" id="current_password" style="width:200px;border-radius:20px; text-indent: 10px;">
        </div>

        <div>
            <label for="password">New Password</label>
            <input type="password" name="password" id="password" style="width:200px;border-radius:20px; text-indent: 10px;">
        </div>

        <div>
            <label for="password_confirmation">Repeat new Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" style="width:200px;border-radius:20px; text-indent: 10px;">
        </div>

        <div class="buttonsForm" style="display: flex; justify-content: right;">
            <button class="btn">Save</button>
            <a href="<?= site_url("/profile/show") ?>" class="btn">Cancel</a>
        </div>

        </form>
    </div>
</div>
<?= $this->endSection() ?>