<?php  
// MENU

// ICON 
$gambar = $mysqli->query("SELECT * FROM tb_judul") or die ($mysqli->error());
                            while($row = mysqli_fetch_array($gambar)){
                                $judul = $row['judul'];
                                $quote = $row['quote'];
                                $img1 = $row['gambar1'];
                                $img2 = $row['gambar2'];
                                $img3 = $row['gambar3'];
                                $img4 = $row['gambar4'];
                                $img5 = $row['gambar5'];
                                $img6 = $row['gambar6'];
                            }

?>