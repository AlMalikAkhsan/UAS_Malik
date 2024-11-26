<?php
// ini class
class Buku{

    // ini property
    public $judul;
    public $genre = "Action";
    
    // ini method
    public function bukaBuku(){
        echo "Buka Buku ini";
    }
    public function genreBuku(){
        echo "Genre Buku ini $this->genre";
    }

}
// ini object
$ini = new Buku();
echo $ini -> bukaBuku();
echo "<br>";
echo $ini -> genreBuku();
?>