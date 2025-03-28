@include('layouts.customer.header')

<div class="container my-4">
    @yield('content')

    {{-- <script src="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/jquery-plugin.js?1730189825874"
        type="text/javascript"></script>
    <link rel="preload" href="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/swiper-plugin.js?1730189825874"
        as="script">
    <script src="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/swiper-plugin.js?1730189825874"></script>
    <div class="opacity_menu"></div> --}}


    <div class="main-index">
        <section class="bread-crumb">
            <div class="container">
                <div class="row">
                    <div class="col-12 a-left">
                        <ul class="breadcrumb">
                            <li class="home">
                                <a href="/"><span>Trang chủ</span></a>
                                <span class="mr_lr">&nbsp;/&nbsp;</span>
                            </li>

                            <li>
                                <a href="/account"><span>Tài khoản</span></a>
                                <span class="mr_lr">&nbsp;/&nbsp;</span>
                            </li>

                            <li><strong><span>Địa chỉ khách hàng</span></strong></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="op_address"></div>
        <section class="address">
            <div class="container page_address margin-bottom-20">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
                        <div class="block-account">
                            <h5 class="title-account">Trang tài khoản</h5>
                            <p>Xin chào, <span style="color:#ee4f83;">34 HD Hiếu</span>&nbsp;!</p>
                            <ul>
                                <li>
                                    <a class="title-info" href="/account">Thông tin tài khoản</a>
                                </li>
                                <li>
                                    <a class="title-info" href="/account/orders">Đơn hàng của bạn</a>
                                </li>
                                <li>
                                    <a class="title-info" href="/account/changepassword">Đổi mật khẩu</a>
                                </li>
                                <li>
                                    <a disabled="disabled" class="title-info active" href="javascript:void(0);">Sổ địa
                                        chỉ (1)</a>
                                </li>
                                <li>
                                    <a class="title-info" href="/account/logout">Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">

                        <h1 class="title-head">Địa chỉ của bạn</h1>
                        <p class="btn-row">
                            <button class="btn-edit-addr btn btn-primarys btn-more" type="button"
                                onclick="Bizweb.CustomerAddress.toggleNewForm(); return false;">Thêm địa chỉ</button>
                        </p>
                        <div id="add_address" class="form-list modal_address modal">
                            <div class="btn-close closed_pop"><i class="fa fa-times"></i></div>
                            <h2 class="title_pop">
                                Thêm địa chỉ mới
                            </h2>
                            <form method="post" action="/account/addresses" id="customer_address"
                                accept-charset="UTF-8"><input name="FormType" type="hidden"
                                    value="customer_address" /><input name="utf8" type="hidden" value="true" />
                                <div class="pop_bottom">
                                    <div class="form_address">
                                        <div class="field">
                                            <fieldset class="form-group">
                                                <input type="text" name="FullName" class="form-control"
                                                    data-validation-error-msg= "Không được để trống"
                                                    data-validation="required" value="" autocapitalize="words">
                                                <label>Họ tên</label>
                                            </fieldset>
                                            <p class="error-msg"></p>
                                        </div>
                                        <div class="field">
                                            <fieldset class="form-group">
                                                <input type="number" class="form-control" id="Phone" pattern="\d+"
                                                    name="Phone" maxlength="12" value="">
                                                <label>Số điện thoại</label>
                                            </fieldset>
                                        </div>
                                        <div class="field">
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="Company"
                                                    value="">
                                                <label>Công ty</label>
                                            </fieldset>
                                        </div>
                                        <div class="field">
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="Address1"
                                                    value="">
                                                <label>Địa chỉ</label>
                                            </fieldset>
                                        </div>
                                        <div class="field">
                                            <fieldset class="form-group select-field vndf">
                                                <select name="Country" class="form-control vn-fix add" id="mySelect1"
                                                    data-default="Việt Nam">
                                                    <option value="Abkhazia">Abkhazia</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                    </option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="Brunei">Brunei</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Central African Republic">Central African Republic
                                                    </option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo-Brazzaville">Congo-Brazzaville</option>
                                                    <option value="Congo-Kinshasa">Congo-Kinshasa</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan (Nippon)">Japan (Nippon)</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="North Korea">North Korea</option>
                                                    <option value="Kosovo">Kosovo</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macedonia (FYROM)">Macedonia (FYROM)</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Nagorno-Karabakh">Nagorno-Karabakh</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="South Korea">South Korea</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestine">Palestine</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                    </option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and
                                                        the Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe
                                                    </option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="South Sudan">South Sudan</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                    </option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Ossetia">South Ossetia</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="China">China</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican">Vatican</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Wales">Wales</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                </select>
                                                <label>Quốc gia</label>
                                            </fieldset>
                                        </div>
                                        <div class="group-country">
                                            <fieldset class="form-group select-field not-vn">
                                                <select name="Province" value="" class="form-control add"
                                                    id="mySelect2" data-address-type="province"
                                                    data-address-zone="billing"
                                                    data-select2-id="select2-data-billingProvince"></select>
                                                <label>Tỉnh thành</label>
                                            </fieldset>
                                            <fieldset class="form-group select-field not-vn">
                                                <select name="District" class="form-control add" value=""
                                                    id="mySelect3" data-address-type="district"
                                                    data-address-zone="billing"
                                                    data-select2-id="select2-data-billingDistrict"></select>
                                                <label>Quận huyện</label>
                                            </fieldset>
                                            <fieldset class="form-group select-field not-vn">
                                                <select name="Ward" class="form-control add" value=""
                                                    id="mySelect4" data-address-type="ward"
                                                    data-address-zone="billing"
                                                    data-select2-id="select2-data-billingWard"></select>
                                                <label>Phường xã</label>
                                            </fieldset>
                                        </div>
                                        <div class="field">
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="Zip"
                                                    value="">
                                                <label>Mã Zip</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="checkbox">
                                        <label class="c-input c-checkbox" style="padding-left: 20px;">
                                            <input type="checkbox" id="address_default_address_" name="IsDefault"
                                                value="true">
                                            <span class="c-indicator">Đặt là địa chỉ mặc định?</span>
                                        </label>
                                    </div>
                                    <div class="btn-row">
                                        <button
                                            class="btn btn-lg btn-dark-address btn-outline article-readmore btn-close"
                                            type="button"
                                            onclick="Bizweb.CustomerAddress.toggleNewForm(); return false;"><span>Hủy</span></button>
                                        <button class="btn btn-lg btn-primarys btn-submit" id="addnew"
                                            type="submit"><span>Thêm địa chỉ</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="row total_address">


                            <div id="view_address_28203460"
                                class="customer_address col-xs-12 col-lg-12 col-md-12 col-xl-12">
                                <div class="address_info"
                                    style="border-top: 1px #ebebeb solid;padding-top: 16px;margin-top: 20px;">
                                    <div class="address-group">
                                        <div class="address form-signup">
                                            <p><strong>Họ tên: </strong> 34 HD Hiếu

                                                <span class="address-default"><i class="far fa-check-circle"></i>Địa
                                                    chỉ mặc định</small>

                                            </p>
                                            <p>
                                                <strong>Địa chỉ: </strong>

                                                Hà Nội,


                                                Phường Phú Diễn,


                                                Quận Bắc Từ Liêm,


                                                Hà Nội,


                                                Vietnam

                                            </p>

                                            <p><strong>Số điện thoại:</strong> +84398451615</p>


                                        </div>
                                    </div>
                                    <div id="tool_address_28203460" class="btn-address">
                                        <p class="btn-row">
                                            <button class="btn-edit-addr btn btn-primarys btn-edit" type="button"
                                                data-form="edit_address_28203460"
                                                aria-controls="edit_address_28203460">
                                                Chỉnh sửa địa chỉ
                                            </button>
                                            <button class="hidden btn btn-dark-address btn-edit-addr btn-delete"
                                                type="button"
                                                onclick="Bizweb.CustomerAddress.destroy(28203460);return false"><span>Xóa</span></button>
                                        </p>
                                    </div>
                                </div>
                            </div>



                            <div id="edit_address_28203460" class="form-list modal_address modal modal_edit_address">
                                <div class="btn-close closed_pop"><i class="fa fa-times"></i></div>
                                <h2 class="title_pop">
                                    Chỉnh sửa địa chỉ
                                </h2>
                                <form method="post" action="/account/addresses/28203460" id="customer_address"
                                    accept-charset="UTF-8"><input name="FormType" type="hidden"
                                        value="customer_address" /><input name="utf8" type="hidden"
                                        value="true" />
                                    <div class="pop_bottom">
                                        <div class="form_address">
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" name="FullName" class="form-control"
                                                        required value=" 34 HD Hiếu" autocapitalize="words">
                                                    <label>Họ tên</label>
                                                </fieldset>
                                                <p class="error-msg"></p>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="number" pattern="\d+" class="form-control"
                                                        id="Phone" name="Phone" maxlength="12"
                                                        value="+84398451615">
                                                    <label>Số điện thoại</label>
                                                </fieldset>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="Company"
                                                        value="">
                                                    <label>Công ty</label>
                                                </fieldset>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="Address1"
                                                        value="Hà Nội">
                                                    <label>Địa chỉ</label>
                                                </fieldset>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group select-field vndf">
                                                    <select name="Country" class="form-control mySelect2"
                                                        id="mySelect2_28203460" data-default="Vietnam">Vietnam<option
                                                            value="Abkhazia">Abkhazia</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda
                                                        </option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Central African Republic">Central African
                                                            Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo-Brazzaville">Congo-Brazzaville</option>
                                                        <option value="Congo-Kinshasa">Congo-Kinshasa</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="East Timor">East Timor</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan (Nippon)">Japan (Nippon)</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="North Korea">North Korea</option>
                                                        <option value="Kosovo">Kosovo</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macedonia (FYROM)">Macedonia (FYROM)</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia">Micronesia</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Nagorno-Karabakh">Nagorno-Karabakh</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="South Korea">South Korea</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestine">Palestine</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                            and the Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe
                                                        </option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="South Sudan">South Sudan</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Saint Helena">Saint Helena</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                        </option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Ossetia">South Ossetia</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago
                                                        </option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="China">China</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican">Vatican</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Wales">Wales</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                    </select>
                                                    <label>Quốc gia</label>
                                                </fieldset>
                                            </div>
                                            <div class="group-country">
                                                <fieldset class="form-group select-field not-vn">
                                                    <select name="Province" value="Hà Nội" data-default="Hà Nội"
                                                        class="form-control add province myselect"
                                                        id="mySelect3_28203460" data-address-type="province"
                                                        data-address-zone="28203460"
                                                        data-select2-id="select2-data-billingProvince"></select>
                                                    <label>Tỉnh thành</label>
                                                </fieldset>
                                                <fieldset class="form-group select-field not-vn">
                                                    <select name="District"
                                                        class="form-control add  district myselect"
                                                        data-default="Quận Bắc Từ Liêm" value="Quận Bắc Từ Liêm"
                                                        id="mySelect4_28203460" data-address-type="district"
                                                        data-address-zone="28203460"
                                                        data-select2-id="select2-data-billingDistrict"></select>
                                                    <label>Quận huyện</label>
                                                </fieldset>
                                                <fieldset class="form-group select-field not-vn">
                                                    <select name="Ward" class="form-control add ward myselect"
                                                        data-default="Phường Phú Diễn"value="Phường Phú Diễn"
                                                        id="mySelect5_28203460" data-address-type="ward"
                                                        data-address-zone="28203460"
                                                        data-select2-id="select2-data-billingWard"></select>
                                                    <label>Phường xã</label>
                                                </fieldset>
                                            </div>

                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="Zip"
                                                        value="">
                                                    <label>Mã Zip</label>
                                                </fieldset>
                                            </div>

                                        </div>
                                        <div class="checkbox hidden ">
                                            <label class="c-input c-checkbox" style="padding-left: 20px;">
                                                <input type="checkbox" name="IsDefault" value="true">
                                                <span class="c-indicator">Đặt là địa chỉ mặc định?</span>
                                            </label>
                                        </div>
                                        <div class="btn-row">
                                            <button class="btn btn-dark-address btn-fix-addr btn-close" type="button"
                                                data-form="edit_address_28203460">
                                                Hủy
                                            </button>
                                            <button class="btn btn-primarys btn-submit" id="update"><span>Cập nhật
                                                    địa chỉ</span></button>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section>

        <script>
            $.validate({});
        </script>
        <script type="text/javascript" charset="utf-8">
            //JS address with json

            (function(window) {
                var allProvince = [];
                var allDistrict = [];
                var allWard = [];
                var loadedData = false;

                function setProvince(zone, province) {
                    $province = $("select[data-address-type='province'][data-address-zone='" + zone + "']");
                    if (!$province) {
                        return;
                    }
                    var list = ['<option value="" hidden>---</option>'];
                    for (var i = 0; i < allProvince.length; i++) {
                        var p = allProvince[i];
                        if (p.name == province) {
                            list.push("<option value='" + p.name + "' selected>" + p.name + "</option>");
                            continue;
                        }
                        list.push("<option value='" + p.name + "'>" + p.name + "</option>");
                    }

                    $province.html(list.join(''));
                };

                function setDistrict(zone, province, district) {
                    var $district = $("select[data-address-type='district'][data-address-zone='" + zone + "']");
                    if (!$district) {
                        return;
                    }
                    if (!province) {
                        $district.val('');
                        $district.attr('disabled', 'disabled');
                        $district.html('');
                        return;
                    }
                    var provinceObj = allProvince.find(function(p) {
                        return p.name == province;
                    });
                    var districts = allDistrict.filter(function(d) {
                        return d.province_id == provinceObj.id;
                    });
                    var list = ['<option value="" hidden>---</option>'];
                    for (var i = 0; i < districts.length; i++) {
                        var d = districts[i];
                        if (d.name == district) {
                            list.push("<option value='" + d.name + "' selected>" + d.name + "</option>");
                            continue;
                        }
                        list.push("<option value='" + d.name + "'>" + d.name + "</option>");
                    }
                    $district.removeAttr('disabled');
                    $district.html(list.join(''));
                };

                function setWard(zone, district, ward) {
                    var $ward = $("select[data-address-type='ward'][data-address-zone='" + zone + "']");
                    if (!$ward) {
                        return;
                    }
                    if (!district) {
                        $ward.val('');
                        $ward.attr('disabled', 'disabled');
                        $ward.html('');
                        return;
                    }
                    var list = ['<option value="" hidden>---</option>'];
                    var districtObj = allDistrict.find(function(d) {
                        return d.name == district;
                    });
                    var wards = allWard.filter(function(w) {
                        return w.district_id == districtObj.id;
                    });
                    for (var i = 0; i < wards.length; i++) {
                        var w = wards[i];
                        if (w.name == ward) {
                            list.push("<option value='" + w.name + "' selected>" + w.name + "</option>");
                            continue;
                        }
                        list.push("<option value='" + w.name + "'>" + w.name + "</option>");
                    }
                    $ward.removeAttr('disabled');
                    $ward.html(list.join(''));
                };


                function loadData() {
                    if (loadedData) {
                        return {
                            then: function(f) {
                                return f();
                            }
                        };
                    }
                    return fetch('/checkout/addresses.json')
                        .then(function(rs) {
                            return rs.json();
                        })
                        .then(function(rs) {
                            allProvince = rs.provinces;
                            allDistrict = rs.districts;
                            allWard = rs.wards;
                            loadedData = true;
                        });
                };

                function Address() {

                }

                function triggerChange(zone, type) {
                    $('select[data-address-type="' + type + '"][data-address-zone="' + zone + '"]').trigger(
                        'address:change');
                }

                Address.prototype.bind = function() {
                    $('body')
                        .on('change', 'select[data-address-type]', function(e) {
                            var type = e.target.getAttribute('data-address-type');
                            var zone = e.target.getAttribute('data-address-zone');
                            if (type === 'province') {
                                triggerChange(zone, 'province');
                                setDistrict(zone, e.target.value, undefined);
                                triggerChange(zone, 'district');
                                setWard(zone, '', undefined);
                                triggerChange(zone, 'ward');
                            } else if (type === 'district') {
                                triggerChange(zone, 'district');
                                setWard(zone, e.target.value, undefined);
                                triggerChange(zone, 'ward');
                            }
                        })
                    return this;
                };

                Address.prototype.refresh = function(callback) {
                    var zones = {};
                    $('[data-address-zone]').each(function() {
                        var $this = $(this);
                        var type = $this.data('address-type');
                        if (!type) {
                            return;
                        }
                        var zoneName = $this.data('address-zone');
                        var zone = zones[zoneName] || (zones[zoneName] = {});
                        zone[type] = $this.val() || $this.attr('value');
                    });
                    var zoneNames = Object.keys(zones);
                    if (zoneNames.length == 0) {
                        return;
                    }
                    loadData().then(function() {
                        zoneNames.forEach(function(zoneName) {
                            var zone = zones[zoneName];
                            setProvince(zoneName, zone.province);
                            triggerChange(zoneName, 'province');
                            setDistrict(zoneName, zone.province, zone.district);
                            triggerChange(zoneName, 'district');
                            setWard(zoneName, zone.district, zone.ward);
                            triggerChange(zoneName, 'ward');
                        });
                        if (callback) {
                            callback();
                        }
                    });
                };

                window.Address = new Address();

            })(window)


            //Page address

            new Bizweb.CountrySelector('address_country_new');

            new Bizweb.CountrySelector('address_country_28203460');


            $(document).ready(function() {

                var elements = $("input, select, textarea");
                for (var i = 0; i < elements.length; i++) {
                    elements[i].oninvalid = function(e) {
                        e.target.setCustomValidity("");
                        if (!e.target.validity.valid) {
                            e.target.setCustomValidity(e.target.getAttribute("requiredmsg"));
                        }
                    };
                    elements[i].oninput = function(e) {
                        e.target.setCustomValidity("");
                    };
                }
                $('.mySelect2').each(function() {
                    var old = $(this).attr('data-default');
                    $(this).val(old);
                    $(this).change();
                })

                $('.btn-close').on('click', function(e) {
                    e.preventDefault();
                    $('.op_address').removeClass('opened');
                    $('.modal_address').hide();
                    $('html').removeClass('no-scroll');
                    $('.not-vn').removeClass('hidden');
                    Address.bind().refresh();
                    $('.mySelect2').each(function() {
                        var old = $(this).attr('data-default');
                        $(this).val(old);
                        $(this).change();
                    })
                    setTimeout(function() {
                        $('input').prop('selected', false);
                    }, 500)
                    $('.form-group input').each(function() {
                        if ($(this).val() != "") {
                            $(this).addClass("has-content");
                        } else {
                            $(this).removeClass("has-content");
                        }
                    })
                });
                $('.btn-fix-addr').click(function(e) {
                    $(this).parents('.collapse').removeClass('in').hide();
                })
            })

            $('fieldset').click(function() {
                $(this).find('input').focus();
            });

            $(document).on('click', '.btn-more', function(e) {
                $('.op_address').toggleClass('opened');
                $('#add_address').show();
                $('html').toggleClass('no-scroll');
                $('.mySelect1').each(function() {
                    var old = $(this).attr('data-default');
                    $(this).val(old);
                    $(this).change();
                })
                if ($("#customer_address select[name='Country'] option:selected").val() != 'Vietnam') {
                    $('.not-vn').addClass('hidden');
                } else {
                    $('.not-vn').removeClass('hidden');
                }

                Address.bind().refresh();
                $('.form-group input').each(function() {
                    if ($(this).val() != "") {
                        $(this).addClass("has-content");
                    } else {
                        $(this).removeClass("has-content");
                    }
                })
            });
            if ($(window).width() > 768) {
                $(function() {
                    setInterval(function() {
                        if ($('.modal_address').find("select[name='Country'] option:selected").val() !=
                            'Vietnam') {
                            if ($(".modal_address input[name='FullName']").val() === '') {
                                if ($('.help-block.form-error').length) {
                                    $('.modal_address').css("height", "515px");
                                } else {
                                    $('.modal_address').css("height", "495px");
                                }
                            } else {
                                $('.modal_address').css("height", "495px");
                            }
                        } else if ($('.modal_address').find("select[name='Country'] option:selected").val() ===
                            'Vietnam') {
                            if ($(".modal_address input[name='FullName']").val() !== '') {
                                $('.modal_address').css("height", "545px");
                            } else {
                                if ($('.help-block.form-error').length) {
                                    $('.modal_address').css("height", "575px");
                                } else {
                                    $('.modal_address').css("height", "545px");
                                }
                            }
                        } else {
                            $('.modal_address').css("height", "545px");
                        }



                        if ($('.modal_edit_address').find("select[name='Country'] option:selected").val() !=
                            'Vietnam') {
                            if ($(".modal_edit_address input[name='FullName']").val() === '') {
                                if ($('.help-block.form-error').length) {
                                    $('.modal_edit_address').css("height", "515px");
                                } else {
                                    $('.modal_edit_address').css("height", "495px");
                                }
                            } else {
                                $('.modal_edit_address').css("height", "495px");
                            }
                        } else if ($('.modal_edit_address').find("select[name='Country'] option:selected")
                            .val() === 'Vietnam') {
                            if ($(".modal_edit_address input[name='FullName']").val() !== '') {
                                $('.modal_edit_address').css("height", "545px");
                            } else {
                                if ($('.help-block.form-error').length) {
                                    $('.modal_edit_address').css("height", "575px");
                                } else {
                                    $('.modal_edit_address').css("height", "545px");
                                }
                            }
                        } else {
                            $('.modal_edit_address').css("height", "545px");
                        }

                    }, 500);
                })
            }

            $(function() {
                $("select[name='Country']").change(function() {
                    if ($(this).val() != 'Vietnam') {
                        $('.not-vn').addClass('hidden');
                    } else {
                        $('.not-vn').removeClass('hidden');
                    }
                });
            });


            $(document).on('click', '.btn-edit', function(e) {
                $('.op_address').toggleClass('opened');
                var ctr = $(this).attr('aria-controls');
                $('#' + ctr).show();
                $('html').toggleClass('no-scroll');
                Address.bind().refresh();
                var idform = $(this).data('form');
                $('.mySelect2').each(function() {
                    var old = $(this).attr('data-default');
                    $(this).val(old);
                    $(this).change();
                })
                if ($('#' + idform).find("select[name='Country']").data('default') != 'Vietnam') {
                    $('.not-vn').addClass('hidden');
                } else {
                    $('.not-vn').removeClass('hidden');
                }
                $('#' + idform).each(function() {
                    var thisform = $(this);
                    $(thisform).find('.province').each(function() {
                        if ($(thisform).find('.province').data('default') != "") {
                            $(thisform).find('.province').addClass("has-content");
                        } else {
                            $(thisform).find('.province').removeClass("has-content");
                        }
                    })
                    $(thisform).find('.district').each(function() {
                        if ($(thisform).find('.district').data('default') != "") {
                            $(thisform).find('.district').addClass("has-content");
                        } else {
                            $(thisform).find('.district').removeClass("has-content");
                        }
                    })
                    $(thisform).find('.ward').each(function() {
                        if ($(thisform).find('.ward').data('default') != "") {
                            $(thisform).find('.ward').addClass("has-content");
                        } else {
                            $(thisform).find('.ward').removeClass("has-content");
                        }
                    })
                });
            });



            $(window).on('load', function() {
                setTimeout(function() {
                    $('.form-group input').each(function() {
                        if ($(this).val() != "") {
                            $(this).addClass("has-content");
                        } else {
                            $(this).removeClass("has-content");
                        }
                    })
                    $('.form-group select').each(function() {
                        $('.form-group .add').val("Vietnam");
                        if ($(this).val() != "") {
                            $(this).addClass("has-content");
                        } else {
                            $(this).removeClass("has-content");
                        }
                    })
                    $(".form-group input,.form-group select").focusout(function() {
                        if ($(this).val() != "") {
                            $(this).addClass("has-content");
                        } else {
                            $(this).removeClass("has-content");
                        }
                    })
                }, 500);
                return false;
            });
        </script>
    </div>

    <script src="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/search_function.js?1730189825874"></script>
    <link rel="preload" href="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/main.js?1730189825874"
        as="script">
    <script src="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/main.js?1730189825874" type="text/javascript">
    </script>


    <script src="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/flash.js?1730189825874" defer></script>






    <script>
        ! function(a, b) {
            "function" == typeof define && define.amd ? define(["jquery"], function(a) {
                return b(a)
            }) : "object" == typeof exports ? module.exports = b(require("jquery")) : b(jQuery)
        }(this, function(a) {
            ! function(a, b) {
                "use strict";

                function c(b) {
                    b && "custom" === b.errorMessagePosition && "function" == typeof b.errorMessageCustom && (a
                        .formUtils.warn(
                            "Use of deprecated function errorMessageCustom, use config.submitErrorMessageCallback instead"
                        ), b.submitErrorMessageCallback = function(a, c) {
                            b.errorMessageCustom(a, b.language.errorTitle, c, b)
                        })
                }

                function d(b) {
                    if (b.errorMessagePosition && "object" == typeof b.errorMessagePosition) {
                        a.formUtils.warn(
                            "Deprecated use of config parameter errorMessagePosition, use config.submitErrorMessageCallback instead"
                        );
                        var c = b.errorMessagePosition;
                        b.errorMessagePosition = "top", b.submitErrorMessageCallback = function() {
                            return c
                        }
                    }
                }

                function e(b) {
                    var c = b.find("[data-validation-if-checked]");
                    c.length && a.formUtils.warn(
                        'Detected use of attribute "data-validation-if-checked" which is deprecated. Use "data-validation-depends-on" provided by module "logic"'
                    ), c.on("beforeValidation", function() {
                        var c = a(this),
                            d = c.valAttr("if-checked"),
                            e = a('input[name="' + d + '"]', b),
                            f = e.is(":checked"),
                            g = (a.formUtils.getValue(e) || "").toString(),
                            h = c.valAttr("if-checked-value");
                        (!f || h && h !== g) && c.valAttr("skipped", !0)
                    })
                }
                a.fn.validateForm = function(b, c) {
                    return a.formUtils.warn("Use of deprecated function $.validateForm, use $.isValid instead"),
                        this.isValid(b, c, !0)
                }, a(window).on("validatorsLoaded formValidationSetup", function(b, f, g) {
                    f || (f = a("form")), c(g), d(g), e(f)
                })
            }(a),
            function(a) {
                "use strict";
                var b = {
                    resolveErrorMessage: function(a, b, c, d, e) {
                        var f = d.validationErrorMsgAttribute + "-" + c.replace("validate_", ""),
                            g = a.attr(f);
                        return g || (g = a.attr(d.validationErrorMsgAttribute), g || (g = "function" != typeof b
                            .errorMessageKey ? e[b.errorMessageKey] : e[b.errorMessageKey(d)], g || (g =
                                b.errorMessage))), g
                    },
                    getParentContainer: function(b) {
                        if (b.valAttr("error-msg-container")) return a(b.valAttr("error-msg-container"));
                        var c = b.parent();
                        if (!c.hasClass("form-group") && !c.closest("form").hasClass("form-horizontal")) {
                            var d = c.closest(".form-group");
                            if (d.length) return d.eq(0)
                        }
                        return c
                    },
                    applyInputErrorStyling: function(a, b) {
                        a.addClass(b.errorElementClass).removeClass("valid"), this.getParentContainer(a)
                            .addClass(b.inputParentClassOnError).removeClass(b.inputParentClassOnSuccess),
                            "" !== b.borderColorOnError && a.css("border-color", b.borderColorOnError)
                    },
                    applyInputSuccessStyling: function(a, b) {
                        a.addClass("valid"), this.getParentContainer(a).addClass(b.inputParentClassOnSuccess)
                    },
                    removeInputStylingAndMessage: function(a, c) {
                        a.removeClass("valid").removeClass(c.errorElementClass).css("border-color", "");
                        var d = b.getParentContainer(a);
                        if (d.removeClass(c.inputParentClassOnError).removeClass(c.inputParentClassOnSuccess),
                            "function" == typeof c.inlineErrorMessageCallback) {
                            var e = c.inlineErrorMessageCallback(a, !1, c);
                            e && e.html("")
                        } else d.find("." + c.errorMessageClass).remove()
                    },
                    removeAllMessagesAndStyling: function(c, d) {
                        if ("function" == typeof d.submitErrorMessageCallback) {
                            var e = d.submitErrorMessageCallback(c, d);
                            e && e.html("")
                        } else c.find("." + d.errorMessageClass + ".alert").remove();
                        c.find("." + d.errorElementClass + ",.valid").each(function() {
                            b.removeInputStylingAndMessage(a(this), d)
                        })
                    },
                    setInlineMessage: function(b, c, d) {
                        this.applyInputErrorStyling(b, d);
                        var e, f = document.getElementById(b.attr("name") + "_err_msg"),
                            g = !1,
                            h = function(d) {
                                a.formUtils.$win.trigger("validationErrorDisplay", [b, d]), d.html(c)
                            },
                            i = function() {
                                var f = !1;
                                g.find("." + d.errorMessageClass).each(function() {
                                    return this.inputReferer === b[0] ? (f = a(this), !1) : void 0
                                }), f ? c ? h(f) : f.remove() : "" !== c && (e = a('<div class="' + d
                                    .errorMessageClass + ' alert"></div>'), h(e), e[0].inputReferer = b[
                                    0], g.prepend(e))
                            };
                        if (f) a.formUtils.warn("Using deprecated element reference " + f.id), g = a(f), i();
                        else if ("function" == typeof d.inlineErrorMessageCallback) {
                            if (g = d.inlineErrorMessageCallback(b, c, d), !g) return;
                            i()
                        } else {
                            var j = this.getParentContainer(b);
                            e = j.find("." + d.errorMessageClass + ".help-block"), 0 === e.length && (e = a(
                                    "<span></span>").addClass("help-block").addClass(d.errorMessageClass), e
                                .appendTo(j)), h(e)
                        }
                    },
                    setMessageInTopOfForm: function(b, c, d, e) {
                        var f =
                            '<div class="{errorMessageClass} alert alert-danger"><strong>{errorTitle}</strong><ul>{fields}</ul></div>',
                            g = !1;
                        if ("function" != typeof d.submitErrorMessageCallback || (g = d
                                .submitErrorMessageCallback(b, c, d))) {
                            var h = {
                                errorTitle: e.errorTitle,
                                fields: "",
                                errorMessageClass: d.errorMessageClass
                            };
                            a.each(c, function(a, b) {
                                h.fields += "<li>" + b + "</li>"
                            }), a.each(h, function(a, b) {
                                f = f.replace("{" + a + "}", b)
                            }), g ? g.html(f) : b.children().eq(0).before(a(f))
                        }
                    }
                };
                a.formUtils = a.extend(a.formUtils || {}, {
                    dialogs: b
                })
            }(a),
            function(a, b, c) {
                "use strict";
                var d = 0;
                a.fn.validateOnBlur = function(b, c) {
                    var d = this,
                        e = this.find("*[data-validation]");
                    return e.each(function() {
                        var e = a(this);
                        if (e.is("[type=radio]")) {
                            var f = d.find('[type=radio][name="' + e.attr("name") + '"]');
                            f.bind("blur.validation", function() {
                                e.validateInputOnBlur(b, c, !0, "blur")
                            }), c.validateCheckboxRadioOnClick && f.bind("click.validation",
                                function() {
                                    e.validateInputOnBlur(b, c, !0, "click")
                                })
                        }
                    }), e.bind("blur.validation", function() {
                        a(this).validateInputOnBlur(b, c, !0, "blur")
                    }), c.validateCheckboxRadioOnClick && this.find(
                        "input[type=checkbox][data-validation],input[type=radio][data-validation]").bind(
                        "click.validation",
                        function() {
                            a(this).validateInputOnBlur(b, c, !0, "click")
                        }), this
                }, a.fn.validateOnEvent = function(b, c) {
                    var d = "FORM" === this[0].nodeName ? this.find("*[data-validation-event]") : this;
                    return d.each(function() {
                        var d = a(this),
                            e = d.valAttr("event");
                        e && d.unbind(e + ".validation").bind(e + ".validation", function(d) {
                            9 !== (d || {}).keyCode && a(this).validateInputOnBlur(b, c, !0, e)
                        })
                    }), this
                }, a.fn.showHelpOnFocus = function(b) {
                    return b || (b = "data-validation-help"), this.find(".has-help-txt").valAttr("has-keyup-event",
                        !1).removeClass("has-help-txt"), this.find("textarea,input").each(function() {
                        var c = a(this),
                            e = "jquery_form_help_" + ++d,
                            f = c.attr(b);
                        f && c.addClass("has-help-txt").unbind("focus.help").bind("focus.help", function() {
                            var b = c.parent().find("." + e);
                            0 === b.length && (b = a("<span />").addClass(e).addClass("help")
                                .addClass("help-block").text(f).hide(), c.after(b)), b.fadeIn()
                        }).unbind("blur.help").bind("blur.help", function() {
                            a(this).parent().find("." + e).fadeOut("slow")
                        })
                    }), this
                }, a.fn.validate = function(b, c, d) {
                    var e = a.extend({}, a.formUtils.LANG, d || {});
                    this.each(function() {
                        var d = a(this),
                            f = d.closest("form").get(0).validationConfig || {};
                        d.one("validation", function(a, c) {
                            "function" == typeof b && b(c, this, a)
                        }), d.validateInputOnBlur(e, a.extend({}, f, c || {}), !0)
                    })
                }, a.fn.willPostponeValidation = function() {
                    return (this.valAttr("suggestion-nr") || this.valAttr("postpone") || this.hasClass(
                        "hasDatepicker")) && !b.postponedValidation
                }, a.fn.validateInputOnBlur = function(c, d, e, f) {
                    if (a.formUtils.eventType = f, this.willPostponeValidation()) {
                        var g = this,
                            h = this.valAttr("postpone") || 200;
                        return b.postponedValidation = function() {
                            g.validateInputOnBlur(c, d, e, f), b.postponedValidation = !1
                        }, setTimeout(function() {
                            b.postponedValidation && b.postponedValidation()
                        }, h), this
                    }
                    c = a.extend({}, a.formUtils.LANG, c || {}), a.formUtils.dialogs.removeInputStylingAndMessage(
                        this, d);
                    var i = this,
                        j = i.closest("form"),
                        k = a.formUtils.validateInput(i, c, d, j, f);
                    return e && i.unbind("keyup.validation"), k.shouldChangeDisplay && (k.isValid ? a.formUtils
                        .dialogs.applyInputSuccessStyling(i, d) : a.formUtils.dialogs.setInlineMessage(i, k
                            .errorMsg, d)), !k.isValid && e && i.bind("keyup.validation", function(b) {
                        9 !== b.keyCode && a(this).validateInputOnBlur(c, d, !1, "keyup")
                    }), this
                }, a.fn.valAttr = function(a, b) {
                    return b === c ? this.attr("data-validation-" + a) : b === !1 || null === b ? this.removeAttr(
                        "data-validation-" + a) : (a = a.length > 0 ? "-" + a : "", this.attr(
                        "data-validation" + a, b))
                }, a.fn.isValid = function(b, c, d) {
                    if (a.formUtils.isLoadingModules) {
                        var e = this;
                        return setTimeout(function() {
                            e.isValid(b, c, d)
                        }, 200), null
                    }
                    c = a.extend({}, a.formUtils.defaultConfig(), c || {}), b = a.extend({}, a.formUtils.LANG, b ||
                        {}), d = d !== !1, a.formUtils.errorDisplayPreventedWhenHalted && (delete a.formUtils
                            .errorDisplayPreventedWhenHalted, d = !1), a.formUtils.isValidatingEntireForm = !0, a
                        .formUtils.haltValidation = !1;
                    var f = function(b, e) {
                            a.inArray(b, h) < 0 && h.push(b), i.push(e), e.attr("current-error", b), d && a
                                .formUtils.dialogs.applyInputErrorStyling(e, c)
                        },
                        g = [],
                        h = [],
                        i = [],
                        j = this,
                        k = function(b, d) {
                            return "submit" === d || "button" === d || "reset" === d ? !0 : a.inArray(b, c.ignore ||
                                []) > -1
                        };
                    if (d && a.formUtils.dialogs.removeAllMessagesAndStyling(j, c), j.find("input,textarea,select")
                        .filter(':not([type="submit"],[type="button"])').each(function() {
                            var d = a(this),
                                e = d.attr("type"),
                                h = "radio" === e || "checkbox" === e,
                                i = d.attr("name");
                            if (!k(i, e) && (!h || a.inArray(i, g) < 0)) {
                                h && g.push(i);
                                var l = a.formUtils.validateInput(d, b, c, j, "submit");
                                l.isValid ? l.isValid && l.shouldChangeDisplay && (d.valAttr("current-error", !
                                    1), a.formUtils.dialogs.applyInputSuccessStyling(d, c)) : f(l.errorMsg,
                                    d)
                            }
                        }), "function" == typeof c.onValidate) {
                        var l = c.onValidate(j);
                        a.isArray(l) ? a.each(l, function(a, b) {
                            f(b.message, b.element)
                        }) : l && l.element && l.message && f(l.message, l.element)
                    }
                    return a.formUtils.isValidatingEntireForm = !1, !a.formUtils.haltValidation && i.length > 0 ? (
                        d && ("top" === c.errorMessagePosition ? a.formUtils.dialogs.setMessageInTopOfForm(j, h,
                            c, b) : a.each(i, function(b, d) {
                            a.formUtils.dialogs.setInlineMessage(d, d.attr("current-error"), c)
                        }), c.scrollToTopOnError && a.formUtils.$win.scrollTop(j.offset().top - 20)), !1) : (!
                        d && a.formUtils.haltValidation && (a.formUtils.errorDisplayPreventedWhenHalted = !0), !
                        a.formUtils.haltValidation)
                }, a.fn.restrictLength = function(b) {
                    return new a.formUtils.lengthRestriction(this, b), this
                }, a.fn.addSuggestions = function(b) {
                    var c = !1;
                    return this.find("input").each(function() {
                        var d = a(this);
                        c = a.split(d.attr("data-suggestions")), c.length > 0 && !d.hasClass(
                            "has-suggestions") && (a.formUtils.suggest(d, c, b), d.addClass(
                            "has-suggestions"))
                    }), this
                }
            }(a, window),
            function(a) {
                "use strict";
                a.formUtils = a.extend(a.formUtils || {}, {
                    isLoadingModules: !1,
                    loadedModules: {},
                    loadModules: function(b, c, d) {
                        if (a.formUtils.isLoadingModules) return void setTimeout(function() {
                            a.formUtils.loadModules(b, c, d)
                        }, 10);
                        var e = !1,
                            f = function(b, c) {
                                var f = a.split(b),
                                    g = f.length,
                                    h = function() {
                                        g--, 0 === g && (a.formUtils.isLoadingModules = !1, d && e &&
                                            "function" == typeof d && d())
                                    };
                                g > 0 && (a.formUtils.isLoadingModules = !0);
                                var i = "?_=" + (new Date).getTime(),
                                    j = document.getElementsByTagName("head")[0] || document
                                    .getElementsByTagName("body")[0];
                                a.each(f, function(b, d) {
                                    if (d = a.trim(d), 0 === d.length) h();
                                    else {
                                        var f = c + d + (".js" === d.slice(-3) ? "" : ".js"),
                                            g = document.createElement("SCRIPT");
                                        f in a.formUtils.loadedModules ? h() : (a.formUtils
                                            .loadedModules[f] = 1, e = !0, g.type =
                                            "text/javascript", g.onload = h, g.src = f + (
                                                ".dev.js" === f.slice(-7) ? i : ""), g.onerror =
                                            function() {
                                                a.formUtils.warn(
                                                    "Unable to load form validation module " +
                                                    f)
                                            }, g.onreadystatechange = function() {
                                                "complete" !== this.readyState && "loaded" !==
                                                    this.readyState || (h(), this.onload = null,
                                                        this.onreadystatechange = null)
                                            }, j.appendChild(g))
                                    }
                                })
                            };
                        if (c) f(b, c);
                        else {
                            var g = function() {
                                var c = !1;
                                return a('script[src*="form-validator"]').each(function() {
                                    return c = this.src.substr(0, this.src.lastIndexOf("/")) +
                                        "/", "/" === c && (c = ""), !1
                                }), c !== !1 ? (f(b, c), !0) : !1
                            };
                            g() || a(g)
                        }
                    }
                })
            }(a),
            function(a) {
                "use strict";
                a.split = function(b, c) {
                    if ("function" != typeof c) {
                        if (!b) return [];
                        var d = [];
                        return a.each(b.split(c ? c : /[,|\-\s]\s*/g), function(b, c) {
                            c = a.trim(c), c.length && d.push(c)
                        }), d
                    }
                    b && a.each(b.split(/[,|\-\s]\s*/g), function(b, d) {
                        return d = a.trim(d), d.length ? c(d, b) : void 0
                    })
                }, a.validate = function(b) {
                    var c = a.extend(a.formUtils.defaultConfig(), {
                        form: "form",
                        validateOnEvent: !1,
                        validateOnBlur: !0,
                        validateCheckboxRadioOnClick: !0,
                        showHelpOnFocus: !0,
                        addSuggestions: !0,
                        modules: "",
                        onModulesLoaded: null,
                        language: !1,
                        onSuccess: !1,
                        onError: !1,
                        onElementValidate: !1
                    });
                    if (b = a.extend(c, b || {}), b.lang && "en" !== b.lang) {
                        var d = "lang/" + b.lang + ".js";
                        b.modules += b.modules.length ? "," + d : d
                    }
                    a(b.form).each(function(c, d) {
                        d.validationConfig = b;
                        var e = a(d);
                        e.trigger("formValidationSetup", [e, b]), e.find(".has-help-txt").unbind(
                                "focus.validation").unbind("blur.validation"), e.removeClass(
                                "has-validation-callback").unbind("submit.validation").unbind(
                                "reset.validation").find("input[data-validation],textarea[data-validation]")
                            .unbind("blur.validation"), e.bind("submit.validation", function(c) {
                                var d = a(this),
                                    e = function() {
                                        return c.stopImmediatePropagation(), !1
                                    };
                                if (a.formUtils.haltValidation) return e();
                                if (a.formUtils.isLoadingModules) return setTimeout(function() {
                                    d.trigger("submit.validation")
                                }, 200), e();
                                var f = d.isValid(b.language, b);
                                if (a.formUtils.haltValidation) return e();
                                if (!f || "function" != typeof b.onSuccess) return f || "function" !=
                                    typeof b.onError ? f ? !0 : e() : (b.onError(d), e());
                                var g = b.onSuccess(d);
                                return g === !1 ? e() : void 0
                            }).bind("reset.validation", function() {
                                a.formUtils.dialogs.removeAllMessagesAndStyling(e, b)
                            }).addClass("has-validation-callback"), b.showHelpOnFocus && e
                            .showHelpOnFocus(), b.addSuggestions && e.addSuggestions(), b.validateOnBlur &&
                            (e
                                .validateOnBlur(b.language, b), e.bind("html5ValidationAttrsFound",
                                    function() {
                                        e.validateOnBlur(b.language, b)
                                    })), b.validateOnEvent && e.validateOnEvent(b.language, b)
                    }), "" !== b.modules && a.formUtils.loadModules(b.modules, !1, function() {
                        "function" == typeof b.onModulesLoaded && b.onModulesLoaded();
                        var c = "string" == typeof b.form ? a(b.form) : b.form;
                        a.formUtils.$win.trigger("validatorsLoaded", [c, b])
                    })
                }
            }(a),
            function(a, b) {
                "use strict";
                var c = a(b);
                a.formUtils = a.extend(a.formUtils || {}, {
                    $win: c,
                    defaultConfig: function() {
                        return {
                            ignore: [],
                            errorElementClass: "error",
                            borderColorOnError: "#b94a48",
                            errorMessageClass: "form-error",
                            validationRuleAttribute: "data-validation",
                            validationErrorMsgAttribute: "data-validation-error-msg",
                            errorMessagePosition: "inline",
                            errorMessageTemplate: {
                                container: '<div class="{errorMessageClass} alert alert-danger">{messages}</div>',
                                messages: "<strong>{errorTitle}</strong><ul>{fields}</ul>",
                                field: "<li>{msg}</li>"
                            },
                            scrollToTopOnError: !0,
                            dateFormat: "yyyy-mm-dd",
                            addValidClassOnAll: !1,
                            decimalSeparator: ".",
                            inputParentClassOnError: "has-error",
                            inputParentClassOnSuccess: "has-success",
                            validateHiddenInputs: !1,
                            inlineErrorMessageCallback: !1,
                            submitErrorMessageCallback: !1
                        }
                    },
                    validators: {},
                    _events: {
                        load: [],
                        valid: [],
                        invalid: []
                    },
                    haltValidation: !1,
                    isValidatingEntireForm: !1,
                    addValidator: function(a) {
                        var b = 0 === a.name.indexOf("validate_") ? a.name : "validate_" + a.name;
                        void 0 === a.validateOnKeyUp && (a.validateOnKeyUp = !0), this.validators[b] = a
                    },
                    warn: function(a) {
                        "console" in b ? "function" == typeof b.console.warn ? b.console.warn(a) :
                            "function" == typeof b.console.log && b.console.log(a) : alert(a)
                    },
                    getValue: function(a, b) {
                        var c = b ? b.find(a) : a;
                        if (c.length > 0) {
                            var d = c.eq(0).attr("type");
                            return "radio" === d || "checkbox" === d ? c.filter(":checked").val() : c.val()
                        }
                        return !1
                    },
                    validateInput: function(b, c, d, e, f) {
                        d = d || a.formUtils.defaultConfig(), c = c || a.formUtils.LANG;
                        var g = this.getValue(b);
                        b.valAttr("skipped", !1).one("beforeValidation", function() {
                            (b.attr("disabled") || !b.is(":visible") && !d.validateHiddenInputs) &&
                            b.valAttr("skipped", 1)
                        }).trigger("beforeValidation", [g, d, c]);
                        var h = "true" === b.valAttr("optional"),
                            i = !g && h,
                            j = b.attr(d.validationRuleAttribute),
                            k = !0,
                            l = "",
                            m = {
                                isValid: !0,
                                shouldChangeDisplay: !0,
                                errorMsg: ""
                            };
                        if (!j || i || b.valAttr("skipped")) return m.shouldChangeDisplay = d
                            .addValidClassOnAll, m;
                        var n = b.valAttr("ignore");
                        return n && a.each(n.split(""), function(a, b) {
                                g = g.replace(new RegExp("\\" + b), "")
                            }), a.split(j, function(h) {
                                0 !== h.indexOf("validate_") && (h = "validate_" + h);
                                var i = a.formUtils.validators[h];
                                if (!i) throw new Error('Using undefined validator "' + h +
                                    '". Maybe you have forgotten to load the module that "' +
                                    h + '" belongs to?');
                                return "validate_checkbox_group" === h && (b = e.find('[name="' + b
                                        .attr("name") + '"]:eq(0)')), ("keyup" !== f || i
                                        .validateOnKeyUp) && (k = i.validatorFunction(g, b, d, c, e)),
                                    k ? void 0 : (l = a.formUtils.dialogs.resolveErrorMessage(b, i, h,
                                        d, c), !1)
                            }, " "), k === !1 ? (b.trigger("validation", !1), m.errorMsg = l, m.isValid = !
                                1, m.shouldChangeDisplay = !0) : null === k ? m.shouldChangeDisplay = !1 : (
                                b.trigger("validation", !0), m.shouldChangeDisplay = !0), "function" ==
                            typeof d.onElementValidate && null !== l && d.onElementValidate(m.isValid, b, e,
                                l), b.trigger("afterValidation", [m, f]), m
                    },
                    parseDate: function(b, c, d) {
                        var e, f, g, h, i = c.replace(/[a-zA-Z]/gi, "").substring(0, 1),
                            j = "^",
                            k = c.split(i || null);
                        if (a.each(k, function(a, b) {
                                j += (a > 0 ? "\\" + i : "") + "(\\d{" + b.length + "})"
                            }), j += "$", d) {
                            var l = [];
                            a.each(b.split(i), function(a, b) {
                                1 === b.length && (b = "0" + b), l.push(b)
                            }), b = l.join(i)
                        }
                        if (e = b.match(new RegExp(j)), null === e) return !1;
                        var m = function(b, c, d) {
                            for (var e = 0; e < c.length; e++)
                                if (c[e].substring(0, 1) === b) return a.formUtils.parseDateInt(d[e +
                                    1]);
                            return -1
                        };
                        return g = m("m", k, e), f = m("d", k, e), h = m("y", k, e), 2 === g && f > 28 && (
                                h % 4 !== 0 || h % 100 === 0 && h % 400 !== 0) || 2 === g && f > 29 && (h %
                                4 === 0 || h % 100 !== 0 && h % 400 === 0) || g > 12 || 0 === g ? !1 : this
                            .isShortMonth(g) && f > 30 || !this.isShortMonth(g) && f > 31 || 0 === f ? !1 :
                            [h, g, f]
                    },
                    parseDateInt: function(a) {
                        return 0 === a.indexOf("0") && (a = a.replace("0", "")), parseInt(a, 10)
                    },
                    isShortMonth: function(a) {
                        return a % 2 === 0 && 7 > a || a % 2 !== 0 && a > 7
                    },
                    lengthRestriction: function(b, c) {
                        var d = parseInt(c.text(), 10),
                            e = 0,
                            f = function() {
                                var a = b.val().length;
                                if (a > d) {
                                    var f = b.scrollTop();
                                    b.val(b.val().substring(0, d)), b.scrollTop(f)
                                }
                                e = d - a, 0 > e && (e = 0), c.text(e)
                            };
                        a(b).bind("keydown keyup keypress focus blur", f).bind("cut paste", function() {
                            setTimeout(f, 100)
                        }), a(document).bind("ready", f)
                    },
                    numericRangeCheck: function(b, c) {
                        var d = a.split(c),
                            e = parseInt(c.substr(3), 10);
                        return 1 === d.length && -1 === c.indexOf("min") && -1 === c.indexOf("max") && (
                                d = [c, c]), 2 === d.length && (b < parseInt(d[0], 10) || b > parseInt(d[1],
                                10)) ? ["out", d[0], d[1]] : 0 === c.indexOf("min") && e > b ? ["min", e] :
                            0 === c.indexOf("max") && b > e ? ["max", e] : ["ok"]
                    },
                    _numSuggestionElements: 0,
                    _selectedSuggestion: null,
                    _previousTypedVal: null,
                    suggest: function(b, d, e) {
                        var f = {
                                css: {
                                    maxHeight: "150px",
                                    background: "#FFF",
                                    lineHeight: "150%",
                                    textDecoration: "underline",
                                    overflowX: "hidden",
                                    overflowY: "auto",
                                    border: "#CCC solid 1px",
                                    borderTop: "none",
                                    cursor: "pointer"
                                },
                                activeSuggestionCSS: {
                                    background: "#E9E9E9"
                                }
                            },
                            g = function(a, b) {
                                var c = b.offset();
                                a.css({
                                    width: b.outerWidth(),
                                    left: c.left + "px",
                                    top: c.top + b.outerHeight() + "px"
                                })
                            };
                        e && a.extend(f, e), f.css.position = "absolute", f.css["z-index"] = 9999, b.attr(
                            "autocomplete", "off"), 0 === this._numSuggestionElements && c.bind(
                            "resize",
                            function() {
                                a(".jquery-form-suggestions").each(function() {
                                    var b = a(this),
                                        c = b.attr("data-suggest-container");
                                    g(b, a(".suggestions-" + c).eq(0))
                                })
                            }), this._numSuggestionElements++;
                        var h = function(b) {
                            var c = b.valAttr("suggestion-nr");
                            a.formUtils._selectedSuggestion = null, a.formUtils._previousTypedVal =
                                null, a(".jquery-form-suggestion-" + c).fadeOut("fast")
                        };
                        return b.data("suggestions", d).valAttr("suggestion-nr", this
                            ._numSuggestionElements).unbind("focus.suggest").bind("focus.suggest",
                            function() {
                                a(this).trigger("keyup"), a.formUtils._selectedSuggestion = null
                            }).unbind("keyup.suggest").bind("keyup.suggest", function() {
                            var c = a(this),
                                d = [],
                                e = a.trim(c.val()).toLocaleLowerCase();
                            if (e !== a.formUtils._previousTypedVal) {
                                a.formUtils._previousTypedVal = e;
                                var i = !1,
                                    j = c.valAttr("suggestion-nr"),
                                    k = a(".jquery-form-suggestion-" + j);
                                if (k.scrollTop(0), "" !== e) {
                                    var l = e.length > 2;
                                    a.each(c.data("suggestions"), function(a, b) {
                                        var c = b.toLocaleLowerCase();
                                        return c === e ? (d.push("<strong>" + b +
                                            "</strong>"), i = !0, !1) : void((0 === c
                                            .indexOf(e) || l && c.indexOf(e) > -1
                                        ) && d.push(b.replace(new RegExp(e,
                                            "gi"), "<strong>$&</strong>")))
                                    })
                                }
                                i || 0 === d.length && k.length > 0 ? k.hide() : d.length > 0 &&
                                    0 === k.length ? (k = a("<div></div>").css(f.css).appendTo(
                                        "body"), b.addClass("suggestions-" + j), k.attr(
                                        "data-suggest-container", j).addClass(
                                        "jquery-form-suggestions").addClass(
                                        "jquery-form-suggestion-" + j)) : d.length > 0 && !k.is(
                                        ":visible") && k.show(), d.length > 0 && e.length !== d[0]
                                    .length && (g(k, c), k.html(""), a.each(d, function(b, d) {
                                        a("<div></div>").append(d).css({
                                                overflow: "hidden",
                                                textOverflow: "ellipsis",
                                                whiteSpace: "nowrap",
                                                padding: "5px"
                                            }).addClass("form-suggest-element").appendTo(k)
                                            .click(function() {
                                                c.focus(), c.val(a(this).text()), c
                                                    .trigger("change"), h(c)
                                            })
                                    }))
                            }
                        }).unbind("keydown.validation").bind("keydown.validation", function(b) {
                            var c, d, e = b.keyCode ? b.keyCode : b.which,
                                g = a(this);
                            if (13 === e && null !== a.formUtils._selectedSuggestion) {
                                if (c = g.valAttr("suggestion-nr"), d = a(
                                        ".jquery-form-suggestion-" + c), d.length > 0) {
                                    var i = d.find("div").eq(a.formUtils._selectedSuggestion)
                                        .text();
                                    g.val(i), g.trigger("change"), h(g), b.preventDefault()
                                }
                            } else {
                                c = g.valAttr("suggestion-nr"), d = a(".jquery-form-suggestion-" +
                                    c);
                                var j = d.children();
                                if (j.length > 0 && a.inArray(e, [38, 40]) > -1) {
                                    38 === e ? (null === a.formUtils._selectedSuggestion ? a
                                            .formUtils._selectedSuggestion = j.length - 1 : a
                                            .formUtils._selectedSuggestion--, a.formUtils
                                            ._selectedSuggestion < 0 && (a.formUtils
                                                ._selectedSuggestion = j.length - 1)) : 40 === e &&
                                        (null === a.formUtils._selectedSuggestion ? a.formUtils
                                            ._selectedSuggestion = 0 : a.formUtils
                                            ._selectedSuggestion++, a.formUtils
                                            ._selectedSuggestion > j.length - 1 && (a.formUtils
                                                ._selectedSuggestion = 0));
                                    var k = d.innerHeight(),
                                        l = d.scrollTop(),
                                        m = d.children().eq(0).outerHeight(),
                                        n = m * a.formUtils._selectedSuggestion;
                                    return (l > n || n > l + k) && d.scrollTop(n), j.removeClass(
                                            "active-suggestion").css("background", "none").eq(a
                                            .formUtils._selectedSuggestion).addClass(
                                            "active-suggestion").css(f.activeSuggestionCSS), b
                                        .preventDefault(), !1
                                }
                            }
                        }).unbind("blur.suggest").bind("blur.suggest", function() {
                            h(a(this))
                        }), b
                    },
                    LANG: {
                        errorTitle: "Form submission failed!",
                        requiredField: "This is a required field",
                        requiredFields: "You have not answered all required fields",
                        badTime: "You have not given a correct time",
                        badEmail: "You have not given a correct e-mail address",
                        badTelephone: "You have not given a correct phone number",
                        badSecurityAnswer: "You have not given a correct answer to the security question",
                        badDate: "You have not given a correct date",
                        lengthBadStart: "The input value must be between ",
                        lengthBadEnd: " characters",
                        lengthTooLongStart: "The input value is longer than ",
                        lengthTooShortStart: "The input value is shorter than ",
                        notConfirmed: "Input values could not be confirmed",
                        badDomain: "Incorrect domain value",
                        badUrl: "The input value is not a correct URL",
                        badCustomVal: "The input value is incorrect",
                        andSpaces: " and spaces ",
                        badInt: "The input value was not a correct number",
                        badSecurityNumber: "Your social security number was incorrect",
                        badUKVatAnswer: "Incorrect UK VAT Number",
                        badUKNin: "Incorrect UK NIN",
                        badUKUtr: "Incorrect UK UTR Number",
                        badStrength: "The password isn't strong enough",
                        badNumberOfSelectedOptionsStart: "You have to choose at least ",
                        badNumberOfSelectedOptionsEnd: " answers",
                        badAlphaNumeric: "The input value can only contain alphanumeric characters ",
                        badAlphaNumericExtra: " and ",
                        wrongFileSize: "The file you are trying to upload is too large (max %s)",
                        wrongFileType: "Only files of type %s is allowed",
                        groupCheckedRangeStart: "Please choose between ",
                        groupCheckedTooFewStart: "Please choose at least ",
                        groupCheckedTooManyStart: "Please choose a maximum of ",
                        groupCheckedEnd: " item(s)",
                        badCreditCard: "The credit card number is not correct",
                        badCVV: "The CVV number was not correct",
                        wrongFileDim: "Incorrect image dimensions,",
                        imageTooTall: "the image can not be taller than",
                        imageTooWide: "the image can not be wider than",
                        imageTooSmall: "the image was too small",
                        min: "min",
                        max: "max",
                        imageRatioNotAccepted: "Image ratio is not be accepted",
                        badBrazilTelephoneAnswer: "The phone number entered is invalid",
                        badBrazilCEPAnswer: "The CEP entered is invalid",
                        badBrazilCPFAnswer: "The CPF entered is invalid",
                        badPlPesel: "The PESEL entered is invalid",
                        badPlNip: "The NIP entered is invalid",
                        badPlRegon: "The REGON entered is invalid",
                        badreCaptcha: "Please confirm that you are not a bot"
                    }
                })
            }(a, window),
            function(a) {
                a.formUtils.addValidator({
                    name: "email",
                    validatorFunction: function(b) {
                        var c = b.toLowerCase().split("@"),
                            d = c[0],
                            e = c[1];
                        if (d && e) {
                            if (0 === d.indexOf('"')) {
                                var f = d.length;
                                if (d = d.replace(/\"/g, ""), d.length !== f - 2) return !1
                            }
                            return a.formUtils.validators.validate_domain.validatorFunction(c[1]) && 0 !== d
                                .indexOf(".") && "." !== d.substring(d.length - 1, d.length) && -1 === d
                                .indexOf("..") && !/[^\w\+\.\-\#\-\_\~\!\$\&\'\(\)\*\+\,\;\=\:]/.test(d)
                        }
                        return !1
                    },
                    errorMessage: "",
                    errorMessageKey: "badEmail"
                }), a.formUtils.addValidator({
                    name: "domain",
                    validatorFunction: function(a) {
                        return a.length > 0 && a.length <= 253 && !/[^a-zA-Z0-9]/.test(a.slice(-2)) && !
                            /[^a-zA-Z0-9]/.test(a.substr(0, 1)) && !/[^a-zA-Z0-9\.\-]/.test(a) && 1 === a
                            .split("..").length && a.split(".").length > 1
                    },
                    errorMessage: "",
                    errorMessageKey: "badDomain"
                }), a.formUtils.addValidator({
                    name: "required",
                    validatorFunction: function(b, c, d, e, f) {
                        switch (c.attr("type")) {
                            case "checkbox":
                                return c.is(":checked");
                            case "radio":
                                return f.find('input[name="' + c.attr("name") + '"]').filter(":checked")
                                    .length > 0;
                            default:
                                return "" !== a.trim(b)
                        }
                    },
                    errorMessage: "",
                    errorMessageKey: function(a) {
                        return "top" === a.errorMessagePosition || "function" == typeof a
                            .errorMessagePosition ? "requiredFields" : "requiredField"
                    }
                }), a.formUtils.addValidator({
                    name: "length",
                    validatorFunction: function(b, c, d, e) {
                        var f = c.valAttr("length"),
                            g = c.attr("type");
                        if (void 0 === f) return alert('Please add attribute "data-validation-length" to ' +
                            c[0].nodeName + " named " + c.attr("name")), !0;
                        var h, i = "file" === g && void 0 !== c.get(0).files ? c.get(0).files.length : b
                            .length,
                            j = a.formUtils.numericRangeCheck(i, f);
                        switch (j[0]) {
                            case "out":
                                this.errorMessage = e.lengthBadStart + f + e.lengthBadEnd, h = !1;
                                break;
                            case "min":
                                this.errorMessage = e.lengthTooShortStart + j[1] + e.lengthBadEnd, h = !1;
                                break;
                            case "max":
                                this.errorMessage = e.lengthTooLongStart + j[1] + e.lengthBadEnd, h = !1;
                                break;
                            default:
                                h = !0
                        }
                        return h
                    },
                    errorMessage: "",
                    errorMessageKey: ""
                }), a.formUtils.addValidator({
                    name: "url",
                    validatorFunction: function(b) {
                        var c =
                            /^(https?|ftp):\/\/((((\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])(\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])(\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/(((\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/((\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|\[|\]|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#(((\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;
                        if (c.test(b)) {
                            var d = b.split("://")[1],
                                e = d.indexOf("/");
                            return e > -1 && (d = d.substr(0, e)), a.formUtils.validators.validate_domain
                                .validatorFunction(d)
                        }
                        return !1
                    },
                    errorMessage: "",
                    errorMessageKey: "badUrl"
                }), a.formUtils.addValidator({
                    name: "number",
                    validatorFunction: function(a, b, c) {
                        if ("" !== a) {
                            var d, e, f = b.valAttr("allowing") || "",
                                g = b.valAttr("decimal-separator") || c.decimalSeparator,
                                h = !1,
                                i = b.valAttr("step") || "",
                                j = !1,
                                k = b.attr("data-sanitize") || "",
                                l = k.match(/(^|[\s])numberFormat([\s]|$)/i);
                            if (l) {
                                if (!window.numeral) throw new ReferenceError(
                                    "The data-sanitize value numberFormat cannot be used without the numeral library. Please see Data Validation in http://www.formvalidator.net for more information."
                                );
                                a.length && (a = String(numeral().unformat(a)))
                            }
                            if (-1 === f.indexOf("number") && (f += ",number"), -1 === f.indexOf(
                                    "negative") && 0 === a.indexOf("-")) return !1;
                            if (f.indexOf("range") > -1 && (d = parseFloat(f.substring(f.indexOf("[") + 1, f
                                    .indexOf(";"))), e = parseFloat(f.substring(f.indexOf(";") + 1, f
                                    .indexOf("]"))), h = !0), "" !== i && (j = !0), "," === g) {
                                if (a.indexOf(".") > -1) return !1;
                                a = a.replace(",", ".")
                            }
                            if ("" === a.replace(/[0-9-]/g, "") && (!h || a >= d && e >= a) && (!j || a %
                                    i === 0)) return !0;
                            if (f.indexOf("float") > -1 && null !== a.match(new RegExp(
                                    "^([0-9-]+)\\.([0-9]+)$")) && (!h || a >= d && e >= a) && (!j || a %
                                    i === 0)) return !0
                        }
                        return !1
                    },
                    errorMessage: "",
                    errorMessageKey: "badInt"
                }), a.formUtils.addValidator({
                    name: "alphanumeric",
                    validatorFunction: function(b, c, d, e) {
                        var f = "^([a-zA-Z0-9",
                            g = "]+)$",
                            h = c.valAttr("allowing"),
                            i = "";
                        if (h) {
                            i = f + h + g;
                            var j = h.replace(/\\/g, "");
                            j.indexOf(" ") > -1 && (j = j.replace(" ", ""), j += e.andSpaces || a.formUtils
                                    .LANG.andSpaces), this.errorMessage = e.badAlphaNumeric + e
                                .badAlphaNumericExtra + j
                        } else i = f + g, this.errorMessage = e.badAlphaNumeric;
                        return new RegExp(i).test(b)
                    },
                    errorMessage: "",
                    errorMessageKey: ""
                }), a.formUtils.addValidator({
                    name: "custom",
                    validatorFunction: function(a, b) {
                        var c = new RegExp(b.valAttr("regexp"));
                        return c.test(a)
                    },
                    errorMessage: "",
                    errorMessageKey: "badCustomVal"
                }), a.formUtils.addValidator({
                    name: "date",
                    validatorFunction: function(b, c, d) {
                        var e = c.valAttr("format") || d.dateFormat || "yyyy-mm-dd",
                            f = "false" === c.valAttr("require-leading-zero");
                        return a.formUtils.parseDate(b, e, f) !== !1
                    },
                    errorMessage: "",
                    errorMessageKey: "badDate"
                }), a.formUtils.addValidator({
                    name: "checkbox_group",
                    validatorFunction: function(b, c, d, e, f) {
                        var g = !0,
                            h = c.attr("name"),
                            i = a('input[type=checkbox][name^="' + h + '"]', f),
                            j = i.filter(":checked").length,
                            k = c.valAttr("qty");
                        if (void 0 === k) {
                            var l = c.get(0).nodeName;
                            alert('Attribute "data-validation-qty" is missing from ' + l + " named " + c
                                .attr("name"))
                        }
                        var m = a.formUtils.numericRangeCheck(j, k);
                        switch (m[0]) {
                            case "out":
                                this.errorMessage = e.groupCheckedRangeStart + k + e.groupCheckedEnd, g = !
                                    1;
                                break;
                            case "min":
                                this.errorMessage = e.groupCheckedTooFewStart + m[1] + e.groupCheckedEnd,
                                    g = !1;
                                break;
                            case "max":
                                this.errorMessage = e.groupCheckedTooManyStart + m[1] + e.groupCheckedEnd,
                                    g = !1;
                                break;
                            default:
                                g = !0
                        }
                        if (!g) {
                            var n = function() {
                                i.unbind("click", n), i.filter("*[data-validation]")
                                    .validateInputOnBlur(e, d, !1, "blur")
                            };
                            i.bind("click", n)
                        }
                        return g
                    }
                })
            }(a)
        });
    </script>


    <script src="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/wishlist-func.js?1730189825874" defer></script>

    <script src="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/option_selector.js?1730189825874"></script>
    <script type="text/javascript" src="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js"></script>
    <script src="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/handlebar.js?1730189825874"></script>
    <script type="text/javascript"
        src="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/ajaxcart-func.js?1730189825874"></script>

    <div id="CartDrawer" class="cart-sidebar d-none">
        <div class="clearfix cart_heading">
            <h4 class="cart_title">Giỏ hàng</h4>
            <div class="cart_btn-close" title="Đóng giỏ hàng">
                <svg class="Icon Icon--close" viewBox="0 0 16 14">
                    <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
                </svg>
            </div>
        </div>
        <div class="drawer__inner">
            <div id="CartContainer" class="CartSideContainer">
            </div>
        </div>
    </div>



    <script id="SideCartTemplate" type="text/template">
     
    <form action="/cart" method="post" novalidate class="cart ajaxcart">
        <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
            {{#items}}
            <div class="ajaxcart__row">
                <div class="ajaxcart__product cart_product" data-line="{{line}}">
                    <a href="{{url}}" class="ajaxcart__product-image cart_image" title="{{name}}"><img width="80" height="80" src="{{img}}" alt="{{name}}"></a>
                    <div class="grid__item cart_info">
                        <div class="ajaxcart__product-name-wrapper cart_name">
                            <a href="{{url}}" class="ajaxcart__product-name h4" title="{{name}}">{{name}}</a>
                            {{#if variation}}
                            <span class="ajaxcart__product-meta variant-title">{{variation}}</span>
                            {{/if}}
                        </div>
                        <div class="grid">
                            <div class="grid__item one-half cart_select cart_item_name">
                            <label class="cart_quantity">Số lượng</label>
                                <div class="ajaxcart__qty input-group-btn">
                                    <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="{{key}}" data-qty="{{itemMinus}}" data-line="{{line}}" aria-label="-">
                                    -
                                    </button>
                                    <input type="text" name="updates[]" class="ajaxcart__qty-num number-sidebar" maxlength="3" value="{{itemQty}}" min="0" data-id="{{key}}" data-line="{{line}}" aria-label="quantity" pattern="[0-9]*">
                                    <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="{{key}}" data-line="{{line}}" data-qty="{{itemAdd}}" aria-label="+">
                                    +							
                                    </button>
                                </div>
                            </div>
                            <div class="grid__item one-half text-right cart_prices">
                                <span class="cart-price">{{price}}</span>
                                <a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-line="{{line}}">Xóa</a>
                            </div>
                        </div>
                        {{#if discountsApplied}}
                        <div class="grid grid--table">
                            <div class="grid__item text-right">
                                <ul class="order-discount order-discount--list order-discount--title order-discount--cart order-discount--cart-title" aria-label="Giảm giá">
                                    {{#each discounts}}
                                    <li class="order-discount__item">
                                        <span class="icon icon-saletag" aria-hidden="true"></span>{{ this.discount_application.title }} (-{{{ this.formattedAmount }}})
                                    </li>
                                    {{/each}}
                                </ul>
                            </div>
                        </div>
                        {{/if}}
                    </div>
                </div>
            </div>
            {{/items}}
    
            
        </div>
        <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
            <div class="ajaxcart__subtotal">
                {{#if cartDiscountsApplied}}
                <div class="grid grid--table ajaxcart__discounts">
                    {{#each cartDiscounts}}
                    <div class="grid__item two-thirds">
                        <span class="order-discount order-discount--title order-discount--cart-title">
                            <span class="icon icon-saletag" aria-hidden="true"></span><span class="visually-hidden">%:</span>{{ this.title }}
                        </span>
                    </div>
                    <div class="grid__item one-third text-right">
                        <span class="order-discount">-{{{ this.formattedAmount }}}</span>
                    </div>
                    {{/each}}
                </div>
                {{/if}}
                <div class="cart__subtotal">
                    <div class="cart__col-6">Tổng tiền:</div>
                    <div class="text-right cart__totle"><span class="total-price">{{{totalPrice}}}</span></div>
                </div>
            </div>
            <div class="cart__btn-proceed-checkout-dt">
                <button onclick="location.href='/checkout'" type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán</button>
            </div>
        </div>
    </form>
    
    
    </script>



    <script src="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/notify.js?1730189825874" async></script>
    <link rel="preload" as='style' type="text/css"
        href="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/notify.scss.css?1730189825874">
    <link href="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/notify.scss.css?1730189825874" rel="stylesheet"
        type="text/css" media="all" />

    <div class="modal-quickview">
        <div class="wrap-quickview"></div>
    </div>
    <script src="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/quickview-js.js?1730189825874" defer></script>
    <link rel="preload" as='style'
        href="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/quickview.scss.css?1730189825874">
    <link href="//bizweb.dktcdn.net/100/450/748/themes/872052/assets/quickview.scss.css?1730189825874"
        rel="stylesheet" type="text/css" media="all" />

    {{-- <div class="backdrop__body-backdrop___1rvky"></div>
    <div style="visibility:hidden; position: absolute; z-index: -1; bottom: 0; left: 0;">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="accounticon">
                <svg version="1.0" viewBox="0 0 256.000000 256.000000">
                    <g transform="translate(0.000000,256.000000) scale(0.100000,-0.100000)" stroke="none">
                        <path
                            d="M913 2330 c-222 -40 -410 -216 -453 -427 -18 -83 -7 -244 19 -312 41 -102 115 -198 204 -262 34 -25 37 -30 21 -35 -167 -59 -266 -111 -369 -195 -145 -118 -258 -289 -305 -464 -23 -83 -39 -318 -26 -369 9 -38 48 -54 81 -32 24 16 25 20 25 124 1 189 39 330 125 463 114 177 284 300 502 365 109 32 301 43 421 24 298 -48 546 -232 667 -493 44 -96 65 -203 65 -336 0 -60 3 -117 6 -126 11 -28 53 -38 82 -19 l24 16 -5 161 c-6 186 -17 239 -82 372 -77 160 -184 280 -340 380 -73 47 -212 115 -234 115 -6 0 -22 5 -36 10 l-27 10 60 45 c114 83 192 217 213 368 23 159 -28 320 -142 442 -33 35 -82 78 -109 95 -105 67 -267 101 -387 80z m220 -127 c319 -100 417 -508 178 -737 -93 -88 -186 -126 -312 -126 -295 0 -507 289 -419 572 72 232 322 364 553 291z" />
                        <path
                            d="M1742 2098 c-7 -7 -12 -24 -12 -40 0 -35 29 -54 97 -61 102 -11 202 -84 253 -183 21 -42 25 -62 25 -144 0 -79 -4 -103 -23 -143 -50 -99 -150 -171 -263 -187 -71 -10 -89 -22 -89 -60 0 -41 21 -52 115 -61 177 -18 336 -96 448 -220 105 -115 156 -257 157 -427 0 -99 10 -122 50 -122 50 0 60 20 60 128 0 307 -175 570 -456 687 -38 16 -70 30 -72 31 -2 1 20 24 49 50 28 27 62 65 74 84 156 251 32 579 -252 665 -58 18 -145 19 -161 3z" />
                    </g>
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="carticon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    x="0px" y="0px" viewBox="0 0 201.387 201.387" style="enable-background:new 0 0 201.387 201.387;"
                    xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M129.413,24.885C127.389,10.699,115.041,0,100.692,0C91.464,0,82.7,4.453,77.251,11.916    c-1.113,1.522-0.78,3.657,0.742,4.77c1.517,1.109,3.657,0.78,4.768-0.744c4.171-5.707,10.873-9.115,17.93-9.115    c10.974,0,20.415,8.178,21.963,19.021c0.244,1.703,1.705,2.932,3.376,2.932c0.159,0,0.323-0.012,0.486-0.034    C128.382,28.479,129.679,26.75,129.413,24.885z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M178.712,63.096l-10.24-17.067c-0.616-1.029-1.727-1.657-2.927-1.657h-9.813c-1.884,0-3.413,1.529-3.413,3.413    s1.529,3.413,3.413,3.413h7.881l6.144,10.24H31.626l6.144-10.24h3.615c1.884,0,3.413-1.529,3.413-3.413s-1.529-3.413-3.413-3.413    h-5.547c-1.2,0-2.311,0.628-2.927,1.657l-10.24,17.067c-0.633,1.056-0.648,2.369-0.043,3.439s1.739,1.732,2.97,1.732h150.187    c1.231,0,2.364-0.662,2.97-1.732S179.345,64.15,178.712,63.096z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M161.698,31.623c-0.478-0.771-1.241-1.318-2.123-1.524l-46.531-10.883c-0.881-0.207-1.809-0.053-2.579,0.423    c-0.768,0.478-1.316,1.241-1.522,2.123l-3.509,15c-0.43,1.835,0.71,3.671,2.546,4.099c1.835,0.43,3.673-0.71,4.101-2.546    l2.732-11.675l39.883,9.329l-6.267,26.795c-0.43,1.835,0.71,3.671,2.546,4.099c0.263,0.061,0.524,0.09,0.782,0.09    c1.55,0,2.953-1.062,3.318-2.635l7.045-30.118C162.328,33.319,162.176,32.391,161.698,31.623z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M102.497,39.692l-3.11-26.305c-0.106-0.899-0.565-1.72-1.277-2.28c-0.712-0.56-1.611-0.816-2.514-0.71l-57.09,6.748    c-1.871,0.222-3.209,1.918-2.988,3.791l5.185,43.873c0.206,1.737,1.679,3.014,3.386,3.014c0.133,0,0.27-0.009,0.406-0.024    c1.87-0.222,3.208-1.918,2.988-3.791l-4.785-40.486l50.311-5.946l2.708,22.915c0.222,1.872,1.91,3.202,3.791,2.99    C101.379,43.261,102.717,41.564,102.497,39.692z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M129.492,63.556l-6.775-28.174c-0.212-0.879-0.765-1.64-1.536-2.113c-0.771-0.469-1.696-0.616-2.581-0.406L63.613,46.087    c-1.833,0.44-2.961,2.284-2.521,4.117l3.386,14.082c0.44,1.835,2.284,2.964,4.116,2.521c1.833-0.44,2.961-2.284,2.521-4.117    l-2.589-10.764l48.35-11.626l5.977,24.854c0.375,1.565,1.775,2.615,3.316,2.615c0.265,0,0.533-0.031,0.802-0.096    C128.804,67.232,129.932,65.389,129.492,63.556z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M179.197,64.679c-0.094-1.814-1.592-3.238-3.41-3.238H25.6c-1.818,0-3.316,1.423-3.41,3.238l-6.827,133.12    c-0.048,0.934,0.29,1.848,0.934,2.526c0.645,0.677,1.539,1.062,2.475,1.062h163.84c0.935,0,1.83-0.384,2.478-1.062    c0.643-0.678,0.981-1.591,0.934-2.526L179.197,64.679z M22.364,194.56l6.477-126.293h143.701l6.477,126.293H22.364z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M126.292,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C136.532,79.686,131.939,75.093,126.292,75.093z M126.292,88.747c-1.883,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    c1.882,0,3.413,1.531,3.413,3.413S128.174,88.747,126.292,88.747z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M75.092,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C85.332,79.686,80.739,75.093,75.092,75.093z M75.092,88.747c-1.882,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    s3.413,1.531,3.413,3.413S76.974,88.747,75.092,88.747z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M126.292,85.333h-0.263c-1.884,0-3.413,1.529-3.413,3.413c0,0.466,0.092,0.911,0.263,1.316v17.457    c0,12.233-9.953,22.187-22.187,22.187s-22.187-9.953-22.187-22.187V88.747c0-1.884-1.529-3.413-3.413-3.413    s-3.413,1.529-3.413,3.413v18.773c0,15.998,13.015,29.013,29.013,29.013s29.013-13.015,29.013-29.013V88.747    C129.705,86.863,128.176,85.333,126.292,85.333z" />
                        </g>
                    </g>
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="wishlist">
                <svg enable-background="new 0 0 412.735 412.735" version="1.1" viewBox="0 0 412.74 412.74"
                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m295.71 35.522c-34.43-0.184-67.161 14.937-89.339 41.273-22.039-26.516-54.861-41.68-89.339-41.273-64.633 0-117.03 52.395-117.03 117.03 0 110.76 193.31 218.91 201.14 223.09 3.162 2.113 7.286 2.113 10.449 0 7.837-4.18 201.14-110.76 201.14-223.09 0-64.633-52.396-117.03-117.03-117.03zm-89.339 319.22c-30.302-17.763-185.47-112.33-185.47-202.19 0-53.091 43.039-96.131 96.131-96.131 32.512-0.427 62.938 15.972 80.457 43.363 3.557 4.905 10.418 5.998 15.323 2.44 0.937-0.68 1.761-1.503 2.44-2.44 29.055-44.435 88.631-56.903 133.07-27.848 27.202 17.787 43.575 48.114 43.521 80.615 1e-3 90.907-155.17 184.95-185.47 202.19z" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="wishlistactive">
                <svg enable-background="new 0 0 391.837 391.837" version="1.1" viewBox="0 0 391.84 391.84"
                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m285.26 35.528c58.743 0.286 106.29 47.836 106.58 106.58 0 107.62-195.92 214.2-195.92 214.2s-195.92-108.15-195.92-214.2c0-58.862 47.717-106.58 106.58-106.58 36.032-0.281 69.718 17.842 89.339 48.065 19.755-30.076 53.354-48.152 89.338-48.065z"
                        fill="#D7443E" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="search">
                <svg enable-background="new 0 0 612.01 612.01" version="1.1" viewBox="0 0 612.01 612.01"
                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m606.21 578.71-158.01-155.49c41.378-44.956 66.802-104.41 66.802-169.84-0.02-139.95-115.3-253.39-257.51-253.39s-257.49 113.44-257.49 253.39 115.28 253.39 257.49 253.39c61.445 0 117.8-21.253 162.07-56.586l158.62 156.1c7.729 7.614 20.277 7.614 28.006 0 7.747-7.613 7.747-19.971 0.018-27.585zm-348.72-110.91c-120.33 0-217.87-95.993-217.87-214.41s97.543-214.41 217.87-214.41c120.33 0 217.87 95.993 217.87 214.41s-97.542 214.41-217.87 214.41z">
                    </path>
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="categoryicon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="iconcate"
                    x="0px" y="0px" viewBox="0 0 486.8 486.8" style="enable-background:new 0 0 486.8 486.8;"
                    xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M140.35,32c0-17.6-14.4-32-32-32h-76.3c-17.6,0-32,14.4-32,32v76.2c0,17.6,14.4,32,32,32h76.2c17.6,0,32-14.4,32-32V32    H140.35z M115.85,108.3c0,4.1-3.4,7.5-7.5,7.5h-76.3c-4.1,0-7.5-3.4-7.5-7.5V32c0-4.1,3.4-7.5,7.5-7.5h76.2c4.1,0,7.5,3.4,7.5,7.5    v76.3H115.85z" />
                            <path
                                d="M140.35,205.3c0-17.6-14.4-32-32-32h-76.3c-17.6,0-32,14.4-32,32v76.2c0,17.6,14.4,32,32,32h76.2c17.6,0,32-14.4,32-32    v-76.2H140.35z M115.85,281.5c0,4.1-3.4,7.5-7.5,7.5h-76.3c-4.1,0-7.5-3.4-7.5-7.5v-76.2c0-4.1,3.4-7.5,7.5-7.5h76.2    c4.1,0,7.5,3.4,7.5,7.5v76.2H115.85z" />
                            <path
                                d="M108.35,346.5h-76.3c-17.6,0-32,14.4-32,32v76.2c0,17.6,14.4,32,32,32h76.2c17.6,0,32-14.4,32-32v-76.2    C140.35,360.9,125.95,346.5,108.35,346.5z M115.85,454.8c0,4.1-3.4,7.5-7.5,7.5h-76.3c-4.1,0-7.5-3.4-7.5-7.5v-76.2    c0-4.1,3.4-7.5,7.5-7.5h76.2c4.1,0,7.5,3.4,7.5,7.5v76.2H115.85z" />
                            <path
                                d="M173.35,281.5c0,17.6,14.4,32,32,32h76.2c17.6,0,32-14.4,32-32v-76.2c0-17.6-14.4-32-32-32h-76.2c-17.6,0-32,14.4-32,32    L173.35,281.5L173.35,281.5z M197.85,205.3c0-4.1,3.4-7.5,7.5-7.5h76.2c4.1,0,7.5,3.4,7.5,7.5v76.2c0,4.1-3.4,7.5-7.5,7.5h-76.2    c-4.1,0-7.5-3.4-7.5-7.5L197.85,205.3L197.85,205.3z" />
                            <path
                                d="M173.35,454.8c0,17.6,14.4,32,32,32h76.2c17.6,0,32-14.4,32-32v-76.2c0-17.6-14.4-32-32-32h-76.2c-17.6,0-32,14.4-32,32    L173.35,454.8L173.35,454.8z M197.85,378.5c0-4.1,3.4-7.5,7.5-7.5h76.2c4.1,0,7.5,3.4,7.5,7.5v76.2c0,4.1-3.4,7.5-7.5,7.5h-76.2    c-4.1,0-7.5-3.4-7.5-7.5L197.85,378.5L197.85,378.5z" />
                            <path
                                d="M346.55,281.5c0,17.6,14.4,32,32,32h76.2c17.6,0,32-14.4,32-32v-76.2c0-17.6-14.4-32-32-32h-76.2c-17.6,0-32,14.4-32,32    L346.55,281.5L346.55,281.5z M371.05,205.3c0-4.1,3.4-7.5,7.5-7.5h76.2c4.1,0,7.5,3.4,7.5,7.5v76.2c0,4.1-3.4,7.5-7.5,7.5h-76.2    c-4.1,0-7.5-3.4-7.5-7.5L371.05,205.3L371.05,205.3z" />
                            <path
                                d="M346.55,454.8c0,17.6,14.4,32,32,32h76.2c17.6,0,32-14.4,32-32v-76.2c0-17.6-14.4-32-32-32h-76.2c-17.6,0-32,14.4-32,32    L346.55,454.8L346.55,454.8z M371.05,378.5c0-4.1,3.4-7.5,7.5-7.5h76.2c4.1,0,7.5,3.4,7.5,7.5v76.2c0,4.1-3.4,7.5-7.5,7.5h-76.2    c-4.1,0-7.5-3.4-7.5-7.5L371.05,378.5L371.05,378.5z" />
                            <path
                                d="M173.35,32v76.2c0,17.6,14.4,32,32,32h76.2c17.6,0,32-14.4,32-32V32c0-17.6-14.4-32-32-32h-76.2    C187.65,0,173.35,14.4,173.35,32z M197.85,32c0-4.1,3.4-7.5,7.5-7.5h76.2c4.1,0,7.5,3.4,7.5,7.5v76.2c0,4.1-3.4,7.5-7.5,7.5h-76.2    c-4.1,0-7.5-3.4-7.5-7.5L197.85,32L197.85,32z" />
                            <path
                                d="M378.55,140.3h76.2c17.6,0,32-14.4,32-32V32c0-17.6-14.4-32-32-32h-76.2c-17.6,0-32,14.4-32,32v76.2    C346.55,125.9,360.95,140.3,378.55,140.3z M371.05,32c0-4.1,3.4-7.5,7.5-7.5h76.2c4.1,0,7.5,3.4,7.5,7.5v76.2    c0,4.1-3.4,7.5-7.5,7.5h-76.2c-4.1,0-7.5-3.4-7.5-7.5L371.05,32L371.05,32z" />
                        </g>
                    </g>
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="homeicon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="iconhome"
                    x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                    xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M506.555,208.064L263.859,30.367c-4.68-3.426-11.038-3.426-15.716,0L5.445,208.064    c-5.928,4.341-7.216,12.665-2.875,18.593s12.666,7.214,18.593,2.875L256,57.588l234.837,171.943c2.368,1.735,5.12,2.57,7.848,2.57    c4.096,0,8.138-1.885,10.744-5.445C513.771,220.729,512.483,212.405,506.555,208.064z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M442.246,232.543c-7.346,0-13.303,5.956-13.303,13.303v211.749H322.521V342.009c0-36.68-29.842-66.52-66.52-66.52    s-66.52,29.842-66.52,66.52v115.587H83.058V245.847c0-7.347-5.957-13.303-13.303-13.303s-13.303,5.956-13.303,13.303v225.053    c0,7.347,5.957,13.303,13.303,13.303h133.029c6.996,0,12.721-5.405,13.251-12.267c0.032-0.311,0.052-0.651,0.052-1.036v-128.89    c0-22.009,17.905-39.914,39.914-39.914s39.914,17.906,39.914,39.914v128.89c0,0.383,0.02,0.717,0.052,1.024    c0.524,6.867,6.251,12.279,13.251,12.279h133.029c7.347,0,13.303-5.956,13.303-13.303V245.847    C455.549,238.499,449.593,232.543,442.246,232.543z" />
                        </g>
                    </g>
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="nexticon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path
                        d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="previcon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path
                        d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="optionicon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" enable-background="new 0 0 64 64"
                    xml:space="preserve">
                    <path
                        d="M32,0c-17.6730843,0-32,14.3268995-32,32s14.3269148,32,32,32s32-14.3269005,32-32S49.6730995,0,32,0z M32,62   c-16.5419998,0-30-13.457901-30-30c0-16.5419998,13.4579992-30,30-30c16.542099,0,30,13.4580002,30,30   C62,48.542099,48.542099,62,32,62z" />
                    <path
                        d="M18,27c-2.7613993,0-4.999999,2.2385998-4.999999,5S15.2386007,37,18,37s5-2.2386017,5-5S20.7614002,27,18,27z M18,35   c-1.6541996,0-3-1.3456993-3-3c0-1.6541996,1.3458004-3,3-3c1.6543007,0,3,1.3458004,3,3C21,33.6543007,19.6543007,35,18,35z" />
                    <path
                        d="M32,27c-2.7614002,0-5,2.2385998-5,5s2.2385998,5,5,5s5-2.2386017,5-5S34.7613983,27,32,27z M32,35   c-1.6541996,0-3-1.3456993-3-3c0-1.6541996,1.3458004-3,3-3c1.6543007,0,3,1.3458004,3,3C35,33.6543007,33.6543007,35,32,35z" />
                    <path
                        d="M46,27c-2.7614021,0-5,2.2385998-5,5s2.2385979,5,5,5c2.7613983,0,5-2.2386017,5-5S48.7613983,27,46,27z M46,35   c-1.6542015,0-3-1.3456993-3-3c0-1.6541996,1.3457985-3,3-3c1.6543007,0,3,1.3458004,3,3C49,33.6543007,47.6543007,35,46,35z" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="addcarticon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" style="enable-background:new 0 0 52 52;"
                    xml:space="preserve">
                    <path
                        d="M26,0C11.664,0,0,11.663,0,26s11.664,26,26,26s26-11.663,26-26S40.336,0,26,0z M26,50C12.767,50,2,39.233,2,26   S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z" />
                    <path
                        d="M38.5,25H27V14c0-0.553-0.448-1-1-1s-1,0.447-1,1v11H13.5c-0.552,0-1,0.447-1,1s0.448,1,1,1H25v12c0,0.553,0.448,1,1,1   s1-0.447,1-1V27h11.5c0.552,0,1-0.447,1-1S39.052,25,38.5,25z" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="quickicon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488.4 488.4"
                    style="enable-background:new 0 0 488.4 488.4;" xml:space="preserve">
                    <path
                        d="M0,203.25c0,112.1,91.2,203.2,203.2,203.2c51.6,0,98.8-19.4,134.7-51.2l129.5,129.5c2.4,2.4,5.5,3.6,8.7,3.6    s6.3-1.2,8.7-3.6c4.8-4.8,4.8-12.5,0-17.3l-129.6-129.5c31.8-35.9,51.2-83,51.2-134.7c0-112.1-91.2-203.2-203.2-203.2    S0,91.15,0,203.25z M381.9,203.25c0,98.5-80.2,178.7-178.7,178.7s-178.7-80.2-178.7-178.7s80.2-178.7,178.7-178.7    S381.9,104.65,381.9,203.25z" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="plusicon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 52 52" style="enable-background:new 0 0 52 52;" xml:space="preserve">
                    <path
                        d="M26,0C11.664,0,0,11.663,0,26s11.664,26,26,26s26-11.663,26-26S40.336,0,26,0z M26,50C12.767,50,2,39.233,2,26   S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z" />
                    <path
                        d="M38.5,25H27V14c0-0.553-0.448-1-1-1s-1,0.447-1,1v11H13.5c-0.552,0-1,0.447-1,1s0.448,1,1,1H25v12c0,0.553,0.448,1,1,1   s1-0.447,1-1V27h11.5c0.552,0,1-0.447,1-1S39.052,25,38.5,25z" />
                </svg>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="minusicon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 52 52" style="enable-background:new 0 0 52 52;" xml:space="preserve">
                    <path
                        d="M26,0C11.664,0,0,11.663,0,26s11.664,26,26,26s26-11.663,26-26S40.336,0,26,0z M26,50C12.767,50,2,39.233,2,26   S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z" />
                    <path d="M39,25H13c-0.552,0-1,0.447-1,1s0.448,1,1,1h26c0.552,0,1-0.447,1-1S39.552,25,39,25z" />
                </svg>
            </symbol>
        </svg>
    </div>


    <script>
        function openFacebookChat() {
            var fanpageId = '385745673746860';
            window.open(`https://m.me/${fanpageId}`, '_blank');
        }
        var chatButton = document.querySelector('.fb-chat-button');
        setTimeout(function() {
            chatButton.style.display = 'block';
            chatButton.classList.add('slide-up-animation');
        }, 3000);
    </script> --}}



    {{-- https://her-cosmetic.mysapo.net/account --}}

</div>
@include('layouts.customer.footer')
