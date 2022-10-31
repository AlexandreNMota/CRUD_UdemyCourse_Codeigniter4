<?= $this->extend("Layouts/default")?>

<!-- Title Section -->
<?= $this->section("title")?>
    Task
<?= $this->endSection()?>

<!-- Content Section -->
<?= $this->section("content")?>
    
    <div class="contentSection">
        
    
        <div class="contentHeader">
            <a  class="btn addTaskLink" href="<?= site_url("/tasks")?>" style="margin-right:80px;"> <i class="fa-solid fa-arrow-left"></i> </a>
            <h1 style="margin-right: 130px;">Task</h1>
        </div>
       
       
        <div class="mainSection">
            <dl>
            <dt>ID</dt>
            <dd><?= $task->id ?></dd> 
            <hr>

            <dt>Description</dt>
            <dd><?= esc($task->description)?></dd>
            <hr>
            <dt>Created at</dt>
            <dd><?= $task->created_at ?></dd>
            <hr>
            <dt>Updated at</dt>
            <dd><?= $task->updated_at ?></dd>
            <hr>
            </dl>
            <div class="buttonsForm" style="display: flex; justify-content: right;">
                <a class="btn"href="<?= site_url('/tasks/edit/' .$task->id) ?>">Edit</a>
                <a class="btn"href="<?= site_url('/tasks/delete/' . $task->id) ?>">Delete</a>
            </div>
        </div>
        
        
        

    </div>
<?= $this->endSection()?>

