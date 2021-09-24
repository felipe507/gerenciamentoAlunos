<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAluno extends Migration
{
        public function up()
        {
                $this->forge->addField([
                        'alunos_id'          => [
                                'type'           => INT'',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nome'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '25',
                        ],
                        'telefone' => [
                                'type' => 'INT',
                        ],
                        'email' => [
                                'type' => 'VARCHAR',
                                'constraint' => '25',
                        ],
                        'cpf' => [
                                'type' => 'INT',                  
                        ]
                ]);
                $this->forge->addKey('alunos_id', true);
                $this->forge->createTable('alunos');
        }

        public function down()
        {
                $this->forge->dropTable('alunos');
        }
}