<?php
require __DIR__ . '/menu.php';
use belajar\tugas1\Menu;

class Pesan extends Menu {

	public function atasNama($nama) {
		$this->name = $nama;
	}
	public function struck() {
		echo $this->name . ' memesan ' . $this->food . ' dan ' . $this->beverage;
	}
}

$andi = new Pesan();
$andi->pesanMakanan('Roti');
$andi->pesanMinuman('Kopi');
$andi->untuk('bambang');
$andi->atasNama('Andi');
$andi->struck();
?>