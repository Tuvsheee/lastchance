<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <link href="/css/dashboard.css " rel="stylesheet">

    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    

    <title>Dashboard</title>
</head>
<body class="text-gray-800 font-inter">
    <!-- start: Sidebar -->
    <div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform" class="lside">
        <a href="{{route('uhome')}}" class="flex items-center pb-4 border-b border-b-gray-800">
        <img src="/css/images/backround.jpg" class="w-8 h-8 rounded object-cover">
            <span class="text-lg font-bold text-white ml-3">Admin Panel</span>
        </a>
        <ul class="mt-4">
            <li class="mb-1 group active">
                <a href="{{route('dash')}}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{route('news')}}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="ri-instance-line mr-3 text-lg"></i>
                    <span class="text-sm">Register</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Active order</a>
                    </li> 
                    <li class="mb-4">
                        <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Completed order</a>
                    </li> 
                    <li class="mb-4">
                        <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Canceled order</a>
                    </li> 
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="{{route('pay_on')}}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="ri-instance-line mr-3 text-lg"></i>
                    <span class="text-sm">Payment</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Active order</a>
                    </li> 
                    <li class="mb-4">
                        <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Completed order</a>
                    </li> 
                    <li class="mb-4">
                        <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Canceled order</a>
                    </li> 
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="{{route('room')}}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="ri-instance-line mr-3 text-lg"></i>
                    <span class="text-sm">Rooms</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Active order</a>
                    </li> 
                    <li class="mb-4">
                        <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Completed order</a>
                    </li> 
                    <li class="mb-4">
                        <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Canceled order</a>
                    </li> 
                </ul>
            </li>
        </ul>
    </div>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
    <!-- end: Sidebar -->


<!-- start: Main -->
<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        <div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
            <button type="button" class="text-lg text-gray-600 sidebar-toggle">
                <i class="ri-menu-line"></i>
            </button>
            <ul class="flex items-center text-sm ml-4">
                <li class="mr-2">
                    <a href="#" class="text-gray-400 hover:text-gray-600 font-medium">Dashboard</a>
                </li>
                <li class="text-gray-600 mr-2 font-medium">/</li>
                <li class="text-gray-600 mr-2 font-medium">Analytics</li>
            </ul>
            <ul class="ml-auto flex items-center">
                <li class="dropdown ml-3">
                    <button type="button" class="dropdown-toggle flex items-center">
                        <img src="/css/images/backround.jpg"  alt="" class="w-8 h-8 rounded block object-cover align-middle">
                    </button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                <div class="card card-bordered card-full"><div class="card-inner"><div class="card-title-group align-start mb-0"><div class="card-title"><h6 class="title">Total Booking</h6></div><div class="card-tools"><em  data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Total Booking" data-bs-original-title="Total Booking"></em></div></div><div class="card-amount"><span class="amount"> 11,230 </span><span class="change down text-danger"></em>1.93%</span></div><div class="invest-data"><div class="invest-data-amount g-2"><div class="invest-data-history"><div class="title">This Month</div><div class="amount">1913</div></div><div class="invest-data-history"><div class="title">This Week</div><div class="amount">1125</div></div></div><div class="invest-data-ck"><canvas class="iv-data-chart" id="totalBooking" width="212" height="48" style="display: block; box-sizing: border-box; height: 48px; width: 212px;"></canvas></div></div></div></div>
                </div>
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                <div class="card card-bordered card-full"><div class="card-inner"><div class="card-title-group align-start mb-0"><div class="card-title"><h6 class="title">Rooms Available</h6></div><div class="card-tools"><em data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Total Room" data-bs-original-title="Total Room"></em></div></div><div class="card-amount"><span class="amount"> 312 </span></div><div class="invest-data"><div class="invest-data-amount g-2"><div class="invest-data-history"><div class="title">Booked (M)</div><div class="amount">913</div></div><div class="invest-data-history"><div class="title">Booked (W)</div><div class="amount">125</div></div></div><div class="invest-data-ck"><canvas class="iv-data-chart" id="totalRoom" width="210" height="48" style="display: block; box-sizing: border-box; height: 48px; width: 210px;"></canvas></div></div></div></div>
                </div>
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                <div class="card card-bordered  card-full"><div class="card-inner"><div class="card-title-group align-start mb-0"><div class="card-title"><h6 class="title">Expenses</h6></div><div class="card-tools"><em data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Total Expenses" data-bs-original-title="Total Expenses"></em></div></div><div class="card-amount"><span class="amount"> 79,358.50 <span class="currency currency-usd">USD</span></span></div><div class="invest-data"><div class="invest-data-amount g-2"><div class="invest-data-history"><div class="title">This Month</div><div class="amount">3,540.59 <span class="currency currency-usd">USD</span></div></div><div class="invest-data-history"><div class="title">This Week</div><div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div></div></div><div class="invest-data-ck"><canvas class="iv-data-chart" id="totalExpenses" width="194" height="48" style="display: block; box-sizing: border-box; height: 48px; width: 194px;"></canvas></div></div></div></div>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
            <div class="card card-bordered h-100"><div class="card-inner"><div class="card-title-group align-start pb-3 g-2"><div class="card-title"><h6 class="title">Sales Revenue</h6><p>In last 30 days revenue from rent.</p></div><div class="card-tools"><em data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Revenue of this month" data-bs-original-title="Revenue of this month"></em></div></div><div class="analytic-au"><div class="analytic-data-group analytic-au-group g-3"><div class="analytic-data analytic-au-data"><div class="title">Monthly</div><div class="amount">9.28K</div><div class="change up"></em>4.63%</div></div><div class="analytic-data analytic-au-data"><div class="title">Weekly</div><div class="amount">2.69K</div><div class="change down"></em>1.92%</div></div><div class="analytic-data analytic-au-data"><div class="title">Daily (Avg)</div><div class="amount">0.94K</div><div class="change up"></em>3.45%</div></div></div><div class="analytic-au-ck"><canvas class="analytics-au-chart" id="analyticAuData" width="588" height="170" style="display: block; box-sizing: border-box; height: 170px; width: 588px;"></canvas></div><div class="chart-label-group"><div class="chart-label">01 Jan, 2020</div><div class="chart-label">30 Jan, 2020</div></div></div></div></div>
                <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
                    <div class="card-inner"><div class="card-title-group"><div class="card-title"><h6 class="title">Room Booking Chart</h6></div><div class="card-tools"><div class="drodown"><a href="#"  data-bs-toggle="dropdown">30 Days</a><div><ul class="link-list-opt no-bdr"><li><a href="#"><span>7 Days</span></a></li><li><a href="#"><span>15 Days</span></a></li><li><a href="#"><span>30 Days</span></a></li></ul></div></div></div></div><div class="traffic-channel"><div class="traffic-channel-doughnut-ck"><canvas class="analytics-doughnut" id="BookingData" width="588" height="160" style="display: block; box-sizing: border-box; height: 160px; width: 588px;"></canvas></div><div class="traffic-channel-group g-2"><div class="traffic-channel-data"><div class="title"><span class="dot dot-lg sq" data-bg="#9cabff" style="background: rgb(156, 171, 255);"></span><span>Single</span></div><div class="amount">1913 <small>58.63%</small></div></div><div class="traffic-channel-data"><div class="title"><span class="dot dot-lg sq" data-bg="#1ee0ac" style="background: rgb(30, 224, 172);"></span><span>Double</span></div><div class="amount">859 <small>23.94%</small></div></div><div class="traffic-channel-data"><div class="title"><span class="dot dot-lg sq" data-bg="#f9db7b" style="background: rgb(249, 219, 123);"></span><span>Delux</span></div><div class="amount">482 <small>12.94%</small></div></div><div class="traffic-channel-data"><div class="title"><span class="dot dot-lg sq" data-bg="#ffa353" style="background: rgb(255, 163, 83);"></span><span>Suit</span></div><div class="amount">138 <small>4.49%</small></div></div></div></div></div>
                </div>
            </div>
            
        </div>
    </main>



    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="dist/js/script.js"></script>
</body>
</html>

