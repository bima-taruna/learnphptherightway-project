<?php

declare(strict_types=1);

namespace App\Model;

use App\Model;

class Transaction extends Model
{
    public function create(string $date, ?int $check = null, string $desc, float $amount)
    {
        $newTransaction = $this->db->prepare(
            'INSERT INTO transactions (date, check, description, amount) VALUES (?,?,?,?)'
        );
        $newTransaction->execute([$date, $check, $desc, $amount]);
    }
}
