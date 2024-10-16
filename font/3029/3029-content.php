<?php
	$url_host = $_SERVER['HTTP_HOST'];

	$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

	$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

	preg_match_all($pattern_uri, __DIR__, $matches);

	$url_path = $url_host . $matches[1][0];

	$url_path = str_replace('\\', '/', $url_path);
	?>

<div class="type-3029">
    <div class="page-wrapper">
        <section class="breadcrumb-botton-area">
            <div class="container">
                <div class="left pull-left">
                    <ul class=""><br>
                        <li><a href="http://tk.commonsupport.com/repairplus/">HOME</a></li>
                        <li>SMARTPHONE REPAIR</li>
                    </ul>
                </div>
            </div>
        </section>
        <hr>
        <br><br>

        <div class="row">
            <!-- Cột slider (giả sử slider đã có ở đây) -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="slider-holder">
                    <!-- Nội dung slider -->
                    <div class="kc-elm kc-css-224998 widget-area kc-wp-sidebar">
                        <!-- Nội dung sidebar (menu dịch vụ) -->
                        <div id="nav_menu-3" class="widget service-single-sidebar widget_nav_menu">
                            <div class="menu-services-menu-container">
                                <ul id="menu-services-menu" class="menu">
                                    <li id="menu-item-143" class="menu-item current-menu-item">
                                        <a href="http://tk.commonsupport.com/repairplus/smartphone-repair/">SMARTPHONE
                                            REPAIR</a>
                                    </li>
                                    <li id="menu-item-142" class="menu-item">
                                        <a href="http://tk.commonsupport.com/repairplus/tablet-ipad-repair/">TABLET
                                            &amp; IPAD REPAIR</a>
                                    </li>
                                    <li id="menu-item-141" class="menu-item">
                                        <a href="http://tk.commonsupport.com/repairplus/desktop-mac-repair/">DESKTOP
                                            &amp; MAC REPAIR</a>
                                    </li>
                                    <li id="menu-item-140" class="menu-item">
                                        <a href="http://tk.commonsupport.com/repairplus/game-console-repair/">GAME
                                            CONSOLE REPAIR</a>
                                    </li>
                                    <li id="menu-item-139" class="menu-item">
                                        <a href="http://tk.commonsupport.com/repairplus/lcd-led-tv-repair/">LCD &amp;
                                            LED TV REPAIR</a>
                                    </li>
                                    <li id="menu-item-138" class="menu-item">
                                        <a href="http://tk.commonsupport.com/repairplus/mp3-mp4-player-repair/">MP3
                                            &amp; MP4 PLAYER REPAIR</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <br><br>
                        <div id="bunch_appoinment-2" class="widget service-single-sidebar widget_bunch_appoinment">
                            <div class="repair-time"
                                style="background-image:url('http://tk.commonsupport.com/repairplus/wp-content/uploads/2017/02/repair-time-bg.jpg'); position: relative;">
                                <h3>REPAIR LESS THAN<br> 60 MINUTES!</h3>
                                <div class="button" style="position: absolute; bottom: 10px; left: 10px; ">
                                    <a class="thm-btn bg-1" href="#">MAKE APPOINTMENT</a>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <!-- Cột nội dung nằm bên phải slider -->
            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="service-single-content">
                    <div class="row top-content">
                        <!-- Cột hình ảnh bên trái -->
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="img-holder">
                                <img src="http://tk.commonsupport.com/repairplus/wp-content/uploads/2017/02/v1-1.jpg"
                                    alt="Broken Glass Repair" class="img-responsive">
                            </div>
                        </div>
                        <!-- Cột nội dung bên phải -->
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="text-holder">
                                <div class="title">
                                    <h2>BROKEN GLASS REPAIR</h2>
                                </div>
                                <div class="text">
                                    <p>Unlike many other repair issues may involve software malfunction, cracked glass
                                        on a mobile device is easy to diagnose. It’s also easy to inflict. Cracked cell
                                        phone screens caused by drops and falls are common. Unfortunately, the only way
                                        to fix a cracked screen is to replace it very quickly.</p>
                                    <p>Often a cracked screen doesn’t affect the mobile device’s ability to function
                                        right away, and owners simply learn to look past the distraction of the cracks.
                                        However, this can be dangerous.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row middle-content">
                        <!-- Cột nội dung bên trái -->
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="text-holder">
                                <div class="title">
                                    <h2>REPAIRING BROKEN GLASS</h2>
                                </div>
                                <div class="text">
                                    <p>The best way to repair your cracked screen without risking further damage to the
                                        phone is to bring it to a professional repair service. The trained technicians
                                        at Cell Phone Repair can fix your screen quickly and safely. If you walk in to a
                                        local store, common repairs can be fixed on site while you wait. If you don’t
                                        have the time to wait, or if we are a bit too far out of your way, just mail it
                                        in. We will fix your screen and mail it back to you so you can enjoy your phone.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Cột hình ảnh bên phải -->
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="img-holder" style="position: relative;">
                                <img src="http://tk.commonsupport.com/repairplus/wp-content/uploads/2017/02/v1-2.jpg"
                                    alt="Repair Process" class="img-responsive">
                                <div class="button" style="position: absolute; bottom: 10px; left: 10px;">
                                    <a href="#">Before</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>