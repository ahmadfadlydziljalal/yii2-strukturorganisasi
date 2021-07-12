<?php

use yii\db\Migration;

/**
 * Class m210712_051844_InsertDummyData
 */
class m210712_051844_InsertDummyData extends Migration {
    private $table = '{{%struktur_organisasi}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->execute("
            INSERT INTO db.struktur_organisasi (id, parent_id, tipe, nama, singkatan, alias, kode, created_at, updated_at, created_by, updated_by) VALUES (1, null, 'GROUP', 'Group', 'TMS', null, 'GROUP', 1626037790, 1626065167, null, null);
            INSERT INTO db.struktur_organisasi (id, parent_id, tipe, nama, singkatan, alias, kode, created_at, updated_at, created_by, updated_by) VALUES (2, 1, 'PERUSAHAAN', 'Perusahaan 1', 'TMS', null, 'TMS', 1626038159, 1626064982, null, null);
            INSERT INTO db.struktur_organisasi (id, parent_id, tipe, nama, singkatan, alias, kode, created_at, updated_at, created_by, updated_by) VALUES (3, 2, 'JABATAN', 'Direktur Utama', 'Dirut', null, 'Dirut', 1626064905, 1626065478, null, null);
            INSERT INTO db.struktur_organisasi (id, parent_id, tipe, nama, singkatan, alias, kode, created_at, updated_at, created_by, updated_by) VALUES (4, 1, 'PERUSAHAAN', 'Perusahaan 2', 'JFS', null, 'JFS', 1626065099, 1626065109, null, null);
            INSERT INTO db.struktur_organisasi (id, parent_id, tipe, nama, singkatan, alias, kode, created_at, updated_at, created_by, updated_by) VALUES (5, 4, 'CABANG', 'Jakarta', 'JKT', null, 'JKT', 1626065204, 1626065204, null, null);
            INSERT INTO db.struktur_organisasi (id, parent_id, tipe, nama, singkatan, alias, kode, created_at, updated_at, created_by, updated_by) VALUES (6, 4, 'CABANG', 'Yogyakarta', 'Yogya', null, 'YGY', 1626065232, 1626065232, null, null);
            INSERT INTO db.struktur_organisasi (id, parent_id, tipe, nama, singkatan, alias, kode, created_at, updated_at, created_by, updated_by) VALUES (7, 6, 'JABATAN', 'Kepala Cabang', 'Kacab', null, 'Kacab', 1626065283, 1626065283, null, null);    
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->truncateTable($this->table);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210712_051844_InsertDummyData cannot be reverted.\n";

        return false;
    }
    */
}
