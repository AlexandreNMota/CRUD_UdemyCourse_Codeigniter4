<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="<?=old('name', $user->name)?>" class="form-control">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="<?=old('email', $user->email)?>" class="form-control">
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control">
    <?php if($user->id):?>
        <p>Leave blank to keep existing password</p>
    <?php endif;?>
</div>

<div class="form-group">
    <label for="password_confirmation">Repeat Password</label>
    <input type="password" name="password_confirmation" class="form-control">
</div>

<div class="form-check" style="margin-bottom:15px;">
    <label class="form-check-label" for="is_admin">
        <?php if($user->id == current_user()->id): ?>
            <input type="checkbox" checked disabled> Administrator
        <?php else: ?>
    
            <input type="hidden" name="is_admin" value="0"> 
            <input type="checkbox" id="is_admin" name="is_admin" class="form-check-input" value="1"
                <?php if(old('is_admin', $user->is_admin)):?>checked<?php endif;?>>Administrator

        <?php endif; ?>

    </label>
</div>