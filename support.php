<?php /* Template Name: Support */ ?>
<?php get_header(); ?>


    <main id="support">
      <p class="breadcrumbs"> &nbsp</p>
      <section class="hold-columns top-center-cols">
      <div class="left-column">

        <?php get_sidebar("support");?>
      </div>
      <div class="right-column">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                <article class="card titlecard">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'oev-thumbnail') ?></a>
                <div class="hold-article-text">

                  <h1 class="post-title mid-accent-bar"><?php the_title(); ?></h1>

                <p ><?php the_content(); ?> </p>
                <div class="hold-date">
                  <span>
                    <?php the_date( 'l F j, Y' ); ?>
                  </span>
                </div>
              </div>


            </article>

            <?php endwhile; else: ?>
              <article class="card titlecard">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/demo-1-banner.jpg" alt="Old East Village Community Association">
                <div class="hold-article-text">
                  <h2>Old East Village Community Association</h2>
                  <p>Welcome! Use the links above to learn about community news and events, or to see what we are working with as a community association</p>
                </div>

              </article>

            <?php endif;?>

        <article class="card titlecard" id="become_member">
          <img src="<?php echo get_template_directory_uri();?>/imgs/banners/membership-banner-v3.jpg"/>
          <div class="hold-article-text">

            <h1 class="post-title">Become a Member!</h1>
            <p>Becoming a member is one of the best ways to support us. By joining the OEVCA as a member, your household will be able to vote for board members and resolutions.</p>
        <p>The Paypal button below will allow you to pay your membership dues online. Once you have paid your dues for the year, an autofilled form will be shown prompting you to subscribe to our mailchimp mailing list. Please click the "I've Paid my Dues, Make me a Member" button. This will add you to our official list of members.</p>
    <h2 style="margin-top:15px;padding-top:0px;">Membership Cost</h2> <p style="font-size:30pt;font-weight:bold;">$10</p>
        <div id="smart-button-container">
          <div style="text-align: center;">
            <div id="paypal-button-container"></div>
          </div>
        </div>
      <script src="https://www.paypal.com/sdk/js?client-id=AdOl4wFKwUgc6D0oQrLf_eA6LXb8DadfF_kGd3hCpP0yXf9qURcwdUMNoiKn-eX2jlXkhFqoPUnAH_Qw&currency=CAD" data-sdk-integration-source="button-factory"></script>
      <script>

        function initPayPalButton() {
          paypal.Buttons({
            style: {
              shape: 'rect',
              color: 'gold',
              layout: 'vertical',
              label: 'paypal',

            },

            createOrder: function(data, actions) {
              return actions.order.create({
                purchase_units: [{"amount":{"currency_code":"CAD","value":10}}]
              });
            },

            onApprove: function(data, actions) {
              return actions.order.capture().then(function(details) {
                console.log(details);
                document.getElementById('holdMailChimp').innerHTML = '<div id="mc_embed_signup"> <form action="https://oevca.us13.list-manage.com/subscribe/post?u=751ac287d547309912de249c7&amp;id=0d8505bb71" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate> <div id="mc_embed_signup_scroll"> <h2 class="mid-accent-bar">Get Added To Our Membership List!</h2> <div class="indicates-required"><span class="asterisk">*</span> indicates required</div> <div class="mc-field-group"> <label for="mce-FNAME">First Name <span class="asterisk">*</span></label> <input type="text" value="'+details.payer.name.given_name+'" name="FNAME" class="" id="mce-FNAME"> </div> <div class="mc-field-group"> <label for="mce-LNAME">Last Name <span class="asterisk">*</span></label> <input type="text" value="'+details.payer.name.surname+'" name="LNAME" class="" id="mce-LNAME"> </div> <div class="mc-field-group"> <label for="mce-EMAIL">Email Address <span class="asterisk">*</span> </label> <input type="email" value="'+details.payer.email_address+'" name="EMAIL" class="required email" id="mce-EMAIL"> </div> <div class="mc-field-group size1of2"> <label for="mce-MMERGE4">Phone Number </label> <input type="text" name="MMERGE4" class="" value="'+details.payer.phone.phone_number.national_number+'" id="mce-MMERGE4"> </div> <div class="mc-address-group"> <div class="mc-field-group"> <label for="mce-MMERGE3-addr1">Address </label> <input type="text" value="'+details.payer.address.address_line_1+'" maxlength="70" name="MMERGE3[addr1]" id="mce-MMERGE3-addr1" class=""> </div> <div class="mc-field-group"> <label for="mce-MMERGE3-addr2">Address Line 2</label> <input type="text" value="'+details.payer.address.address_line_2+'" maxlength="70" name="MMERGE3[addr2]" id="mce-MMERGE3-addr2"> </div> <div class="mc-field-group size1of2"> <label for="mce-MMERGE3-city">City</label> <input type="text" value="'+details.payer.address.admin_area_2+'" maxlength="40" name="MMERGE3[city]" id="mce-MMERGE3-city" class=""> </div> <div class="mc-field-group size1of2"> <label for="mce-MMERGE3-state">Province</label> <input type="text" value="'+details.payer.address.admin_area_1+'" maxlength="20" name="MMERGE3[state]" id="mce-MMERGE3-state" class=""> </div> <div class="mc-field-group size1of2"> <label for="mce-MMERGE3-zip">Postal Code</label> <input type="text" value="'+details.payer.address.postal_code+'" maxlength="10" name="MMERGE3[zip]" id="mce-MMERGE3-zip" class=""> </div> <div class="mc-field-group size1of2"> <label for="mce-MMERGE3-country">Country</label> <select name="MMERGE3[country]" id="mce-MMERGE3-country" class=""><option value="164">USA</option><option value="286">Aaland Islands</option><option value="274">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="178">American Samoa</option><option value="4">Andorra</option><option value="5">Angola</option><option value="176">Anguilla</option><option value="175">Antigua And Barbuda</option><option value="6">Argentina</option><option value="7">Armenia</option><option value="179">Aruba</option><option value="8">Australia</option><option value="9">Austria</option><option value="10">Azerbaijan</option><option value="11">Bahamas</option><option value="12">Bahrain</option><option value="13">Bangladesh</option><option value="14">Barbados</option><option value="15">Belarus</option><option value="16">Belgium</option><option value="17">Belize</option><option value="18">Benin</option><option value="19">Bermuda</option><option value="20">Bhutan</option><option value="21">Bolivia</option><option value="325">Bonaire, Saint Eustatius and Saba</option><option value="22">Bosnia and Herzegovina</option><option value="23">Botswana</option><option value="181">Bouvet Island</option><option value="24">Brazil</option><option value="180">Brunei Darussalam</option><option value="25">Bulgaria</option><option value="26">Burkina Faso</option><option value="27">Burundi</option><option value="28">Cambodia</option><option value="29">Cameroon</option><option value="30" selected>Canada</option><option value="31">Cape Verde</option><option value="32">Cayman Islands</option><option value="33">Central African Republic</option><option value="34">Chad</option><option value="35">Chile</option><option value="36">China</option><option value="185">Christmas Island</option><option value="37">Colombia</option><option value="204">Comoros</option><option value="38">Congo</option><option value="183">Cook Islands</option><option value="268">Costa Rica</option><option value="275">Cote DIvoire</option><option value="40">Croatia</option><option value="276">Cuba</option><option value="298">Curacao</option><option value="41">Cyprus</option><option value="42">Czech Republic</option><option value="318">Democratic Republic of the Congo</option><option value="43">Denmark</option><option value="44">Djibouti</option><option value="289">Dominica</option><option value="187">Dominican Republic</option><option value="45">Ecuador</option><option value="46">Egypt</option><option value="47">El Salvador</option><option value="48">Equatorial Guinea</option><option value="49">Eritrea</option><option value="50">Estonia</option><option value="51">Ethiopia</option><option value="189">Falkland Islands</option><option value="191">Faroe Islands</option><option value="52">Fiji</option><option value="53">Finland</option><option value="54">France</option><option value="193">French Guiana</option><option value="277">French Polynesia</option><option value="56">Gabon</option><option value="57">Gambia</option><option value="58">Georgia</option><option value="59">Germany</option><option value="60">Ghana</option><option value="194">Gibraltar</option><option value="61">Greece</option><option value="195">Greenland</option><option value="192">Grenada</option><option value="196">Guadeloupe</option><option value="62">Guam</option><option value="198">Guatemala</option><option value="270">Guernsey</option><option value="63">Guinea</option><option value="65">Guyana</option><option value="200">Haiti</option><option value="66">Honduras</option><option value="67">Hong Kong</option><option value="68">Hungary</option><option value="69">Iceland</option><option value="70">India</option><option value="71">Indonesia</option><option value="278">Iran</option><option value="279">Iraq</option><option value="74">Ireland</option><option value="323">Isle of Man</option><option value="75">Israel</option><option value="76">Italy</option><option value="202">Jamaica</option><option value="78">Japan</option><option value="288">Jersey (Channel Islands)</option><option value="79">Jordan</option><option value="80">Kazakhstan</option><option value="81">Kenya</option><option value="203">Kiribati</option><option value="82">Kuwait</option><option value="83">Kyrgyzstan</option><option value="84">Lao Peoples Democratic Republic</option><option value="85">Latvia</option><option value="86">Lebanon</option><option value="87">Lesotho</option><option value="88">Liberia</option><option value="281">Libya</option><option value="90">Liechtenstein</option><option value="91">Lithuania</option><option value="92">Luxembourg</option><option value="208">Macau</option><option value="93">Macedonia</option><option value="94">Madagascar</option><option value="95">Malawi</option><option value="96">Malaysia</option><option value="97">Maldives</option><option value="98">Mali</option><option value="99">Malta</option><option value="207">Marshall Islands</option><option value="210">Martinique</option><option value="100">Mauritania</option><option value="212">Mauritius</option><option value="241">Mayotte</option><option value="101">Mexico</option><option value="102">Moldova, Republic of</option><option value="103">Monaco</option><option value="104">Mongolia</option><option value="290">Montenegro</option><option value="294">Montserrat</option><option value="105">Morocco</option><option value="106">Mozambique</option><option value="242">Myanmar</option><option value="107">Namibia</option><option value="108">Nepal</option><option value="109">Netherlands</option><option value="110">Netherlands Antilles</option><option value="213">New Caledonia</option><option value="111">New Zealand</option><option value="112">Nicaragua</option><option value="113">Niger</option><option value="114">Nigeria</option><option value="217">Niue</option><option value="214">Norfolk Island</option><option value="272">North Korea</option><option value="116">Norway</option><option value="117">Oman</option><option value="118">Pakistan</option><option value="222">Palau</option><option value="282">Palestine</option><option value="119">Panama</option><option value="219">Papua New Guinea</option><option value="120">Paraguay</option><option value="121">Peru</option><option value="122">Philippines</option><option value="221">Pitcairn</option><option value="123">Poland</option><option value="124">Portugal</option><option value="126">Qatar</option><option value="315">Republic of Kosovo</option><option value="127">Reunion</option><option value="128">Romania</option><option value="129">Russia</option><option value="130">Rwanda</option><option value="205">Saint Kitts and Nevis</option><option value="206">Saint Lucia</option><option value="324">Saint Martin</option><option value="237">Saint Vincent and the Grenadines</option><option value="132">Samoa (Independent)</option><option value="227">San Marino</option><option value="255">Sao Tome and Principe</option><option value="133">Saudi Arabia</option><option value="134">Senegal</option><option value="326">Serbia</option><option value="135">Seychelles</option><option value="136">Sierra Leone</option><option value="137">Singapore</option><option value="302">Sint Maarten</option><option value="138">Slovakia</option><option value="139">Slovenia</option><option value="223">Solomon Islands</option><option value="140">Somalia</option><option value="141">South Africa</option><option value="257">South Georgia and the South Sandwich Islands</option><option value="142">South Korea</option><option value="311">South Sudan</option><option value="143">Spain</option><option value="144">Sri Lanka</option><option value="293">Sudan</option><option value="146">Suriname</option><option value="225">Svalbard and Jan Mayen Islands</option><option value="147">Swaziland</option><option value="148">Sweden</option><option value="149">Switzerland</option><option value="285">Syria</option><option value="152">Taiwan</option><option value="260">Tajikistan</option><option value="153">Tanzania</option><option value="154">Thailand</option><option value="233">Timor-Leste</option><option value="155">Togo</option><option value="232">Tonga</option><option value="234">Trinidad and Tobago</option><option value="156">Tunisia</option><option value="157">Turkey</option><option value="158">Turkmenistan</option><option value="287">Turks &amp; Caicos Islands</option><option value="159">Uganda</option><option value="161">Ukraine</option><option value="162">United Arab Emirates</option><option value="262">United Kingdom</option><option value="163">Uruguay</option><option value="165">Uzbekistan</option><option value="239">Vanuatu</option><option value="166">Vatican City State (Holy See)</option><option value="167">Venezuela</option><option value="168">Vietnam</option><option value="169">Virgin Islands (British)</option><option value="238">Virgin Islands (U.S.)</option><option value="188">Western Sahara</option><option value="170">Yemen</option><option value="173">Zambia</option><option value="174">Zimbabwe</option></select> </div> </div> <div class="mc-field-group input-group"> <strong>Membership Type </strong> <ul><li><input type="radio" value="1" name="group[21730]" id="mce-group[21730]-21730-0"><label for="mce-group[21730]-21730-0">Resident (Voting)</label></li> <li><input type="radio" value="2" name="group[21730]" id="mce-group[21730]-21730-1"><label for="mce-group[21730]-21730-1">Non-resident (Non-voting)</label></li> </ul> </div> <div id="mce-responses" class="clear"> <div class="response" id="mce-error-response" style="display:none"></div> <div class="response" id="mce-success-response" style="display:none"></div> </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups--> <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_751ac287d547309912de249c7_0d8505bb71" tabindex="-1" value=""></div> <div class="clear"><input type="submit" value="I\'ve Paid My Dues - Make Me a Member!" name="subscribe" id="mc-embedded-subscribe" class="button member_subscribe"></div> </div> </form> </div>';


              });
            },

            onError: function(err) {
              console.log(err);
            }
          }).render('#paypal-button-container');
        }
        initPayPalButton();

      </script>

      <div id="holdMailChimp"></div>
      </article>
    </article>



    <article class="card titlecard" id="donate">
      <img src="<?php echo get_template_directory_uri();?>/imgs/banners/donation-banner.jpg"/>
    <div class="hold-article-text">

      <h1 class="post-title">Donate</h1>

    <p>A great way to support the OEVCA is to donate directly. Your donations go to fund the block party and the other important work of the OEVCA. To Donate to the OEVCA, click the donate button below. You will be prompted to enter the amount of the donation.</p>
    <form action="https://www.paypal.com/donate" method="post" target="_top">
      <input type="hidden" name="cmd" value="_donations" />
      <input type="hidden" name="business" value="jennifer.sadler@gmail.com" />
      <input type="hidden" name="currency_code" value="CAD" />
      <input type="submit" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" class="button donate general_mailing_subscribe" value="Donate!" />
      <img alt="" border="0" src="https://www.paypal.com/en_CA/i/scr/pixel.gif" width="1" height="1" style="width:1px;height:1px"/>
    </form>

  </div>
</article>
    <article class="card titlecard" id="volunteer">
      <img src="<?php echo get_template_directory_uri();?>/imgs/banners/volunteer-banner.jpg"/>

    <div class="hold-article-text">

      <h1 class="post-title">Volunteer With Us</h1>
      <p>We always need people to lend a hand! If you are interested in donating your time to help with events or projects, please sign up here!</p>
      <!-- Begin Mailchimp Signup Form -->
      <div class="volunteer-signup">
  <div id="mc_embed_signup">
  <form action="https://oevca.us13.list-manage.com/subscribe/post?u=751ac287d547309912de249c7&amp;id=4406e004a6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">
  <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
  <div class="mc-field-group">
  	<label for="mce-FNAME">First Name </label>
  	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
  </div>
  <div class="mc-field-group">
  	<label for="mce-LNAME">Last Name </label>
  	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
  </div>
  <div class="mc-field-group">
  	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
  </label>
  	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
  </div>
  <div class="mc-field-group size1of2">
  	<label for="mce-MMERGE3">Phone Number </label>
  	<input type="text" name="MMERGE3" class="" value="" id="mce-MMERGE3">
  </div>
  <div class="mc-field-group input-group">
      <strong>I'm interested in: </strong>
      <ul><li><input type="checkbox" value="1" name="group[21734][1]" id="mce-group[21734]-21734-0"><label for="mce-group[21734]-21734-0">Welcoming new neighbours</label></li>
  <li><input type="checkbox" value="2" name="group[21734][2]" id="mce-group[21734]-21734-1"><label for="mce-group[21734]-21734-1">Contributing to the Community Calendar</label></li>
  <li><input type="checkbox" value="4" name="group[21734][4]" id="mce-group[21734]-21734-2"><label for="mce-group[21734]-21734-2">Green Day compost and plant sale</label></li>
  <li><input type="checkbox" value="8" name="group[21734][8]" id="mce-group[21734]-21734-3"><label for="mce-group[21734]-21734-3">Clean and Green litter pick-ups</label></li>
  <li><input type="checkbox" value="16" name="group[21734][16]" id="mce-group[21734]-21734-4"><label for="mce-group[21734]-21734-4">OEV Block Party</label></li>
  <li><input type="checkbox" value="32" name="group[21734][32]" id="mce-group[21734]-21734-5"><label for="mce-group[21734]-21734-5">Halloween &quot;Ghosting&quot;</label></li>
  <li><input type="checkbox" value="64" name="group[21734][64]" id="mce-group[21734]-21734-6"><label for="mce-group[21734]-21734-6">Winter Soiree</label></li>
  </ul>
  </div>
  	<div id="mce-responses" class="clear">
  		<div class="response" id="mce-error-response" style="display:none"></div>
  		<div class="response" id="mce-success-response" style="display:none"></div>
  	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_751ac287d547309912de249c7_4406e004a6" tabindex="-1" value=""></div>
      <div class="clear"><input type="submit" value="Volunteer with Us" name="subscribe" id="mc-embedded-subscribe" class="button general_mailing_subscribe"></div>
      </div>
  </form>
  </div>
</div>
  <!--End mc_embed_signup-->

  </div>
</article>

</article>

  <article class="card titlecard" id="mailing_list">
    <img src="<?php echo get_template_directory_uri();?>/imgs/banners/mailboxes-banner.jpg"/>

  <div class="hold-article-text">

    <h1 class="post-title">Sign up for our General Mailing List</h1>
    <p>If you want to keep tabs with what is going on in the neighbourhood, sign up for our mailing list. We will send out periodic updates about what is going on with the OEVCA.</p>
    <!-- Begin Mailchimp Signup Form -->
    <div id="general_signup">
  <div id="mc_embed_signup">
  <form action="https://oevca.us13.list-manage.com/subscribe/post?u=751ac287d547309912de249c7&amp;id=b9da1f9286" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">
  <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
  <div class="mc-field-group">
  	<label for="mce-FNAME">First Name </label>
  	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
  </div>
  <div class="mc-field-group">
  	<label for="mce-LNAME">Last Name </label>
  	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
  </div>
  <div class="mc-field-group" style="width:100%">
  	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
  </label>
  	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" >
  </div>
  	<div id="mce-responses" class="clear">
  		<div class="response" id="mce-error-response" style="display:none"></div>
  		<div class="response" id="mce-success-response" style="display:none"></div>
  	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_751ac287d547309912de249c7_b9da1f9286" tabindex="-1" value=""></div>
      <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button general_mailing_subscribe"></div>
      </div>
  </form>
  </div>
</div>

  <!--End mc_embed_signup-->

</div>
</article>
      </div>



    </section>



    </main>

<?php get_footer(); ?>
