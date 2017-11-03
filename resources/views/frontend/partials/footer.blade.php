<footer class="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-xs-12 ft-info">
					<div class="ft-block">
						<h3 class="ft-block-tit @if($isEdit) edit @endif" data-text="5">{!! $textList[5] !!}</h3>
						<div class="ft-block-body">
							<div class="about-info">
								<p data-text="6" @if($isEdit) class="edit" @endif>{!! $textList[6] !!}</p>
							</div>
							<address>
								<p><i class="fa fa-map-marker"></i><span @if($isEdit) class="edit" @endif" data-text="9">{!! $textList[9] !!}</span></p>
								<p><i class="fa fa-phone"></i> <span @if($isEdit) class="edit" @endif" data-text="10">{!! $textList[10] !!}</span></p>
								<p><i class="fa fa-envelope"></i> <a href="mailto:{!! $textList[11] !!}"><span @if($isEdit) class="edit" @endif" data-text="11">{!! $textList[11] !!}</span></a></p>
								<p><i class="fa fa-globe"></i> <a href="http://phukiencuoigiang.com">phukiencuoigiang.com</a></p>
							</address>
						</div>
					</div>

				</div>
				<div class="col-sm-4 col-xs-12 ft-getemail">
					<div class="ft-block">
						<h3 class="ft-block-tit @if($isEdit) edit @endif" data-text="7">{!! $textList[7] !!}</h3>
						<div class="ft-block-body">
							<p class="txt-desc @if($isEdit) edit @endif" data-text="8">{!! $textList[8] !!}</h3></p>
							<div class="frm-getemail">
								<div class="input-group">
							    <input id="txtNewsletter" type="email" class="form-control" name="txtNewsletter" placeholder="Email của bạn">
									<span class="input-group-addon" id="btnNewsletter"><i class="fa fa-envelope"></i></span>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12 ft-map">
					<object data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3340475200366!2d106.66105631546826!3d10.785706992315221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ece0a7bad71%3A0x5fded1d58e5866d9!2zMTA0IELhuq9jIEjhuqNpLCBwaMaw4budbmcgNywgVMOibiBCw6xuaCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1503933127779"></object>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bot">
		<div class="container">
			<p class="text-center"><i data-text="12" @if($isEdit) class="edit" @endif>{!! $textList[12] !!}</i></p>
			<div class="fbchatbox hidden-xs">
				<div class="fb-page fb-page1" data-href="{{ $settingArr['facebook_fanpage'] }}" data-small-header="true" data-adapt-container-width="false" data-height="300" data-width="300" data-hide-cover="true" data-show-facepile="true" data-show-posts="false" data-tabs="messages"><div class="fb-xfbml-parse-ignore"></div></div>
				<span id="closefbchat" style="white-space: nowrap; position: absolute; right: 2px; bottom: 0px; padding: 5px 25px; background: #008244; color: rgb(255, 255, 255); cursor: pointer; border-radius: 4px 4px 0 0;">Tắt Chat</span>
			</div>
		</div>
	</div><!-- /footer-bot-->
	
</footer><!-- footer -->