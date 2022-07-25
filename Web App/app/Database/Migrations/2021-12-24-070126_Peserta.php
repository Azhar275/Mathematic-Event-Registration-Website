<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peserta extends Migration
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
            'gender'      => [
				'type'           => 'ENUM',
				'constraint'     => ['Laki-laki', 'Perempuan', 'null'],
                'default'        => 'null',
			],
			'status'      => [
				'type'           => 'ENUM',
				'constraint'     => ['Aktif', 'Belum Aktif'],
                'default'        => 'Belum Aktif',
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
            'kontak_wa'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'foto_peserta' => [
				'type'           => 'TEXT',
			],
			'foto_rapor'      => [
				'type'           => 'TEXT',
			],
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('peserta', TRUE);
    }

    public function down()
    {
		$this->forge->dropTable('peserta');
    }
}
