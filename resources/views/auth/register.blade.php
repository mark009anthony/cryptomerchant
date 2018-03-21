@extends('layouts.app')
@section('title', 'Register | Crypto Merchant')

@section('style')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/material-bootstrap-wizard.css') }}" rel="stylesheet">
<link href="{{ asset('css/demo.css') }}" rel="stylesheet">

@endsection

@section('login')

<li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
@endsection

@section('content')

<div style="background-color: #0e0d61">
       <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="blue" id="wizardProfile">
                            <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                       Get Started
                                    </h3>
                                    <h5>Please fill up and complete all the information below.</h5>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#about" data-toggle="tab">Get Started</a></li>
                                        <li><a href="#account" data-toggle="tab">Business Info</a></li>
                                        <li><a href="#address" data-toggle="tab">Holder's Info</a></li>
                                    </ul>
                                </div>

                                <div class="tab-content">

                                <div class="tab-pane" id="about">
                                      <div class="row">
                                             <div class="col-sm-12">
                                                <div class="input-group">
                                                   
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Email <small>(required)</small></label>
                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                     @if ($errors->has('email'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                    </div>
                                                </div>
                                                </div>

                                                 <div class="col-sm-6">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Password <small>(required)</small></label>
                                                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    </div>
                                                </div>
                                            

                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Re-type Password <small>(required)</small></label>
                                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Last Name <small>(required)</small></label>
                                                      <input type="text" class="form-control" name="lastname" id="lastname" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            

                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">First Name <small>(required)</small></label>
                                                      <input  type="text" class="form-control" name="firstname" id="firstname" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Business Name <small>(required)</small></label>
                                                      <input  type="text" class="form-control" name="businessname" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Business Phone <small>(required)</small></label>
                                                      <input  type="text" class="form-control" name="businessphone" required>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Business Address 1 <small>(required)</small></label>
                                                      <input  type="text" class="form-control" name="businessadd1" required>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Business Address 2 <small>(optional)</small></label>
                                                      <input  type="text" class="form-control" name="businessadd2">
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">City/Municipality <small>(required)</small></label>
                                                      <input  type="text" class="form-control" name="city" required>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Region/State/Province <small>(optional)</small></label>
                                                      <input  type="text" class="form-control" name="region">
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Zip Code <small>(required)</small></label>
                                                      <input  type="text" class="form-control" name="zipcode" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
        
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account">
                                        <h4 class="info-text"> Tell us about your business. </h4>
                                        <div class="row">
                                           
                                            <div class="col-sm-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">What is the business type? <small>(required)</small></label>
                                                    <select name="business_type" class="form-control" required autofocus>
                                                    <option disabled="" selected=""></option>
                                                    <option value="individual">Individual</option>
                                                    <option value="sole_proprietorship">Sole proprietorship</option>
                                                    <option value="partnership">Partnership</option>
                                                    <option value="private_company">Private Company</option>
                                                    <option value="public_company">Public Company</option>
                                                    <option value="non_profit">Non-profit organization</option>
                                                    <option value="government_entity">Government entity</option>


                                                    </select>
                                                </div>
                                            </div>

                                               <div class="col-sm-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">What is the business category? <small>(required)</small></label>
                                                    <select name="business_category" id="business_category" class="form-control" required autofocus>
                                                        <option disabled="" selected=""></option>
                                                        <option value="Automotive"> Automotive  </option>
                                                        <option value="Business Support and Supplies"> Business Support & Supplies  </option>
                                                        <option value="Computers and Electronics"> Computers & Electronics </option>
                                                        <option value="Construction and Contractors"> Construction & Contractors  </option>
                                                        <option value="Education"> Education  </option>
                                                        <option value="Entertainment"> Entertainment  </option>
                                                        <option value="Food and Dining"> Food & Dining  </option>
                                                        <option value="Health and Medicine"> Health & Medicine </option>
                                                        <option value="Home and Garden"> Home & Garden  </option>
                                                        <option value="Legal and Financial">Legal & Financial </option>
                                                        <option value="Manufacturing Wholesale and Distribution">Manufacturing, Wholesale, Distribution </option>
                                                        <option value="Merchants Retail">Merchants (Retail) </option>
                                                        <option value="Miscellaneous">Miscellaneous </option>
                                                        <option value="Personal Care and Services">Personal Care & Services </option>
                                                        <option value="Real Estate">Real Estate </option>
                                                        <option value="Travel and Transportation">Travel & Transportation</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">What is the sub-category? <small>(required)</small></label>
                                                    <select name="business_sub" id="subcategory" class="form-control" required autofocus>

                                                    <optgroup class="Automotive">
                                                    <option disabled="" selected=""></option>
                                                    <option value="Auto Accessories ">Auto Accessories </option>
                                                    <option value="Auto Dealers – New">Auto Dealers – New</option>
                                                    <option value="Auto Dealers – Used ">Auto Dealers – Used </option>
                                                    <option value="Detail & Carwash ">Detail & Carwash </option>
                                                    <option value="Gas Stations">Gas Stations</option>
                                                    <option value="Motorcycle Sales & Repair ">Motorcycle Sales & Repair </option>
                                                    <option value="Rental & Leasing ">Rental & Leasing </option>
                                                    <option value="Towing">Service, Repair & Parts</option>

                                                  </optgroup>
                                                  <optgroup class="BusinessSupportandSupplies">
                                                    <option value="Consultants ">Consultants </option>
                                                    <option value="Employment Agency">Employment Agency</option>
                                                    <option value="Marketing & Communications ">Marketing & Communications </option>
                                                    <option value="Office Supplies">Office Supplies</option>
                                                    <option value="Printing & Publishing">Printing & Publishing</option>
                                                  </optgroup>


                                                  <optgroup class="ComputersandElectronics">
                                                    <option value="Computer Programming & Support ">Computer Programming & Support </option>
                                                    <option value="Consumer Electronics & Accessories">Consumer Electronics & Accessories</option>
                                                  </optgroup>

                                                   <optgroup class="ConstructionandContractors">
                                                    <option value="Architects, Landscape Architects, Engineers & Surveyors">Architects, Landscape Architects, Engineers & Surveyors</option>
                                                    <option value="Blasting & Demolition">Blasting & Demolition</option>
                                                    <option value="Building Materials & Supplies">Building Materials & Supplies</option>
                                                    <option value="Construction Companies">Construction Companies</option>
                                                    <option value="Electricians">Electricians</option>
                                                    <option value="Engineer, Survey">Engineer, Survey</option>
                                                    <option value="Environmental Assessments">Environmental Assessments</option>
                                                    <option value="Inspectors">Inspectors</option>
                                                    <option value="Plaster & Concrete">Plaster & Concrete</option>
                                                    <option value="Plumbers">Plumbers</option>
                                                    <option value="Roofers">Roofers</option>
                                                    </optgroup>

                                                    <optgroup class="Education">
                                                        <option value="Adult & Conti">Adult & Continuing Education</option>
                                                        <option value="Early Childhood Education">Early Childhood Education</option>
                                                        <option value="Educational Resources">Educational Resources</option>
                                                        <option value="Other Educational">Other Educational </option>
                                                    </optgroup>

                                                    <optgroup class="Entertainment">
                                                        <option value="Artists, Writers">Artists, Writers</option>
                                                        <option value="Event Planners & Supplies">Event Planners & Supplies</option>
                                                        <option value="Golf Courses">Golf Courses</option>
                                                        <option value="Movies">Movies</option>
                                                        <option value="Productions">Productions</option> 
                                                    </optgroup>

                                                    <optgroup class="FoodandDining">
                                                        <option value="Desserts, Catering & Supplies">Desserts, Catering & Supplies</option>
                                                        <option value="Fast Food & Carry Out">Fast Food & Carry Out</option>
                                                        <option value="Grocery, Beverage & Tobacco">Grocery, Beverage & Tobacco</option>
                                                        <option value="Restaurants">Restaurants</option>
                                                    </optgroup>
                                                   
                                                    <optgroup class="HealthandMedicine">
                                                        
                                                        <option value="Acupuncture">Acupuncture</option>
                                                        <option value="Assisted Living & Home Health Care">Assisted Living & Home Health Care</option>
                                                        <option value="Audiologist">Audiologist</option>
                                                        <option value="Chiropractic">Chiropractic</option>
                                                        <option value="Clinics & Medical Centers">Clinics & Medical Centers</option>
                                                        <option value="Dental">Dental</option>
                                                        <option value="Diet I& Nutrition">Diet I& Nutrition</option> 
                                                        <option value="Laboratory, Imaging & Diagnostic">Laboratory, Imaging & Diagnostic</option>
                                                        <option value="Massage Therapy">Massage Therapy</option>
                                                        <option value="Mental Health">Mental Health</option>
                                                        <option value="Nurse">Nurse</option>
                                                        <option value="Optical">Optical</option>
                                                        <option value="Pharmacy, Drug & Vitamin Stores">Pharmacy, Drug & Vitamin Stores</option>
                                                       <option value="Physical Therapy">Physical Therapy</option>
                                                       <option value="Physicians & Assistants">Physicians & Assistants</option>
                                                       <option value="Podiatry">Podiatry</option>
                                                       <option value="Social Worker">Social Worker</option>
                                                       <option value="Animal Hospital">Animal Hospital</option>
                                                       <option value="Veterinary & Animal Surgeons">Veterinary & Animal Surgeons</option>
                                                    </optgroup>

                                                    <optgroup class="HealthandMedicine">
                                                        
                                                        <option value="Antiques & Collectibles">Antiques & Collectibles</option>
                                                        <option value="Cleaning">Cleaning</option>
                                                        <option value="Crafts, Hobbies & Sports">Crafts, Hobbies & Sports</option>
                                                        <option value="Flower Shops">Flower Shops</option>
                                                        <option value="Home Furnishings">Home Furnishings</option>
                                                        <option value="Home Goods">Home Goods</option>
                                                        <option value="Home Improvements & Repairs">Home Improvements & Repairs</option>
                                                        <option value="Landscape & Lawn Service">Landscape & Lawn Service</option>
                                                        <option value="Pest Control">Pest Control</option>
                                                        <option value="Pool Supplies & Service">Pool Supplies & Service</option>
                                                        <option value="Security System & Services">Security System & Services</option>
                                                    </optgroup>

                                                    <optgroup class="LegalandFinancial">
                                                        <option value="Accountants">Accountants</option>
                                                        <option value="Attorneys">Attorneys</option>
                                                        <option value="Financial Institutions">Financial Institutions</option>
                                                        <option value="Financial Services">Financial Services</option>
                                                        <option value="Insurance">Insurance</option>
                                                        <option value="Other Legal">Other Legal</option>
                                                    </optgroup>

                                                    <optgroup class="ManufacturingWholesaleandDistribution">
                                                        
                                                        <option value="Distribution, Import/Export">Distribution, Import/Export</option>
                                                        <option value="Manufacturing">Manufacturing</option>
                                                        <option value="Wholesale">Wholesale</option>

                                                    </optgroup>

                                                    <optgroup class="MerchantsRetail">
                                                        <option value="Cards & Gifts">Cards & Gifts</option>
                                                        <option value="Clothing & Accessories">Clothing & Accessories</option>
                                                        <option value="Department Stores, Sporting Goods">Department Stores, Sporting Goods</option>
                                                        <option value="General">General</option>
                                                        <option value="Jewelry">Jewelry</option>
                                                        <option value="Shoes">Shoes </option>

                                                    </optgroup>

                                                    <optgroup class="Miscellaneous ">
                                                        <option value="Civic Groups">Civic Groups</option>
                                                        <option value="Funeral Service Providers & Cemetaries">Funeral Service Providers & Cemetaries</option>
                                                        <option value="Miscellaneous">Miscellaneous</option>
                                                        <option value="Utility Companies ">Utility Companies </option>
                                                    </optgroup>

                                                    <optgroup class="PersonalCareandServices">
                                                        <option value="Animal Care & Supplies">Animal Care & Supplies</option>
                                                        <option value="Barber & Beauty Salons">Barber & Beauty Salons</option>
                                                        <option value="Beauty Supplies">Beauty Supplies</option>
                                                        <option value="Dry Cleaners & Laundromats">Dry Cleaners & Laundromats</option>
                                                        <option value="Exercise & Fitness">Exercise & Fitness</option>
                                                        <option value="Massage & Body Works">Massage & Body Works</option>
                                                        <option value="Nail Salons">Nail Salons</option>
                                                        <option value="Shoe Repairs">Shoe Repairs</option>
                                                        <option value="Tailors">Tailors</option>
                                                    </optgroup>

                                                    <optgroup class="RealEstate ">
                                                        <option value="Agencies & Brokerage">Agencies & Brokerage</option> 
                                                        <option value="Agents & Brokers">Agents & Brokers</option>
                                                        <option value="Apartment & Home Rental">Apartment & Home Rental</option>
                                                        <option value="Mortgage Broker & Lender">Mortgage Broker & Lender</option>
                                                        <option value="Property Management">Property Management</option>
                                                        <option value="Title Company">Title Company</option>
                                                    </optgroup>

                                                    <optgroup class="TravelandTransportation ">
                                                        
                                                        <option value="Hotel, Motel & Extended Stay">Hotel, Motel & Extended Stay</option>
                                                            <option value="Moving & Storage">Moving & Storage</option>
                                                            <option value="Packaging & Shipping">Packaging & Shipping</option>
                                                            <option value="Transportation">Transportation</option>
                                                            <option value="Travel & Tourism">Travel & Tourism</option> 
                                                    </optgroup>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Business Website URL <small>(if applicable)</small></label>
                                                      <input  type="text" class="form-control" name="business_url">
                                                    </div>
                                                </div>
                                            </div>
                                            <br/><br/><br/><br/><br/><br/><br/>



                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                In which counry  did you form or incorporate  your business?


                                                </div></div>


                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Country <small>(optional)</small></label>
                                                      <select name="country" class="form-control">
                                                        <option value="United States">United States</option> 
                                                        <option value="United Kingdom">United Kingdom</option> 
                                                        <option value="Afghanistan">Afghanistan</option> 
                                                        <option value="Albania">Albania</option> 
                                                        <option value="Algeria">Algeria</option> 
                                                        <option value="American Samoa">American Samoa</option> 
                                                        <option value="Andorra">Andorra</option> 
                                                        <option value="Angola">Angola</option> 
                                                        <option value="Anguilla">Anguilla</option> 
                                                        <option value="Antarctica">Antarctica</option> 
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
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
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                                        <option value="Botswana">Botswana</option> 
                                                        <option value="Bouvet Island">Bouvet Island</option> 
                                                        <option value="Brazil">Brazil</option> 
                                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option> 
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
                                                        <option value="Congo">Congo</option> 
                                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                                        <option value="Cook Islands">Cook Islands</option> 
                                                        <option value="Costa Rica">Costa Rica</option> 
                                                        <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                                        <option value="Croatia">Croatia</option> 
                                                        <option value="Cuba">Cuba</option> 
                                                        <option value="Cyprus">Cyprus</option> 
                                                        <option value="Czech Republic">Czech Republic</option> 
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
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                                        <option value="Faroe Islands">Faroe Islands</option> 
                                                        <option value="Fiji">Fiji</option> 
                                                        <option value="Finland">Finland</option> 
                                                        <option value="France">France</option> 
                                                        <option value="French Guiana">French Guiana</option> 
                                                        <option value="French Polynesia">French Polynesia</option> 
                                                        <option value="French Southern Territories">French Southern Territories</option> 
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
                                                        <option value="Guinea">Guinea</option> 
                                                        <option value="Guinea-bissau">Guinea-bissau</option> 
                                                        <option value="Guyana">Guyana</option> 
                                                        <option value="Haiti">Haiti</option> 
                                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                                        <option value="Honduras">Honduras</option> 
                                                        <option value="Hong Kong">Hong Kong</option> 
                                                        <option value="Hungary">Hungary</option> 
                                                        <option value="Iceland">Iceland</option> 
                                                        <option value="India">India</option> 
                                                        <option value="Indonesia">Indonesia</option> 
                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                                        <option value="Iraq">Iraq</option> 
                                                        <option value="Ireland">Ireland</option> 
                                                        <option value="Israel">Israel</option> 
                                                        <option value="Italy">Italy</option> 
                                                        <option value="Jamaica">Jamaica</option> 
                                                        <option value="Japan">Japan</option> 
                                                        <option value="Jordan">Jordan</option> 
                                                        <option value="Kazakhstan">Kazakhstan</option> 
                                                        <option value="Kenya">Kenya</option> 
                                                        <option value="Kiribati">Kiribati</option> 
                                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                                        <option value="Korea, Republic of">Korea, Republic of</option> 
                                                        <option value="Kuwait">Kuwait</option> 
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                                        <option value="Latvia">Latvia</option> 
                                                        <option value="Lebanon">Lebanon</option> 
                                                        <option value="Lesotho">Lesotho</option> 
                                                        <option value="Liberia">Liberia</option> 
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                                        <option value="Liechtenstein">Liechtenstein</option> 
                                                        <option value="Lithuania">Lithuania</option> 
                                                        <option value="Luxembourg">Luxembourg</option> 
                                                        <option value="Macao">Macao</option> 
                                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
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
                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                                        <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                                        <option value="Monaco">Monaco</option> 
                                                        <option value="Mongolia">Mongolia</option> 
                                                        <option value="Montserrat">Montserrat</option> 
                                                        <option value="Morocco">Morocco</option> 
                                                        <option value="Mozambique">Mozambique</option> 
                                                        <option value="Myanmar">Myanmar</option> 
                                                        <option value="Namibia">Namibia</option> 
                                                        <option value="Nauru">Nauru</option> 
                                                        <option value="Nepal">Nepal</option> 
                                                        <option value="Netherlands">Netherlands</option> 
                                                        <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                                        <option value="New Caledonia">New Caledonia</option> 
                                                        <option value="New Zealand">New Zealand</option> 
                                                        <option value="Nicaragua">Nicaragua</option> 
                                                        <option value="Niger">Niger</option> 
                                                        <option value="Nigeria">Nigeria</option> 
                                                        <option value="Niue">Niue</option> 
                                                        <option value="Norfolk Island">Norfolk Island</option> 
                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                                        <option value="Norway">Norway</option> 
                                                        <option value="Oman">Oman</option> 
                                                        <option value="Pakistan">Pakistan</option> 
                                                        <option value="Palau">Palau</option> 
                                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                                        <option value="Panama">Panama</option> 
                                                        <option value="Papua New Guinea">Papua New Guinea</option> 
                                                        <option value="Paraguay">Paraguay</option> 
                                                        <option value="Peru">Peru</option> 
                                                        <option value="Philippines">Philippines</option> 
                                                        <option value="Pitcairn">Pitcairn</option> 
                                                        <option value="Poland">Poland</option> 
                                                        <option value="Portugal">Portugal</option> 
                                                        <option value="Puerto Rico">Puerto Rico</option> 
                                                        <option value="Qatar">Qatar</option> 
                                                        <option value="Reunion">Reunion</option> 
                                                        <option value="Romania">Romania</option> 
                                                        <option value="Russian Federation">Russian Federation</option> 
                                                        <option value="Rwanda">Rwanda</option> 
                                                        <option value="Saint Helena">Saint Helena</option> 
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                                        <option value="Saint Lucia">Saint Lucia</option> 
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                                        <option value="Samoa">Samoa</option> 
                                                        <option value="San Marino">San Marino</option> 
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                                        <option value="Saudi Arabia">Saudi Arabia</option> 
                                                        <option value="Senegal">Senegal</option> 
                                                        <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                                                        <option value="Seychelles">Seychelles</option> 
                                                        <option value="Sierra Leone">Sierra Leone</option> 
                                                        <option value="Singapore">Singapore</option> 
                                                        <option value="Slovakia">Slovakia</option> 
                                                        <option value="Slovenia">Slovenia</option> 
                                                        <option value="Solomon Islands">Solomon Islands</option> 
                                                        <option value="Somalia">Somalia</option> 
                                                        <option value="South Africa">South Africa</option> 
                                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                                        <option value="Spain">Spain</option> 
                                                        <option value="Sri Lanka">Sri Lanka</option> 
                                                        <option value="Sudan">Sudan</option> 
                                                        <option value="Suriname">Suriname</option> 
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                                        <option value="Swaziland">Swaziland</option> 
                                                        <option value="Sweden">Sweden</option> 
                                                        <option value="Switzerland">Switzerland</option> 
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                                                        <option value="Tajikistan">Tajikistan</option> 
                                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                                        <option value="Thailand">Thailand</option> 
                                                        <option value="Timor-leste">Timor-leste</option> 
                                                        <option value="Togo">Togo</option> 
                                                        <option value="Tokelau">Tokelau</option> 
                                                        <option value="Tonga">Tonga</option> 
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                                        <option value="Tunisia">Tunisia</option> 
                                                        <option value="Turkey">Turkey</option> 
                                                        <option value="Turkmenistan">Turkmenistan</option> 
                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                                        <option value="Tuvalu">Tuvalu</option> 
                                                        <option value="Uganda">Uganda</option> 
                                                        <option value="Ukraine">Ukraine</option> 
                                                        <option value="United Arab Emirates">United Arab Emirates</option> 
                                                        <option value="United Kingdom">United Kingdom</option> 
                                                        <option value="United States">United States</option> 
                                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                                        <option value="Uruguay">Uruguay</option> 
                                                        <option value="Uzbekistan">Uzbekistan</option> 
                                                        <option value="Vanuatu">Vanuatu</option> 
                                                        <option value="Venezuela">Venezuela</option> 
                                                        <option value="Viet Nam">Viet Nam</option> 
                                                        <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                                        <option value="Western Sahara">Western Sahara</option> 
                                                        <option value="Yemen">Yemen</option> 
                                                        <option value="Zambia">Zambia</option> 
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                      </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Business Registration number <small>(optional)</small></label>
                                                      <input  type="text" class="form-control" name="regis_number">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Date of business registration <small>(optional)</small></label>
                                                      <input  type="text" class="form-control" name="regis_date">
                                                    </div>
                                                </div>
                                            </div>



                                          
                                        </div>
                                    </div>

                                    
                                    <div class="tab-pane" id="address">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Please provide informataion about <p id="name"></p> </h4>
                                            </div>

                                            <br/><br/><br/>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                Please, complete the personal information below. We will only use
                                                this information according to our Privacy Policy.

                                                </div></div>
                                            
                                           <br/><br/>
                                            
                                            <div class="col-sm-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nationality <small>(required)</small></label>
                                                    <select name="nationality" class="form-control" required autofocus>
                                                        <option value="United States">United States</option> 
                                                        <option value="United Kingdom">United Kingdom</option> 
                                                        <option value="Afghanistan">Afghanistan</option> 
                                                        <option value="Albania">Albania</option> 
                                                        <option value="Algeria">Algeria</option> 
                                                        <option value="American Samoa">American Samoa</option> 
                                                        <option value="Andorra">Andorra</option> 
                                                        <option value="Angola">Angola</option> 
                                                        <option value="Anguilla">Anguilla</option> 
                                                        <option value="Antarctica">Antarctica</option> 
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
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
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                                        <option value="Botswana">Botswana</option> 
                                                        <option value="Bouvet Island">Bouvet Island</option> 
                                                        <option value="Brazil">Brazil</option> 
                                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option> 
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
                                                        <option value="Congo">Congo</option> 
                                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                                        <option value="Cook Islands">Cook Islands</option> 
                                                        <option value="Costa Rica">Costa Rica</option> 
                                                        <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                                        <option value="Croatia">Croatia</option> 
                                                        <option value="Cuba">Cuba</option> 
                                                        <option value="Cyprus">Cyprus</option> 
                                                        <option value="Czech Republic">Czech Republic</option> 
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
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                                        <option value="Faroe Islands">Faroe Islands</option> 
                                                        <option value="Fiji">Fiji</option> 
                                                        <option value="Finland">Finland</option> 
                                                        <option value="France">France</option> 
                                                        <option value="French Guiana">French Guiana</option> 
                                                        <option value="French Polynesia">French Polynesia</option> 
                                                        <option value="French Southern Territories">French Southern Territories</option> 
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
                                                        <option value="Guinea">Guinea</option> 
                                                        <option value="Guinea-bissau">Guinea-bissau</option> 
                                                        <option value="Guyana">Guyana</option> 
                                                        <option value="Haiti">Haiti</option> 
                                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                                        <option value="Honduras">Honduras</option> 
                                                        <option value="Hong Kong">Hong Kong</option> 
                                                        <option value="Hungary">Hungary</option> 
                                                        <option value="Iceland">Iceland</option> 
                                                        <option value="India">India</option> 
                                                        <option value="Indonesia">Indonesia</option> 
                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                                        <option value="Iraq">Iraq</option> 
                                                        <option value="Ireland">Ireland</option> 
                                                        <option value="Israel">Israel</option> 
                                                        <option value="Italy">Italy</option> 
                                                        <option value="Jamaica">Jamaica</option> 
                                                        <option value="Japan">Japan</option> 
                                                        <option value="Jordan">Jordan</option> 
                                                        <option value="Kazakhstan">Kazakhstan</option> 
                                                        <option value="Kenya">Kenya</option> 
                                                        <option value="Kiribati">Kiribati</option> 
                                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                                        <option value="Korea, Republic of">Korea, Republic of</option> 
                                                        <option value="Kuwait">Kuwait</option> 
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                                        <option value="Latvia">Latvia</option> 
                                                        <option value="Lebanon">Lebanon</option> 
                                                        <option value="Lesotho">Lesotho</option> 
                                                        <option value="Liberia">Liberia</option> 
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                                        <option value="Liechtenstein">Liechtenstein</option> 
                                                        <option value="Lithuania">Lithuania</option> 
                                                        <option value="Luxembourg">Luxembourg</option> 
                                                        <option value="Macao">Macao</option> 
                                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
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
                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                                        <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                                        <option value="Monaco">Monaco</option> 
                                                        <option value="Mongolia">Mongolia</option> 
                                                        <option value="Montserrat">Montserrat</option> 
                                                        <option value="Morocco">Morocco</option> 
                                                        <option value="Mozambique">Mozambique</option> 
                                                        <option value="Myanmar">Myanmar</option> 
                                                        <option value="Namibia">Namibia</option> 
                                                        <option value="Nauru">Nauru</option> 
                                                        <option value="Nepal">Nepal</option> 
                                                        <option value="Netherlands">Netherlands</option> 
                                                        <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                                        <option value="New Caledonia">New Caledonia</option> 
                                                        <option value="New Zealand">New Zealand</option> 
                                                        <option value="Nicaragua">Nicaragua</option> 
                                                        <option value="Niger">Niger</option> 
                                                        <option value="Nigeria">Nigeria</option> 
                                                        <option value="Niue">Niue</option> 
                                                        <option value="Norfolk Island">Norfolk Island</option> 
                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                                        <option value="Norway">Norway</option> 
                                                        <option value="Oman">Oman</option> 
                                                        <option value="Pakistan">Pakistan</option> 
                                                        <option value="Palau">Palau</option> 
                                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                                        <option value="Panama">Panama</option> 
                                                        <option value="Papua New Guinea">Papua New Guinea</option> 
                                                        <option value="Paraguay">Paraguay</option> 
                                                        <option value="Peru">Peru</option> 
                                                        <option value="Philippines">Philippines</option> 
                                                        <option value="Pitcairn">Pitcairn</option> 
                                                        <option value="Poland">Poland</option> 
                                                        <option value="Portugal">Portugal</option> 
                                                        <option value="Puerto Rico">Puerto Rico</option> 
                                                        <option value="Qatar">Qatar</option> 
                                                        <option value="Reunion">Reunion</option> 
                                                        <option value="Romania">Romania</option> 
                                                        <option value="Russian Federation">Russian Federation</option> 
                                                        <option value="Rwanda">Rwanda</option> 
                                                        <option value="Saint Helena">Saint Helena</option> 
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                                        <option value="Saint Lucia">Saint Lucia</option> 
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                                        <option value="Samoa">Samoa</option> 
                                                        <option value="San Marino">San Marino</option> 
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                                        <option value="Saudi Arabia">Saudi Arabia</option> 
                                                        <option value="Senegal">Senegal</option> 
                                                        <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                                                        <option value="Seychelles">Seychelles</option> 
                                                        <option value="Sierra Leone">Sierra Leone</option> 
                                                        <option value="Singapore">Singapore</option> 
                                                        <option value="Slovakia">Slovakia</option> 
                                                        <option value="Slovenia">Slovenia</option> 
                                                        <option value="Solomon Islands">Solomon Islands</option> 
                                                        <option value="Somalia">Somalia</option> 
                                                        <option value="South Africa">South Africa</option> 
                                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                                        <option value="Spain">Spain</option> 
                                                        <option value="Sri Lanka">Sri Lanka</option> 
                                                        <option value="Sudan">Sudan</option> 
                                                        <option value="Suriname">Suriname</option> 
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                                        <option value="Swaziland">Swaziland</option> 
                                                        <option value="Sweden">Sweden</option> 
                                                        <option value="Switzerland">Switzerland</option> 
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                                                        <option value="Tajikistan">Tajikistan</option> 
                                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                                        <option value="Thailand">Thailand</option> 
                                                        <option value="Timor-leste">Timor-leste</option> 
                                                        <option value="Togo">Togo</option> 
                                                        <option value="Tokelau">Tokelau</option> 
                                                        <option value="Tonga">Tonga</option> 
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                                        <option value="Tunisia">Tunisia</option> 
                                                        <option value="Turkey">Turkey</option> 
                                                        <option value="Turkmenistan">Turkmenistan</option> 
                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                                        <option value="Tuvalu">Tuvalu</option> 
                                                        <option value="Uganda">Uganda</option> 
                                                        <option value="Ukraine">Ukraine</option> 
                                                        <option value="United Arab Emirates">United Arab Emirates</option> 
                                                        <option value="United Kingdom">United Kingdom</option> 
                                                        <option value="United States">United States</option> 
                                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                                        <option value="Uruguay">Uruguay</option> 
                                                        <option value="Uzbekistan">Uzbekistan</option> 
                                                        <option value="Vanuatu">Vanuatu</option> 
                                                        <option value="Venezuela">Venezuela</option> 
                                                        <option value="Viet Nam">Viet Nam</option> 
                                                        <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                                        <option value="Western Sahara">Western Sahara</option> 
                                                        <option value="Yemen">Yemen</option> 
                                                        <option value="Zambia">Zambia</option> 
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Identity document <small>(required)</small></label>
                                                    <select name="identity_doc" class="form-control" required>
                                                        <option disabled="" selected=""></option>
                                                        <option value="Passport">Passport</option>
                                                        <option value="Driver's license">Driver's license</option>
                                                        <option value="National ID">National ID</option>
                                                    </select>

                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">I.D. number <small>(required)</small></label>
                                                      <input  type="text" class="form-control" name="id_number" required>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Birthdate <small>(required)</small></label>
                                                      <input  type="text" class="form-control" name="birthdate" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <br/><br/><br/><br/><br/>

                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                Home Address.

                                                </div></div>

                                                 <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Home Address 1 <small>(required)</small></label>
                                                      <input  type="text" class="form-control" name="homeadd1" required>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Home Address 2 <small>(optional)</small></label>
                                                      <input  type="text" class="form-control" name="homeadd2">
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">City/Municipality <small>(required)</small></label>
                                                      <input  type="text" class="form-control" name="homecity" required>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Region/State/Province <small>(optional)</small></label>
                                                      <input  type="text" class="form-control" name="homeregion">
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-sm-12">
                                                <div class="input-group">
                                                    
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Zip Code <small>(required)</small></label>
                                                      <input  type="text" class="form-control" name="home_zipcode" required>
                                                    </div>
                                                </div>
                                                </div>


                                                </div>
                                                </div>
                                                </div>

                                
                                
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' onclick="YourName()" />
                                        <button type='submit' class='btn btn-finish btn-fill btn-success btn-wd' />Register</button>
                                    </div>

                                    
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                        <br/><br/><br/><br/>

                    </div> <!-- wizard container -->
                  
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->

       
    </div>
@endsection

@section('selection1')

<script>
$('#business_category').on('change', function () {
  var cl= '.'+this.value.replace(/ /g,'');
  $('#subcategory optgroup').hide();
  $(cl).show();
  $('#subcategory').val('');
});


function YourName() {

    var fname = document.getElementById("firstname").value;
    var lname = document.getElementById("lastname").value;

    document.getElementById("name").innerHTML = fname + ' ' + lname;

 }


 $(document).ready(function() {
        $("form").bind("keypress", function(e) {
            if (e.keyCode == 13) {
                return false;
            }
        });
    });
</script>


@endsection
