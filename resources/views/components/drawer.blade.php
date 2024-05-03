<div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col">
        <!-- Page content here -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <div class="drawer-side">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu pt-[106px] pl-[49px] w-[300px] min-h-full bg-accent text-white gap-[29px]">
            <!-- Sidebar content here -->
            <li><a href="dashboard" class="font-mada text-[25px] flex items-end"><i
                        class="fi fi-rr-apps"></i>Dashboards</a></li>
            <li><a class="font-mada text-[25px] flex items-end"><i class="fi fi-rr-star"></i>Starred</a></li>
            <li><a class="font-mada text-[25px] flex items-end"><i class="fi fi-rr-globe"></i>Explore</a></li>
            <li><a href="profile" class="font-mada text-[25px] flex items-end"><i
                        class="fi fi-rr-settings-sliders"></i>Settings</a>
            </li>
            <li><a href="/" class="font-mada text-[25px] flex items-end"><i class="fi fi-rr-home"></i>Home</a>
            </li>

        </ul>

    </div>
</div>
