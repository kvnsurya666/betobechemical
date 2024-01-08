<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table            = 'barang';
    protected $primaryKey       = 'id_barang';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_barang', 'gambar_barang', 'desk_barang', 'id_merk', 'id_kategori'];
    protected $useTimestamps    = true;
    // protected $useSoftDeletes   = true;

    // Join Table
    function getAll()
    {
        $builder = $this->db->table('barang');
        $builder->join('merk', 'merk.id_merk = barang.id_merk');
        $builder->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        $query = $builder->get();
        return $query->getResult();
    }

    // function getAntiseize()
    // {
    //     $builder = $this->db->table('barang');
    //     $builder->join('merk', 'merk.id_merk = barang.id_merk');
    //     $builder->join('kategori', 'kategori.id_kategori = barang.id_kategori');
    //     $builder->where('barang.id_kategori = 1');
    //     $query = $builder->get();
    //     return $query->getResult();
    // }

    function getPageAntiseize($num)
    {
        $builder = $this->builder();
        $builder->join('merk', 'merk.id_merk = barang.id_merk');
        $builder->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        $builder->where('barang.id_kategori = 1');
        return [
            'barang' => $this->paginate($num),
            'pager' => $this->pager,
        ];
    }

    function getPageCleaner($num)
    {
        $builder = $this->builder();
        $builder->join('merk', 'merk.id_merk = barang.id_merk');
        $builder->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        $builder->where('barang.id_kategori = 2');
        return [
            'barang' => $this->paginate($num),
            'pager' => $this->pager,
        ];
    }

    function getPageLubricant($num)
    {
        $builder = $this->builder();
        $builder->join('merk', 'merk.id_merk = barang.id_merk');
        $builder->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        $builder->where('barang.id_kategori = 4');
        return [
            'barang' => $this->paginate($num),
            'pager' => $this->pager,
        ];
    }
    
    function getPageAirfreshener($num)
    {
        $builder = $this->builder();
        $builder->join('merk', 'merk.id_merk = barang.id_merk');
        $builder->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        $builder->where('barang.id_kategori = 5');
        return [
            'barang' => $this->paginate($num),
            'pager' => $this->pager,
        ];
    }
}
