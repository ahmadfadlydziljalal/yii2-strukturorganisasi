<?php
namespace  ahmadfadlydziljalal\strukturorganisasi\models\form;

use yii\base\Model;

class DiagramStrukturOrganisasi extends Model {

    public $parent_id;

    public function rules() {
        return [
            [['parent_id'], 'required']
        ];
    }

}