<div class="md:col-span-5 w-full h-screen overflow-y-scroll  relative">

    <div class="w-full flex justify-between items-center bg-teal-700 px-10 py-3 sticky top-0 z-20">

        <div class="flex justify-start items-center">
            <div class="w-14 h-14  flex justify-center items-center rounded-full" onclick="togglesidebar()">
                <ul class="w-full h-full flex flex-col items-start justify-center group space-y-1">
                    <li class="list-none">
                        <div class="w-8 h-1 bg-green-100 rounded-md group-hover:opacity-60 burgar1 cross-line-1"></div>
                    </li>
                    <li class="list-none">
                        <div class="w-8 h-1 bg-green-100 rounded-md group-hover:opacity-60  burgar2"></div>
                    </li>
                    <li class="list-none">
                        <div class="w-8 h-1 bg-green-100 rounded-md group-hover:opacity-60  burgar3 cross-line-1"></div>
                    </li>

                </ul>


            </div>
        </div>


        <?php if (isset ($_SESSION['user_id'])): ?>

            <div class="flex justify-end items-center space-x-2"
                onclick="document.getElementById('dropdown').classList.toggle('hidden')">
                <div class="w-10 h-10 rounded-full bg-green-100">
                    <img src="" alt="">
                </div>


                <div class="space-x-3 text-green-100">
                    <span>
                        <?php echo $_SESSION['user_name'] ?>
                    </span>
                    <i class="fa-solid fa-caret-down"></i>
                </div>

            </div>

        <?php else: ?>
            <div class="flex justify-end items-center space-x-2"
                onclick="document.getElementById('dropdown').classList.toggle('hidden')">
                <div class="w-10 h-10 rounded-full bg-green-100">
                    <img src="" alt="">
                </div>


                <div class="space-x-3 text-green-100">
                    <span>User</span>
                    <i class="fa-solid fa-caret-down"></i>
                </div>

            </div>
        <?php endif; ?>

        <!-- dropdown -->
        <div id="dropdown" class="absolute right-10 top-16 hidden">
            <div class="w-[180px] bg-teal-100 text-gray-800 rounded-md">
                <ul>
                    <li class="transition-all duration-300 hover:bg-teal-200 border-b px-5 py-3"><a href=""
                            class="w-full inline-block">My
                            Profile</a></li>
                    <li class="transition-all duration-300 hover:bg-teal-200  border-b px-5 py-3"><a href=""
                            class="w-full inline-block">Setting</a>
                    </li>
                    <?php if (isset ($_SESSION['user_id'])): ?>
                        <li class="transition-all duration-300 hover:bg-teal-200  border-b px-5 py-3"><a
                                href="<?php echo URLROOT; ?>/users/logout" class="w-full inline-block text-red-600">Log
                                Out</a>
                        </li>
                    <?php else: ?>

                        <li class="transition-all duration-300 hover:bg-teal-200 text-red-600  border-b px-5 py-3">
                            <a href="<?php echo URLROOT; ?>/users/login" class="w-full inline-block">Sign
                                In</a>
                        </li>

                    <?php endif; ?>

                </ul>
            </div>

        </div>





    </div>


    <script>
        function togglesidebar() {

            const burgar2 = document.querySelector('.burgar2');
            const burgar3 = document.querySelector('.burgar3');

            burgar2.classList.toggle('w-5')
            burgar3.classList.toggle('w-3')

            const sidebarcontainer = document.querySelector('.sidebar-container');
            const sidebar = sidebarcontainer.children[0];


            sidebarcontainer.classList.toggle('md:grid-cols-6');
            sidebar.classList.toggle('md:flex');


            if (window.innerWidth <= 767) {
                sidebar.classList.remove('hidden')
                sidebar.children[0].classList.remove('hidden');
            }


            console.log(window.innerWidth)

        }

    </script>