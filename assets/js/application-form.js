var global_obj_form = {}
var refs = ["0", "Institucional", "Guillermina Meyer", "Estela Hermo", "Viviana Canulli", "Graciela Martínez", "Gabriela Arias", "Teresa García"]

var url = new URL(window.location.href);
var ref = url.searchParams.get("ref");
ref = refs[ref]
 if(ref==undefined){
     ref = ""
 }

function success_msj(){
    $('.aclaracion, .form-section, #forms-container').slideUp(150)
    $('#form-section h2').html('Thank you for submitting the application form. You will receive a confirmation email within the next 5 working days.')
}

var global_paises = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
var global_area_codes = [{"name":"Afghanistan","dial_code":"+93","code":"AF"},{"name":"Albania","dial_code":"+355","code":"AL"},{"name":"Algeria","dial_code":"+213","code":"DZ"},{"name":"AmericanSamoa","dial_code":"+1 684","code":"AS"},{"name":"Andorra","dial_code":"+376","code":"AD"},{"name":"Angola","dial_code":"+244","code":"AO"},{"name":"Anguilla","dial_code":"+1 264","code":"AI"},{"name":"Antigua and Barbuda","dial_code":"+1268","code":"AG"},{"name":"Argentina","dial_code":"+54","code":"AR"},{"name":"Armenia","dial_code":"+374","code":"AM"},{"name":"Aruba","dial_code":"+297","code":"AW"},{"name":"Australia","dial_code":"+61","code":"AU"},{"name":"Austria","dial_code":"+43","code":"AT"},{"name":"Azerbaijan","dial_code":"+994","code":"AZ"},{"name":"Bahamas","dial_code":"+1 242","code":"BS"},{"name":"Bahrain","dial_code":"+973","code":"BH"},{"name":"Bangladesh","dial_code":"+880","code":"BD"},{"name":"Barbados","dial_code":"+1 246","code":"BB"},{"name":"Belarus","dial_code":"+375","code":"BY"},{"name":"Belgium","dial_code":"+32","code":"BE"},{"name":"Belize","dial_code":"+501","code":"BZ"},{"name":"Benin","dial_code":"+229","code":"BJ"},{"name":"Bermuda","dial_code":"+1 441","code":"BM"},{"name":"Bhutan","dial_code":"+975","code":"BT"},{"name":"Bosnia and Herzegovina","dial_code":"+387","code":"BA"},{"name":"Botswana","dial_code":"+267","code":"BW"},{"name":"Brazil","dial_code":"+55","code":"BR"},{"name":"British Indian Ocean Territory","dial_code":"+246","code":"IO"},{"name":"Bulgaria","dial_code":"+359","code":"BG"},{"name":"Burkina Faso","dial_code":"+226","code":"BF"},{"name":"Burundi","dial_code":"+257","code":"BI"},{"name":"Cambodia","dial_code":"+855","code":"KH"},{"name":"Cameroon","dial_code":"+237","code":"CM"},{"name":"Canada","dial_code":"+1","code":"CA"},{"name":"Cape Verde","dial_code":"+238","code":"CV"},{"name":"Cayman Islands","dial_code":"+ 345","code":"KY"},{"name":"Central African Republic","dial_code":"+236","code":"CF"},{"name":"Chad","dial_code":"+235","code":"TD"},{"name":"Chile","dial_code":"+56","code":"CL"},{"name":"China","dial_code":"+86","code":"CN"},{"name":"Christmas Island","dial_code":"+61","code":"CX"},{"name":"Colombia","dial_code":"+57","code":"CO"},{"name":"Comoros","dial_code":"+269","code":"KM"},{"name":"Congo","dial_code":"+242","code":"CG"},{"name":"Cook Islands","dial_code":"+682","code":"CK"},{"name":"Costa Rica","dial_code":"+506","code":"CR"},{"name":"Croatia","dial_code":"+385","code":"HR"},{"name":"Cuba","dial_code":"+53","code":"CU"},{"name":"Cyprus","dial_code":"+537","code":"CY"},{"name":"Czech Republic","dial_code":"+420","code":"CZ"},{"name":"Denmark","dial_code":"+45","code":"DK"},{"name":"Djibouti","dial_code":"+253","code":"DJ"},{"name":"Dominica","dial_code":"+1 767","code":"DM"},{"name":"Dominican Republic","dial_code":"+1 849","code":"DO"},{"name":"Ecuador","dial_code":"+593","code":"EC"},{"name":"Egypt","dial_code":"+20","code":"EG"},{"name":"El Salvador","dial_code":"+503","code":"SV"},{"name":"Equatorial Guinea","dial_code":"+240","code":"GQ"},{"name":"Eritrea","dial_code":"+291","code":"ER"},{"name":"Estonia","dial_code":"+372","code":"EE"},{"name":"Ethiopia","dial_code":"+251","code":"ET"},{"name":"Faroe Islands","dial_code":"+298","code":"FO"},{"name":"Fiji","dial_code":"+679","code":"FJ"},{"name":"Finland","dial_code":"+358","code":"FI"},{"name":"France","dial_code":"+33","code":"FR"},{"name":"French Guiana","dial_code":"+594","code":"GF"},{"name":"French Polynesia","dial_code":"+689","code":"PF"},{"name":"Gabon","dial_code":"+241","code":"GA"},{"name":"Gambia","dial_code":"+220","code":"GM"},{"name":"Georgia","dial_code":"+995","code":"GE"},{"name":"Germany","dial_code":"+49","code":"DE"},{"name":"Ghana","dial_code":"+233","code":"GH"},{"name":"Gibraltar","dial_code":"+350","code":"GI"},{"name":"Greece","dial_code":"+30","code":"GR"},{"name":"Greenland","dial_code":"+299","code":"GL"},{"name":"Grenada","dial_code":"+1 473","code":"GD"},{"name":"Guadeloupe","dial_code":"+590","code":"GP"},{"name":"Guam","dial_code":"+1 671","code":"GU"},{"name":"Guatemala","dial_code":"+502","code":"GT"},{"name":"Guinea","dial_code":"+224","code":"GN"},{"name":"Guinea-Bissau","dial_code":"+245","code":"GW"},{"name":"Guyana","dial_code":"+595","code":"GY"},{"name":"Haiti","dial_code":"+509","code":"HT"},{"name":"Honduras","dial_code":"+504","code":"HN"},{"name":"Hungary","dial_code":"+36","code":"HU"},{"name":"Iceland","dial_code":"+354","code":"IS"},{"name":"India","dial_code":"+91","code":"IN"},{"name":"Indonesia","dial_code":"+62","code":"ID"},{"name":"Iraq","dial_code":"+964","code":"IQ"},{"name":"Ireland","dial_code":"+353","code":"IE"},{"name":"Israel","dial_code":"+972","code":"IL"},{"name":"Italy","dial_code":"+39","code":"IT"},{"name":"Jamaica","dial_code":"+1 876","code":"JM"},{"name":"Japan","dial_code":"+81","code":"JP"},{"name":"Jordan","dial_code":"+962","code":"JO"},{"name":"Kazakhstan","dial_code":"+7 7","code":"KZ"},{"name":"Kenya","dial_code":"+254","code":"KE"},{"name":"Kiribati","dial_code":"+686","code":"KI"},{"name":"Kuwait","dial_code":"+965","code":"KW"},{"name":"Kyrgyzstan","dial_code":"+996","code":"KG"},{"name":"Latvia","dial_code":"+371","code":"LV"},{"name":"Lebanon","dial_code":"+961","code":"LB"},{"name":"Lesotho","dial_code":"+266","code":"LS"},{"name":"Liberia","dial_code":"+231","code":"LR"},{"name":"Liechtenstein","dial_code":"+423","code":"LI"},{"name":"Lithuania","dial_code":"+370","code":"LT"},{"name":"Luxembourg","dial_code":"+352","code":"LU"},{"name":"Madagascar","dial_code":"+261","code":"MG"},{"name":"Malawi","dial_code":"+265","code":"MW"},{"name":"Malaysia","dial_code":"+60","code":"MY"},{"name":"Maldives","dial_code":"+960","code":"MV"},{"name":"Mali","dial_code":"+223","code":"ML"},{"name":"Malta","dial_code":"+356","code":"MT"},{"name":"Marshall Islands","dial_code":"+692","code":"MH"},{"name":"Martinique","dial_code":"+596","code":"MQ"},{"name":"Mauritania","dial_code":"+222","code":"MR"},{"name":"Mauritius","dial_code":"+230","code":"MU"},{"name":"Mayotte","dial_code":"+262","code":"YT"},{"name":"Mexico","dial_code":"+52","code":"MX"},{"name":"Monaco","dial_code":"+377","code":"MC"},{"name":"Mongolia","dial_code":"+976","code":"MN"},{"name":"Montenegro","dial_code":"+382","code":"ME"},{"name":"Montserrat","dial_code":"+1664","code":"MS"},{"name":"Morocco","dial_code":"+212","code":"MA"},{"name":"Myanmar","dial_code":"+95","code":"MM"},{"name":"Namibia","dial_code":"+264","code":"NA"},{"name":"Nauru","dial_code":"+674","code":"NR"},{"name":"Nepal","dial_code":"+977","code":"NP"},{"name":"Netherlands","dial_code":"+31","code":"NL"},{"name":"Netherlands Antilles","dial_code":"+599","code":"AN"},{"name":"New Caledonia","dial_code":"+687","code":"NC"},{"name":"New Zealand","dial_code":"+64","code":"NZ"},{"name":"Nicaragua","dial_code":"+505","code":"NI"},{"name":"Niger","dial_code":"+227","code":"NE"},{"name":"Nigeria","dial_code":"+234","code":"NG"},{"name":"Niue","dial_code":"+683","code":"NU"},{"name":"Norfolk Island","dial_code":"+672","code":"NF"},{"name":"Northern Mariana Islands","dial_code":"+1 670","code":"MP"},{"name":"Norway","dial_code":"+47","code":"NO"},{"name":"Oman","dial_code":"+968","code":"OM"},{"name":"Pakistan","dial_code":"+92","code":"PK"},{"name":"Palau","dial_code":"+680","code":"PW"},{"name":"Panama","dial_code":"+507","code":"PA"},{"name":"Papua New Guinea","dial_code":"+675","code":"PG"},{"name":"Paraguay","dial_code":"+595","code":"PY"},{"name":"Peru","dial_code":"+51","code":"PE"},{"name":"Philippines","dial_code":"+63","code":"PH"},{"name":"Poland","dial_code":"+48","code":"PL"},{"name":"Portugal","dial_code":"+351","code":"PT"},{"name":"Puerto Rico","dial_code":"+1 939","code":"PR"},{"name":"Qatar","dial_code":"+974","code":"QA"},{"name":"Romania","dial_code":"+40","code":"RO"},{"name":"Rwanda","dial_code":"+250","code":"RW"},{"name":"Samoa","dial_code":"+685","code":"WS"},{"name":"San Marino","dial_code":"+378","code":"SM"},{"name":"Saudi Arabia","dial_code":"+966","code":"SA"},{"name":"Senegal","dial_code":"+221","code":"SN"},{"name":"Serbia","dial_code":"+381","code":"RS"},{"name":"Seychelles","dial_code":"+248","code":"SC"},{"name":"Sierra Leone","dial_code":"+232","code":"SL"},{"name":"Singapore","dial_code":"+65","code":"SG"},{"name":"Slovakia","dial_code":"+421","code":"SK"},{"name":"Slovenia","dial_code":"+386","code":"SI"},{"name":"Solomon Islands","dial_code":"+677","code":"SB"},{"name":"South Africa","dial_code":"+27","code":"ZA"},{"name":"South Georgia and the South Sandwich Islands","dial_code":"+500","code":"GS"},{"name":"Spain","dial_code":"+34","code":"ES"},{"name":"Sri Lanka","dial_code":"+94","code":"LK"},{"name":"Sudan","dial_code":"+249","code":"SD"},{"name":"Suriname","dial_code":"+597","code":"SR"},{"name":"Swaziland","dial_code":"+268","code":"SZ"},{"name":"Sweden","dial_code":"+46","code":"SE"},{"name":"Switzerland","dial_code":"+41","code":"CH"},{"name":"Tajikistan","dial_code":"+992","code":"TJ"},{"name":"Thailand","dial_code":"+66","code":"TH"},{"name":"Togo","dial_code":"+228","code":"TG"},{"name":"Tokelau","dial_code":"+690","code":"TK"},{"name":"Tonga","dial_code":"+676","code":"TO"},{"name":"Trinidad and Tobago","dial_code":"+1 868","code":"TT"},{"name":"Tunisia","dial_code":"+216","code":"TN"},{"name":"Turkey","dial_code":"+90","code":"TR"},{"name":"Turkmenistan","dial_code":"+993","code":"TM"},{"name":"Turks and Caicos Islands","dial_code":"+1 649","code":"TC"},{"name":"Tuvalu","dial_code":"+688","code":"TV"},{"name":"Uganda","dial_code":"+256","code":"UG"},{"name":"Ukraine","dial_code":"+380","code":"UA"},{"name":"United Arab Emirates","dial_code":"+971","code":"AE"},{"name":"United Kingdom","dial_code":"+44","code":"GB"},{"name":"United States","dial_code":"+1","code":"US"},{"name":"Uruguay","dial_code":"+598","code":"UY"},{"name":"Uzbekistan","dial_code":"+998","code":"UZ"},{"name":"Vanuatu","dial_code":"+678","code":"VU"},{"name":"Wallis and Futuna","dial_code":"+681","code":"WF"},{"name":"Yemen","dial_code":"+967","code":"YE"},{"name":"Zambia","dial_code":"+260","code":"ZM"},{"name":"Zimbabwe","dial_code":"+263","code":"ZW"},{"name":"land Islands","dial_code":"","code":"AX"},{"name":"Bolivia, Plurinational State of","dial_code":"+591","code":"BO"},{"name":"Brunei Darussalam","dial_code":"+673","code":"BN"},{"name":"Cocos (Keeling) Islands","dial_code":"+61","code":"CC"},{"name":"Congo, The Democratic Republic of the","dial_code":"+243","code":"CD"},{"name":"Cote d'Ivoire","dial_code":"+225","code":"CI"},{"name":"Falkland Islands (Malvinas)","dial_code":"+500","code":"FK"},{"name":"Guernsey","dial_code":"+44","code":"GG"},{"name":"Holy See (Vatican City State)","dial_code":"+379","code":"VA"},{"name":"Hong Kong","dial_code":"+852","code":"HK"},{"name":"Iran, Islamic Republic of","dial_code":"+98","code":"IR"},{"name":"Isle of Man","dial_code":"+44","code":"IM"},{"name":"Jersey","dial_code":"+44","code":"JE"},{"name":"Korea, Democratic People's Republic of","dial_code":"+850","code":"KP"},{"name":"Korea, Republic of","dial_code":"+82","code":"KR"},{"name":"Lao People's Democratic Republic","dial_code":"+856","code":"LA"},{"name":"Libyan Arab Jamahiriya","dial_code":"+218","code":"LY"},{"name":"Macao","dial_code":"+853","code":"MO"},{"name":"Macedonia, The Former Yugoslav Republic of","dial_code":"+389","code":"MK"},{"name":"Micronesia, Federated States of","dial_code":"+691","code":"FM"},{"name":"Moldova, Republic of","dial_code":"+373","code":"MD"},{"name":"Mozambique","dial_code":"+258","code":"MZ"},{"name":"Palestinian Territory, Occupied","dial_code":"+970","code":"PS"},{"name":"Pitcairn","dial_code":"+872","code":"PN"},{"name":"Réunion","dial_code":"+262","code":"RE"},{"name":"Russia","dial_code":"+7","code":"RU"},{"name":"Saint Barthélemy","dial_code":"+590","code":"BL"},{"name":"Saint Helena, Ascension and Tristan Da Cunha","dial_code":"+290","code":"SH"},{"name":"Saint Kitts and Nevis","dial_code":"+1 869","code":"KN"},{"name":"Saint Lucia","dial_code":"+1 758","code":"LC"},{"name":"Saint Martin","dial_code":"+590","code":"MF"},{"name":"Saint Pierre and Miquelon","dial_code":"+508","code":"PM"},{"name":"Saint Vincent and the Grenadines","dial_code":"+1 784","code":"VC"},{"name":"Sao Tome and Principe","dial_code":"+239","code":"ST"},{"name":"Somalia","dial_code":"+252","code":"SO"},{"name":"Svalbard and Jan Mayen","dial_code":"+47","code":"SJ"},{"name":"Syrian Arab Republic","dial_code":"+963","code":"SY"},{"name":"Taiwan, Province of China","dial_code":"+886","code":"TW"},{"name":"Tanzania, United Republic of","dial_code":"+255","code":"TZ"},{"name":"Timor-Leste","dial_code":"+670","code":"TL"},{"name":"Venezuela, Bolivarian Republic of","dial_code":"+58","code":"VE"},{"name":"Viet Nam","dial_code":"+84","code":"VN"},{"name":"Virgin Islands, British","dial_code":"+1 284","code":"VG"},{"name":"Virgin Islands, U.S.","dial_code":"+1 340","code":"VI"}]

var html_codes = ''
for(c in global_area_codes){
    html_codes += `<option value="${global_area_codes[c].dial_code}">${global_area_codes[c].code + ' - ' + global_area_codes[c].dial_code}</option>`
}

var html_paises = ''
for(p in global_paises){
    html_paises += `<option value="${global_paises[p]}">${global_paises[p]}</option>`
}

function comp_form_affiliate(){

    return `<div class="affiliate" id="affiliate">

                <h3>Affiliate</h3>
                <div class="form-section affiliate">

                <div class="inputs-row">

                    
                    <div class="input-cont">
                        <div class="form-label">Name<span class="required">*</span></div>
                        <input type="text" id="name" class="form-input">
                    </div>
                    
                    <div class="input-cont">
                        <div class="form-label">Surname<span class="required">*</span></div>
                        <input type="text" id="surname" class="form-input">
                    </div>
                    
                    <div class="input-cont">
                        <div class="form-label">Date of birth<span class="required">*</span></div>
                        <input type="date" id="birthdate" class="form-input">
                    </div>
                    
                </div>

                <div class="inputs-col i-am-a">

                    <div class="form-label">I am a<span class="required">*</span></div>
                    
                    <div class="options-container">
                        <div class="form-box" data-value="Student">Student</div>
                        <div class="form-box" data-value="Teacher">Teacher</div>
                        <div class="form-box" data-value="Translator">Translator</div>
                        <div class="form-box other" data-value="Other">Other</div>
                    </div>
                
                </div>

                <div class="inputs-row" style="margin-bottom: 15px">

                    <div class="input-cont">
                            <div class="form-label">Email<span class="required">*</span></div>
                            <input type="mail" id="email" class="form-input">
                    </div>
                    
                    <div class="input-cont">
                            <div class="form-label">Mobile phone number<span class="required">*</span></div>
                            <div style="display:flex">
                                <select class="form-input area-codes" id="area-code">
                                    <option value=""> -- </option>
                                    ${html_codes}
                                </select>
                                <input type="number" id="phone" class="form-input">
                            </div>
                    </div>
                    
                    <div class="input-cont">
                            <div class="form-label">Facebook account (optional)</div>
                            <input type="text" id="facebook" class="form-input non-required">
                    </div>

                </div>
                
                <div class="inputs-row" style="margin-bottom: 15px">

                    <div class="input-cont">
                            <div class="form-label">Instagram account (optional)</div>
                            <input type="text" id="instagram" class="form-input non-required">
                    </div>
                    
                    <div class="input-cont">
                            <div class="form-label">Country<span class="required">*</span></div>
                            <select class="form-input" id="country">
                                <option disabled selected value=""> -- </option>
                                ${html_paises}
                            </select>
                    </div>

                    <div class="input-cont">
                        <div class="form-label">State/County/Province<span class="required">*</span></div>
                        <input type="text" id="state" class="form-input">
                    </div>

                </div>

                <div class="inputs-row">
                    <div class="input-cont">
                        <div class="form-label">City/Town<span class="required">*</span></div>
                        <input type="text" id="city" class="form-input">
                    </div>

                    <div class="input-cont">
                        <div class="form-label">Address<span class="required">*</span></div>
                        <input type="text" id="address" class="form-input">
                    </div>

                    <div class="input-cont">
                        <div class="form-label">Postcode/Zipcode<span class="required">*</span></div>
                        <input type="text" id="zipcode" class="form-input">
                    </div>
                </div>

                <div class="inputs-row">
                    <div class="cbox-cont">
                        <input type="checkbox" id="cbox2" value="relleno" class="cbox"> <label for="cbox2">To the best of my knowledge, the information provided is accurate, current and complete.<span class="required">*</span> </label>
                    </div>
                </div>

                <div class="inputs-row" style="justify-content:center">
                    <input type="submit" value="SUBMIT APPLICATION" class="form-box submit affiliate-form">
                </div>

                <div class="err-msj"></div>

                </div>
            </div>`

}

function comp_form_individual(){

    return `<div class="individual" id="individual">

            <h3>Individual</h3>
            <div class="form-section individual">

            <div class="inputs-row">

                
                <div class="input-cont">
                    <div class="form-label">Name<span class="required">*</span></div>
                    <input type="text" id="name" class="form-input">
                </div>
                
                <div class="input-cont">
                    <div class="form-label">Surname<span class="required">*</span></div>
                    <input type="text" id="surname" class="form-input">
                </div>
                
                <div class="input-cont">
                    <div class="form-label">Date of birth<span class="required">*</span></div>
                    <input type="date" id="birthdate" class="form-input">
                </div>
                
            </div>

            <div class="inputs-col i-am-a">

                    <div class="form-label">I am a<span class="required">*</span></div>
                    
                    <div class="options-container">
                        <div class="form-box" data-value="Student">Student</div>
                        <div class="form-box" data-value="Teacher">Teacher</div>
                        <div class="form-box" data-value="Translator">Translator</div>
                        <div class="form-box other" data-value="Other">Other</div>
                    </div>
                
            </div>

            <div class="inputs-row" style="margin-bottom: 15px">

                <div class="input-cont">
                        <div class="form-label">Email<span class="required">*</span></div>
                        <input type="mail" id="email" class="form-input">
                </div>
                
                <div class="input-cont">
                        <div class="form-label">Mobile phone number<span class="required">*</span></div>
                        <div style="display:flex">
                            <select class="form-input area-codes" id="area-code">
                                <option value=""> -- </option>
                                ${html_codes}
                            </select>
                            <input type="number" id="phone" class="form-input">
                        </div>
                </div>
                
                <div class="input-cont">
                        <div class="form-label">Facebook account (optional)</div>
                        <input type="text" id="facebook" class="form-input non-required">
                </div>

            </div>
            
            <div class="inputs-row" style="margin-bottom: 15px">

                <div class="input-cont">
                        <div class="form-label">Instagram account (optional)</div>
                        <input type="text" id="instagram" class="form-input non-required">
                </div>
                
                <div class="input-cont">
                        <div class="form-label">Country<span class="required">*</span></div>
                        <select class="form-input" id="country">
                            <option disabled selected value=""> -- </option>
                            ${html_paises}
                        </select>
                </div>

                <div class="input-cont">
                    <div class="form-label">State/County/Province<span class="required">*</span></div>
                    <input type="text" id="state" class="form-input">
                </div>

            </div>

            <div class="inputs-row">
                <div class="input-cont">
                    <div class="form-label">City/Town<span class="required">*</span></div>
                    <input type="text" id="city" class="form-input">
                </div>

                <div class="input-cont">
                    <div class="form-label">Address<span class="required">*</span></div>
                    <input type="text" id="address" class="form-input">
                </div>

                <div class="input-cont">
                    <div class="form-label">Postcode/Zipcode<span class="required">*</span></div>
                    <input type="text" id="zipcode" class="form-input">
                </div>
            </div>

            

            <div class="inputs-row" style="justify-content: center">

                <div class="input-cont">
                        <div class="form-label">Estimated number of candidates per year<span class="required">*</span></div>
                        <select class="form-input" id="estimated_candidates">
                            <option disabled selected value=""> -- </option>
                            <option value="10-19">10-19</option>
                            <option value="20-49">20-49</option>
                            <option value="50 or more">50 or more</option>
                        </select>
                </div>

            </div>

            <div class="inputs-row">
                <div class="cbox-cont">
                    <input type="checkbox" id="cbox2" value="relleno" class="cbox"> <label for="cbox2">To the best of my knowledge, the information provided is accurate, current and complete.<span class="required">*</span> </label>
                </div>
            </div>

            <div class="inputs-row" style="justify-content:center">
                <input type="submit" value="SUBMIT APPLICATION" class="form-box submit individual-form">
            </div>

            <div class="err-msj"></div>

            </div>
        </div>`

}

function comp_form_institution(){

    return `<div class="institution" id="institution">

            <h3>Institution</h3>
            <div class="form-section institution">

            <div class="inputs-row">

                
                <div class="input-cont">
                    <div class="form-label">Name of the institution<span class="required">*</span></div>
                    <input type="text" id="institution_name" class="form-input">
                </div>
                
                
            </div>

            <div class="inputs-row">
                <div class="inputs-col institution-type">

                    <div class="form-label">Type<span class="required">*</span> </div>
                    
                    <div class="options-container">
                        <div class="form-box" data-value="University">University</div>
                        <div class="form-box" data-value="College">College</div>
                        <div class="form-box" data-value="School">School</div>
                        <div class="form-box" data-value="Language school">Language school</div>
                        <div class="form-box" data-value="Company">Company</div>
                        <div class="form-box other" data-value="Other">Other</div>
                    </div>

                </div>
            </div>

            <div class="inputs-row" style="margin-bottom: 15px">

                <div class="input-cont">
                        <div class="form-label">Email<span class="required">*</span></div>
                        <input type="mail" id="institution_email" class="form-input">
                </div>
                
                <div class="input-cont">
                        <div class="form-label">Telephone Number<span class="required">*</span></div>
                        <input type="number" id="institution_phone" class="form-input">
                </div>
                
                <div class="input-cont">
                        <div class="form-label">Website</div>
                        <input type="text" id="website" class="form-input non-required">
                </div>

            </div>
            
            <div class="inputs-row" style="margin-bottom: 15px">

                <div class="input-cont">
                        <div class="form-label">Facebook page (optional)</div>
                        <input type="text" id="institution_facebook" class="form-input non-required">
                </div>
                
                <div class="input-cont">
                        <div class="form-label">Instagram page (optional)</div>
                        <input type="instagram" id="institution_instagram" class="form-input non-required">
                </div>
                
                <div class="input-cont">
                        <div class="form-label">Number of staff<span class="required">*</span></div>
                        <input type="number" id="staff" class="form-input">
                </div>

            </div>
            
            <div class="inputs-row" style="justify-content: flex-start">

                <div class="input-cont">
                        <div class="form-label">Number of rooms<span class="required">*</span></div>
                        <input type="number" id="rooms" class="form-input">
                </div>
            

            </div>
            
            <div class="inputs-row" style="justify-content: flex-start">

                <div class="input-cont" style="width:100%">
                        <div class="form-label">Approximate number of candidates per room<span class="required">*</span></div>
                        <input type="number" class="form-input" id="room-capacity">
                </div>
            

            </div>
        

            <div class="inputs-row" style="margin-bottom: 15px">
                
                <div class="input-cont">
                        <div class="form-label">Country<span class="required">*</span></div>
                        <select class="form-input" id="country">
                            <option disabled selected value=""> -- </option>
                            ${html_paises}
                        </select>
                </div>

                <div class="input-cont">
                    <div class="form-label">State/County/Province<span class="required">*</span></div>
                    <input type="text" id="state" class="form-input">
                </div>

                <div class="input-cont">
                    <div class="form-label">City/Town<span class="required">*</span></div>
                    <input type="text" id="city" class="form-input">
                </div>

            </div>

            <div class="inputs-row" style="justify-content: flex-start">

                <div class="input-cont" style="margin-right: 40px">
                    <div class="form-label">Address<span class="required">*</span></div>
                    <input type="text" id="address" class="form-input">
                </div>

                <div class="input-cont">
                    <div class="form-label">Postcode/Zipcode<span class="required">*</span></div>
                    <input type="text" id="zipcode" class="form-input">
                </div>
                
            </div>
            
            <div class="inputs-row" style="justify-content: center">

                <div class="input-cont">
                        <div class="form-label">Estimated number of candidates per year<span class="required">*</span></div>
                        <select class="form-input" id="estimated_candidates">
                            <option disabled selected value=""> -- </option>
                            <option value="10-19">10-19</option>
                            <option value="20-49">20-49</option>
                            <option value="50 or more">50 or more</option>
                        </select>
                </div>

            </div>

            <div class="extra-content">

            
                <div class="form-text">Head of the institution details</div>
                <div class="inputs-row" style="margin-top: 15px">
                
                    <div class="input-cont">
                        <div class="form-label">Name<span class="required">*</span></div>
                        <input type="text" id="name" class="form-input">
                    </div>
                    
                    <div class="input-cont">
                        <div class="form-label">Surname<span class="required">*</span></div>
                        <input type="text" id="surname" class="form-input">
                    </div>

                    <div class="input-cont">
                        <div class="form-label">Date of birth<span class="required">*</span></div>
                        <input type="date" id="birthdate" class="form-input">
                    </div>

                </div>

                <div class="inputs-col i-am-a">

                    <div class="form-label">I am a<span class="required">*</span></div>
                    
                    <div class="options-container">
                        <div class="form-box" data-value="Student">Student</div>
                        <div class="form-box" data-value="Teacher">Teacher</div>
                        <div class="form-box" data-value="Translator">Translator</div>
                        <div class="form-box other" data-value="Other">Other</div>
                    </div>
                
                </div>

                <div class="inputs-row" style="justify-content: flex-start">
                    <div class="input-cont" style="margin-right: 40px">
                        <div class="form-label">Email<span class="required">*</span></div>
                        <input type="mail" id="email" class="form-input">
                    </div>
                    
                    <div class="input-cont">
                        <div class="form-label">Mobile phone number<span class="required">*</span></div>
                        <div style="display:flex">
                            <select class="form-input area-codes" id="area-code">
                                <option value=""> -- </option>
                                ${html_codes}
                            </select>
                            <input type="number" id="phone" class="form-input">
                        </div>
                    </div>
                </div>

                <div class="inputs-col">
                <div class="cbox-cont">
                    <input type="checkbox" id="cbox1" value="relleno" class="cbox"> <label for="cbox1">I agree that I am authorised by the organisation above to submit requests.<span class="required">*</span></label>
                </div>
                <div class="cbox-cont">
                    <input type="checkbox" id="cbox2" value="relleno" class="cbox"> <label for="cbox2">To the best of my knowledge, the information provided is accurate, current and complete.<span class="required">*</span> </label>
                </div>
                </div>

            </div>

            <div class="inputs-row" style="justify-content:center">
                <input type="submit" value="SUBMIT APPLICATION" class="form-box submit individual-form">
            </div>

            <div class="err-msj"></div>

            </div>
        </div>`

}

function comp_specify(){

    return `<div class="specify" style="display:none;">
                <div class="form-text">Specify:</div>
                <input type="text" class="form-input">
            </div>` 

}

// Listenrs
$(document).on('click', '#affiliate-option', function(){

    global_obj_form = {}
    global_obj_form.type = "affiliate"

    $('#forms-container').html(comp_form_affiliate())
    $("html, body").animate({ scrollTop: $('#forms-container').offset().top }, 1000);

})

$(document).on('click', '#official-member-option', function(){
    var second_options = `<div class="form-section">

                            <div class="form-text">I would like to join as an:</div>

                            <div class="options-container" id="secondary-options">

                                <div class="form-box" id="individual-option">Individual</div>
                                <div class="form-box" id="institution-option">Institution</div>

                            </div>

                        </div>`
    $('#forms-container').html(second_options)
    $("html, body").animate({ scrollTop: $('#forms-container').offset().top }, 1000);

})

$(document).on('click', '#secondary-options .form-box', function(){

    global_obj_form = {}

    if($(this).attr('id')=='individual-option'){
        global_obj_form.type = "individual"
        $('#institution').remove()
        $('#forms-container').append(comp_form_individual())
        $("html, body").animate({ scrollTop: $('#individual').offset().top }, 1000);
        
    }else if($(this).attr('id')=='institution-option'){
        global_obj_form.type = "institution"
        $('#individual').remove()
        $('#forms-container').append(comp_form_institution())
        $("html, body").animate({ scrollTop: $('#institution').offset().top }, 1000);
    }

})

$(document).on('click', '.form-box', function(){

    if(!$(this).hasClass('selected') && !$(this).hasClass('submit')){
        $(this).parent().find('.form-box').removeClass('selected')
        $(this).addClass('selected')
        
        var container = $(this).parent().parent()
        
        if($(this).hasClass('other')){
            
            container.append(comp_specify())
            container.find('.specify').slideDown(150)
            
            
        }else{
            container.find('.specify').slideUp(150)
            setTimeout(() => {
                container.find('.specify').remove()
                
            }, 200);
        }
    }
        
})


$(window).on("load", function() {
    var preLoder = $("#preloader");
    preLoder.fadeOut(1000);
  
    $(document).on("click", ".cancel-preloader a", function(e) {
      e.preventDefault();
      $("#preloader").fadeOut(2000);
    });
  });
console.log('caca')

// Cuando submitean un form
$(document).on('click', '.submit', function(){

    var proceed = true;
    
    $('#'+global_obj_form.type + ' input, #'+global_obj_form.type + ' textarea, #'+global_obj_form.type + ' select').each(function(){
        if(!$(this).hasClass('non-required')){
            if($(this).val()=='' || $(this).val()==null){
                proceed = false;
                console.log('false: ', $(this))
                $(this).addClass('please-complete')
            }else{
                console.log('safa')
                $(this).removeClass('please-complete')
                console.log($(this).attr('id'))
            }
        }else{
            console.log('non required!')
        }
    })
    
    $('#'+global_obj_form.type + ' .cbox').each(function(){
        if(!$(this).prop('checked')){
            console.log('not checked!')
            proceed = false
            console.log('false: ', $(this))
            console.log($(this).prop('checked'))
        }
    })

    if(proceed){
        $('.err-msj').slideUp()
        console.log('Podemos enviar el formulario.')

        // Si es affiliate
        if(global_obj_form.type=='affiliate'){
            
            // Levantamos los valores
            var name = $('#' + global_obj_form.type + ' #name').val()
            var surname = $('#' + global_obj_form.type + ' #surname').val()
            var birthdate = $('#' + global_obj_form.type + ' #birthdate').val()
            var i_am_a = $('#' + global_obj_form.type + ' .i-am-a .selected').attr('data-value')
            var i_am_a_spec = ''
            if(i_am_a == 'Other'){
                i_am_a_spec = $('.i-am-a .specify input').val()
            }
            var email = $('#' + global_obj_form.type + ' #email').val()
            var area_code = $('#' + global_obj_form.type + ' #area-code').val()
            var phone = $('#' + global_obj_form.type + ' #phone').val()
            var instagram = $('#' + global_obj_form.type + ' #instagram').val()
            var facebook = $('#' + global_obj_form.type + ' #facebook').val()
            var country = $('#' + global_obj_form.type + ' #country').val()
            var state = $('#' + global_obj_form.type + ' #state').val()
            var city = $('#' + global_obj_form.type + ' #city').val()
            var address = $('#' + global_obj_form.type + ' #address').val()
            var zipcode = $('#' + global_obj_form.type + ' #zipcode').val()

            $.ajax({
                url:'api.php?func=form_affiliate',
                method:'POST',
                cache: false,
                data:{
                    ref,
                    type: global_obj_form.type,
                    name,
                    surname,
                    birthdate,
                    i_am_a,
                    i_am_a_spec,
                    email,
                    area_code,
                    phone,
                    instagram,
                    facebook,
                    country,
                    state,
                    city,
                    address,
                    zipcode
                },
                dataType:'text',
                success:function(data){
                    console.log('res')
                    console.log(data);

                    success_msj()

                }
            });

            // console.log(name, ', ', surname, ', ', birthdate, ', ', i_am_a, ', ', i_am_a_spec, ', ', email)
            // console.log(phone, ', ', instagram, ', ', facebook, ', ', country, ', ', state, ', ', city, ', ', address, ', ', zipcode)

        }else if(global_obj_form.type=='individual'){

            // Levantamos los valores
            var name = $('#' + global_obj_form.type + ' #name').val()
            var surname = $('#' + global_obj_form.type + ' #surname').val()
            var birthdate = $('#' + global_obj_form.type + ' #birthdate').val()
            var i_am_a = $('#' + global_obj_form.type + ' .i-am-a .selected').attr('data-value')
            var i_am_a_spec = ''
            if(i_am_a == 'Other'){
                i_am_a_spec = $('.i-am-a .specify input').val()
            }
            var email = $('#' + global_obj_form.type + ' #email').val()
            var area_code = $('#' + global_obj_form.type + ' #area-code').val()
            var phone = $('#' + global_obj_form.type + ' #phone').val()
            var instagram = $('#' + global_obj_form.type + ' #instagram').val()
            var facebook = $('#' + global_obj_form.type + ' #facebook').val()
            var country = $('#' + global_obj_form.type + ' #country').val()
            var state = $('#' + global_obj_form.type + ' #state').val()
            var city = $('#' + global_obj_form.type + ' #city').val()
            var address = $('#' + global_obj_form.type + ' #address').val()
            var zipcode = $('#' + global_obj_form.type + ' #zipcode').val()
            var estimated_candidates = $('#' + global_obj_form.type + ' #estimated_candidates').val()

            $.ajax({
                url:'api.php?func=form_individual',
                method:'POST',
                cache: false,
                data:{
                    ref,
                    type: global_obj_form.type,
                    name,
                    surname,
                    birthdate,
                    i_am_a,
                    i_am_a_spec,
                    email,
                    area_code,
                    phone,
                    instagram,
                    facebook,
                    country,
                    state,
                    city,
                    address,
                    zipcode,
                    estimated_candidates
                },
                dataType:'text',
                success:function(data){
                    console.log('res')
                    console.log(data);

                    success_msj()

                }
            });

        }else if(global_obj_form.type=='institution'){

            // Levantamos los valores
            var institution_name = $('#' + global_obj_form.type + ' #institution_name').val()
            var institution_type = $('#' + global_obj_form.type + ' .institution-type .selected').attr('data-value')
            var institution_type_spec = ''
            if(institution_type == 'Other'){
                institution_type_spec = $('.institution-type .specify input').val()
            }
            var institution_email = $('#' + global_obj_form.type + ' #institution_email').val()
            var institution_phone = $('#' + global_obj_form.type + ' #institution_phone').val()
            var website = $('#' + global_obj_form.type + ' #website').val()
            var facebook = $('#' + global_obj_form.type + ' #institution_facebook').val()
            var instagram = $('#' + global_obj_form.type + ' #institution_instagram').val()
            var staff = $('#' + global_obj_form.type + ' #staff').val()
            var rooms = $('#' + global_obj_form.type + ' #rooms').val()
            var room_capacity = $('#' + global_obj_form.type + ' #room-capacity').val()
            
            var country = $('#' + global_obj_form.type + ' #country').val()
            var state = $('#' + global_obj_form.type + ' #state').val()
            var city = $('#' + global_obj_form.type + ' #city').val()
            var address = $('#' + global_obj_form.type + ' #address').val()
            var zipcode = $('#' + global_obj_form.type + ' #zipcode').val()
            var estimated_candidates = $('#' + global_obj_form.type + ' #estimated_candidates').val()
            
            var name = $('#' + global_obj_form.type + ' #name').val()
            var surname = $('#' + global_obj_form.type + ' #surname').val()
            var birthdate = $('#' + global_obj_form.type + ' #birthdate').val()
            var i_am_a = $('#' + global_obj_form.type + ' .i-am-a .selected').attr('data-value')
            var i_am_a_spec = ''
            if(i_am_a == 'Other'){
                i_am_a_spec = $('.i-am-a .specify input').val()
            }
            var email = $('#' + global_obj_form.type + ' #email').val()
            var area_code = $('#' + global_obj_form.type + ' #area-code').val()
            var phone = $('#' + global_obj_form.type + ' #phone').val()


            $.ajax({
                url:'api.php?func=form_institution',
                method:'POST',
                cache: false,
                data:{
                    ref,
                    type: global_obj_form.type,
                    institution_name,
                    institution_type,
                    institution_type_spec,
                    institution_email,
                    institution_phone,
                    website,
                    facebook,
                    instagram,
                    staff,
                    rooms,
                    room_capacity,
                    country,
                    state,
                    city,
                    address,
                    zipcode,
                    estimated_candidates,
                    name,
                    surname,
                    birthdate,
                    i_am_a,
                    i_am_a_spec,
                    email,
                    area_code,
                    phone
                },
                dataType:'text',
                success:function(data){
                    console.log('res')
                    console.log(data);

                    success_msj()

                }
            });

        }

    }else{
        console.log('fields missing')
        $('.err-msj').html('Some fields are incomplete.')
        $('.err-msj').slideDown(100)
    }

})