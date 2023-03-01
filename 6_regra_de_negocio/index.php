<?php

require_once('./source/Models/Model.php');
require_once('./source/Models/UserModel.php');

$layer = new ReflectionClass(\Source\Models\Model::class);

var_dump(
  $layer->getDefaultProperties(),
  $layer->getMethods()
);

$model = new ReflectionClass(\Source\Models\UserModel::class);

var_dump(
  $model,
  get_class_methods($model)
);
