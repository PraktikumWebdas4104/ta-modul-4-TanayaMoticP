<h1> Genre Film </h1>
<form method="POST" Action="">
    <input type="checkbox" name="GenreFilm[]" value="Anime"> Anime <br><br>
    <input type="checkbox" name="GenreFilm[]" value="Horor"> Horror <br><br>
    <input type="checkbox" name="GenreFilm[]" value="Action"> Action <br><br>
    <input type="checkbox" name="GenreFilm[]" value="Animasi"> Animasi <br><br>
    <input type="checkbox" name="GenreFilm[]" value="Thriller"> Thriller <br><br>

<h1> Tujuan Wisata Travelling </h1>
    <input type="checkbox" name="TujuanWisataTravelling[]" value="Bali"> Bali <br><br>
    <input type="checkbox" name="TujuanWisataTravelling[]" value="Raja Ampat"> Raja Ampat <br><br>
    <input type="checkbox" name="TujuanWisataTravelling[]" value="Laboan Bajo"> Labuan Bajo <br><br>
    <input type="checkbox" name="TujuanWisataTravelling[]" value="Pulau Derawan"> Pulau Derawan <br><br>
    <input type="checkbox" name="TujuanWisataTravelling[]" value="Bangka Belitung"> Bangka Belitung <br><br>
    <input type="submit" name="submit2" value="Save">
    <input type="reset" name="reset" value="Reset">
</form>


 <?php 
 if (isset($_POST['submit2'])) {
     $film =$_POST["GenreFilm"];

     echo "Genre Film Yang Anda Pilih : ";
 foreach ($film as $filmku) {
    echo $filmku."<br>";
 }
    echo "<br>";
 $travelling =$_POST["TujuanWisataTravelling"];
    echo "<br>Tujuan Wisata Yang Anda Pilih : " ;
 foreach ($travelling as $travellingku) {
    echo $travellingku."<br>";
 }
 }
?>
