<?= $this->extend("Layouts/default")?>

<!-- Title Section -->
<?= $this->section("title")?>
    Tasks
<?= $this->endSection()?>

<!-- Content Section -->
<?= $this->section("content")?>
    <div class="loginSection">
        <div class="loginHeader">
            <a class="btn addTaskLink"href="<?= site_url("/tasks/new") ?>"><i class="fa-solid fa-plus"></i></a>            
            <h1 style="margin-right: 100px;">Tasks</h1>
        </div>
        <div class="mainSection">
            <?php if($tasks):?>
                <ul>
                    <?php foreach($tasks as $task):?>
                        <li>
                            <a href="<?= site_url("/tasks/show/" . $task->id) ?>">
                                <?= esc($task->description)?>
                            </a>
                        </li>
                        <hr>
                    <?php endforeach;?>
                </ul>
                <?= $pager->links() ?>
            <?php else: ?>
                <p>No tasks found</p>
            <?php endif ?>
        </div>
    </div>
<?= $this->endSection()?>

