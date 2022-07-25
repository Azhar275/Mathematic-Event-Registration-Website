<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
	{
		$this->forge->addField([
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			]
 
		]);
		$this->forge->addPrimaryKey('username', true);
		$this->forge->createTable('user');
	}
 
	//--------------------------------------------------------------------
 
	public function down()
	{
		$this->forge->dropTable('user');
	}
}
