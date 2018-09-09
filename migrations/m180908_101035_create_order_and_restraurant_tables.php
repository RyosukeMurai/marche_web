<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

/**
 * Class m180908_101035_create_order_and_restraurant_tables
 */
class m180908_101035_create_order_and_restraurant_tables extends Migration
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
        echo "m180908_101035_create_order_and_restraurant_tables cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('clients', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string(255)->notNull()->defaultValue(''),
            'address' => $this->string(255)->notNull()->defaultValue('')
        ]);

        $this->createTable('orders', [
            'id' => Schema::TYPE_PK,
            'client_id' => $this->integer()->notNull(),
            'product_id' => $this->integer()->notNull(),
            'updated_at' => 'timestamp on update current_timestamp',
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')
        ]);

        $this->addForeignKey(
            'fk-order-client_id',
            'orders',
            'client_id',
            'clients',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-order-product_id',
            'orders',
            'product_id',
            'products',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        echo "m180908_101035_create_order_and_restraurant_tables cannot be reverted.\n";

        $this->dropForeignKey(
            'fk-order-client_id',
            'orders'
        );

        $this->dropForeignKey(
            'fk-order-product_id',
            'products'
        );

        $this->dropTable('orders');

        $this->dropTable('clients');
    }
}
