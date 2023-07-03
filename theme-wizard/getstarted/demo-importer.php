<div class="theme-offer">
	<?php
		//POST and update the customizer and other related data of VW Appointment Pro
      if(isset($_POST['submit'])){
        $data_array=[];
        $matchTheme=array(
          'vw-computer-repair-pro' => 'vw-bakery'
        );
        $newTheme = wp_get_theme();
          $themename = $newTheme->get_stylesheet();
          global $wpdb;
          if(isset($matchTheme[$themename])){
        $old_theme = $matchTheme[$themename];
          $checkWord = 'theme_mods_'.$themename;
          $mqr = "SELECT * FROM wp_options where option_name='$checkWord'";
          $result = $wpdb->get_row($mqr);
          if($result){
            $optionValue = $result->option_value;
            $data_array=unserialize($optionValue);
          }
        }

        $theme_mods_match_id = [
          'vw_computer_repair_pro_header_address_icon' => ['default'=> 'fas fa-location-arrow'],
          'vw_computer_repair_pro_header_address' => ['default'=> '455 Martinson, Los Angeles']
        ];

      //POST and update the customizer and other related data of VW Appointment Pro
        $home_id=''; $vw_blog_id=''; $contact_id='';
            // Create a front page and assigned the template
           if( get_page_by_title( 'home' ) == NULL ){
            $home_title = 'Home';
            $home_check = get_page_by_title($home_title);
            $home = array(
               'post_type' => 'page',
               'post_title' => $home_title,
               'post_status' => 'publish',
               'post_author' => 1,
               'post_slug' => 'home'
             );
            $home_id = wp_insert_post($home);
           }
           //Set the home page template
           add_post_meta( $home_id, '_wp_page_template', 'page-template/home-page.php' );

           //Set the static front page
           $home = get_page_by_title( 'Home' );
           update_option( 'page_on_front', $home->ID );
           update_option( 'show_on_front', 'page' );

            // Create a blog page and assigned the template
            $blog_title = 'Blog';
            $blog = array(
               'post_type' => 'page',
               'post_title' => $blog_title,
               'post_status' => 'publish',
               'post_author' => 1,
               'post_slug' => 'blog'
            );
            $blog_id = wp_insert_post($blog);
           

           //Set the blog page template
           add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-fullwidth-extend.php' );


          // Create a Page 
          if( get_page_by_title( 'Page' ) == NULL ){
           $page_title = 'Page ';
           $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel';

           $page_check = get_page_by_title($page_title);
           $vw_page = array(
           'post_type' => 'page',
           'post_title' => $page_title,
           'post_content'  => $content,
           'post_status' => 'publish',
           'post_author' => 1,
           'post_slug' => 'page'
           );
           $page_id = wp_insert_post($vw_page);
           }

          // Create a contact page and assigned the template
            $contact_title = 'Contact';
            $contact = array(
            'post_type' => 'page',
            'post_title' => $contact_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'contact'
            );
           $contact_id = wp_insert_post($contact);
          
           //Set the blog with right sidebar template
           add_post_meta( $contact_id, '_wp_page_template', 'page-template/contact.php' );


           /*customizer-custom-variables.php*/
           //Typography Section-First Highlight Color
           set_theme_mod( 'vw_computer_repair_pro_hi_first_color', '#ff7c93' );

           //Typography Section-Second Highlight Color
           set_theme_mod( 'vw_computer_repair_pro_hi_second_color', '#ff7c93' );

           /* customizer-part-topbar.php */
           /*Address*/
          foreach ($theme_mods_match_id as $kname => $idn) {
            if(!isset($data_array[$kname])){
              set_theme_mod($kname,$idn['default']);
            }
        }
           /* Call Number */
           set_theme_mod( 'vw_computer_repair_pro_header_callnumber', '123-456-7890' );

           /* Call Number */
           set_theme_mod( 'vw_computer_repair_pro_header_email_address', 'corporate@gmail.com' );

            /* Donate Now Button */
           set_theme_mod( 'vw_computer_repair_pro_header_btntext', 'Get Started' );
           set_theme_mod( 'vw_computer_repair_pro_header_search_icon', 'fas fa-search' );


            // -------------- Section Ordering ---------------
                   
            set_theme_mod( 'vw_computer_repair_pro_section_ordering_settings_repeater', 'about,services,products,our-records,gallery,choose-skills,why-choose-us,skills,our-team,testimonial-partner,testimonials,latest-posts,get-intouch,content-area' );



           /*customizer-part-slide.php*/
           //Slide Delay
          set_theme_mod( 'vw_computer_repair_pro_slide_delay', '10000' );
           
           //Number of slides to show section
           set_theme_mod( 'vw_computer_repair_pro_slide_heading_image', get_template_directory_uri().'/assets/images/pinkicon.png' );
           set_theme_mod( 'vw_computer_repair_pro_slide_number', '3' );
           //Slider Images section
           for($i=1; $i<=3; $i++) {
                 set_theme_mod( 'vw_computer_repair_pro_slide_image'.$i, get_template_directory_uri().'/assets/images/slides/slide'.$i.'.png' );
                  if(!isset($data_array['vw_computer_repair_pro_slide_heading'.$i])){
                   //Slide Heading Title section
                   set_theme_mod( 'vw_computer_repair_pro_slide_heading'.$i, 'WELCOME TO THE BAKERY' );
                }
                if(!isset($data_array['vw_computer_repair_pro_slide_text'.$i])){
                   //Slide Text section
                   set_theme_mod( 'vw_computer_repair_pro_slide_text'.$i, 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus.' );
                }
                if(!isset($data_array['vw_computer_repair_pro_slide_btnurl'.$i])){
                  set_theme_mod( 'vw_computer_repair_pro_slide_btnurl'.$i, '#' );
                }
                 //Slider Button Text section
                 set_theme_mod( 'vw_computer_repair_pro_slide_btntext'.$i, 'GET STARTED' );

                 //Slider Button Text section
                 set_theme_mod( 'vw_computer_repair_pro_slide_btntext2'.$i, 'CONTACT US' );
           }



           /*customizer-part-home.php*/
           //Home Contact details
              $count = set_theme_mod( 'vw_computer_repair_pro_home_contact_details_number', '4' );
              $box_content = array(" Opening Times:-", "Monday - Friday: 8AM - 8PM", "Saturday: 9AM - 4PM", "Sunday: Closed");
              for($i=1; $i<=4; $i++){
                 //Box Icon
                 set_theme_mod( 'vw_computer_repair_pro_home_contact_details_box'.$i, $box_content[$i-1] );
              }
              // Phone Text
              set_theme_mod( 'vw_computer_repair_pro_home_phone_text', 'Call Us For Knew Todays Menu' );
              // Phone
              set_theme_mod( 'vw_computer_repair_pro_home_phone_number', '+123 456 7890' );
              // Email Text
              set_theme_mod( 'vw_computer_repair_pro_home_email_text', 'Or Chat With Us For Knew Todays Menu' );
              // Email Address
              set_theme_mod( 'vw_computer_repair_pro_home_email_address', 'bakery@gmail.com' );
              // Button Text
              set_theme_mod( 'vw_computer_repair_pro_contact_homebtn_text', 'CONTACT US' );
              // Button URL
              set_theme_mod( 'vw_computer_repair_pro_contact_homebtn_url', '#' );
              set_theme_mod( 'vw_computer_repair_pro_home_phone_icon', 'fas fa-phone' );
              set_theme_mod( 'vw_computer_repair_pro_home_email_icon', 'fas fa-envelope-open' );


           //About section-
              //about Image
              set_theme_mod( 'vw_computer_repair_pro_about_section_image',get_template_directory_uri().'/assets/images/aboutimg.png' );
              //about icon Image
              set_theme_mod( 'vw_computer_repair_pro_about_heading_image',get_template_directory_uri().'/assets/images/pinkicon.png' );
              //Section Title
              set_theme_mod( 'vw_computer_repair_pro_about_title', 'Discover Our Story' );
              //Section Description
              set_theme_mod( 'vw_computer_repair_pro_about_description', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur.' );
              //button link text
              set_theme_mod( 'vw_computer_repair_pro_viewmore_btn_text', 'DISCOVER MORE' );

           //Services Tabs
              set_theme_mod( 'vw_computer_repair_pro_services_tab_sec_title', 'Services We Provide' );
              set_theme_mod( 'vw_computer_repair_pro_services_tab_number', '6' ); 
              set_theme_mod( 'vw_computer_repair_pro_services_tab_bgimage',get_template_directory_uri().'/assets/images/services-tab/servicesbg.png' );
              set_theme_mod( 'vw_computer_repair_pro_services_heading_image',get_template_directory_uri().'/assets/images/whitblue.png' );

              $service_title = array("Cake Design", "Best Cupcakes", "Desserts", "Home Delivery", "Cake Design", "Best Cupcakes" );
              for($i=1; $i<=6; $i++){
                  //Tab Image
                 set_theme_mod( 'vw_computer_repair_pro_services_tab_image'.$i,get_template_directory_uri().'/assets/images/services-tab/serviceicon'.$i.'.png' );
                 //Tab Title
                 set_theme_mod( 'vw_computer_repair_pro_services_title'.$i, $service_title[$i-1] ); 

                 //Tab Content
                 set_theme_mod( 'vw_computer_repair_pro_services_tab_content'.$i, 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. ' );
                 //Button Title
                 set_theme_mod( 'vw_computer_repair_pro_services_title_url'.$i, '#' ); 
              }

           /*----Popular Products----*/
            // Background Color
            set_theme_mod( 'vw_computer_repair_pro_products_bgcolor', '#f7f7f7' );
            // heading
            set_theme_mod( 'vw_computer_repair_pro_products_title_image', get_template_directory_uri().'/assets/images/pinkicon.png' );
            set_theme_mod( 'vw_computer_repair_pro_products_title', 'Our Popular Bakery Products' );
            // Product Count
            set_theme_mod( 'vw_computer_repair_pro_products_number', '4' );
            wp_insert_term(
            'Popular Products', // the term 
            'product_cat', // the taxonomy
            array(
            'description'=> 'This is Popular Products Category',
            'slug' => 'popular-products',
            'term_id'=>12,
            'term_taxonomy_id'=>34,
            )
            );
            for($i=1;$i<=4;$i++){
            $vw_title = 'Product Name'.$i;
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.';
                        // Create post object
            $my_post = array(
            'post_title'    => wp_strip_all_tags( $vw_title ),
            'post_content'  => $content,
            'post_status'   => 'publish',
            'post_type'     => 'product',
            );
            set_theme_mod( 'vw_computer_repair_pro_products_category', 'popular-products' );
            // Insert the post into the database
            $vw_post_id = wp_insert_post( $my_post );
            // Gets term object from Tree in the database. 
            $vw_term = get_term_by('name', 'Popular Products', 'product_cat');
            wp_set_object_terms($vw_post_id, $vw_term->term_id, 'product_cat');
            
            update_post_meta( $vw_post_id, '_regular_price', "30" );
            update_post_meta( $vw_post_id, '_sale_price', "25" );

            $image_url = get_template_directory_uri().'/assets/images/popular-products/product'.$i.'.png';

            $image_name= 'products'.$i.'.png';
            $upload_dir       = wp_upload_dir(); 
            // Set upload folder
            $image_data= file_get_contents($image_url); 
            // Get image data
            $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
            // Generate unique name
            $filename= basename( $unique_file_name ); 
            // Create image file name

            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
            $file = $upload_dir['path'] . '/' . $filename;
            } else {
            $file = $upload_dir['basedir'] . '/' . $filename;
            }

            // Create the image  file on the server
            file_put_contents( $file, $image_data );

            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );

            // Set attachment data
            $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title'     => sanitize_file_name( $filename ),
            'post_content'   => '',
            'post_type'     => 'post',
            'post_status'    => 'inherit'
            );
            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $vw_post_id );
            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
            // Assign metadata to attachment
            wp_update_attachment_metadata( $attach_id, $attach_data );
            // And finally assign featured image to post
            set_post_thumbnail( $vw_post_id, $attach_id );
           }

           //Events Section
           //Section Title
           set_theme_mod( 'vw_computer_repair_pro_events_title', 'Upcoming Events' ); 
           //Section Sub Title
           set_theme_mod( 'vw_computer_repair_pro_events_subtitle_title', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli .' );

           //Our Skills
           set_theme_mod( 'vw_computer_repair_pro_choose_skills_bgimage',get_template_directory_uri().'/assets/images/ourskillsbg.png' );
           //Section Title
           set_theme_mod( 'vw_computer_repair_pro_choose_skills_title', 'Our Skills' ); 
           // Title
           set_theme_mod( 'vw_computer_repair_pro_choose_skills_title_image',get_template_directory_uri().'/assets/images/whitblue.png' );

           //Why Choose us Section         
           //Number of Details to show
           set_theme_mod( 'vw_computer_repair_pro_choose_box_number', '3' ); 
           $choosetitle = array("We Use Fresh Ingredients", "We Bake With Love", "We Deliver On Time" );
           for($i=1; $i<=3; $i++){
                 //Box Icon
                 set_theme_mod( 'vw_computer_repair_pro_choose_box_image'.$i,get_template_directory_uri().'/assets/images/why-choose-us/whychoose'.$i.'.png' );
                 //Sub Title
                 set_theme_mod( 'vw_computer_repair_pro_choose_box_title'.$i, $choosetitle[$i-1] ); 
                 //Description
                 set_theme_mod( 'vw_computer_repair_pro_choose_box_des'.$i, 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia.' ); 
           }
           //Skills
               set_theme_mod( 'vw_computer_repair_pro_skills_number', '4' );
              //To set bar title and percentage
              for($i=1; $i<=4; $i++) {
                 if($i==1){
                    set_theme_mod( 'vw_computer_repair_pro_skills_bar_percent'.$i, '92%' );
                    set_theme_mod( 'vw_computer_repair_pro_skills_bar_title'.$i, 'All Types Of Breads & Croissants' );
                 }
                 if($i==2){
                    set_theme_mod( 'vw_computer_repair_pro_skills_bar_percent'.$i, '99%' );
                    set_theme_mod( 'vw_computer_repair_pro_skills_bar_title'.$i, 'All Types Of Cakes & Cupcakes' );
                 }
                 if($i==3){
                    set_theme_mod( 'vw_computer_repair_pro_skills_bar_percent'.$i, '80%' );
                    set_theme_mod( 'vw_computer_repair_pro_skills_bar_title'.$i, 'All Types Of Cookies & Chocolates' );
                 }
                 if($i==4){
                    set_theme_mod( 'vw_computer_repair_pro_skills_bar_percent'.$i, '90%' );
                    set_theme_mod( 'vw_computer_repair_pro_skills_bar_title'.$i, 'All Types Of Pastries & Muffins' );
                 }
              }

           //Team Section
           //Section Title
           set_theme_mod( 'vw_computer_repair_pro_team_title', 'Our Bakers' ); 
           //Title image
           set_theme_mod( 'vw_computer_repair_pro_team_title_image', get_template_directory_uri().'/assets/images/pinkicon.png');

           //Gallery
              //Title Image
              set_theme_mod( 'vw_computer_repair_pro_gallery_section_title', 'Some Of Our Creations' ); 
              //Heading Image
              set_theme_mod( 'vw_computer_repair_pro_gallery_section_title_image', get_template_directory_uri().'/assets/images/pinkicon.png' );
              //Shortcode
              set_theme_mod( 'vw_computer_repair_pro_gallery_shortcode', '[vw-galleryshow vw_gallery="80" numberofitem="6" bootstraponecolsize="4"]' ); 

           //Our Records section- 
              //background image
              set_theme_mod( 'vw_computer_repair_pro_our_records_bg_image', get_template_directory_uri().'/assets/images/counterbg.png');
              //Number of counter to show section
              set_theme_mod( 'vw_computer_repair_pro_our_records_number', '4' );
              set_theme_mod( 'vw_computer_repair_pro_our_team_excerpt_no', 40 );
              $recordnumber = array("1200", "550", "80000", "6400" );
              $recordtext = array("Happy Customers", "Cooked Dishes", "Social Media Fans", "Worked Hours" );
              for($i=1; $i<=4; $i++){
                    set_theme_mod( 'vw_computer_repair_pro_our_records_image'.$i, get_template_directory_uri().'/assets/images/counter'.$i.'.png' );
                    //counter Number
                    set_theme_mod( 'vw_computer_repair_pro_number_title1'.$i, $recordnumber[$i-1] );
                    //Counter Title
                    set_theme_mod( 'vw_computer_repair_pro_circle_content1'.$i, $recordtext[$i-1] );
              }

           //Testimonial Partner BG
              set_theme_mod( 'vw_computer_repair_pro_testimonial_partner_bgimage', get_template_directory_uri().'/assets/images/testimonial_partner.png' );

           //Testimonial Section
              //Title
              set_theme_mod( 'vw_computer_repair_pro_testimonial_title', 'What People Say' ); 
              //Title Image
              set_theme_mod( 'vw_computer_repair_pro_testimonial_title_image', get_template_directory_uri().'/assets/images/whitepink.png' );

           //Our Partners
              set_theme_mod( 'vw_computer_repair_pro_partners_title', 'Our Partners' ); 
              //Title Image
              set_theme_mod( 'vw_computer_repair_pro_partners_title_image', get_template_directory_uri().'/assets/images/whitepink.png' );
              //Number of boxes to show
              set_theme_mod( 'vw_computer_repair_pro_our_partners_number', '4' );
              //vw_computer_repair_pro_our_partners_image
              for($i=1; $i<=4; $i++) {
                    set_theme_mod( 'vw_computer_repair_pro_our_partners_image'.$i, get_template_directory_uri().'/assets/images/partners/partner'.$i.'.png' );
              }

           //Latest Post
           //Section Title
            set_theme_mod( 'vw_computer_repair_pro_latestpost_title', 'Our Blog' );
            set_theme_mod( 'vw_computer_repair_pro_latestblogpost_readmore', 'READ MORE' );
            set_theme_mod( 'vw_computer_repair_pro_our_post_excerpt_no', 25 );

           //Get In Touch
              set_theme_mod( 'vw_computer_repair_pro_getintouch_bgimage', get_template_directory_uri().'/assets/images/getintouchbg.png' );
              $count = set_theme_mod( 'vw_computer_repair_pro_getintouch_number', '4' );
              $box_icon = array("fas fa-map-marker-alt", "fas fa-phone", "fas fa-envelope", "far fa-clock");
              $box_content = array("351 Montreal Ave, Staten Island, NY 10306", "Mon - Sat: 08 Am - 17 Pm", "1234567890", "Expample@gmail.com",);
              for($i=1; $i<=4; $i++){
                //Box Icon
                set_theme_mod( 'vw_computer_repair_pro_getintouch_box_icon'.$i, $box_icon[$i-1] );
                //Box Text
                set_theme_mod( 'vw_computer_repair_pro_getintouch_box'.$i, $box_content[$i-1] );
              }

           /*customizer-part-social-icons.php*/
           //twitter link
           set_theme_mod( 'vw_computer_repair_pro_headertwitter', 'https://twitter.com/' ); 
           //facebook link 
           set_theme_mod( 'vw_computer_repair_pro_headerfacebook', 'https://www.facebook.com/' ); 
           //Linkedin link
           set_theme_mod( 'vw_computer_repair_pro_headerlinkedin', 'https://www.linkedin.com' ); 
           //GooglePlus link
           set_theme_mod( 'vw_computer_repair_pro_headergoogleplus', 'https://plus.google.com/' ); 

           /*customizer-part-footer.php*/
           //Background image
           set_theme_mod( 'vw_computer_repair_pro_section_footer_bgcolor', '#ff7c93' );
           // Title
           set_theme_mod( 'vw_computer_repair_pro_subscribe_title', 'Subscribe' );
           // Sub Title
           set_theme_mod( 'vw_computer_repair_pro_subscribe_subtitle', 'Sign Up with your email to get fresh updates.' );
           // Shortcode
           set_theme_mod( 'vw_computer_repair_pro_subscribe_form_code', 'Add Contact Form 7 Shortcode Here' );


           //Contact Page
           //Longitude
           set_theme_mod( 'vw_computer_repair_pro_address_longitude', '-80.053361' ); 
           //Latitude
           set_theme_mod( 'vw_computer_repair_pro_address_latitude', '26.704241' ); 
           //Email Title text
           set_theme_mod( 'vw_computer_repair_pro_contactpage_email_title', 'Email: ' ); 
           //Email ID
           set_theme_mod( 'vw_computer_repair_pro_contactpage_email', 'business@gmail.com' ); 
           //Address Title text
           set_theme_mod( 'vw_computer_repair_pro_address_title', 'Address' ); 
           //Address
           set_theme_mod( 'vw_computer_repair_pro_address', '455 Martinson, Los Angeles' ); 
           //Phone Title text
           set_theme_mod( 'vw_computer_repair_pro_contactpage_phone_title', 'Phone' ); 
           //Phone No.
           set_theme_mod( 'vw_computer_repair_pro_contactpage_phone', '123-456-7890' );

           //Working Hours Title
           set_theme_mod( 'vw_computer_repair_pro_contactpage_working_hours_title', 'Working Hours' );

           $working_number = set_theme_mod( 'vw_computer_repair_pro_contactpage_working_number', '3' );
           $days_hour = array("Monday-Friday, 8am - 6pm", "Saturday, 8am - 2pm", "Sunday - Closed" );
           for($i=1;$i<=3;$i++){ 
              //Working Days
              set_theme_mod( 'vw_computer_repair_pro_contactpage_working_hours'.$i, $days_hour[$i-1] ); 
           }

           //Contact From Title
           set_theme_mod( 'vw_computer_repair_pro_contactpage_form_title', 'SAY HELLO!' ); 
           //Phone No.
           set_theme_mod( 'vw_computer_repair_pro_contactpage_form_subtitle', 'We would love to hear from you!' );  

           //footer text
           //Copyright Text
           set_theme_mod( 'vw_computer_repair_pro_footer_copy', 'Bakery Shop WordPress Theme 2018 | All Rights Reserved.' ); 
           
           //Shortcode
           set_theme_mod( 'vw_computer_repair_pro_shortcode', '[vw-computer-repair-pro-testimonials], [vw-computer-repair-pro-team]' );
              
           /*--- Latest Post---*/
            for($i=1;$i<=3;$i++){
              $vw_title = 'Praesent suscipit m'.$i;
              $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me.';
                // Create post object
              $my_post = array(
              'post_title'    => wp_strip_all_tags( $vw_title ),
              'post_content'  => $content,
              'post_status'   => 'publish',
              'post_type'     => 'post',
              );

              // Insert the post into the database
              $vw_post_id = wp_insert_post( $my_post );

              $image_url = get_template_directory_uri().'/assets/images/blog/blog'.$i.'.png';

              $image_name       = 'news'.$i.'.png';
              $upload_dir       = wp_upload_dir(); // Set upload folder
              $image_data       = file_get_contents($image_url); // Get image data
              $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
              $filename         = basename( $unique_file_name ); // Create image file name

              // Check folder permission and define file location
              if( wp_mkdir_p( $upload_dir['path'] ) ) {
                $file = $upload_dir['path'] . '/' . $filename;
              } else {
                $file = $upload_dir['basedir'] . '/' . $filename;
              }

              // Create the image  file on the server
              file_put_contents( $file, $image_data );

              // Check image file type
              $wp_filetype = wp_check_filetype( $filename, null );

              // Set attachment data
              $attachment = array(
                'post_mime_type' => $wp_filetype['type'],
                'post_title'     => sanitize_file_name( $filename ),
                'post_content'   => '',
                'post_type'     => 'post',
                'post_status'    => 'inherit'
              );

              // Create the attachment
              $attach_id = wp_insert_attachment( $attachment, $file, $vw_post_id );

              // Include image.php
              require_once(ABSPATH . 'wp-admin/includes/image.php');

              // Define attachment metadata
              $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

              // Assign metadata to attachment
              wp_update_attachment_metadata( $attach_id, $attach_data );

              // And finally assign featured image to post
              set_post_thumbnail( $vw_post_id, $attach_id );
        }
                  
            /*--- Testimonial---*/
            set_theme_mod( 'vw_computer_repair_pro_our_testimonial_excerpt_no', 25 );
            for($i=1;$i<=4;$i++){
              $vw_title = 'Testimonial'.$i;
              $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me.';
                // Create post object
              $my_post = array(
              'post_title'    => wp_strip_all_tags( $vw_title ),
              'post_content'  => $content,
              'post_status'   => 'publish',
              'post_type'     => 'testimonials',
              );

              // Insert the post into the database
              $vw_post_id = wp_insert_post( $my_post );

                // Now replafile_urice meta w/ new updated value array
                update_post_meta( $vw_post_id, 'vw_computer_repair_pro_posttype_testimonial_desigstory', 'Teacher');

              $image_url = get_template_directory_uri().'/assets/images/testimonials/testimonial'.$i.'.png';

              $image_name       = 'testimonial'.$i.'.png';
              $upload_dir       = wp_upload_dir(); // Set upload folder
              $image_data       = file_get_contents($image_url); // Get image data
              $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
              $filename         = basename( $unique_file_name ); // Create image file name

              // Check folder permission and define file location
              if( wp_mkdir_p( $upload_dir['path'] ) ) {
                $file = $upload_dir['path'] . '/' . $filename;
              } else {
                $file = $upload_dir['basedir'] . '/' . $filename;
              }

              // Create the image  file on the server
              file_put_contents( $file, $image_data );

              // Check image file type
              $wp_filetype = wp_check_filetype( $filename, null );

              // Set attachment data
              $attachment = array(
                'post_mime_type' => $wp_filetype['type'],
                'post_title'     => sanitize_file_name( $filename ),
                'post_content'   => '',
                'post_type'     => 'testimonials',
                'post_status'    => 'inherit'
              );

              // Create the attachment
              $attach_id = wp_insert_attachment( $attachment, $file, $vw_post_id );

              // Include image.php
              require_once(ABSPATH . 'wp-admin/includes/image.php');

              // Define attachment metadata
              $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

              // Assign metadata to attachment
              wp_update_attachment_metadata( $attach_id, $attach_data );

              // And finally assign featured image to post
              set_post_thumbnail( $vw_post_id, $attach_id );
        } 
              
            /*---Team Post ---*/ 
            for($i=1;$i<=4;$i++){
            $vw_title = 'Team'.$i;
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me';

              // Create post object
            $my_post = array(
              'post_title'    => wp_strip_all_tags( $vw_title ),
              'post_content'  => $content,
              'post_status'   => 'publish',
                 'post_type'     => 'team',
            );

            // Insert the post into the database
            $vw_post_id = wp_insert_post( $my_post );

            // Now replace meta w/ new updated value array
              update_post_meta( $vw_post_id, 'meta-desig', 'team@gmail.com');
              update_post_meta( $vw_post_id, 'meta-call', '123-456-789');
              update_post_meta( $vw_post_id, 'meta-facebookurl', 'https://www.facebook.com/');
              update_post_meta( $vw_post_id, 'meta-linkdenurl', 'https://www.linkedin.com');
              update_post_meta( $vw_post_id, 'meta-twitterurl', 'https://twitter.com/');
              update_post_meta( $vw_post_id, 'meta-googleplusurl', 'https://plus.google.com' );
              update_post_meta( $vw_post_id, 'meta-designation', 'Bakers');

              $image_url = get_template_directory_uri().'/assets/images/team/team'.$i.'.png';

              $image_name       = 'team'.$i.'.png';
              $upload_dir       = wp_upload_dir(); // Set upload folder
              $image_data       = file_get_contents($image_url); // Get image data
              $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
              $filename         = basename( $unique_file_name ); // Create image file name

              // Check folder permission and define file location
              if( wp_mkdir_p( $upload_dir['path'] ) ) {
                $file = $upload_dir['path'] . '/' . $filename;
              } else {
                $file = $upload_dir['basedir'] . '/' . $filename;
              }

              // Create the image  file on the server
              file_put_contents( $file, $image_data );

              // Check image file type
              $wp_filetype = wp_check_filetype( $filename, null );

              // Set attachment data
              $attachment = array(
                'post_mime_type' => $wp_filetype['type'],
                'post_title'     => sanitize_file_name( $filename ),
                'post_content'   => '',
                'post_type'     => 'team',
                'post_status'    => 'inherit'
              );

              // Create the attachment
              $attach_id = wp_insert_attachment( $attachment, $file, $vw_post_id );

              // Include image.php
              require_once(ABSPATH . 'wp-admin/includes/image.php');

              // Define attachment metadata
              $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

              // Assign metadata to attachment
              wp_update_attachment_metadata( $attach_id, $attach_data );

              // And finally assign featured image to post
              set_post_thumbnail( $vw_post_id, $attach_id );
              
                  
            }
            /* ------------- Responsive Media Settings ------------ */

          set_theme_mod( 'vw_computer_repair_pro_res_open_menu_icon', 'fas fa-bars' );
          set_theme_mod( 'vw_computer_repair_pro_res_close_menus_icon', 'fas fa-times' );
           //post setting
          set_theme_mod( 'vw_computer_repair_pro_related_posts_title', 'Related Posts' );
          set_theme_mod( 'vw_computer_repair_pro_related_post_count', 3 );
          set_theme_mod( 'vw_computer_repair_pro_blog_category_prev_title', 'Previous' );
          set_theme_mod( 'vw_computer_repair_pro_blog_category_next_title', 'Next' );
         
      } 
    ?>
    <ul>
		<li>
			<hr>
			<span class="dashicons dashicons-format-aside"></span><?php _e('Click on the below content to get demo content installed.','vw-computer-repair-pro'); ?>
			<br><small><b><?php _e('Please take backup if your website is already live with data.This importer will fill the VW Appointment Pro new customizer values.','vw-computer-repair-pro'); ?></b></small>
			<br><br>
	        <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=vw_computer_repair_pro_guide" method="POST" onsubmit="return validate(this);">
	            <input type="submit" name="submit" value="<?php esc_html_e('Run Importer','vw-computer-repair-pro'); ?>" class="button button-primary button-large">
	        </form>
			 <script type="text/javascript">
				function validate(valid) {
    				 if(confirm("Do you really want to do this?")){
					    document.forms[0].submit();
					}
				    else {
					    return false;
				    }
				}
			</script>
			<hr>
		</li>
	</ul>
</div>