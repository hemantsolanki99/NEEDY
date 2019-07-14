<?php
include "include/nav2.php";
?>
<?php
    include "include/db_config.php";
?>
<style>
    .img_pics {
        max-height: 300px;
        height: 300px;
        width: 100%;
    }
    .know_more_btn {
        margin-top: auto;
        margin-bottom: 0;
    }
</style>
<?php
    
    $username = $_SESSION['needy_user'];
    
    $query = "SELECT * FROM products WHERE Username = '".$username."' ";
    $prodct_details = mysqli_query($mysqli, $query);
    
?>
<div class="body_cont">
    <div class="body_cont_2">
        <div class="body_main">
            <div class="container-fluid font-weight-bold">
                <div class="row justify-content-center">

                    <div class="col-md-8">
                        <div class="form-group">

                           <h2 class="display-4 text-center">Your Products</h2>
                           
                           <div class="well">
                               
                                <div class="row justify-content-center">
            
<?php                                    
    while($row = mysqli_fetch_assoc($prodct_details)){
        $pr_name = $row['product_title'];
        $pr_deta = substr($row['product_content'],0,80);
        $pr_imgs = $row['product_image'];
        $pr_id   = $row['product_id'];
        $web_pr  = $row['product_web_site'];

// class="img-thumbnail mx-auto d-block"

?>                                    
            <div class="col-md-5">
                <div class="card">
                    <img src="images/service/<?php echo $pr_imgs; ?>" id="img_pics" class="card-img" height="200px">
                </div>
                <h4><?php echo $pr_name; ?></h4>
                <p class="text-justify"><?php echo $pr_deta; ?>...</p>
                <div class="row justify-content-center" id="know_more_btn">
<?php
    if($web_pr != ''){
        $site = $web_pr;
?>
                <button class="btn btn-warning btn-lg"><a class="text-white" href="<?php echo $site; ?>">Know More</a></button>
<?php
    }else{
?>
            <button class="btn btn-warning btn-lg"><a class="text-white" href="">Know More</a></button>
<?php
    }
?>
                </div>
            </div>
<?php
        if($pr_id%2 == 0){
?>
           </div>
           <br/>
           <div class="row justify-content-center">
<?php
        }
    }
?>
                                </div>
                               

                               
                               
                           </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>    
</body>
</html>

<!-- 

 mK > (< 4:5.16.0)
  Considering pam-kwallet-init:amd64 -1 as a solution to libpam-kwallet-common:amd64 2
  Added pam-kwallet-init:amd64 to the remove list
  Conflicts//Breaks against version 4:5.15.4-0xneon+18.04+bionic+build29 for pam-kwallet-init but that is not InstVer, ignoring
  Conflicts//Breaks against version 4:5.15.3-0xneon+18.04+bionic+build28 for pam-kwallet-init but that is not InstVer, ignoring
  Fixing libpam-kwallet-common:amd64 via remove of pam-kwallet-init:amd64
Done
Calculating upgrade... Done
The following packages will be REMOVED:
  pam-kwallet-init
The following NEW packages will be installed:
  libnotificationmanager1 libpam-kwallet-common
The following packages will be upgraded:
  base-files bluedevil breeze breeze-cursor-theme breeze-gtk-theme cups cups-bsd cups-client cups-common
  cups-core-drivers cups-daemon cups-ipp-utils cups-ppdc cups-server-common dbus dbus-x11 drkonqi
  grub-theme-breeze kactivitymanagerd kde-cli-tools kde-cli-tools-data kde-config-gtk-style
  kde-config-gtk-style-preview kde-config-plymouth kde-config-screenlocker kde-config-sddm kde-style-breeze
  kde-style-breeze-qt4 kde-style-oxygen-qt5 kdeplasma-addons-data kgamma5 khotkeys khotkeys-data kinfocenter
  kmenuedit kscreen ksshaskpass ksysguard ksysguard-data ksysguardd kwayland-integration kwin-addons
  kwin-common kwin-data kwin-style-breeze kwin-wayland kwin-wayland-backend-drm kwin-x11 kwrited
  libcolorcorrect5 libcups2 libcupscgi1 libcupsimage2 libcupsmime1 libcupsppdc1 libdbus-1-3 libdw1 libelf1
  libglib2.0-0 libglib2.0-bin libglib2.0-data libio-socket-ssl-perl libkdecorations2-5v5
  libkdecorations2private6 libkf5screen-bin libkf5screen7 libkf5sysguard-bin libkf5sysguard-data
  libkfontinst5 libkfontinstui5 libkscreenlocker5 libksgrd7 libksignalplotter7 libkwin4-effect-builtins1
  libkwineffects12 libkwinglutils12 libkwinxrenderutils12 libkworkspace5-5 libnet-ssleay-perl libnss-systemd
  liboxygenstyle5-5 liboxygenstyleconfig5-5 libpam-kwallet5 libpam-systemd libplasma-geolocation-interface5
  libpowerdevilcore2 libpowerdevilui5 libprocesscore7 libprocessui7 libpython2.7 libpython2.7-minimal
  libpython2.7-stdlib libpython3.6 libpython3.6-minimal libpython3.6-stdlib libruby2.5 libsndfile1 libssl1.1
  libsystemd0 libtaskmanager6 libudev1 libweather-ion7 libwww-perl openssl oxygen-sounds
  plasma-browser-integration plasma-calendar-addons plasma-dataengines-addons plasma-desktop
  plasma-desktop-data plasma-discover plasma-discover-backend-flatpak plasma-discover-backend-snap
  plasma-discover-common plasma-integration plasma-nm plasma-pa plasma-runners-addons plasma-vault
  plasma-wallpapers-addons plasma-widgets-addons plasma-workspace plasma-workspace-wallpapers
  plasma-workspace-wayland plymouth-theme-breeze polkit-kde-agent-1 powerdevil powerdevil-data python2.7
  python2.7-minimal python3-gdbm python3.6 python3.6-minimal qml-module-qtquick-controls-styles-breeze
  ruby2.5 sddm-theme-breeze systemd systemd-sysv systemsettings udev user-manager vim vim-common vim-runtime
  vim-tiny xdg-desktop-portal-kde xxd



 -->