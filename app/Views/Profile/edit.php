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
    </div>
    <div class="newTaskForm">
        <?= form_open("/profile/update") ?>

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>" style="width:200px; border-radius:20px; text-indent: 10px;">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?= old('email', esc($user->email)) ?>" style="width:200px;border-radius:20px; text-indent: 10px;">
        </div>

        <div class="buttonsForm" style="display: flex; justify-content: right;">
            <button class="btn">Save</button>
            <a href="<?= site_url("/profile/show") ?>" class="btn">Cancel</a>
        </div>

        </form>
    </div>
</div>
<?= $this->endSection() ?>