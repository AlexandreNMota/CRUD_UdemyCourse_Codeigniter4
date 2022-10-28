<?= $this->extend("Layouts/default")?>

<!-- Title Section -->
<?= $this->section("title")?>
    Users
<?= $this->endSection()?>

<!-- Content Section -->
<?= $this->section("content")?>
    
    <h1>Users</h1>

    <a href="<?= site_url("/admin/users/new") ?>" class="btn btn-primary" style="margin-bottom: 5px;">New user</a>
    <?php if($users):?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Administrator</th>
                    <th scope="col">Created at</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user):?>
                    <tr>
                        <td>
                            <a href="<?= site_url("/admin/users/show/" . $user->id) ?>">
                                <?= esc($user->name)?>
                            </a>
                        </td>
                        <td>
                        <?= esc($user->email)?>
                        </td>
                        <td>
                        <?= $user->is_admin ? 'yes' : 'no'?>
                        </td>
                        <td>
                        <?= esc($user->created_at)?>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <?= $pager->links() ?>
    <?php else: ?>
        <p>No Users found</p>
    <?php endif ?>


<?= $this->endSection()?>

