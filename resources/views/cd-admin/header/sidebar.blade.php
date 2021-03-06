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
                    <span class="title">Overview</span>
                </a>
            </li> 
            <li class="nav-item">
                <a href="{{url('cd-admin/view-about-pages')}}" class="nav-link nav-toggle">
                    <i class="fa fa-info"></i>
                    <span class="title">About Pages</span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-about-pages ')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add About Pages</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-about-pages')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View About Pages</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Objectives Section</h3>
            </li>
            <li class="nav-item">
                <a href="{{url('cd-admin/view-social-links')}}" class="nav-link nav-toggle">
                    <i class="fa fa-info"></i>
                    <span class="title">Social Links</span>
                </a>
                
            </li>

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
                    <span class="title">Milestones</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-milestones')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Milestones</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-milestones')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Milestones</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-quote-left"></i>
                    <span class="title"> SustainableGoals</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-goals ')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Sustainable Goals</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-goals')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Sustainable Goals</span>
                        </a>
                    </li>
                </ul>
            </li>
            


            <li class="heading">
                <h3 class="uppercase">Media Section</h3>
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
                            <span class="title">Add Carousel</span>
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
                    <i class="fa fa-circle"></i>
                    <span class="title">NewsLetter</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-newsletter')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add NewsLetter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-newsletter')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View NewsLetter</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-circle"></i>
                    <span class="title">Case Study</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-case-study')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Case Study</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-case-study')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Case Study</span>
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

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-circle"></i>
                    <span class="title">Events</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-events')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Events</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-events')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Events</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Projects Section</h3>
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
            <li class="heading">
                <h3 class="uppercase">Publications Section</h3>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-circle"></i>
                    <span class="title">Publications Category</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-publication-category')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Publications Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-publication-category')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Publications Category</span>
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
                    <i class="fa fa-circle"></i>
                    <span class="title">NewsLetter</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-newsletter')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add NewsLetter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-newsletter')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View NewsLetter</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-circle"></i>
                    <span class="title">Case Study</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-case-study')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Case Study</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-case-study')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Case Study</span>
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

           {{--  <li class="nav-item">
                <a href="{{url('cd-admin/view-social-links')}}" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">Social Links</span>
                </a>
            </li>  --}}

            

            <li class="heading">
                <h3 class="uppercase">Files Section</h3>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Files Category</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-file-category')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">Add Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-file-category')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Files</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-files')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">Add Files</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-files')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Files</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Pages Section</h3>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Custom Pages(Projects)</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-custom-pages')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">Add Pages</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-custom-pages')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Pages</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Custom Pages(Menu)</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-custom-menu-pages')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">Add Pages</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-custom-menu-pages')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Pages</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Subscriptions Section</h3>
            </li>
            <li class="nav-item">
                <a href="{{url('cd-admin/view-subscriptions')}}" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Subscriptions</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
                <!-- END SIDEBAR