<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
        <!-- it should be put after the leaflet code -->
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"     
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    </head>

    <body>

    <?php
        $api_url_murder = "https://www.data.qld.gov.au/api/3/action/datastore_search_sql?sql=SELECT * from \"fb7388be-8186-4fbb-84a8-7dbfa63ff378\" WHERE \"Homicide (Murder)\" != '0'LIMIT 5";
        //the query is going to present the crime of Murder
        $cache_filename_murder = "cache/slq-cache_murder.json";
        //set up the catach name to the Murdere
		if(file_exists($cache_filename_murder)) { 
            $data_murder = file_get_contents($cache_filename_murder);
            // Cache the file  if it exists          
		}
		else {  
            // if Cache file doesn"t exist, then create a new one
			$data_murder = file_get_contents($api_url_murder);
			file_put_contents($cache_filename_murder, $data_murder);
        }
        // reference to the code we learn from the workshop
        $data_murder = json_decode($data_murder, true);
        // thee jason turn into array rather than an object
		if(is_array($data_murder)) {
  
            // check whether the data is array or not
			foreach($data_murder["result"]["records"] as $recordKey => $recordValue) {
                $Victimnumber = $recordValue["Assault"];
                $recordYear = $recordValue["Month Year"];
                $recordAge = $recordValue["Age"];
                $recordGender = $recordValue["Sex"];
                $recordLocation = $recordValue["District"];
            //set variables in order to show the information of "the crime' later
			}
		}
        $data_murder = json_encode($data_murder);
        //encode the data into object

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////Crime of Sexual offences  ////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
        $api_url_sexual = "https://www.data.qld.gov.au/api/3/action/datastore_search_sql?sql=SELECT * from \"fb7388be-8186-4fbb-84a8-7dbfa63ff378\" WHERE \"Age\" LIKE '%Juvenile%' LIMIT 5";
        //the query is going to present the crime of Murder
        $cache_filename_sexual = "cache/slq-cache_sexual.json";
        //set up the catach name to the Murdere
		if(file_exists($cache_filename_sexual)) { 
            $data_sexual = file_get_contents($cache_filename_sexual);
            // Cache the file  if it exists          
		}
		else { 
            // if Cache file doesn"t exist, then create a new one
			$data_sexual = file_get_contents($api_url_sexual);
			file_put_contents($cache_filename_sexual, $data_sexual);
        }
        // reference to the code we learn from the workshop
        $data_sexual = json_decode($data_sexual, true);
        // thee jason turn into array rather than an object
		if(is_array($data_sexual)) {
            // check whether the data is array or not
			foreach($data_sexual["result"]["records"] as $recordKey => $recordValue) {
                $Victimnumber = $recordValue["Assault"];
                $recordYear = $recordValue["Month Year"];
                $recordAge = $recordValue["Age"];
                $recordGender = $recordValue["Sex"];
                $recordLocation = $recordValue["District"];
            //set variables in order to show the information of "the crime' later
			}
		}
        $data_sexual = json_encode($data_sexual);

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////Crime of robbery/////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////

        $api_url_robbery = "https://www.data.qld.gov.au/api/3/action/datastore_search_sql?sql=SELECT * from \"fb7388be-8186-4fbb-84a8-7dbfa63ff378\" WHERE \"Sex\" LIKE '%Male%' LIMIT 3";
        //the query is going to present the crime of Murder
        $cache_filename_robbery = "cache/slq-cache_robbery.json";
        //set up the catach name to the Murdere
		if(file_exists($cache_filename_robbery)) { 
            $data_robbery = file_get_contents($cache_filename_robbery);
            // Cache the file  if it exists          
		}
		else { 
            // if Cache file doesn"t exist, then create a new one
			$data_robbery = file_get_contents($api_url_robbery);
			file_put_contents($cache_filename_robbery, $data_robbery);
        }
        // reference to the code we learn from the workshop
        $data_robbery = json_decode($data_robbery, true);
        // thee jason turn into array rather than an object
		if(is_array($data_robbery)) {
            // check whether the data is array or not
			foreach($data_robbery["result"]["records"] as $recordKey => $recordValue) {
                $Victimnumber = $recordValue["Assault"];
                $recordYear = $recordValue["Month Year"];
                $recordAge = $recordValue["Age"];
                $recordGender = $recordValue["Sex"];
                $recordLocation = $recordValue["District"];
            //set variables in order to show the information of "the crime' later
			}
		}
        $data_robbery = json_encode($data_robbery);



        /////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////Crime of Arson/////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////

        $api_url_arson = "https://www.data.qld.gov.au/api/3/action/datastore_search_sql?sql=SELECT * from \"fb7388be-8186-4fbb-84a8-7dbfa63ff378\" WHERE \"Sex\" LIKE '%Male%' LIMIT 4";
        //the query is going to present the crime of Murder
        $cache_filename_arson = "cache/slq-cache_arson.json";
        //set up the catach name to the Murdere
		if(file_exists($cache_filename_arson)) { 
            $data_arson = file_get_contents($cache_filename_arson);
            // Cache the file  if it exists          
		}
		else { 
            // if Cache file doesn"t exist, then create a new one
			$data_arson = file_get_contents($api_url_arson);
			file_put_contents($cache_filename_arson, $data_arson);
        }
        // reference to the code we learn from the workshop
        $data_arson = json_decode($data_arson, true);
        // thee jason turn into array rather than an object
		if(is_array($data_arson)) {
            // check whether the data is array or not
			foreach($data_arson["result"]["records"] as $recordKey => $recordValue) {
                $Victimnumber = $recordValue["Assault"];
                $recordYear = $recordValue["Month Year"];
                $recordAge = $recordValue["Age"];
                $recordGender = $recordValue["Sex"];
                $recordLocation = $recordValue["District"];
            //set variables in order to show the information of "the crime' later
			}
		}
        $data_arson = json_encode($data_arson);        
               
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////Crime of stalking/////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////    

        $api_url_stalking = "https://www.data.qld.gov.au/api/3/action/datastore_search_sql?sql=SELECT * from \"fb7388be-8186-4fbb-84a8-7dbfa63ff378\" WHERE \"Sex\" LIKE '%Male%' LIMIT 6";
        //the query is going to present the crime of Murder
        $cache_filename_stalking = "cache/slq-cache_stalking.json";
        //set up the catach name to the Murdere
		if(file_exists($cache_filename_stalking)) { 
            $data_stalking = file_get_contents($cache_filename_stalking);
            // Cache the file  if it exists          
		}
		else { 
            // if Cache file doesn"t exist, then create a new one
			$data_stalking = file_get_contents($api_url_stalking);
			file_put_contents($cache_filename_stalking, $data_stalking);
        }
        // reference to the code we learn from the workshop
        $data_stalking = json_decode($data_stalking, true);
        // thee jason turn into array rather than an object
		if(is_array($data_stalking)) {
            // check whether the data is array or not
			foreach($data_stalking["result"]["records"] as $recordKey => $recordValue) {
                $Victimnumber = $recordValue["Assault"];
                $recordYear = $recordValue["Month Year"];
                $recordAge = $recordValue["Age"];
                $recordGender = $recordValue["Sex"];
                $recordLocation = $recordValue["District"];
            //set variables in order to show the information of "the crime' later
			}
		}
        $data_stalking = json_encode($data_stalking);        
               

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////Death by Road Crashes/////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////        

        $api_url_roadcrash = "https://www.data.qld.gov.au/api/3/action/datastore_search_sql?sql=SELECT * from \"fb7388be-8186-4fbb-84a8-7dbfa63ff378\" WHERE \"Sex\" LIKE '%Male%' LIMIT 10";
        //the query is going to present the crime of Murder
        $cache_filename_roadcrash = "cache/slq-cache_roadcrash.json";
        //set up the catach name to the Murdere
		if(file_exists($cache_filename_roadcrash)) { 
            $data_roadcrash = file_get_contents($cache_filename_roadcrash);
            // Cache the file  if it exists          
		}
		else { 
            // if Cache file doesn"t exist, then create a new one
			$data_roadcrash = file_get_contents($api_url_roadcrash);
			file_put_contents($cache_filename_roadcrash, $data_roadcrash);
        }
        // reference to the code we learn from the workshop
        $data_roadcrash = json_decode($data_roadcrash, true);
        // thee jason turn into array rather than an object
		if(is_array($data_roadcrash)) {
            // check whether the data is array or not
			foreach($data_roadcrash["result"]["records"] as $recordKey => $recordValue) {
                $Victimnumber = $recordValue["Assault"];
                $recordYear = $recordValue["Month Year"];
                $recordAge = $recordValue["Age"];
                $recordGender = $recordValue["Sex"];
                $recordLocation = $recordValue["District"];
            //set variables in order to show the information of "the crime' later
			}
		}
        $data_roadcrash = json_encode($data_roadcrash);     

	?>        

        <header class="header">
            <ul>
                <li><a href="homepage.html">NEVER DANGEROUS</a></li>
                <button style="float:right" class="openmenu" onclick="openSideMenu()">&#9776; Menu</button>
            </ul>

            <div id="sideMenu" class="sidemenu">
                    <a href="javascript:void(0)" class="closemenu" onclick="closeSideMenu()">&times;</a>
                    <a href="index.php">Home</a>
                    <a href="about.html">About</a>
                    <a href="contact.html">Contact</a>
            </div>

            <div class="crimebtn">
            <button class="murderbtn" onclick="onclickMurder()"></button>
            <small>Murder</small>
            <button class="sexualbtn" onclick="onclickSexual()"></button>
            <small>Sexual Offence</small>
            <button class="robberybtn" onclick="onclickRobbery()"></button>
            <small>Robbery</small>
            <button class="arsonbtn" onclick="onclickArson()"></button>
            <small>Arson</small>
            <button class="stalkbtn" onclick="onclickStalking()"></button>
            <small>Stalking</small>
            <button class="drivingbtn" onclick="onclickRoadCrash()"></button>
            <small>Road Crashes</small>
            </div>
        </header>
        
         <div id="map">
         </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <script>
            var mymap = L.map('map').setView([-27.471, 153.0234], 11);
            L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                maxZoom: 18,
                id: 'mapbox.streets',
                accessToken: 'pk.eyJ1IjoiaGVyY3kiLCJhIjoiY2swcHZla3kwMDBpcDNxbzNiN2E4YjZvMiJ9.QevagtDQ1eKwU05n5uoSPA'
                }).addTo(mymap);
            
            
            //echo the data for further use in javascript
            var jsondata_murder = <?php echo $data_murder; ?>;
            var jsondata_sexual = <?php echo $data_sexual; ?>;
            var jsondata_robbery = <?php echo $data_robbery; ?>;
            var jsondata_arson = <?php echo $data_arson; ?>;
            var jsondata_stalking = <?php echo $data_stalking; ?>;  
            var jsondata_roadcrash = <?php echo $data_roadcrash; ?>; 

        </script>
        <script src="js/script.js"></script>

        <div class="copyright">
                © 2019 Team 15 RESERVED
        </div>
      
    </body>