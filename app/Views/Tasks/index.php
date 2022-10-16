<?= $this->extend("Layouts/default")?>

<!-- Title Section -->
<?= $this->section("title")?>
    Tasks
<?= $this->endSection()?>

<!-- Content Section -->
<?= $this->section("content")?>
    
    <h1>Tasks</h1>

    <a href="<?= site_url("/tasks/new") ?>">Create a new task</a>
    <ul>
        <?php foreach($tasks as $task):?>
            <li>
                <a href="<?= site_url("/tasks/show/" . $task->id) ?>">
                    <?= esc($task->description)?>
                </a>
            </li>
        <?php endforeach;?>
    </ul>


<?= $this->endSection()?>

