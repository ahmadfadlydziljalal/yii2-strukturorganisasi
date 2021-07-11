<?php

namespace ahmadfadlydziljalal\strukturorganisasi\models\activequery;

/**
 * This is the ActiveQuery class for [[ahmadfadlydziljalal\strukturorganisasi\models\StrukturOrganisasi]].
 *
 * @see ahmadfadlydziljalal\strukturorganisasi\models\StrukturOrganisasi
 */
class StrukturOrganisasiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return ahmadfadlydziljalal\strukturorganisasi\models\StrukturOrganisasi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ahmadfadlydziljalal\strukturorganisasi\models\StrukturOrganisasi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
