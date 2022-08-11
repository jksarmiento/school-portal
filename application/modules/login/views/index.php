<?php
login_header();
?>
<!-- ############ LAYOUT START-->
<div class="center-block w-xxl w-auto-md  ">
  <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
    <div class="m-b text-sm text-center">
      <h5><?= SYSTEM_NAME ?></h5>
    </div>
    <form name="form">
      <div class="md-form-group float-label">
        <input type="text" class="md-input" id="username" ng-model="user.username" required>
        <label>Username</label>
      </div>
      <div class="md-form-group float-label">
        <input type="password" class="md-input" id="password" ng-model="user.password" required>
        <label>Password</label>
      </div>

      <button type="button" id="Login" class="form-control green btn-block p-x-md"> Sign in </button>
    </form>
  </div>

  <div class="p-v-lg text-center mobile-size">
    <b> <?= FOOTER_NAME ?> &copy; <?= FOOTER_YEAR ?></b>
  </div>
</div>
<!-- ############ LAYOUT END-->
<div class="footer">
  <span> <?= FOOTER_NAME ?> &copy; <?= FOOTER_YEAR ?></span>
</div>
</div>

<?php
login_footer();
?>