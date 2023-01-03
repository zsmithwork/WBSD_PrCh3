<?php
  session_start();
  include_once 'backend/serv.php';
  if ($_SESSION["useris"]==null) {
    $_SESSION["useris"] = "temp";
  }
?>
<!DOCTYPE html>
<html lang = "en">
<head>
  <meta charset ="utf-8">
  <title>Flights</title>
</head>
<body>

  <div class="login">
    <form method="post" action="backend/validate.php">
      <fieldset>
        <legend>Log In</legend>
          <p>
            <input type="text" name="usercheck" placeholder="Username"/>
            <br>
            <input type="password" name="passcheck" placeholder="Password"/>
          </p>
          <button type="submit" value="sub_login">Submit</button>
      </fieldset>
    </form>
  </div>
  <div class="signup">
    <form method="post" action="backend/submit.php">
      <fieldset>
        <legend>Sign Up</legend>
          <p>
            <input type="text" name="user" placeholder="Username"/>
            <br>
            <input type="password" name="pass" placeholder="Password"/>
            <br>
            <input type="email" name="email" placeholder="Email Address"/>
          </p>
          <p>
            <input type="text" name="first" placeholder="First name"/>
            <br>
            <input type="text" name="last" placeholder="Last name"/>
            <br>
            <input type="text" name="str" placeholder="Street"/>
            <br>
            <input type="number" name="apt" placeholder="Apt. Number (Optional)"/>
            <br>
            <input type="text" name="city" placeholder="City"/>
            <br>
              <select name="state" placeholder="State">
                <option disabled>Choose a state</option>
                <option>Alabama</option>
                <option>Alaska</option>
                <option>Arizona</option>
                <option>Arkansas</option>
                <option>California</option>
                <option>Colorado</option>
                <option>Connecticut</option>
                <option>Delaware</option>
                <option>Florida</option>
                <option>Georgia</option>
                <option>Hawaii</option>
                <option>Idaho</option>
                <option>Illinois</option>
                <option>Indiana</option>
                <option>Iowa</option>
                <option>Kansas</option>
                <option>Kentucky</option>
                <option>Louisiana</option>
                <option>Maine</option>
                <option>Maryland</option>
                <option>Massachusetts</option>
                <option>Michigan</option>
                <option>Minnesota</option>
                <option>Mississippi</option>
                <option>Missouri</option>
                <option>Montana</option>
                <option>Nebraska</option>
                <option>Nevada</option>
                <option>New Hampshire</option>
                <option>New Jersey</option>
                <option>New Mexico</option>
                <option>New York</option>
                <option>North Carolina</option>
                <option>North Dakota</option>
                <option>Ohio</option>
                <option>Oklahoma</option>
                <option>Oregon</option>
                <option>Pennsylvania</option>
                <option>Rhode Island</option>
                <option>South Carolina</option>
                <option>South Dakota</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Utah</option>
                <option>Vermont</option>
                <option>Virginia</option>
                <option>Washington</option>
                <option>West Virginia</option>
                <option>Wisconsin</option>
                <option>Wyoming</option>
              </select>
            <br>
            <input type="number" name="zip" placeholder="ZIP Code"/>
            <br>
          </p>
        <button type="submit" value="sub_signup">Submit</button>
      </fieldset>
    </form>
  </div>
  <div class="logout">
    <form method="post" action="backend/logout.php">
      <fieldset>
        <legend>Logout</legend>
            <?php
              $userID = $_SESSION["useris"];

              if ($userID != null) {
                $view_sql = "SELECT usr FROM users WHERE userID='$userID';";
                $result = mysqli_query($conn, $view_sql);
                while($row = mysqli_fetch_array($result)) {
                  echo "Username: " . $row['usr'];
                }
              }
            ?>
          <br>
          <button type="submit" value="sub_logout">Submit</button>
      </fieldset>
    </form>
  </div>
  <div class="booking">
    <form method="post" action="backend/book.php">
      <fieldset>
        <legend>Book a Flight</legend>
          <p>
            Departure:
            <br>
            <select name="depart" placeholder="Departure">
              <option disabled>Choose a depature location</option>
              <optgroup label="Alabama">
                <option>Birmingham, BHM</option>
                <option>Dothan, DHN</option>
                <option>Huntsville, HSV</option>
                <option>Mobile, MOB</option>
                <option>Montgomery, MGM</option>
              </optgroup>
              <optgroup label="Alaska">
                <option>Anchorage, LHD</option>
                <option>Anchorage, MRI</option>
                <option>Anchorage, ANC</option>
                <option>Aniak, ANI</option>
                <option>Bethel, BET</option>
                <option>Cordova, CDV</option>
                <option>Deadhorse, SCC</option>
                <option>Dillingham, DLG</option>
                <option>Fairbanks, FAI</option>
                <option>Gustavus, GST</option>
                <option>Homer, HOM</option>
                <option>Juneau, JNU</option>
                <option>Kenai, ENA</option>
                <option>Ketchikan, KTN</option>
                <option>King Salmon, AKN</option>
                <option>Klawock, AKW</option>
                <option>Kodiak, ADQ</option>
                <option>Kotzebue, OTZ</option>
                <option>Nome, OME</option>
                <option>Petersburg, PSG</option>
                <option>St. Mary's, KSM</option>
                <option>Sitka, SIT</option>
                <option>Unalakleet, UNK</option>
                <option>Unalaska, DUT</option>
                <option>Utqiagvak, BRW</option>
                <option>Valdez, VDZ</option>
                <option>Wrangell, WRG</option>
                <option>Yakutat, YAK</option>
              </optgroup>
              <optgroup label="Arizona">
                <option>Bullhead City, IFP</option>
                <option>Flagstaff, FLG</option>
                <option>Grand Canyon, GCN</option>
                <option>Mesa, IWA</option>
                <option>Page, PGA</option>
                <option>Prescott, PRC</option>
                <option>Phoenix, PHX</option>
                <option>Tucson, TUS</option>
                <option>Yuma, NYL</option>
              </optgroup>
              <optgroup label="Arkansas">
                <option>Fayetteville, XNA</option>
                <option>Fort Smith, FSM</option>
                <option>Little Rock, LIT</option>
                <option>Texarkana, TXK</option>
              </optgroup>
              <optgroup label="California">
                <option>Arcata/Eureka, ACV</option>
                <option>Bakersfield, BFL</option>
                <option>Burbank, BUR</option>
                <option>Concord, CCR</option>
                <option>Fresno, FAT</option>
                <option>Long Beach, LGB</option>
                <option>Los Angeles, LAX</option>
                <option>Mammoth Lakes, MMH</option>
                <option>Montery, MRY</option>
                <option>Oakland, OAK</option>
                <option>Ontario, ONT</option>
                <option>Orange County, SNA</option>
                <option>Palm Springs, PSP</option>
                <option>Redding, RDD</option>
                <option>Sacramenta, SMF</option>
                <option>San Diego, SAN</option>
                <option>San Francisco, SFO</option>
                <option>San Jose, SJC</option>
                <option>San Luis Obispo, SBP</option>
                <option>Santa Barbara, SBA</option>
                <option>Santa Maria, SMX</option>
                <option>Santa Rosa, STS</option>
                <option>Stockton, SCK</option>
              </optgroup>
              <optgroup label="Colorado">
                <option>Aspen, ASE</option>
                <option>Colorado Springs, COS</option>
                <option>Denver, DEN</option>
                <option>Durango, DRO</option>
                <option>Eagle/Vail, EGE</option>
                <option>Grand Junction, GJT</option>
                <option>Gunnison, GUC</option>
                <option>Hayden, HDN</option>
                <option>Montrose, MTJ</option>
                <option>Pueblo, PUB</option>
              </optgroup>
              <optgroup label="Connecticut">
                <option>Hartford, BDL</option>
                <option>New Haven, HVN</option>
              </optgroup>
              <optgroup label="Florida">
                <option>Daytona Beach, DAB</option>
                <option>Fort Lauderdale, FLL</option>
                <option>Fort Myers, RSW</option>
                <option>Fort Walton Beach, VPS</option>
                <option>Gainesville, GNV</option>
                <option>Jacksonville, JAX</option>
                <option>Key West, EYW</option>
                <option>Melbourne, MLB</option>
                <option>Miami, MIA</option>
                <option>Orlando, MCO</option>
                <option>Panama City, ECP</option>
                <option>Pensacola, PNS</option>
                <option>Punta Gorda, PGD</option>
                <option>Sanford, SFB</option>
                <option>Sarasota, SRQ</option>
                <option>St. Petersburg, PIE</option>
                <option>Tallahassee, TLH</option>
                <option>Tampa, TPA</option>
                <option>Vero Beach, VRB</option>
                <option>West Palm Beach, PBI</option>
              </optgroup>
              <optgroup label="Georgia">
                <option>Albany, ABY</option>
                <option>Atlanta, ATL</option>
                <option>Augusta, AGS</option>
                <option>Brunswick, BQK</option>
                <option>Columbus, CSG</option>
                <option>Macon, MCN</option>
                <option>Savannah, SAV</option>
                <option>Valdosta, VLD</option>
              </optgroup>
              <optgroup label="Hawaii">
                <option>Hilo, ITO</option>
                <option>Honolulu, HNL</option>
                <option>Kahului, OGG</option>
                <option>Kailua-Kona, KOA</option>
                <option>Kaunakakai, MKK</option>
                <option>Lanai City, LNY</option>
                <option>Lihua, LIH</option>
              </optgroup>
              <optgroup label="Idaho">
                <option>Boise, BOI</option>
                <option>Hailey/Sun Valley, SUN</option>
                <option>Idaho Falls, IDA</option>
                <option>Lewiston, LWS</option>
                <option>Pocatello, PIH</option>
                <option>Twin Falls, TWF</option>
              </optgroup>
              <optgroup label="Illinois">
                <option>Belleville, BLV</option>
                <option>Bloomington/Normal, BMI</option>
                <option>Champaign/Urbana/Savory, CMI</option>
                <option>Chicago, MDW</option>
                <option>Chicago, ORD</option>
                <option>Marion, MWA</option>
                <option>Moline, MLI</option>
                <option>Peoria, PIA</option>
                <option>Quincy, UIN</option>
                <option>Rockford, RFD</option>
                <option>Springfield, SPI</option>
              </optgroup>
              <optgroup label="Indiana">
                <option>Evensville, EVV</option>
                <option>Fort Wayne, FWA</option>
                <option>Indianapolis, IND</option>
                <option>South Bend, SBN</option>
              </optgroup>
              <optgroup label="Iowa">
                <option>Cedar Rapids, CID</option>
                <option>Des Moines, DSM</option>
                <option>Dubuque, DBQ</option>
                <option>Sioux City, SUX</option>
                <option>Waterloo, ALO</option>
              </optgroup>
              <optgroup label="Kansas">
                <option>Garden City, GCK</option>
                <option>Hays, HYS</option>
                <option>Manhattan, MHK</option>
                <option>Salina, SLN</option>
                <option>Wichita, ICT</option>
              </optgroup>
              <optgroup label="Kentucky">
                <option>Cincinnati/Covington, CVG</option>
                <option>Lexington, LEX</option>
                <option>Louisville, SDF</option>
                <option>Owensboro, OWB</option>
                <option>Paducah, PAH</option>
              </optgroup>
              <optgroup label="Louisiana">
                <option>Alexandria, AEX</option>
                <option>Baton Rouge, BTR</option>
                <option>Lafayette, LFT</option>
                <option>Lake Charles, LCH</option>
                <option>Monroe, MLU</option>
                <option>New Orleans, MSY</option>
                <option>Shreveport, SHV</option>
              </optgroup>
              <optgroup label="Maine">
                <option>Bangor, BGR</option>
                <option>Portland, PWM</option>
                <option>Presque Isle, PQI</option>
                <option>Rockland, RKD</option>
              </optgroup>
              <optgroup label="Maryland">
                <option>Baltimore, BWI</option>
                <option>Hagerstown, HGR</option>
                <option>Salisbury, SBY</option>
              </optgroup>
              <optgroup label="Massachusetts">
                <option>Bedford, BED</option>
                <option>Boston, BOS</option>
                <option>Hyannis, HYA</option>
                <option>Nantucket, ACK</option>
                <option>Provincetown, PVC</option>
                <option>Vineyard Haven, MVY</option>
                <option>Worcester, ORH</option>
              </optgroup>
              <optgroup label="Michigan">
                <option>Alpena, APN</option>
                <option>Detroit, DTW</option>
                <option>Escanaba, ESC</option>
                <option>Flint, FNT</option>
                <option>Grand Rapids, GRR</option>
                <option>Hancock, CMX</option>
                <option>Iron Mountain, IMT</option>
                <option>Kalamazoo, AZO</option>
                <option>Lansing, LAN</option>
                <option>Marquette, SAW</option>
                <option>Muskegon, MKG</option>
                <option>Pellston, PLN</option>
                <option>Saginaw, MBS</option>
                <option>Sault Ste. Marie, CIU</option>
                <option>Traverse City, TVC</option>
              </optgroup>
              <optgroup label="Minnesota">
                <option>Bemidji, BJI</option>
                <option>Brainerd, BRD</option>
                <option>Duluth, DLH</option>
                <option>Hibbinh, HIB</option>
                <option>International Falls, INL</option>
                <option>Minneapolis-St. Paul, MSP</option>
                <option>Rochester, RST</option>
                <option>St. Cloud, STC</option>
              </optgroup>
              <optgroup label="Mississippi">
                <option>Columbus, GTR</option>
                <option>Gulfport/Biloxi, GPT</option>
                <option>Jackson, JAN</option>
                <option>Meridian, MEI</option>
                <option>Tupelo, TUP</option>
              </optgroup>
              <optgroup label="Missouri">
                <option>Columbia, COU</option>
                <option>Joplin, JLN</option>
                <option>Kansas City, MCI</option>
                <option>St. Louis, STL</option>
                <option>Springfield, SGF</option>
              </optgroup>
              <optgroup label="Montana">
                <option>Billings, BIL</option>
                <option>Bozeman, BZN</option>
                <option>Butta, BTM</option>
                <option>Great Falls, GTF</option>
                <option>Helena, HLN</option>
                <option>Kalispell, GPI</option>
                <option>Missoula, MSO</option>
                <option>Sidney, SDY</option>
                <option>West Yellowstone, WYS</option>
              </optgroup>
              <optgroup label="Nebraska">
                <option>Grand Island, GRI</option>
                <option>Lincoln, LNK</option>
                <option>North Platte, LBF</option>
                <option>Omaha, OMA</option>
                <option>Scottsbluff, BFF</option>
              </optgroup>
              <optgroup label="Nevada">
                <option>Boulder City, BVU</option>
                <option>Elko, EKO</option>
                <option>Las Vegas, LAS</option>
                <option>Reno, RNO</option>
              </optgroup>
              <optgroup label="New Hampshire">
                <option>Lebanon, LEB</option>
                <option>Manchester, MHT</option>
                <option>Portsmouth, PSM</option>
              </optgroup>
              <optgroup label="New Jersey">
                <option>Atlantic City, ACY</option>
                <option>Newark, EWR</option>
                <option>Trenton, TTN</option>
              </optgroup>
              <optgroup label="New Mexico">
                <option>Albuquerque, ABQ</option>
                <option>Hobbs, HOB</option>
                <option>Roswell, ROW</option>
                <option>Santa Fe, SAF</option>
              </optgroup>
              <optgroup label="New York">
                <option>Albany, ALB</option>
                <option>Binghamton, BGM</option>
                <option>Buffalo, BUF</option>
                <option>Elmira/Corning, ELM</option>
                <option>Ithaca, ITH</option>
                <option>New York, JFK</option>
                <option>New York, LGA</option>
                <option>New York/Islip, ISP</option>
                <option>Newburgh, SWF</option>
                <option>Niagara Falls, IAG</option>
                <option>Ogdensburg, OGS</option>
                <option>Plattsburghh, PBG</option>
                <option>Roshester, ROC</option>
                <option>Syracuse, SYR</option>
                <option>Watertown, ART</option>
                <option>White Plains, HPN</option>
              </optgroup>
              <optgroup label="North Carolina">
                <option>Asheville, AVL</option>
                <option>Charlotte, CLT</option>
                <option>Concord, JQF</option>
                <option>Fayettevilla, FAY</option>
                <option>Greensboro, GSO</option>
                <option>Greenville, PGV</option>
                <option>Jacksonville, OAJ</option>
                <option>New Bern, EWN</option>
                <option>Raleigh, RDU</option>
                <option>Wilmington, ILM</option>
              </optgroup>
              <optgroup label="North Dakota">
                <option>Bismark, BIS</option>
                <option>Dickinson, DIK</option>
                <option>Fargo, FAR</option>
                <option>Grand Forks, GFK</option>
                <option>Jameston, JMS</option>
                <option>Minot, MOT</option>
                <option>Williston, XWA</option>
              </optgroup>
              <optgroup label="Ohio">
                <option>Akron/Canton, CAK</option>
                <option>Cleveland, CLE</option>
                <option>Columbus, CMH</option>
                <option>Columbus, LCK</option>
                <option>Dayton, DAY</option>
                <option>Toledo, TOL</option>
              </optgroup>
              <optgroup label="Oklahoma">
                <option>Lawton, LAW</option>
                <option>Oklahoma City, OKC</option>
                <option>Stillwater, SWO</option>
                <option>Tulsa, TUL</option>
              </optgroup>
              <optgroup label="Oregon">
                <option>Eugene, EUG</option>
                <option>Medford, MFR</option>
                <option>North Bend, OTH</option>
                <option>Portland, PDX</option>
                <option>Redmond, RDM</option>
              </optgroup>
              <optgroup label="Pennsylvania">
                <option>Allentown, ABE</option>
                <option>Erie, ERI</option>
                <option>Harrisburg, MDT</option>
                <option>Latrobe, LBE</option>
                <option>Philadelphia, PHL</option>
                <option>Pittsburgh, PIT</option>
                <option>State College, UNV</option>
                <option>Wilkes-Barre, AVP</option>
                <option>Williamsport, IPT</option>
              </optgroup>
              <optgroup label="Rhode Island">
                <option>Block Island, BID</option>
                <option>Providence, PVD</option>
                <option>Westerly, WST</option>
              </optgroup>
              <optgroup label="South Carolina">
                <option>Charleston, CHS</option>
                <option>Columbia, CAE</option>
                <option>Florence, FLO</option>
                <option>Greenville, GSP</option>
                <option>Hilton Head, HXD</option>
                <option>Myrtle Beach, MYR</option>
              </optgroup>
              <optgroup label="South Dakota">
                <option>Aberdeen, ABR</option>
                <option>Pierre, PIR</option>
                <option>Rapid City, RAP</option>
                <option>Sioux Falls, FSD</option>
                <option>Watertown, ATY</option>
              </optgroup>
              <optgroup label="Tennessee">
                <option>Chattanooga, CHA</option>
                <option>Knoxville, TYS</option>
                <option>Memphis, MEM</option>
                <option>Nashville, BNA</option>
                <option>Tri-Cities, TRI</option>
              </optgroup>
              <optgroup label="Texas">
                <option>Abilene, ABI</option>
                <option>Amarillo, AMA</option>
                <option>Austin, AUS</option>
                <option>Beaumont, BPT</option>
                <option>Brownsville, BRO</option>
                <option>College Station, CLL</option>
                <option>Corpus Christi, CRP</option>
                <option>Dallas, DAL</option>
                <option>Dallas, DFW</option>
                <option>El Paso, ELP</option>
                <option>Harlingen, HRL</option>
                <option>Houston, IAH</option>
                <option>Houston, HOU</option>
                <option>Killeen, GRK</option>
                <option>Laredo, LRD</option>
                <option>Longview, GGG</option>
                <option>Lubbock, LBB</option>
                <option>McAllen, MFE</option>
                <option>Midland/Odessa, MAF</option>
                <option>San Angelo, SJT</option>
                <option>San Antonio, SAT</option>
                <option>Texarkana, TXK</option>
                <option>Tyler, TYR</option>
                <option>Waco, ACT</option>
                <option>Wichita Falls, SPS</option>
              </optgroup>
              <optgroup label="Utah">
                <option>Cedar City, CDC</option>
                <option>Moab, CNY</option>
                <option>Ogden, OGD</option>
                <option>Provo, PVU</option>
                <option>Salt Lake City, SLC</option>
                <option>St. George, SGU</option>
                <option>Vernal, VEL</option>
              </optgroup>
              <optgroup label="Vermont">
                <option>Burlington, BTV</option>
              </optgroup>
              <optgroup label="Virginia">
                <option>Charlottesville, CHO</option>
                <option>Lynchburg, LYH</option>
                <option>Newport News, PHF</option>
                <option>Norfold, ORF</option>
                <option>Richmond, RIC</option>
                <option>Roanoke, ROA</option>
                <option>Stuanton/Watnesboro/Harrisonburg, SHD</option>
                <option>Washington, D.C./Arlington County, DCA</option>
                <option>Washington, D.C./Dulles/Chantilly, IAD</option>
              </optgroup>
              <optgroup label="Washington">
                <option>Bellingham, BLI</option>
                <option>Eastsound, ORS</option>
                <option>Friday Harbor, FHR</option>
                <option>Pasco, PSC</option>
                <option>Pullman/Moscow, PUW</option>
                <option>Seattle, BFI</option>
                <option>Seattle/Tacoma, SEA</option>
                <option>Spokane, GEG</option>
                <option>Walla Walla, ALW</option>
                <option>Wenatchee, EAT</option>
                <option>Yakima, YKM</option>
              </optgroup>
              <optgroup label="West Virginia">
                <option>Charleston, CRW</option>
                <option>Clarksburg, CKB</option>
                <option>Huntington, HTS</option>
                <option>Lewisburg, LWB</option>
              </optgroup>
              <optgroup label="Wisconsin">
                <option>Appleton, ATW</option>
                <option>Eau Claire, EAU</option>
                <option>Green Bay, GRB</option>
                <option>La Crosse, LSE</option>
                <option>Madison, MSN</option>
                <option>Milwaukee, MKE</option>
                <option>Mosinee, CWA</option>
                <option>Rhinelander, RHI</option>
              </optgroup>
              <optgroup label="Wyoming">
                <option>Casper, CPR</option>
                <option>Cody, COD</option>
                <option>Gillette, GCC</option>
                <option>Jackson, JAC</option>
                <option>Laramie, LAR</option>
                <option>Riverton, RIW</option>
                <option>Rock Springs, RKS</option>
                <option>Sheridan, SHR</option>
              </optgroup>
              <optgroup label="America Samoa">
                <option>Pago Pago, PPG</option>
              </optgroup>
              <optgroup label="Guam">
                <option>Agana/Tamuning, GUM</option>
              </optgroup>
              <optgroup label="Nothern Marianas">
                <option>Obyan, GSN</option>
                <option>Rota Island, GRO</option>
                <option>Tinian Island, TNI</option>
              </optgroup>
              <optgroup label="Puerto Rico">
                <option>Aguadilla, BQN</option>
                <option>Ceiba, RVR</option>
                <option>Culebra, CPX</option>
                <option>Ponce, PSE</option>
                <option>San Juan/Carolina, SJU</option>
                <option>San Juan/Miramar, SIG</option>
                <option>Vieques. VQS</option>
              </optgroup>
              <optgroup label="U.S. Virgin Islands">
                <option>Charlotte Amalie, STT</option>
                <option>Christiansted, STX</option>
              </optgroup>
            </select>
            <br>
            Arrival:
            <br>
            <select name="arrive" placeholder="Arrival">
              <option disabled>Choose an arrival location</option>
              <optgroup label="Alabama">
                <option>Birmingham, BHM</option>
                <option>Dothan, DHN</option>
                <option>Huntsville, HSV</option>
                <option>Mobile, MOB</option>
                <option>Montgomery, MGM</option>
              </optgroup>
              <optgroup label="Alaska">
                <option>Anchorage, LHD</option>
                <option>Anchorage, MRI</option>
                <option>Anchorage, ANC</option>
                <option>Aniak, ANI</option>
                <option>Bethel, BET</option>
                <option>Cordova, CDV</option>
                <option>Deadhorse, SCC</option>
                <option>Dillingham, DLG</option>
                <option>Fairbanks, FAI</option>
                <option>Gustavus, GST</option>
                <option>Homer, HOM</option>
                <option>Juneau, JNU</option>
                <option>Kenai, ENA</option>
                <option>Ketchikan, KTN</option>
                <option>King Salmon, AKN</option>
                <option>Klawock, AKW</option>
                <option>Kodiak, ADQ</option>
                <option>Kotzebue, OTZ</option>
                <option>Nome, OME</option>
                <option>Petersburg, PSG</option>
                <option>St. Mary's, KSM</option>
                <option>Sitka, SIT</option>
                <option>Unalakleet, UNK</option>
                <option>Unalaska, DUT</option>
                <option>Utqiagvak, BRW</option>
                <option>Valdez, VDZ</option>
                <option>Wrangell, WRG</option>
                <option>Yakutat, YAK</option>
              </optgroup>
              <optgroup label="Arizona">
                <option>Bullhead City, IFP</option>
                <option>Flagstaff, FLG</option>
                <option>Grand Canyon, GCN</option>
                <option>Mesa, IWA</option>
                <option>Page, PGA</option>
                <option>Prescott, PRC</option>
                <option>Phoenix, PHX</option>
                <option>Tucson, TUS</option>
                <option>Yuma, NYL</option>
              </optgroup>
              <optgroup label="Arkansas">
                <option>Fayetteville, XNA</option>
                <option>Fort Smith, FSM</option>
                <option>Little Rock, LIT</option>
                <option>Texarkana, TXK</option>
              </optgroup>
              <optgroup label="California">
                <option>Arcata/Eureka, ACV</option>
                <option>Bakersfield, BFL</option>
                <option>Burbank, BUR</option>
                <option>Concord, CCR</option>
                <option>Fresno, FAT</option>
                <option>Long Beach, LGB</option>
                <option>Los Angeles, LAX</option>
                <option>Mammoth Lakes, MMH</option>
                <option>Montery, MRY</option>
                <option>Oakland, OAK</option>
                <option>Ontario, ONT</option>
                <option>Orange County, SNA</option>
                <option>Palm Springs, PSP</option>
                <option>Redding, RDD</option>
                <option>Sacramenta, SMF</option>
                <option>San Diego, SAN</option>
                <option>San Francisco, SFO</option>
                <option>San Jose, SJC</option>
                <option>San Luis Obispo, SBP</option>
                <option>Santa Barbara, SBA</option>
                <option>Santa Maria, SMX</option>
                <option>Santa Rosa, STS</option>
                <option>Stockton, SCK</option>
              </optgroup>
              <optgroup label="Colorado">
                <option>Aspen, ASE</option>
                <option>Colorado Springs, COS</option>
                <option>Denver, DEN</option>
                <option>Durango, DRO</option>
                <option>Eagle/Vail, EGE</option>
                <option>Grand Junction, GJT</option>
                <option>Gunnison, GUC</option>
                <option>Hayden, HDN</option>
                <option>Montrose, MTJ</option>
                <option>Pueblo, PUB</option>
              </optgroup>
              <optgroup label="Connecticut">
                <option>Hartford, BDL</option>
                <option>New Haven, HVN</option>
              </optgroup>
              <optgroup label="Florida">
                <option>Daytona Beach, DAB</option>
                <option>Fort Lauderdale, FLL</option>
                <option>Fort Myers, RSW</option>
                <option>Fort Walton Beach, VPS</option>
                <option>Gainesville, GNV</option>
                <option>Jacksonville, JAX</option>
                <option>Key West, EYW</option>
                <option>Melbourne, MLB</option>
                <option>Miami, MIA</option>
                <option>Orlando, MCO</option>
                <option>Panama City, ECP</option>
                <option>Pensacola, PNS</option>
                <option>Punta Gorda, PGD</option>
                <option>Sanford, SFB</option>
                <option>Sarasota, SRQ</option>
                <option>St. Petersburg, PIE</option>
                <option>Tallahassee, TLH</option>
                <option>Tampa, TPA</option>
                <option>Vero Beach, VRB</option>
                <option>West Palm Beach, PBI</option>
              </optgroup>
              <optgroup label="Georgia">
                <option>Albany, ABY</option>
                <option>Atlanta, ATL</option>
                <option>Augusta, AGS</option>
                <option>Brunswick, BQK</option>
                <option>Columbus, CSG</option>
                <option>Macon, MCN</option>
                <option>Savannah, SAV</option>
                <option>Valdosta, VLD</option>
              </optgroup>
              <optgroup label="Hawaii">
                <option>Hilo, ITO</option>
                <option>Honolulu, HNL</option>
                <option>Kahului, OGG</option>
                <option>Kailua-Kona, KOA</option>
                <option>Kaunakakai, MKK</option>
                <option>Lanai City, LNY</option>
                <option>Lihua, LIH</option>
              </optgroup>
              <optgroup label="Idaho">
                <option>Boise, BOI</option>
                <option>Hailey/Sun Valley, SUN</option>
                <option>Idaho Falls, IDA</option>
                <option>Lewiston, LWS</option>
                <option>Pocatello, PIH</option>
                <option>Twin Falls, TWF</option>
              </optgroup>
              <optgroup label="Illinois">
                <option>Belleville, BLV</option>
                <option>Bloomington/Normal, BMI</option>
                <option>Champaign/Urbana/Savory, CMI</option>
                <option>Chicago, MDW</option>
                <option>Chicago, ORD</option>
                <option>Marion, MWA</option>
                <option>Moline, MLI</option>
                <option>Peoria, PIA</option>
                <option>Quincy, UIN</option>
                <option>Rockford, RFD</option>
                <option>Springfield, SPI</option>
              </optgroup>
              <optgroup label="Indiana">
                <option>Evensville, EVV</option>
                <option>Fort Wayne, FWA</option>
                <option>Indianapolis, IND</option>
                <option>South Bend, SBN</option>
              </optgroup>
              <optgroup label="Iowa">
                <option>Cedar Rapids, CID</option>
                <option>Des Moines, DSM</option>
                <option>Dubuque, DBQ</option>
                <option>Sioux City, SUX</option>
                <option>Waterloo, ALO</option>
              </optgroup>
              <optgroup label="Kansas">
                <option>Garden City, GCK</option>
                <option>Hays, HYS</option>
                <option>Manhattan, MHK</option>
                <option>Salina, SLN</option>
                <option>Wichita, ICT</option>
              </optgroup>
              <optgroup label="Kentucky">
                <option>Cincinnati/Covington, CVG</option>
                <option>Lexington, LEX</option>
                <option>Louisville, SDF</option>
                <option>Owensboro, OWB</option>
                <option>Paducah, PAH</option>
              </optgroup>
              <optgroup label="Louisiana">
                <option>Alexandria, AEX</option>
                <option>Baton Rouge, BTR</option>
                <option>Lafayette, LFT</option>
                <option>Lake Charles, LCH</option>
                <option>Monroe, MLU</option>
                <option>New Orleans, MSY</option>
                <option>Shreveport, SHV</option>
              </optgroup>
              <optgroup label="Maine">
                <option>Bangor, BGR</option>
                <option>Portland, PWM</option>
                <option>Presque Isle, PQI</option>
                <option>Rockland, RKD</option>
              </optgroup>
              <optgroup label="Maryland">
                <option>Baltimore, BWI</option>
                <option>Hagerstown, HGR</option>
                <option>Salisbury, SBY</option>
              </optgroup>
              <optgroup label="Massachusetts">
                <option>Bedford, BED</option>
                <option>Boston, BOS</option>
                <option>Hyannis, HYA</option>
                <option>Nantucket, ACK</option>
                <option>Provincetown, PVC</option>
                <option>Vineyard Haven, MVY</option>
                <option>Worcester, ORH</option>
              </optgroup>
              <optgroup label="Michigan">
                <option>Alpena, APN</option>
                <option>Detroit, DTW</option>
                <option>Escanaba, ESC</option>
                <option>Flint, FNT</option>
                <option>Grand Rapids, GRR</option>
                <option>Hancock, CMX</option>
                <option>Iron Mountain, IMT</option>
                <option>Kalamazoo, AZO</option>
                <option>Lansing, LAN</option>
                <option>Marquette, SAW</option>
                <option>Muskegon, MKG</option>
                <option>Pellston, PLN</option>
                <option>Saginaw, MBS</option>
                <option>Sault Ste. Marie, CIU</option>
                <option>Traverse City, TVC</option>
              </optgroup>
              <optgroup label="Minnesota">
                <option>Bemidji, BJI</option>
                <option>Brainerd, BRD</option>
                <option>Duluth, DLH</option>
                <option>Hibbinh, HIB</option>
                <option>International Falls, INL</option>
                <option>Minneapolis-St. Paul, MSP</option>
                <option>Rochester, RST</option>
                <option>St. Cloud, STC</option>
              </optgroup>
              <optgroup label="Mississippi">
                <option>Columbus, GTR</option>
                <option>Gulfport/Biloxi, GPT</option>
                <option>Jackson, JAN</option>
                <option>Meridian, MEI</option>
                <option>Tupelo, TUP</option>
              </optgroup>
              <optgroup label="Missouri">
                <option>Columbia, COU</option>
                <option>Joplin, JLN</option>
                <option>Kansas City, MCI</option>
                <option>St. Louis, STL</option>
                <option>Springfield, SGF</option>
              </optgroup>
              <optgroup label="Montana">
                <option>Billings, BIL</option>
                <option>Bozeman, BZN</option>
                <option>Butta, BTM</option>
                <option>Great Falls, GTF</option>
                <option>Helena, HLN</option>
                <option>Kalispell, GPI</option>
                <option>Missoula, MSO</option>
                <option>Sidney, SDY</option>
                <option>West Yellowstone, WYS</option>
              </optgroup>
              <optgroup label="Nebraska">
                <option>Grand Island, GRI</option>
                <option>Lincoln, LNK</option>
                <option>North Platte, LBF</option>
                <option>Omaha, OMA</option>
                <option>Scottsbluff, BFF</option>
              </optgroup>
              <optgroup label="Nevada">
                <option>Boulder City, BVU</option>
                <option>Elko, EKO</option>
                <option>Las Vegas, LAS</option>
                <option>Reno, RNO</option>
              </optgroup>
              <optgroup label="New Hampshire">
                <option>Lebanon, LEB</option>
                <option>Manchester, MHT</option>
                <option>Portsmouth, PSM</option>
              </optgroup>
              <optgroup label="New Jersey">
                <option>Atlantic City, ACY</option>
                <option>Newark, EWR</option>
                <option>Trenton, TTN</option>
              </optgroup>
              <optgroup label="New Mexico">
                <option>Albuquerque, ABQ</option>
                <option>Hobbs, HOB</option>
                <option>Roswell, ROW</option>
                <option>Santa Fe, SAF</option>
              </optgroup>
              <optgroup label="New York">
                <option>Albany, ALB</option>
                <option>Binghamton, BGM</option>
                <option>Buffalo, BUF</option>
                <option>Elmira/Corning, ELM</option>
                <option>Ithaca, ITH</option>
                <option>New York, JFK</option>
                <option>New York, LGA</option>
                <option>New York/Islip, ISP</option>
                <option>Newburgh, SWF</option>
                <option>Niagara Falls, IAG</option>
                <option>Ogdensburg, OGS</option>
                <option>Plattsburghh, PBG</option>
                <option>Roshester, ROC</option>
                <option>Syracuse, SYR</option>
                <option>Watertown, ART</option>
                <option>White Plains, HPN</option>
              </optgroup>
              <optgroup label="North Carolina">
                <option>Asheville, AVL</option>
                <option>Charlotte, CLT</option>
                <option>Concord, JQF</option>
                <option>Fayettevilla, FAY</option>
                <option>Greensboro, GSO</option>
                <option>Greenville, PGV</option>
                <option>Jacksonville, OAJ</option>
                <option>New Bern, EWN</option>
                <option>Raleigh, RDU</option>
                <option>Wilmington, ILM</option>
              </optgroup>
              <optgroup label="North Dakota">
                <option>Bismark, BIS</option>
                <option>Dickinson, DIK</option>
                <option>Fargo, FAR</option>
                <option>Grand Forks, GFK</option>
                <option>Jameston, JMS</option>
                <option>Minot, MOT</option>
                <option>Williston, XWA</option>
              </optgroup>
              <optgroup label="Ohio">
                <option>Akron/Canton, CAK</option>
                <option>Cleveland, CLE</option>
                <option>Columbus, CMH</option>
                <option>Columbus, LCK</option>
                <option>Dayton, DAY</option>
                <option>Toledo, TOL</option>
              </optgroup>
              <optgroup label="Oklahoma">
                <option>Lawton, LAW</option>
                <option>Oklahoma City, OKC</option>
                <option>Stillwater, SWO</option>
                <option>Tulsa, TUL</option>
              </optgroup>
              <optgroup label="Oregon">
                <option>Eugene, EUG</option>
                <option>Medford, MFR</option>
                <option>North Bend, OTH</option>
                <option>Portland, PDX</option>
                <option>Redmond, RDM</option>
              </optgroup>
              <optgroup label="Pennsylvania">
                <option>Allentown, ABE</option>
                <option>Erie, ERI</option>
                <option>Harrisburg, MDT</option>
                <option>Latrobe, LBE</option>
                <option>Philadelphia, PHL</option>
                <option>Pittsburgh, PIT</option>
                <option>State College, UNV</option>
                <option>Wilkes-Barre, AVP</option>
                <option>Williamsport, IPT</option>
              </optgroup>
              <optgroup label="Rhode Island">
                <option>Block Island, BID</option>
                <option>Providence, PVD</option>
                <option>Westerly, WST</option>
              </optgroup>
              <optgroup label="South Carolina">
                <option>Charleston, CHS</option>
                <option>Columbia, CAE</option>
                <option>Florence, FLO</option>
                <option>Greenville, GSP</option>
                <option>Hilton Head, HXD</option>
                <option>Myrtle Beach, MYR</option>
              </optgroup>
              <optgroup label="South Dakota">
                <option>Aberdeen, ABR</option>
                <option>Pierre, PIR</option>
                <option>Rapid City, RAP</option>
                <option>Sioux Falls, FSD</option>
                <option>Watertown, ATY</option>
              </optgroup>
              <optgroup label="Tennessee">
                <option>Chattanooga, CHA</option>
                <option>Knoxville, TYS</option>
                <option>Memphis, MEM</option>
                <option>Nashville, BNA</option>
                <option>Tri-Cities, TRI</option>
              </optgroup>
              <optgroup label="Texas">
                <option>Abilene, ABI</option>
                <option>Amarillo, AMA</option>
                <option>Austin, AUS</option>
                <option>Beaumont, BPT</option>
                <option>Brownsville, BRO</option>
                <option>College Station, CLL</option>
                <option>Corpus Christi, CRP</option>
                <option>Dallas, DAL</option>
                <option>Dallas, DFW</option>
                <option>El Paso, ELP</option>
                <option>Harlingen, HRL</option>
                <option>Houston, IAH</option>
                <option>Houston, HOU</option>
                <option>Killeen, GRK</option>
                <option>Laredo, LRD</option>
                <option>Longview, GGG</option>
                <option>Lubbock, LBB</option>
                <option>McAllen, MFE</option>
                <option>Midland/Odessa, MAF</option>
                <option>San Angelo, SJT</option>
                <option>San Antonio, SAT</option>
                <option>Texarkana, TXK</option>
                <option>Tyler, TYR</option>
                <option>Waco, ACT</option>
                <option>Wichita Falls, SPS</option>
              </optgroup>
              <optgroup label="Utah">
                <option>Cedar City, CDC</option>
                <option>Moab, CNY</option>
                <option>Ogden, OGD</option>
                <option>Provo, PVU</option>
                <option>Salt Lake City, SLC</option>
                <option>St. George, SGU</option>
                <option>Vernal, VEL</option>
              </optgroup>
              <optgroup label="Vermont">
                <option>Burlington, BTV</option>
              </optgroup>
              <optgroup label="Virginia">
                <option>Charlottesville, CHO</option>
                <option>Lynchburg, LYH</option>
                <option>Newport News, PHF</option>
                <option>Norfold, ORF</option>
                <option>Richmond, RIC</option>
                <option>Roanoke, ROA</option>
                <option>Stuanton/Watnesboro/Harrisonburg, SHD</option>
                <option>Washington, D.C./Arlington County, DCA</option>
                <option>Washington, D.C./Dulles/Chantilly, IAD</option>
              </optgroup>
              <optgroup label="Washington">
                <option>Bellingham, BLI</option>
                <option>Eastsound, ORS</option>
                <option>Friday Harbor, FHR</option>
                <option>Pasco, PSC</option>
                <option>Pullman/Moscow, PUW</option>
                <option>Seattle, BFI</option>
                <option>Seattle/Tacoma, SEA</option>
                <option>Spokane, GEG</option>
                <option>Walla Walla, ALW</option>
                <option>Wenatchee, EAT</option>
                <option>Yakima, YKM</option>
              </optgroup>
              <optgroup label="West Virginia">
                <option>Charleston, CRW</option>
                <option>Clarksburg, CKB</option>
                <option>Huntington, HTS</option>
                <option>Lewisburg, LWB</option>
              </optgroup>
              <optgroup label="Wisconsin">
                <option>Appleton, ATW</option>
                <option>Eau Claire, EAU</option>
                <option>Green Bay, GRB</option>
                <option>La Crosse, LSE</option>
                <option>Madison, MSN</option>
                <option>Milwaukee, MKE</option>
                <option>Mosinee, CWA</option>
                <option>Rhinelander, RHI</option>
              </optgroup>
              <optgroup label="Wyoming">
                <option>Casper, CPR</option>
                <option>Cody, COD</option>
                <option>Gillette, GCC</option>
                <option>Jackson, JAC</option>
                <option>Laramie, LAR</option>
                <option>Riverton, RIW</option>
                <option>Rock Springs, RKS</option>
                <option>Sheridan, SHR</option>
              </optgroup>
              <optgroup label="America Samoa">
                <option>Pago Pago, PPG</option>
              </optgroup>
              <optgroup label="Guam">
                <option>Agana/Tamuning, GUM</option>
              </optgroup>
              <optgroup label="Nothern Marianas">
                <option>Obyan, GSN</option>
                <option>Rota Island, GRO</option>
                <option>Tinian Island, TNI</option>
              </optgroup>
              <optgroup label="Puerto Rico">
                <option>Aguadilla, BQN</option>
                <option>Ceiba, RVR</option>
                <option>Culebra, CPX</option>
                <option>Ponce, PSE</option>
                <option>San Juan/Carolina, SJU</option>
                <option>San Juan/Miramar, SIG</option>
                <option>Vieques. VQS</option>
              </optgroup>
              <optgroup label="U.S. Virgin Islands">
                <option>Charlotte Amalie, STT</option>
                <option>Christiansted, STX</option>
              </optgroup>
            </select>
            <br>
            <input type="date" name="date" placeholder="Date"/>
          </p>
        <button type="submit" value="sub_book">Submit</button>
      </fieldset>
    </form>
  </div>
  <div class="view">
    <fieldset>
      <legend>View Flights</legend>
        <?php

          $userID = $_SESSION["useris"];

          $view_sql = "SELECT departure,arrival,dateis FROM flights WHERE FK_user='$userID';";
          $result = mysqli_query($conn, $view_sql);
          while($row = mysqli_fetch_array($result)) {
            echo "<br>";
            echo "Departure: " . $row['departure'] . "<br>";
            echo "Arrival: " . $row['arrival'] . "<br>";
            echo "Date: " . $row['dateis'] . "<br>";
          }

        ?>
    </fieldset>
  </div>
</body>
</html>
