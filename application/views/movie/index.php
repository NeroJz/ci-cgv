	<!-- searchbar & header -->
    <?= $this->load->view('templates/search-bar','', TRUE); ?>
    <?= $this->load->view('templates/header','', TRUE); ?>>
	
	<!-- content -->
	<div id="movie-details">
		<div class="centerContent">
			<div class="poster-img"><img src="<?= base_url('assets/images/poster2.jpg') ?>" /></div>
			<div class="txt">
				<button type="button" class="share">分享</button>
				<h4 data-rate="2a">逃出魔幻紀：叢林挑機</h4>
				<div class="info">
					<div class="item"><span class="label">片種:</span><span class="info-txt">動作</span></div>
					<div class="item"><span class="label">片長:</span><span class="info-txt">119 分鐘</span></div>
					<div class="item"><span class="label">語言:</span><span class="info-txt">英語 / 中文 字幕</span></div>
					<div class="item"><span class="label">上映日期:</span><span class="info-txt">2017年 12月 21日(四)</span></div>
				</div>
				<div class="cast">
					<p class="title">導演/演員:</p>
					<p>積卡斯丹（導演）、狄維莊遜、積伯克、嘉倫招莉仁、奇雲哈特</p>
				</div>
				<div class="synopsis">
					<p class="title">故事大綱:</p>
					<p class="syn-txt">4位被罰留堂的學生，無意中發現一部古老遊戲機，更失驚無神被吸入遊戲世界！4人不但「改頭換面」，化身成擁有不同異能的遊戲角色，更被困在凶險叢林，步步驚心！想要回到現實世界，他們必須衝破重重難關，完成遊戲任務。然而，他們愈玩得耐就愈深入迷陣……到底他們能否完成這趟魔幻大歷險，還是會永遠被困於遊戲之中？</p>
					<input type="button" class="read-more" value="關於更多" />
				</div>
				<input type="button" class="strokeBtn red trailer" value="電影預告" />
			</div>
		</div>
	</div><!-- content[end] -->
	
	<!-- time slot -->
	<div class="session-wrap">
		<div class="centerContent tab-wrap">
			<ul class="etabs">
				<li class="tab"><a href="#day1">今日</a></li>
				<li class="tab"><a href="#day2">4月 24日（二）</a></li>
				<li class="tab"><a href="#day3">4月 25日（三）</a></li>
				<li class="tab"><a href="#day4">4月 26日（四）</a></li>
				<li class="tab"><a href="#day5">4月 27日（五）</a></li>
			</ul>
			
			<!-- day1(today) -->
			<div id="day1">
				<div class="cinema-wrap">
					<div class="cinema-info">
						<p class="name">荔枝角</p>
					</div>
					<div class="cinema-showTime">
						<div class="session-type">
							<p>3D IMAX (英語)</p>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
							<div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
						</div>
						<div class="session-type">
							<p>2D IMAX (英語)</p>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
							<div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
							<div class="session avai midnight"><p class="time">12:30 AM</p><p class="price currency">55</p></div>
						</div>
					</div>
				</div>
				<div class="cinema-wrap">
					<div class="cinema-info">
						<p class="name">尖沙咀</p>
					</div>
					<div class="cinema-showTime">
						<div class="session-type">
							<p>3D IMAX Dbox (英語)</p>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
							<div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
							<div class="session full midnight"><p class="time">12:30 AM</p><p class="full-txt">滿座</p></div>
						</div>
						<div class="session-type">
							<p>2D Atmos (英語)</p>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
							<div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
						</div>
						<div class="session-type">
							<p>2D (英語)</p>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
						</div>
					</div>
				</div>
			</div>
			
			<!-- day2 -->
			<div id="day2">
				<div class="cinema-wrap">
					<div class="cinema-info">
						<p class="name">荔枝角</p>
					</div>
					<div class="cinema-showTime">
						<div class="session-type">
							<p>3D (英語)</p>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
							<div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
							<div class="session full midnight"><p class="time">12:30 AM</p><p class="full-txt">滿座</p></div>
							<a href="<?= site_url('seat') ?>" class="session avai midnight"><p class="time">01:30 AM</p><p class="price currency">55</p></a>
						</div>
					</div>
				</div>
			</div>
			
			<!-- day3 -->
			<div id="day3">
				<div class="cinema-wrap">
					<div class="cinema-info">
						<p class="name">荔枝角</p>
					</div>
					<div class="cinema-showTime">
						<div class="session-type">
							<p>3D (英語)</p>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
							<div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
							<div class="session full midnight"><p class="time">12:30 AM</p><p class="full-txt">滿座</p></div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- day4 -->
			<div id="day4">
				<div class="cinema-wrap">
					<div class="cinema-info">
						<p class="name">荔枝角</p>
					</div>
					<div class="cinema-showTime">
						<div class="session-type">
							<p>3D (英語)</p>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
							<div class="session full"><p class="time">11:30 PM</p><p class="full-txt">滿座</p></div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- day5 -->
			<div id="day5">
				<div class="cinema-wrap">
					<div class="cinema-info">
						<p class="name">荔枝角</p>
					</div>
					<div class="cinema-showTime">
						<div class="session-type">
							<p>3D (英語)</p>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">08:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session avai"><p class="time">09:30 PM</p><p class="price currency">55</p></a>
							<a href="<?= site_url('seat') ?>" class="session hot"><p class="time">10:30 PM</p><p class="price currency">55</p></a>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
	
	<!-- recommend -->
	<div id="recommanded">
		<div class="centerContent">
			<h2>猜你想看</h2>
			<!-- poster 1 -->
			<div class="poster">
				<a href="movie.php" class="mob-link"></a>
				<div class="over-wrap">
					<div class="info">
						<div class="title">逃出魔幻紀：叢林挑機</div>
						<div class="launchDate">2018年 5月 28日</div>
						<div class="duration">135分鐘 / 美國</div>
						<div class="movie-type">2D, 3D, 4DX</div>
					</div>
					<div class="btn-wrap">
						<input type="button" class="strokeBtn trailer" value="電影預告" />
						<input type="button" class="solidBtn detail" value="立即購買" />
					</div>
				</div>
				<img src="<?= base_url('assets/images/poster14.jpg') ?>" />
			</div>

			<!-- poster 2 -->
			<div class="poster">
				<a href="movie.php" class="mob-link"></a>
				<div class="over-wrap">
					<div class="info">
						<div class="title">逃出魔幻紀：叢林挑機</div>
						<div class="launchDate">2018年 5月 28日</div>
						<div class="duration">135分鐘 / 美國</div>
						<div class="movie-type">2D, 3D, 4DX</div>
					</div>
					<div class="btn-wrap">
						<input type="button" class="strokeBtn trailer" value="電影預告" />
						<input type="button" class="solidBtn detail" value="立即購買" />
					</div>
				</div>
				<img src="<?= base_url('assets/images/poster15.jpg') ?>" />
			</div>

			<!-- poster 3 -->
			<div class="poster">
				<a href="movie.php" class="mob-link"></a>
				<div class="over-wrap">
					<div class="info">
						<div class="title">逃出魔幻紀：叢林挑機</div>
						<div class="launchDate">2018年 5月 28日</div>
						<div class="duration">135分鐘 / 美國</div>
						<div class="movie-type">2D, 3D, 4DX</div>
					</div>
					<div class="btn-wrap">
						<input type="button" class="strokeBtn trailer" value="電影預告" />
						<input type="button" class="solidBtn detail" value="立即購買" />
					</div>
				</div>
				<img src="<?= base_url('assets/images/poster16.jpg') ?>" />
			</div>

			<!-- poster 4 -->
			<div class="poster">
				<a href="movie.php" class="mob-link"></a>
				<div class="over-wrap">
					<div class="info">
						<div class="title">逃出魔幻紀：叢林挑機</div>
						<div class="launchDate">2018年 5月 28日</div>
						<div class="duration">135分鐘 / 美國</div>
						<div class="movie-type">2D, 3D, 4DX</div>
					</div>
					<div class="btn-wrap">
						<input type="button" class="strokeBtn trailer" value="電影預告" />
						<input type="button" class="solidBtn detail" value="立即購買" />
					</div>
				</div>
				<img src="<?= base_url('assets/images') ?>/poster17.jpg" />
			</div>
		</div>
	</div><!-- recommend[end] -->
	
    