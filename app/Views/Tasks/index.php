<?= $this->extend("Layouts/default") ?>

<!-- Title Section -->
<?= $this->section("title") ?>
Tasks
<?= $this->endSection() ?>

<!-- Content Section -->
<?= $this->section("content") ?>
<div class="loginSection">
    <div class="loginHeader">
        <a class="btn addTaskLink" href="<?= site_url("/tasks/new") ?>"><i class="fa-solid fa-plus"></i></a>
        <h1 style="margin-right: 100px;">Tasks</h1>
    </div>
    <div class="mainSection">
        <div>
            <label for="query">Search</label>
            <input type="text" name="query" id="query">
        </div>
        <?php if ($tasks) : ?>
        <ul>
            <?php foreach ($tasks as $task) : ?>
            <li>
                <a href="<?= site_url("/tasks/show/" . $task->id) ?>">
                    <?= esc($task->description) ?>
                </a>
            </li>
            <hr>
            <?php endforeach; ?>
        </ul>
        <?= $pager->links() ?>
        <?php else : ?>
        <p>No tasks found</p>
        <?php endif ?>
    </div>
</div>



<script src="<?= site_url('/js/auto-complete.min.js') ?>"></script>

<script>
var searchUrl = "<?= site_url('/tasks/search?q=') ?>";
var showUrl = "<?= site_url('/tasks/show/') ?>";

var data;
var i;
var searchAutoComplete = new autoComplete({
    selector: 'input[name="query"]',
    cache: false,
    source: function(term, response) {
        var request = new XMLHttpRequest();

        request.open('GET', searchUrl + term, true);

        request.onload = function() {



            data = JSON.parse(this.response);

            i = 0;

            var suggestions = data.map(task => task.description);
            response(suggestions);
        };

        request.send();
    },
    renderItem: function(item, search) {
        var id = data[i].id;
        i++;
        return '<div class="autocomplete-suggestion" data-id="' + id + '">' + item + '</div>';
    },
    onSelect: function(e, term, item) {
        window.location.href = showUrl + item.getAttribute('data-id');

    }
});
</script>
<?= $this->endSection() ?>