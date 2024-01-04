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
      $email->setTo('cs.ciptajayalestari@gmail.com');// ciptajayalestari@gmail.com
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

    public function rustcleaner()
  {
    $data = $this->barang->getPageRustcleaner(8);
    // $data['pager'] = $this->barang->pager;
    // dd($data);

    return view('katalog/rustcleaner', $data);
  }
    public function electroniccleaner()
  {
    $data = $this->barang->getPageElectroniccleaner(8);
    // $data['pager'] = $this->barang->pager;
    // dd($data);

    return view('katalog/electroniccleaner', $data);
  }
    public function enginelube()
  {
    $data = $this->barang->getPageEnginelube(8);
    // $data['pager'] = $this->barang->pager;
    // dd($data);

    return view('katalog/enginelube', $data);
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
