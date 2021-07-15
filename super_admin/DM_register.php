<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/register.css">
   
    <title>Document</title>
</head>
<body>
<div class="row">
<form action="code.php" method="POST">
    <div class="form-group">
        <label for="uname">Delivery Member ID</label>
        <input type="number" name="memberid" placeholder="  Member ID..">
    </div>
    <div class="form-group">
        <label for="uname">Delivery Member Name</label>
        <input type="text" name="membername" placeholder="  Name..">
    </div>
    <div class="form-group">
        <label for="uname">Delivery Member Address </label>
        <input type="text" name="address" placeholder="Address..">
    </div>
    <div class="form-group">
        <label for="uname">Delivery Member NIC Number </label>
        <input type="text" name="nic" placeholder="NIC Number..">
    </div>
    <div class="form-group">
        <label for="uname">Delivery Member Contact Number  </label>
        <input type="text" name="contact" placeholder="Contact Number..">
    </div>
           
        <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
</div>
</body>
</html>