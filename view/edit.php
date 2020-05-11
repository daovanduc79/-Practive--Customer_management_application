<?php
if (isset($_SESSION['error-edit'])) {
    $message = $_SESSION['error-edit'];
    echo "<p class= 'alert-info'> $message </p>";
    unset($_SESSION['error-edit']);
}
?>

<h2>Customer update</h2>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $customer->id; ?>"/>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="up-name" value="<?php echo $customer->name; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Customers Email</label>
        <input type="email" name="up-email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               value="<?php echo $customer->email; ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
            else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Customers Address</label>
        <input type="text" name="up-address" class="form-control" id="exampleInputPassword1"
               value="<?php echo $customer->address; ?>">
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>
