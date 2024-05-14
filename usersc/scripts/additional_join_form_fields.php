<?php
// This file often teams up with during_user_creation.php although you can use that file without this one.
// However, if you add additional form fields here, you should process them there.
// We will do an example. Let's say you want to make use of the unused account_id column in the users table.

// Uncomment out the code below and it will automagically be inserted into your join form.
?>
<!-- <label for="confirm">Pick an account ID number</label>
<input type="number" class="form-control" min="0" step="1" name="account_id" value="" required> -->
<div class="form-group">
      <label for="transport_type">Preferred Transportation Method*</label>
  <select name="transport_type" id="transport_type" class="form-control">
    <option value="Truck">Trucks (by Road)</option>
    <option value="Rake">Rake (by Rail)</option>
  </select></div>
<?php
//Now, go into the during_user_creation script to see how to process it.
 ?>
