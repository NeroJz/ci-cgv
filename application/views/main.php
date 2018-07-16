<?= $this->load->view('templates/main_header', '', TRUE); ?>

<?php if(isset($sideBar) && $sideBar): ?>
    <div id="sideBar" class="tab-wrap">
        <ul class="etabs">
            <li class="tab"><a href="#day-01"><p class="mth">6月</p><p class="day">03</p></a></li>
            <li class="tab"><a href="#day-02"><p class="mth">6月</p><p class="day">04</p></a></li>
            <li class="tab"><a href="#day-03"><p class="mth">6月</p><p class="day">05</p></a></li>
            <li class="tab"><a href="#day-04"><p class="mth">6月</p><p class="day">06</p></a></li>
            <li class="tab"><a href="#day-05"><p class="mth">6月</p><p class="day">07</p></a></li>
            <li class="tab"><a href="#day-06"><p class="mth">6月</p><p class="day">08</p></a></li>
            <li class="tab"><a href="#day-07"><p class="mth">6月</p><p class="day">09</p></a></li>
        </ul>
        
        <!-- cinema selector -->
        <div class="cine-selector">
            <div class="input-wrap">
                <select id="sidebar-cine">
                    <option value="" selected>荔枝角</option>
                    <option value="">影院01</option>
                    <option value="">影院02</option>
                    <option value="">影院03</option>
                    <option value="">影院04</option>
                </select>
            </div>
        </div>
        
        <div id="day-01" class="time-wrap">
            <!-- movie 1 -->
            <div class="movie-wrap">
                <h4 data-rate="2a">逃出魔幻紀：叢林挑機</h4>
                <div class="session-type">
                    <p>3D (英語)</p>
                    <a href="seat.php" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
                    <div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
                    <div class="session full midnight"><p class="time">12:30 AM</p><p class="full-txt">滿座</p></div>
                    <a href="seat.php" class="session avai midnight"><p class="time">01:30 AM</p><p class="price currency">55</p></a>
                </div>
                <div class="session-type">
                    <p>2D IMAX (英語)</p>
                    <a href="seat.php" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
                    <div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
                    <div class="session full midnight"><p class="time">12:30 AM</p><p class="full-txt">滿座</p></div>
                </div>
            </div>
            
            <!-- movie 2 -->
            <div class="movie-wrap">
                <h4 data-rate="3">逃出魔幻紀：叢林挑機</h4>
                <div class="session-type">
                    <p>3D IMAX Dbox (英語)</p>
                    <a href="seat.php" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
                    <div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
                </div>
                <div class="session-type">
                    <p>2D Atmos (英語)</p>
                    <a href="seat.php" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
                </div>
            </div>
        </div>
        <div id="day-02" class="time-wrap">
            <!-- movie 1 -->
            <div class="movie-wrap">
                <h4 data-rate="2a">逃出魔幻紀：叢林挑機</h4>
                <div class="session-type">
                    <p>3D Dbox (英語)</p>
                    <a href="seat.php" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
                    <div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
                    <div class="session full midnight"><p class="time">12:30 AM</p><p class="full-txt">滿座</p></div>
                    <a href="seat.php" class="session avai midnight"><p class="time">01:30 AM</p><p class="price currency">55</p></a>
                </div>
            </div>
        </div>
        <div id="day-03" class="time-wrap">
            <!-- movie 1 -->
            <div class="movie-wrap">
                <h4 data-rate="2a">逃出魔幻紀：叢林挑機</h4>
                <div class="session-type">
                    <p>3D IMAX Atmos (英語)</p>
                    <a href="seat.php" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
                    <div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
                    <div class="session full midnight"><p class="time">12:30 AM</p><p class="full-txt">滿座</p></div>
                    <a href="seat.php" class="session avai midnight"><p class="time">01:30 AM</p><p class="price currency">55</p></a>
                </div>
            </div>
        </div>
        <div id="day-04" class="time-wrap">
            <!-- movie 1 -->
            <div class="movie-wrap">
                <h4 data-rate="2a">逃出魔幻紀：叢林挑機</h4>
                <div class="session-type">
                    <p>3D IMAX (英語)</p>
                    <a href="seat.php" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
                    <div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
                    <div class="session full midnight"><p class="time">12:30 AM</p><p class="full-txt">滿座</p></div>
                    <a href="seat.php" class="session avai midnight"><p class="time">01:30 AM</p><p class="price currency">55</p></a>
                </div>
            </div>
        </div>
        <div id="day-05" class="time-wrap">
            <!-- movie 1 -->
            <div class="movie-wrap">
                <h4 data-rate="2a">逃出魔幻紀：叢林挑機</h4>
                <div class="session-type">
                    <p>3D (英語)</p>
                    <a href="seat.php" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
                    <div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
                    <div class="session full midnight"><p class="time">12:30 AM</p><p class="full-txt">滿座</p></div>
                    <a href="seat.php" class="session avai midnight"><p class="time">01:30 AM</p><p class="price currency">55</p></a>
                </div>
            </div>
        </div>
        <div id="day-06" class="time-wrap">
            <!-- movie 1 -->
            <div class="movie-wrap">
                <h4 data-rate="2a">逃出魔幻紀：叢林挑機</h4>
                <div class="session-type">
                    <p>3D IMAX (英語)</p>
                    <a href="seat.php" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
                    <div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
                    <div class="session full midnight"><p class="time">12:30 AM</p><p class="full-txt">滿座</p></div>
                    <a href="seat.php" class="session avai midnight"><p class="time">01:30 AM</p><p class="price currency">55</p></a>
                </div>
            </div>
        </div>
        <div id="day-07" class="time-wrap">
            <!-- movie 1 -->
            <div class="movie-wrap">
                <h4 data-rate="2a">逃出魔幻紀：叢林挑機</h4>
                <div class="session-type">
                    <p>3D Dbox (英語)</p>
                    <a href="seat.php" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
                    <a href="seat.php" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
                    <div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
                    <div class="session full midnight"><p class="time">12:30 AM</p><p class="full-txt">滿座</p></div>
                    <a href="seat.php" class="session avai midnight"><p class="time">01:30 AM</p><p class="price currency">55</p></a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(isset($content)): ?>
        <?php if(isset($partials) && sizeof($partials) > 0): ?>
            <?php foreach($partials as $view): ?>
                <?= $this->load->view($view, '', TRUE); ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <div id="wrapper">
            <?= $content; ?>
            <?= $this->load->view('templates/footer','',TRUE); ?>
        </div>
<?php else: ?>
    <h3>Content Not Available</h3>
<?php   endif; ?>



<?= $this->load->view('templates/main_footer', '', TRUE); ?>