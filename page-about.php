<?php
/*
Template Name: About
*/
?>
<?php get_header() ?>
        <div class="content">
<?php the_post() ?>
            <div id="page-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
                <?php
                $contact = get_field('contact');
                $team = get_field('team');
                $team1 = get_field('team-member');
                $team2 = get_field('team-member2');
                $team3 = get_field('team-member3');
                $credits = get_field('credits');
                ?>

                <div class="entry-content">
                  <ul id="about-nav">
                    <li><a href="#about">About the studio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#team">Team</a></li>
                  </ul>
                  <div id="about" class="section about">
                    <div class="section-content">
                      <?php the_content() ?>
                    </div>
                  </div>

                  <div id="contact" class="section contact">
                    <div class="section-content">
                      <div class="social">

                          <a href="http://facebook.com/bradley.rothenberg" target="_blank">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                               width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                            <g>
                              <defs>
                                <rect id="SVGID_1_" y="0.165" width="19.835" height="19.835"/>
                              </defs>
                              <clipPath id="SVGID_2_">
                                <use xlink:href="#SVGID_1_"  overflow="visible"/>
                              </clipPath>
                              <path clip-path="url(#SVGID_2_)" fill="#F0F0F0" d="M19.835,20V0.165H0V20h9.74v-8.745H8V8.739h1.74v-0.79V7.176V7.047
                                c0-0.744,0.019-1.895,0.561-2.607c0.57-0.754,1.354-1.266,2.7-1.266c2.194,0,3.118,0.312,3.118,0.312l-0.434,2.578
                                c0,0-0.726-0.209-1.402-0.209s-1.282,0.241-1.282,0.918v0.274v0.902v0.79h2.774l-0.194,2.516h-2.58V20H19.835z"/>
                            </g>
                            </svg>
                          </a>

                          <a href="http://instagram.com/bradleyrothenberg/" target="_blank">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                               width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                            <g>
                              <defs>
                                <rect id="SVGID_1_" y="0.165" width="19.835" height="19.835"/>
                              </defs>
                              <clipPath id="SVGID_2_">
                                <use xlink:href="#SVGID_1_"  overflow="visible"/>
                              </clipPath>
                              <path clip-path="url(#SVGID_2_)" fill="#F0F0F0" d="M6.026,8.223H6.013C5.997,8.257,5.985,8.293,5.969,8.328
                                c-0.015,0.036-0.03,0.071-0.045,0.106c-0.214,0.51-0.346,1.061-0.346,1.648c0,2.393,1.947,4.339,4.34,4.339
                                c2.392,0,4.337-1.946,4.337-4.339c0-0.59-0.133-1.145-0.349-1.657c-0.013-0.029-0.024-0.058-0.037-0.087
                                c-0.017-0.038-0.03-0.077-0.048-0.115h-0.015c-0.22-0.463-0.509-0.885-0.87-1.24h0.007c-0.11-0.108-0.239-0.196-0.36-0.292
                                c-0.091-0.072-0.173-0.154-0.27-0.218c-0.096-0.064-0.203-0.108-0.303-0.165c-0.142-0.079-0.277-0.166-0.428-0.229
                                c-0.13-0.054-0.271-0.084-0.405-0.126c-0.133-0.041-0.26-0.094-0.397-0.123c-0.279-0.056-0.568-0.086-0.863-0.086H9.917H9.917
                                c-0.112,0-0.216,0.024-0.325,0.032C9.411,5.79,9.229,5.795,9.056,5.83C8.791,5.884,8.535,5.966,8.289,6.067
                                c-0.011,0.004-0.023,0.006-0.034,0.01C8.037,6.167,7.833,6.286,7.633,6.411C7.598,6.432,7.559,6.447,7.525,6.469
                                C7.396,6.555,7.284,6.661,7.167,6.76C7.075,6.836,6.974,6.9,6.89,6.983h0.006C6.535,7.338,6.245,7.76,6.026,8.223"/>
                              <path clip-path="url(#SVGID_2_)" fill="#F0F0F0" d="M15.497,10.082c0,3.076-2.503,5.579-5.579,5.579s-5.58-2.503-5.58-5.579
                                c0-0.653,0.119-1.277,0.326-1.859H0V20h19.835V8.223h-4.663C15.379,8.805,15.497,9.429,15.497,10.082"/>
                              <path clip-path="url(#SVGID_2_)" fill="#F0F0F0" d="M18.596,3.884h-2.479V1.405h2.479V3.884z M0,0.165v6.817h5.281
                                c1.003-1.493,2.706-2.479,4.637-2.479c1.93,0,3.634,0.986,4.636,2.479h5.281V0.165H0z"/>
                            </g>
                            </svg>
                          </a>

                          <a href="https://twitter.com/brad_rothenberg" target="_blank">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                               width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                            <g>
                              <defs>
                                <rect id="SVGID_1_" x="0" y="2.001" width="20" height="16.999"/>
                              </defs>
                              <clipPath id="SVGID_2_">
                                <use xlink:href="#SVGID_1_"  overflow="visible"/>
                              </clipPath>
                              <path clip-path="url(#SVGID_2_)" fill="#F0F0F0" d="M20,4.014c-0.736,0.341-1.527,0.572-2.357,0.676
                                c0.847-0.531,1.499-1.372,1.804-2.375c-0.792,0.492-1.671,0.849-2.604,1.042c-0.749-0.834-1.815-1.355-2.995-1.355
                                c-2.266,0-4.104,1.921-4.104,4.291c0,0.336,0.037,0.664,0.105,0.978c-3.41-0.179-6.433-1.887-8.457-4.484
                                C1.039,3.421,0.836,4.158,0.836,4.945c0,1.489,0.725,2.802,1.826,3.572C1.989,8.494,1.356,8.301,0.803,7.98
                                c0,0.018,0,0.036,0,0.054c0,2.08,1.414,3.814,3.291,4.208c-0.345,0.098-0.707,0.15-1.081,0.15c-0.265,0-0.522-0.027-0.772-0.078
                                c0.522,1.705,2.037,2.947,3.833,2.98c-1.404,1.152-3.173,1.838-5.096,1.838c-0.332,0-0.658-0.021-0.979-0.061
                                C1.815,18.289,3.973,19,6.289,19c7.548,0,11.675-6.539,11.675-12.209c0-0.186-0.004-0.371-0.011-0.556
                                C18.754,5.63,19.449,4.875,20,4.014"/>
                            </g>
                            </svg>
                          </a>

                        </div>

                            <div class="contact-text-wrapper">
                              <?php echo $contact ?>
                              <?php // echo yksemeProcessSnippet('2e07a9a8cb', 'Ok'); ?>
                            </div>

                            <div id="map" class="map">
                              <div id="map-canvas"></div>
                              <div id="close-map">Close Map</div>
                            </div>
                          </div>
                      </div>

                  <div id="team" class="section team">
                    <div class="section-content">
                      <div id="brad">
                      <?php echo $team ?>
                      </div>
                      <div id="greg" class="team-member">
                        <?php echo $team1 ?>
                      </div>
                      <!-- <div id="brad2" class="team-member">
                        <?php echo $team2 ?>
                      </div>
                      <div id="gotham" class="team-member">
                        <?php echo $team3 ?>
                      </div> -->
                      <div class="credits">
                        <?php echo $credits ?>
                      </div>
                    </div>
                  </div>
                </div>
            </div><!-- .post -->
        </div><!-- .content -->
<?php get_footer() ?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  function initialize() {

    // Create an array of styles.
    var styles = [
      {
        stylers: [
          { "saturation": -100 },
          { "gamma": 0.88 }
        ]
      },{
        featureType: "road",
        elementType: "geometry",
        stylers: [
          { lightness: 100 },
          { visibility: "simplified" }
        ]
      },{
        featureType: "road",
        elementType: "labels",
        stylers: [
          { visibility: "on" }
        ]
      }
      ,{
        featureType: "poi",
        elementType: "labels",
        stylers: [
          { visibility: "off" }
        ]
      }
      ,{
        featureType: "transit",
        elementType: "labels",
        stylers: [
          { visibility: "off" }
        ]
      }
    ];

    // Create a new StyledMapType object, passing it the array of styles,
    // as well as the name to be displayed on the map type control.
    var styledMap = new google.maps.StyledMapType(styles,
      {name: "Styled Map"});

    var mapOptions = {
      center: new google.maps.LatLng(40.7182583 , -74.0032061),
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      panControl: false,
      scrollwheel: false,
      zoomControlOptions: {
          style: google.maps.ZoomControlStyle.LARGE,
          position: google.maps.ControlPosition.LEFT_CENTER
      },
      mapTypeControl: false
    };

    var map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);

    var image = new google.maps.MarkerImage(window.location.origin + '/wp-content/themes/bradleyrothenberg/images/map-11.svg',
        // This marker is 20 pixels wide by 32 pixels tall.
        new google.maps.Size(160, 160),
        // The origin for this image is 0,0.
        new google.maps.Point(0,0),
        // The anchor for this image is the base of the flagpole at 0,32.
        new google.maps.Point(85, 150));


    var marker = new google.maps.Marker({
          position: new google.maps.LatLng(40.7182583 , -74.0032061),
          map: map,
          title:"Bradley Rothenberg",
          icon: image
      });

    //Associate the styled map with the MapTypeId and set it to display.
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');

  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>

</body>
</html>
