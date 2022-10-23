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