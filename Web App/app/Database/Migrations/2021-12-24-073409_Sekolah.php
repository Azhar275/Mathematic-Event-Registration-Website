<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sekolah extends Migration
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
			'nama_sekolah'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'tingkat'      => [
				'type'           => 'ENUM',
				'constraint'     => ['SD', 'SMP', 'SMA', 'null'],
                'default'        => 'null',
			],
			'provinsi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'kabupaten'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'kontak_pendamping'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'kontak_sekolah'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('sekolah', TRUE);
    }

    public function down()
    {
		$this->forge->dropTable('sekolah');
    }
}
