@include('layouts.customer.header')
<div class="bodywrap">
			<section class="bread-crumb">
	
	<div class="container">
		
    <ul class="breadcrumb">
    <li class="home">
        <a href="/"><span>Trang chủ</span></a>						
        <span class="mr_lr" style="display: inline-flex; align-items: center; margin: 0 5px;">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            class="svg-inline--fa fa-chevron-right fa-w-10"
                            style="width: 12px; height: 12px; vertical-align: middle;">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                            </path>
                        </svg>
                    </span>
    </li>
    <li><strong><span>Liên hệ</span></strong></li>
</ul>

	</div>
</section> 
<style>
        .bodywrap {
            width: 85%;
            margin: 0 auto;
        }
        

        .layout-contact{margin-bottom:30px}
        .layout-contact .contact{margin-bottom:20px}
        .layout-contact .contact h4{margin-bottom:15px;position:relative;font-size:24px;font-weight:700;color:#00adf0;display:inline-block}
        .layout-contact .contact h4 img{height:25px;position:absolute;left:100%;top:-2px}
        .layout-contact .contact .info-contact{padding:5px;border-radius:0 0 10px 10px}
        .layout-contact .contact .info-contact .description{margin-top:10px}
        .layout-contact .contact .info-contact .group-address{margin-top:10px}
        .layout-contact .contact .info-contact .group-address .title{font-size:17px;font-weight:700;margin-bottom:10px}
        .layout-contact .contact .info-contact .group-address ul{list-style:none;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}
        .layout-contact .contact .info-contact .group-address ul li{margin-bottom:15px;display:inline-block;position:relative;width:100%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;display:flex;align-items:center}
        @media (max-width: 767px){.layout-contact .contact .info-contact .group-address ul li{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}
        .layout-contact .contact .info-contact .group-address ul li .icon{width:40px;min-width:40px;height:40px;display:flex;align-items:center;justify-content:center;border:1px solid #00adf0;border-radius:50%;margin-right:10px}
        .layout-contact .contact .info-contact .group-address ul li .icon svg path{fill:#00adf0}
        .layout-contact .contact .info-contact .group-address ul li b{display:block}
        .layout-contact .contact .info-contact .group-address ul li a{color:#000}
        .layout-contact .contact .info-contact .group-address ul li a:hover{color:#00adf0}
        .layout-contact .contact .info-contact .group-address .see-store{color:#fff;background-color:#00adf0;line-height:38px;padding:10px 15px;font-size:14px;border-radius:5px}
        .layout-contact .contact .info-contact .group-address .see-store:hover{background-color:#d70018}
        @media (max-width: 991px){.layout-contact .form-contact{margin-bottom:20px}}
        .layout-contact .form-contact .content-form{display:block;margin-bottom:10px}
        .layout-contact .form-contact h4{margin-bottom:15px;position:relative;font-size:24px;font-weight:700;color:#00adf0;display:inline-block}
        .layout-contact .form-contact h4 img{height:25px;position:absolute;left:100%;top:-2px}
        .layout-contact .form-contact .group_contact input,.layout-contact .form-contact .group_contact textarea{border:1px solid #e1e1e1;width:100%;margin-bottom:10px;outline:none;font-size:14px;border-radius:5px}
        .layout-contact .form-contact .group_contact input{padding:5px 20px;border:1px solid #e6e6e6}
        .layout-contact .form-contact .group_contact textarea{padding:10px 20px;height:77px;border:1px solid #e6e6e6}
        .layout-contact .form-contact .group_contact .btn-lienhe{background-color:#00adf0;color:#fff;border:initial;padding:0 20px;line-height:40px;font-size:16px;border-radius:5px;width:100%}
        .layout-contact .form-contact .group_contact .btn-lienhe:hover{background-color:#d70018}
        #contact_map{height:100%}
        @media (max-width: 767px){#contact_map{margin-top:20px}}
        #contact_map iframe{width:100%;border-radius:5px;height:100%}
        @media (max-width: 991px){#contact_map iframe{height:450px}}
    </style>
<h1 class="title-head-contact a-left d-none">Liên hệ</h1>
<div class="layout-contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12">
				<div class="block-background">


					<div class="contact">
						<h4>
							Cửa Hàng NTPhone

						</h4>
						<div class="info-contact">

							<div class="group-address">
								<ul>
									<li>
										<div class="icon">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path></svg>
										</div>
										<div class="info">
											<b>Địa chỉ</b>
											<span>
												
                                            449 P. Đội Cấn, Vĩnh Phú, Ba Đình, Hà Nội


												
											</span>
										</div>

									</li>
									<li>
										<div class="icon">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256s-114.6 256-256 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path></svg>
										</div>
										<div class="info">
											<b>Thời gian làm việc</b>
											<span>
												9h - 21h<br>
Từ thứ 2 đến chủ nhật
											</span>
										</div>

									</li>
									<li>
										<div class="icon">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"></path></svg>
										</div>
										<div class="info">
											<b>Hotline</b>
											<a title="0813600999" href="tel:0813600999">0813600999</a>
										</div>
									</li>
									<li>
										<div class="icon">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path></svg>
										</div>
										<div class="info">
											<b>Email</b>
											<a title="hotro@ntphone.com" href="mailto:hotro@ntphone.com">hotro@ntphone.com</a>
										</div>
									</li>

								</ul>
							</div>
						</div>
					</div>
					<!-- <div class="form-contact">
						<h4>
							Liên hệ với chúng tôi

						</h4>
						<span class="content-form">
							Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại với bạn sớm nhất có thể .
						</span>
						<div id="pagelogin">
							<form method="post" action="/postcontact" id="contact" accept-charset="UTF-8"><input name="FormType" type="hidden" value="contact"><input name="utf8" type="hidden" value="true"><input type="hidden" id="Token-dd1c9f19875b49ab865d668055142327" name="Token" value="03AFcWeA4ek3yOg8LBUvzu3hMwDSr80AI2NKdNGUKpP7TnD6RcCYsAeDUnsTpnqT99zvFnHFHT2fZDYtCU-vicLTC1RAZd-WyDauPU5I8neuRDHOZCEdbKx5lwZ9udQUpjnhOUcKoyrEVt_ncQ5VIjJ9I9Eu7IHdnfGYxY0G7VF4Tj4-LudFx7HzvzMghWc6tQcVd0wQD-VZG6B2rsOFYJI6a2HBJsHqHk58W4T1bC6cbmAZS2Kn7rZYTGO8yn2meKbdFE33TQ9zbynxE-h-ZaoMtG8MZeIgt2YmDCiIcb2zL_-k4uzIH5tuxscqfs_IH1s9SA6nGjx72r2heYxHODuHQAGMOkOKUC0rtgYjvoxfk-9VtZK6sT1dv8z071OIr3AFwlPVyHLmmVtJnrT4gia4SjkUC5vLs_mliM18wO2P9JjYqHnHEwZZo0sdQ5xRwyewh40GnCgaEzd9CgTLJWjIN5RDTqbIuha8Q0ei2rubHyDzsrVMAGX9OF-TO3geKCeEYP1XTgBVZ6N5XHM_4B28T7bXPqbOD43dCAORdpkEg9vyHLD-X2-3ZkHc-Dq8iQEjvgJ-jq1khzU6BSBW1oGz7PoTykTmdI7yLQTk9hgizjFmg5DxYN4Qbq5hAAtC3XvdcMm_KqajPXuEZl3VBrV0DfDVs-PKIH-t3Fzfj6J3bcqIYETdjuvk7x3QUDSNR0iZUGIBaDuf7RHcfFTGseWhkDscOgGItdDFNyt2rhV1lNFO3CNyYYFRRmi5xxDN4jhSjvu1KKQLsxwfIwxcil86amfBRQVrqo6uFnJGSYfWpgvYY7VfPaQsvxDzO1GVqAejhAiSUPrcPADtckuhw1TpvE2PjaPaQgUH7GoynIIfsbYeq3kXiG8Z8Eaokr83CdVmqsrfEtnTUnoPIcTOsrkwT4o1vlTCZTTI33L_bKlDsZFIW7WIFZQuQ"><script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script><script>grecaptcha.ready(function() {grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "contact"}).then(function(token) {document.getElementById("Token-dd1c9f19875b49ab865d668055142327").value = token});});</script>
							
							
							<div class="group_contact">
								<input placeholder="Họ và tên" type="text" class="form-control  form-control-lg" required="" value="" name="contact[Name]">
								<input placeholder="Email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="" id="email1" class="form-control form-control-lg" value="" name="contact[email]">
								<input type="number" placeholder="Điện thoại*" name="contact[phone]" class="form-control form-control-lg" required="">
								<textarea placeholder="Nội dung" name="contact[body]" id="comment" class="form-control content-area form-control-lg" rows="5" required=""></textarea>
								<button type="submit" class="btn-lienhe">Gửi thông tin</button>
							</div>
							</form>
						</div>
					</div> -->
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div id="contact_map" class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8719026223316!2d105.81023479999999!3d21.0378109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab7d763caf69%3A0x48364e31cec58f97!2zQ-G7rEEgSMOATkcgxJBJ4buGTiBUSE_huqBJIE5UUEhPTkU!5e0!3m2!1svi!2s!4v1743955681605!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
		</div>
@include('layouts.customer.footer')