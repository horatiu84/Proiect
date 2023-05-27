<?php require_once 'header.php'; ?>

<div class="row justify-content-center">
    <div class="col-6 offest-3">
        <?php if($message) : ?>
            <div class="alert alert-info">
                <p class="mb-0"><?= $message; ?></p>
            </div>
        <?php endif; ?>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm password</label>
                    <input type="text" name="confirm_password" id="confirm_password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="first_name">First name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="last_name">Last name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-sm btn-success">Create account</button>
                </div>
            </form>
    </div>
</div>

<?php require_once 'footer.php'; ?>
