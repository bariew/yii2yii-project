Yii1 to Yii2 upgrade project
================================

UPGRADE PLAN
1. Change upgrade.php content according to current project
2. Run upgrade script php vendor/bariew/yii2yii/script.php upgrade.php
3. Fix manually
- UserIdentity
- WebUser, login
- CDbCriteria



YII2 upgrade
------------
- Check ->isNewRecord in beforeSave/afterSave
- Check 'condition' appearance
- Check rbac configs
- 'getFlash' does not delete flash by default
- search for "label for=" - since Html::checkbox no longer generates id automatically
- replace scopes with new methods
- module->id does not have submodule (not == module/submodule, but just 'submodule')
- urls should start with / if not relative - replace 'module/controller/action' with '/module/controller/action'
- <?= \yii\helpers\Html::csrfMetaTags() ?>
- remove errorSummary(
- model rules first element to array and 'on' => 'asd,ads' to array
- ->update() not working for 1 attribute
- search for "js:" js usage
- $form->field()->label(false)->checkbox() will still render label
- find not echoing render: ^(?!.*(echo|=|return)).*\$this->render.*$
- createUrl

- ->validateValue( -> ->validate(
- (Yii::t\([^\)]+)\{([\w_]+)\}  ->  $1$2 // changed key look
-  array\(([^\)\(\'\"]+)\) -> [$1] // to new array look
- DatePicker -> 'model'=>$model // add model to options
- (->registerJs\()[\w-_\'\"]+, -> $1 // removed js name
- CUploadedFile -> \yii\web\UploadedFile
- ->extensionName -> extension
- ->user->hasFlash -> ->session->hasFlash
- (createUrl\(\s*)(\'[^\']+\')  ->  $1[$2] // use arrays for creating urls
- 'empty' =>    ->    'prompt' =>
