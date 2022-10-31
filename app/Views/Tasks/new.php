<?= $this->extend("Layouts/default")?>

<!-- Title Section -->
<?= $this->section("title")?>
    Create Task
<?= $this->endSection()?>

<!-- Content Section-->
<?= $this->section("content")?>
    
    <div class="newTask">
        <div class="newTaskHeader">
            <h1>New Task</h1>
        </div>

        <div class="newTaskerror">
            <?php if(session()->has('errors')):?>
                <ul>
                    <?php foreach(session('errors') as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach;?>
                </ul>
            <?php endif ?>
        </div>
        <div class="newTaskForm">
        <!-- Creation Form  -->
            <?= form_open("/tasks/create") ?>
                
                <?= $this->include('Tasks/form') ?>
                
                <div class="buttonsForm" style="display: flex; justify-content: right;">
                    <button class="btn" style="padding:1px;">Save</button>
                    <a class="btn" href="<?= site_url("/tasks") ?>">Cancel</a>
                </div>

            </form>
        </div>
    </div>

    <?= $this->endSection()?>