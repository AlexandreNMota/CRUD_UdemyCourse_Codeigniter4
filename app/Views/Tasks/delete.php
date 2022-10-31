<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete task<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="newTask">
    <div class="newTaskHeader">
        <h1>Delete task</h1>
    </div>
    <div class="warningtext" style="display:flex; justify-content:center;">
    <p>Are you sure?</p>
    </div>
    <div class="newTaskForm">
        <?= form_open("/tasks/delete/" . $task->id) ?>
        <div class="buttonsForm" style="display: flex; justify-content: right;">
            <button class="btn btn-danger">Yes</button>
            <a class="btn"href="<?= site_url('/tasks/show/' . $task->id) ?>">Cancel</a>
        </div>
            
        </form>
    </div>
</div>

<?= $this->endSection() ?>