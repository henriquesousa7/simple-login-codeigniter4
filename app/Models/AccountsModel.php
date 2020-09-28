<?php

use CodeIgniter\Model;

class AccountsModel extends Model
{
    protected $table = 'accounts';
    protected $primaryKey = 'id';

    protected $allowedFields = ['usuario', 'senha', 'email'];

    public function getAccount(string $email, string $senha){
        $sql = ['email' => $email, 'senha' => $senha];

        return $this->where($sql)->first();
    }
}