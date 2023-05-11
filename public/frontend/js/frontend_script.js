let userBangObj = {};
const accessToken = 'pk.eyJ1Ijoid29ybGR3IiwiYSI6ImNsZ2psd3RsdDBnbnQzY29iaHl1OWNrMjUifQ.gBsEkpBcRLSho6G60Qyc3w';
let latLong = [-21.92661562, 64.14356426];

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function() {

      initFetchify();
      $("body").on('click','.back_home_page',function() {
            $("#nav-home").addClass('active');
            $("#nav-home").addClass('show');
            //
            $("#na-home").removeClass('active');
            $("#na-home").removeClass('show');
      });
      $("body").on('click','.get_home_bang',function() { 
          let bangType = $(this).attr('data-type');
          $(".bang_type").val(bangType);
          let bikeServiceImg = base_url+"/frontend/images/bike-card-plain.png";
          let tradepersonImg = base_url+"/frontend/images/img1.png";
          $(".bang_type_image").attr('src',tradepersonImg);
          if(bangType == "bikeservice"){
            $(".bang_type_image").attr('src',bikeServiceImg);
          } 
          userBangObj.bang_type = bangType;
          let bangTypeText = bangTypeTexUpperCase(bangType);
         // $(".request_bang_text").text(`You’re requesting the ${bangTypeText} BANG! for`);
           $(".home_bang_type_text").text(bangType);
           window.scrollTo(0, 0)
      });

      $("body").on('click','.c2a_results li',function() {
            let address = $(this).text();
            $(".search_address_input").val(address);
            $(".search_address_text").text(address);
            $(".address_request_bang").text(address);
            getLatLongByAddress(address, function(result){
               latLong = result;
              setTimeout(()=> {
                showMapAddress('address_map_1', latLong);
                showMapAddress('address_map_2', latLong);
              },500);
            });
      });
      $("body").on('click','.address_step_tab_button', function(e) {
          e.preventDefault(); 
          console.log('latLong', latLong);
          let isAddrValidate = addressValidate();
          if(isAddrValidate){
            showUserProfileStep();
            showMapAddress('address_map_1',latLong);
          }
      });

      $("body").on('click','.user_profile_step_button', function(e) {
          e.preventDefault(); 
          let isUserDetaiValidate = userDetailValidate();
          if(isUserDetaiValidate){
            showMapOnUserDetailStep();
            showMapAddress('address_map_2', latLong)
          }
      });
      $("body").on('click','.finish_steps_button', function(e) {
            finishSteps($(this));
      });


    });// end ready

    function bangTypeTexUpperCase(bangType){
      let bangTypeLabel = 'TRADESPERSON';
      if(bangType == "bikeservice"){
        bangTypeLabel = 'BIKESERVICE';
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
       let address = $(".search_address_input").val();
       $(".address_request_bang").text(address);
       userBangObj.address = address;
       if($.trim(address) == ""){
           toastr.error('Please enter address!', 'Error!');
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
             accessToken: '72336-c68cb-b16f6-08f3c',
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
  
    mapboxgl.accessToken = accessToken;
    const map = new mapboxgl.Map({
        container: containerId, // container ID
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/streets-v12', // style URL
        center: latLong, // starting position [lng, lat]
        zoom: 15// starting zoom
    });
    var marker = new mapboxgl.Marker( {
        /* anchor: 'bottom' */
      }).setLngLat(latLong).addTo(map);
}