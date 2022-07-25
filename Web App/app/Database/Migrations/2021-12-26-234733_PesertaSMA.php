<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PesertaSMA extends Migration
{
    public function up()
    {
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'nisn'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100
			],
            'kode_peserta'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
                'default'        => '0',
			],
            'sekolah'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'tingkat'      => [
				'type'           => 'ENUM',
				'constraint'     => ['SD', 'SMP', 'SMA', 'null'],
                'default'        => 'null',
			],
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('PesertaSMA', TRUE);
    }

    public function down()
    {
		$this->forge->dropTable('PesertaSMA');
    }
}
