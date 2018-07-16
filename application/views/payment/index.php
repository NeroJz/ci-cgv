<div class="selected-movie">
		<div class="centerContent">
			<div class="journey-trigger">
				<div class="journey">
					<div class="step success">選擇座位</div>
					<div class="step active">付款</div>
					<div class="step">完成</div>
					<div class="timer">9:59</div>
				</div>
				<div class="poster">
					<img src="<?= base_url('assets/images/poster2.jpg'); ?>" />
				</div>
				<h4 data-rate="2a">逃出魔幻紀：叢林挑機</h4>
				<div class="expandable purc-info-wrap">
					<div class="purc-info"><span class="label">戲院：</span><span>荔枝角</span></div>
					<div class="purc-info"><span class="label">影院：</span><span>1</span></div>
					<div class="purc-info"><span class="label">日期：</span><span>3月 29日</span></div>
					<div class="purc-info"><span class="label">時間：</span><span>09:35 PM</span></div>
					<div class="purc-info"><span class="label">版本：</span><span>3D (英語)</span></div>
				</div>
				<div class="price-wrap">
					<p id="selected-seat">已選座位：C8, C7, C6</p>
					<div class="expandable">
						<div class="selected-tic-type"><span class="name">成人</span><span class="quantity">x2</span><span class="sub-total currency">110</span></div>
						<div class="selected-tic-type"><span class="name">手續費</span><span class="quantity">x2</span><span class="sub-total currency">10</span></div>
					</div>
					<div class="price-total">
						<span>總價格</span>
						<span class="currency">120</span>
					</div>
				</div>
				<p class="desc">點我查看更多</p>
			</div>
		</div>
	</div>
	
	<!-- tic type -->
	<div id="tic-type-wrap" class="payment-box centerContent">
		<div class="sec-title">
			<h2>票種</h2>
			<p class="desc">CGV將會對每張戲票額外徵收5元服務費</p>
		</div>
		
		<div class="tic-type adult">
			<div class="txt"><p class="type">成人<span class="single-price">- 每張<span class="currency">55</span></span></p></div>
			<div class="btn">
				<button type="button" class="tic-minus"></button>
				<input type="text" class="tic-num" value="3" readonly />
				<button type="button" class="tic-plus" disabled></button>
			</div>
		</div>
		
		<div class="tic-type student">
			<div class="txt"><p class="type">學生<span class="single-price">- 每張<span class="currency">50</span></span></p></div>
			<div class="btn">
				<button type="button" class="tic-minus" disabled></button>
				<input type="text" class="tic-num" value="0" readonly />
				<button type="button" class="tic-plus" disabled></button>
			</div>
		</div>
		
		<div class="tic-type senior">
			<div class="txt"><p class="type">長者<span class="single-price">- 每張<span class="currency">40</span></span></p></div>
			<div class="btn">
				<button type="button" class="tic-minus" disabled></button>
				<input type="text" class="tic-num" value="0" readonly />
				<button type="button" class="tic-plus" disabled></button>
			</div>
		</div>
		
	</div>
	
	<!-- payment content -->
	<div id="payment-content">
		<div class="centerContent">
			<!-- promo & payment type -->
			<div class="payment-box">
				<div class="promo-wrap">
					<div class="sec-title">
						<h2>優惠</h2>
						<p class="desc"></p>
					</div>
					<select>
						<option>請選擇</option>
						<option>Testing01</option>
						<option>Testing02</option>
					</select>
				</div>
				<div class="payment-wrap">
					<div class="sec-title">
						<h2>付款</h2>
						<p class="desc"></p>
					</div>
					<div class="option-wrap">
						<button type="button" class="option visa active"></button>
						<button type="button" class="option master"></button>
						<button type="button" class="option union"></button>
					</div>
				</div>
			</div>
			<!-- reminder -->
			<div class="payment-box">
				<div class="reminder">
					<p class="reminder_h">票務隱私政策</p>
					<p class="reminder_p">CGV尊重个人资料私隐，并致力全面落实及遵守“个人资料（私隐）条例”的保障资料原则及所有有关条文。详情请阅读<a href="privacy.php">隐私政策</a>。</p>
				</div>
				<div class="e-ticket">
					<p>接收確認電郵及電子戲票</p>
					<input type="text" id="tic-mail" placeholder="你的電郵地址" value="" />
				</div>
			</div>
		</div>
	</div>	
	
	<!-- reminder -->
	<div class="reminder">
		<div class="centerContent">
			<p class="reminder_h">票務支付備註</p>
			<p class="reminder_p">21- 进入影院之前，需要有效证明学生/高级持票人的学生证/年龄证明。</p>
			<p class="reminder_p">- 身高超过1米的儿童必须持有有效的门票。 每名成年人可以陪伴不超过一个身高不到1米的儿童，而不占用任何座位。</p>
			
			<label class="agree_tnc">
				<input type="checkbox" value="" />
                <p>我已細閱並完全同意CGV的<a href="tnc.php">條款及細節</a>與<a href="disclaimer.php">免責聲明</a></p>
			</label>
			
			<div class="btn-wrap">
				<input type="button" class="solidBtn back" value="返回" />
				<input type="button" class="solidBtn next" value="下一步" />
			</div>
		</div>
	</div>


	<script type="text/javascript">

		var site_url = "<?= site_url(); ?>";
	
	</script>