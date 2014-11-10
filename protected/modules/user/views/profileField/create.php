<?php
$this->breadcrumbs = array(
    UserModule::t('Profile Fields') => array('admin'),
    UserModule::t('Create'),
);
$this->menu = array(
    array('label' => UserModule::t('Manage Profile Field'), 'icon' => 'icon-list-alt', 'url' => array('admin')),
    array('label' => UserModule::t('Manage Users'), 'icon' => 'icon-folder-open', 'url' => array('/user/admin')),
);
?>
<h1><?php echo UserModule::t('Create Profile Field'); ?></h1>
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>