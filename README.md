UPGRADE PLAN
1. Change upgrade.php content according to current project
2. Run upgrade script
```
    php vendor/bariew/yii2yii/script.php upgrade.php
```
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
- module->id does not have submodule (not == module/submodule, but just 'submodule')
- urls should start with / if not relative - replace 'module/controller/action' with '/module/controller/action'
- remove errorSummary(
- model rules first element to array and 'on', 'except' => 'asd,ads' to array
- ->update() not working for 1 attribute
- search for "js:" js usage
- $form->field()->label(false)->checkbox() will still render label
- find not echoing render: ^(?!.*(echo|=|return)).*\$this->render.*$
- createUrl
- look for __CLASS__ , get_class( , new $class for it did not have namespaces
- look for camelCase action call or rewrite controller action detect

-  array\(([^\)\(\'\"]+)\) -> [$1] // to new array look
- DatePicker -> 'model'=>$model // add model to options
- (createUrl\(\s*)(\'[^\']+\')  ->  $1[$2] // use arrays for creating urls
