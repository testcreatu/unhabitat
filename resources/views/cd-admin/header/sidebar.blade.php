<!--BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
            </li>
            <li class="nav-item">
                <a href="{{url('cd-admin/dashboard')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            

            <li class="heading">
                <h3 class="uppercase">About Section</h3>
            </li>
            <li class="nav-item">
                <a href="{{url('cd-admin/view-about')}}" class="nav-link nav-toggle">
                    <i class="fa fa-info"></i>
                    <span class="title">About us</span>
                </a>
            </li> 
           {{--  <li class="nav-item">
                <a href="{{url('cd-admin/view-objective')}}" class="nav-link nav-toggle">
                    <i class="fa fa-info"></i>
                    <span class="title">Why us?</span>
                </a>
            </li> --}}

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-quote-left"></i>
                    <span class="title">Features</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-features ')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Features</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-features')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Features</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-quote-left"></i>
                    <span class="title">Goals</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-goals ')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Goals</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-goals')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Goals</span>
                        </a>
                    </li>
                </ul>
            </li>
            


            <li class="heading">
                <h3 class="uppercase">Section</h3>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-picture-o"></i>
                    <span class="title">Carousel</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-carousel')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Carousel</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-carousel')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Carousel</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">News</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-blog')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add News</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-blog')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View News</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">Projects</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-projects')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Projects</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-projects')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Projects</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-circle"></i>
                    <span class="title">Publications</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-publications')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Publications</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-publications')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Publications</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-circle"></i>
                    <span class="title">Notice</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-notice')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Notice</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-notice')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Notice</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="heading">
                <h3 class="uppercase">Media Section</h3>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-quote-left"></i>
                    <span class="title">Photo Gallery</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-photo-gallery')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Photo Gallery</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-photo-gallery')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Photo Gallery</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-quote-left"></i>
                    <span class="title">Video Gallery</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-video-gallery')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Video Gallery</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-video-gallery')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Video Gallery</span>
                        </a>
                    </li>
                </ul>
            </li>

        <!--     <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">Clients</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-clients')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Clients</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-clients')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Clients</span>
                        </a>
                    </li>
                </ul>
            </li> -->

           <!--  <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">FAQ</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-faq')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Faq</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-faq')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Faq</span>
                        </a>
                    </li>
                </ul>
            </li> -->


            <!-- <li class="nav-item">
                <a href="{{url('cd-admin/view-social-links')}}" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">Social Links</span>
                </a>
            </li> -->


           {{--  <li class="nav-item">
                <a href="{{url('cd-admin/view-page-titles')}}" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">Headers</span>
                </a>
            </li> --}}

            {{-- <li class="nav-item">
                <a href="{{url('cd-admin/view-features')}}" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">Features</span>
                </a>
            </li> --}}
           {{--  <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-graduation-cap"></i>
                    <span class="title">Scholorship</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('/cd-admin/add-scholorship-link')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Scholorship Link</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-available-scholorship')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Scholorship Link</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
{{-- 
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-tasks"></i>
                    <span class="title">Job</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-job-link')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Job Link</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-available-job')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Job link</span>
                        </a>
                    </li>
                </ul>
            </li> --}}


           <!--  <li class="heading">
                <h3 class="uppercase">Message Section</h3>
            </li>
            <li class="nav-item">
                <a href="{{url('cd-admin/view-Subscription')}}" class="nav-link nav-toggle">
                    <i class="fa fa-comments"></i>
                    <span class="title">Subscription</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Message</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-contact')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Inbox</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/contact-replies')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Reply</span>
                        </a>
                    </li>
                </ul>
            </li> -->


           <!--  <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">SEO Report Request</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-seo-report')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Requests</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/seo-report-replies')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Replied Requests</span>
                        </a>
                    </li>
                </ul>
            </li> -->
            {{-- <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">Achivement</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-achivement')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Achivement</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-achivement')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Achivement</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">category</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-category')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-category')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Category</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">Sub-Category</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-sub-category')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new sub-category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-sub-category')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View sub-category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">Portfolio</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-portfolio')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Portfolio</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-portfolio')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Portfolio</span>
                        </a>
                    </li>
                </ul>
            </li>

          


           

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-graduation-cap"></i>
                    <span class="title">Career</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-career')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Career</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-career')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Career</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="heading">
                <h3 class="uppercase">Mail Section</h3>
            </li>

            <li class="nav-item">
                <a href="{{url('/cd-admin/view-applied')}}" class="nav-link nav-toggle">
                    <i class="fa fa-tasks"></i>
                    <span class="title">Career Applied</span>
                    <span class=""></span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{url('/cd-admin/view-consultant')}}" class="nav-link nav-toggle">
                    <i class="fa fa-clock-o"></i>
                    <span class="title">Consultant</span>
                    <span class=""></span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{url('/cd-admin/view-contact')}}" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Contact</span>
                    <span class=""></span>
                </a>
            </li>


            <li class="heading">
                <h3 class="uppercase">Service Inquiry</h3>
            </li>
            <li class="nav-item">
                <a href="{{url('cd-admin/view-service-inquiry')}}" class="nav-link nav-toggle">
                    <i class="fa fa-comments"></i>
                    <span class="title">Service Inquiry</span>
                </a>
            </li> --}}
<!-- 
            <li class="heading">
                <h3 class="uppercase">Others</h3>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-circle-o"></i>
                    <span class="title">SEO</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('/seo-view')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Seo</span>
                        </a>
                    </li>
                    
                </ul>
            </li> -->

        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
                <!-- END SIDEBAR