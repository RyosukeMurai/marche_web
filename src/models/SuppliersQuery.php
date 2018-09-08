<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Suppliers]].
 *
 * @see Suppliers
 */
class SuppliersQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Suppliers[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Suppliers|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
