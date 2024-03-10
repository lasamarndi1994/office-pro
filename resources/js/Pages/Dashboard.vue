<template>
    <app-layout>
        <div class="row">
            <div class="col-xxl-8 col-lg-12 col-md-12">
                <div class="row">

                    <div class="col-lg-6 col-md-12">
                        <div class="card employee-welcome-card flex-fill">
                            <div class="card-body">
                                <div class="welcome-info">
                                    <div class="welcome-content">
                                        <h4>Welcome Back, Darlee</h4>
                                        <p>You have <span>4 meetings</span> today,</p>
                                    </div>
                                    <div class="welcome-img">
                                        <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/avatar/avatar-19.jpg"
                                            class="img-fluid" alt="User">
                                    </div>
                                </div>
                                <div class="welcome-btn">
                                    <Link href="/my-profile" class="btn btn-secondary">View Profile</Link>
                                </div>
                            </div>
                        </div>
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="statistic-header">
                                    <h4>Statistics</h4>
                                    <div class="dropdown statistic-dropdown">
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            Today
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Week
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Month
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Year
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clock-in-info">
                                    <div class="clock-in-content">
                                        <p>Work Time</p>
                                        <h4>6 Hrs : 54 Min</h4>
                                    </div>
                                    <div class="clock-in-btn">
                                        <a href="javascript:void(0);" class="btn btn-primary">
                                            <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/icons/clock-in.svg"
                                                alt="Icon"> Clock-In
                                        </a>
                                    </div>
                                </div>
                                <div class="clock-in-list">
                                    <ul class="nav">
                                        <li>
                                            <p>Remaining</p>
                                            <h6>2 Hrs 36 Min</h6>
                                        </li>
                                        <li>
                                            <p>Overtime</p>
                                            <h6>0 Hrs 00 Min</h6>
                                        </li>
                                        <li>
                                            <p>Break</p>
                                            <h6>1 Hrs 20 Min</h6>
                                        </li>
                                    </ul>
                                </div>
                                <div class="view-attendance">
                                    <a href="attendance.html">
                                        View Attendance <i class="fe fe-arrow-right-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card info-card flex-fill">
                            <div class="card-body">
                                <h4>Upcoming Holidays</h4>
                                <div class="holiday-details">
                                    <div class="holiday-calendar">
                                        <div class="holiday-calendar-icon">
                                            <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/icons/holiday-calendar.svg"
                                                alt="Icon">
                                        </div>
                                        <div class="holiday-calendar-content">
                                            <h6>Ramzan</h6>
                                            <p>Mon 20 May 2024</p>
                                        </div>
                                    </div>
                                    <div class="holiday-btn">
                                        <a href="holidays.html" class="btn">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-12">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="statistic-header">
                                    <h4>Attendance &amp; Leaves</h4>
                                    <div class="dropdown statistic-dropdown">
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
                                            aria-expanded="false">
                                            2024
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                2025
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                2026
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                2027
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="attendance-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="attendance-details">
                                                <h4 class="text-primary">9</h4>
                                                <p>Total Leaves</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="attendance-details">
                                                <h4 class="text-pink">5.5</h4>
                                                <p>Leaves Taken</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="attendance-details">
                                                <h4 class="text-success">04</h4>
                                                <p>Leaves Absent</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="attendance-details">
                                                <h4 class="text-purple">0</h4>
                                                <p>Pending Approval</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="attendance-details">
                                                <h4 class="text-info">214</h4>
                                                <p>Working Days</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="attendance-details">
                                                <h4 class="text-danger">2</h4>
                                                <p>Loss of Pay</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="view-attendance">
                                    <a href="leaves-employee.html">
                                        Apply Leave <i class="fe fe-arrow-right-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="statistic-header">
                                    <h4>Working hours</h4>
                                    <div class="dropdown statistic-dropdown">
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            This Week
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last Week
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                This Month
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 30 Days
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="working-hour-info" style="position: relative;">
                                    <div id="working_chart">
                                        <div id="apexchartshbrka99j"
                                            class="apexcharts-canvas apexchartshbrka99j apexcharts-theme-light"
                                            style=""><svg id="SvgjsSvg1751" width="423" height="210"
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1753" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(49.02083396911621, 30)">
                                                    <defs id="SvgjsDefs1752">
                                                        <linearGradient id="SvgjsLinearGradient1757" x1="0" y1="0"
                                                            x2="0" y2="1">
                                                            <stop id="SvgjsStop1758" stop-opacity="0.4"
                                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                            <stop id="SvgjsStop1759" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                            <stop id="SvgjsStop1760" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMaskhbrka99j">
                                                            <rect id="SvgjsRect1762" width="367.9791660308838"
                                                                height="143.42666563796996" x="-2" y="0" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskhbrka99j">
                                                            <rect id="SvgjsRect1763" width="367.9791660308838"
                                                                height="147.42666563796996" x="-2" y="-2" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <rect id="SvgjsRect1761" width="15.599107115609304"
                                                        height="143.42666563796996" x="0" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke-dasharray="3"
                                                        fill="url(#SvgjsLinearGradient1757)"
                                                        class="apexcharts-xcrosshairs" y2="143.42666563796996"
                                                        filter="none" fill-opacity="0.9"></rect>
                                                    <g id="SvgjsG1783" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1784" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"><text id="SvgjsText1786"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="25.99851185934884" y="172.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1787"> S </tspan>
                                                                <title> S </title>
                                                            </text><text id="SvgjsText1789"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="77.99553557804653" y="172.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1790">M</tspan>
                                                                <title>M</title>
                                                            </text><text id="SvgjsText1792"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="129.99255929674422" y="172.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1793">T</tspan>
                                                                <title>T</title>
                                                            </text><text id="SvgjsText1795"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="181.9895830154419" y="172.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1796">W</tspan>
                                                                <title>W</title>
                                                            </text><text id="SvgjsText1798"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="233.9866067341396" y="172.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1799">T</tspan>
                                                                <title>T</title>
                                                            </text><text id="SvgjsText1801"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="285.98363045283725" y="172.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1802">F</tspan>
                                                                <title>F</title>
                                                            </text><text id="SvgjsText1804"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="337.9806541715349" y="172.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1805">S</tspan>
                                                                <title>S</title>
                                                            </text></g>
                                                        <line id="SvgjsLine1806" x1="0" y1="144.42666563796996"
                                                            x2="363.9791660308838" y2="144.42666563796996"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG1821" class="apexcharts-grid">
                                                        <g id="SvgjsG1822" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine1832" x1="0" y1="0"
                                                                x2="363.9791660308838" y2="0" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1833" x1="0" y1="28.685333127593992"
                                                                x2="363.9791660308838" y2="28.685333127593992"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1834" x1="0" y1="57.370666255187984"
                                                                x2="363.9791660308838" y2="57.370666255187984"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1835" x1="0" y1="86.05599938278198"
                                                                x2="363.9791660308838" y2="86.05599938278198"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1836" x1="0" y1="114.74133251037597"
                                                                x2="363.9791660308838" y2="114.74133251037597"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1837" x1="0" y1="143.42666563796996"
                                                                x2="363.9791660308838" y2="143.42666563796996"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1823" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine1824" x1="0" y1="144.42666563796996" x2="0"
                                                            y2="150.42666563796996" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1825" x1="51.99702371869768"
                                                            y1="144.42666563796996" x2="51.99702371869768"
                                                            y2="150.42666563796996" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1826" x1="103.99404743739537"
                                                            y1="144.42666563796996" x2="103.99404743739537"
                                                            y2="150.42666563796996" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1827" x1="155.99107115609306"
                                                            y1="144.42666563796996" x2="155.99107115609306"
                                                            y2="150.42666563796996" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1828" x1="207.98809487479073"
                                                            y1="144.42666563796996" x2="207.98809487479073"
                                                            y2="150.42666563796996" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1829" x1="259.98511859348844"
                                                            y1="144.42666563796996" x2="259.98511859348844"
                                                            y2="150.42666563796996" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1830" x1="311.9821423121861"
                                                            y1="144.42666563796996" x2="311.9821423121861"
                                                            y2="150.42666563796996" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1831" x1="363.9791660308838"
                                                            y1="144.42666563796996" x2="363.9791660308838"
                                                            y2="150.42666563796996" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1839" x1="0" y1="143.42666563796996"
                                                            x2="363.9791660308838" y2="143.42666563796996"
                                                            stroke="transparent" stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine1838" x1="0" y1="1" x2="0"
                                                            y2="143.42666563796996" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1764"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1765" class="apexcharts-series" seriesName="Break"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1767"
                                                                d="M 18.198958301544188 86.05599938278198L 18.198958301544188 96.49888916767665Q 25.998511859348838 104.29844272548131 33.798065417153495 96.49888916767665L 33.798065417153495 96.49888916767665L 33.798065417153495 86.05599938278198L 33.798065417153495 86.05599938278198z"
                                                                fill="rgba(252,19,61,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="square"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskhbrka99j)"
                                                                pathTo="M 18.198958301544188 86.05599938278198L 18.198958301544188 96.49888916767665Q 25.998511859348838 104.29844272548131 33.798065417153495 96.49888916767665L 33.798065417153495 96.49888916767665L 33.798065417153495 86.05599938278198L 33.798065417153495 86.05599938278198z"
                                                                pathFrom="M 18.198958301544188 86.05599938278198L 18.198958301544188 86.05599938278198L 33.798065417153495 86.05599938278198L 33.798065417153495 86.05599938278198L 33.798065417153495 86.05599938278198L 18.198958301544188 86.05599938278198"
                                                                cy="100.39866594657897" cx="70.19598202024187" j="0"
                                                                val="-50" barHeight="-14.342666563796996"
                                                                barWidth="15.599107115609304"></path>
                                                            <path id="SvgjsPath1768"
                                                                d="M 70.19598202024187 86.05599938278198L 70.19598202024187 116.57862235699244Q 77.99553557804653 124.3781759147971 85.79508913585117 116.57862235699244L 85.79508913585117 116.57862235699244L 85.79508913585117 86.05599938278198L 85.79508913585117 86.05599938278198z"
                                                                fill="rgba(252,19,61,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="square"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskhbrka99j)"
                                                                pathTo="M 70.19598202024187 86.05599938278198L 70.19598202024187 116.57862235699244Q 77.99553557804653 124.3781759147971 85.79508913585117 116.57862235699244L 85.79508913585117 116.57862235699244L 85.79508913585117 86.05599938278198L 85.79508913585117 86.05599938278198z"
                                                                pathFrom="M 70.19598202024187 86.05599938278198L 70.19598202024187 86.05599938278198L 85.79508913585117 86.05599938278198L 85.79508913585117 86.05599938278198L 85.79508913585117 86.05599938278198L 70.19598202024187 86.05599938278198"
                                                                cy="120.47839913589476" cx="122.19300573893955" j="1"
                                                                val="-120" barHeight="-34.42239975311279"
                                                                barWidth="15.599107115609304"></path>
                                                            <path id="SvgjsPath1769"
                                                                d="M 122.19300573893955 86.05599938278198L 122.19300573893955 105.10448910595485Q 129.9925592967442 112.90404266375951 137.79211285454886 105.10448910595485L 137.79211285454886 105.10448910595485L 137.79211285454886 86.05599938278198L 137.79211285454886 86.05599938278198z"
                                                                fill="rgba(252,19,61,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="square"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskhbrka99j)"
                                                                pathTo="M 122.19300573893955 86.05599938278198L 122.19300573893955 105.10448910595485Q 129.9925592967442 112.90404266375951 137.79211285454886 105.10448910595485L 137.79211285454886 105.10448910595485L 137.79211285454886 86.05599938278198L 137.79211285454886 86.05599938278198z"
                                                                pathFrom="M 122.19300573893955 86.05599938278198L 122.19300573893955 86.05599938278198L 137.79211285454886 86.05599938278198L 137.79211285454886 86.05599938278198L 137.79211285454886 86.05599938278198L 122.19300573893955 86.05599938278198"
                                                                cy="109.00426588485718" cx="174.19002945763722" j="2"
                                                                val="-80" barHeight="-22.948266502075196"
                                                                barWidth="15.599107115609304"></path>
                                                            <path id="SvgjsPath1770"
                                                                d="M 174.19002945763722 86.05599938278198L 174.19002945763722 133.78982223354885Q 181.98958301544187 141.5893757913535 189.78913657324654 133.78982223354885L 189.78913657324654 133.78982223354885L 189.78913657324654 86.05599938278198L 189.78913657324654 86.05599938278198z"
                                                                fill="rgba(252,19,61,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="square"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskhbrka99j)"
                                                                pathTo="M 174.19002945763722 86.05599938278198L 174.19002945763722 133.78982223354885Q 181.98958301544187 141.5893757913535 189.78913657324654 133.78982223354885L 189.78913657324654 133.78982223354885L 189.78913657324654 86.05599938278198L 189.78913657324654 86.05599938278198z"
                                                                pathFrom="M 174.19002945763722 86.05599938278198L 174.19002945763722 86.05599938278198L 189.78913657324654 86.05599938278198L 189.78913657324654 86.05599938278198L 189.78913657324654 86.05599938278198L 174.19002945763722 86.05599938278198"
                                                                cy="137.68959901245117" cx="226.1870531763349" j="3"
                                                                val="-180" barHeight="-51.633599629669185"
                                                                barWidth="15.599107115609304"></path>
                                                            <path id="SvgjsPath1771"
                                                                d="M 226.1870531763349 86.05599938278198L 226.1870531763349 105.10448910595485Q 233.98660673413954 112.90404266375951 241.7861602919442 105.10448910595485L 241.7861602919442 105.10448910595485L 241.7861602919442 86.05599938278198L 241.7861602919442 86.05599938278198z"
                                                                fill="rgba(252,19,61,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="square"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskhbrka99j)"
                                                                pathTo="M 226.1870531763349 86.05599938278198L 226.1870531763349 105.10448910595485Q 233.98660673413954 112.90404266375951 241.7861602919442 105.10448910595485L 241.7861602919442 105.10448910595485L 241.7861602919442 86.05599938278198L 241.7861602919442 86.05599938278198z"
                                                                pathFrom="M 226.1870531763349 86.05599938278198L 226.1870531763349 86.05599938278198L 241.7861602919442 86.05599938278198L 241.7861602919442 86.05599938278198L 241.7861602919442 86.05599938278198L 226.1870531763349 86.05599938278198"
                                                                cy="109.00426588485718" cx="278.1840768950326" j="4"
                                                                val="-80" barHeight="-22.948266502075196"
                                                                barWidth="15.599107115609304"></path>
                                                            <path id="SvgjsPath1772"
                                                                d="M 278.1840768950326 86.05599938278198L 278.1840768950326 102.23595579319544Q 285.98363045283725 110.0355093510001 293.7831840106419 102.23595579319544L 293.7831840106419 102.23595579319544L 293.7831840106419 86.05599938278198L 293.7831840106419 86.05599938278198z"
                                                                fill="rgba(252,19,61,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="square"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskhbrka99j)"
                                                                pathTo="M 278.1840768950326 86.05599938278198L 278.1840768950326 102.23595579319544Q 285.98363045283725 110.0355093510001 293.7831840106419 102.23595579319544L 293.7831840106419 102.23595579319544L 293.7831840106419 86.05599938278198L 293.7831840106419 86.05599938278198z"
                                                                pathFrom="M 278.1840768950326 86.05599938278198L 278.1840768950326 86.05599938278198L 293.7831840106419 86.05599938278198L 293.7831840106419 86.05599938278198L 293.7831840106419 86.05599938278198L 278.1840768950326 86.05599938278198"
                                                                cy="106.13573257209777" cx="330.1811006137303" j="5"
                                                                val="-70" barHeight="-20.079733189315796"
                                                                barWidth="15.599107115609304"></path>
                                                            <path id="SvgjsPath1773"
                                                                d="M 330.1811006137303 86.05599938278198L 330.1811006137303 110.84155573147365Q 337.9806541715349 118.6411092892783 345.78020772933957 110.84155573147365L 345.78020772933957 110.84155573147365L 345.78020772933957 86.05599938278198L 345.78020772933957 86.05599938278198z"
                                                                fill="rgba(252,19,61,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="square"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskhbrka99j)"
                                                                pathTo="M 330.1811006137303 86.05599938278198L 330.1811006137303 110.84155573147365Q 337.9806541715349 118.6411092892783 345.78020772933957 110.84155573147365L 345.78020772933957 110.84155573147365L 345.78020772933957 86.05599938278198L 345.78020772933957 86.05599938278198z"
                                                                pathFrom="M 330.1811006137303 86.05599938278198L 330.1811006137303 86.05599938278198L 345.78020772933957 86.05599938278198L 345.78020772933957 86.05599938278198L 345.78020772933957 86.05599938278198L 330.1811006137303 86.05599938278198"
                                                                cy="114.74133251037597" cx="382.17812433242796" j="6"
                                                                val="-100" barHeight="-28.685333127593992"
                                                                barWidth="15.599107115609304"></path>
                                                        </g>
                                                        <g id="SvgjsG1774" class="apexcharts-series" seriesName="Hours"
                                                            rel="2" data:realIndex="1">
                                                            <path id="SvgjsPath1776"
                                                                d="M 18.198958301544188 86.05599938278198L 18.198958301544188 32.58510990649632Q 25.998511859348838 24.78555634869167 33.798065417153495 32.58510990649632L 33.798065417153495 32.58510990649632L 33.798065417153495 86.05599938278198L 33.798065417153495 86.05599938278198z"
                                                                fill="rgba(85,206,99,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="square"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="1"
                                                                clip-path="url(#gridRectMaskhbrka99j)"
                                                                pathTo="M 18.198958301544188 86.05599938278198L 18.198958301544188 32.58510990649632Q 25.998511859348838 24.78555634869167 33.798065417153495 32.58510990649632L 33.798065417153495 32.58510990649632L 33.798065417153495 86.05599938278198L 33.798065417153495 86.05599938278198z"
                                                                pathFrom="M 18.198958301544188 86.05599938278198L 18.198958301544188 86.05599938278198L 33.798065417153495 86.05599938278198L 33.798065417153495 86.05599938278198L 33.798065417153495 86.05599938278198L 18.198958301544188 86.05599938278198"
                                                                cy="28.685333127593992" cx="70.19598202024187" j="0"
                                                                val="200" barHeight="57.370666255187984"
                                                                barWidth="15.599107115609304"></path>
                                                            <path id="SvgjsPath1777"
                                                                d="M 70.19598202024187 86.05599938278198L 70.19598202024187 18.24244334269932Q 77.99553557804653 10.44288978489467 85.79508913585117 18.24244334269932L 85.79508913585117 18.24244334269932L 85.79508913585117 86.05599938278198L 85.79508913585117 86.05599938278198z"
                                                                fill="rgba(85,206,99,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="square"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="1"
                                                                clip-path="url(#gridRectMaskhbrka99j)"
                                                                pathTo="M 70.19598202024187 86.05599938278198L 70.19598202024187 18.24244334269932Q 77.99553557804653 10.44288978489467 85.79508913585117 18.24244334269932L 85.79508913585117 18.24244334269932L 85.79508913585117 86.05599938278198L 85.79508913585117 86.05599938278198z"
                                                                pathFrom="M 70.19598202024187 86.05599938278198L 70.19598202024187 86.05599938278198L 85.79508913585117 86.05599938278198L 85.79508913585117 86.05599938278198L 85.79508913585117 86.05599938278198L 70.19598202024187 86.05599938278198"
                                                                cy="14.342666563796996" cx="122.19300573893955" j="1"
                                                                val="250" barHeight="71.71333281898498"
                                                                barWidth="15.599107115609304"></path>
                                                            <path id="SvgjsPath1778"
                                                                d="M 122.19300573893955 86.05599938278198L 122.19300573893955 32.58510990649632Q 129.9925592967442 24.78555634869167 137.79211285454886 32.58510990649632L 137.79211285454886 32.58510990649632L 137.79211285454886 86.05599938278198L 137.79211285454886 86.05599938278198z"
                                                                fill="rgba(85,206,99,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="square"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="1"
                                                                clip-path="url(#gridRectMaskhbrka99j)"
                                                                pathTo="M 122.19300573893955 86.05599938278198L 122.19300573893955 32.58510990649632Q 129.9925592967442 24.78555634869167 137.79211285454886 32.58510990649632L 137.79211285454886 32.58510990649632L 137.79211285454886 86.05599938278198L 137.79211285454886 86.05599938278198z"
                                                                pathFrom="M 122.19300573893955 86.05599938278198L 122.19300573893955 86.05599938278198L 137.79211285454886 86.05599938278198L 137.79211285454886 86.05599938278198L 137.79211285454886 86.05599938278198L 122.19300573893955 86.05599938278198"
                                                                cy="28.685333127593992" cx="174.19002945763722" j="2"
                                                                val="200" barHeight="57.370666255187984"
                                                                barWidth="15.599107115609304"></path>
                                                            <path id="SvgjsPath1779"
                                                                d="M 174.19002945763722 86.05599938278198L 174.19002945763722 6.768310091661722Q 181.98958301544187 -1.0312434661429295 189.78913657324654 6.768310091661722L 189.78913657324654 6.768310091661722L 189.78913657324654 86.05599938278198L 189.78913657324654 86.05599938278198z"
                                                                fill="rgba(85,206,99,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="square"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="1"
                                                                clip-path="url(#gridRectMaskhbrka99j)"
                                                                pathTo="M 174.19002945763722 86.05599938278198L 174.19002945763722 6.768310091661722Q 181.98958301544187 -1.0312434661429295 189.78913657324654 6.768310091661722L 189.78913657324654 6.768310091661722L 189.78913657324654 86.05599938278198L 189.78913657324654 86.05599938278198z"
                                                                pathFrom="M 174.19002945763722 86.05599938278198L 174.19002945763722 86.05599938278198L 189.78913657324654 86.05599938278198L 189.78913657324654 86.05599938278198L 189.78913657324654 86.05599938278198L 174.19002945763722 86.05599938278198"
                                                                cy="2.8685333127593964" cx="226.1870531763349" j="3"
                                                                val="290" barHeight="83.18746607002258"
                                                                barWidth="15.599107115609304"></path>
                                                            <path id="SvgjsPath1780"
                                                                d="M 226.1870531763349 86.05599938278198L 226.1870531763349 26.848043280977517Q 233.98660673413954 19.048489723172864 241.7861602919442 26.848043280977517L 241.7861602919442 26.848043280977517L 241.7861602919442 86.05599938278198L 241.7861602919442 86.05599938278198z"
                                                                fill="rgba(85,206,99,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="square"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="1"
                                                                clip-path="url(#gridRectMaskhbrka99j)"
                                                                pathTo="M 226.1870531763349 86.05599938278198L 226.1870531763349 26.848043280977517Q 233.98660673413954 19.048489723172864 241.7861602919442 26.848043280977517L 241.7861602919442 26.848043280977517L 241.7861602919442 86.05599938278198L 241.7861602919442 86.05599938278198z"
                                                                pathFrom="M 226.1870531763349 86.05599938278198L 226.1870531763349 86.05599938278198L 241.7861602919442 86.05599938278198L 241.7861602919442 86.05599938278198L 241.7861602919442 86.05599938278198L 226.1870531763349 86.05599938278198"
                                                                cy="22.948266502075192" cx="278.1840768950326" j="4"
                                                                val="220" barHeight="63.107732880706784"
                                                                barWidth="15.599107115609304"></path>
                                                            <path id="SvgjsPath1781"
                                                                d="M 278.1840768950326 86.05599938278198L 278.1840768950326 3.899776778902326Q 285.98363045283725 -3.899776778902326 293.7831840106419 3.899776778902326L 293.7831840106419 3.899776778902326L 293.7831840106419 86.05599938278198L 293.7831840106419 86.05599938278198z"
                                                                fill="rgba(85,206,99,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="square"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="1"
                                                                clip-path="url(#gridRectMaskhbrka99j)"
                                                                pathTo="M 278.1840768950326 86.05599938278198L 278.1840768950326 3.899776778902326Q 285.98363045283725 -3.899776778902326 293.7831840106419 3.899776778902326L 293.7831840106419 3.899776778902326L 293.7831840106419 86.05599938278198L 293.7831840106419 86.05599938278198z"
                                                                pathFrom="M 278.1840768950326 86.05599938278198L 278.1840768950326 86.05599938278198L 293.7831840106419 86.05599938278198L 293.7831840106419 86.05599938278198L 293.7831840106419 86.05599938278198L 278.1840768950326 86.05599938278198"
                                                                cy="0" cx="330.1811006137303" j="5" val="300"
                                                                barHeight="86.05599938278198"
                                                                barWidth="15.599107115609304"></path>
                                                            <path id="SvgjsPath1782"
                                                                d="M 330.1811006137303 86.05599938278198L 330.1811006137303 18.24244334269932Q 337.9806541715349 10.44288978489467 345.78020772933957 18.24244334269932L 345.78020772933957 18.24244334269932L 345.78020772933957 86.05599938278198L 345.78020772933957 86.05599938278198z"
                                                                fill="rgba(85,206,99,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="square"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="1"
                                                                clip-path="url(#gridRectMaskhbrka99j)"
                                                                pathTo="M 330.1811006137303 86.05599938278198L 330.1811006137303 18.24244334269932Q 337.9806541715349 10.44288978489467 345.78020772933957 18.24244334269932L 345.78020772933957 18.24244334269932L 345.78020772933957 86.05599938278198L 345.78020772933957 86.05599938278198z"
                                                                pathFrom="M 330.1811006137303 86.05599938278198L 330.1811006137303 86.05599938278198L 345.78020772933957 86.05599938278198L 345.78020772933957 86.05599938278198L 345.78020772933957 86.05599938278198L 330.1811006137303 86.05599938278198"
                                                                cy="14.342666563796996" cx="382.17812433242796" j="6"
                                                                val="250" barHeight="71.71333281898498"
                                                                barWidth="15.599107115609304"></path>
                                                        </g>
                                                        <g id="SvgjsG1766" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                        <g id="SvgjsG1775" class="apexcharts-datalabels"
                                                            data:realIndex="1"></g>
                                                    </g>
                                                    <line id="SvgjsLine1840" x1="0" y1="0" x2="363.9791660308838" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1841" x1="0" y1="0" x2="363.9791660308838" y2="0"
                                                        stroke-dasharray="0" stroke-width="0"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1842" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1843" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1844" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <g id="SvgjsG1807" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(19.02083396911621, 0)">
                                                    <g id="SvgjsG1808" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText1809"
                                                            font-family="Helvetica, Arial, sans-serif" x="20" y="31.5"
                                                            text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1810">300</tspan>
                                                        </text><text id="SvgjsText1811"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="60.18533312759399" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1812">200</tspan>
                                                        </text><text id="SvgjsText1813"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="88.87066625518798" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1814">100</tspan>
                                                        </text><text id="SvgjsText1815"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="117.55599938278198" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1816">0</tspan>
                                                        </text><text id="SvgjsText1817"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="146.24133251037597" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1818">-100</tspan>
                                                        </text><text id="SvgjsText1819"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="174.92666563796996" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1820">-200</tspan>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1754" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 105px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(252, 19, 61);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(85, 206, 99);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                            <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                                <div class="apexcharts-menu-icon" title="Menu"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                                    </svg></div>
                                                <div class="apexcharts-menu">
                                                    <div class="apexcharts-menu-item exportSVG" title="Download SVG">
                                                        Download SVG</div>
                                                    <div class="apexcharts-menu-item exportPNG" title="Download PNG">
                                                        Download PNG</div>
                                                    <div class="apexcharts-menu-item exportCSV" title="Download CSV">
                                                        Download CSV</div>
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

            <div class="col-xxl-4 col-lg-12 col-md-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="statistic-header">
                            <h4>Important</h4>
                            <div class="important-notification">
                                <a href="activities.html">
                                    View All <i class="fe fe-arrow-right-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="notification-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li>
                                    <a href="#" class="active" data-bs-toggle="tab" data-bs-target="#notification_tab"
                                        aria-selected="true" role="tab">
                                        <i class="la la-bell"></i> Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="tab" data-bs-target="#schedule_tab"
                                        aria-selected="false" tabindex="-1" role="tab">
                                        <i class="la la-list-alt"></i> Schedules
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="notification_tab" role="tabpanel">
                                    <div class="employee-noti-content">
                                        <ul class="employee-notification-list">
                                            <li class="employee-notification-grid">
                                                <div class="employee-notification-icon">
                                                    <a href="activities.html">
                                                        <span class="badge-soft-danger rounded-circle">HR</span>
                                                    </a>
                                                </div>
                                                <div class="employee-notification-content">
                                                    <h6>
                                                        <a href="activities.html">
                                                            Your leave request has been
                                                        </a>
                                                    </h6>
                                                    <ul class="nav">
                                                        <li>02:10 PM</li>
                                                        <li>21 Apr 2024</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="employee-notification-grid">
                                                <div class="employee-notification-icon">
                                                    <a href="activities.html">
                                                        <span class="badge-soft-info rounded-circle">ER</span>
                                                    </a>
                                                </div>
                                                <div class="employee-notification-content">
                                                    <h6>
                                                        <a href="activities.html">
                                                            You’re enrolled in upcom....
                                                        </a>
                                                    </h6>
                                                    <ul class="nav">
                                                        <li>12:40 PM</li>
                                                        <li>21 Apr 2024</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="employee-notification-grid">
                                                <div class="employee-notification-icon">
                                                    <a href="activities.html">
                                                        <span class="badge-soft-warning rounded-circle">SM</span>
                                                    </a>
                                                </div>
                                                <div class="employee-notification-content">
                                                    <h6>
                                                        <a href="activities.html">
                                                            Your annual compliance trai
                                                        </a>
                                                    </h6>
                                                    <ul class="nav">
                                                        <li>11:00 AM</li>
                                                        <li>21 Apr 2024</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="employee-notification-grid">
                                                <div class="employee-notification-icon">
                                                    <a href="activities.html">
                                                        <span class="rounded-circle">
                                                            <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/avatar/avatar-1.jpg"
                                                                class="img-fluid rounded-circle" alt="User">
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="employee-notification-content">
                                                    <h6>
                                                        <a href="activities.html">
                                                            Jessica has requested feedba
                                                        </a>
                                                    </h6>
                                                    <ul class="nav">
                                                        <li>10:30 AM</li>
                                                        <li>21 Apr 2024</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="employee-notification-grid">
                                                <div class="employee-notification-icon">
                                                    <a href="activities.html">
                                                        <span class="badge-soft-warning rounded-circle">DT</span>
                                                    </a>
                                                </div>
                                                <div class="employee-notification-content">
                                                    <h6>
                                                        <a href="activities.html">
                                                            Gentle remainder about train
                                                        </a>
                                                    </h6>
                                                    <ul class="nav">
                                                        <li>09:00 AM</li>
                                                        <li>21 Apr 2024</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="employee-notification-grid">
                                                <div class="employee-notification-icon">
                                                    <a href="activities.html">
                                                        <span class="badge-soft-danger rounded-circle">AU</span>
                                                    </a>
                                                </div>
                                                <div class="employee-notification-content">
                                                    <h6>
                                                        <a href="activities.html">
                                                            Our HR system will be down
                                                        </a>
                                                    </h6>
                                                    <ul class="nav">
                                                        <li>11:50 AM</li>
                                                        <li>21 Apr 2024</li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="schedule_tab" role="tabpanel">
                                    <div class="employee-noti-content">
                                        <ul class="employee-notification-list">
                                            <li class="employee-notification-grid">
                                                <div class="employee-notification-icon">
                                                    <a href="activities.html">
                                                        <span class="rounded-circle">
                                                            <img src="../assets/img/avatar/avatar-2.jpg"
                                                                class="img-fluid rounded-circle" alt="User">
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="employee-notification-content">
                                                    <h6>
                                                        <a href="activities.html">
                                                            John has requested feedba
                                                        </a>
                                                    </h6>
                                                    <ul class="nav">
                                                        <li>10:30 AM</li>
                                                        <li>21 Apr 2024</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="employee-notification-grid">
                                                <div class="employee-notification-icon">
                                                    <a href="activities.html">
                                                        <span class="badge-soft-danger rounded-circle">HR</span>
                                                    </a>
                                                </div>
                                                <div class="employee-notification-content">
                                                    <h6>
                                                        <a href="activities.html">
                                                            Your leave request has been
                                                        </a>
                                                    </h6>
                                                    <ul class="nav">
                                                        <li>02:10 PM</li>
                                                        <li>21 Apr 2024</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="employee-notification-grid">
                                                <div class="employee-notification-icon">
                                                    <a href="activities.html">
                                                        <span class="badge-soft-info rounded-circle">ER</span>
                                                    </a>
                                                </div>
                                                <div class="employee-notification-content">
                                                    <h6>
                                                        <a href="activities.html">
                                                            You’re enrolled in upcom....
                                                        </a>
                                                    </h6>
                                                    <ul class="nav">
                                                        <li>12:40 PM</li>
                                                        <li>21 Apr 2024</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="employee-notification-grid">
                                                <div class="employee-notification-icon">
                                                    <a href="activities.html">
                                                        <span class="badge-soft-warning rounded-circle">SM</span>
                                                    </a>
                                                </div>
                                                <div class="employee-notification-content">
                                                    <h6>
                                                        <a href="activities.html">
                                                            Your annual compliance trai
                                                        </a>
                                                    </h6>
                                                    <ul class="nav">
                                                        <li>11:00 AM</li>
                                                        <li>21 Apr 2024</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="employee-notification-grid">
                                                <div class="employee-notification-icon">
                                                    <a href="activities.html">
                                                        <span class="badge-soft-warning rounded-circle">DT</span>
                                                    </a>
                                                </div>
                                                <div class="employee-notification-content">
                                                    <h6>
                                                        <a href="activities.html">
                                                            Gentle remainder about train
                                                        </a>
                                                    </h6>
                                                    <ul class="nav">
                                                        <li>09:00 AM</li>
                                                        <li>21 Apr 2024</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="employee-notification-grid">
                                                <div class="employee-notification-icon">
                                                    <a href="activities.html">
                                                        <span class="badge-soft-danger rounded-circle">AU</span>
                                                    </a>
                                                </div>
                                                <div class="employee-notification-content">
                                                    <h6>
                                                        <a href="activities.html">
                                                            Our HR system will be down
                                                        </a>
                                                    </h6>
                                                    <ul class="nav">
                                                        <li>11:50 AM</li>
                                                        <li>21 Apr 2024</li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-6 col-md-12 d-flex">
                    <div class="card employee-month-card flex-fill">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-md-12">
                                    <div class="employee-month-details">
                                        <h4>Employee of the month</h4>
                                        <p>We are really proud of the difference you have made which gives everybody the
                                            reason to applaud &amp; appreciate</p>
                                    </div>
                                    <div class="employee-month-content">
                                        <h6>Congrats, Hanna</h6>
                                        <p>UI/UX Team Lead</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <div class="employee-month-img">
                                        <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/employee-img.png"
                                            class="img-fluid" alt="User">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6 col-md-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <div class="statistic-header">
                                        <h4>Company Policy</h4>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-end">
                                    <div class="owl-nav company-nav nav-control">
                                        <button type="button" role="presentation" class="owl-prev">
                                            <span class="material-icons">
                                                chevron_left
                                            </span>
                                        </button>
                                        <button type="button" role="presentation" class="owl-next">
                                            <span class="material-icons">
                                                navigate_next
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="owl-item active" style="width: 201.333px; margin-right: 20px;">
                                        <div class="company-grid company-soft-tertiary">
                                            <div class="company-top">
                                                <div class="company-icon">
                                                    <span class="company-icon-tertiary rounded-circle">HR</span>
                                                </div>
                                                <div class="company-link">
                                                    <a href="companies.html">HR Policy</a>
                                                </div>
                                            </div>
                                            <div class="company-bottom d-flex">
                                                <ul>
                                                    <li>Policy Name : Work policy</li>
                                                    <li>Updated on : Today</li>
                                                </ul>
                                                <div class="company-bottom-links">
                                                    <a href="#"><i class="la la-download"></i></a>
                                                    <a href="#"><i class="la la-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="owl-item active" style="width: 201.333px; margin-right: 20px;">
                                        <div class="company-grid company-soft-success">
                                            <div class="company-top">
                                                <div class="company-icon">
                                                    <span class="company-icon-success rounded-circle">EP</span>
                                                </div>
                                                <div class="company-link">
                                                    <a href="companies.html">Employer Policy</a>
                                                </div>
                                            </div>
                                            <div class="company-bottom d-flex">
                                                <ul>
                                                    <li>Policy Name : Parking</li>
                                                    <li>Updated on : 25 Jan 2024</li>
                                                </ul>
                                                <div class="company-bottom-links">
                                                    <a href="#"><i class="la la-download"></i></a>
                                                    <a href="#"><i class="la la-eye"></i></a>
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

    </app-layout>
</template>

<script setup>


import '@material/mwc-select'
import '@material/mwc-list/mwc-list-item'
</script>

<style scoped>
@import '../../css/dashboard.css';
</style>