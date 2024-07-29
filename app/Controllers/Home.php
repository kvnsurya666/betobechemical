<?php

namespace App\Controllers;

class Home extends BaseController
{
    function __construct()
    {
    $this->merk     = new MerkModel();
    $this->kategori = new KategoriModel();
    $this->barang   = new BarangModel();
    }
  
    public function index(): string
    {
      $data['merk'] = $this->merk->findAll();
        return view('home', $data);
    }

    public function about()
    {
    if ($this->request->getMethod() == 'post') {
      $username = $this->request->getVar('name');
      $from = $this->request->getVar('email');
      $subject = $this->request->getVar('subject');
      $message = $this->request->getVar('message');

      $email = service('email');
      $email->setFrom($from, $username);
      $email->setTo('solusiperdanatehnik@gmail.com');
      $email->setSubject($subject);
      $email->setMessage($message);

      if ($email->send()) {
        return redirect()->to(site_url('abouts'))->with('pesan', 'Pesan Berhasil Dikirim');
      } else {
        $data = $email->printDebugger(['headers']);
        print_r($data);
      }
    }
    return view('about');
    }

    public function antiseize()
  {
    $data = $this->barang->getPageAntiseize(8);
    // $data['pager'] = $this->barang->pager;
    // dd($data);

    return view('katalog/antiseize', $data);
  }

    public function cleaner()
  {
    $data = $this->barang->getPageCleaner(8);
    // $data['pager'] = $this->barang->pager;
    // dd($data);

    return view('katalog/cleaner', $data);
  }
    public function lubricant()
  {
    $data = $this->barang->getPageLubricant(8);
    // $data['pager'] = $this->barang->pager;
    // dd($data);

    return view('katalog/lubricant', $data);
  }
    public function airfreshener()
  {
    $data = $this->barang->getPageAirfreshener(8);
    // $data['pager'] = $this->barang->pager;
    // dd($data);

    return view('katalog/airfreshsener', $data);
  }

  public function detail($id = null)
  {
    $barang = $this->barang->find($id);
    if (is_object($barang)) {
      $data['barang'] = $barang;
      $data['merk'] = $this->merk->findAll();
      $data['kategori'] = $this->kategori->findAll();
      // dd($data);
      return view('katalog/detail', $data);
    } else {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
  }
}
