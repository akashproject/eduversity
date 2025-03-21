@extends('layouts.main')
    @section('content')
    <!-- Start Hero Section -->
    <section class="td_hero td_style_1 td_center td_bg_filed">
      <div class="container">
        <div class="td_hero_text wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.35s">
          <h1 class="td_hero_title td_fs_64 td_mb_12">Dream University Just a Click Away. </h1>
          <p class="td_hero_subtitle td_fs_18 td_opacity_7">Explore a list of unique power-packed graduation programs.</p>
        </div>
      </div>
      <div class="td_lines">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </section>
    <!-- Start Courses Section -->
    <section class="td_yellow_bg_4">
      <div class="container-fluid">
        <div class="td_tabs td_style_1">
          <div class="td_section_heading py-2 wow fadeInUp mb-2" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="row">
              <div class="td_section_heading_left col-md-8 trendline_title">
                <h5 class="td_section_title mb-0">Trending Courses</h5>
              </div>
              <div class="td_section_heading_right col-md-4 text-right trendline_button">
                <a href="{{ url('courses') }}" class="td_btn td_style_1 td_radius_10 td_medium">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span> Explore All</span>
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                  </span>             
                </a>
              </div>
            </div>
          </div>
          <div class="td_tab_body">
            <div class="">
                <div class="three_td_slider td_style_1 td_slider_gap_24 td_remove_overflow">
                  <div class="td_three_slider_container" data-autoplay="0" data-loop="3" data-speed="800" data-center="0" data-variable-width="3" data-slides-per-view="responsive" data-xs-slides="4" data-sm-slides="4" data-md-slides="4" data-lg-slides="5" data-add-slides="4">
                    <div class="td_three_slider_wrapper">
                      @foreach($courses as $key => $course )
                        <div class="td_slide">
                          <div class="td_card td_style_5 td_type_3 bg-white p-3">
                            <div class="td_card_content">
                              <h5 class="td_card_title td_semibold td_mb_12"><a href="{{ $course->slug }}">{{ $course->name }}</a></h5>
                              <ul class="td_card_meta td_mp_0 td_fs_16 td_heading_color">
                                <li>
                                  <img src="assets/frontend/img/icons/book.svg" alt="">
                                  <span class="td_opacity_7">{{ $course->no_of_module }} Modules</span>
                                </li>
                                <li>
                                  <i class="fa-solid fa-clock"></i>
                                  <span class="td_opacity_7">{{ $course->duration }}</span>
                                </li>
                              </ul>
                              <hr>
                              <div class="td_card_price_wrap td_mb_12 mt-2">
                                <ul class="td_card_meta td_mp_0 td_fs_16 td_heading_color">
                                  <li>
                                    <img src="assets/frontend/img/icons/user_3.svg" alt="">
                                    <span class="td_opacity_7">{{ $course->number_of_enrolled }} No of Enrolled</span>
                                  </li>
                                </ul>
                                <a href="#lead-generate-popup" class="td_btn td_style_1 td_type_3 td_radius_10 td_medium td_fs_14 open-popup-link">
                                  <span class="td_btn_in td_accent_color">
                                    <span><i class="fa-solid fa-download"></i> Brochure</span>
                                  </span>             
                                </a>
                              </div>
                              <div class="td_card_btns_wrap">
                                <a href="{{ route('course-detail',$course->slug) }}" class="td_btn td_style_1 td_type_3 td_radius_10 td_medium td_fs_14">
                                  <span class="td_btn_in td_accent_color">
                                    <span>View More</span>
                                  </span>             
                                </a>
                                <div class="td_card_review">
                                  <div class="td_rating" data-rating="4.5">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="td_rating_percentage">
                                      <i class="fa-solid fa-star fa-fw"></i>
                                      <i class="fa-solid fa-star fa-fw"></i>
                                      <i class="fa-solid fa-star fa-fw"></i>
                                      <i class="fa-solid fa-star fa-fw"></i>
                                      <i class="fa-solid fa-star fa-fw"></i>
                                    </div>
                                  </div>
                                  <span class="td_heading_color td_opacity_5 td_fs_14">(4.5/5 Ratings)</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="td_height_40 td_height_lg_30"></div>
                  <div class="td_slider_arrows td_style_1 td_type_2">
                    <div class="td_left_arrow td_accent_bg td_radius_10 td_center td_white_color">
                      <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.00194 6.00024L17.002 6.00024" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.00191 1C6.00191 1 1.00196 4.68244 1.00195 6.00004C1.00194 7.31763 6.00195 11 6.00195 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>                            
                    </div>
                    <div class="td_right_arrow td_accent_bg td_radius_10 td_center td_white_color">
                      <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.002 5.99976L1.00195 5.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.002 11C12.002 11 17.0019 7.31756 17.002 5.99996C17.002 4.68237 12.002 1 12.002 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>                               
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
       <!-- End Courses Section -->
      <div class="container">
        <div class="td_hero_btn_group">
          <a href="#lead-generate-popup" class="td_btn td_style_1 td_radius_10 td_medium td_fs_20 wow fadeInUp open-popup-link" data-wow-duration="0.9s" data-wow-delay="0.35s">
            <span class="td_btn_in td_white_color td_accent_bg">
              <span>Apply Now</span>
              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg> 
            </span>             
          </a>
          <a href="#lead-generate-popup" class="td_btn td_style_1 td_radius_10 td_medium td_fs_20 wow fadeInUp open-popup-link" data-wow-duration="0.9s" data-wow-delay="0.35s">
            <span class="td_btn_in td_white_color td_accent_bg">
              <span>Request Info</span>
              <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.7945 12.2734H8.95703C8.74129 12.2734 8.56641 12.4484 8.56641 12.6641V14.768C8.56641 14.9837 8.74129 15.1587 8.95703 15.1587H10.7945C11.0102 15.1587 11.1851 14.9837 11.1851 14.768V12.6641C11.1851 12.4483 11.0102 12.2734 10.7945 12.2734ZM10.4038 14.3774H9.34766V13.0547H10.4038V14.3774Z" fill="currentColor"/>
                <path d="M13.0728 5.01978C12.7536 4.76443 12.3872 4.57568 11.9835 4.45861C10.202 3.94346 8.23896 4.61154 7.50396 6.33584C7.43154 6.5058 7.48806 6.7033 7.63951 6.80916L9.08424 7.81908C9.26111 7.94267 9.50451 7.89955 9.62814 7.72279C9.69381 7.62896 9.76912 7.5208 9.85353 7.39881C9.99142 7.19982 10.1816 7.0499 10.397 6.94576C10.489 6.90123 10.5962 6.87959 10.7247 6.87959C10.9277 6.87959 11.1021 6.93791 11.2577 7.05779C11.3854 7.15627 11.4423 7.28365 11.4423 7.47084C11.4423 7.60982 11.4012 7.72803 11.3129 7.84279C10.9575 8.30463 10.4116 8.55889 9.86623 8.85221C9.58689 9.00271 9.35529 9.17463 9.17787 9.36326C8.99771 9.55474 8.85728 9.76459 8.76064 9.9867C8.66752 10.2002 8.60357 10.4253 8.57072 10.6556C8.54017 10.8694 8.52466 11.0956 8.52466 11.3281C8.52466 11.5438 8.69955 11.7187 8.91529 11.7187H10.7668C10.9825 11.7187 11.1574 11.5438 11.1574 11.3281C11.1574 11.2158 11.1831 11.1262 11.2361 11.054C11.3113 10.9515 11.415 10.8558 11.5446 10.7694C11.971 10.485 12.1675 10.4474 12.6908 10.0988C13.1681 9.79709 13.5367 9.43678 13.7863 9.02787C14.043 8.60728 14.1732 8.0881 14.1732 7.48482C14.1732 6.92166 14.0697 6.42881 13.8654 6.01959C13.6629 5.61494 13.3962 5.27853 13.0728 5.01978ZM13.1195 8.62096C12.9324 8.92744 12.6465 9.2033 12.2698 9.44084C12.2104 9.47803 12.018 9.61357 11.7039 9.77424C11.4899 9.88385 11.2904 10 11.1112 10.1195C10.9053 10.2567 10.7354 10.4158 10.6062 10.592C10.5289 10.6973 10.471 10.8128 10.4325 10.9376H9.32384C9.38525 10.2872 9.62193 9.87127 10.2365 9.54021C10.8783 9.19498 11.4781 8.9092 11.9322 8.3192C12.1255 8.06775 12.2235 7.78236 12.2235 7.47092C12.2235 7.0426 12.0545 6.68584 11.7346 6.43908C11.4411 6.21303 11.1014 6.09842 10.7247 6.09842C10.479 6.09842 10.2543 6.14693 10.0567 6.24256C9.47986 6.52142 9.24478 6.91709 9.21091 6.95451L8.36205 6.36111C8.56916 5.99974 8.85256 5.71349 9.22185 5.49123C9.98404 5.03264 10.9217 4.9649 11.7661 5.20908C12.0706 5.29736 12.3461 5.43892 12.5847 5.62986C12.8193 5.81756 13.0152 6.06631 13.1666 6.36892C13.3161 6.66849 13.392 7.04396 13.392 7.4849C13.392 7.94252 13.3003 8.32474 13.1195 8.62096Z" fill="currentColor"/>
                <path d="M10.5 1.32812C5.75047 1.32812 1.90625 5.17172 1.90625 9.92188C1.90625 11.5843 2.37914 13.1897 3.27582 14.5779L2.08254 18.1577C1.98266 18.4573 2.26367 18.7482 2.56801 18.6546L6.39953 17.4756C7.65207 18.1565 9.06594 18.5156 10.5 18.5156C15.2495 18.5156 19.0938 14.672 19.0938 9.92184C19.0938 5.17238 15.2502 1.32812 10.5 1.32812ZM10.5 17.7343C9.14422 17.7343 7.80855 17.3815 6.63734 16.7139C6.54387 16.6606 6.4323 16.6481 6.32902 16.6799L3.06375 17.6846L4.07715 14.6444C4.11562 14.529 4.09812 14.4023 4.02984 14.3016C3.15168 13.007 2.6875 11.4925 2.6875 9.92188C2.6875 5.61406 6.19219 2.10938 10.5 2.10938C14.8078 2.10938 18.3125 5.61406 18.3125 9.92188C18.3125 14.2296 14.8078 17.7343 10.5 17.7343Z" fill="currentColor"/>
              </svg> 
            </span>             
          </a>
          <a href="#lead-generate-popup" class="td_btn td_style_1 td_radius_10 td_medium td_fs_20 wow fadeInUp open-popup-link" data-wow-duration="0.9s" data-wow-delay="0.35s">
            <span class="td_btn_in td_white_color td_accent_bg">
              <span>Chat With Us</span>
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_34_1694)">
              <path d="M2.80635 15.5992C2.13805 15.5992 1.48514 15.4286 0.893423 15.0964C0.588974 14.9396 0.471056 14.5473 0.652933 14.2522C1.25723 13.2866 1.47544 12.1062 1.19876 10.9962C0.911987 9.84535 0.497046 8.87611 0.500016 7.65782C0.510313 3.38361 4.06791 -0.0814611 8.33776 0.0014578C12.4619 0.0845253 15.8608 3.55138 15.8609 7.67663C15.8609 13.0643 10.2146 16.8469 5.22991 14.7664C4.54285 15.3057 3.67925 15.5992 2.80635 15.5992ZM1.99429 14.2838C2.93328 14.5754 3.98934 14.3424 4.71344 13.6424C4.89185 13.4699 5.15872 13.4265 5.38258 13.5335C9.65016 15.5739 14.6728 12.3758 14.6727 7.67663C14.6727 4.17008 11.8201 1.2599 8.31385 1.1893C4.70047 1.11752 1.69682 4.04399 1.68811 7.66069C1.68529 8.81785 2.13676 9.74263 2.38349 10.8388C2.64343 11.994 2.50651 13.2155 1.99429 14.2838Z" fill="currentColor"/>
              <path d="M18.193 20.0027C17.3201 20.0027 16.4565 19.7092 15.7695 19.17C13.1186 20.2763 9.96528 19.7725 7.79172 17.8954C7.5434 17.6809 7.51598 17.3059 7.73038 17.0575C7.94483 16.8092 8.31992 16.7817 8.56823 16.9962C10.496 18.661 13.3193 19.0355 15.6168 17.9371C15.8406 17.83 16.1074 17.8735 16.2859 18.046C17.01 18.746 18.0661 18.9791 19.0051 18.6873C18.4008 17.427 18.3171 15.9831 18.7854 14.6464C18.7896 14.6344 18.7942 14.6225 18.7991 14.6108C19.1411 13.8046 19.3134 12.9478 19.3113 12.0642C19.3075 10.5065 18.7893 9.06544 17.8126 7.89691C17.6022 7.64513 17.6358 7.27053 17.8875 7.06014C18.1392 6.8497 18.5139 6.88326 18.7242 7.13499C19.8646 8.49937 20.495 10.2489 20.4994 12.0614C20.5019 13.0995 20.3005 14.107 19.9008 15.0563C19.4809 16.2718 19.674 17.5732 20.3464 18.6557C20.5284 18.9508 20.4104 19.3431 20.1058 19.5C19.5142 19.8321 18.8612 20.0027 18.193 20.0027Z" fill="currentColor"/>
              <path d="M8.18217 8.64459C8.7013 8.64459 9.12215 8.22397 9.12215 7.70511C9.12215 7.18625 8.7013 6.76562 8.18217 6.76562C7.66303 6.76562 7.24219 7.18625 7.24219 7.70511C7.24219 8.22397 7.66303 8.64459 8.18217 8.64459Z" fill="currentColor"/>
              <path d="M4.71732 8.64459C5.23646 8.64459 5.6573 8.22397 5.6573 7.70511C5.6573 7.18625 5.23646 6.76562 4.71732 6.76562C4.19819 6.76562 3.77734 7.18625 3.77734 7.70511C3.77734 8.22397 4.19819 8.64459 4.71732 8.64459Z" fill="currentColor"/>
              <path d="M11.6431 8.64459C12.1622 8.64459 12.5831 8.22397 12.5831 7.70511C12.5831 7.18625 12.1622 6.76562 11.6431 6.76562C11.124 6.76562 10.7031 7.18625 10.7031 7.70511C10.7031 8.22397 11.124 8.64459 11.6431 8.64459Z" fill="currentColor"/>
              </g>
              <defs>
              <clipPath id="clip0_34_1694">
              <rect width="20" height="20" fill="currentColor" transform="translate(0.5)"/>
              </clipPath>
              </defs>
            </svg>
            </span>             
          </a>
        </div>
      </div>
      <!-- End Hero Section -->
    </section>
    <!-- Start About Section -->
    <div class="backgroud_anime">
      <img src="{{url('assets/frontend/img/banner_anime.gif')}}" >
    </div>
    <div class="banner_amime">
      <img src="{{url('assets/frontend/img/output-onlinegiftools.gif')}}" style="width: 216px;">
    </div>
    <section class="curve-section">
      <div class="td_height_120 td_height_lg_80"></div>
      <div class="td_about td_style_1">
        <div class="container">
          <div class="row align-items-center td_gap_y_40">
            <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.25s">
              <div class="td_about_thumb_wrap">
                <div class="td_about_year text-uppercase td_fs_64 td_bold">EST 1995</div>
                  <div class="td_about_thumb_1">
                    <img src="assets/frontend/img/home_1/about_img_1.jpg" alt="">
                  </div>
                  <div class="td_about_thumb_2">
                    <img src="assets/frontend/img/home_1/about_img_2.jpg" alt="">
                  </div>
                  <a href="https://www.youtube.com/embed/rRid6GCJtgc" class="td_circle_text td_center td_video_open">
                    <svg width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.086 8.63792C14.6603 9.03557 14.6603 9.88459 14.086 10.2822L2.54766 18.2711C1.88444 18.7303 0.978418 18.2557 0.978418 17.449L0.978418 1.47118C0.978418 0.664496 1.88444 0.189811 2.54767 0.649016L14.086 8.63792Z" fill="white"/>
                    </svg>   
                    <img src="assets/frontend/img/home_1/about_circle_text.svg" alt="" class="">                 
                  </a>
                  <div class="td_circle_shape"></div>
              </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="td_section_heading td_style_1 td_mb_30">
                <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">About us</p>
                <h2 class="td_section_title td_fs_30 mb-0">Choosing the right college is a crucial life decision that shouldn't go wrong.</h2>
                <p class="td_section_subtitle td_fs_14 mb-0">ICA Edu Skills, a leader in job-oriented education, has partnered with top Indian universities to offer unique graduation programs designed to prepare students for real-world jobs. These programs include 3 years of intensive classroom learning and a 1-year paid internship. Through the Unifind portal, students can search, compare, and connect with top universities to enroll in these career-focused courses.</p>
              </div>
              <div class="td_mb_40">
                <ul class="td_list td_style_5 td_mp_0">
                  <li>
                    <h3 class="td_fs_24 td_mb_8">3 Years Classroom Training</h3>
                    <p class="td_fs_16 mb-0">Gain in-depth knowledge with rigorous, industry-focused learning</p>
                  </li>
                  <li>
                    <h3 class="td_fs_24 td_mb_8">1 Year Paid Internship</h3>
                    <p class="td_fs_16 mb-0">Earn while you learn with hands-on professional experience.</p>
                  </li>
                  <li>
                    <h3 class="td_fs_24 td_mb_8">100% Placement Assistance</h3>
                    <p class="td_fs_16 mb-0">Secure your future with guaranteed career support.</p>
                  </li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End About Section -->
    <!-- Start Popular Courses -->
    <!-- <section class="td_gray_bg_3 scrollSnap curve-section">
      <div class="td_height_30 td_height_lg_30"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.15s">
              <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">Popular Courses</p>
              <h2 class="td_section_title td_fs_48 mb-0">Academic Courses</h2>
            </div>
            <div class="td_tabs">
              <ul class="td_tab_links td_style_1 td_mp_0 td_fs_20 td_medium td_heading_color wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                @foreach($subjects as $key => $subject)
                <li class="{{($key == 1)?'active':''}}"><a href="#tab_1">{{ $subject->name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="col-md-7">
            <div class="td_tabs">
                <div class="td_tab_body" style="background: #ccc;padding: 20px;border-radius: 24px;">
                  <div class="td_tab active td_slider_container" id="tab_1">
                    <div class="row td_gap_y_24 td_slider_wrapper">
                      @foreach($courses as $value)
                      <div class="col-lg-6 col-md-6 wow fadeInUp td_slider" data-wow-duration="1s" data-wow-delay="0.2s">
                      <div class="td_card td_style_3 d-block td_radius_10">
                        <div class="row" style="margin-top: 6px;">
                          <div class="col-8">
                            <a href="{{ route('course-detail',$value->slug) }}" class="td_card_thumb">
                              <img src="{{ url('assets/frontend/img/course/course-1.gif')}}" alt="">
                            </a>
                          </div>
                          <div class="col-4">
                            <span class="td_card_label td_accent_bg td_white_color">Advanced</span>
                          </div>
                        </div>
                        <div class="td_card_info td_white_bg">
                          <div class="td_card_info_in">
                            <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                              <li>
                                <img src="{{ url('assets/frontend/img/icons/user_3.svg')}}" alt="">
                                <span class="td_opacity_7">{{ $value->number_of_enrolled }} Enrolled</span>
                              </li>
                              <li>
                                <img src="{{ url('assets/frontend/img/icons/book.svg')}}" alt="">
                                <span class="td_opacity_7">{{ $value->no_of_module }} Modules</span>
                              </li>
                            </ul>
                            <h2 class="td_card_title td_fs_24 td_mb_16"><a href="{{ route('course-detail',$value->slug) }}">{{$value->name}}</a></h2>
                            <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">{{ $value->excerpt}}</p>
                            <div class="td_card_review">
                              <div class="td_rating" data-rating="4.5">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <div class="td_rating_percentage">
                                  <i class="fa-solid fa-star fa-fw"></i>
                                  <i class="fa-solid fa-star fa-fw"></i>
                                  <i class="fa-solid fa-star fa-fw"></i>
                                  <i class="fa-solid fa-star fa-fw"></i>
                                  <i class="fa-solid fa-star fa-fw"></i>
                                </div>
                              </div>
                              <span class="td_heading_color td_opacity_5 td_medium">(4.5/5 Ratings)</span>
                            </div>
                            <div class="td_card_btn">
                              <a href="#lead-generate-popup" class="td_btn td_style_1 td_radius_10 td_medium open-popup-link">
                                <span class="td_btn_in td_white_color td_accent_bg">
                                  <span>Enroll Now</span>
                                </span>             
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="td_tab" id="tab_2">
                    <div class="row td_gap_y_24">
                      <div class="col-lg-6 col-md-6">
                        <div class="td_card td_style_3 d-block td_radius_10">
                          
                          <div class="td_card_info td_white_bg">
                            <div class="td_card_info_in">
                              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                                <li>
                                  <img src="assets/frontend/img/icons/user_3.svg" alt="">
                                  <span class="td_opacity_7">300 Seats</span>
                                </li>
                                <li>
                                  <img src="assets/frontend/img/icons/book.svg" alt="">
                                  <span class="td_opacity_7">8 Semesters</span>
                                </li>
                              </ul>
                              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Bachelor Of Arts</span></a>
                              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Boost Creativity & Expand Your Horizons</a></h2>
                              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Discover innovative techniques to enhance your creative thinking.</p>
                              <div class="td_card_review">
                                <div class="td_rating" data-rating="5">
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <div class="td_rating_percentage">
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                  </div>
                                </div>
                                <span class="td_heading_color td_opacity_5 td_medium">(5.0/12 Ratings)</span>
                              </div>
                              <div class="td_card_btn">
                                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                                  <span class="td_btn_in td_white_color td_accent_bg">
                                    <span>Enroll Now</span>
                                  </span>             
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="td_card td_style_3 d-block td_radius_10">
                          
                          <div class="td_card_info td_white_bg">
                            <div class="td_card_info_in">
                              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                                <li>
                                  <img src="assets/frontend/img/icons/user_3.svg" alt="">
                                  <span class="td_opacity_7">250 Seats</span>
                                </li>
                                <li>
                                  <img src="assets/frontend/img/icons/book.svg" alt="">
                                  <span class="td_opacity_7">12 Semesters</span>
                                </li>
                              </ul>
                              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Business Administrator</span></a>
                              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Hone Leadership & Achieve Success</a></h2>
                              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Develop essential leadership skills to excel in any industry.</p>
                              <div class="td_card_review">
                                <div class="td_rating" data-rating="4">
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <div class="td_rating_percentage">
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                  </div>
                                </div>
                                <span class="td_heading_color td_opacity_5 td_medium">(5.0/30 Ratings)</span>
                              </div>
                              <div class="td_card_btn">
                                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                                  <span class="td_btn_in td_white_color td_accent_bg">
                                    <span>Enroll Now</span>
                                  </span>             
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="td_tab" id="tab_3">
                    <div class="row td_gap_y_24">
                      <div class="col-lg-6 col-md-6">
                        <div class="td_card td_style_3 d-block td_radius_10">
                         
                          <div class="td_card_info td_white_bg">
                            <div class="td_card_info_in">
                              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                                <li>
                                  <img src="assets/frontend/img/icons/user_3.svg" alt="">
                                  <span class="td_opacity_7">250 Seats</span>
                                </li>
                                <li>
                                  <img src="assets/frontend/img/icons/book.svg" alt="">
                                  <span class="td_opacity_7">12 Semesters</span>
                                </li>
                              </ul>
                              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Business Administrator</span></a>
                              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Hone Leadership & Achieve Success</a></h2>
                              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Develop essential leadership skills to excel in any industry.</p>
                              <div class="td_card_review">
                                <div class="td_rating" data-rating="4">
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <div class="td_rating_percentage">
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                  </div>
                                </div>
                                <span class="td_heading_color td_opacity_5 td_medium">(5.0/30 Ratings)</span>
                              </div>
                              <div class="td_card_btn">
                                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                                  <span class="td_btn_in td_white_color td_accent_bg">
                                    <span>Enroll Now</span>
                                  </span>             
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="td_card td_style_3 d-block td_radius_10">
                          
                          <div class="td_card_info td_white_bg">
                            <div class="td_card_info_in">
                              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                                <li>
                                  <img src="assets/frontend/img/icons/user_3.svg" alt="">
                                  <span class="td_opacity_7">80 Seats</span>
                                </li>
                                <li>
                                  <img src="assets/frontend/img/icons/book.svg" alt="">
                                  <span class="td_opacity_7">12 Semesters</span>
                                </li>
                              </ul>
                              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Fine of Arts</span></a>
                              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Learn Coding & Advance Your Skills Up</a></h2>
                              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Gain in-demand coding expertise to stay ahead in the tech world.</p>
                              <div class="td_card_review">
                                <div class="td_rating" data-rating="4.5">
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <div class="td_rating_percentage">
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                  </div>
                                </div>
                                <span class="td_heading_color td_opacity_5 td_medium">(5.0/5 Ratings)</span>
                              </div>
                              <div class="td_card_btn">
                                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                                  <span class="td_btn_in td_white_color td_accent_bg">
                                    <span>Enroll Now</span>
                                  </span>             
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="td_tab" id="tab_4">
                    <div class="row td_gap_y_24">
                      <div class="col-lg-6 col-md-6">
                        <div class="td_card td_style_3 d-block td_radius_10">
                          <div class="td_card_info td_white_bg">
                            <div class="td_card_info_in">
                              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                                <li>
                                  <img src="assets/frontend/img/icons/user_3.svg" alt="">
                                  <span class="td_opacity_7">200 Seats</span>
                                </li>
                                <li>
                                  <img src="assets/frontend/img/icons/book.svg" alt="">
                                  <span class="td_opacity_7">12 Semesters</span>
                                </li>
                              </ul>
                              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Computer Science</span></a>
                              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Explore Marketing & Build Your Brand</a></h2>
                              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Master marketing strategies to grow your personal or business brand.</p>
                              <div class="td_card_review">
                                <div class="td_rating" data-rating="4.5">
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <div class="td_rating_percentage">
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                  </div>
                                </div>
                                <span class="td_heading_color td_opacity_5 td_medium">(5.0/15 Ratings)</span>
                              </div>
                              <div class="td_card_btn">
                                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                                  <span class="td_btn_in td_white_color td_accent_bg">
                                    <span>Enroll Now</span>
                                  </span>             
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="td_card td_style_3 d-block td_radius_10">
                          
                          <div class="td_card_info td_white_bg">
                            <div class="td_card_info_in">
                              <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                                <li>
                                  <img src="assets/frontend/img/icons/user_3.svg" alt="">
                                  <span class="td_opacity_7">250 Seats</span>
                                </li>
                                <li>
                                  <img src="assets/frontend/img/icons/book.svg" alt="">
                                  <span class="td_opacity_7">12 Semesters</span>
                                </li>
                              </ul>
                              <a href="courses-grid-with-sidebar.html" class="td_card_category td_fs_14 td_bold td_heading_color td_mb_14"><span>Business Administrator</span></a>
                              <h2 class="td_card_title td_fs_24 td_mb_16"><a href="course-details.html">Hone Leadership & Achieve Success</a></h2>
                              <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">Develop essential leadership skills to excel in any industry.</p>
                              <div class="td_card_review">
                                <div class="td_rating" data-rating="4">
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <div class="td_rating_percentage">
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                    <i class="fa-solid fa-star fa-fw"></i>
                                  </div>
                                </div>
                                <span class="td_heading_color td_opacity_5 td_medium">(5.0/30 Ratings)</span>
                              </div>
                              <div class="td_card_btn">
                                <a href="cart.html" class="td_btn td_style_1 td_radius_10 td_medium">
                                  <span class="td_btn_in td_white_color td_accent_bg">
                                    <span>Enroll Now</span>
                                  </span>             
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="td_height_30 td_height_lg_30"></div>
      </div>
      <div class="td_height_30 td_height_lg_80"></div>
    </section> -->
    <!-- End Popular Courses -->

    <!-- Start Popular Courses -->
    <section class="td_gray_bg_3">
      <div class="td_height_112 td_height_lg_75"></div>
      <div class="container">
        <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.15s">
          <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">Popular Courses</p>
          <h2 class="td_section_title td_fs_48 mb-0">Academic Courses</h2>
        </div>
        <div class="td_height_30 td_height_lg_30"></div>
        <div class="td_tabs">
          <ul class="td_tab_links td_style_1 td_mp_0 td_fs_20 td_medium td_heading_color wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
            @foreach($courses as $key => $value)
            <li class="{{ ($key == '0')?'active':'' }}"><a href="#tab_{{$value->id}}">{{ $value->name }}</a></li>
            @endforeach
          </ul>
          <div class="td_height_50 td_height_lg_50"></div>
          <div class="td_tab_body">
            @foreach($courses as $key => $value)
            <div class="td_tab {{ ($key == '0')?'active':'' }}" id="tab_{{$value->id}}">
              <div class="row td_gap_y_24">
                @foreach(getUniversitiesByCourseId($value->id) as $key => $value)
                  <div class="col-lg-4 col-md-6">
                    <div class="td_card university_grid d-block td_radius_10">
                      <a href="course-details.html" class="td_card_thumb">
                        <img src="{{ (($value->featured_image !== null))?getSizedImage($value->featured_image):'' }}" alt="">
                      </a>
                      <div class="td_card_info td_white_bg">
                        <div class="td_card_info_in">
                          <h2 class="td_card_title td_fs_18 td_mb_16 mb-0">
                            <a href="{{ route('university-detail',$value->slug) }}">{{$value->name}}</a>
                          </h2>
                          <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color mb-0">
                            <li>
                              <img src="assets/img/icons/user_3.svg" alt="">
                              <span class="td_opacity_7">150 Seats</span>
                            </li>
                            <li>
                              <img src="assets/img/icons/book.svg" alt="">
                              <span class="td_opacity_7">12 Semesters</span>
                            </li>
                          </ul>
                          <div class="course_criteria">
                            <ul class="edu_list right">
                              <li>Eligibility :<strong>12+/Graduate</strong></li>
                              <li>Total Duration :<strong>&nbsp;3 Years (2 Years of Classroom + 1 Year of Job-training)</strong></li>
                              <li>Course Type :&nbsp;<strong>100% Job-Assurance</strong>
                              </li>
                            </ul>
                          </div>
                          <!-- <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">@if(isset($value->excerpt)) {{$value->excerpt}} @endif</p> -->
                          <div class="td_card_review">
                            <div class="td_rating" data-rating="4.5">
                              <i class="fa-regular fa-star"></i>
                              <i class="fa-regular fa-star"></i>
                              <i class="fa-regular fa-star"></i>
                              <i class="fa-regular fa-star"></i>
                              <i class="fa-regular fa-star"></i>
                              <div class="td_rating_percentage">
                                <i class="fa-solid fa-star fa-fw"></i>
                                <i class="fa-solid fa-star fa-fw"></i>
                                <i class="fa-solid fa-star fa-fw"></i>
                                <i class="fa-solid fa-star fa-fw"></i>
                                <i class="fa-solid fa-star fa-fw"></i>
                              </div>
                            </div>
                            <span class="td_heading_color td_opacity_5 td_medium">(5.0/5 Ratings)</span>
                          </div>
                          <div class="td_card_btn">
                            <a href="#lead-generate-popup" class="td_btn td_style_1 td_radius_10 td_medium open-popup-link">
                              <span class="td_btn_in td_white_color td_accent_bg">
                                <span>Enroll Now</span>
                              </span>             
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Popular Courses -->
    <!-- Start Category Section -->
    <section class="curve-section light-purple">
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-md-4">
            <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
              <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">Browse Categories</p>
              <h2 class="td_section_title td_fs_48 mb-0 text-white">Choose a subject of choice</h2>
              <div class="text-left mt-3" style="margin-left: 50px;">
                <p class="text-white">Receive unbiased and personalized course recommendations from across India and the world. Filter, compare and enrol for a course that fits your unique needs.</p>
              </div>
              
            </div>
          </div>
          <div class="col-md-8">
            @php
              $colorArray = ['#ddffde','#ffd4d4','#ffbecb','#fff0c3']
            @endphp
            <div class="row td_gap_y_10 justified-center">
              @foreach($subjects as $subject)
              <div class="masonry-grid wow bounceInDown flip-rotate-anime" data-wow-duration="1s" data-wow-delay="0.2s" >
                <a href="{{ $subject->slug }}" class="td_iconbox td_style_3 td_fs_18 td_semibold td_radius_10 td_white_bg td_heading_color">
                  <span class="td_iconbox_icon">
                    <img src="assets/frontend/img/icons/topic-list.png" alt="">
                  </span>
                  <span class="td_iconbox_title">{{ $subject->name }}</span>
                </a>
              </div>
              @endforeach
            </div>
          </div>
        </div>        
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Category Section -->
     <!-- Start Feature Section -->
    <section class="scrollSnap curve-section">
      <div class="td_height_30"></div>
      <div class="container">
        <div class="td_features td_style_1 td_hobble">
          <div class="td_features_thumb">
            <img src="{{ url('assets/frontend/img/home_1/about_img_1.jpg') }}" alt="" class="td_radius_10 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
          </div>
          <div class="td_features_content td_white_bg td_radius_10 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.25s">
            <div class="td_section_heading td_style_1">
              <h2 class="td_section_title td_fs_48 mb-0">What makes our programs unique?</h2>
            </div>
            <div class="td_height_50 td_height_lg_50"></div>
            <ul class="td_feature_list td_mp_0">
              <li>
                <div class="td_feature_icon td_center">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.0428 10.319C24.1549 8.21279 27.016 7.03003 29.9988 7.03003C32.9816 7.03003 35.8427 8.21279 37.9548 10.319C38.2209 10.5706 38.5746 10.7084 38.9408 10.7032C39.3069 10.6981 39.6566 10.5503 39.9155 10.2913C40.1744 10.0323 40.322 9.68251 40.327 9.31635C40.332 8.9502 40.194 8.59653 39.9423 8.33056C37.3026 5.69746 33.7263 4.21875 29.9979 4.21875C26.2694 4.21875 22.6932 5.69746 20.0534 8.33056C19.9169 8.45969 19.8075 8.61489 19.732 8.78699C19.6564 8.95909 19.6161 9.14459 19.6134 9.33254C19.6108 9.52048 19.6458 9.70705 19.7165 9.88122C19.7872 10.0554 19.892 10.2136 20.0249 10.3466C20.1578 10.4795 20.316 10.5844 20.4901 10.6552C20.6643 10.726 20.8508 10.7611 21.0388 10.7585C21.2267 10.756 21.4122 10.7157 21.5844 10.6403C21.7565 10.5648 21.9136 10.4555 22.0428 10.319Z" fill="#890C25"/>
                    <path d="M34.9708 14.7094C35.2487 14.7092 35.5204 14.6266 35.7514 14.472C35.9824 14.3175 36.1625 14.098 36.2688 13.8412C36.3752 13.5844 36.403 13.3018 36.3488 13.0292C36.2947 12.7565 36.161 12.5061 35.9645 12.3094C35.1835 11.5252 34.2549 10.9036 33.2322 10.4804C32.2095 10.0572 31.1131 9.8408 30.0063 9.8438H29.9975C28.8898 9.83989 27.7923 10.0558 26.7687 10.479C25.745 10.9023 24.8154 11.5244 24.0339 12.3094C23.8973 12.4386 23.788 12.5938 23.7124 12.7659C23.6369 12.938 23.5965 13.1235 23.5939 13.3114C23.5912 13.4993 23.6263 13.6859 23.697 13.8601C23.7676 14.0343 23.8725 14.1925 24.0054 14.3254C24.1383 14.4584 24.2965 14.5633 24.4706 14.6341C24.6447 14.7048 24.8313 14.74 25.0192 14.7374C25.2072 14.7348 25.3927 14.6946 25.5648 14.6191C25.737 14.5436 25.8922 14.4344 26.0214 14.2979C26.5426 13.775 27.1622 13.3608 27.8445 13.079C28.5268 12.7972 29.2582 12.6536 29.9964 12.6563H30.002C30.7399 12.654 31.4709 12.7979 32.1529 13.0797C32.8348 13.3614 33.4543 13.7754 33.9753 14.2979C34.1059 14.4288 34.261 14.5326 34.4319 14.6032C34.6028 14.6738 34.7859 14.7099 34.9708 14.7094Z" fill="#890C25"/>
                    <path d="M32.4 39.3175C32.1698 39.0876 31.867 38.9446 31.5432 38.9129C31.2194 38.8813 30.8946 38.9628 30.6242 39.1438C30.3538 39.3247 30.1545 39.5938 30.0603 39.9053C29.966 40.2167 29.9827 40.5511 30.1074 40.8516C30.2322 41.1521 30.4573 41.4001 30.7443 41.5532C31.0314 41.7064 31.3627 41.7552 31.6817 41.6915C32.0008 41.6278 32.2879 41.4554 32.4941 41.2037C32.7002 40.952 32.8128 40.6366 32.8125 40.3113C32.8125 40.1266 32.7761 39.9438 32.7053 39.7733C32.6345 39.6028 32.5308 39.4479 32.4 39.3175Z" fill="#890C25"/>
                    <path d="M52.5 24.8438H44.5312V55.7812H52.5C53.369 55.7771 54.2012 55.4301 54.8156 54.8156C55.4301 54.2012 55.7771 53.369 55.7812 52.5V28.125C55.7771 27.256 55.4301 26.4238 54.8156 25.8094C54.2012 25.1949 53.369 24.8479 52.5 24.8438ZM4.21875 28.125V52.5C4.22289 53.369 4.56992 54.2012 5.18438 54.8156C5.79884 55.4301 6.63103 55.7771 7.5 55.7812H41.7188V24.8438H7.5C6.63103 24.8479 5.79884 25.1949 5.18438 25.8094C4.56992 26.4238 4.22289 27.256 4.21875 28.125ZM13.125 37.5C13.125 37.127 13.2732 36.7694 13.5369 36.5056C13.8006 36.2419 14.1583 36.0938 14.5312 36.0938C14.9042 36.0938 15.2619 36.2419 15.5256 36.5056C15.7893 36.7694 15.9375 37.127 15.9375 37.5V38.9062H18.75V37.5C18.75 37.127 18.8982 36.7694 19.1619 36.5056C19.4256 36.2419 19.7833 36.0938 20.1562 36.0938C20.5292 36.0938 20.8869 36.2419 21.1506 36.5056C21.4143 36.7694 21.5625 37.127 21.5625 37.5V38.9062H27.45C27.6816 38.2324 28.0816 37.6289 28.6118 37.1529C29.1421 36.6769 29.7852 36.3443 30.4801 36.1865C31.175 36.0288 31.8986 36.0511 32.5825 36.2515C33.2663 36.4518 33.8876 36.8235 34.3875 37.3312C34.7798 37.7223 35.091 38.187 35.3034 38.6986C35.5157 39.2101 35.625 39.7586 35.625 40.3125C35.625 40.8664 35.5157 41.4149 35.3034 41.9264C35.091 42.438 34.7798 42.9027 34.3875 43.2938C33.8876 43.8015 33.2663 44.1732 32.5825 44.3735C31.8986 44.5739 31.175 44.5962 30.4801 44.4385C29.7852 44.2807 29.1421 43.9481 28.6118 43.4721C28.0816 42.9961 27.6816 42.3926 27.45 41.7188H14.5312C14.1591 41.7161 13.803 41.567 13.5399 41.3039C13.2767 41.0407 13.1277 40.6846 13.125 40.3125V37.5Z" fill="#890C25"/>
                    <path d="M30.0078 21.1094C31.5611 21.1094 32.8203 19.8502 32.8203 18.2969C32.8203 16.7436 31.5611 15.4844 30.0078 15.4844C28.4545 15.4844 27.1953 16.7436 27.1953 18.2969C27.1953 19.8502 28.4545 21.1094 30.0078 21.1094Z" fill="#890C25"/>
                  </svg>                    
                </div>
                <div class="td_feature_info">
                  <h3 class="td_fs_32 td_semibold td_mb_15">Hands-on Learning</h3>
                  <p class="td_fs_14 td_heading_color td_opacity_7 mb-0">Gain practical expertise with industry-focused training.</p>
                </div>
              </li>
              <li>
                <div class="td_feature_icon td_center">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_34_2108)">
                    <path d="M23.6914 57.3692C23.6914 58.8245 24.8712 60.0043 26.3265 60.0043C27.7814 60.0043 28.9617 58.8245 28.9617 57.3692V43H23.6914V57.3692Z" fill="#890C25"/>
                    <path d="M29.8398 57.3692C29.8398 58.8245 31.0193 60.0043 32.475 60.0043C33.9293 60.0043 35.1101 58.8245 35.1101 57.3692V43H29.8398V57.3692Z" fill="#890C25"/>
                    <path d="M34.9213 6.95278C35.6315 3.90571 33.7371 0.8599 30.6902 0.149783C27.6433 -0.560334 24.5976 1.33415 23.8874 4.38122C23.1773 7.4283 25.0716 10.4741 28.1185 11.1842C31.1655 11.8943 34.2112 9.99986 34.9213 6.95278Z" fill="#890C25"/>
                    <path d="M40.8184 42.4745L38.7032 31.5866L31.8671 34.6176L30.509 31.5545L27.9579 32.6857L25.0521 26.1316C23.5757 26.0009 22.3411 25.7569 21.2997 25.3906L17.9805 42.4745H40.8184Z" fill="#890C25"/>
                    <path d="M33.0859 21.0816L35.4399 26.3904C36.1643 25.8502 36.7525 25.2992 37.1902 24.7545L35.155 20.1641L33.0859 21.0816Z" fill="#890C25"/>
                    <path d="M32.1366 33.9175L39.7574 30.5385L39.1414 29.1484C38.2409 29.9387 37.1721 30.6908 35.9059 31.4149C35.5671 31.6078 35.1839 31.7098 34.7963 31.7098C33.9933 31.7098 33.2471 31.276 32.8497 30.5785C32.8397 30.5609 32.832 30.5422 32.8223 30.5245L30.9922 31.3361L32.1366 33.9175Z" fill="#890C25"/>
                    <path d="M32.6289 30.0346C32.5306 29.6599 32.529 29.2641 32.6339 28.8802C32.792 28.3028 33.1654 27.8208 33.6856 27.5247C34.1588 27.2551 34.596 26.9781 35.0024 26.6975L31.2465 18.2266L23.9453 21.4638C24.4887 21.569 25.138 21.6544 25.8937 21.7015C26.4919 21.7403 27.0382 22.0104 27.4327 22.4599C27.8274 22.91 28.0229 23.4863 27.9834 24.0837C27.9059 25.2571 26.9249 26.1757 25.7501 26.1757C25.7172 26.1757 25.6837 26.1744 25.6502 26.1731L28.2277 31.9859L32.6289 30.0346Z" fill="#890C25"/>
                    <path d="M20.0655 16.1482C19.4881 16.7482 18.9716 17.4096 18.5748 18.1461C18.1813 18.8816 17.8944 19.7069 17.8907 20.6295C17.8872 21.3078 18.0672 22.0345 18.4525 22.6678C19.0341 23.6288 19.9877 24.3121 21.1611 24.7751C22.3454 25.2407 23.7981 25.5224 25.6348 25.6449C25.673 25.6476 25.711 25.6489 25.7489 25.6489C26.6435 25.6489 27.3967 24.9537 27.4565 24.0486C27.5187 23.1044 26.8032 22.2891 25.8596 22.2272C23.7286 22.0938 22.4292 21.6775 21.8505 21.312C21.5562 21.131 21.4402 20.9871 21.387 20.8993C21.3359 20.8087 21.32 20.757 21.3171 20.6297C21.3135 20.4643 21.3828 20.1528 21.592 19.7681C21.7957 19.3865 22.1251 18.9469 22.5272 18.5306C22.5285 18.529 22.5301 18.528 22.5314 18.5264C22.8289 18.217 23.166 17.9206 23.5133 17.6552C23.4477 18.119 23.2413 18.5496 22.9101 18.8929C22.7451 19.0632 22.5957 19.2376 22.4613 19.4099L22.1738 20.8904C22.3807 21.0124 22.6893 21.1412 23.0998 21.2614L31.5133 17.5303L32.8717 20.5939L35.4225 19.4626L37.0713 23.1814L36.0834 18.0958C36.3034 18.2695 36.5198 18.4571 36.7288 18.6537C36.9891 18.8987 37.236 19.1593 37.4595 19.4308C37.7393 19.771 37.9833 20.1267 38.167 20.4898L38.1675 20.4903C38.503 21.1288 38.6803 21.7644 38.6803 22.3998C38.6748 23.1347 38.4635 23.9155 37.772 24.8639C37.0795 25.8044 35.8734 26.8832 33.9458 27.982C33.1239 28.4508 32.8377 29.4967 33.3068 30.3181C33.6227 30.8725 34.2011 31.1827 34.7959 31.1827C35.0839 31.1827 35.3756 31.1102 35.6436 30.9574C37.8642 29.6888 39.4577 28.3444 40.5276 26.898C41.5982 25.4589 42.1121 23.8878 42.106 22.3998C42.106 21.1201 41.7453 19.9362 41.2048 18.9079C41.2019 18.9024 41.1998 18.8969 41.1974 18.8916C40.9426 18.4128 40.6488 17.9675 40.3307 17.549C39.5159 16.4755 38.5286 15.5951 37.5341 14.9089C36.9585 14.5149 36.3801 14.1897 35.8112 13.931C35.6937 13.8775 35.5756 13.8227 35.4591 13.7752C35.0539 13.6147 34.6618 13.4848 34.258 13.4026C33.3178 13.1225 31.7043 12.7812 29.3999 12.7812C27.9411 12.7812 26.7571 12.9183 25.8459 13.0898C25.8338 13.0896 25.8219 13.088 25.8098 13.088V13.0875C24.7781 13.1059 23.888 13.4524 22.9897 13.9278C22.9201 13.9647 22.8508 14.0005 22.781 14.0387C22.2479 14.341 21.7219 14.6996 21.2183 15.1023C20.8165 15.424 20.4288 15.7729 20.066 16.1487V16.1482H20.0655Z" fill="#890C25"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_34_2108">
                    <rect width="60" height="60" fill="white"/>
                    </clipPath>
                    </defs>
                  </svg>                                      
                </div>
                <div class="td_feature_info">
                  <h3 class="td_fs_32 td_semibold td_mb_15">Paid Internship</h3>
                  <p class="td_fs_14 td_heading_color td_opacity_7 mb-0">1-year real-world experience while earning.</p>
                </div>
              </li>
              <li>
                <div class="td_feature_icon td_center">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M57.4219 23.625C57.0163 22.7274 56.5648 21.8513 56.0694 21L49.6869 38.3375C49.4435 38.9853 49.0895 39.5858 48.6406 40.1125C50.3538 39.9429 52.0048 39.3799 53.4646 38.4674C54.9245 37.5549 56.1539 36.3175 57.0569 34.8518C57.96 33.386 58.5123 31.7315 58.6707 30.0172C58.8292 28.3029 58.5896 26.5752 57.9706 24.9688C57.8006 24.5113 57.6181 24.0663 57.4219 23.625Z" fill="#890C25"/>
                    <path d="M20.7886 7.99641C17.0644 9.32208 13.6459 11.3856 10.7379 14.0633C7.82987 16.7411 5.49203 19.9781 3.86434 23.5806C2.23665 27.1831 1.35257 31.0769 1.26502 35.0291C1.17747 38.9812 1.88826 42.9104 3.35483 46.5814C3.39358 46.6602 3.41983 46.7377 3.45858 46.8164C4.23772 48.6771 5.50623 50.292 7.1294 51.4896C8.75258 52.6873 10.6698 53.423 12.6775 53.6186C14.6852 53.8142 16.7084 53.4624 18.5322 52.6006C20.356 51.7388 21.9124 50.3992 23.0361 48.7239C25.3862 45.1838 28.76 42.4445 32.7073 40.8714C32.8323 40.8214 32.9573 40.7839 33.0823 40.7377C33.5267 39.7124 34.1881 38.7956 35.0208 38.0505C35.8536 37.3054 36.8379 36.7496 37.9061 36.4214C37.8801 35.48 38.0731 34.5455 38.4698 33.6914L48.3448 12.3077C44.4659 9.36724 39.9185 7.43436 35.1096 6.68199C30.3007 5.92961 25.3802 6.38123 20.7886 7.99641ZM13.1261 40.6214C12.1372 40.6214 11.1705 40.3282 10.3482 39.7788C9.52598 39.2294 8.88512 38.4485 8.50668 37.5348C8.12824 36.6212 8.02923 35.6159 8.22215 34.646C8.41508 33.6761 8.89128 32.7851 9.59055 32.0859C10.2898 31.3866 11.1807 30.9104 12.1506 30.7175C13.1205 30.5246 14.1259 30.6236 15.0395 31.002C15.9531 31.3805 16.734 32.0213 17.2834 32.8436C17.8328 33.6658 18.1261 34.6325 18.1261 35.6214C18.1261 36.9475 17.5993 38.2193 16.6616 39.1569C15.7239 40.0946 14.4522 40.6214 13.1261 40.6214ZM19.3761 26.2464C18.3872 26.2464 17.4205 25.9532 16.5982 25.4038C15.776 24.8544 15.1351 24.0735 14.7567 23.1598C14.3782 22.2462 14.2792 21.2409 14.4722 20.271C14.6651 19.3011 15.1413 18.4101 15.8405 17.7109C16.5398 17.0116 17.4307 16.5354 18.4006 16.3425C19.3705 16.1496 20.3759 16.2486 21.2895 16.627C22.2031 17.0054 22.984 17.6463 23.5334 18.4686C24.0828 19.2908 24.3761 20.2575 24.3761 21.2464C24.3761 22.5725 23.8493 23.8443 22.9116 24.7819C21.9739 25.7196 20.7022 26.2464 19.3761 26.2464ZM34.3761 21.8714C33.3872 21.8714 32.4205 21.5782 31.5982 21.0288C30.776 20.4794 30.1351 19.6985 29.7567 18.7848C29.3782 17.8712 29.2792 16.8659 29.4722 15.896C29.6651 14.9261 30.1413 14.0351 30.8405 13.3359C31.5398 12.6366 32.4307 12.1604 33.4006 11.9675C34.3705 11.7746 35.3759 11.8736 36.2895 12.252C37.2031 12.6304 37.984 13.2713 38.5334 14.0936C39.0828 14.9158 39.3761 15.8825 39.3761 16.8714C39.3761 18.1975 38.8493 19.4693 37.9116 20.4069C36.9739 21.3446 35.7022 21.8714 34.3761 21.8714Z" fill="#890C25"/>
                    <path d="M56.8494 5.18546C56.2948 4.9551 55.6725 4.94854 55.1131 5.16716C54.5537 5.38577 54.1008 5.81256 53.8494 6.35796L40.7444 34.7392C40.4426 35.3921 40.345 36.1208 40.4643 36.8301C40.5837 37.5393 40.9144 38.196 41.4131 38.7142C40.1949 38.4285 38.9148 38.5847 37.801 39.1549C36.6872 39.7252 35.8122 40.6725 35.3319 41.828C33.3081 46.7155 36.5094 48.8592 34.4844 53.7467C36.7929 53.4888 38.992 52.6243 40.8582 51.2412C42.7244 49.858 44.1911 48.0054 45.1094 45.8717C45.5417 44.821 45.6232 43.6588 45.3416 42.5581C45.0601 41.4574 44.4306 40.477 43.5469 39.763C44.3461 39.866 45.1566 39.695 45.8461 39.2779C46.5356 38.8609 47.0633 38.2224 47.3431 37.4667L58.1431 8.12796C58.3482 7.56529 58.3281 6.94516 58.0871 6.39693C57.846 5.8487 57.4026 5.4147 56.8494 5.18546Z" fill="#890C25"/>
                  </svg>              
                </div>
                <div class="td_feature_info">
                  <h3 class="td_fs_32 td_semibold td_mb_15">Guaranteed Placement</h3>
                  <p class="td_fs_14 td_heading_color td_opacity_7 mb-0">Secure a job with 100% placement assistance.</p>
                </div>
              </li>
              
            </ul>
          </div>
          <div class="td_features_shape_1 position-absolute td_accent_color td_hover_layer_3">
            <svg width="482" height="769" viewBox="0 0 482 769" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M95.5257 63.6079C95.5257 63.6079 440.442 -122.4 331.028 144.941C186.89 497.038 374.069 383.766 443.343 372.701C533.011 358.466 432.66 620.605 432.66 620.605M89.566 67.8652C89.566 67.8652 425.38 -107.274 318.228 154.436C178.626 495.525 359.245 392.597 435.947 380.589C531.877 365.485 417.864 629.948 417.864 629.948M83.6064 72.1225C83.6064 72.1225 410.212 -91.9622 305.428 163.93C170.242 493.943 344.301 401.36 428.657 388.29C530.744 372.504 403.055 639.034 403.055 639.034M77.7534 76.1935C77.7534 76.1935 395.15 -76.8363 292.734 173.239C162.086 492.243 329.585 410.005 421.489 396.06C529.717 379.336 388.366 648.19 388.366 648.19M71.6731 80.3817C71.6731 80.3817 379.968 -61.7794 279.813 182.664C153.702 490.661 314.641 418.767 414.078 403.692C528.69 386.169 373.678 657.346 373.678 657.346M65.7135 84.639C65.7135 84.639 364.799 -46.4671 267.013 192.158C145.332 489.334 299.817 427.599 406.682 411.579C527.571 393.443 358.762 666.62 358.762 666.62M59.7538 88.8963C59.7538 88.8963 349.51 -31.2238 254.106 201.839C136.948 487.752 284.767 436.548 399.286 419.467C526.437 400.462 343.966 675.962 343.966 675.962M53.7942 93.1536C53.7942 93.1536 334.449 -16.0979 241.305 211.334C128.684 486.239 269.943 445.379 391.89 427.354C525.304 407.481 329.171 685.304 329.171 685.304M47.8345 97.4109C47.8345 97.4109 319.28 -0.785629 228.505 220.828C120.3 484.657 255.12 454.211 384.614 435.31C524.184 414.755 314.376 694.646 314.376 694.646M41.9815 101.482C41.9815 101.482 304.219 14.3403 215.811 230.136C112.143 482.958 240.403 462.856 377.431 442.825C523.385 421.471 299.794 703.616 299.794 703.616M36.0219 105.739C36.0219 105.739 289.157 29.4662 203.011 239.631C103.88 481.445 225.459 471.619 370.035 450.712C522.131 428.42 284.984 712.703 284.984 712.703M30.0622 109.997C30.0622 109.997 273.988 44.7786 190.09 249.056C95.4961 479.863 210.515 480.381 362.625 458.345C520.997 435.439 270.068 721.976 270.068 721.976M24.1026 114.254C24.1026 114.254 258.82 60.0909 177.29 258.551C87.112 478.281 195.692 489.213 355.229 466.232C519.864 442.458 255.273 731.319 255.273 731.319M18.1429 118.511C18.1429 118.511 243.638 75.1478 164.489 268.045C78.8487 476.768 180.868 498.044 348.06 474.002C518.958 449.36 240.705 740.544 240.705 740.544M12.1833 122.768C12.1833 122.768 228.469 90.46 151.689 277.54C70.5853 475.255 166.045 506.876 340.663 481.889C517.838 456.634 225.91 749.886 225.91 749.886M6.3303 126.839C6.3303 126.839 213.514 105.4 138.995 286.848C62.3079 473.486 151.208 515.452 333.481 489.404C516.705 463.653 211.101 758.973 211.101 758.973M0.25 131.028C0.25 131.028 198.225 120.643 125.968 296.46C53.8173 472.09 136.157 524.401 325.857 497.409C515.678 470.486 196.412 768.129 196.412 768.129" stroke="currentColor" stroke-miterlimit="10"/>
            </svg>              
          </div>
          <div class="td_features_shape_2 position-absolute td_accent_color td_hover_layer_5">
            <svg width="576" height="726" viewBox="0 0 576 726" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M492.179 645.603C492.179 645.603 177.451 855.296 228.555 594.921C295.898 251.997 127.985 377.265 58.6234 394.914C-31.1778 417.678 11.7299 163.105 11.7299 163.105M497.373 641.009C497.373 641.009 189.556 839.623 239.628 584.728C304.835 252.527 141.316 367.473 64.4603 386.789C-31.6424 411.026 24.9113 152.842 24.9113 152.842M502.567 636.415C502.567 636.415 201.729 823.765 250.702 574.535C313.912 253.109 154.787 357.734 70.23 378.85C-32.107 404.375 38.1671 142.815 38.1671 142.815M507.694 632.006C507.694 632.006 213.834 808.091 261.709 564.526C322.782 253.825 168.05 348.127 75.8582 370.859C-32.6388 397.908 51.2814 132.736 51.2814 132.736M513.029 627.464C513.029 627.464 226.081 792.469 272.924 554.384C331.86 254.407 181.522 338.387 81.7694 362.97C-33.1705 391.442 64.3956 122.657 64.3956 122.657M518.223 622.87C518.223 622.87 238.253 776.611 283.998 544.191C340.863 254.753 194.852 328.596 87.6063 354.846C-33.7095 384.554 77.7186 112.445 77.7186 112.445M523.417 618.276C523.417 618.276 250.567 760.804 295.139 533.813C349.941 255.335 208.39 318.672 93.4432 346.722C-34.1741 377.903 90.9 102.182 90.9 102.182M528.611 613.681C528.611 613.681 262.672 745.131 306.213 523.619C358.878 255.866 221.72 308.88 99.28 338.598C-34.6387 371.251 104.081 91.9181 104.081 91.9181M533.805 609.087C533.805 609.087 274.845 729.273 317.286 513.426C367.956 256.448 235.05 299.089 104.975 330.422C-35.1777 364.364 117.263 81.6546 117.263 81.6546M538.932 604.678C538.932 604.678 286.95 713.599 328.293 503.417C376.825 257.163 248.313 289.483 110.678 322.667C-35.9181 358.03 130.31 71.7605 130.31 71.7605M544.126 600.084C544.126 600.084 299.055 697.926 339.367 493.224C385.762 257.694 261.785 279.743 116.515 314.543C-36.2412 351.43 143.566 61.7332 143.566 61.7332M549.32 595.49C549.32 595.49 311.228 682.068 350.582 483.082C394.84 258.276 275.256 270.003 122.426 306.655C-36.7059 344.779 156.889 51.5211 156.889 51.5211M554.514 590.896C554.514 590.896 323.4 666.21 361.656 472.889C403.918 258.858 288.587 260.212 128.263 298.53C-37.1705 338.127 170.07 41.2576 170.07 41.2576M559.708 586.302C559.708 586.302 335.647 650.588 372.73 462.695C412.854 259.389 301.917 250.421 133.891 290.539C-37.8437 331.609 183.043 31.1274 183.043 31.1274M564.902 581.708C564.902 581.708 347.819 634.729 383.803 452.502C421.791 259.92 315.247 240.629 139.728 282.415C-38.3826 324.722 196.224 20.8639 196.224 20.8639M570.029 577.299C570.029 577.299 359.857 619.241 394.81 442.493C430.801 260.687 328.651 231.074 145.431 274.66C-38.8473 318.07 209.48 10.8366 209.48 10.8366M575.364 572.756C575.364 572.756 372.171 603.434 406.092 432.167C439.946 261.084 342.19 221.15 151.476 266.402C-39.3791 311.604 222.594 0.757812 222.594 0.757812" stroke="currentColor" stroke-miterlimit="10"/>
            </svg>                      
          </div>
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Feature Section -->
    <!-- Start Category Section -->
    <section class="curve-section td_yellow_bg_4">
      <div class="container-fluid">
        <div class="row py-5">
          <div class="col-md-4">
            <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
              <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">Our Recruiters.</p>
              <h2 class="td_section_title td_fs_48 mb-0 ">List of Top Companies </h2>
              <div class="text-left mt-3" style="margin-left: 50px;">
                <p class="">Top companies hire our graduates, ensuring strong career opportunities.</p>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="placement-grid-container td_gap_y_10">
              @foreach(getRecruiters() as $recruiter)
              <div class="placement-redious-grid" data-wow-duration="1s" data-wow-delay="0.2s">
                <a href="javascript:void(0)" class="placement-grid-img">
                  <img src="{{ getSizedImage($recruiter->featured_image) }}" alt="">
                </a>
              </div>
              @endforeach
            </div>
          </div>
        </div>        
      </div>
    </section>
    <!-- End Category Section -->
    
    <!-- Start Campus Life -->
    <section class="td_accent_bg td_shape_section_1 scrollSnap curve-section">
      <div class="td_shape_position_4 td_accent_color position-absolute">
        <svg width="37" height="40" viewBox="0 0 37 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.4">
          <rect y="12.3906" width="23.6182" height="31.0709" rx="1" transform="rotate(-30.4551 0 12.3906)" fill="white"/>
          <rect x="4" y="14.8125" width="18.5361" height="2.62207" rx="1.31104" transform="rotate(-30.4551 4 14.8125)" fill="currentColor"/>
          <rect x="7" y="19.8125" width="18.5361" height="2.62207" rx="1.31104" transform="rotate(-30.4551 7 19.8125)" fill="currentColor"/>
          </g>
        </svg>          
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
      <div class="container">
        <div class="row td_gap_y_40">
          <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="td_height_57 td_height_lg_0"></div>
            <div class="td_section_heading td_style_1">
              <h2 class="td_section_title td_fs_48 mb-0 td_white_color">Navigate</h2>
              <p class="td_section_subtitle td_fs_18 mb-0 td_white_color td_opacity_7">Experience a journey of learning, growth, and career success. With hands-on training, expert guidance, and real-world exposure, we prepare you for a future full of opportunities.</p>
            </div>
            <div class="td_btn_box">
              <svg width="299" height="315" viewBox="0 0 299 315" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.75" clip-path="url(#clip0_34_2222)">
                <path d="M242.757 275.771C242.505 275.771 242.253 275.75 242.005 275.707C32.3684 239.98 0.342741 8.13005 0.0437414 5.79468C-0.108609 4.51176 0.22739 3.21754 0.9787 2.19335C1.73001 1.16916 2.8359 0.497795 4.05598 0.32519C5.27606 0.152585 6.5117 0.492693 7.4943 1.27158C8.4769 2.05047 9.12704 3.20518 9.3034 4.48471C9.59772 6.7514 40.7872 231.477 243.5 266.022C244.658 266.22 245.702 266.868 246.426 267.838C247.15 268.808 247.5 270.028 247.406 271.256C247.312 272.484 246.782 273.63 245.921 274.467C245.06 275.303 243.93 275.769 242.757 275.771Z" fill="white"/>
                <path d="M299.002 275.455C271.709 283.305 237.446 297.872 215.562 314.617L235.465 269.602L223.318 221.648C242.099 242.137 273.428 262.728 299.002 275.455Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_34_2222">
                <rect width="299" height="314" fill="white" transform="translate(0 0.421875)"/>
                </clipPath>
                </defs>
              </svg>  
              <div class="td_btn_box_in">
                <a target="_blank" href="{{ url('/gallery') }}" class="td_btn td_style_1 td_radius_10 td_medium td_fs_18 open-popup-link">
                  <span class="td_btn_in td_heading_color td_white_bg">
                    <span>Life with Us</span>
                  </span>             
                </a> 
              </div>             
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1 wow bounceInDown" data-wow-duration="2s" data-wow-delay="0.20s">
            <div class="row">
              <div class="col-sm-6">
                <div class="td_card td_style_2 wow fadeInUp threesixty-rotate-anime" data-wow-duration="1s" data-wow-delay="0.2s">
                  <a href="{{ url('/placements') }}" class="td_card_thumb d-block">
                    <img src="assets/frontend/img/home_1/campur_life_1.jpg" alt="" class="w-100">
                  </a>
                  <div class="td_card_info">
                    <h2 class="td_card_title mb-0 td_fs_18 td_semibold td_white_color">
                      <a href="{{ url('/placements') }}">Placement</a>
                    </h2>
                    <a href="{{ url('/placements') }}" class="td_card_btn">
                      <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.564 4.70161L4.42188 18.8438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.5654 13.5341C18.5654 13.5341 19.7299 5.85989 18.5654 4.69528C17.4008 3.53067 9.72656 4.69531 9.72656 4.69531" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.564 4.70161L4.42188 18.8438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.5654 13.5341C18.5654 13.5341 19.7299 5.85989 18.5654 4.69528C17.4008 3.53067 9.72656 4.69531 9.72656 4.69531" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="td_height_40 td_height_lg_30"></div>
                <div class="td_card td_style_2 wow fadeInUp threesixty-rotate-anime" data-wow-duration="1s" data-wow-delay="0.3s">
                  <a href="course-details.html" class="td_card_thumb d-block">
                    <img src="assets/frontend/img/home_1/campur_life_3.jpg" alt="" class="w-100">
                  </a>
                  <div class="td_card_info">
                    <h2 class="td_card_title mb-0 td_fs_18 td_semibold td_white_color">
                      <a href="course-details.html">Gallery</a>
                    </h2>
                    <a href="course-details.html" class="td_card_btn">
                      <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.564 4.70161L4.42188 18.8438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.5654 13.5341C18.5654 13.5341 19.7299 5.85989 18.5654 4.69528C17.4008 3.53067 9.72656 4.69531 9.72656 4.69531" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.564 4.70161L4.42188 18.8438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.5654 13.5341C18.5654 13.5341 19.7299 5.85989 18.5654 4.69528C17.4008 3.53067 9.72656 4.69531 9.72656 4.69531" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="td_height_50 td_height_lg_30"></div>
                <div class="td_card td_style_2 wow fadeInUp threesixty-rotate-anime" data-wow-duration="1s" data-wow-delay="0.25s">
                  <a href="{{ url('/events') }}" class="td_card_thumb d-block">
                    <img src="assets/frontend/img/home_1/campur_life_2.jpg" alt="" class="w-100">
                  </a>
                  <div class="td_card_info">
                    <h2 class="td_card_title mb-0 td_fs_18 td_semibold td_white_color">
                      <a href="{{ url('/events') }}">Events</a>
                    </h2>
                    <a href="{{ url('/events') }}" class="td_card_btn">
                      <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.564 4.70161L4.42188 18.8438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.5654 13.5341C18.5654 13.5341 19.7299 5.85989 18.5654 4.69528C17.4008 3.53067 9.72656 4.69531 9.72656 4.69531" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.564 4.70161L4.42188 18.8438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.5654 13.5341C18.5654 13.5341 19.7299 5.85989 18.5654 4.69528C17.4008 3.53067 9.72656 4.69531 9.72656 4.69531" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="td_height_40 td_height_lg_30"></div>
                <div class="td_card td_style_2 wow fadeInUp threesixty-rotate-anime" data-wow-duration="1s" data-wow-delay="0.3s">
                  <a href="{{ url('/testimonials') }}" class="td_card_thumb d-block">
                    <img src="assets/frontend/img/home_1/campur_life_4.jpg" alt="" class="w-100">
                  </a>
                  <div class="td_card_info">
                    <h2 class="td_card_title mb-0 td_fs_18 td_semibold td_white_color">
                      <a href="{{ url('/testimonials') }}">Testimonials</a>
                    </h2>
                    <a href="{{ url('/testimonials') }}" class="td_card_btn">
                      <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.564 4.70161L4.42188 18.8438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.5654 13.5341C18.5654 13.5341 19.7299 5.85989 18.5654 4.69528C17.4008 3.53067 9.72656 4.69531 9.72656 4.69531" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.564 4.70161L4.42188 18.8438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.5654 13.5341C18.5654 13.5341 19.7299 5.85989 18.5654 4.69528C17.4008 3.53067 9.72656 4.69531 9.72656 4.69531" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="td_height_30 td_height_lg_30"></div>
    </section>
    <!-- End Campus Life -->
    <!-- Start Video Section -->
    <section class="scrollSnap curve-section">
      <div class="td_video_block td_style_1 td_accent_bg td_bg_filed td_center text-center" data-src="assets/frontend/img/home_1/video_bg.jpg">
        <div class="container">
          <a href="https://www.youtube.com/embed/rRid6GCJtgc" class="td_player_btn_wrap_2 td_video_open wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <span class="td_player_btn td_center">
              <span></span>
            </span>
          </a>
          <div class="td_height_70 td_height_lg_50"></div>
          <h2 class="td_fs_48 td_white_color mb-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Take a Video Tour to Learn <br>Intro of Campus</h2>
        </div>
      </div>
      <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
        <div class="td_contact_box td_style_1 td_accent_bg td_radius_10">
          <div class="td_contact_box_left">
            <p class="td_fs_18 td_light td_white_color td_mb_4">Get In Touch:</p>
            <h3 class="td_fs_36 mb-0 td_white_color"><a href="mailto:{{ get_theme_setting('email') }}">{{ get_theme_setting('email') }}</a></h3>
          </div>
          <div class="td_contact_box_or td_fs_24 td_medium td_white_bg td_white_bg td_center rounded-circle td_accent_color">
            or
          </div>
          <div class="td_contact_box_right">
            <p class="td_fs_18 td_light td_white_color td_mb_4">Get In Touch:</p>
            <h3 class="td_fs_36 mb-0 td_white_color"><a href="tel:+{{ get_theme_setting('mobile') }}">{{ get_theme_setting('mobile') }}</a></h3>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Section -->
    <!-- Start Testimonials Section -->
    <section class="td_shape_section_9 td_hobble">
      <div class="td_shape_position_4 position-absolute td_hover_layer_3">
        <img src="{{ url('assets/frontend/img/home_3/testimonial_shape_1.svg') }}" alt="">
      </div>
      <div class="td_shape_position_5 position-absolute td_accent_color td_hover_layer_5">
        <svg width="242" height="231" viewBox="0 0 242 231" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_d_34_832)">
          <path d="M127.325 39.3635C128.652 37.8865 131.088 39.0374 130.79 41.0006L125.127 78.2822C124.952 79.4327 125.793 80.4889 126.953 80.5768L169.471 83.7988C171.566 83.9575 172.03 86.8264 170.092 87.6379L134.887 102.378C133.625 102.906 133.254 104.518 134.159 105.545L161.133 136.154C162.555 137.768 160.776 140.182 158.814 139.301L119.833 121.805C118.666 121.281 117.315 121.972 117.055 123.224L109.608 159.155C109.196 161.139 106.436 161.325 105.763 159.414L92.3189 121.263C91.949 120.214 90.7938 119.668 89.7483 120.048L51.7387 133.888C49.8354 134.581 48.2261 132.33 49.4973 130.753L72.5265 102.184C73.3289 101.188 73.004 99.7059 71.8589 99.1372L33.5908 80.133C31.6643 79.1763 32.3994 76.269 34.549 76.3429L75.3234 77.7447C76.6912 77.7918 77.701 76.482 77.3078 75.1712L66.3403 38.615C65.7365 36.6024 68.2476 35.1394 69.7007 36.6572L99.1874 67.4574C99.9921 68.298 101.342 68.2767 102.12 67.4112L127.325 39.3635Z" fill="currentColor"/>
          <path d="M127.511 39.5306C128.672 38.2382 130.804 39.2453 130.543 40.9631L124.88 78.2447C124.683 79.539 125.629 80.7272 126.934 80.8261L169.452 84.048C171.285 84.187 171.692 86.6972 169.996 87.4073L134.791 102.147C133.371 102.742 132.954 104.555 133.972 105.71L160.945 136.319C162.19 137.731 160.633 139.844 158.916 139.073L119.935 121.577C118.623 120.988 117.103 121.764 116.811 123.173L109.363 159.105C109.003 160.84 106.588 161.003 105.999 159.331L92.5546 121.18C92.1386 119.999 90.839 119.385 89.6628 119.814L51.6532 133.653C49.9878 134.259 48.5797 132.29 49.692 130.91L72.7211 102.341C73.6238 101.221 73.2584 99.5531 71.9701 98.9133L33.702 79.9091C32.0163 79.072 32.6595 76.5281 34.5405 76.5928L75.3148 77.9946C76.8535 78.0475 77.9896 76.574 77.5472 75.0993L66.5798 38.5432C66.0514 36.7821 68.2486 35.502 69.5201 36.8301L99.0068 67.6303C99.9122 68.576 101.431 68.552 102.306 67.5783L127.511 39.5306Z" stroke="currentColor" stroke-width="0.5"/>
          </g>
          <g clip-path="url(#clip0_34_832)">
          <path d="M117.885 90.793C117.885 87.5059 115.219 84.8398 111.932 84.8398C108.645 84.8398 105.979 87.5059 105.979 90.793C105.979 94.0801 108.645 96.7461 111.932 96.7461C112.916 96.7461 113.824 96.4883 114.645 96.0664C113.59 100.707 109.436 104.187 104.479 104.187C103.658 104.187 102.99 104.855 102.99 105.676C102.99 106.496 103.658 107.164 104.479 107.164C111.873 107.164 117.885 101.152 117.885 93.7578V90.793Z" fill="white"/>
          <path d="M103.018 90.793C103.018 87.5059 100.352 84.8398 97.0645 84.8398C93.7773 84.8398 91.1113 87.5059 91.1113 90.793C91.1113 94.0801 93.7773 96.7461 97.0645 96.7461C98.0488 96.7461 98.957 96.4883 99.7773 96.0664C98.7227 100.707 94.5684 104.187 89.6113 104.187C88.791 104.187 88.123 104.855 88.123 105.676C88.123 106.496 88.791 107.164 89.6113 107.164C97.0059 107.164 103.018 101.152 103.018 93.7578V90.793Z" fill="white"/>
          </g>
          <defs>
          <filter id="filter0_d_34_832" x="2.47656" y="6.02954" width="238.844" height="224.72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
          <feOffset dx="20" dy="20"/>
          <feGaussianBlur stdDeviation="25"/>
          <feComposite in2="hardAlpha" operator="out"/>
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.104167 0 0 0 0.15 0"/>
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_34_832"/>
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_34_832" result="shape"/>
          </filter>
          <clipPath id="clip0_34_832">
          <rect width="30" height="30" fill="white" transform="matrix(-1 0 0 -1 118.002 111)"/>
          </clipPath>
          </defs>
        </svg>          
      </div>
      <div class="td_height_112 td_height_lg_75"></div>
      <div class="container">
        <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">Testimonials</p>
          <h2 class="td_section_title td_fs_48 mb-0">What Our Students Say About <br>Our Services</h2>
        </div>
        <div class="td_height_50 td_height_lg_50"></div>
        <div class="td_slider td_style_1 td_slider_gap_24 td_remove_overflow wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="td_slider_container" data-autoplay="0" data-loop="1" data-speed="800" data-center="0" data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="2" data-add-slides="3">
            <div class="td_slider_wrapper">
              @foreach(getTestimonials() as $key => $testimonial)
              <div class="td_slide">
                <div class="td_testimonial td_style_1 td_type_2 td_white_bg td_radius_5">
                  <div class="td_rating td_mb_20" data-rating="5">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <div class="td_rating_percentage">
                      <i class="fa-solid fa-star fa-fw"></i>
                      <i class="fa-solid fa-star fa-fw"></i>
                      <i class="fa-solid fa-star fa-fw"></i>
                      <i class="fa-solid fa-star fa-fw"></i>
                      <i class="fa-solid fa-star fa-fw"></i>
                    </div>
                  </div>
                  <blockquote class="td_testimonial_text td_fs_18 td_medium td_heading_color td_mb_30 td_opacity_9">{!! $testimonial->comment !!}</blockquote>
                  <div class="td_testimonial_meta td_mb_24">
                    <img src="{{ url('assets/frontend/img/home_1/avatar_1.png') }}" alt="">
                    <div class="td_testimonial_meta_right">
                      <h3 class="td_fs_20 td_semibold td_mb_2">{!! $testimonial->name !!}</h3>
                      <p class="td_fs_14 mb-0 td_heading_color td_opacity_7">10th Batch Students</p>
                    </div>
                  </div>
                  <span class="td_quote_icon td_accent_color">
                    <svg width="65" height="46" viewBox="0 0 65 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.05" d="M13.9305 26.6H1.00195V1H26.8591V27.362L17.9579 45H6.26959L14.8233 28.0505L15.5553 26.6H13.9305ZM51.0734 26.6H38.1448V1H64.002V27.362L55.1008 45H43.4124L51.9661 28.0505L52.6982 26.6H51.0734Z" stroke="currentColor" stroke-width="2"/>
                    </svg>                      
                  </span> 
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="td_height_40 td_height_lg_40"></div>
          <div class="td_slider_arrows td_style_1">
            <div class="td_left_arrow td_accent_bg rounded-circle td_center td_white_color">
              <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.00194 6.00024L17.002 6.00024" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.00191 1C6.00191 1 1.00196 4.68244 1.00195 6.00004C1.00194 7.31763 6.00195 11 6.00195 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>                            
            </div>
            <div class="td_right_arrow td_accent_bg rounded-circle td_center td_white_color">
              <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.002 5.99976L1.00195 5.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.002 11C12.002 11 17.0019 7.31756 17.002 5.99996C17.002 4.68237 12.002 1 12.002 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>                               
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <!-- End Testimonials Section -->
    <!-- Start Blog Section -->
    <section class="scrollSnap curve-section">
      <div class="td_height_112 td_height_lg_75"></div>
      <div class="container">
        <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">
            <i></i>
            BLOG & ARTICLES
            <i></i>
          </p>
          <h2 class="td_section_title td_fs_48 mb-0">Take A Look At The Latest <br>Articles</h2>
        </div>
        <div class="td_height_50 td_height_lg_50"></div>
        <div class="row td_gap_y_24">
          <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="td_post td_style_1 td_type_1">
              <a href="blog-details.html" class="td_post_thumb d-block">
                <img src="assets/frontend/img/home_1/post_1.jpg" alt="">
                <span class="td_post_label">Learning</span>
              </a>
              <div class="td_post_info">
                <div class="td_post_meta td_fs_14 td_medium td_mb_20">
                  <span><img src="assets/frontend/img/icons/calendar.svg" alt="">Jan 23 , 2024</span>
                  <span><img src="assets/frontend/img/icons/user.svg" alt="">Jhon Doe</span>
                </div>
                <h2 class="td_post_title td_fs_24 td_medium td_mb_16">
                  <a href="blog-details.html">Tips for Students and Recent Graduates</a>
                </h2>
                <p class="td_post_subtitle td_mb_24 td_heading_color td_opacity_7">Far far away, behind the word moun tains, far from the Conso nantia.</p>
                <a href="blog-details.html" class="td_btn td_style_1 td_type_3 td_radius_30 td_medium">
                  <span class="td_btn_in td_accent_color">
                    <span>Read More</span>
                  </span>             
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s">
            <div class="td_post td_style_1 td_type_1">
              <a href="blog-details.html" class="td_post_thumb d-block">
                <img src="assets/frontend/img/home_1/post_2.jpg" alt="">
                <span class="td_post_label">Remote</span>
              </a>
              <div class="td_post_info">
                <div class="td_post_meta td_fs_14 td_medium td_mb_20">
                  <span><img src="assets/frontend/img/icons/calendar.svg" alt="">Jan 20 , 2024</span>
                  <span><img src="assets/frontend/img/icons/user.svg" alt="">Jhon Doe</span>
                </div>
                <h2 class="td_post_title td_fs_24 td_medium td_mb_16">
                  <a href="blog-details.html">Leverage Internships for Career Success</a>
                </h2>
                <p class="td_post_subtitle td_mb_24 td_heading_color td_opacity_7">Education is a dynamic and evolving field that plays a crucial.</p>
                <a href="blog-details.html" class="td_btn td_style_1 td_type_3 td_radius_30 td_medium">
                  <span class="td_btn_in td_accent_color">
                    <span>Read More</span>
                  </span>             
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="td_post td_style_1 td_type_1">
              <a href="blog-details.html" class="td_post_thumb d-block">
                <img src="assets/frontend/img/home_1/post_3.jpg" alt="">
                <span class="td_post_label">Reading</span>
              </a>
              <div class="td_post_info">
                <div class="td_post_meta td_fs_14 td_medium td_mb_20">
                  <span><img src="assets/frontend/img/icons/calendar.svg" alt="">Jan 18 , 2024</span>
                  <span><img src="assets/frontend/img/icons/user.svg" alt="">Jhon Doe</span>
                </div>
                <h2 class="td_post_title td_fs_24 td_medium td_mb_16">
                  <a href="blog-details.html">How to Inspire Your Students for life</a>
                </h2>
                <p class="td_post_subtitle td_mb_24 td_heading_color td_opacity_7">Education is a dynamic and evolving field that plays a crucial.</p>
                <a href="blog-details.html" class="td_btn td_style_1 td_type_3 td_radius_30 td_medium">
                  <span class="td_btn_in td_accent_color">
                    <span>Read More</span>
                  </span>             
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s">
            <div class="td_post td_style_1 td_type_1">
              <a href="blog-details.html" class="td_post_thumb d-block">
                <img src="assets/frontend/img/home_1/post_3.jpg" alt="">
                <span class="td_post_label">Learning</span>
              </a>
              <div class="td_post_info">
                <div class="td_post_meta td_fs_14 td_medium td_mb_20">
                  <span><img src="assets/frontend/img/icons/calendar.svg" alt="">Jan 18 , 2024</span>
                  <span><img src="assets/frontend/img/icons/user.svg" alt="">Jhon Doe</span>
                </div>
                <h2 class="td_post_title td_fs_24 td_medium td_mb_16">
                  <a href="blog-details.html">Role of Intelligence in Academic Success</a>
                </h2>
                <p class="td_post_subtitle td_mb_24 td_heading_color td_opacity_7">Education is a dynamic and evolving field that plays a crucial.</p>
                <a href="blog-details.html" class="td_btn td_style_1 td_type_3 td_radius_30 td_medium">
                  <span class="td_btn_in td_accent_color">
                    <span>Read More</span>
                  </span>             
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Blog Section -->
@endsection
