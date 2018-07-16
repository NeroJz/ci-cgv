<div id="seat-reminder" class="">
		<div class="centerContent">
			<div class="reminder-wrap">
				<p class="title">溫馨提示</p>
				<div class="reminder-item">
					<div class="thumb"><img src="<?= base_url('assets/images/reminder-3d-glasses.png'); ?>" /></div>
					<div class="txt">
						<p class="title">3D 電影</p>
						<p class="desc">請自備3D眼鏡，如有需要，可於銷售處購買</p>
					</div>
				</div>
				<div class="reminder-item">
					<div class="thumb"><img src="<?= base_url('assets/images/reminder-class-3.png'); ?>" /></div>
					<div class="txt">
						<p class="title">3級</p>
						<p class="desc">只准18岁或以上人士观看</p>
					</div>
				</div>
				<div class="reminder-item">
					<div class="thumb"><img src="<?= base_url('assets/images/reminder-3d-glasses.png'); ?>" /></div>
					<div class="txt">
						<p class="title">3D 電影</p>
						<p class="desc">請自備3D眼鏡，如有需要，可於銷售處購買</p>
					</div>
				</div>
				<div class="reminder-item">
					<div class="thumb"><img src="<?= base_url('assets/images/reminder-class-3.png'); ?>" /></div>
					<div class="txt">
						<p class="title">3級</p>
						<p class="desc">只准18岁或以上人士观看</p>
					</div>
				</div>
				<div class="reminder-item">
					<div class="thumb"><img src="<?= base_url('assets/images/reminder-3d-glasses.png'); ?>" /></div>
					<div class="txt">
						<p class="title">3D 電影</p>
						<p class="desc">請自備3D眼鏡，如有需要，可於銷售處購買</p>
					</div>
				</div>
				<div class="reminder-item">
					<div class="thumb"><img src="<?= base_url('assets/images/reminder-class-3.png'); ?>" /></div>
					<div class="txt">
						<p class="title">3級</p>
						<p class="desc">只准18岁或以上人士观看</p>
					</div>
				</div>
			</div>
			<div class="btn-wrap">
				<input type="button" class="solidBtn" value="知道了" />
			</div>
		</div>
	</div>
	<div class="selected-movie">
		<div class="centerContent">
			<div class="journey-trigger">
				<div class="journey">
					<div class="step active">選擇座位</div>
					<div class="step">付款</div>
					<div class="step">完成</div>
					<div class="timer">9:59</div>
				</div>
				<div class="poster">
					<img src="<?= base_url('assets/images/poster2.jpg'); ?>" />
				</div>
				<h4 data-rate="2a">逃出魔幻紀：叢林挑機</h4>
				<p id="selected-seat">已選座位：<span data-name="C8">C8</span><span data-name="C7">C7</span><span data-name="C6">C6</span></p>
				<p class="desc">點我查看更多</p>	
			</div>
			
			<!-- expand-able container -->
			<div class="expandable">
				<!-- cinema dropdown -->
				<div class="input-wrap">
					<select id="cinema">
						<option value="" selected>荔枝角</option>
						<option value="">影院01</option>
						<option value="">影院02</option>
						<option value="">影院03</option>
						<option value="">影院04</option>
					</select>
				</div>
				<!-- date dropdown -->
				<div class="input-wrap">
					<select id="date">
						<option value="">請選擇</option>
						<option value="">3月 25日</option>
						<option value="">3月 26日</option>
						<option value="">3月 27日</option>
						<option value="">3月 28日</option>
						<option value="" selected>3月 29日</option>
						<option value="">3月 30日</option>
						<option value="">3月 31日</option>
					</select>
				</div>
				<!-- hall type dropdown -->
				<div class="input-wrap">
					<select id="type">
						<option value="">請選擇</option>
						<option value="">2D (英語)</option>
						<option value="" selected>3D (英語)</option>
					</select>
				</div>
				<!-- time dropdown -->
				<div class="input-wrap">
					<select id="time">
						<option value="">請選擇</option>
						<option value="">12:30 PM</option>
						<option value="">02:30 PM</option>
						<option value="">04:30 PM</option>
						<option value="">06:30 PM</option>
						<option value="">09:30 PM</option>
						<option value="">10:30 PM</option>
						<option value="">11:30 PM</option>
						<option value="">12:30 AM</option>
					</select>
				</div>
				
				<!-- btn wrap -->
				<div class="btn-wrap">
					<input type="button" class="solidBtn confirm" value="確定" disabled />
				</div>
			</div><!-- expand-able[end] -->
		</div>
	</div>
		
	<!-- seat plan -->
	<div class="seat-wrap">
		<div class="centerContent">
			<div class="legend">
				<div class="avai"><span>1</span><p>可選座位</p></div>
				<div class="prog"><span>1</span><p>處理中</p></div>
				<div class="picked"><span>1</span><p>已選座位</p></div>
				<div class="sold"><span></span><p>已售</p></div>
				<div class="wheel"><span></span><p>輪椅位</p></div>
			</div>
			<div id="seat-plan">
				<div id="zoom" class="inner">
                    <?= $this->load->view('dummy/seat-plan', '', TRUE); ?>
				</div>
			</div>
			<div class="screen"><p>銀<span>Screen</span>幕</p></div>
		</div>
	</div>
	
	<!-- reminder -->
	<div class="reminder">
		<div class="centerContent">
			<p class="reminder_h">計劃備註</p>
			<p class="reminder_p">如需轮椅票预订，请提前24小时通过电子邮件（enquiry@cgv.com）预订，并在演出前1小时在电影院购买。每次交易最多可以购买8张门票。选好座位后，必须在10分钟内完成付款，否则将被取消。</p>
			
			<div class="btn-wrap">
				<input type="button" class="solidBtn back" value="返回">
				<input type="button" class="solidBtn next" value="立即購買">
			</div>
			
		</div>
	</div>


<script type="text/javascript">
	var site_url = "<?=  site_url(); ?>";
</script>