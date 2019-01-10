<?php

use Migrations\AbstractMigration;

class Initial extends AbstractMigration {

    public function up() {

        $this->table('clients')
                ->addColumn('client_name', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('razao_social', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('users_id', 'integer', [
                    'default' => null,
                    'limit' => 10,
                    'null' => false,
                ])
                ->addColumn('filials_id', 'integer', [
                    'default' => null,
                    'limit' => 10,
                    'null' => false,
                ])
                ->addIndex(
                        [
                            'filials_id',
                        ]
                )
                ->addIndex(
                        [
                            'users_id',
                        ]
                )
                ->create();

        $this->table('companys')
                ->addColumn('companys_name', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('description', 'text', [
                    'default' => null,
                    'limit' => null,
                    'null' => true,
                ])
                ->addColumn('cnpj', 'string', [
                    'default' => null,
                    'limit' => 14,
                    'null' => true,
                ])
                ->addColumn('cpf', 'string', [
                    'default' => null,
                    'limit' => 11,
                    'null' => true,
                ])
                ->addColumn('created', 'timestamp', [
                    'default' => null,
                    'limit' => null,
                    'null' => false,
                ])
                ->addColumn('modified', 'timestamp', [
                    'default' => null,
                    'limit' => null,
                    'null' => false,
                ])
                ->create();

        $this->table('filials')
                ->addColumn('filial_name', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('description', 'text', [
                    'default' => null,
                    'limit' => null,
                    'null' => true,
                ])
                ->addColumn('matriz', 'boolean', [
                    'default' => false,
                    'limit' => null,
                    'null' => false,
                ])
                ->addColumn('created', 'timestamp', [
                    'default' => null,
                    'limit' => null,
                    'null' => false,
                ])
                ->addColumn('modified', 'timestamp', [
                    'default' => null,
                    'limit' => null,
                    'null' => false,
                ])
                ->addColumn('companys_id', 'integer', [
                    'default' => null,
                    'limit' => 10,
                    'null' => false,
                ])
                ->addIndex(
                        [
                            'companys_id',
                        ]
                )
                ->create();

        $this->table('i18n')
                ->addColumn('locale', 'string', [
                    'default' => null,
                    'limit' => 6,
                    'null' => false,
                ])
                ->addColumn('model', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('foreign_key', 'integer', [
                    'default' => null,
                    'limit' => 10,
                    'null' => false,
                ])
                ->addColumn('field', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('content', 'text', [
                    'default' => null,
                    'limit' => null,
                    'null' => true,
                ])
                ->addIndex(
                        [
                    'locale',
                    'model',
                    'foreign_key',
                    'field',
                        ], ['unique' => true]
                )
                ->addIndex(
                        [
                            'model',
                            'foreign_key',
                            'field',
                        ]
                )
                ->create();

        $this->table('roles')
                ->addColumn('role_name', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('roles', 'text', [
                    'default' => null,
                    'limit' => null,
                    'null' => false,
                ])
                ->addColumn('description', 'text', [
                    'default' => null,
                    'limit' => null,
                    'null' => true,
                ])
                ->addColumn('created', 'timestamp', [
                    'default' => null,
                    'limit' => null,
                    'null' => false,
                ])
                ->addColumn('modified', 'timestamp', [
                    'default' => null,
                    'limit' => null,
                    'null' => false,
                ])
                ->addColumn('users_id', 'integer', [
                    'default' => null,
                    'limit' => 10,
                    'null' => true,
                ])
                ->addColumn('filials_id', 'integer', [
                    'default' => null,
                    'limit' => 10,
                    'null' => false,
                ])
                ->addIndex(
                        [
                            'filials_id',
                        ]
                )
                ->addIndex(
                        [
                            'users_id',
                        ]
                )
                ->create();

        $this->table('users')
                ->addColumn('user_name', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('email', 'string', [
                    'default' => null,
                    'limit' => 150,
                    'null' => false,
                ])
                ->addColumn('password', 'string', [
                    'default' => null,
                    'limit' => 150,
                    'null' => false,
                ])
                ->addColumn('photo', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => true,
                ])
                ->addColumn('created', 'timestamp', [
                    'default' => null,
                    'limit' => null,
                    'null' => false,
                ])
                ->addColumn('modified', 'timestamp', [
                    'default' => null,
                    'limit' => null,
                    'null' => false,
                ])
                ->addColumn('filials_id', 'integer', [
                    'default' => null,
                    'limit' => 10,
                    'null' => false,
                ])
                ->addIndex(
                        [
                            'filials_id',
                        ]
                )
                ->create();

        $this->table('clients')
                ->addForeignKey(
                        'filials_id', 'filials', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->addForeignKey(
                        'users_id', 'users', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->update();

        $this->table('filials')
                ->addForeignKey(
                        'companys_id', 'companys', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->update();

        $this->table('roles')
                ->addForeignKey(
                        'filials_id', 'filials', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->addForeignKey(
                        'users_id', 'users', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->update();

        $this->table('users')
                ->addForeignKey(
                        'filials_id', 'filials', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->update();
    }

    public function down() {
        $this->table('clients')
                ->dropForeignKey(
                        'filials_id'
                )
                ->dropForeignKey(
                        'users_id'
                )->save();

        $this->table('filials')
                ->dropForeignKey(
                        'companys_id'
                )->save();

        $this->table('roles')
                ->dropForeignKey(
                        'filials_id'
                )
                ->dropForeignKey(
                        'users_id'
                )->save();

        $this->table('users')
                ->dropForeignKey(
                        'filials_id'
                )->save();

        $this->table('clients')->drop()->save();
        $this->table('companys')->drop()->save();
        $this->table('filials')->drop()->save();
        $this->table('i18n')->drop()->save();
        $this->table('roles')->drop()->save();
        $this->table('users')->drop()->save();
    }

}
