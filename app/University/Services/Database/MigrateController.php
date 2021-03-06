<?php

namespace University\Services\Database;

use University\Services\ControllerInterface;

class MigrateController implements ControllerInterface
{
    public function execute($request, $response)
    {
        $modelClassName = $request->param('model');
       // return $modelClassName;
        if (!is_null($modelClassName)) {

            if (class_exists($modelClassName)) {
                $model = new $_GET['model']();

                if ($model->getPersistence()->migrate()) {
                    return 'Success';
                }
            }else{
            return $modelClassName;}
        }

        return "please specify correct model class name, for example: ?model=\University\Assessment\Exam";
    }
}