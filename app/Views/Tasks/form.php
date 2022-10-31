<div>
    <label for="description">Description</label>
    <input type="text" name="description" id="description" 
    value="<?= old('description', esc($task->description)) ?>" style="border-radius: 10px; width:200px; text-indent: 10px;" placeholder="Input Task description">
</div>