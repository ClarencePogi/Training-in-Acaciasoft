<?php
if($_GET['row']){
  $data = json_decode($_GET['row']);
}

include "./style.inc.php";
?>

<div id="registration-form">
  <div class='fieldset'>
    <legend>Add Account</legend>
    <form method="post" data-validate="parsley" id="form_account">
      <div class='row'>
        <label for='firstname'>Name</label>
        <input type="text" required placeholder="Enter Fullname" name='fullname' id='firstname' value="<?php echo $_GET['row'] ? htmlspecialchars($data->name) : ''?>" data-required="true" data-error-message="Your First Name is required">
      </div>
      <div class='row'>
          <label for="cemail">Phone no.</label>
          <input type="number" required maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 11)" placeholder="Enter your phone no." id="phonenum" name='phonenum' value="<?php echo $_GET['row'] ? $data->phonenumber : ''?>" data-required="true" data-error-message="Your E-mail must correspond">
        </div>
        <div class='row'>
          <label for="email">E-mail</label>
          <input type="email" required placeholder="E-mail"  name='email' id="email" data-required="true" value="<?php echo $_GET['row'] ? $data->email : ''?>" data-type="email" data-error-message="Your E-mail is required">
          <input type="hidden" name="id" id="acc_id" value="<?php echo $data->id?>">
        </div>
      <input type="button" id="submitBtn" value="Submit">
      <input type="button" value="Cancel" onclick="$('.modal-container').hide(800);">
    </form>
  </div>
</div>
    