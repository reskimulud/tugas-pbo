<?php
interface Bentuk
{
  public function tampilkan_hasil();
  public function tampilkan_rumus();
}

abstract class Ekspetasi_bentuk
{
  abstract public function hitung_luas(): int;
}

class Lingkaran extends Ekspetasi_bentuk implements Bentuk
{
  private $jari_jari;

  public function __construct($jari_jari)
  {
    $this->jari_jari = $jari_jari;
  }

  public function hitung_luas(): int
  {
    return ($this->jari_jari * $this->jari_jari) * pi();
  }

  public function tampilkan_hasil()
  {
    echo 'Luas Lingkaran dengan nilai jari-jari ' . $this->jari_jari . ' adalah ' . $this->hitung_luas();
  }

  public function tampilkan_rumus()
  {
    echo 'Rumus mencari Luas Lingkaran : ((jari-jari × jari jari) * π)';
  }
}

class Persegi_panjang extends Ekspetasi_bentuk implements Bentuk
{
  private $tinggi;
  private $lebar;

  public function __construct($tinggi, $lebar)
  {
    $this->tinggi = $tinggi;
    $this->lebar = $lebar;
  }

  public function hitung_luas(): int
  {
    return $this->lebar * $this->tinggi;
  }

  public function tampilkan_hasil()
  {
    echo 'Luas Persegi Panjang dengan nilai tingginya ' . $this->tinggi . ' dan lebarnya ' . $this->lebar . ' adalah ' . $this->hitung_luas();
  }

  public function tampilkan_rumus()
  {
    echo 'Rumus mencari Luas Persegi Panjang : (panjang × lebar)';
  }
}

$lingkaran_ku = new Lingkaran(4);
$persegi_panjang_ku = new Persegi_panjang(3, 4);

echo $lingkaran_ku->tampilkan_rumus();
echo '<br>';
echo $lingkaran_ku->tampilkan_hasil();
echo '<br>';
echo '===================================================';
echo '<br>';
echo $persegi_panjang_ku->tampilkan_rumus();
echo '<br>';
echo $persegi_panjang_ku->tampilkan_hasil();
