{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/brands.min.css" integrity="sha512-WxpJXPm/Is1a/dzEdhdaoajpgizHQimaLGL/QqUIAjIihlQqlPQb1V9vkGs9+VzXD7rgI6O+UsSKl4u5K36Ydw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}


<!-- ================= SIDEBAR ================= -->

<aside id="sidebar"
    class="fixed left-0 top-0 z-50 h-full w-64 md:relative transform -translate-x-full md:translate-x-0 transition-all duration-300 ease-out md:duration-200 shadow-md flex flex-col bg-[var(--background-color)]"
    aria-hidden="true">

    <!-- LOGO ROW WITH PIN CIRCLE (CLOSE BUTTON ON MOBILE) -->
    <div id="sidebar-header" class="flex items-center py-10 pl-3 justify-between h-16 border-b relative">
        <div class="flex items-center relative">
            <!-- Logo -->
            <img src="{{ asset('Images/Logo 4.png') }}" alt="Logo Saveurs d'Ebene"
                class="logo w-20 h-20 transition-transform duration-300 block md:block">

            <!-- Name + Pin Circle -->
            <div class="flex items-center ml-4 relative">
                <p id="platform-name"
                    class="text-black font-bold text-[15px] relative -left-5 text-nowrap transition-opacity duration-200 whitespace-nowrap">
                    SAVEURS D'EBENE
                </p>

                <!-- PIN CIRCLE / MOBILE CLOSE BUTTON -->
                <button id="pin-toggle-btn"
                    class="ml-2 w-5 h-5 rounded-full bg-[#F5E1C0] border border-[#F59E0B] flex items-center justify-center transition-all duration-150 ease-out hover:bg-[#F59E0B] hover:border-[#F59E0B] focus:outline-none focus:ring-2 focus:ring-[#F59E0B] relative"
                    aria-label="Toggle sidebar pin" aria-pressed="false">
                    <!-- Desktop: Pin dots -->
                    <div id="pin-dot-solid"
                        class="w-2.5 h-2.5 bg-[#F59E0B] rounded-full transition-opacity duration-150 opacity-0 absolute">
                    </div>
                    <div id="pin-dot-hollow"
                        class="w-2 h-2 border-2 border-[#F59E0B] rounded-full transition-opacity duration-150 opacity-1 absolute bg-transparent">
                    </div>
                    <!-- Mobile: Close icon (X) - HIDDEN ON DESKTOP -->
                    <i id="mobile-close-icon" class="fa-solid fa-times text-[#F59E0B] text-sm md:hidden absolute"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- MENU ITEMS -->
    <div class="flex-1 overflow-y-auto sidebar-scroll mt-4 px-[0.18rem] custom-scrollbar">
        <nav role="navigation" aria-label="Main navigation">
            <!-- Dashboard (active) -->
            <a href="#" class="flex items-center gap-3 px-5 py-[0.5rem] m-4 rounded-xl bg-[#F59E0B] text-white hover:bg-[#d68f00] transition-colors duration-200 group menu-item close-on-mobile">
                <i class="fa-solid fa-grip w-5 h-5 text-center flex-shrink-0"></i>
                <span class="menu-label transition-opacity duration-200">Dashboard</span>
            </a>

            <!-- Orders -->
            <a href="#" class="flex items-center gap-3 px-5 py-[0.5rem] m-4 rounded-xl bg-[#F5E1C0] hover:bg-[#F59E0B] hover:text-white transition-colors duration-200 menu-item close-on-mobile">
                <i class="fa-solid fa-arrow-up-wide-short w-5 h-5 text-center flex-shrink-0"></i>
                <span class="menu-label transition-opacity duration-200">Orders</span>
            </a>

            <!-- Reservation -->
            <a href="#" class="flex items-center gap-3 px-5 py-[0.5rem] m-4 rounded-xl bg-[#F5E1C0] hover:bg-[#F59E0B] hover:text-white transition-colors duration-200 menu-item close-on-mobile">
                <i class="fa-solid fa-calendar-check w-5 h-5 text-center flex-shrink-0"></i>
                <span class="menu-label transition-opacity duration-200">Reservation</span>
            </a>

            <!-- Messages -->
            <a href="#" class="flex items-center gap-3 px-5 py-[0.5rem] m-4 rounded-xl bg-[#F5E1C0] hover:bg-[#F59E0B] hover:text-white transition-colors duration-200 menu-item close-on-mobile">
                <i class="fa-solid fa-message w-5 h-5 text-center flex-shrink-0"></i>
                <span class="menu-label transition-opacity duration-200">Messages</span>
            </a>

            <!-- INVENTORY BUTTON -->
            <div class="m-4">
                <button id="inventory-btn"
                    class="w-full left-[0rem] px-[1.18rem] py-[0.3rem] rounded-xl bg-[#F5E1C0] hover:bg-[#F59E0B] hover:text-white transition-colors duration-200 flex items-center justify-between menu-item inventory-toggle"
                    aria-expanded="false" aria-haspopup="true">
                    <div class="flex items-center justify-center gap-3 p-1">
                        <i id="inventory-icon" class="fa-solid fa-cubes w-5 h-5 left-[0.18rem] text-center"></i>
                        <span id="inventory-text"
                            class="menu-label transition-opacity duration-200 whitespace-nowrap">Inventory</span>
                    </div>
                    <svg id="inventory-arrow"
                        class="w-4 h-4 transform transition-transform duration-200 ml-2 flex-shrink-0" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="inventory-dropdown"
                    class="mt-2 space-y-2 px-2 overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out ml-4"
                    role="menu" style="transition-property: max-height, opacity;">
                    <a href="#" class="py-2 px-3 rounded-xl hover:text-white hover:bg-[#F59E0B] bg-[#F5E1C0] transition-colors duration-200 flex items-center gap-2 min-w-0 dropdown-item close-on-mobile"
                        role="menuitem">
                        <i class="fa-solid fa-kaaba w-4 h-4 flex-shrink-0"></i>
                        <span class="menu-label">Inventory</span>
                    </a>
                    <a href="#" class="py-2 px-3 rounded-xl hover:text-white hover:bg-[#F59E0B] bg-[#F5E1C0] transition-colors duration-200 flex items-center gap-2 min-w-0 dropdown-item close-on-mobile"
                        role="menuitem">
                        <i class="fa-solid fa-money-bill w-4 h-4 flex-shrink-0"></i>
                        <span class="menu-label whitespace-nowrap">Purchase Order</span>
                    </a>
                </div>
            </div>

            <!-- Calendar -->
            <a href="#" class="flex items-center gap-3 px-5 py-[0.5rem] m-4 rounded-xl bg-[#F5E1C0] hover:bg-[#F59E0B] hover:text-white transition-colors duration-200 menu-item close-on-mobile">
                <i class="fa-solid fa-calendar-days w-5 h-5 text-center flex-shrink-0"></i>
                <span class="menu-label transition-opacity duration-200">Calendar</span>
            </a>

            <!-- Menu -->
            <a href="#" class="flex items-center px-5 py-[0.5rem] m-4 rounded-xl bg-[#F5E1C0] hover:bg-[#F59E0B] hover:text-white transition-colors duration-200 menu-item close-on-mobile">
                <i class="fa-solid fa-table-list w-5 h-5 text-center flex-shrink-0"></i>
                <span class="menu-label transition-opacity duration-200">Menu</span>
            </a>

            <!-- Reviews -->
            <a href="#" class="flex items-center gap-3 px-5 py-[0.5rem] m-4 rounded-xl bg-[#F5E1C0] hover:bg-[#F59E0B] hover:text-white transition-colors duration-200 menu-item close-on-mobile">
                <i class="fa-solid fa-star w-5 h-5 text-center flex-shrink-0"></i>
                <span class="menu-label transition-opacity duration-200">Reviews</span>
            </a>

            <!-- BOTTOM SECTION -->
            <div id="bottom-section" class="flex-1 flex flex-col justify-end">
                <!-- UPGRADE SECTION (DESKTOP ONLY, HIDDEN WHEN COLLAPSED) -->
                <div id="upgrade-section" class="border-t border-amber-200 transition-all duration-200 md:block hidden">
                    <img src="{{ asset('Images/Image 9.jpg') }}" alt="Upgrade" id="upgrade-image"
                        class="w-24 h-24 rounded-xl relative top-[3rem] z-10 mx-auto transition-opacity duration-200 block">
                    <div id="upgrade-card"
                        class="bg-gradient-to-br from-amber-100 to-orange-100 rounded-2xl p-4 pt-10 text-center overflow-hidden relative transition-all duration-200">
                        <div class="absolute -top-4 -right-4 w-24 h-24 bg-orange-200 rounded-full opacity-50"></div>
                        <h3 class="text-xs font-bold text-amber-900 mt-8 mb-1 leading-tight">Streamline restaurant
                            management with realtime insights.</h3>
                        <button
                            class="mt-3 w-fit bg-amber-900 text-amber-50 px-4 py-2 rounded-lg font-medium text-xs hover:bg-amber-800 transition-colors duration-200">Upgrade
                            Now</button>
                    </div>
                </div>

                <!-- MOBILE LOGOUT BUTTON -->
                <div id="mobile-logout-section" class="border-t border-gray-200 py-4 px-4 md:hidden">
                    <a href="#" class="flex items-center justify-center gap-2 bg-red-400 text-white px-6 py-3 rounded-xl hover:bg-red-500 transition-colors duration-200 close-on-mobile">
                        <i class="fa-solid fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</aside>

<script>
    (function() {
        'use strict';

        const elements = {
            sidebar: document.getElementById('sidebar'),
            pinToggleBtn: document.getElementById('pin-toggle-btn'),
            pinDotSolid: document.getElementById('pin-dot-solid'),
            pinDotHollow: document.getElementById('pin-dot-hollow'),
            mobileCloseIcon: document.getElementById('mobile-close-icon'),
            platformName: document.getElementById('platform-name'),
            inventoryBtn: document.getElementById('inventory-btn'),
            inventoryIcon: document.getElementById('inventory-icon'),
            inventoryDropdown: document.getElementById('inventory-dropdown'),
            inventoryArrow: document.getElementById('inventory-arrow'),
            upgradeSection: document.getElementById('upgrade-section'),
            mobileLogoutSection: document.getElementById('mobile-logout-section')
        };

        let isPinned = localStorage.getItem('sidebar-pinned') === 'true';

        function isMobile() {
            return window.innerWidth < 768;
        }

        function hidePinCompletely() {
            elements.pinToggleBtn.style.display = 'none';
            elements.pinToggleBtn.style.opacity = '0';
            elements.pinToggleBtn.style.visibility = 'hidden';
            elements.pinDotSolid.style.opacity = '0';
            elements.pinDotHollow.style.opacity = '0';
            elements.mobileCloseIcon.style.opacity = '0';
        }

        function showPinForMobile() {
            elements.pinToggleBtn.style.display = 'flex';
            elements.pinToggleBtn.style.opacity = '1';
            elements.pinToggleBtn.style.visibility = 'visible';
            elements.pinDotSolid.style.opacity = '0';
            elements.pinDotHollow.style.opacity = '0';
            elements.mobileCloseIcon.style.opacity = '1';
            elements.pinToggleBtn.classList.remove('pointer-events-none');
        }

        function updateCollapsedState(collapsed) {
            if (isMobile()) {
                // MOBILE: Always fully expanded WHEN OPEN, no collapsed state
                if (!elements.sidebar.classList.contains('-translate-x-full')) {
                    elements.sidebar.classList.remove('is-collapsed');
                    elements.platformName.style.opacity = '1';
                    elements.upgradeSection.style.display = 'none';
                    elements.mobileLogoutSection.style.display = 'block';
                    elements.inventoryDropdown.style.display = 'block';
                    elements.inventoryArrow.style.display = 'block';
                    showPinForMobile();
                } else {
                    hidePinCompletely();
                }
                return;
            }

            // DESKTOP LOGIC
            if (collapsed) {
                elements.sidebar.classList.add('is-collapsed');
                elements.platformName.style.opacity = '0';
                elements.upgradeSection.style.display = 'none';
                elements.mobileLogoutSection.style.display = 'none';
                elements.inventoryDropdown.style.display = 'none';

                if (elements.inventoryIcon) {
                    elements.inventoryIcon.style.opacity = '1';
                    elements.inventoryIcon.style.display = 'flex';
                    elements.inventoryIcon.style.visibility = 'visible';
                }

                hidePinCompletely();
                
                if (elements.inventoryArrow) {
                    elements.inventoryArrow.style.display = 'none';
                }
            } else {
                elements.sidebar.classList.remove('is-collapsed');
                elements.platformName.style.opacity = '1';
                elements.upgradeSection.style.display = 'block';
                elements.mobileLogoutSection.style.display = 'none';
                elements.inventoryDropdown.style.display = 'block';
                elements.inventoryArrow.style.display = 'block';

                if (elements.inventoryIcon) {
                    elements.inventoryIcon.style.opacity = '';
                    elements.inventoryIcon.style.display = '';
                    elements.inventoryIcon.style.visibility = '';
                }

                elements.pinToggleBtn.style.display = 'flex';
                elements.pinDotSolid.style.opacity = '0';
                elements.pinDotHollow.style.opacity = '1';
                elements.mobileCloseIcon.style.opacity = '0';
                elements.pinToggleBtn.classList.remove('opacity-0', 'pointer-events-none');
            }

            elements.pinToggleBtn.setAttribute('aria-pressed', (!collapsed).toString());
        }

        function initPin() {
            if (isMobile()) {
                if (elements.sidebar.classList.contains('-translate-x-full')) {
                    hidePinCompletely();
                } else {
                    updateCollapsedState(false);
                }
                return;
            }
            updateCollapsedState(!isPinned);
        }

        function togglePin() {
            if (isMobile()) {
                elements.sidebar.classList.add('-translate-x-full');
                hidePinCompletely();
                return;
            }
            isPinned = !isPinned;
            localStorage.setItem('sidebar-pinned', isPinned);
            updateCollapsedState(!isPinned);
        }

        function closeMobileSidebar() {
            if (isMobile()) {
                elements.sidebar.classList.add('-translate-x-full');
                hidePinCompletely();
            }
        }

        // ONLY ATTACH CLOSE EVENT TO LINKS WITH close-on-mobile CLASS
        function attachMobileCloseEvents() {
            const closeItems = elements.sidebar.querySelectorAll('.close-on-mobile');
            closeItems.forEach(item => {
                item.addEventListener('click', (e) => {
                    // Prevent inventory button toggle interference
                    if (item.id === 'inventory-btn' || item.classList.contains('inventory-toggle')) {
                        e.stopPropagation();
                        return;
                    }
                    closeMobileSidebar();
                });
            });
        }

        // Hover events (desktop only)
        elements.sidebar.addEventListener('mouseenter', () => {
            if (!isMobile() && !isPinned) {
                updateCollapsedState(false);
            }
        });

        elements.sidebar.addEventListener('mouseleave', () => {
            if (!isMobile() && !isPinned) {
                updateCollapsedState(true);
            }
        });

        // Pin button / Mobile close button
        elements.pinToggleBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            togglePin();
        });

        // INVENTORY DROPDOWN - FIXED
        elements.inventoryBtn.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent close-on-mobile
            if (!elements.sidebar.classList.contains('is-collapsed')) {
                const isExpanded = elements.inventoryDropdown.style.maxHeight !== '0px' && 
                                 elements.inventoryDropdown.style.maxHeight !== '';
                elements.inventoryDropdown.style.maxHeight = isExpanded ? '0' : '150px';
                elements.inventoryDropdown.style.opacity = isExpanded ? '0' : '1';
                elements.inventoryArrow.style.transform = isExpanded ? 'rotate(0deg)' : 'rotate(180deg)';
                elements.inventoryBtn.setAttribute('aria-expanded', (!isExpanded).toString());
                
                // On mobile, close sidebar AFTER dropdown opens
                if (isMobile() && !isExpanded) {
                    setTimeout(() => {
                        closeMobileSidebar();
                    }, 300);
                }
            }
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!elements.inventoryBtn.contains(e.target) && !elements.inventoryDropdown.contains(e.target)) {
                elements.inventoryDropdown.style.maxHeight = '0';
                elements.inventoryDropdown.style.opacity = '0';
                elements.inventoryArrow.style.transform = 'rotate(0deg)';
                elements.inventoryBtn.setAttribute('aria-expanded', 'false');
            }
        });

        // Initialize mobile close events
        attachMobileCloseEvents();

        // Re-attach events after potential DOM changes
        elements.sidebar.addEventListener('DOMSubtreeModified', attachMobileCloseEvents);

        initPin();

        window.addEventListener('resize', () => {
            if (isMobile()) {
                if (elements.sidebar.classList.contains('-translate-x-full')) {
                    hidePinCompletely();
                } else {
                    showPinForMobile();
                    elements.sidebar.classList.remove('is-collapsed');
                    elements.platformName.style.opacity = '1';
                    elements.upgradeSection.style.display = 'none';
                    elements.mobileLogoutSection.style.display = 'block';
                    elements.inventoryDropdown.style.display = 'block';
                    elements.inventoryArrow.style.display = 'block';
                }
            } else {
                elements.mobileCloseIcon.style.opacity = '0';
                initPin();
            }
        });

        // Expose functions globally for navbar integration
        window.closeMobileSidebar = closeMobileSidebar;
        window.toggleMobileSidebar = () => {
            if (isMobile()) {
                if (elements.sidebar.classList.contains('-translate-x-full')) {
                    elements.sidebar.classList.remove('-translate-x-full');
                    updateCollapsedState(false);
                } else {
                    elements.sidebar.classList.add('-translate-x-full');
                    hidePinCompletely();
                }
            }
        };
    })();
</script>

<style>
    /* FAST TRANSITIONS */
    #sidebar {
        transition: transform 0.3s ease-out, width 0.2s ease-out !important;
    }

    #sidebar.is-collapsed {
        width: 5rem;
    }

    /* PIN BUTTON - HIDDEN COMPLETELY WHEN COLLAPSED OR MOBILE CLOSED */
    #pin-toggle-btn {
        position: relative;
        transition: all 0.15s ease-out, display 0.2s ease-out;
    }

    #pin-dot-solid,
    #pin-dot-hollow,
    #mobile-close-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: opacity 0.15s ease-out;
    }

    /* COLLAPSED: PIN COMPLETELY HIDDEN */
    #sidebar.is-collapsed #pin-toggle-btn {
        display: none !important;
        opacity: 0 !important;
        visibility: hidden !important;
    }

    /* MOBILE CLOSED: PIN COMPLETELY HIDDEN */
    @media (max-width: 767px) {
        #sidebar.-translate-x-full #pin-toggle-btn {
            display: none !important;
            opacity: 0 !important;
            visibility: hidden !important;
            width: 0 !important;
            height: 0 !important;
            padding: 0 !important;
            margin: 0 !important;
            border: none !important;
        }
    }

    /* EXPANDED/HOVER: SHOW PIN */
    #sidebar:not(.is-collapsed) #pin-toggle-btn,
    #sidebar.is-collapsed:hover #pin-toggle-btn {
        display: flex !important;
        opacity: 1 !important;
        visibility: visible !important;
        pointer-events: auto !important;
    }

    /* MOBILE SPECIFIC */
    @media (max-width: 767px) {
        #sidebar {
            width: 65vw !important;
            max-width: 260px;
        }
        
        /* Always show pin button as close button on mobile WHEN OPEN */
        #sidebar:not(.-translate-x-full) #pin-toggle-btn {
            opacity: 1 !important;
            pointer-events: auto !important;
            display: flex !important;
            visibility: visible !important;
        }
        
        /* Hide upgrade, show logout */
        #upgrade-section {
            display: none !important;
        }
        
        #mobile-logout-section {
            display: block !important;
        }
        
        /* Always show scrollbar on mobile */
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px !important;
        }
        
        /* Larger touch targets */
        .menu-item, #inventory-btn {
            min-height: 48px;
        }
        
        /* LOGO AND NAME VISIBLE ON MOBILE */
        .logo {
            display: block !important;
        }
        
        #platform-name {
            opacity: 1 !important;
        }
    }

    /* DESKTOP: Hide mobile close icon */
    @media (min-width: 768px) {
        #mobile-close-icon {
            display: none !important;
        }
    }

    /* COLLAPSED MENU STYLES (DESKTOP ONLY) */
    #sidebar.is-collapsed .menu-label,
    #sidebar.is-collapsed #platform-name,
    #sidebar.is-collapsed #inventory-text {
        opacity: 0;
        width: 0;
        overflow: hidden;
        flex-shrink: 0;
        margin: 0;
        padding: 0;
    }

    #sidebar.is-collapsed .menu-item,
    #sidebar.is-collapsed #inventory-btn {
        justify-content: center;
        align-items: center;
        padding: 0.5rem;
        gap: 0;
        position: relative;
        overflow: visible;
    }

    #sidebar.is-collapsed i[class*="fa-"],
    #sidebar.is-collapsed #inventory-icon {
        opacity: 1;
        visibility: visible;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 1.25rem;
        height: 1.25rem;
        margin: 0 auto;
        flex-shrink: 0;
        z-index: 10;
        position: relative;
        overflow: visible;
    }

    #sidebar.is-collapsed #inventory-btn {
        justify-content: center;
        align-items: center;
        text-align: center;
        padding-inline-start: 1.4rem;
        right: 0.2rem;
    }

    #sidebar.is-collapsed #inventory-btn > div {
        justify-content: center;
        align-items: center;
        width: 100%;
        text-align: center;
    }

    #sidebar.is-collapsed #inventory-btn > svg {
        display: none;
    }

    /* HIDE ELEMENTS WHEN COLLAPSED */
    #sidebar.is-collapsed #inventory-dropdown,
    #sidebar.is-collapsed #upgrade-section {
        display: none !important;
    }

    /* CUSTOM SCROLLBAR - HIDE BY DEFAULT, SHOW ON HOVER */
    .custom-scrollbar {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .custom-scrollbar::-webkit-scrollbar {
        width: 0px;
        background: transparent;
    }

    #sidebar:hover .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }

    #sidebar:hover .custom-scrollbar::-webkit-scrollbar-track {
        background: rgba(245, 225, 192, 0.3);
        border-radius: 10px;
    }

    #sidebar:hover .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #F59E0B;
        border-radius: 10px;
        border: 1px solid rgba(245, 158, 11, 0.3);
    }

    #sidebar:hover .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #d68f00;
    }

    /* Firefox custom scrollbar */
    #sidebar:hover .custom-scrollbar {
        scrollbar-width: thin;
        scrollbar-color: #F59E0B rgba(245, 225, 192, 0.3);
    }

    /* GLOBAL ICON STYLING */
    [class*="fa-"] {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* TRANSITIONS */
    #upgrade-section {
        transition: all 0.2s ease-out;
    }

    #bottom-section {
        min-height: 120px;
        padding: 0.5rem;
    }

    /* SMOOTH DROPDOWN */
    #inventory-dropdown {
        transition: max-height 0.3s ease-in-out, opacity 0.3s ease-in-out;
    }
</style>

{{-- what is ittha when i click on a button in the sidebar it closes the sidebar? for example when i click on the inventory button it closes the sidebar instead of showing the dropdown and why did you remove the cross icon that was in the pin circle? --}}
<!-- ================= FIN SIDEBAR ================= -->

<!-- JavaScript pour gérer le dropdown Inventory -->
{{-- <script>
    // Sélectionne le bouton Inventory
    const inventoryBtn = document.querySelector('.inventory-btn');
    // Sélectionne le dropdown menu
    const inventoryDropdown = document.querySelector('.inventory-dropdown');
    // Sélectionne la flèche pour animation
    const inventoryArrow = document.querySelector('.inventory-arrow');

    // Ajoute un écouteur de clic sur le bouton
    if (inventoryBtn) {
        inventoryBtn.addEventListener('click', function() {
            // Toggle: affiche ou cache le dropdown
            inventoryDropdown.classList.toggle('hidden');
            // Rotation de la flèche (0deg ou 180deg)
            inventoryArrow.style.transform = inventoryDropdown.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
        });
    }

    // Gestion des pages 404
    // Sélectionne tous les liens avec la classe page-404
    const page404Links = document.querySelectorAll('.page-404');
    
    page404Links.forEach(link => {
        link.addEventListener('click', function(e) {
            // Empêche la navigation normal
            e.preventDefault();
            // Affiche l'alerte 404
            alert('Cette page n\'existe pas encore (404 Not Found)');
        });
    });
</script> --}}
