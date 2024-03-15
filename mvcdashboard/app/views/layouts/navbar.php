<div class="md:col-span-5 w-full h-screen overflow-y-scroll  relative">

    <div class="w-full flex justify-between items-center bg-teal-700 px-10 py-3 sticky top-0">

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
        <div class="flex justify-end items-center space-x-2">
            <div class="w-10 h-10 rounded-full bg-green-100">

            </div>
            <span>Admin</span>
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