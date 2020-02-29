
function openSideMenu() {
    document.getElementById("sideMenu").style.width = "105px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeSideMenu() {
    document.getElementById("sideMenu").style.width = "0";
}

// bind the action of murder button
function onclickMurder() {
    document.getElementsByClassName("murderbtn");

    $.each(jsondata_murder.result.records, function(recordKey, recordValue) {
        var recordLocation = recordValue["District"];
        //console.log(recordLocation);
        if (recordLocation) {
            $.get('//nominatim.openstreetmap.org/search?format=json&q='+recordLocation, function(data_murder){
                console.log(data_murder);
                var lat = data_murder[5]['lat'];
                var lon = data_murder[5]['lon'];
                // console.log(lat);
                // console.log(lon);
                var p1 = L.marker([lat, lon]).addTo(mymap);
                
                p1.bindPopup("<h3>Victim numbers: "+ recordValue["Assault"] + "</h3><p>Gender: "+recordValue["Sex"]+"</p><p>Location: "+recordLocation+"</p>").openPopup();
                
             });
        }
    });
}

//bind the action of sexual offece button
function onclickSexual() {
    document.getElementsByClassName("sexualbtn");
    $.each(jsondata_sexual.result.records, function(recordKey, recordValue) {
        var recordLocation = recordValue["District"];
        //console.log(recordLocation);
        if (recordLocation) {
            $.get('//nominatim.openstreetmap.org/search?format=json&q='+recordLocation, function(data_sexual){
                console.log(data_sexual);
                var lat = data_sexual[4]['lat'];
                var lon = data_sexual[4]['lon'];
                // console.log(lat);
                // console.log(lon);
                var p1 = L.marker([lat, lon]).addTo(mymap);
                
                p1.bindPopup("<h3>Victim numbers: "+ recordValue["Assault"] + "</h3><p>Gender: "+recordValue["Sex"] + "<p>Age: "+ recordValue["Age"] + "</p><p>Location: "+recordLocation+"</p>").openPopup();
                
             });
        }
    });

}

//bind the action of robbery buttomn
function onclickRobbery() {
    document.getElementsByClassName("robberybtn");
    $.each(jsondata_robbery.result.records, function(recordKey, recordValue) {
        var recordLocation = recordValue["District"];
        //console.log(recordLocation);
        if (recordLocation) {
            $.get('//nominatim.openstreetmap.org/search?format=json&q='+recordLocation, function(data_robbery){
                console.log(data_robbery);
                var lat = data_robbery[1]['lat'];
                var lon = data_robbery[1]['lon'];
                // console.log(lat);
                // console.log(lon);
                var p1 = L.marker([lat, lon]).addTo(mymap);
                
                p1.bindPopup("<h3>Victim numbers: "+ recordValue["Assault"] + "</h3><p>Gender: "+recordValue["Sex"]+"</p><p>Location: "+recordLocation+"</p>").openPopup();
                
             });
        }
    });
    
}

//bind the action of arson button
function onclickArson() {
    document.getElementsByClassName("arsonbtn");
    $.each(jsondata_arson.result.records, function(recordKey, recordValue) {
        var recordLocation = recordValue["District"];
        //console.log(recordLocation);
        if (recordLocation) {
            $.get('//nominatim.openstreetmap.org/search?format=json&q='+recordLocation, function(data_arson){
                console.log(data_arson);
                var lat = data_arson[3]['lat'];
                var lon = data_arson[3]['lon'];
                // console.log(lat);
                // console.log(lon);
                var p1 = L.marker([lat, lon]).addTo(mymap);
                
                p1.bindPopup("<h3>Victim numbers: "+ recordValue["Assault"] + "</h3><p>Gender: "+recordValue["Sex"]+"</p><p>Location: "+recordLocation+"</p>").openPopup();
                
             });
        }
    });

}

//bind the action of stalking button
function onclickStalking() {
    document.getElementsByClassName("stalkbtn");
    $.each(jsondata_stalking.result.records, function(recordKey, recordValue) {
        var recordLocation = recordValue["District"];
        //console.log(recordLocation);
        if (recordLocation) {
            $.get('//nominatim.openstreetmap.org/search?format=json&q='+recordLocation, function(data_stalking){
                console.log(data_stalking);
                var lat = data_stalking[2]['lat'];
                var lon = data_stalking[2]['lon'];
                // console.log(lat);
                // console.log(lon);
                var p1 = L.marker([lat, lon]).addTo(mymap);
                
                p1.bindPopup("<h3>Victim numbers: "+ recordValue["Assault"] + "</h3><p>Gender: "+recordValue["Sex"]+"</p><p>Location: "+recordLocation+"</p>").openPopup();
                
             });
        }
    });

}


//bind the action of car accident
function onclickRoadCrash() {
    document.getElementsByClassName("drivingbtn");
    $.each(jsondata_roadcrash.result.records, function(recordKey, recordValue) {
        var recordLocation = recordValue["District"];
        //console.log(recordLocation);
        if (recordLocation) {
            $.get('//nominatim.openstreetmap.org/search?format=json&q='+recordLocation, function(data_roadcrash){
                console.log(data_roadcrash);
                var lat = data_roadcrash[0]['lat'];
                var lon = data_roadcrash[0]['lon'];
                // console.log(lat);
                // console.log(lon);
                var p1 = L.marker([lat, lon]).addTo(mymap);
                
                p1.bindPopup("<h3>Victim numbers: "+ recordValue["Assault"] + "</h3><p>Gender: "+recordValue["Sex"]+"</p><p>Location: "+recordLocation+"</p>").openPopup();
                
             });
        }
    });

}



 
// // The code below references we learn from thhe studio1 workshop
// //bind the action of car accident
// function onclickcaraccident(data) {

//     document.getElementsByClassName("drivingbtn");

//     $.each(data.result.records, function(recordKey, recordValue) {
// 		var recordLocation = recordValue["District"];
//         console.log(data.resut.records);
//         if (recordLocation) {
//             $.get('//nominatim.openstreetmap.org/search?format=json&q='+recordLocation, function(data){
//                 console.log(data);
//                 var lat = data[1]['lat'];
//                 var lon = data[1]['lon'];
//                 // console.log(lat);
//                 // console.log(lon);
//                 var p1 = L.marker([lat, lon]).addTo(mymap);
                
//                 p1.bindPopup("<h3>Victim numbers: "+ recordValue["Assault"] + "</h3><p>Gender: "+recordValue["Sex"]+"</p><p>Location: "+recordLocation+"</p>").openPopup();
                
//              });
//         }
//     });

// }

// $(document).ready(function() {

// 	var data = {
// 		resource_id: "fb7388be-8186-4fbb-84a8-7dbfa63ff378",
//         sql : "SELECT count(*) from \"fb7388be-8186-4fbb-84a8-7dbfa63ff378\" ",
// 	}

// 	$.ajax({
// 		url: "https://data.qld.gov.au/api/3/action/datastore_search_sql",
// 		data: data,
// 		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
// 		cache: true,
// 		success: function(data) {
// 			onclickcaraccident(data);
// 		}
// 	});
// });
