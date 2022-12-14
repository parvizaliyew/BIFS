
			<footer id="footer" class="overflow-hidden border-0 m-0" style="background-image: url(img/demos/construction/backgrounds/background-2.jpg); background-repeat: no-repeat; background-position: center bottom;">
				<div class="container pt-5">
					<div class="row pt-4 mb-5 gy-4">
						<div class="col-lg-2 align-self-center">
							<a href="demo-construction.html">
								<img alt="Porto" class="img-fluid foot-logo logo-footer" width="123" height="48" src="{{ asset('front') }}/img/BIFS-logo-Footer.png">
							</a>
						</div>
						<div class="col-lg-4 offset-lg-1">
							<h4 class="text-color-dark font-weight-bold mb-4-5">Navigation</h4>
							<ul class="list list-unstyled columns-lg-2">
								<li>
									<a href="{{ route('index.'.app()->getLocale()) }}" class="text-color-hover-primary">
										{{ __('lang.esas_sehife') }}
									</a>
								</li>
								<li>
									<a href="{{ __('lang.haqqimizda') }}" class="text-color-hover-primary">
										{{ __('lang.haqqimizda') }}
									</a>
								</li>
								<li>
									<a href="{{ route('product.'.app()->getLocale()) }}" class="text-color-hover-primary">
										{{ __('lang.mehsullar') }}
									</a>
								</li>
								<li>
									<a href="{{ route('project.'.app()->getLocale()) }}" class="text-color-hover-primary footer_hover">
										{{ __('lang.layiheler') }}
									</a>
								</li>
								<li>
									<a href="{{ route('contact.'.app()->getLocale()) }}" class="text-color-hover-primary">
										{{ __('lang.elaqe') }}
									</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-5">
							
							<ul class="list list-unstyled list-inline">
								<li class="list-inline-item d-inline-flex align-items-center">
									<img width="23" height="23" src="{{ asset('front') }}/img/demos/construction/icons/phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
									<a href="tel:0123456789" class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5 ms-2">{{ $setting->phone_1 }}</a>
								</li>
								<li class="list-inline-item d-inline-flex align-items-center ms-0 ms-sm-4 ms-lg-1 ms-xl-4">
									<img width="23" height="23" src="{{ asset('front') }}/img/demos/construction/icons/email.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
									<a href="mailto:0123456789" class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5 ms-2">porto@construction.com</a>
								</li>
							</ul>
						</div>
					</div>

					<hr>

					<div class="footer-copyright bg-transparent footer pb-5 mt-5-5">
						<div class="row pb-5">
							<div class="col text-center mb-5">
								<p class="text-color-grey text-3 mb-3">{{ __('lang.footer_desc') }}</p>
								<ul class="footer-social-icons social-icons social-icons-clean social-icons-medium mb-5">
									<li class="social-icons-instagram">
										<a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram text-4"></i></a>
									</li>
									<li class="social-icons-twitter">
										<a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-4"></i></a>
									</li>
									<li class="social-icons-facebook">
										<a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-4"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
				<div class="position-absolute left-100pct transform3dx-n50 top-0 d-none d-lg-block">
					<div class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-appear-animation-duration="1500ms">
						<div class="custom-square-1 custom-square-1-big bg-dark mt-0 mb-5 me-5"></div>
					</div>
				</div>
			</footer>

		</div>

		<!-- Vendor -->
		<script src="{{ asset('front') }}/vendor/plugins/js/plugins.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('front') }}/js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('front') }}/js/views/view.contact.js"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('front') }}/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('front') }}/js/theme.init.js"></script>


            @stack('js')
	</body>
</html>
