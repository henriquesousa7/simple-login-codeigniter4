<?php

use CodeIgniter\Model;

class AccountsModel extends Model
{
    protected $table = 'accounts';
    protected $primaryKey = 'id';

    protected $allowedFields = ['usuario', 'senha', 'email'];

    public function getAccounts(string $email = null, string $senha = null): array 
    {

        if ($email === null && $senha === null) {
            return $this->findAll();
        }

        $sql = ['email' => $email, 'senha' => $senha];

        return $this->where($sql)->first();
    }
}