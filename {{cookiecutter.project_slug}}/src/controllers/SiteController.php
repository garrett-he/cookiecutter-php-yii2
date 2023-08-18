<?php

namespace {{ cookiecutter.project_namespace }}\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex(): string
    {
        return 'It works!';
    }
}
