<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

/**
 * Class m180908_070156_create_bootstrap_tables
 */
class m180908_070156_create_bootstrap_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180908_070156_create_bootstrap_tables cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('suppliers', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string(255)->notNull()->defaultValue('')
        ]);

        $this->createTable('products', [
            'id' => Schema::TYPE_PK,
            'supplier_id' => $this->integer()->notNull(),
            'title' => $this->string(255)->notNull()->defaultValue(''),
            'image_url' => $this->string(255)->notNull()->defaultValue(''),
            'description' => Schema::TYPE_TEXT,
        ]);

        $this->addForeignKey(
            'fk-product-supplier_id',
            'products',
            'supplier_id',
            'suppliers',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        echo "m180908_070156_create_bootstrap_tables cannot be reverted.\n";

        $this->dropForeignKey(
            'fk-product-supplier_id',
            'products'
        );

        $this->dropTable('products');

        $this->dropTable('suppliers');
    }
}
