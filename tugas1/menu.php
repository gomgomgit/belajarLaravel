<?php
namespace belajar\tugas1;
class Menu {

	protected $food;
	protected $beverage;
	public $name;

	public function pesanMakanan($makanan) {
		$this->food = $makanan;
	}
	public function pesanMinuman($minuman) {
		$this->beverage = $minuman;
	}
	public function untuk($nama) {
		$this->name = $nama;
	}

}

?>
