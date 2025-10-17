<!-- ================= NAVBAR ================= -->
<nav class="text-black h-20 flex items-center justify-between px-2 md:px-5 shadow-md fied z-40"
    style="background-color: var(--background-color);">
    <!-- Left section -->
    <div class="flex items-center space-x-4">
        <!-- Menu burger mobile -->
        <button id="mobile-toggle-navbar" class="md:hidden text-white p-2 rounded bg-[#F59E0B] focus:outline-none">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- Breadcrumb -->
        <div class="flex flex-col">
            <span id="breadcrumb" class="text-lg font-medium md:text-base">Dashboard</span>
            <span class="text-[10px]">Hello Alice welcome Back!</span>
        </div>
    </div>

    <!-- SEARCH BAR -->
    <div class="flex-1 mx-2 md:mx-4 items-center justify-center relative">
        <!-- Full Search Bar (desktop) -->
        <div class="hidden md:flex w-full justify-center">
            <div class="relative w-1/2">
                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 transform -translate-y-1/2 text-[#6C6C6C]"></i>
                <input type="text" placeholder="Search anything..."
                    class="w-full pl-10 pr-4 py-2 rounded text-[#6C6C6C] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#F59E0B]"
                    style="background-color: var(--search);">
            </div>
        </div>

        <!-- Search Icon (mobile) -->
        <div class="relative md:hidden">
            <button class="p-2 rounded hover:bg-[#F5E1C0] transition-colors duration-300 relative left-10 focus:outline-none" id="mobile-search-btn">
                <i class="fa-solid fa-magnifying-glass text-lg text-gray-800"></i>
            </button>

            <!-- Search Popup (appears when icon is clicked) -->
            <div id="mobile-search-popup"
                class="absolute right-0 mt-3 w-60 bg-white border border-gray-200 rounded-xl shadow-xl overflow-hidden transform scale-95 opacity-0 pointer-events-none transition-all duration-300 ease-out origin-top-right">
                <div class="px-3 py-2">
                    <input type="text" id="mobile-search-input" placeholder="Search anything..."
                        class="w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#F59E0B]"
                        style="background-color: var(--search); color: #6C6C6C;">
                </div>
            </div>
        </div>
    </div>

    <!-- Notifications & user -->
    <div class="flex items-center space-x-4">
        <!-- Notification Dropdown -->
        <div class="relative">
            <button id="notif-btn"
                class="relative p-2 rounded hover:bg-[#F5E1C0] transition-colors duration-300 focus:outline-none">
                <i class="fa-solid fa-bell text-gray-800 text-lg"></i>
                <span class="absolute top-1 right-1 bg-red-500 w-2.5 h-2.5 rounded-full border border-white"></span>
            </button>

            <div id="notif-dropdown"
                class="absolute right-0 mt-5 w-62 bg-white border border-gray-200 rounded-xl shadow-xl overflow-hidden transform scale-95 opacity-0 pointer-events-none transition-all duration-300 ease-out origin-top-right">
                <div class="px-4 py-2 border-b border-gray-100 bg-[#F5E1C0] text-gray-800 font-semibold">
                    Notifications
                </div>
                <div class="max-h-54 overflow-y-auto">
                    <a href="#" class="flex items-start px-4 py-3 hover:bg-gray-50 transition">
                        <div class="flex-shrink-0 mt-1">
                            <i class="fa-solid fa-message text-[#F59E0B]"></i>
                        </div>
                        <div class="ml-3 text-sm text-gray-700">
                            <p><span class="font-semibold">New Message:</span> You received a new message from the
                                kitchen.</p>
                            <p class="text-xs text-gray-400 mt-1">2 min ago</p>
                        </div>
                    </a>
                    <a href="#" class="flex items-start px-4 py-3 hover:bg-gray-50 transition">
                        <div class="flex-shrink-0 mt-1">
                            <i class="fa-solid fa-calendar-check text-[#F59E0B]"></i>
                        </div>
                        <div class="ml-3 text-sm text-gray-700">
                            <p><span class="font-semibold">Reservation update:</span> A new table booking was made.</p>
                            <p class="text-xs text-gray-400 mt-1">10 min ago</p>
                        </div>
                    </a>
                    <a href="#" class="flex items-start px-4 py-3 hover:bg-gray-50 transition">
                        <div class="flex-shrink-0 mt-1">
                            <i class="fa-solid fa-box text-[#F59E0B]"></i>
                        </div>
                        <div class="ml-3 text-sm text-gray-700">
                            <p><span class="font-semibold">Order Ready:</span> Order #1045 is ready for delivery.</p>
                            <p class="text-xs text-gray-400 mt-1">30 min ago</p>
                        </div>
                    </a>
                </div>
                <div class="text-center py-2 border-t border-gray-100 bg-gray-50">
                    <a href="#" class="text-[#F59E0B] text-sm font-semibold hover:underline">See all notifications</a>
                </div>
            </div>
        </div>

        <!-- User dropdown -->
        <div class="relative">
            <button id="user-btn"
                class="flex items-center space-x-2 p-2 rounded-lg hover:bg-[#F5E1C0] transition-colors duration-300 focus:outline-none">
                <div class="flex flex-col text-left">
                    <p class="text-sm font-semibold text-gray-900">Shela Danielle</p>
                    <span class="flex items-center text-gray-700 text-xs">
                        <p class="mr-1">Admin</p>
                        <svg class="w-4 h-4 transform transition-transform duration-300" id="dropdown-arrow" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </div>
                <img src="{{ asset('Images/Chef_cook.jpg') }}" alt="profile"
                    class="w-10 h-10 rounded-full object-cover">
            </button>

            <div id="user-dropdown"
                class="absolute right-0 mt-3 w-48 bg-white border border-gray-200 rounded-xl shadow-xl overflow-hidden transform scale-95 opacity-0 pointer-events-none transition-all duration-300 ease-out origin-top-right">
                <a href="#"
                    class="flex items-center space-x-3 px-4 py-2 text-gray-800 hover:bg-[#F5E1C0] transition-colors duration-200">
                    <i class="fa-solid fa-user text-gray-600 w-4 text-center"></i>
                    <span>Profile</span>
                </a>
                <a href="#"
                    class="flex items-center space-x-3 px-4 py-2 text-gray-800 hover:bg-[#F5E1C0] transition-colors duration-200">
                    <i class="fa-solid fa-gear text-gray-600 w-4 text-center"></i>
                    <span>Settings</span>
                </a>
                <a href="#"
                    class="flex items-center space-x-3 px-4 py-2 text-gray-800 hover:text-white hover:bg-red-500 transition-colors duration-200">
                    <i class="fa-solid fa-right-from-bracket text-gray-600  w-4 text-center"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- === SCRIPTS === -->
<script>
    const notifBtn = document.getElementById('notif-btn');
    const notifDropdown = document.getElementById('notif-dropdown');
    const userBtn = document.getElementById('user-btn');
    const userDropdown = document.getElementById('user-dropdown');
    const dropdownArrow = document.getElementById('dropdown-arrow');
    const mobileToggleNavbar = document.getElementById('mobile-toggle-navbar');
    const sidebar = document.getElementById('sidebar');
    const mobileSearchBtn = document.getElementById('mobile-search-btn');
    const desktopSearch = document.querySelector('.md\\:flex');

    // Notification dropdown
    notifBtn.addEventListener('click', e => {
        e.stopPropagation();
        notifDropdown.classList.toggle('opacity-100');
        notifDropdown.classList.toggle('scale-100');
        notifDropdown.classList.toggle('pointer-events-none');
    });

    // User dropdown
    userBtn.addEventListener('click', e => {
        e.stopPropagation();
        userDropdown.classList.toggle('opacity-100');
        userDropdown.classList.toggle('scale-100');
        userDropdown.classList.toggle('pointer-events-none');
        dropdownArrow.classList.toggle('rotate-180');
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', e => {
        if (!notifBtn.contains(e.target)) {
            notifDropdown.classList.remove('opacity-100', 'scale-100');
            notifDropdown.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
        }
        if (!userBtn.contains(e.target)) {
            userDropdown.classList.remove('opacity-100', 'scale-100');
            userDropdown.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
            dropdownArrow.classList.remove('rotate-180');
        }
    });

    // Sidebar toggle (mobile)
    mobileToggleNavbar.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });

    // === MOBILE SEARCH POPUP ===
    const mobileSearchPopup = document.getElementById('mobile-search-popup');
    const mobileSearchInput = document.getElementById('mobile-search-input');

    mobileSearchBtn.addEventListener('click', e => {
        e.stopPropagation();
        mobileSearchPopup.classList.toggle('opacity-100');
        mobileSearchPopup.classList.toggle('scale-100');
        mobileSearchPopup.classList.toggle('pointer-events-none');

        if (mobileSearchPopup.classList.contains('opacity-100')) {
            setTimeout(() => mobileSearchInput.focus(), 150);
        }
    });

    // Close search popup when clicking outside
    document.addEventListener('click', e => {
        if (!mobileSearchBtn.contains(e.target) && !mobileSearchPopup.contains(e.target)) {
            mobileSearchPopup.classList.remove('opacity-100', 'scale-100');
            mobileSearchPopup.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
        }
    });
</script>


