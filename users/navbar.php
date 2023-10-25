<nav class="nav-menu d-none d-lg-block">
    <ul>
        <?php  
        
                $block = $mysqli->query("SELECT * FROM tb_menu LEFT JOIN tb_submenu ON tb_submenu.id_menu = tb_menu.id_menu WHERE tb_menu.status = '1' OR tb_submenu.status='1' GROUP BY tb_menu.id_menu ORDER BY tb_menu.id_menu");
                while ($row = mysqli_fetch_array($block)) {
                        $id_blok = $row['6'];
                    if(is_null($id_blok)){
                        if($row['0']==1){
                            $class = 'class="active"';
                        } else {
                            $class = '';
                        }
                        echo '<li '.$class.'><a href="'.$row['link_menu'].'">'.$row['menu'].'</a></li>';
                    } else {
                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$row['menu']?>
                                </a>
                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <?php
                                    $submenu = $mysqli->query("SELECT * FROM tb_submenu WHERE id_menu='$id_blok' AND status = '1'");
                                    while ($row_s = mysqli_fetch_array($submenu)){
                                    ?>
                                    <a class="dropdown-item" href="<?=$row_s['link_submenu']?>"><?=$row_s['submenu']?>
                                    </a>
                                    <?php
                                }
                                ?>
                                </div>
                            </li>
                        <?php
                        }
                    }
                ?>
        <li class="get-started" ><a href="panduan.php"  >Panduan</a></li>
    </ul>
</nav><!-- .nav-menu -->