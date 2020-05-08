<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới khách hàng</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Customers Name</label>
                    <input type="text" name="add-name" class="form-control" id="exampleInputPassword1" placeholder="name">
                </div>
                <div class="form-group">
                    <label>Customers Email</label>
                    <input type="email" name="add-email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="abc@xyz.com">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Customers Address</label>
                    <input type="text" name="add-address" class="form-control" id="exampleInputPassword1" placeholder="address">
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>