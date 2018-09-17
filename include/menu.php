<?php
    //cek session
    if(!empty($_SESSION['admin'])){
?>

<nav class="blue-grey darken-1">
    <div class="nav-wrapper">
        <a href="./" class="brand-logo center hide-on-large-only"><i class="material-icons md-36">school</i> AMT</a>
        <ul id="slide-out" class="side-nav" data-simplebar-direction="vertical">
            <li class="no-padding">
                <div class="logo-side center blue-grey darken-3">
                    <?php
                        $query = mysqli_query($config, "SELECT * FROM tbl_setting");
                        while($data = mysqli_fetch_array($query)){
                            if(!empty($data['logo'])){
                                echo '<img class="logoside" src="./upload/'.$data['logo'].'"/>';
                            } else {
                                echo '<img class="logoside" src="./asset/img/logo.png"/>';
                            }
                            if(!empty($data['username'])){
                                echo '<h5 class="smk-side">'.$data['username'].'</h5>';
                            } else {
                                echo '<h5 class="smk-side">Aplikasi Manajemen Tugas</h5>';
                            }
                            if(!empty($data['motto'])){
                                echo '<p class="description-side">'.$data['motto'].'</p>';
                            } else {
                                echo '<p class="description-side">Jalan Raya Kediri Gg. Kwagean No. 04 Loceret Telp/Fax. (0358) 329806 Nganjuk 64471</p>';
                            }
                        }
                    ?>
                </div>
            </li>
            <li class="no-padding blue-grey darken-4">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="material-icons">account_circle</i><?php echo $_SESSION['username']; ?></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=pro">Profil</a></li>
                                <li><a href="?page=pro&sub=pass">Ubah Password</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li><a href="./"><i class="material-icons middle">dashboard</i> Beranda</a></li>
            <li class="no-padding">
                <?php
                    if($_SESSION['admin'] == 212){ ?>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="material-icons">repeat</i> Master </a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=mku">Universitas</a></li>
                                <li><a href="?page=mkp">Program Studi</a></li>
                                <li><a href="?page=mkm">Mata Kuliah</a></li>
                            </ul>
                        </div>
                   </li>
                </ul>
                <?php
                    }
                ?>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="material-icons">assignment</i>Tugas</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=tct">Create Tugas</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="material-icons">image</i> Galeri File</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=gsm">Upload Mhs</a></li> 
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li><a href="?page=ref"><i class="material-icons middle">class</i> Laporan</a></li>
            <li class="no-padding">
            <?php
                if($_SESSION['admin'] == 212){ ?>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="material-icons">settings</i> Pengaturan</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=sett">Setting</a></li>
                                <li><a href="?page=sett&sub=usr">Manajemen User</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            <?php
                }
            ?>
            
            </li>
        </ul>
        <!-- Menu on medium and small screen END -->

        <!-- Menu on large screen START -->
        <ul class="center hide-on-med-and-down" id="nv">
            <li><a href="./" class="ams hide-on-med-and-down"><i class="material-icons md-36">school</i> AMT</a></li>
            <li><div class="grs"></></li>
            <li><a href="./"><i class="material-icons"></i>&nbsp; Beranda</a></li>
            <?php
                if($_SESSION['admin'] == 212){ ?>
            <li><a class="dropdown-button" href="#!" data-activates="transaksi">Master <i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='transaksi' class='dropdown-content'>
                    <li><a href="?page=mku">Universitas</a></li>
                    <li><a href="?page=mkp">Program Studi</a></li>
                    <li><a href="?page=mkm">Mata Kuliah</a></li>
                </ul>
            <?php
                }
            ?>
            <li><a class="dropdown-button" href="#!" data-activates="agenda">Tugas <i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='agenda' class='dropdown-content'>
                    <li><a href="?page=tct">Create Tugas</a></li>
                </ul>
           <li><a href="?page=ref">Upload</a></li>
            <?php
                if($_SESSION['admin'] == 212){ ?>
            <li><a class="dropdown-button" href="#!" data-activates="pengaturan">Pengaturan <i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='pengaturan' class='dropdown-content'>
                    <li><a href="?page=sett">Setting</a></li>
                    <li><a href="?page=sett&sub=usr">Manajemen User</a></li>
                    <li class="divider"></li>
                </ul>
            <?php
                }
            ?>
            <?php
                if($_SESSION['admin'] != 212){ ?>
            <li><a class="dropdown-button" href="#!" data-activates="pengaturan">Pengaturan <i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='pengaturan' class='dropdown-content'>
                    <li><a href="?page=sett">Setting</a></li>
                    <li><a href="?page=sett&sub=usr">Manajemen User</a></li>
                </ul>
            <?php
                }
            ?>
            <li class="right" style="margin-right: 10px;"><a class="dropdown-button" href="#!" data-activates="logout"><i class="material-icons">account_circle</i> <?php echo $_SESSION['username'].".".$_SESSION['nim']; ?><i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='logout' class='dropdown-content'>
                    <li><a href="?page=pro">Profil</a></li>
                    <li><a href="?page=pro&sub=pass">Ubah Password</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="material-icons">settings_power</i> Logout</a></li>
                </ul>
        </ul>
        <!-- Menu on large screen END -->
        <a href="#" data-activates="slide-out" class="button-collapse" id="menu"><i class="material-icons">menu</i></a>
    </div>
</nav>

<?php
    } else {
        header("Location: ../");
        die();
    }
?>
