<?php
  require './template/header.php';

  $query = "SELECT * FROM category";
  $categories = mysqli_query($dbconnect, $query);

  ?>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
        <div class="position-sticky pt-5 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="index.php">
                <span data-feather="home" class="align-text-bottom"></span>
                Competition Mode
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="add-user.php">
                <span data-feather="file" class="align-text-bottom"></span>
                Mange Participant
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage-admin.php">
                <span data-feather="users" class="align-text-bottom"></span>
                Manage Admin
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage-categories.php">
                <span data-feather="layers" class="align-text-bottom"></span>
                Manage Categories
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage-questions.php">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Questions
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="edit-profile.php">
                <div class="avatar">
                  <img src=" <?= ROOT_URL . 'img/admin-img/'.$cur_user['avatar']  ?>" alt="avatar">
                </div>
              </a>
            </li>

          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>Add Participant</h2> <a href="manage-users.php" class="btn btn-success px-5">Back</a>
                </div>
      <!-- <section class="form-section text-center"> -->
        <main class="form-signin w-100 m-auto my-2">
            <!-- <h3 class="h3 my-4 fw-bold text-center">Add Participant</h3> -->
            <form class="user-form" enctype="multipart/form-data">
                
                <div class="form-floating">
                    <div class="error-txt"></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="firstname" id="floatingFistName"
                                placeholder="Enter your First Name">
                            <label for="floatingFistName">First Name:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="lastname" id="floatingLastName"
                                placeholder="Enter your Last Name">
                            <label for="floatingLastName">Last Name:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="Text" class="form-control" name="school" id="school" placeholder="School">
                            <label for="text">School:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="student-class" id="student-class" placeholder="Class">
                            <label for="studetn-class">Class:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="age" id="age" placeholder="Age">
                            <label for="age">Age:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <select class="form-control p-3 mb-3 rounded" name="gender" id="gender">
                            <option disabled >GENDER</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                    </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control p-3 mb-3 rounded" name="country" id="countries">
                            <option disabled>Country</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Aland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua & Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
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
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bonaire, Sint Eustatius and Saba">Caribbean Netherlands</option>
                            <option value="Bosnia and Herzegovina">Bosnia & Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian</option>
                            <!-- <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> -->
                            <option value="Brunei Darussalam">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo - Brazzaville</option>
                            <option value="Congo, Democratic Republic of the Congo">Congo - Kinshasa</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'Ivoire">Côte d’Ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curacao">Curaçao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czechia</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands</option>
                            <!-- <option value="Falkland Islands (Malvinas)">Falkland Islands (Islas Malvinas)</option> -->
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern</option>
                            <!-- <option value="French Southern Territories">French Southern Territories</option> -->
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard & McDonald Islands</option>
                            <option value="Holy See (Vatican City State)">Vatican City</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">North Korea</option>
                            <option value="Korea, Republic of">South Korea</option>
                            <option value="Kosovo">Kosovo</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, the Former Yugoslav Republic of">North Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia</option>
                            <option value="Moldova, Republic of">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar (Burma)</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Curaçao</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">North Mariana Island</option>
                            <!-- <option value="Northern Mariana Islands">Northern Mariana Islands</option> -->
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn Islands</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Réunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Barthelemy">St. Barthélemy</option>
                            <option value="Saint Helena">St. Helena</option>
                            <option value="Saint Kitts and Nevis">St. Kitts & Nevis</option>
                            <option value="Saint Lucia">St. Lucia</option>
                            <option value="Saint Martin">St. Martin</option>
                            <option value="Saint Pierre and Miquelon">St. Pierre & Miquelon</option>
                            <option value="Saint Vincent and the Grenadines">St. Vincent & Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">São Tomé & Príncipe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Serbia and Montenegro">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Sint Maarten">Sint Maarten</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <!-- <option value="South Georgia and the South Sandwich Islands">South Georgia & South Sandwich Islands</option> -->
                            <option value="South Georgia">South Georgia</option>
                            <option value="South Sandwich Islands">South Sandwich Islands</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard & Jan Mayen</option>
                            <option value="Swaziland">Eswatini</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syria</option>
                            <option value="Taiwan, Province of China">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-Leste">Timor-Leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad & Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks & Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">U.S. Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Vietnam</option>
                            <option value="Virgin Islands, British">British Virgin Islands</option>
                            <option value="Virgin Islands, U.s.">U.S. Virgin Islands</option>
                            <option value="Wallis and Futuna">Wallis & Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control p-3 mb-3 rounded" name="riwayat" id="categroySelect">
                            <option disabled>Select Riwayat</option>
                            <option value="Hafs A'n Assem">Hafs A'n Assem</option>
                            <option value="Warsh A'n Nafi">Warsh A'n Nafi'</option>
                            <option value="Qalon A'n Nafi">Qalon A'n Nafi'</option>
                            <option value="Sh'bt A'n Assem">Sh'bt A'n Assem</option>
                            <option value="Ad-Dwry An Al-Ksa'iy">Ad-Dwry An Al-Ksa'iy</option>
                            <option value="Assosi A'n Abi Amr">Assosi A'n Abi Amr</option>
                            <option value="Ad-Dwry An Aby Amrw">Ad-Dwry An Aby Amrw</option>
                            <option value="Khelaf A'n Hemzah">Khelaf A'n Hemzah</option>
                            <option value="Abn Dhkwan An Abn Aamr">Abn Dhkwan An Abn Aamr</option>
                            <option value="Aby Harytha A'n Al-Ksa'iy">Aby Harytha A'n Al-Ksa'iy</option>
                            <option value="Albizi and Qunbol A'n Ibn Katheer">Albizi and Qunbol A'n Ibn Katheer</option>
                            <option value="Khelaad A'n Hemzah">Khelaad A'n Hemzah</option>
                            <option value="Qunbel A'n Ibn Katheer">Qunbel A'n Ibn Katheer</option>
                            <option value="Albizy A'n Ebn Katheer">Albizy A'n Ebn Katheer</option>
                            <option value="Rawis A'n Yakoob Al Hadrami">Rawis A'n Yakoob Al Hadrami</option>
                            <option value="Ishaaq Al-Weraaq A'n Khalef Al-Bezar">Ishaaq Al-Weraaq A'n Khalef Al-Bezar
                            </option>
                            <option value="Hicham A'n ibn Aamr">Hicham A'n ibn Aamr</option>
                            <option value="Ibn Jemaaz A'n Aby Ja'far">Ibn Jemaaz A'n Aby Ja'far</option>
                            <option value="Ibn Werdan A'n Aby Ja'far">Ibn Werdan A'n Aby Ja'far</option>
                            <option value="Rawh A'n Yakoob El Hadrami">Rawh A'n Yakoob El Hadrami</option>
                            <option value="Idriss Al-Hadaad A'n Khelaf Al-Bezaar">Idriss Al-Hadaad A'n Khelaf Al-Bezaar
                            </option>
                            <option value="Warsh A'n Nafi' Min Tryq Aby Bkr Al-Asbhany">Warsh A'n Nafi' Min Tryq Aby Bkr
                                Al-Asbhany</option>
                            <option value="Rowis and Rawh A'n Yakoob Al Hadrami">Rowis and Rawh A'n Yakoob Al Hadrami
                            </option>
                            <option value="Qalon A'n Nafi' Men Tariq Abi Nasheet">Qalon A'n Nafi' Men Tariq Abi Nasheet
                            </option>
                            <option value="Sh'bt Wa Hafs A'n Assem">Sh'bt Wa Hafs A'n Assem</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="username" id="floatingUserName" placeholder="User Name">
                            <label for="floatingUserName">User Name:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="file" class="form-control" name="avatar" id="avatar" placeholder="Avatar">
                            <label for="avatar">Avatar:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="" placeholder="Password">
                            <label for="floatingPassword">Password:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="password" class="form-control" name="confirmpassword" id="confirmPassword"
                                placeholder="Confirm Password">
                            <label for="confirmPassword">Confirm Password:</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 my-2">
                    <div class="form-floating">
                      <select class="form-control p-3 my-2 rounded" name="category" id="category">
                        <?php if (mysqli_num_rows($categories) > 0) : ?>
                          <option selected disabled >Category</option>
                            <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                              <option value="<?= $category['id'] ?>"><?= $category['category_title'] ?></option>
                              <?php endwhile ?>
                              <?php else :  ?>
                                  <option value="">No category found</option>
                            <?php endif  ?>
                          
                      </select>   
                    </div>
                </div>
                
                <div class="form-group mb-3">
                    <textarea class="form-control" name="biography" id="biography"
                        rows="3" placeholder="Enter biography here"> </textarea>
                </div>
                <button class="w-100 btn btn-lg btn-primary create-btn" type="submit">Create Account</button>
                
            </form>
        </main>
        

        <div class="container">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <img class="img-logo" src="../img/logo.png" alt="Sevenskies">
              </a>
              <span class="mb-3 mb-md-0 text-muted">&copy; 2023 International, School</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#twitter" />
                  </svg></a></li>
              <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#instagram" />
                  </svg></a></li>
              <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#facebook" />
                  </svg></a></li>
            </ul>
          </footer>
        </div>
      </main>

    </div>
  </div>

  <script src="../js/add-user.js"></script>
  <script src="../assets/ckeditor/ckeditor.js"></script>
    <script>
        // CKEDITOR.replace('biography');
    </script>

<?php
    require './template/footer.php';

  ?>