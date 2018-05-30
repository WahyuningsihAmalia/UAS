<?php
class Koneksi {
    private $server = "localhost";
    private $username = "id5881297_stok_barang"; //root
    private $password = "amalia123"; //""
    private $db = "id5881297_stok_barang";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,
        $this->password, $this->db);
    }
}
?>
