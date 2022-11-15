<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete image<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="newTask">
    <div class="newTaskHeader">
        <h1>Delete profile Image</h1>
    </div>
    <div class="warningtext" style="display:flex; justify-content:center;">
        <p>Are you sure?</p>
    </div>
    <div class="newTaskForm">
        <?= form_open("/profileimage/delete") ?>
        <div class="buttonsForm" style="display: flex; justify-content: right;">
            <button class="btn btn-danger">Yes</button>
            <a class="btn" href="<?= site_url('/profile/show/') ?>">Cancel</a>
        </div>

        </form>
    </div>
</div>

<?= $this->endSection() ?>