<?= $this->extend("Layouts/default")?>

<!-- Title Section -->
<?= $this->section("title")?>
    Create Task
<?= $this->endSection()?>

<!-- Content Section-->
<?= $this->section("content")?>
    
    <h1>New Task</h1>

    <?php if(session()->has('errors')):?>
        <ul>
            <?php foreach(session('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach;?>
        </ul>
    <?php endif ?>

    <!-- Creation Form  -->
    <?= form_open("/tasks/create") ?>
        
        <?= $this->include('Tasks/form') ?>
        <button>Save</button>
        <a href="<?= site_url("/tasks") ?>">Cancel</a>

    </form>

    <?= $this->endSection()?>