let userBangObj = {};
const accessToken = 'pk.eyJ1Ijoid29ybGR3IiwiYSI6ImNsZ2psd3RsdDBnbnQzY29iaHl1OWNrMjUifQ.gBsEkpBcRLSho6G60Qyc3w';
let latLong = [-21.92661562, 64.14356426];
let stepNumber = 1;
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function() {

     // initFetchify();
       searchMapbox('address_map_1','');
     
       

      $("body").on('click','.back_home_page',function() {
             
            let stepNo =  $("#nav-tabContent").find('li.active').attr('data-id');
            // console.log('stepNumber', stepNumber);
            $("#geocoder").find('.mapboxgl-ctrl-geocoder:gt(0)').remove();
            if(stepNumber == 1){
              $(".main_inner_section").removeClass('selected_bike_card_active')
              $("#nav-home").show();
              $("#nav-home").addClass('show');
              $("#nav-profile").hide();
              $("#na-home").hide();
              $("#nav-contact").hide();

            }else if(stepNumber == 2){
             
              $("#nav-home").hide();
              $("#nav-profile").hide();
              $("#na-home").show();
              //$("#nav-home").removeClass('show');
              stepNumber = 1;

            }else if(stepNumber == 3){
              $("#nav-home").hide();
              $("#nav-profile").show();
              $("#na-home").hide();
              $("#nav-contact").hide();
             // $("#nav-home").removeClass('show');
              stepNumber = 2;
            }
           
      });
      $("body").on('click','.get_home_bang',function() { 
          $(".main_inner_section").removeClass('selected_bike_card_active')
          let bangType = $(this).attr('data-type');
          $(".bang_type").val(bangType);
          let bikeServiceImg = base_url+"/frontend/images/bike-card-plain.png";
          let tradepersonImg = base_url+"/frontend/images/img1.png";
          $(".bang_type_image").attr('src',tradepersonImg);
          if(bangType == "bikeservice"){
            $(".bang_type_image").attr('src',bikeServiceImg);
          } 
           userBangObj.bang_type = bangType;
           $(".home_bang_type_text").text((bangType == "bikeservice" ? 'bike service' : 'tradesperson'));
           stepNumber = 1;
           $(".sel_card_heading").html(`So you need a plumber? <br/> No problem!`);
           $(".sel_card_description").html(`The first price you should check is your home’s BANG! Price. Start by finding your home.`);
           $(".tradeperson_bike_step_acc_1").html(`A BANG! is an an exclusive price for a local plumber, heating engineer or electrician. Don’t worry other trades are coming soon.`);
           $(".tradeperson_bike_step_acc_2").html(`Each year we allocate your home with 1 tradesperson BANG! which can be used by you and the people you live with.`); 
           $(".tradeperson_bike_step_acc_3").html(`We only partner with local experts so not only do you get a great price you can be assured that the work is carried out by approved and reliable tradespeople.`); 
           $(".banner_step_3_text").text(`Your home's Tradesperson BANG! will arrive inside 24 hours!`);
           $(".home_bang_type_text_3").text('TRADESPERSON');
           if(bangType === "bikeservice"){
               $(".main_inner_section").addClass('selected_bike_card_active');
               $(".sel_card_heading").html(`Bike need a service? <br/> We’ve got you.`);
               $(".sel_card_description").html(`When your bike needs a service the first price you should check is your home’s bike service BANG! for 2023.`);
               $(".tradeperson_bike_step_acc_1").html(`A Bike Service BANG! is an exclusive price for 1 local bike service in 2023. If your bike needs a service this year make sure you check your home’s BANG! price first`);
               $(".tradeperson_bike_step_acc_2").html(`Each year we allocate your home with 1 bike service BANG! which can be used by you and the people you live with.`); 
               $(".tradeperson_bike_step_acc_3").html(`We partner up with expert local bike technicians to ensure you’re not just getting a fantastic price but you’re also getting a premium level bike service at the same time. After all, that’s what BANG! is all about.`); 
               $(".banner_step_3_text").text(`Your home's Bike service BANG! will arrive inside 24 hours!`);
          
               $(".home_bang_type_text_3").text('BIKE SERVICE');
            }
           let bangText = bangTypeTexUpperCase(bangType);
           $(".home_bang_type_text_capital").text(bangText);

           
           $('html, body').animate({ scrollTop: 0 }, 0);
           // show hide page
           $("#nav-home").removeClass('show');
           $("#nav-home").removeClass('active');
           $("#nav-home").hide();
           // show step page
           $("#na-home").show();
           $("#na-home").addClass('show');
           $("#na-home").addClass('active')
           
      });

      
      
      $("body").on('keyup','.mapboxgl-ctrl-geocoder--input',function() {
           let value = $(this).val();
           console.log('value', value);
           if($.trim(value) === ""){
               $(".search_address_text").html('');
           }
      }); 
      $("body").on('click','.confim_address_btn',function() {
          let status = true;
          $(".search_address_text").html('');
          let address = $(".mapboxgl-ctrl-geocoder--input").val();
          let apartmentNumber = $(".apartment_input").val();
          if($.trim(address) === ""){
            toastr.error('Please enter address!', 'Error!');
            status = false;
          }
          if(status){
               if($.trim(apartmentNumber) != ""){
                $(".search_address_text").html(`Flat ${apartmentNumber} , ${address}`);
               }else {
                $(".search_address_text").html(`${address}`);
               }
             
          }

          console.log('apartmentNumber', apartmentNumber , address);


      });
      $("body").on('click','.c2a_results li',function() {
            let address = $(this).text();
            $(".search_address_input").val(address);
            $(".search_address_text").text(address);
           
            getLatLongByAddress(address, function(result){
               latLong = result;
              setTimeout(()=> {
                //showMapAddress('address_map_1', latLong);
                //showMapAddress('address_map_2', latLong);
              },500);
            });
      });
      $("body").on('click','.address_step_tab_button', function(e) {
          e.preventDefault(); 
          $(".confim_address_btn").click();
          let isAddrValidate = addressValidate();
          if(isAddrValidate){
            let latLong = JSON.parse($("#latlang").val());
            showUserProfileStep();
            //showMapAddress('address_map_1',latLong);
              searchMapbox('address_map_1',latLong);
            stepNumber  = 2;
          }
      });

      $("body").on('click','.user_profile_step_button', function(e) {
          e.preventDefault(); 
          let isUserDetaiValidate = userDetailValidate();
          
          if(isUserDetaiValidate){
            showMapOnUserDetailStep();
           // showMapAddress('address_map_2', latLong);
            let latLong = JSON.parse($("#latlang").val());
            searchMapbox('address_map_2',latLong);
            stepNumber = 3;
          }
      });
      $("body").on('click','.finish_steps_button', function(e) {
            finishSteps($(this));
      });


    });// end ready

    function bangTypeTexUpperCase(bangType){
      let bangTypeLabel = 'TRADESPERSON';
      if(bangType == "bikeservice"){
        bangTypeLabel = 'Bike Service';
      }
      return bangTypeLabel;
    } 

    function finishSteps(obj){

        let bangId = generateUniqueNumber();
        let postalCode = $(".postal_code").val();
        // bang object
        userBangObj.bangId = bangId;
        userBangObj.postalCode = postalCode;
        //  return false;
        $(obj).addClass('disable_class');  
        $.ajax({
           url: base_url+"/bang_request/submit",
           method: 'POST',
           data: JSON.stringify(userBangObj),
           contentType: "application/json",
           success: function(response){ 
                 $(obj).removeClass('disable_class'); 
                 toastr.success('The bang request has been sent!', 'Thanks');
                 setTimeout(function(){
                     location.reload();
                 },3000);
                 
           }
         });
     }
 
     function showUserProfileStep(){
           $('#na-home').hide()
           $("#nav-profile").show();
           $("#nav-profile").removeClass('fade')
     }
 
     function showMapOnUserDetailStep(){
           $('#nav-home').hide()
           $("#nav-profile").hide();
           $("#nav-contact").show(); 
           $("#nav-contact").removeClass('fade')
     }
 
     function addressValidate(){
       let status = true;
       let address = $(".search_address_text").text();
       $(".address_request_bang").text(address);
       let bangType = $(".bang_type").val();
       let bangText = bangTypeTexUpperCase(bangType);
      $(".home_bang_type_text_capital").text(bangText);
       userBangObj.address = address;
       if($.trim(address) == ""){
           //toastr.error('Please enter address!', 'Error!');
           status = false;
       }
       return status;
     }
 
     function userDetailValidate(){
 
       let status = true;
       let firstName = $(".first_name").val();
       let lastName = $(".last_name").val();
       let userEmail = $(".user_email").val();
       let userMobileNumber = $(".user_mobile_number").val();
       if($.trim(firstName) == ""){
         toastr.error('Please enter first name!', 'Error!');
         status = false;
       }else if($.trim(lastName) == ""){
         toastr.error('Please enter last name!', 'Error!');
         status = false;
       }else if($.trim(userEmail) == ""){
         toastr.error('Please enter Email!', 'Error!');
         status = false;
       }else if($.trim(userMobileNumber) == ""){
         toastr.error('Please enter mobile number!', 'Error!');
         status = false;
       }
       //
       userBangObj.first_name = firstName;
       userBangObj.last_name = lastName;
       userBangObj.user_email = userEmail;
       userBangObj.mobile_number = userMobileNumber;
       return status;
     }
 
  
     function generateUniqueNumber() {
       let uniqueNumber = "";
       do {
         uniqueNumber = Math.floor(Math.random() * 100000).toString().padStart(5, '0');
       } while (uniqueNumber.charAt(0) === '0');
       return uniqueNumber;
    }
 
    // fetchify API 
     function initFetchify() {
         new clickToAddress({
             accessToken: '0f17e-fd43c-31f0d-08f77',
             dom: {
                 search:		'search_address',
                 town:		'town',
                 postcode:	'post_code',
                 country:	'country',
                 line_1:		'addr_line_1',
                 line_2:		'addr_line_2',
                 longitude:'addr_longitude',
                 latitude:'addr_latitude'
             },
             texts: {
                 default_placeholder: 'Find Address', 
             },
             showLogo: false,
             onResultSelected: function(c2a, elements, address){
                 let locality = address.locality;
                 let province = address.province;
                 let country_name = address.country_name;
                 let completeAddress = `${locality}  ${country_name}`;
                 $(".postal_code").val(address.postal_code);
                
               
             },
             gfxMode: 2
         });
     }
 
 
function getLatLongByAddress(postalCode, callback){
  
      const url = `https://api.mapbox.com/geocoding/v5/mapbox.places/${postalCode}.json?proximity=ip&access_token=` + accessToken;
      fetch(url)
        .then(response => response.json())
        .then(data => {
          // Handle the API response data here
          console.log('data.features', data.features);
          if(data.features.length > 0){
            let corrdinates = data.features[0].center;
            callback(corrdinates)
           
          }else {
            callback([-21.92661562, 64.14356426]);
          }
        })
        .catch(error => {
          // Handle any errors that occurred during the request
          callback(error)
          console.error(error);
        });

}

function showMapAddress(containerId, latLong){
  
    // mapboxgl.accessToken = accessToken;
    // const map = new mapboxgl.Map({
    //     container: containerId, // container ID
    //     // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
    //     style: 'mapbox://styles/mapbox/streets-v12', // style URL
    //     center: latLong, // starting position [lng, lat]
    //     zoom: 15// starting zoom
    // });
    // var marker = new mapboxgl.Marker( {
    //     /* anchor: 'bottom' */
    //   }).setLngLat(latLong).addTo(map);
}



function searchMapbox(container_dev,latLong){
 
   let latitudeLongitude = latLong;;
  if(latLong == ""){
    latitudeLongitude =  [-79.4512, 43.6568];
  }
  mapboxgl.accessToken = accessToken;
    const map = new mapboxgl.Map({
        container: container_dev,
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/streets-v12',
        center: latitudeLongitude,
        //center: [-79.4512, 43.6568],
        zoom: 15
    });
    var marker = new mapboxgl.Marker( {
        /* anchor: 'bottom' */
      }).setLngLat(latitudeLongitude).addTo(map);
    // Add the control to the map.
    const geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl
    });
    geocoder.on('result', (event) => {
      let placeName =  event.result.place_name;
      let latLong = event.result.geometry.coordinates;
      $("#latlang").val(JSON.stringify(latLong));
     // $(".search_address_text").text(placeName);
      //map.getSource('single-point').setData(event.result.geometry);
      });
    document.getElementById('geocoder').appendChild(geocoder.onAdd(map));

}