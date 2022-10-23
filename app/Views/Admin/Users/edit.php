<?= $this->extend("Layouts/default")?>

<!-- Title Section -->
<?= $this->section("title")?>
    Edit User
<?= $this->endSection()?>

<!-- Content Section-->
<?= $this->section("content")?>
    
    <h1>Edit User</h1>

    <?php if(session()->has('errors')):?>
        <ul>
            <?php foreach(session('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach;?>
        </ul>
    <?php endif ?>

    <!-- Creation Form  -->
    <?= form_open("/admin/users/update/" .$user->id ) ?>
        
        <?= $this->include('Admin/Users/form') ?>
        <button>Save</button>
        <a href="<?= site_url("/admin/users/show/" .$user->id) ?>">Cancel</a>

    </form>

    <?= $this->endSection()?>