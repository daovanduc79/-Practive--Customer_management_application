<?php

if (isset($_SESSION['massage'])) {
    $message = $_SESSION['massage'];
    echo "<p class='alert-info'> $message </p>";
    unset($_SESSION['massage']);
}
?>

<h2>Customer List</h2>
<a href="index.php?page=add">Add new</a>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Email</th>
        <th>Adress</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($customers as $key => $customer): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $customer->name ?></td>
            <td><?php echo $customer->email ?></td>
            <td><?php echo $customer->address ?></td>
            <td><a href="index.php?page=update&id=<?php echo $customer->id; ?>"
                   class="btn btn-primary btn-sm">Update</a>
                <a href="index.php?page=delete&id=<?php echo $customer->id; ?>"
                   class="btn btn-danger btn-sm">Delete</a>
            </td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
