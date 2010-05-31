<?php use_helper('I18N') ?>

<?php slot('a-tabs', '') ?>
<?php slot('a-login', '') ?>
<div id="a-signin">
  <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post" id="a-signin-form">
    <?php echo $form ?>
    <input type="submit" value="<?php echo __('sign in') ?>" />
    <?php // This works if you are using sfDoctrineApplyPlugin ?>
    <!-- <a id="a-signin-forgot" href="<?php echo url_for('@sf_guard_password') ?>"><?php echo __('Forgot your password?') ?></a> -->
  </form>
</div>
