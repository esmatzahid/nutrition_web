<?php
namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $allowedFields = ['product_id', 'customer_name', 'email', 'address', 'quantity', 'total_price', 'status'];
    protected $useTimestamps = true;
}