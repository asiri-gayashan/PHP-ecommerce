<?php

session_start();
if ($_SESSION["a"]) {


?>


<!DOCTYPE html>
<html lang="en" data-theme="light" data-sidebar-behaviour="fixed" data-navigation-color="inverted" data-is-fluid="true">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Webinning" name="author">


    <link rel="stylesheet" href="./bootstrap.css">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" id="stylesheetLTR">
    <link rel="stylesheet" href="./assets/css/theme.rtl.bundle.css" id="stylesheetRTL">


    <!-- ----------------------------------------------------------------- bootstrap icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- ----------------------------------------------------------------- bootstrap icons  -->


    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
    <link rel="stylesheet" href="https://dashly-theme.com/assets/css/theme.bundle.css">
    <link rel="stylesheet" href="./style.css">

    <!-- no-JS fallback -->
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
    </noscript>

    <script>
        // Theme switcher

        let themeSwitcher = document.getElementById('themeSwitcher');

        const getPreferredTheme = () => {
            if (localStorage.getItem('theme') != null) {
                return localStorage.getItem('theme');
            }

            return document.documentElement.dataset.theme;
        };

        const setTheme = function(theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            } else {
                document.documentElement.dataset.theme = theme;
            }

            localStorage.setItem('theme', theme);
        };

        const showActiveTheme = theme => {
            const activeBtn = document.querySelector(`[data-theme-value="${theme}"]`);

            document.querySelectorAll('[data-theme-value]').forEach(element => {
                element.classList.remove('active');
            });

            activeBtn && activeBtn.classList.add('active');

            // Set button if demo mode is enabled
            document.querySelectorAll('[data-theme-control="theme"]').forEach(element => {
                if (element.value == theme) {
                    element.checked = true;
                }
            });
        };

        function reloadPage() {
            window.location = window.location.pathname;
        }


        setTheme(getPreferredTheme());

        if (typeof themeSwitcher != 'undefined') {
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                if (localStorage.getItem('theme') != null) {
                    if (localStorage.getItem('theme') == 'auto') {
                        reloadPage();
                    }
                }
            });

            window.addEventListener('load', () => {
                showActiveTheme(getPreferredTheme());

                document.querySelectorAll('[data-theme-value]').forEach(element => {
                    element.addEventListener('click', () => {
                        const theme = element.getAttribute('data-theme-value');

                        localStorage.setItem('theme', theme);
                        reloadPage();
                    })
                })
            });
        }
    </script>
    <!-- Favicon -->
    <link rel="icon" href="./assets/favicon/favicon.ico" sizes="any">

    <!-- Demo script -->
    <script>
        var themeConfig = {
            theme: JSON.parse('"light"'),
            isRTL: JSON.parse('false'),
            isFluid: JSON.parse('true'),
            sidebarBehaviour: JSON.parse('"fixed"'),
            navigationColor: JSON.parse('"inverted"')
        };

        var isRTL = localStorage.getItem('isRTL') === 'true',
            isFluid = localStorage.getItem('isFluid') === 'true',
            theme = localStorage.getItem('theme'),
            sidebarSizing = localStorage.getItem('sidebarSizing'),
            linkLTR = document.getElementById('stylesheetLTR'),
            linkRTL = document.getElementById('stylesheetRTL'),
            html = document.documentElement;

        if (isRTL) {
            linkLTR.setAttribute('disabled', '');
            linkRTL.removeAttribute('disabled');
            html.setAttribute('dir', 'rtl');
        } else {
            linkRTL.setAttribute('disabled', '');
            linkLTR.removeAttribute('disabled');
            html.removeAttribute('dir');
        }
    </script>

    <!-- Page Title -->
    <title>New Tech</title>
</head>

<body>

    <!-- THEME CONFIGURATION -->
    <script>
        let themeAttrs = document.documentElement.dataset;

        for (let attr in themeAttrs) {
            if (localStorage.getItem(attr) != null) {
                document.documentElement.dataset[attr] = localStorage.getItem(attr);

                if (theme === 'auto') {
                    document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';

                    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                        e.matches ? document.documentElement.dataset.theme = 'dark' : document.documentElement.dataset.theme = 'light';
                    });
                }
            }
        }
    </script>
    <!-- NAVIGATION -->
    <nav id="mainNavbar" class="navbar navbar-vertical navbar-expand-lg scrollbar bg-dark navbar-dark">

        <!-- Theme configuration (navbar) -->
        <script>
            let navigationColor = localStorage.getItem('navigationColor'),
                navbar = document.getElementById('mainNavbar');

            if (navigationColor != null && navbar != null) {
                if (navigationColor == 'inverted') {
                    navbar.classList.add('bg-dark', 'navbar-dark');
                    navbar.classList.remove('bg-white', 'navbar-light');
                } else {
                    navbar.classList.add('bg-white', 'navbar-light');
                    navbar.classList.remove('bg-dark', 'navbar-dark');
                }
            }
        </script>
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand h-logo-lg text-decoration-none d-flex align-items-center text-white fs-1  " href="./index.php">

                <!-- <a href="./index.php" class="h-logo text-decoration-none text-black ">Ashirvadha</a> -->
                Ashirvadha

            </a>

            <!-- Navbar toggler -->
            <a href="javascript: void(0);" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#sidenavCollapse" aria-controls="sidenavCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </a>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenavCollapse">

                <!-- Navigation -->
                <ul class="navbar-nav mb-lg-7">




                    <li class="nav-item  ">
                        <a class="nav-link " href="#dashboardsCollapse" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="dashboardsCollapse">
                            <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.753,13.944v8.25h6v-6a1.5,1.5,0,0,1,1.5-1.5h1.5a1.5,1.5,0,0,1,1.5,1.5v6h6v-8.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                <path d="M.753,12.444,10.942,2.255a1.5,1.5,0,0,1,2.122,0L23.253,12.444" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            </svg>
                            <span>Dashboards</span>
                        </a>
                        <div class="collapse show" id="dashboardsCollapse">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link active">
                                        Default
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./dashboard-ecommerce.html" class="nav-link ">
                                        E-commerce
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link " data-bs-toggle="offcanvas" href="#offcanvasNotifications" role="button" aria-controls="offcanvasNotifications">
                            <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.25,18.75a1.5,1.5,0,0,1-1.5-1.5V9.75a1.5,1.5,0,0,1,1.5-1.5h10.5a1.5,1.5,0,0,1,1.5,1.5v7.5a1.5,1.5,0,0,1-1.5,1.5h-1.5v4.5l-4.5-4.5Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                <path d="M6.75,12.75l-3,3v-4.5H2.25a1.5,1.5,0,0,1-1.5-1.5V2.25A1.5,1.5,0,0,1,2.25.75h10.5a1.5,1.5,0,0,1,1.5,1.5v3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            </svg>
                            <span>Chat</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#userCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="userCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24 " class="nav-link-icon" height="18" fill="currentcolor" width="18">
                                <defs>
                                    <style>
                                        .a {
                                            fill: none;
                                            stroke: currentColor;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 1.5px;
                                        }
                                    </style>
                                </defs>
                                <title>user</title>

                                <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>




                            </svg>
                            <span>Users</span>
                        </a>
                        <div class="collapse " id="userCollapse">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        Add Users
                                        <span class="badge text-bg-primary badge-circle ms-3">7</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./manageUsers.php" class="nav-link ">
                                        Manage Users
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#orderCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="orderCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24 " class="nav-link-icon" height="18" fill="currentcolor" width="18">
                                <defs>
                                    <style>
                                        .a {
                                            fill: none;
                                            stroke: currentColor;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 1.5px;
                                        }
                                    </style>
                                </defs>
                                <title>orders</title>


                                <path d="M20 3H4a2 2 0 0 0-2 2v2a2 2 0 0 0 1 1.72V19a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.72A2 2 0 0 0 22 7V5a2 2 0 0 0-2-2zM4 5h16v2H4zm1 14V9h14v10z"></path>
                                <path d="M8 11h8v2H8z"></path>





                            </svg>
                            <span>Orders</span>
                        </a>
                        <div class="collapse " id="orderCollapse">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        Pending Orders
                                        <span class="badge text-bg-primary badge-circle ms-3">7</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        All
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#reportCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="reportCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24 " class="nav-link-icon" height="18" fill="currentcolor" width="18">
                                <defs>
                                    <style>
                                        .a {
                                            fill: none;
                                            stroke: currentColor;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 1.5px;
                                        }
                                    </style>
                                </defs>
                                <title>reports</title>

                                <path d="M3 3v17a1 1 0 0 0 1 1h17v-2H5V3H3z"></path>
                                <path d="M15.293 14.707a.999.999 0 0 0 1.414 0l5-5-1.414-1.414L16 12.586l-2.293-2.293a.999.999 0 0 0-1.414 0l-5 5 1.414 1.414L13 12.414l2.293 2.293z"></path>





                            </svg>
                            <span>Reports</span>
                        </a>
                        <div class="collapse " id="reportCollapse">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        Sales Report
                                        <span class="badge text-bg-primary badge-circle ms-3">7</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        Traffic Report
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#productCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="productCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24 " class="nav-link-icon" height="18" fill="currentcolor" width="18">
                                <defs>
                                    <style>
                                        .a {
                                            fill: none;
                                            stroke: currentColor;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 1.5px;
                                        }
                                    </style>
                                </defs>
                                <title>products</title>



                                <path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path>


                            </svg>
                            <span>Products</span>
                        </a>
                        <div class="collapse " id="productCollapse">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="./addproduct.php" class="nav-link ">
                                        Add Products
                                        <span class="badge text-bg-primary badge-circle ms-3">7</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./manageProducts.php" class="nav-link ">
                                        Manage Items
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        Drafts
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#emailCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="emailCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18">
                                <defs>
                                    <style>
                                        .a {
                                            fill: none;
                                            stroke: currentColor;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 1.5px;
                                        }
                                    </style>
                                </defs>
                                <title>envelope</title>
                                <rect class="a" x="0.75" y="4.5" width="22.5" height="15" rx="1.5" ry="1.5" />
                                <line class="a" x1="15.687" y1="9.975" x2="19.5" y2="13.5" />
                                <line class="a" x1="8.313" y1="9.975" x2="4.5" y2="13.5" />
                                <path class="a" d="M22.88,5.014l-9.513,6.56a2.406,2.406,0,0,1-2.734,0L1.12,5.014" />
                            </svg>
                            <span>Email</span>
                        </a>
                        <div class="collapse " id="emailCollapse">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="./inbox.html" class="nav-link ">
                                        Inbox
                                        <span class="badge text-bg-primary badge-circle ms-3">7</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./read-email.html" class="nav-link ">
                                        Read Email
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#tasksCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="tasksCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentcolor" viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18">
                                <circle cx="7.499" cy="9.5" r="1.5"></circle>
                                <path d="m10.499 14-1.5-2-3 4h12l-4.5-6z"></path>
                                <path d="M19.999 4h-16c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm-16 14V6h16l.002 12H3.999z"></path>

                            </svg>
                            <span>Media</span>
                        </a>
                        <div class="collapse " id="tasksCollapse">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        Add Media
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        Remove Items
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item w-100">
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a href="./docs/index.html" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentcolor" viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18">
                                <path d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z"></path>
                                <path d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z"></path>

                            </svg>


                            <span>Settings</span>
                            <span class="badge text-bg-primary rounded-pill ms-auto">v1.2</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./docs/accordion.html" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentcolor" viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18">
                                <path d="M19.002 3h-14c-1.103 0-2 .897-2 2v4h2V5h14v14h-14v-4h-2v4c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.898-2-2-2z"></path>
                                <path d="m11 16 5-4-5-4v3.001H3v2h8z"></path>
                            </svg>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul>
                <!-- End of Navigation -->



            </div>
            <!-- End of Collapse -->
        </div>
    </nav>
    <!-- MAIN CONTENT -->
    <main>

        <!-- HEADER -->
        <header class="container-fluid d-flex py-6 mb-4">

            <!-- Search -->
            <form class="d-none d-md-inline-block me-auto">
                <div class="input-group input-group-merge">

                    <!-- Input -->
                    <input type="text" class="form-control bg-light-green border-light-green w-250px" placeholder="Search..." aria-label="Search for any term">

                    <!-- Button -->
                    <span class="input-group-text bg-light-green border-light-green p-0">

                        <!-- Button -->
                        <button class="btn btn-primary rounded-2 w-30px h-30px p-0 mx-1" type="button" aria-label="Search button">
                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.750 9.812 A9.063 9.063 0 1 0 18.876 9.812 A9.063 9.063 0 1 0 0.750 9.812 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(-3.056 4.62) rotate(-23.025)" />
                                <path d="M16.221 16.22L23.25 23.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            </svg>
                        </button>
                    </span>
                </div>


            </form>

            <!-- Top buttons -->
            <div class="d-flex align-items-center ms-auto me-n1 me-lg-n2">

                <!-- Dropdown -->
                <div class="dropdown" id="themeSwitcher">
                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px link-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="18" width="18">
                            <g>
                                <path d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z" style="fill: currentColor" />
                                <path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z" style="fill: currentColor" />
                                <path d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z" style="fill: currentColor" />
                                <path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z" style="fill: currentColor" />
                                <path d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z" style="fill: currentColor" />
                                <path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z" style="fill: currentColor" />
                                <path d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z" style="fill: currentColor" />
                                <path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z" style="fill: currentColor" />
                                <path d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z" style="fill: currentColor" />
                            </g>
                        </svg>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <button type="button" class="dropdown-item active" data-theme-value="light">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18">
                                    <g>
                                        <path d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z" style="fill: currentColor" />
                                        <path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z" style="fill: currentColor" />
                                        <path d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z" style="fill: currentColor" />
                                        <path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z" style="fill: currentColor" />
                                        <path d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z" style="fill: currentColor" />
                                        <path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z" style="fill: currentColor" />
                                        <path d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z" style="fill: currentColor" />
                                        <path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z" style="fill: currentColor" />
                                        <path d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z" style="fill: currentColor" />
                                    </g>
                                </svg>
                                Light mode
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item" data-theme-value="dark">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18">
                                    <path d="M19.57,23.34a1,1,0,0,0,0-1.9,9.94,9.94,0,0,1,0-18.88,1,1,0,0,0,.68-.94,1,1,0,0,0-.68-.95A11.58,11.58,0,0,0,8.88,2.18,12.33,12.33,0,0,0,3.75,12a12.31,12.31,0,0,0,5.11,9.79A11.49,11.49,0,0,0,15.61,24,12.55,12.55,0,0,0,19.57,23.34ZM10,20.17A10.29,10.29,0,0,1,5.75,12a10.32,10.32,0,0,1,4.3-8.19A9.34,9.34,0,0,1,15.59,2a.17.17,0,0,1,.17.13.18.18,0,0,1-.07.2,11.94,11.94,0,0,0-.18,19.21.25.25,0,0,1-.16.45A9.5,9.5,0,0,1,10,20.17Z" style="fill: currentColor" />
                                </svg>
                                Dark mode
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item" data-theme-value="auto">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18">
                                    <path d="M24,12a1,1,0,0,0-1-1H19.09a.51.51,0,0,1-.49-.4,6.83,6.83,0,0,0-.94-2.28.5.5,0,0,1,.06-.63l2.77-2.76a1,1,0,1,0-1.42-1.42L16.31,6.28a.5.5,0,0,1-.63.06A6.83,6.83,0,0,0,13.4,5.4a.5.5,0,0,1-.4-.49V1a1,1,0,0,0-2,0V4.91a.51.51,0,0,1-.4.49,6.83,6.83,0,0,0-2.28.94.5.5,0,0,1-.63-.06L4.93,3.51A1,1,0,0,0,3.51,4.93L6.28,7.69a.5.5,0,0,1,.06.63A6.83,6.83,0,0,0,5.4,10.6a.5.5,0,0,1-.49.4H1a1,1,0,0,0,0,2H4.91a.51.51,0,0,1,.49.4,6.83,6.83,0,0,0,.94,2.28.5.5,0,0,1-.06.63L3.51,19.07a1,1,0,1,0,1.42,1.42l2.76-2.77a.5.5,0,0,1,.63-.06,6.83,6.83,0,0,0,2.28.94.5.5,0,0,1,.4.49V23a1,1,0,0,0,2,0V19.09a.51.51,0,0,1,.4-.49,6.83,6.83,0,0,0,2.28-.94.5.5,0,0,1,.63.06l2.76,2.77a1,1,0,1,0,1.42-1.42l-2.77-2.76a.5.5,0,0,1-.06-.63,6.83,6.83,0,0,0,.94-2.28.5.5,0,0,1,.49-.4H23A1,1,0,0,0,24,12Zm-8.74,2.5A5.76,5.76,0,0,1,9.5,8.74a5.66,5.66,0,0,1,.16-1.31A.49.49,0,0,1,10,7.07a5.36,5.36,0,0,1,1.8-.31,5.47,5.47,0,0,1,5.46,5.46,5.36,5.36,0,0,1-.31,1.8.49.49,0,0,1-.35.32A5.53,5.53,0,0,1,15.26,14.5Z" style="fill: currentColor" />
                                </svg>
                                Auto
                            </button>
                        </li>
                    </ul>
                </div>

                <!-- Separator -->
                <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

                <!-- Dropdown -->
                <div class="dropdown">
                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">
                        <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img" src="https://d33wubrfki0l68.cloudfront.net/8ab0a140561aa1ea23abaa0101bd41b9b1d0cb12/e951b/assets/images/flags/1x1/us.svg" alt="..." width="18" height="18"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <h6 class="dropdown-header text-uppercase">Select language</h6>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="dropdown-item active">
                                <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img" src="https://d33wubrfki0l68.cloudfront.net/8ab0a140561aa1ea23abaa0101bd41b9b1d0cb12/e951b/assets/images/flags/1x1/us.svg" alt="..." width="18" height="18"></span><span class="text-truncate ms-2">English (US)</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="dropdown-item">
                                <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img" src="https://d33wubrfki0l68.cloudfront.net/7ee571bc59a0a1ac377631263167fb273a12a7d4/f112e/assets/images/flags/1x1/gb.svg" alt="..." width="18" height="18"></span><span class="text-truncate ms-2">English (UK)</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="dropdown-item">
                                <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img" src="https://d33wubrfki0l68.cloudfront.net/719d768eaac30c30937cb72db78ce3391e33a5dc/05fb9/assets/images/flags/1x1/es.svg" alt="..." width="18" height="18"></span><span class="text-truncate ms-2">Español</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="dropdown-item">
                                <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img" src="https://d33wubrfki0l68.cloudfront.net/423c01c313d4dd7ca6acd49b868069981490a9b7/c7155/assets/images/flags/1x1/fr.svg" alt="..." width="18" height="18"></span><span class="text-truncate ms-2">Française</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="dropdown-item">
                                <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img" src="https://d33wubrfki0l68.cloudfront.net/ba8ec66c54af0ff852cdbee4794d3858176ac85e/419c1/assets/images/flags/1x1/de.svg" alt="..." width="18" height="18"></span><span class="text-truncate ms-2">Deutsch</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="dropdown-item">
                                <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img" src="https://d33wubrfki0l68.cloudfront.net/c82251ff8fa03cc4eaaa6f972e7a9eb6f3d9380c/f62a5/assets/images/flags/1x1/cn.svg" alt="..." width="18" height="18"></span><span class="text-truncate ms-2">中文 (繁體)</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Separator -->
                <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

                <!-- Button -->
                <a class="d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px position-relative link-secondary" data-bs-toggle="offcanvas" href="#offcanvasNotifications" role="button" aria-controls="offcanvasNotifications">
                    <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10,21.75a2.087,2.087,0,0,0,4.005,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                        <path d="M12 3L12 0.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                        <path d="M12,3a7.5,7.5,0,0,1,7.5,7.5c0,7.046,1.5,8.25,1.5,8.25H3s1.5-1.916,1.5-8.25A7.5,7.5,0,0,1,12,3Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                    </svg>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger">
                        20+<span class="visually-hidden">unread messages</span>
                    </span>
                </a>

                <!-- Notifications offcanvas -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNotifications" aria-labelledby="offcanvasNotificationsLabel">
                    <div class="offcanvas-header px-5">
                        <h3 class="offcanvas-title" id="offcanvasNotificationsLabel">Notifications</h3>

                        <div class="d-flex align-items-start">
                            <div class="dropdown">
                                <a href="javascript: void(0);" class="dropdown-toggle no-arrow w-20px h-20px me-2 text-body" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="16" width="16">
                                        <g>
                                            <circle cx="3.25" cy="12" r="3.25" style="fill: currentColor" />
                                            <circle cx="12" cy="12" r="3.25" style="fill: currentColor" />
                                            <circle cx="20.75" cy="12" r="3.25" style="fill: currentColor" />
                                        </g>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2 text-secondary" height="14" width="14">
                                                <g>
                                                    <path d="M23.22,2.06a1.49,1.49,0,0,0-2,.59l-8.5,15.43L6.46,11.29a1.5,1.5,0,1,0-2.21,2l7.64,8.34a1.52,1.52,0,0,0,2.42-.29L23.81,4.1A1.5,1.5,0,0,0,23.22,2.06Z" style="fill: currentColor" />
                                                    <path d="M2.61,14.63a1.5,1.5,0,0,0-2.22,2l4.59,5a1.52,1.52,0,0,0,2.11.09,1.49,1.49,0,0,0,.1-2.12Z" style="fill: currentColor" />
                                                    <path d="M10.3,13a1.41,1.41,0,0,0,2-.54L16.89,4.1a1.5,1.5,0,1,0-2.62-1.45L9.68,11A1.41,1.41,0,0,0,10.3,13Z" style="fill: currentColor" />
                                                </g>
                                            </svg>
                                            Mark as all read
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2 text-secondary" height="14" width="14">
                                                <g>
                                                    <path d="M21.5,2.5H2.5a2,2,0,0,0-2,2v3a1,1,0,0,0,1,1h21a1,1,0,0,0,1-1v-3A2,2,0,0,0,21.5,2.5Z" style="fill: currentColor" />
                                                    <path d="M21.5,10H2.5a1,1,0,0,0-1,1v8.5a2,2,0,0,0,2,2h17a2,2,0,0,0,2-2V11A1,1,0,0,0,21.5,10Zm-6.25,3.5A1.25,1.25,0,0,1,14,14.75H10a1.25,1.25,0,0,1,0-2.5h4A1.25,1.25,0,0,1,15.25,13.5Z" style="fill: currentColor" />
                                                </g>
                                            </svg>
                                            Archive all
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2 text-secondary" height="14" width="14">
                                                <g>
                                                    <path d="M21,19.5a1,1,0,0,0,0-2A1.5,1.5,0,0,1,19.5,16V11.14a8.65,8.65,0,0,0-.4-2.62l-11,11Z" style="fill: currentColor" />
                                                    <path d="M14.24,21H9.76a.25.25,0,0,0-.24.22,2.64,2.64,0,0,0,0,.28,2.5,2.5,0,0,0,5,0,2.64,2.64,0,0,0,0-.28A.25.25,0,0,0,14.24,21Z" style="fill: currentColor" />
                                                    <path d="M1,24a1,1,0,0,0,.71-.28l22-22a1,1,0,0,0,0-1.42,1,1,0,0,0-1.42,0l-5,5A7.31,7.31,0,0,0,13,3.07V1a1,1,0,0,0-2,0V3.07a8,8,0,0,0-6.5,8.07V16A1.5,1.5,0,0,1,3,17.5a1,1,0,0,0,0,2h.09L.29,22.29a1,1,0,0,0,0,1.42A1,1,0,0,0,1,24Z" style="fill: currentColor" />
                                                </g>
                                            </svg>
                                            Disable notifications
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2 text-secondary" height="14" width="14">
                                                <g>
                                                    <rect x="4.25" y="4.5" width="5.75" height="7.25" rx="1.25" style="fill: currentColor" />
                                                    <path d="M24,10a3,3,0,0,0-3-3H19V2.5a2,2,0,0,0-2-2H2a2,2,0,0,0-2,2V20a3.5,3.5,0,0,0,3.5,3.5h17A3.5,3.5,0,0,0,24,20ZM3.5,21.5A1.5,1.5,0,0,1,2,20V3a.5.5,0,0,1,.5-.5h14A.5.5,0,0,1,17,3V20a3.51,3.51,0,0,0,.11.87.5.5,0,0,1-.09.44.49.49,0,0,1-.39.19ZM22,20a1.5,1.5,0,0,1-3,0V9.5a.5.5,0,0,1,.5-.5H21a1,1,0,0,1,1,1Z" style="fill: currentColor" />
                                                    <rect x="12" y="6.05" width="3.5" height="2" rx="0.75" style="fill: currentColor" />
                                                    <rect x="12" y="10.05" width="3.5" height="2" rx="0.75" style="fill: currentColor" />
                                                    <rect x="4" y="14.05" width="11.5" height="2" rx="0.75" style="fill: currentColor" />
                                                    <rect x="4" y="18.05" width="9" height="2" rx="0.75" style="fill: currentColor" />
                                                </g>
                                            </svg>
                                            What's new?
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Button -->
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                    </div>

                    <div class="offcanvas-body p-0">
                        <div class="list-group list-group-flush">
                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/5dfa4398a7f2beddbcfa617402e193f2f13aaa94/2ecb0/assets/images/profiles/profile-28.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Daniel</h5>
                                            <small class="text-muted">10 minutes ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">RE: Email pre-population from external source</p>
                                            <small class="text-secondary">Not sure if we'll need any further instruction on how to utilise the encoded ID in links from the new email broadcast tool.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-info-soft">M</span>
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Mochahost.com</h5>
                                            <small class="text-muted">14 minutes ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Customer invoice</p>
                                            <small class="text-secondary">This is a notice that an invoice has been generated on 05/14/2022.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/f3d8c9fbcd994759c966476a8349d5d053e38964/e7323/assets/images/profiles/profile-26.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Harry</h5>
                                            <small class="text-muted">32 minutes ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Farewell card</p>
                                            <small class="text-secondary">Hi everyone, thanks to all who have already signed and contributed to Ellie's leaving card.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/0b34af989cce5e54297f16547b3eff1ace44dad5/eb8ea/assets/images/profiles/profile-20.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Gavin</h5>
                                            <small class="text-muted">55 minutes ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Weekly cath up</p>
                                            <small class="text-secondary">Let's see how your emails performed in the past week.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/b12e43e592a36b25ced24c52bc8ae78595f1f2c6/2ceab/assets/images/profiles/profile-24.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Pamela - HR</h5>
                                            <small class="text-muted">1 hour ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">New starter</p>
                                            <small class="text-secondary">I wanted to introduce Alan to you all, who starts today in the Operations Team as our new Global Payroll & Benefits Manager.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/9f5880fc99a40d5021e5a133fe72f232e3883d3a/c965d/assets/images/profiles/profile-13.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">James</h5>
                                            <small class="text-muted">2 hours ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Looking for newsletter analyst</p>
                                            <small class="text-secondary">Good morning Brian, I hope you can help with the following. I am looking for somebody who can help us create stronger newsletters.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-primary-soft">S</span>
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">service.paypal.com</h5>
                                            <small class="text-muted">3 hours ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">You have a Payout!</p>
                                            <small class="text-secondary">Please note that it may take a little while for this payment to appear in the Activity section of your account.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-primary-soft">C</span>
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">CookieYes</h5>
                                            <small class="text-muted">5 hours ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Welcome to CookieYes!</p>
                                            <small class="text-secondary">Welcome to CookieYes! Thank you for creating an account with us.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/102e41d9e1988e0849ecfe402b1d46f4efd3574b/8dc2e/assets/images/profiles/profile-12.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Andrew</h5>
                                            <small class="text-muted">6 hours ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Congratulations! - and thank you</p>
                                            <small class="text-secondary">Thank you so much for continuing to leave no stone unturned in pursuit of new milestones of success.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/ea01948f5a48922378b407c27d2b4e5809ed4949/35ecd/assets/images/profiles/profile-11.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Helen</h5>
                                            <small class="text-muted">9 hours ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Bank Holidays season starts tomorrow</p>
                                            <small class="text-secondary">Our office will be closed on these days, as it will also be on Friday 6 May.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/eec1f115f0af81936bbe3a4f4a4d043cd3c0e7e4/34439/assets/images/profiles/profile-09.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Tiffany</h5>
                                            <small class="text-muted">1 day ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">External meetings and events</p>
                                            <small class="text-secondary">We have updated our external meeting and events protocol. Please have a look at the office board.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-danger-soft">II</span>
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Ionos Info</h5>
                                            <small class="text-muted">2 days ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Recommend us to earn attractive commissions</p>
                                            <small class="text-secondary">Happy with your product or service? Sign up for the IONOS Referral Program to recommend us to your business partners, friends or family. We'll reward you with attractive commissions when they place an order.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/102e41d9e1988e0849ecfe402b1d46f4efd3574b/8dc2e/assets/images/profiles/profile-12.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Edward</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Website change request</p>
                                            <small class="text-secondary">Please add video overlay option to microsite header image</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-primary">BT</span>
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Bootstrap Themes</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">[Bootstrap Themes] New order (123456)!</p>
                                            <small class="text-secondary">You've received the following order from alansmith</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/e83422b2242219796524c41b945eb0a4b4b75dfd/caa0b/assets/images/profiles/profile-08.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Greg</h5>
                                            <small class="text-muted">4 days ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Greg Smith (Jira) 2</p>
                                            <small class="text-secondary">[JIRA] (WEB-1022) Add Full Width Video Content Block to microsites</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/790b7dd581a3ac4fd0410afad0fb12c6e93c9e7a/b0657/assets/images/profiles/profile-07.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Michael</h5>
                                            <small class="text-muted">5 days ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Hard drive limit</p>
                                            <small class="text-secondary">Your hard drive is close to its storage cap. Once exceeded, you can't add new items or sync changes.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-info">RC</span>
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Rave Coffee</h5>
                                            <small class="text-muted">6 days ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">It's Double Points - ⏰ 24 hours only</p>
                                            <small class="text-secondary">Login to your Rave account to place your order and you will automatically earn double points on every $ spent.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/4b8c918c73e2c72876e4bd4ba8c89401bae69d14/5923c/assets/images/profiles/profile-03.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">John</h5>
                                            <small class="text-muted">7 days ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">John Po (Jira)</p>
                                            <small class="text-secondary">Improving slide arrows and indicators on gift impact, testimonial and victories module</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Dropdown -->
                <div class="dropdown">
                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px link-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">
                        <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.250 12.000 A3.750 3.750 0 1 0 15.750 12.000 A3.750 3.750 0 1 0 8.250 12.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M17.119 20.301L12.529 15.711" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M15.711 12.53L20.301 17.119" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M3.699 17.119L8.289 12.529" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M11.471 15.712L6.881 20.301" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M6.881 3.7L11.471 8.289" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M8.289 11.471L3.699 6.881" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M20.301 6.881L15.711 11.471" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M12.529 8.289L17.119 3.7" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M2.250 12.000 A9.750 9.750 0 1 0 21.750 12.000 A9.750 9.750 0 1 0 2.250 12.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                        </svg>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end w-300px h-250px overflow-auto scrollbar">
                        <h6 class="dropdown-header text-uppercase">Apps & Services</h6>

                        <div class="py-4 px-5">
                            <div class="row">
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <a href="javascript: void(0);" class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                        <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                            <svg class="avatar-img mx-auto" enable-background="new 0 0 2447.6 2452.5" viewBox="0 0 2447.6 2452.5" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-rule="evenodd" fill-rule="evenodd">
                                                    <path d="m897.4 0c-135.3.1-244.8 109.9-244.7 245.2-.1 135.3 109.5 245.1 244.8 245.2h244.8v-245.1c.1-135.3-109.5-245.1-244.9-245.3.1 0 .1 0 0 0m0 654h-652.6c-135.3.1-244.9 109.9-244.8 245.2-.2 135.3 109.4 245.1 244.7 245.3h652.7c135.3-.1 244.9-109.9 244.8-245.2.1-135.4-109.5-245.2-244.8-245.3z" fill="#36c5f0"></path>
                                                    <path d="m2447.6 899.2c.1-135.3-109.5-245.1-244.8-245.2-135.3.1-244.9 109.9-244.8 245.2v245.3h244.8c135.3-.1 244.9-109.9 244.8-245.3zm-652.7 0v-654c.1-135.2-109.4-245-244.7-245.2-135.3.1-244.9 109.9-244.8 245.2v654c-.2 135.3 109.4 245.1 244.7 245.3 135.3-.1 244.9-109.9 244.8-245.3z" fill="#2eb67d"></path>
                                                    <path d="m1550.1 2452.5c135.3-.1 244.9-109.9 244.8-245.2.1-135.3-109.5-245.1-244.8-245.2h-244.8v245.2c-.1 135.2 109.5 245 244.8 245.2zm0-654.1h652.7c135.3-.1 244.9-109.9 244.8-245.2.2-135.3-109.4-245.1-244.7-245.3h-652.7c-135.3.1-244.9 109.9-244.8 245.2-.1 135.4 109.4 245.2 244.7 245.3z" fill="#ecb22e"></path>
                                                    <path d="m0 1553.2c-.1 135.3 109.5 245.1 244.8 245.2 135.3-.1 244.9-109.9 244.8-245.2v-245.2h-244.8c-135.3.1-244.9 109.9-244.8 245.2zm652.7 0v654c-.2 135.3 109.4 245.1 244.7 245.3 135.3-.1 244.9-109.9 244.8-245.2v-653.9c.2-135.3-109.4-245.1-244.7-245.3-135.4 0-244.9 109.8-244.8 245.1 0 0 0 .1 0 0" fill="#e01e5a"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        Slack
                                    </a>
                                </div>
                                <div class="col-4 d-flex justify-content-center align-items-end">
                                    <a href="javascript: void(0);" class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                        <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                            <svg class="avatar-img mx-auto" viewBox="0 0 256 249" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet">
                                                <g fill="#161614">
                                                    <path d="M127.505 0C57.095 0 0 57.085 0 127.505c0 56.336 36.534 104.13 87.196 120.99 6.372 1.18 8.712-2.766 8.712-6.134 0-3.04-.119-13.085-.173-23.739-35.473 7.713-42.958-15.044-42.958-15.044-5.8-14.738-14.157-18.656-14.157-18.656-11.568-7.914.872-7.752.872-7.752 12.804.9 19.546 13.14 19.546 13.14 11.372 19.493 29.828 13.857 37.104 10.6 1.144-8.242 4.449-13.866 8.095-17.05-28.32-3.225-58.092-14.158-58.092-63.014 0-13.92 4.981-25.295 13.138-34.224-1.324-3.212-5.688-16.18 1.235-33.743 0 0 10.707-3.427 35.073 13.07 10.17-2.826 21.078-4.242 31.914-4.29 10.836.048 21.752 1.464 31.942 4.29 24.337-16.497 35.029-13.07 35.029-13.07 6.94 17.563 2.574 30.531 1.25 33.743 8.175 8.929 13.122 20.303 13.122 34.224 0 48.972-29.828 59.756-58.22 62.912 4.573 3.957 8.648 11.717 8.648 23.612 0 17.06-.148 30.791-.148 34.991 0 3.393 2.295 7.369 8.759 6.117 50.634-16.879 87.122-64.656 87.122-120.973C255.009 57.085 197.922 0 127.505 0" />
                                                    <path d="M47.755 181.634c-.28.633-1.278.823-2.185.389-.925-.416-1.445-1.28-1.145-1.916.275-.652 1.273-.834 2.196-.396.927.415 1.455 1.287 1.134 1.923M54.027 187.23c-.608.564-1.797.302-2.604-.589-.834-.889-.99-2.077-.373-2.65.627-.563 1.78-.3 2.616.59.834.899.996 2.08.36 2.65M58.33 194.39c-.782.543-2.06.034-2.849-1.1-.781-1.133-.781-2.493.017-3.038.792-.545 2.05-.055 2.85 1.07.78 1.153.78 2.513-.019 3.069M65.606 202.683c-.699.77-2.187.564-3.277-.488-1.114-1.028-1.425-2.487-.724-3.258.707-.772 2.204-.555 3.302.488 1.107 1.026 1.445 2.496.7 3.258M75.01 205.483c-.307.998-1.741 1.452-3.185 1.028-1.442-.437-2.386-1.607-2.095-2.616.3-1.005 1.74-1.478 3.195-1.024 1.44.435 2.386 1.596 2.086 2.612M85.714 206.67c.036 1.052-1.189 1.924-2.705 1.943-1.525.033-2.758-.818-2.774-1.852 0-1.062 1.197-1.926 2.721-1.951 1.516-.03 2.758.815 2.758 1.86M96.228 206.267c.182 1.026-.872 2.08-2.377 2.36-1.48.27-2.85-.363-3.039-1.38-.184-1.052.89-2.105 2.367-2.378 1.508-.262 2.857.355 3.049 1.398" />
                                                </g>
                                            </svg>
                                        </span>
                                        GitHub
                                    </a>
                                </div>
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <a href="javascript: void(0);" class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                        <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                            <svg class="avatar-img mx-auto" viewBox="2.59 0 214.09101008 224" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <linearGradient id="a" gradientTransform="matrix(1 0 0 -1 0 264)" gradientUnits="userSpaceOnUse" x1="102.4" x2="56.15" y1="218.63" y2="172.39">
                                                    <stop offset=".18" stop-color="#0052cc" />
                                                    <stop offset="1" stop-color="#2684ff" />
                                                </linearGradient>
                                                <linearGradient id="b" x1="114.65" x2="160.81" xlink:href="#a" y1="85.77" y2="131.92" />
                                                <path d="m214.06 105.73-96.39-96.39-9.34-9.34-72.56 72.56-33.18 33.17a8.89 8.89 0 0 0 0 12.54l66.29 66.29 39.45 39.44 72.55-72.56 1.13-1.12 32.05-32a8.87 8.87 0 0 0 0-12.59zm-105.73 39.39-33.12-33.12 33.12-33.12 33.11 33.12z" fill="#2684ff" />
                                                <path d="m108.33 78.88a55.75 55.75 0 0 1 -.24-78.61l-72.47 72.44 39.44 39.44z" fill="url(#a)" />
                                                <path d="m141.53 111.91-33.2 33.21a55.77 55.77 0 0 1 0 78.86l72.67-72.63z" fill="url(#b)" />
                                            </svg>
                                        </span>
                                        JIRA
                                    </a>
                                </div>
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <a href="javascript: void(0);" class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                        <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                            <svg class="avatar-img mx-auto" viewBox="0 0 42 37" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>dropbox_logo_glyph_2015_m1</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-59.000000, -214.000000)" fill="#0062FF" fill-rule="nonzero">
                                                        <g id="Storages" transform="translate(30.000000, 183.000000)">
                                                            <g id="logo" transform="translate(20.000000, 20.000000)">
                                                                <g id="dropbox_logo_glyph_2015_m1" transform="translate(9.000000, 11.500000)">
                                                                    <path d="M10.3534884,0.68372093 L0,7.3255814 L10.3534884,13.8697674 L20.7069767,7.3255814 L10.3534884,0.68372093 Z M31.0604651,0.68372093 L20.7069767,7.3255814 L31.0604651,13.8697674 L41.4139535,7.3255814 L31.0604651,0.68372093 Z M0,20.5116279 L10.3534884,27.1534884 L20.7069767,20.5116279 L10.3534884,13.8697674 L0,20.5116279 Z M31.0604651,13.8697674 L20.7069767,20.5116279 L31.0604651,27.1534884 L41.4139535,20.5116279 L31.0604651,13.8697674 Z M10.3534884,29.3023256 L20.7069767,35.944186 L31.0604651,29.3023256 L20.7069767,22.7581395 L10.3534884,29.3023256 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                        Dropbox
                                    </a>
                                </div>
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <a href="javascript: void(0);" class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                        <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                            <svg class="avatar-img mx-auto" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="100" height="100" fill="#000" fill-opacity="0" />
                                                <circle cx="50" cy="50" r="48" fill="#EA4C89" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M50 0C22.397 0 0 22.397 0 50C0 77.603 22.397 100 50 100C77.5488 100 100 77.603 100 50C100 22.397 77.5488 0 50 0ZM83.026 23.0477C88.9913 30.3145 92.5705 39.5879 92.679 49.6204C91.269 49.3492 77.1692 46.4751 62.961 48.2646C62.6356 47.5597 62.3644 46.8004 62.0391 46.0412C61.1714 43.9805 60.1952 41.8655 59.2191 39.859C74.9458 33.4599 82.1041 24.2408 83.026 23.0477ZM50 7.37527C60.846 7.37527 70.7701 11.4425 78.308 18.1128C77.5488 19.1974 71.0954 27.82 55.9111 33.5141C48.9154 20.6616 41.1605 10.141 39.9675 8.5141C43.167 7.75488 46.5293 7.37527 50 7.37527ZM31.833 11.3883C32.9718 12.9067 40.564 23.4816 47.6681 36.0629C27.7115 41.3774 10.0868 41.269 8.18872 41.269C10.9544 28.0369 19.9024 17.0282 31.833 11.3883ZM7.26681 50.0542C7.26681 49.6204 7.26681 49.1866 7.26681 48.7527C9.11063 48.8069 29.8265 49.0781 51.1388 42.679C52.3861 45.0651 53.5249 47.5054 54.6095 49.9458C54.0672 50.1085 53.4707 50.2712 52.9284 50.4338C30.9111 57.538 19.1974 76.9523 18.2213 78.5792C11.4425 71.0412 7.26681 61.0087 7.26681 50.0542ZM50 92.7332C40.1302 92.7332 31.0195 89.3709 23.8069 83.731C24.5662 82.1584 33.243 65.4555 57.321 57.0499C57.4295 56.9957 57.4837 56.9957 57.5922 56.9414C63.6117 72.5054 66.0521 85.5748 66.7028 89.3167C61.551 91.5401 55.9111 92.7332 50 92.7332ZM73.807 85.4122C73.3731 82.8091 71.0955 70.3362 65.5098 54.9892C78.9046 52.8742 90.6182 56.3449 92.0824 56.833C90.2386 68.7093 83.4056 78.9588 73.807 85.4122Z" fill="#C32361" />
                                            </svg>
                                        </span>
                                        Dribbble
                                    </a>
                                </div>
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <a href="javascript: void(0);" class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                        <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                            <svg class="avatar-img mx-auto" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <g transform="matrix(1, 0, 0, 1, 27.009001, -39.238998)">
                                                    <path fill="#4285F4" d="M -3.264 51.509 C -3.264 50.719 -3.334 49.969 -3.454 49.239 L -14.754 49.239 L -14.754 53.749 L -8.284 53.749 C -8.574 55.229 -9.424 56.479 -10.684 57.329 L -10.684 60.329 L -6.824 60.329 C -4.564 58.239 -3.264 55.159 -3.264 51.509 Z"></path>
                                                    <path fill="#34A853" d="M -14.754 63.239 C -11.514 63.239 -8.804 62.159 -6.824 60.329 L -10.684 57.329 C -11.764 58.049 -13.134 58.489 -14.754 58.489 C -17.884 58.489 -20.534 56.379 -21.484 53.529 L -25.464 53.529 L -25.464 56.619 C -23.494 60.539 -19.444 63.239 -14.754 63.239 Z"></path>
                                                    <path fill="#FBBC05" d="M -21.484 53.529 C -21.734 52.809 -21.864 52.039 -21.864 51.239 C -21.864 50.439 -21.724 49.669 -21.484 48.949 L -21.484 45.859 L -25.464 45.859 C -26.284 47.479 -26.754 49.299 -26.754 51.239 C -26.754 53.179 -26.284 54.999 -25.464 56.619 L -21.484 53.529 Z"></path>
                                                    <path fill="#EA4335" d="M -14.754 43.989 C -12.984 43.989 -11.404 44.599 -10.154 45.789 L -6.734 42.369 C -8.804 40.429 -11.514 39.239 -14.754 39.239 C -19.444 39.239 -23.494 41.939 -25.464 45.859 L -21.484 48.949 C -20.534 46.099 -17.884 43.989 -14.754 43.989 Z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        Google
                                    </a>
                                </div>
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <a href="javascript: void(0);" class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                        <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                            <svg class="avatar-img mx-auto" viewBox="0 0 512 407.864" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m106.344 0c-29.214 0-50.831 25.57-49.863 53.3.929 26.641-.278 61.145-8.964 89.283-8.717 28.217-23.449 46.098-47.517 48.393v25.912c24.068 2.3 38.8 20.172 47.516 48.393 8.687 28.138 9.893 62.642 8.964 89.283-.968 27.726 20.649 53.3 49.868 53.3h299.347c29.214 0 50.827-25.57 49.859-53.3-.929-26.641.278-61.145 8.964-89.283 8.717-28.221 23.413-46.1 47.482-48.393v-25.912c-24.068-2.3-38.764-20.172-47.482-48.393-8.687-28.134-9.893-62.642-8.964-89.283.968-27.726-20.645-53.3-49.859-53.3h-299.355zm240.775 251.067c0 38.183-28.481 61.34-75.746 61.34h-80.458a8.678 8.678 0 0 1 -8.678-8.678v-199.593a8.678 8.678 0 0 1 8.678-8.678h80c39.411 0 65.276 21.348 65.276 54.124 0 23.005-17.4 43.6-39.567 47.208v1.2c30.176 3.31 50.495 24.21 50.495 53.077zm-84.519-128.1h-45.876v64.8h38.639c29.87 0 46.34-12.028 46.34-33.527-.003-20.148-14.163-31.273-39.103-31.273zm-45.876 90.511v71.411h47.564c31.1 0 47.573-12.479 47.573-35.931s-16.935-35.484-49.573-35.484h-45.564z" fill="#7952b3" fill-rule="evenodd" />
                                            </svg>
                                        </span>
                                        Bootstrap
                                    </a>
                                </div>
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <a href="javascript: void(0);" class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                        <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                            <svg class="avatar-img mx-auto" viewBox="-.1 1.1 304.9 179.8" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m86.4 66.4c0 3.7.4 6.7 1.1 8.9.8 2.2 1.8 4.6 3.2 7.2.5.8.7 1.6.7 2.3 0 1-.6 2-1.9 3l-6.3 4.2c-.9.6-1.8.9-2.6.9-1 0-2-.5-3-1.4-1.4-1.5-2.6-3.1-3.6-4.7-1-1.7-2-3.6-3.1-5.9-7.8 9.2-17.6 13.8-29.4 13.8-8.4 0-15.1-2.4-20-7.2s-7.4-11.2-7.4-19.2c0-8.5 3-15.4 9.1-20.6s14.2-7.8 24.5-7.8c3.4 0 6.9.3 10.6.8s7.5 1.3 11.5 2.2v-7.3c0-7.6-1.6-12.9-4.7-16-3.2-3.1-8.6-4.6-16.3-4.6-3.5 0-7.1.4-10.8 1.3s-7.3 2-10.8 3.4c-1.6.7-2.8 1.1-3.5 1.3s-1.2.3-1.6.3c-1.4 0-2.1-1-2.1-3.1v-4.9c0-1.6.2-2.8.7-3.5s1.4-1.4 2.8-2.1c3.5-1.8 7.7-3.3 12.6-4.5 4.9-1.3 10.1-1.9 15.6-1.9 11.9 0 20.6 2.7 26.2 8.1 5.5 5.4 8.3 13.6 8.3 24.6v32.4zm-40.6 15.2c3.3 0 6.7-.6 10.3-1.8s6.8-3.4 9.5-6.4c1.6-1.9 2.8-4 3.4-6.4s1-5.3 1-8.7v-4.2c-2.9-.7-6-1.3-9.2-1.7s-6.3-.6-9.4-.6c-6.7 0-11.6 1.3-14.9 4s-4.9 6.5-4.9 11.5c0 4.7 1.2 8.2 3.7 10.6 2.4 2.5 5.9 3.7 10.5 3.7zm80.3 10.8c-1.8 0-3-.3-3.8-1-.8-.6-1.5-2-2.1-3.9l-23.5-77.3c-.6-2-.9-3.3-.9-4 0-1.6.8-2.5 2.4-2.5h9.8c1.9 0 3.2.3 3.9 1 .8.6 1.4 2 2 3.9l16.8 66.2 15.6-66.2c.5-2 1.1-3.3 1.9-3.9s2.2-1 4-1h8c1.9 0 3.2.3 4 1 .8.6 1.5 2 1.9 3.9l15.8 67 17.3-67c.6-2 1.3-3.3 2-3.9.8-.6 2.1-1 3.9-1h9.3c1.6 0 2.5.8 2.5 2.5 0 .5-.1 1-.2 1.6s-.3 1.4-.7 2.5l-24.1 77.3c-.6 2-1.3 3.3-2.1 3.9s-2.1 1-3.8 1h-8.6c-1.9 0-3.2-.3-4-1s-1.5-2-1.9-4l-15.5-64.5-15.4 64.4c-.5 2-1.1 3.3-1.9 4s-2.2 1-4 1zm128.5 2.7c-5.2 0-10.4-.6-15.4-1.8s-8.9-2.5-11.5-4c-1.6-.9-2.7-1.9-3.1-2.8s-.6-1.9-.6-2.8v-5.1c0-2.1.8-3.1 2.3-3.1.6 0 1.2.1 1.8.3s1.5.6 2.5 1c3.4 1.5 7.1 2.7 11 3.5 4 .8 7.9 1.2 11.9 1.2 6.3 0 11.2-1.1 14.6-3.3s5.2-5.4 5.2-9.5c0-2.8-.9-5.1-2.7-7s-5.2-3.6-10.1-5.2l-14.5-4.5c-7.3-2.3-12.7-5.7-16-10.2-3.3-4.4-5-9.3-5-14.5 0-4.2.9-7.9 2.7-11.1s4.2-6 7.2-8.2c3-2.3 6.4-4 10.4-5.2s8.2-1.7 12.6-1.7c2.2 0 4.5.1 6.7.4 2.3.3 4.4.7 6.5 1.1 2 .5 3.9 1 5.7 1.6s3.2 1.2 4.2 1.8c1.4.8 2.4 1.6 3 2.5.6.8.9 1.9.9 3.3v4.7c0 2.1-.8 3.2-2.3 3.2-.8 0-2.1-.4-3.8-1.2-5.7-2.6-12.1-3.9-19.2-3.9-5.7 0-10.2.9-13.3 2.8s-4.7 4.8-4.7 8.9c0 2.8 1 5.2 3 7.1s5.7 3.8 11 5.5l14.2 4.5c7.2 2.3 12.4 5.5 15.5 9.6s4.6 8.8 4.6 14c0 4.3-.9 8.2-2.6 11.6-1.8 3.4-4.2 6.4-7.3 8.8-3.1 2.5-6.8 4.3-11.1 5.6-4.5 1.4-9.2 2.1-14.3 2.1z" fill="#252f3e" />
                                                <g clip-rule="evenodd" fill="#f90" fill-rule="evenodd">
                                                    <path d="m273.5 143.7c-32.9 24.3-80.7 37.2-121.8 37.2-57.6 0-109.5-21.3-148.7-56.7-3.1-2.8-.3-6.6 3.4-4.4 42.4 24.6 94.7 39.5 148.8 39.5 36.5 0 76.6-7.6 113.5-23.2 5.5-2.5 10.2 3.6 4.8 7.6z" />
                                                    <path d="m287.2 128.1c-4.2-5.4-27.8-2.6-38.5-1.3-3.2.4-3.7-2.4-.8-4.5 18.8-13.2 49.7-9.4 53.3-5 3.6 4.5-1 35.4-18.6 50.2-2.7 2.3-5.3 1.1-4.1-1.9 4-9.9 12.9-32.2 8.7-37.5z" />
                                                </g>
                                            </svg>
                                        </span>
                                        AWS
                                    </a>
                                </div>
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <a href="javascript: void(0);" class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                        <span class="avatar avatar-sm w-35px h-35px avatar-circle">
                                            <span class="avatar-title text-bg-primary-soft">D</span>
                                        </span>
                                        Dashboard
                                    </a>
                                </div>

                                <hr class="dropdown-divider">

                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <a href="javascript: void(0);" class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                        <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                            <svg class="avatar-img mx-auto" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                                <style type="text/css">
                                                    .st200 {
                                                        fill: url(#SVGID_1_);
                                                    }

                                                    .st201 {
                                                        fill: #FFFFFF;
                                                    }
                                                </style>
                                                <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-277.375" y1="406.6018" x2="-277.375" y2="407.5726" gradientTransform="matrix(40 0 0 -39.7778 11115.001 16212.334)">
                                                    <stop offset="0" style="stop-color:#0062E0" />
                                                    <stop offset="1" style="stop-color:#19AFFF" />
                                                </linearGradient>
                                                <path class="st200" d="M16.7,39.8C7.2,38.1,0,29.9,0,20C0,9,9,0,20,0s20,9,20,20c0,9.9-7.2,18.1-16.7,19.8l-1.1-0.9h-4.4L16.7,39.8z" />
                                                <path class="st201" d="M27.8,25.6l0.9-5.6h-5.3v-3.9c0-1.6,0.6-2.8,3-2.8h2.6V8.2c-1.4-0.2-3-0.4-4.4-0.4c-4.6,0-7.8,2.8-7.8,7.8V20 h-5v5.6h5v14.1c1.1,0.2,2.2,0.3,3.3,0.3c1.1,0,2.2-0.1,3.3-0.3V25.6H27.8z" />
                                            </svg>
                                        </span>
                                        Facebook
                                    </a>
                                </div>
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <a href="javascript: void(0);" class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                        <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                            <svg class="avatar-img mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 796.8 1024.2">
                                                <style>
                                                    .st2 {
                                                        fill: #cb2027
                                                    }
                                                </style>
                                                <path class="st2" d="M347.2 3.4C177 22.4 7.4 160.1.4 356.8-4 476.9 30.1 567 144.4 592.3c49.6-87.5-16-106.8-26.2-170.1C76.3 162.8 417.4-14.1 595.9 167c123.5 125.4 42.2 511.2-157 471.1-190.8-38.3 93.4-345.4-58.9-405.7-123.8-49-189.6 149.9-130.9 248.7-34.4 169.9-108.5 330-78.5 543.1 97.3-70.6 130.1-205.8 157-346.8 48.9 29.7 75 60.6 137.4 65.4 230.1 17.8 358.6-229.7 327.2-458C764.3 82.4 562.3-20.6 347.2 3.4z" />
                                            </svg>
                                        </span>
                                        Pinterest
                                    </a>
                                </div>
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <a href="javascript: void(0);" class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                        <span class="avatar avatar-xs avatar-circle">
                                            <svg class="avatar-img mx-auto" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="-89.00934757 -46.8841404 643.93723344 446.8841404" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m154.729 400c185.669 0 287.205-153.876 287.205-287.312 0-4.37-.089-8.72-.286-13.052a205.304 205.304 0 0 0 50.352-52.29c-18.087 8.044-37.55 13.458-57.968 15.899 20.841-12.501 36.84-32.278 44.389-55.852a202.42 202.42 0 0 1 -64.098 24.511c-18.42-19.628-44.644-31.904-73.682-31.904-55.744 0-100.948 45.222-100.948 100.965 0 7.925.887 15.631 2.619 23.025-83.895-4.223-158.287-44.405-208.074-105.504a100.739 100.739 0 0 0 -13.668 50.754c0 35.034 17.82 65.961 44.92 84.055a100.172 100.172 0 0 1 -45.716-12.63c-.015.424-.015.837-.015 1.29 0 48.903 34.794 89.734 80.982 98.986a101.036 101.036 0 0 1 -26.617 3.553c-6.493 0-12.821-.639-18.971-1.82 12.851 40.122 50.115 69.319 94.296 70.135-34.549 27.089-78.07 43.224-125.371 43.224a204.9 204.9 0 0 1 -24.078-1.399c44.674 28.645 97.72 45.359 154.734 45.359" fill="#1da1f2" fill-rule="nonzero" />
                                            </svg>
                                        </span>
                                        Twitter
                                    </a>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <a class="d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px link-secondary" data-bs-toggle="offcanvas" href="#offcanvasCustomize" role="button" aria-controls="offcanvasCustomize">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="18" width="18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.77069 9.50524C7.60364 9.43126 7.45391 9.32316 7.33112 9.18788L6.70112 8.48788C6.5212 8.28484 6.28225 8.14317 6.01778 8.08272C5.7533 8.02228 5.47654 8.0461 5.22627 8.15083C4.97601 8.25557 4.76478 8.43598 4.62219 8.66678C4.4796 8.89758 4.41279 9.16721 4.43112 9.43788V10.3679C4.44125 10.5505 4.41275 10.7331 4.34748 10.9039C4.28221 11.0747 4.18165 11.2298 4.05235 11.3591C3.92306 11.4884 3.76795 11.589 3.59714 11.6542C3.42634 11.7195 3.24369 11.748 3.06112 11.7379L2.12112 11.6879C1.85153 11.6753 1.58463 11.7463 1.35691 11.8911C1.12919 12.036 0.951762 12.2476 0.848892 12.4971C0.746023 12.7467 0.72273 13.0219 0.782196 13.2851C0.841663 13.5484 0.980987 13.7868 1.18112 13.9679L1.88112 14.5879C2.01927 14.7148 2.129 14.8695 2.20311 15.0419C2.27722 15.2142 2.31403 15.4003 2.31112 15.5879C2.31532 15.7757 2.2791 15.9621 2.2049 16.1347C2.13071 16.3072 2.02029 16.4618 1.88112 16.5879L1.18112 17.2179C0.981519 17.3992 0.842717 17.6376 0.783657 17.9007C0.724597 18.1638 0.748157 18.4387 0.85112 18.6879C0.954125 18.9362 1.13156 19.1464 1.359 19.2897C1.58644 19.433 1.8527 19.5022 2.12112 19.4879H3.06112C3.24369 19.4778 3.42634 19.5063 3.59714 19.5715C3.76795 19.6368 3.92306 19.7374 4.05235 19.8666C4.18165 19.9959 4.28221 20.1511 4.34748 20.3219C4.41275 20.4927 4.44125 20.6753 4.43112 20.8579V21.7879C4.4151 22.0577 4.48357 22.3258 4.62702 22.5549C4.77046 22.784 4.98174 22.9626 5.23147 23.066C5.48119 23.1694 5.75693 23.1925 6.02034 23.1318C6.28374 23.0712 6.5217 22.93 6.70112 22.7279L7.33112 22.0379C7.45391 21.9026 7.60364 21.7945 7.77069 21.7205C7.93775 21.6466 8.11842 21.6083 8.30112 21.6083C8.48382 21.6083 8.6645 21.6466 8.83155 21.7205C8.9986 21.7945 9.14833 21.9026 9.27112 22.0379L9.90112 22.7279C10.0805 22.93 10.3185 23.0712 10.5819 23.1318C10.8453 23.1925 11.1211 23.1694 11.3708 23.066C11.6205 22.9626 11.8318 22.784 11.9752 22.5549C12.1187 22.3258 12.1871 22.0577 12.1711 21.7879V20.8579C12.161 20.6753 12.1895 20.4927 12.2548 20.3219C12.32 20.1511 12.4206 19.9959 12.5499 19.8666C12.6792 19.7374 12.8343 19.6368 13.0051 19.5715C13.1759 19.5063 13.3586 19.4778 13.5411 19.4879H14.4811C14.7495 19.5022 15.0158 19.433 15.2432 19.2897C15.4707 19.1464 15.6481 18.9362 15.7511 18.6879C15.8541 18.4387 15.8776 18.1638 15.8186 17.9007C15.7595 17.6376 15.6207 17.3992 15.4211 17.2179L14.7211 16.5879C14.582 16.4618 14.4715 16.3072 14.3973 16.1347C14.3231 15.9621 14.2869 15.7757 14.2911 15.5879C14.2882 15.4003 14.325 15.2142 14.3991 15.0419C14.4732 14.8695 14.583 14.7148 14.7211 14.5879L15.4211 13.9679C15.6213 13.7868 15.7606 13.5484 15.82 13.2851C15.8795 13.0219 15.8562 12.7467 15.7533 12.4971C15.6505 12.2476 15.4731 12.036 15.2453 11.8911C15.0176 11.7463 14.7507 11.6753 14.4811 11.6879L13.5411 11.7379C13.3586 11.748 13.1759 11.7195 13.0051 11.6542C12.8343 11.589 12.6792 11.4884 12.5499 11.3591C12.4206 11.2298 12.32 11.0747 12.2548 10.9039C12.1895 10.7331 12.161 10.5505 12.1711 10.3679V9.43788C12.1895 9.16721 12.1226 8.89758 11.98 8.66678C11.8375 8.43598 11.6262 8.25557 11.376 8.15083C11.1257 8.0461 10.8489 8.02228 10.5845 8.08272C10.32 8.14317 10.081 8.28484 9.90112 8.48788L9.27112 9.18788C9.14833 9.32316 8.9986 9.43126 8.83155 9.50524C8.6645 9.57922 8.48382 9.61743 8.30112 9.61743C8.11842 9.61743 7.93775 9.57922 7.77069 9.50524Z" />
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.30114 17.4379C9.33944 17.4379 10.1811 16.5962 10.1811 15.5579C10.1811 14.5196 9.33944 13.6779 8.30114 13.6779C7.26285 13.6779 6.42114 14.5196 6.42114 15.5579C6.42114 16.5962 7.26285 17.4379 8.30114 17.4379Z" />
                        <path stroke="currentColor" stroke-width="1.5" d="M18.1565 6.23828C17.8804 6.23828 17.6565 6.01442 17.6565 5.73828C17.6565 5.46214 17.8804 5.23828 18.1565 5.23828" />
                        <path stroke="currentColor" stroke-width="1.5" d="M18.1565 6.23828C18.4326 6.23828 18.6565 6.01442 18.6565 5.73828C18.6565 5.46214 18.4326 5.23828 18.1565 5.23828" />
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.1347 1.83506C16.1409 1.62338 16.2152 1.41935 16.3466 1.25325C16.478 1.08716 16.6594 0.967851 16.8639 0.91304C17.0685 0.85823 17.2853 0.870838 17.4821 0.948992C17.6789 1.02715 17.8453 1.16668 17.9565 1.34689L18.551 2.30113C18.6493 2.45959 18.8042 2.57479 18.9842 2.62343C19.1643 2.67207 19.3561 2.65052 19.5209 2.56313L20.508 2.03729C20.6955 1.93854 20.9096 1.90249 21.1191 1.93443C21.3285 1.96638 21.5222 2.06463 21.6716 2.21476C21.8211 2.3649 21.9185 2.559 21.9495 2.76857C21.9805 2.97814 21.9435 3.19214 21.8439 3.37912L21.3171 4.37019C21.2295 4.53545 21.2077 4.72774 21.2561 4.90841C21.3045 5.08907 21.4195 5.24471 21.578 5.34404L22.5273 5.9411C22.7071 6.05324 22.8461 6.22006 22.924 6.41706C23.002 6.61406 23.0147 6.83085 22.9603 7.03561C22.9059 7.24036 22.7873 7.42229 22.6219 7.55467C22.4565 7.68705 22.253 7.7629 22.0413 7.7711L20.9235 7.80929C20.7371 7.816 20.5602 7.89324 20.4286 8.02539C20.297 8.15754 20.2205 8.33473 20.2145 8.52115L20.179 9.64113C20.1727 9.85281 20.0984 10.0568 19.967 10.2229C19.8357 10.389 19.6542 10.5083 19.4497 10.5631C19.2451 10.618 19.0284 10.6053 18.8315 10.5272C18.6347 10.449 18.4683 10.3095 18.3571 10.1293L17.762 9.17525C17.6638 9.0168 17.509 8.90157 17.3291 8.85289C17.1492 8.80422 16.9575 8.82572 16.7928 8.91305L15.8049 9.43908C15.6175 9.53784 15.4033 9.57389 15.1939 9.54194C14.9844 9.51 14.7908 9.41175 14.6413 9.26161C14.4918 9.11148 14.3944 8.91737 14.3634 8.7078C14.3324 8.49823 14.3694 8.28424 14.469 8.09725L14.9933 7.10534C15.0809 6.94007 15.1027 6.74778 15.0543 6.56712C15.0059 6.38645 14.8909 6.23081 14.7324 6.13148L13.7831 5.53748C13.6034 5.42533 13.4643 5.25851 13.3864 5.06151C13.3085 4.86452 13.2958 4.64772 13.3501 4.44296C13.4045 4.23821 13.5231 4.05628 13.6885 3.92391C13.8539 3.79153 14.0574 3.71567 14.2691 3.70748L15.3877 3.66909C15.5739 3.66238 15.7507 3.58515 15.8822 3.45302C16.0137 3.32089 16.0901 3.14374 16.0959 2.95743L16.1347 1.83506Z" />
                    </svg>
                </a>

                <!-- Custmization offcanvas -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCustomize" aria-labelledby="offcanvasCustomizeTitle">
                    <div class="offcanvas-body pt-7 pb-5 position-relative">

                        <button type="button" class="btn-close position-absolute top-0 end-0 mt-5 me-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                        <div class="text-center">
                            <img src="https://d33wubrfki0l68.cloudfront.net/0e108d71de2aec22aae71d891ecabd0ec28dc2bb/8484b/assets/images/illustrations/customization-illustration.svg" alt="..." class="img-fluid w-50 mb-5" width="170" height="170">
                            <h3 class="mb-2" id="offcanvasCustomizeTitle">Make Dashly Your Own</h3>
                            <p class="mb-0">Set preferences that will be cookied for your live preview demonstration</p>
                        </div>

                        <hr>

                        <h4 class="mb-0">Color Scheme</h4>
                        <p class="text-secondary fs-5 mb-4">Overall light or dark presentation.</p>
                        <div class="btn-group w-100 mb-7" role="group" aria-label="Light/dark switcher">
                            <input type="radio" class="btn-check" name="theme" id="lightMode" value="light" data-theme-control="theme">
                            <label class="btn btn-outline-primary px-3 w-100 d-flex align-items-center justify-content-center" for="lightMode">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18">
                                    <g>
                                        <path d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z" style="fill: currentColor" />
                                        <path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z" style="fill: currentColor" />
                                        <path d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z" style="fill: currentColor" />
                                        <path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z" style="fill: currentColor" />
                                        <path d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z" style="fill: currentColor" />
                                        <path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z" style="fill: currentColor" />
                                        <path d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z" style="fill: currentColor" />
                                        <path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z" style="fill: currentColor" />
                                        <path d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z" style="fill: currentColor" />
                                    </g>
                                </svg>
                                Light
                            </label>

                            <input type="radio" class="btn-check" name="theme" id="darkMode" value="dark" data-theme-control="theme">
                            <label class="btn btn-outline-primary px-3 w-100 d-flex align-items-center justify-content-center" for="darkMode">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18">
                                    <path d="M19.57,23.34a1,1,0,0,0,0-1.9,9.94,9.94,0,0,1,0-18.88,1,1,0,0,0,.68-.94,1,1,0,0,0-.68-.95A11.58,11.58,0,0,0,8.88,2.18,12.33,12.33,0,0,0,3.75,12a12.31,12.31,0,0,0,5.11,9.79A11.49,11.49,0,0,0,15.61,24,12.55,12.55,0,0,0,19.57,23.34ZM10,20.17A10.29,10.29,0,0,1,5.75,12a10.32,10.32,0,0,1,4.3-8.19A9.34,9.34,0,0,1,15.59,2a.17.17,0,0,1,.17.13.18.18,0,0,1-.07.2,11.94,11.94,0,0,0-.18,19.21.25.25,0,0,1-.16.45A9.5,9.5,0,0,1,10,20.17Z" style="fill: currentColor" />
                                </svg>
                                Dark
                            </label>

                            <input type="radio" class="btn-check" name="theme" id="autoMode" value="auto" data-theme-control="theme">
                            <label class="btn btn-outline-primary px-3 w-100 d-flex align-items-center justify-content-center" for="autoMode">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18">
                                    <path d="M24,12a1,1,0,0,0-1-1H19.09a.51.51,0,0,1-.49-.4,6.83,6.83,0,0,0-.94-2.28.5.5,0,0,1,.06-.63l2.77-2.76a1,1,0,1,0-1.42-1.42L16.31,6.28a.5.5,0,0,1-.63.06A6.83,6.83,0,0,0,13.4,5.4a.5.5,0,0,1-.4-.49V1a1,1,0,0,0-2,0V4.91a.51.51,0,0,1-.4.49,6.83,6.83,0,0,0-2.28.94.5.5,0,0,1-.63-.06L4.93,3.51A1,1,0,0,0,3.51,4.93L6.28,7.69a.5.5,0,0,1,.06.63A6.83,6.83,0,0,0,5.4,10.6a.5.5,0,0,1-.49.4H1a1,1,0,0,0,0,2H4.91a.51.51,0,0,1,.49.4,6.83,6.83,0,0,0,.94,2.28.5.5,0,0,1-.06.63L3.51,19.07a1,1,0,1,0,1.42,1.42l2.76-2.77a.5.5,0,0,1,.63-.06,6.83,6.83,0,0,0,2.28.94.5.5,0,0,1,.4.49V23a1,1,0,0,0,2,0V19.09a.51.51,0,0,1,.4-.49,6.83,6.83,0,0,0,2.28-.94.5.5,0,0,1,.63.06l2.76,2.77a1,1,0,1,0,1.42-1.42l-2.77-2.76a.5.5,0,0,1-.06-.63,6.83,6.83,0,0,0,.94-2.28.5.5,0,0,1,.49-.4H23A1,1,0,0,0,24,12Zm-8.74,2.5A5.76,5.76,0,0,1,9.5,8.74a5.66,5.66,0,0,1,.16-1.31A.49.49,0,0,1,10,7.07a5.36,5.36,0,0,1,1.8-.31,5.47,5.47,0,0,1,5.46,5.46,5.36,5.36,0,0,1-.31,1.8.49.49,0,0,1-.35.32A5.53,5.53,0,0,1,15.26,14.5Z" style="fill: currentColor" />
                                </svg>
                                Auto
                            </label>
                        </div>

                        <h4 class="mb-0">Navigation Color</h4>
                        <p class="text-secondary fs-5 mb-4">Usually dictated by the color scheme, but can be overriden.</p>
                        <div class="btn-group w-100 mb-7" role="group" aria-label="Navigation color switcher">
                            <input type="radio" class="btn-check" name="navigationColor" id="defaultColor" value="default" data-theme-control="navigationColor">
                            <label class="btn btn-outline-primary w-50" for="defaultColor">
                                Default
                            </label>

                            <input type="radio" class="btn-check" name="navigationColor" id="invertedColor" value="inverted" data-theme-control="navigationColor">
                            <label class="btn btn-outline-primary w-50" for="invertedColor">
                                Inverted
                            </label>
                        </div>

                        <h4 class="mb-0">Sidebar behaviour</h4>
                        <p class="text-secondary fs-5 mb-4">Standard navigation sizing or minified icons with dropdowns.</p>
                        <div class="btn-group w-100 mb-7" role="group" aria-label="Sidebar layout switcher">
                            <input type="radio" class="btn-check" name="sidebarSizing" id="fixed" value="fixed" data-theme-control="sidebarBehaviour">
                            <label class="btn btn-outline-primary px-3 w-100" for="fixed">
                                Fixed
                            </label>

                            <input type="radio" class="btn-check" name="sidebarSizing" id="condensed" value="condensed" data-theme-control="sidebarBehaviour">
                            <label class="btn btn-outline-primary px-3 w-100" for="condensed">
                                Condensed
                            </label>

                            <input type="radio" class="btn-check" name="sidebarSizing" id="scrollable" value="scrollable" data-theme-control="sidebarBehaviour">
                            <label class="btn btn-outline-primary px-3 w-100" for="scrollable">
                                Scrollable
                            </label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <div class="d-flex flex-column">
                                <label class="h4 mb-0 d-flex align-items-center" for="isFluid">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="16" width="16">
                                        <path d="M4.79,17.21a1,1,0,0,0,.71.29.84.84,0,0,0,.38-.08,1,1,0,0,0,.62-.92v-3a.25.25,0,0,1,.25-.25h10.5a.25.25,0,0,1,.25.25v3a1,1,0,0,0,.62.92.84.84,0,0,0,.38.08,1,1,0,0,0,.71-.29l4.5-4.5a1,1,0,0,0,0-1.42l-4.5-4.5a1,1,0,0,0-1.09-.21,1,1,0,0,0-.62.92v3a.25.25,0,0,1-.25.25H6.75a.25.25,0,0,1-.25-.25v-3a1,1,0,0,0-.62-.92,1,1,0,0,0-1.09.21l-4.5,4.5a1,1,0,0,0,0,1.42Z" style="fill: currentColor" />
                                    </svg>
                                    Fluid layout
                                </label>
                                <p class="text-secondary fs-5 mb-0">Toggle container layout system</p>
                            </div>

                            <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch" data-theme-control="isFluid" id="isFluid" aria-label="Fluid layout switcher" checked>
                            </div>
                        </div>


                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <div class="d-flex flex-column">
                                <label class="h4 mb-0 d-flex align-items-center" for="isRTL">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="16" width="16">
                                        <g>
                                            <path d="M4.15,15.85A.47.47,0,0,0,4.5,16a.43.43,0,0,0,.19,0A.5.5,0,0,0,5,15.5V13a.25.25,0,0,1,.25-.25H11.5a1.25,1.25,0,0,0,0-2.5H5.25A.25.25,0,0,1,5,10V7.5A.49.49,0,0,0,4.69,7a.47.47,0,0,0-.54.11l-4,4a.48.48,0,0,0,0,.7Z" style="fill: currentColor" />
                                            <rect x="15.5" width="8.5" height="24" rx="2" style="fill: currentColor" />
                                        </g>
                                    </svg>
                                    RTL Mode
                                </label>
                                <p class="text-secondary fs-5 mb-0">Switch your language direction</p>
                            </div>

                            <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch" data-theme-control="isRTL" id="isRTL" aria-label="RTL switcher">
                            </div>
                        </div>

                        <div class="row gx-4 mt-auto">
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-lg mb-3">
                                <button class="btn btn-light w-100 d-flex align-items-center justify-content-center" id="resetThemeConfig">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="16" width="16">
                                        <path d="M12.57,1.26A10.81,10.81,0,0,0,2.82,8.4a.25.25,0,0,1-.27.16L.86,8.31a.52.52,0,0,0-.49.21.51.51,0,0,0,0,.53L3,13.75a.51.51,0,0,0,.43.25.52.52,0,0,0,.36-.14l3.77-3.75a.5.5,0,0,0-.28-.85L5.59,9a.26.26,0,0,1-.18-.13.24.24,0,0,1,0-.22,8.26,8.26,0,1,1,7.87,11.59,1.25,1.25,0,1,0,.09,2.5,10.75,10.75,0,0,0-.79-21.49Z" style="fill: currentColor" />
                                    </svg>
                                    Reset
                                </button>
                            </div>
                            <div class="col-lg mb-3">
                                <button class="btn btn-dark w-100 d-flex align-items-center justify-content-center" id="previewThemeConfig">
                                    Preview
                                </button>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
                <!-- Separator -->
                <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

                <!-- Dropdown -->
                <div class="dropdown">
                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">
                        <div class="avatar avatar-circle avatar-sm avatar-online">
                            <img src="https://d33wubrfki0l68.cloudfront.net/053f2dfd0df2f52c41e903a21d177b0b44abc9b1/1282c/assets/images/profiles/profile-06.jpeg" alt="..." class="avatar-img" width="40" height="40">
                        </div>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-item-text">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-sm avatar-circle">
                                    <img src="https://d33wubrfki0l68.cloudfront.net/053f2dfd0df2f52c41e903a21d177b0b44abc9b1/1282c/assets/images/profiles/profile-06.jpeg" alt="..." class="avatar-img" width="40" height="40">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="mb-0">Ellie Tucker</h4>
                                    <p class="card-text">ellie.tucker@dashly.com</p>
                                </div>
                            </div>
                        </div>

                        <hr class="dropdown-divider">

                        <!-- Dropdown -->
                        <div class="dropdown dropend">
                            <a class="dropdown-item dropdown-toggle" href="javascript: void(0);" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="-6,12">
                                Set status
                            </a>

                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="statusDropdown">
                                <a class="dropdown-item" href="javascript: void(0);">
                                    <span class="legend-circle bg-success me-2"></span>Available
                                </a>
                                <a class="dropdown-item" href="javascript: void(0);">
                                    <span class="legend-circle bg-danger me-2"></span>Busy
                                </a>
                                <a class="dropdown-item" href="javascript: void(0);">
                                    <span class="legend-circle bg-warning me-2"></span>Away
                                </a>
                                <a class="dropdown-item" href="javascript: void(0);">
                                    <span class="legend-circle bg-gray-500 me-2"></span>Appear offline
                                </a>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="javascript: void(0);">
                                    Reset status
                                </a>
                            </div>
                        </div>
                        <!-- End Dropdown -->

                        <a class="dropdown-item" href="javascript: void(0);">Profile & account</a>
                        <a class="dropdown-item" href="javascript: void(0);">Settings</a>

                        <hr class="dropdown-divider">

                        <a class="dropdown-item" href="javascript: void(0);">Sign out</a>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid">

            <!-- Title -->
            <h1 class="h2">
                Dashboard
            </h1>

            <div class="row">
                <div class="col-xxl-5">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col d-flex justify-content-between">

                                            <div>
                                                <!-- Title -->
                                                <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                                    <span class="legend-circle-sm bg-success"></span>
                                                    Income
                                                </h5>

                                                <!-- Subtitle -->
                                                <h2 class="mb-0">
                                                    $3,240
                                                </h2>

                                                <!-- Comment -->
                                                <p class="fs-6 text-muted mb-0">
                                                    No additional income
                                                </p>
                                            </div>

                                            <span class="text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="32" width="32">
                                                    <defs>
                                                        <style>
                                                            .a {
                                                                fill: none;
                                                                stroke: currentColor;
                                                                stroke-linecap: round;
                                                                stroke-linejoin: round;
                                                                stroke-width: 1.5px;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <title>cash-briefcase</title>
                                                    <path class="a" d="M9.75,15.937c0,.932,1.007,1.688,2.25,1.688s2.25-.756,2.25-1.688S13.243,14.25,12,14.25s-2.25-.756-2.25-1.688,1.007-1.687,2.25-1.687,2.25.755,2.25,1.687" />
                                                    <line class="a" x1="12" y1="9.75" x2="12" y2="10.875" />
                                                    <line class="a" x1="12" y1="17.625" x2="12" y2="18.75" />
                                                    <rect class="a" x="1.5" y="6.75" width="21" height="15" rx="1.5" ry="1.5" />
                                                    <path class="a" d="M15.342,3.275A1.5,1.5,0,0,0,13.919,2.25H10.081A1.5,1.5,0,0,0,8.658,3.275L7.5,6.75h9Z" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col d-flex justify-content-between">

                                            <div>
                                                <!-- Title -->
                                                <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                                    <span class="legend-circle-sm bg-danger"></span>
                                                    Winning Item
                                                </h5>

                                                <!-- Subtitle -->
                                                <h2 class="mb-0">
                                                    මඩොල් දූව <a href="" class="text-decoration-none"><i class="bi ms-3 bi-eye-fill"></i></a>
                                                </h2>




                                                <!-- Comment -->
                                                <p class="fs-6 text-muted mb-0 text-truncate">
                                                    175 Items Per Week
                                                </p>

                                            </div>

                                            <span class="text-primary">
                                                <svg viewBox="0 0 24 24" height="32" width="32" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18.75,14.25H16.717a1.342,1.342,0,0,0-.5,2.587l2.064.826a1.342,1.342,0,0,1-.5,2.587H15.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M17.25 14.25L17.25 13.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M17.25 21L17.25 20.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M11.250 17.250 A6.000 6.000 0 1 0 23.250 17.250 A6.000 6.000 0 1 0 11.250 17.250 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M3.75 14.25L8.25 14.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M8.25 14.25L8.25 6.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M11.25 9.75L11.25 8.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M5.25 14.25L5.25 9.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M7.5,20.25H2.25a1.43,1.43,0,0,1-1.5-1.415V2.335A1.575,1.575,0,0,1,2.25.75H12.879a1.5,1.5,0,0,1,1.06.439l2.872,2.872a1.5,1.5,0,0,1,.439,1.06V7.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </div>

                <div class="col-xxl-7">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">

                                            <!-- Title -->
                                            <h5 class="text-uppercase text-muted fw-semibold mb-2">
                                                Week Total
                                            </h5>

                                            <!-- Subtitle -->
                                            <h2 class="mb-0">
                                                $74,925
                                            </h2>

                                            <!-- Comment -->
                                            <p class="fs-6 text-muted mb-0 text-truncate">

                                                <!-- Badge -->
                                                <span class="badge text-bg-success-soft fs-6 fw-bold mb-n1">
                                                    <svg viewBox="0 0 24 24" height="10" width="10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M23.25 12.75L23.25 6 16.5 6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                        <path d="M23.25,6l-7.939,7.939a1.5,1.5,0,0,1-2.122,0l-3.128-3.128a1.5,1.5,0,0,0-2.122,0L.75,18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    </svg>
                                                    12%
                                                </span>
                                                from $65,934
                                            </p>
                                        </div>

                                        <div class="col-6">

                                            <!-- Chart -->
                                            <div class="chart-container h-70px">
                                                <canvas id="incomeChart"></canvas>
                                            </div>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col">

                                            <!-- Title -->
                                            <h5 class="text-uppercase text-muted fw-semibold mb-2 d-flex align-items-center">
                                                siteviews

                                                <!-- Icon -->
                                                <a href="javascript: void(0);" class="ms-2 text-secondary" data-bs-toggle="tooltip" title="Pageviews is a metric defined as the total number of pages viewed.">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                                        <path d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm.25,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12.25,5ZM14.5,18.5h-4a1,1,0,0,1,0-2h.75a.25.25,0,0,0,.25-.25v-4.5a.25.25,0,0,0-.25-.25H10.5a1,1,0,0,1,0-2h1a2,2,0,0,1,2,2v4.75a.25.25,0,0,0,.25.25h.75a1,1,0,0,1,0,2Z" style="fill: currentColor" />
                                                    </svg>
                                                </a>
                                            </h5>

                                            <!-- Subtitle -->
                                            <h2 class="mb-0">
                                                123,598
                                            </h2>

                                            <!-- Comment -->
                                            <p class="fs-6 text-muted mb-0">

                                                <!-- Badge -->
                                                <span class="badge text-bg-danger-soft fs-6 fw-bold mb-n1">
                                                    <svg viewBox="0 0 24 24" height="10" width="10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M23.25 11.25L23.25 18 16.5 18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                        <path d="M23.25,18l-7.939-7.939a1.5,1.5,0,0,0-2.122,0l-3.128,3.128a1.5,1.5,0,0,1-2.122,0L.75,6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    </svg>
                                                    9.2%
                                                </span>
                                                from 134,969
                                            </p>
                                        </div>
                                        <div class="col-5">

                                            <!-- Chart -->
                                            <div class="chart-container h-65px">
                                                <canvas id="pageViewsChart"></canvas>
                                            </div>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-xxl-5 d-flex">

                    <!-- Card -->
                    <div class="card border-0 flex-fill w-100">
                        <div class="card-header border-0 card-header-space-between">

                            <!-- Title -->
                            <h2 class="card-header-title h4 text-uppercase">
                                Projects
                            </h2>

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                        <g>
                                            <circle cx="12" cy="3.25" r="3.25" style="fill: currentColor" />
                                            <circle cx="12" cy="12" r="3.25" style="fill: currentColor" />
                                            <circle cx="12" cy="20.75" r="3.25" style="fill: currentColor" />
                                        </g>
                                    </svg>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Export report
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Share
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Action
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="table-responsive">
                            <table id="projectsTable" class="table align-middle table-edge table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="w-60px">#</th>
                                        <th>Name</th>
                                        <th>Project manager</th>
                                        <th class="text-end">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <span class="avatar avatar-xs me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="avatar-img" viewBox="-381.005 -57.828 64 64">
                                                    <path d="M-373.848-13.722c-.26-.03-.665-.26-.953-.5-2.74-2.685.778-5.77 4.848-7.56v-5.105c.952.607 1.472.635 1.5.72l3.116-3.086-1.04-2.655c9.12-3.145 12.782-4.357 20.198-5.598l-1.33-1.242 2.165-1.24c5 1.646 9.696 2.078 8.887 6.26.203-2.828-3.318-3.925-8.685-5.425l-1.038.634 2 1.645c-8.886 1.53-14.34 3.26-20.832 5.5l.893 2.3-3.26 3.202c.55.144 6.232 2.05 12.146-2.077 0 0 .117-.087.117-.116-.172-.288-.578-.607-1.067-1.038 1.73.116 2.854 1.645 2.653 3.232h-.807a2.9 2.9 0 0 0-.231-1.443c-4.588 3.348-9.897 3.838-14.428 2.25v3.952c-2.192.78-6.118 3.2-6.1 5.54.144 1.124.722 1.528 1.24 1.818" />
                                                    <path d="M-355.293-14.733c-4.908 2.482-9.6 4.473-16.852 4.76-9.435-.203-10.906-6.464-6.435-13.014 4.213-6.607 10.907-12.58 21.555-16.304 3.086-1.094 7.62-2.336 12.002-2.394 6.3-.058 12.4 1.905 12.003 7.936-.23 4.617-6.895 11.138-10.417 15.813-1.5 2.046-1.76 3.375.807 3.26 9.322-.607 17.775-3.838 25.624-7.185-5.308 3.607-32.75 17.196-32.864 7.936.028-1.185.576-2.424 1.47-3.752.867-1.327 2.08-2.714 3.32-4.127 1.875-2.135 6.518-7.242 8.078-10.302 2.626-5.8-3.26-6.1-8.34-7.877l-2.165 1.24 1.33 1.242c-7.416 1.24-11.08 2.452-20.198 5.598l1.04 2.655-3.116 3.086c-.087-.086-.55-.114-1.5-.72v5.107c-4.07 1.8-7.6 4.875-4.848 7.56.288.23.694.462.954.5 5 2.828 18.58-1 18.554-1" fill="#f60" />
                                                </svg>
                                            </span>
                                            Alibaba
                                        </td>
                                        <td class="text-muted">Jon Richardson</td>
                                        <td class="text-end"><span class="badge text-bg-success rounded-pill">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <span class="avatar avatar-xs me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="avatar-img" viewBox="0 0 240 180.037">
                                                    <path d="M238.553 22.362s-6.882-5.327-29.168-13.512C189.83 1.653 174.893 0 174.893 0l.074 42.679c0 18.039-20.385 37.194-55.199 37.194h-.996c-34.81 0-55.188-19.155-55.188-37.194L63.652 0S48.729 1.652 29.166 8.85C6.881 17.035 0 22.362 0 22.362c1.652 34.229 54.826 62.43 119.263 62.445h.015c64.441-.015 117.628-28.216 119.275-62.445" />
                                                    <path d="M238.582 118.203s-6.881 5.312-29.167 13.504c-19.569 7.198-34.493 8.843-34.493 8.843l.075-42.672c0-18.035-20.386-37.183-55.199-37.183l-.49-.015h-.015l-.483.015c-34.817 0-55.195 19.148-55.195 37.183l.076 42.672s-14.931-1.645-34.493-8.843C6.919 123.515.024 118.203.024 118.203c1.652-34.226 54.84-62.427 119.285-62.449 64.44.022 117.629 28.223 119.273 62.449M11.611 179.946c-5.432 0-5.53-4.135-5.53-5.733v-7.528c0-.469-.03-1.072.936-1.072h2.799c.92 0 .868.635.868 1.072v7.528c0 .543.091 1.978 2.067 1.978h4.708c1.939 0 2.052-1.435 2.052-1.978v-7.528c0-.438-.062-1.072.853-1.072H23.2c1.02 0 .928.635.928 1.072v7.528c0 1.601-.106 5.733-5.545 5.733M37.632 179.026c-1.916-2.58-4.655-5.824-7.446-9.266v9.174c0 .407.098 1.012-.86 1.012h-2.618c-.943 0-.837-.604-.837-1.012v-12.268c0-.422-.038-1.057.837-1.057h5.107c1.441 0 3.501 2.897 4.844 4.828 1.049 1.449 2.965 3.651 4.255 5.312v-9.084c0-.422-.053-1.057.898-1.057h2.844c.905 0 .854.635.854 1.057v13.277h-5.243c-1.126.004-1.609.08-2.635-.916M47.244 179.946v-14.319h12.652c.77 0 5.968-.104 5.968 5.356 0 5.568.596 8.963-5.862 8.963h-6.82l-1.471-2.987v2.987m7.513-3.772c2.301 0 2.127-2.202 2.127-3.214 0-3.38-.951-3.518-2.467-3.518h-7.22v6.73l7.56.002zM70.813 165.718h11.664c.981 0 .853.646.853 1.84 0 1.116.151 1.75-.853 1.75h-9.219c-.242 0-1.086-.119-1.086.74 0 .875-.159 1.223.762 1.223h8.148l1.313 2.609c.188.362.166.68-.551.68h-8.436l-1.305-2.551v3.758c0 .875.777.709 1.003.709h9.574c.951 0 .868.664.868 1.75 0 1.162.083 1.812-.868 1.812H70.563c-1.011 0-2.98-.315-2.98-3.472v-7.891c0-.83.43-2.957 3.23-2.957M86.475 165.626h12.758c1.712 0 4.202-.016 4.202 4.604 0 3.018-.641 3.168-2.015 4.104 2.301.393 1.992 3.334 1.992 4.857 0 .771-.279.754-.506.754h-3.742c-.785 0-.596-1.236-.596-1.885 0-1.75-.981-1.676-1.366-1.676h-5.507c-.528-.921-1.554-2.973-1.554-2.973v5.945l-.702.588h-3.765l-.377-.469v-12.613c.001-.888.627-1.236 1.178-1.236m10.162 3.788h-5.681c-.951 0-.905.315-.905.604v2.563h5.847c2.837 0 2.837-.709 2.837-1.448-.001-1.478-.121-1.719-2.098-1.719M125.404 165.718c.936 0 1.848.422 2.832 2.338.664 1.373 5.297 9.748 6.277 11.498v.482h-4.828l-1.39-2.52h-5.872l-1.27-2.883c-.361.588-2.3 4.27-2.964 5.401h-4.843v-.315c.988-1.857 7.733-14.004 7.733-14.004m2.817 3.972l-2.369 4.299.219.213h4.391l.219-.213-2.24-4.314-.22.015M137.576 165.626h12.766c1.705 0 4.195-.016 4.195 4.604 0 3.018-.635 3.168-2.008 4.104 2.311.393 1.992 3.334 1.992 4.857 0 .771-.287.754-.514.754h-3.742c-.783 0-.588-1.236-.588-1.885 0-1.75-.98-1.676-1.357-1.676h-5.521c-.529-.921-1.557-2.973-1.557-2.973v5.945l-.691.588h-3.773l-.377-.469v-12.613c-.001-.888.632-1.236 1.175-1.236m10.171 3.788h-5.688c-.951 0-.904.315-.904.604v2.563h5.854c2.821 0 2.821-.709 2.821-1.448-.001-1.478-.105-1.719-2.083-1.719M165.688 179.946c-.949-1.78-3.59-6.699-5.371-9.928v8.933c0 .377.061.995-.859.995h-2.58c-.966 0-.891-.618-.891-.995v-12.269c0-.438-.061-1.057.891-1.057h4.467c.664 0 1.613-.15 2.67 1.977.801 1.705 2.489 5.252 3.668 7.123 1.176-1.871 2.912-5.418 3.711-7.123 1.041-2.127 1.961-1.977 2.717-1.977h4.451c.904 0 .799.619.799 1.057v12.269c0 .377.137.995-.799.995h-2.611c-.95 0-.875-.618-.875-.995v-8.933c-1.811 3.229-4.422 8.146-5.416 9.928M185.092 179.976c-4.225 0-4.043-4.525-4.043-7.482 0-2.688-.303-6.896 4.993-6.941h9.416c5.312 0 4.964 4.271 4.964 6.941 0 2.957.213 7.482-4.089 7.482m-2.731-3.682c2.144 0 2.067-2.218 2.067-3.695 0-1.344.317-3.427-2.476-3.427h-4.736c-2.775 0-2.445 2.083-2.445 3.427 0 1.479-.136 3.695 2.008 3.695h5.582zM207.499 179.946c-5.417 0-5.522-4.135-5.522-5.733v-7.528c0-.469-.029-1.072.937-1.072h2.808c.92 0 .858.635.858 1.072v7.528c0 .543.091 1.978 2.067 1.978h4.707c1.947 0 2.053-1.435 2.053-1.978v-7.528c0-.438-.045-1.072.859-1.072h2.821c1.026 0 .937.635.937 1.072v7.528c0 1.601-.092 5.733-5.553 5.733M223.04 165.626h12.767c1.705 0 4.193-.016 4.193 4.604 0 3.018-.648 3.168-2.021 4.104 2.31.393 2.008 3.334 2.008 4.857 0 .771-.287.754-.514.754h-3.742c-.77 0-.588-1.236-.588-1.885 0-1.75-.996-1.676-1.373-1.676h-5.508c-.527-.921-1.555-2.973-1.555-2.973v5.945l-.709.588h-3.758l-.377-.469v-12.613c0-.888.634-1.236 1.177-1.236m10.155 3.788h-5.674c-.951 0-.906.315-.906.604v2.563h5.855c2.821 0 2.821-.709 2.821-1.448.002-1.478-.119-1.719-2.096-1.719" />
                                                </svg>
                                            </span>
                                            Under Armour
                                        </td>
                                        <td class="text-muted">Alba Monday</td>
                                        <td class="text-end"><span class="badge text-bg-success rounded-pill">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <span class="avatar avatar-xs me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="avatar-img" viewBox="0 0 45.285 25.488">
                                                    <path fill="#fff22d" d="M0 0h45.285v25.488H0V0z" />
                                                    <path d="M5.733 2.388h33.792a3.697 3.697 0 0 1 3.686 3.686v13.435a3.697 3.697 0 0 1-3.686 3.686H5.733a3.697 3.697 0 0 1-3.686-3.686V6.073a3.696 3.696 0 0 1 3.686-3.685z" fill="#cf4037" />
                                                    <path d="M5.733 4.027h33.792c1.126 0 2.047.921 2.047 2.046v13.435a2.053 2.053 0 0 1-2.047 2.046H5.733a2.052 2.052 0 0 1-2.046-2.046V6.073c0-1.125.92-2.046 2.046-2.046z" fill="#fff" />
                                                    <path d="M5.733 4.949h33.792c.618 0 1.125.506 1.125 1.124v13.435c0 .618-.506 1.124-1.125 1.124H5.733a1.128 1.128 0 0 1-1.125-1.124V6.073c0-.618.506-1.124 1.125-1.124z" />
                                                    <path d="M37.069 12.748c0 .188.056.332.167.435a.556.556 0 0 0 .391.153.569.569 0 0 0 .57-.588.46.46 0 0 0-.173-.382.622.622 0 0 0-.397-.137.585.585 0 0 0-.389.142.463.463 0 0 0-.169.377zm-1.756.001c0-.304.057-.597.172-.877a2.33 2.33 0 0 1 .48-.746 2.203 2.203 0 0 1 1.594-.682c.36 0 .688.062.984.186.298.123.551.292.762.508s.373.456.482.724c.11.266.166.54.166.817 0 .494-.113.927-.339 1.301a2.324 2.324 0 0 1-.891.862 2.419 2.419 0 0 1-1.164.299c-.237 0-.485-.051-.746-.15a2.527 2.527 0 0 1-.737-.456c-.23-.205-.417-.456-.556-.757s-.207-.645-.207-1.029zM28.226 13.384v1.737c-1.373.019-2.58-.612-2.58-2.356 0-1.467.986-2.239 2.361-2.239 1.375 0 2.329.925 2.329 2.356v2.239H28.51v-2.255c0-.406-.22-.613-.483-.615s-.569.125-.577.492.12.696.776.641zM12.189 12.183v-1.688c1.422-.019 2.592.787 2.592 2.281 0 1.342-1.136 2.364-2.474 2.364s-2.203-1.236-2.203-2.356V8.733h1.701v3.98c0 .405.232.713.608.715.375.002.657-.176.651-.642s-.406-.658-.875-.603zM33.097 13.297v1.679c-1.322.02-2.469-.854-2.484-2.211-.015-1.321.95-2.239 2.274-2.239s2.242.925 2.242 2.356v1.704c0 1.279-1.133 2.341-2.64 2.341h-1.685l.001-1.557h1.689c.588 0 .956-.069.956-.7v-1.892c0-.406-.292-.613-.546-.615s-.548.125-.556.492c-.005.368.118.697.749.642zM18.826 10.521h1.768v2.563c0 .155.141.306.328.306.178 0 .352-.135.352-.306v-2.563h1.769v2.668c0 .401-.103.749-.307 1.042a1.941 1.941 0 0 1-.806.666 2.494 2.494 0 0 1-1.806.102 2.039 2.039 0 0 1-.664-.369 1.737 1.737 0 0 1-.464-.609 1.95 1.95 0 0 1-.17-.831v-2.669zM23.243 15.121h1.769v-2.563c0-.155.141-.329.327-.328h.222v-1.696a2.449 2.449 0 0 0-1.02.11 2.024 2.024 0 0 0-.663.369 1.734 1.734 0 0 0-.465.61 1.96 1.96 0 0 0-.17.83v2.668z" fill="#fff" />
                                                    <path d="M12.384 6.669l-.198.003v3.483a2.687 2.687 0 0 1 2.946 2.668 2.687 2.687 0 0 1-2.683 2.681c-1.346 0-2.684-1.364-2.684-2.709V6.713H6.223l.002 6.115c.001 3.392 2.767 6.159 6.159 6.159s6.159-2.767 6.159-6.159-2.767-6.159-6.159-6.159z" fill="#cf4037" />
                                                    <path d="M38.906 10.127c0-.218.071-.394.214-.526a.747.747 0 0 1 .493-.216h.027a.733.733 0 0 1 .495.204.685.685 0 0 1 .226.539.686.686 0 0 1-.226.539.742.742 0 0 1-.495.204h-.003-.024a.752.752 0 0 1-.493-.216.695.695 0 0 1-.214-.528zm.138 0v.03c.007.15.064.288.171.413a.523.523 0 0 0 .419.188.524.524 0 0 0 .422-.188.676.676 0 0 0 .17-.413v-.014-.016-.003-.004a.672.672 0 0 0-.162-.428.528.528 0 0 0-.43-.195.525.525 0 0 0-.423.191.674.674 0 0 0-.167.42v.019zm.325-.378h.322l.036.002a.49.49 0 0 0 .038.004c.041.01.079.03.114.06.034.03.052.079.052.148l-.001.022-.003.022c-.006.024-.018.047-.035.069s-.046.041-.084.056v.004c.034.007.058.022.071.044a.215.215 0 0 1 .026.072l.004.032c.002.01.002.02.002.03l.002.038c0 .012 0 .022.002.032 0 .021.001.038.003.052a.115.115 0 0 0 .017.045l.005.008h-.14a.365.365 0 0 1-.032-.054.251.251 0 0 1-.01-.06l.001-.055.001-.021.001-.02a.1.1 0 0 0-.025-.07c-.017-.018-.058-.027-.123-.027h-.11v.307h-.136v-.74h.002zm.135.333h.155c.052 0 .088-.012.106-.036a.128.128 0 0 0 .028-.083c0-.047-.015-.077-.044-.091a.235.235 0 0 0-.104-.021h-.14v.231h-.001z" fill="#fff" />
                                                </svg>
                                            </span>
                                            Burago
                                        </td>
                                        <td class="text-muted">Rose Watson</td>
                                        <td class="text-end"><span class="badge text-bg-warning rounded-pill">In-progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <span class="avatar avatar-xs me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="avatar-img" viewBox="0 0 192.756 192.756">
                                                    <g fill-rule="evenodd" clip-rule="evenodd">
                                                        <path fill="#fff" d="M0 0h192.756v192.756H0V0z" />
                                                        <path d="M178.691 171.004c-22.973-15.594-52.488-47.338-52.488-64.881 0-16.428 20.328-28.262 20.328-44.969 0-14.758-11.277-31.464-19.492-39.401H45.452c7.657 8.354 19.074 24.644 19.074 39.401 0 16.707-19.91 28.542-19.91 44.969.14 20.328 29.377 48.73 47.477 64.881h86.598z" fill="#c9222f" />
                                                        <path d="M29.858 164.461v-2.646c0-.834-.139-1.531-.417-1.809-.139-.279-.557-.559-1.252-.559-.557 0-.975.279-1.253.559-.278.277-.417.975-.417 1.947v2.508h3.339zm10.164 5.707H22.201v-8.631c0-2.646.417-4.455 1.253-5.568.835-1.254 2.088-1.811 3.897-1.811 1.114 0 1.95.277 2.646.695.696.557 1.392 1.254 1.811 2.229a3.779 3.779 0 0 1 1.113-2.229c.696-.418 1.531-.695 2.784-.695l2.367-.141h.139c.696 0 1.114-.139 1.114-.418h.695v5.711c-.417.137-.834.137-1.113.277h-2.505c-.975 0-1.671.277-1.95.557-.417.416-.557.975-.557 1.949v2.367h6.125v5.708h.002zm-17.821-24.781h17.821v5.848H22.201v-5.848zm10.86-15.037v-5.291c2.367.141 4.177.975 5.43 2.367 1.392 1.531 1.949 3.48 1.949 6.127 0 2.785-.835 5.012-2.506 6.682-1.67 1.67-3.898 2.367-6.822 2.367-2.923 0-5.151-.697-6.822-2.367s-2.505-3.76-2.505-6.543c0-2.646.556-4.596 1.81-6.127 1.252-1.531 3.063-2.227 5.29-2.506v5.43c-.835.141-1.532.418-1.949.975-.557.418-.696 1.254-.696 2.09 0 1.113.418 1.949 1.113 2.506.836.557 2.089.834 3.76.834s2.785-.277 3.62-.834 1.253-1.533 1.253-2.645c0-.836-.279-1.533-.696-2.09-.558-.557-1.254-.837-2.229-.975zm6.961-7.797H22.201v-5.709h5.987v-5.15h-5.987v-5.709h17.821v5.709h-6.961v5.15h6.961v5.709zm0-25.061v5.15H22.201v-6.96l8.911-2.506c.14 0 .418-.14.835-.14.418-.139.975-.278 1.671-.417-.557-.139-.975-.278-1.531-.417-.417 0-.696-.14-.975-.14l-8.911-2.506v-6.961h17.821v5.151H29.719c-.557-.139-1.113-.139-1.531-.139.835.278 1.81.417 2.923.696l.14.139 8.771 2.089v4.038l-8.492 2.229c-.418.139-.835.139-1.393.277-.418.139-1.113.279-1.949.418h11.834v-.001zm-8.91-23.251c1.671 0 2.924-.278 3.759-.835.696-.557 1.114-1.393 1.114-2.646s-.417-2.088-1.114-2.646c-.835-.556-2.088-.835-3.759-.835s-2.923.279-3.76.835c-.695.557-1.113 1.393-1.113 2.646s.418 2.089 1.113 2.646c.836.557 2.089.835 3.76.835zm0 5.708c-2.923 0-5.151-.835-6.822-2.506-1.671-1.531-2.505-3.759-2.505-6.683 0-2.784.834-5.012 2.505-6.683s3.899-2.506 6.822-2.506c2.924 0 5.152.835 6.822 2.506 1.671 1.671 2.506 3.898 2.506 6.683 0 2.924-.835 5.152-2.506 6.683-1.67 1.671-3.898 2.506-6.822 2.506zm8.91-21.023H22.201v-5.43l8.354-4.873c.139-.14.557-.418.975-.557.417-.139.835-.279 1.531-.557-.418.139-.696.139-1.114.139H22.201v-5.429h17.821v5.429l-8.213 5.012-1.114.557c-.417.139-.836.278-1.392.557.277-.139.556-.139.975-.139.278 0 .834-.14 1.392-.14h8.353v5.431h-.001zm-4.594-25.758v-1.53c0-1.393-.279-2.367-.975-2.924-.557-.557-1.67-.835-3.341-.835-1.532 0-2.646.278-3.341.835-.696.557-.975 1.532-.975 2.924v1.53h8.632zm4.594 5.709H22.201v-6.822c0-1.81.139-3.062.279-3.898.139-.975.417-1.67.695-2.366.836-1.114 1.811-2.089 3.063-2.646 1.393-.696 2.924-.975 4.873-.975s3.759.417 5.013 1.113c1.392.835 2.506 1.95 3.063 3.342.278.697.556 1.392.556 2.227.139.836.278 2.228.278 4.177v5.848h.001z" />
                                                    </g>
                                                </svg>
                                            </span>
                                            Richmond
                                        </td>
                                        <td class="text-muted">Levente Kosa</td>
                                        <td class="text-end"><span class="badge text-bg-warning rounded-pill">In-progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <span class="avatar avatar-xs me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="avatar-img" viewBox="0.1 0.1 299.8 120.125">
                                                    <path d="M38.867 26.309C17.721 26.309.1 35.279.1 62.345c0 21.442 11.849 34.944 39.312 34.944 32.326 0 34.398-21.294 34.398-21.294H58.147s-3.358 11.466-19.69 11.466c-13.302 0-22.869-8.986-22.869-21.58h59.861v-7.904c0-12.46-7.91-31.668-36.582-31.668zM38.32 36.41c12.662 0 21.294 7.757 21.294 19.383h-43.68c0-12.343 11.268-19.383 22.386-19.383z" fill="#e53238" />
                                                    <path d="M75.438.1v83.597c0 4.745-.339 11.408-.339 11.408h14.939s.537-4.785.537-9.159c0 0 7.381 11.548 27.451 11.548 21.134 0 35.49-14.674 35.49-35.695 0-19.557-13.186-35.286-35.456-35.286-20.854 0-27.334 11.261-27.334 11.261V.1H75.438zm38.766 36.753c14.352 0 23.479 10.652 23.479 24.946 0 15.328-10.541 25.355-23.376 25.355-15.318 0-23.581-11.961-23.581-25.219 0-12.354 7.414-25.082 23.478-25.082z" fill="#0064d2" />
                                                    <path d="M190.645 26.309c-31.812 0-33.852 17.418-33.852 20.202h15.834s.83-10.169 16.926-10.169c10.459 0 18.564 4.788 18.564 13.991v3.276h-18.564c-24.645 0-37.674 7.21-37.674 21.841 0 14.398 12.038 22.232 28.307 22.232 22.172 0 29.314-12.251 29.314-12.251 0 4.873.375 9.675.375 9.675h14.076s-.545-5.952-.545-9.76V52.432c0-21.582-17.408-26.123-32.761-26.123zm17.472 37.128v4.368c0 5.697-3.516 19.861-24.212 19.861-11.333 0-16.192-5.656-16.192-12.217 0-11.935 16.363-12.012 40.404-12.012z" fill="#f5af02" />
                                                    <path d="M214.879 29.041h17.813l25.565 51.218 25.506-51.218H299.9l-46.459 91.184h-16.927l13.406-25.419-35.041-65.765z" fill="#86b817" />
                                                </svg>
                                            </span>
                                            eBay
                                        </td>
                                        <td class="text-muted">Andy Webb</td>
                                        <td class="text-end"><span class="badge text-bg-danger rounded-pill">Outdated</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- / .table-responsive -->
                    </div>
                </div>

                <div class="col-xxl-7 d-flex">

                    <!-- Card -->
                    <div class="card border-0 flex-fill w-100">
                        <div class="card-header border-0 card-header-space-between">

                            <!-- Title -->
                            <h2 class="card-header-title h4 text-uppercase">
                                Sales
                            </h2>

                            <!-- Label -->
                            <h5 class="text-uppercase text-muted fw-semibold mb-0">
                                <span class="legend-circle-lg bg-primary"></span>
                                Projections
                            </h5>

                            <!-- Label -->
                            <h5 class="text-uppercase text-muted fw-semibold mb-0 ms-4">
                                <span class="legend-circle-lg bg-light"></span>
                                Actual
                            </h5>
                        </div>

                        <div class="card-body d-flex flex-column">

                            <!-- Chart -->
                            <div class="chart-container flex-grow-1 h-275px">
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col">

                    <!-- Card -->
                    <div class="card border-0 flex-fill w-100" data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}' id="users">
                        <div class="card-header border-0 card-header-space-between">

                            <!-- Title -->
                            <h2 class="card-header-title h4 text-uppercase">
                                Users
                            </h2>

                            <!-- Dropdown -->
                            <div class="dropdown ms-4">
                                <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                        <g>
                                            <circle cx="12" cy="3.25" r="3.25" style="fill: currentColor" />
                                            <circle cx="12" cy="12" r="3.25" style="fill: currentColor" />
                                            <circle cx="12" cy="20.75" r="3.25" style="fill: currentColor" />
                                        </g>
                                    </svg>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Export report
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Share
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Action
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="w-60px">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="" id="checkAllCheckboxes">
                                            </div>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="name">
                                                Full name
                                            </a>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="email">
                                                Email
                                            </a>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="id">
                                                User ID
                                            </a>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                                                Signed up
                                            </a>
                                        </th>
                                        <th class="w-150px min-w-150px">
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                                Status
                                            </a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="list">
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/9e7ac59225f733be5944b3e91271b33adb30cae7/56230/assets/images/profiles/profile-14.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Hakeem Chan</span>
                                        </td>
                                        <td class="email">lobortis.augue@natoquepenatibuset.ca</td>
                                        <td class="id">#9265</td>
                                        <td class="date" data-signed="1648252800">03.26.2022</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/44bfbd93721837b9534e9dc6fc058dbaef92d03a/f9236/assets/images/profiles/profile-23.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Orli J. Goodman</span>
                                        </td>
                                        <td class="email">pede@at.com</td>
                                        <td class="id">#8545</td>
                                        <td class="date" data-signed="1627858800">08.02.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/236af360580cfc7622e3a7d309d709a5018937c5/e3ee4/assets/images/profiles/profile-16.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Halee P. Lane</span>
                                        </td>
                                        <td class="email">diam@nislNullaeu.net</td>
                                        <td class="id">#4445</td>
                                        <td class="date" data-signed="1615680000">03.14.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <span class="avatar-title text-bg-primary-soft">KS</span>
                                            </div>
                                            <span class="name fw-bold">Kimberly Salinas</span>
                                        </td>
                                        <td class="email">in.lobortis.tellus@faucibusorci.co.uk</td>
                                        <td class="id">#2391</td>
                                        <td class="date" data-signed="1615939200">03.17.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/963edcf9fc0c25098f00370b3b3d021e2ddac277/e69d6/assets/images/profiles/profile-17.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Galena Oliver</span>
                                        </td>
                                        <td class="email">eleifend.nec@ligulaconsectetuerrhoncus.ca</td>
                                        <td class="id">#8987</td>
                                        <td class="date" data-signed="1607990400">12.15.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/768c1ecfdff6a59ab55d514b80bd59e8dfa28996/35a64/assets/images/profiles/profile-19.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Kelly Doyle</span>
                                        </td>
                                        <td class="email">urna.et@volutpatNulladignissim.org</td>
                                        <td class="id">#5898</td>
                                        <td class="date" data-signed="1650495600">04.21.2022</td>
                                        <td class="status"><span class="legend-circle bg-danger"></span>Overdue</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/0b34af989cce5e54297f16547b3eff1ace44dad5/eb8ea/assets/images/profiles/profile-20.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Keane Wyatt</span>
                                        </td>
                                        <td class="email">quam@Ut.org</td>
                                        <td class="id">#3431</td>
                                        <td class="date" data-signed="1655506800">06.18.2022</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <span class="avatar-title text-bg-success-soft">NA</span>
                                            </div>
                                            <span class="name fw-bold">Nasim Aguirre</span>
                                        </td>
                                        <td class="email">nisl@mollis.net</td>
                                        <td class="id">#6701</td>
                                        <td class="date" data-signed="1602975600">10.18.2021</td>
                                        <td class="status"><span class="legend-circle bg-danger"></span>Overdue</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/23af178af51cd04f5a1b181720a77e2839e7a4be/5d54f/assets/images/profiles/profile-25.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Leo Johnston</span>
                                        </td>
                                        <td class="email">Cum.sociis@Etiambibendumfermentum.co.uk</td>
                                        <td class="id">#9258</td>
                                        <td class="date" data-signed="1624748400">06.27.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/f3d8c9fbcd994759c966476a8349d5d053e38964/e7323/assets/images/profiles/profile-26.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Macon Dean</span>
                                        </td>
                                        <td class="email">aliquam@nec.edu</td>
                                        <td class="id">#4885</td>
                                        <td class="date" data-signed="1614470400">02.28.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/ea01948f5a48922378b407c27d2b4e5809ed4949/35ecd/assets/images/profiles/profile-11.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Yoko Grimes</span>
                                        </td>
                                        <td class="email">ut.eros@Donecporttitor.co.uk</td>
                                        <td class="id">#1960</td>
                                        <td class="date" data-signed="1635289200">10.27.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/395009794393b7ec5f8c3faaf9823b0a3692032b/71f55/assets/images/profiles/profile-27.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Jordan Douglas</span>
                                        </td>
                                        <td class="email">fermentum.convallis.ligula@euenimEtiam.edu</td>
                                        <td class="id">#8385</td>
                                        <td class="date" data-signed="1646265600">03.03.2022</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/408c347002e5d3c7a119c65184b1959dac40f3d7/46d8d/assets/images/profiles/profile-30.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Carly Beard</span>
                                        </td>
                                        <td class="email">dolor.dolor@lacusMaurisnon.org</td>
                                        <td class="id">#9380</td>
                                        <td class="date" data-signed="1654902000">06.11.2022</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/5c7ec5413a460dc895a7798c37ce609f43ad36b0/c94b0/assets/images/profiles/profile-29.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Kareem Q. Weeks</span>
                                        </td>
                                        <td class="email">eget@aliquetProinvelit.co.uk</td>
                                        <td class="id">#9761</td>
                                        <td class="date" data-signed="1622329200">05.30.2021</td>
                                        <td class="status"><span class="legend-circle bg-danger"></span>Overdue</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <span class="avatar-title text-bg-danger-soft">DH</span>
                                            </div>
                                            <span class="name fw-bold">Drew R. Hatfield</span>
                                        </td>
                                        <td class="email">Integer.vulputate@facilisi.edu</td>
                                        <td class="id">#4798</td>
                                        <td class="date" data-signed="1626562800">07.18.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/693e2209e9a62e54c60745dd18751d70c3dec10a/9d43e/assets/images/profiles/profile-22.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Kitra F. Strickland</span>
                                        </td>
                                        <td class="email">Donec.consectetuer@dolorNulla.net</td>
                                        <td class="id">#1246</td>
                                        <td class="date" data-signed="1651791600">05.06.2022</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/5dfa4398a7f2beddbcfa617402e193f2f13aaa94/2ecb0/assets/images/profiles/profile-28.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Jack Dennis</span>
                                        </td>
                                        <td class="email">Quisque.libero.lacus@torquentper.com</td>
                                        <td class="id">#1099</td>
                                        <td class="date" data-signed="1658703600">07.25.2022</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/d48629dc873bf03c72cd58826b5de65bc800aaac/5bb69/assets/images/profiles/profile-10.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Tyler Hartman</span>
                                        </td>
                                        <td class="email">arcu.imperdiet@Pellentesqueultriciesdignissim.com</td>
                                        <td class="id">#9151</td>
                                        <td class="date" data-signed="1651359600">05.01.2022</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/14bd6c6c1ba1296a1542d31d7dd9490e8bc9e472/d1f70/assets/images/profiles/profile-18.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Hally Gilmore</span>
                                        </td>
                                        <td class="email">lacus.Etiam@Pellentesquehabitantmorbi.net</td>
                                        <td class="id">#9846</td>
                                        <td class="date" data-signed="1633302000">10.04.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/b12e43e592a36b25ced24c52bc8ae78595f1f2c6/2ceab/assets/images/profiles/profile-24.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Rosalyn Cherry</span>
                                        </td>
                                        <td class="email">at.egestas.a@eunullaat.co.uk</td>
                                        <td class="id">#9564</td>
                                        <td class="date" data-signed="1593558000">07.01.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- / .table-responsive -->

                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-5 text-secondary small">
                                    Showing: <span class="list-pagination-page-first"></span> - <span class="list-pagination-page-last"></span> of <span class="list-pagination-pages"></span>
                                </div>

                                <!-- Pagination -->
                                <ul class="pagination list-pagination mb-0"></ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container-fluid -->

        <!-- Footer-->
        <!-- Footer -->
        <footer class="mt-auto">
            <div class="container-fluid mt-4 mb-6 text-muted">
                <div class="row justify-content-between">
                    <div class="col">
                        © Dashly. 2022 Webinning.
                    </div>

                    <div class="col-auto">
                        v1.2.0
                    </div>
                </div> <!-- / .row -->
            </div>
        </footer>

        <!-- Button -->
        <a class="btn btn-dark position-fixed bottom-0 end-0 me-4 me-lg-7 mb-6 z-index-1000" data-bs-toggle="offcanvas" href="#offcanvasNotifications" role="button" aria-controls="offcanvasNotifications">
            <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.25,18.75a1.5,1.5,0,0,1-1.5-1.5V9.75a1.5,1.5,0,0,1,1.5-1.5h10.5a1.5,1.5,0,0,1,1.5,1.5v7.5a1.5,1.5,0,0,1-1.5,1.5h-1.5v4.5l-4.5-4.5Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                <path d="M6.75,12.75l-3,3v-4.5H2.25a1.5,1.5,0,0,1-1.5-1.5V2.25A1.5,1.5,0,0,1,2.25.75h10.5a1.5,1.5,0,0,1,1.5,1.5v3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
            </svg>
            Chat
        </a>

    </main> <!-- / main -->

    <!-- JAVASCRIPT-->
    <!-- Theme JS -->
    <script src="https://dashly-theme.com/assets/js/chart.js.bundle.js"></script>
    <script src="https://dashly-theme.com/assets/js/list.bundle.js"></script>
    <script src="https://dashly-theme.com/assets/js/theme.bundle.js"></script>
</body>

</html>


    <?php



} else {

    header("Location: adminLogin.php");

}




    ?>