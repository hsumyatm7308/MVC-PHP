<div class="md:grid md:grid-cols-6 flex relative sidebar-container">

    <div id="sidebars"
        class="w-full h-full md:relative md:bg-teal-900 md:flex absolute bg-[linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)] z-10 hidden">

        <div class="md:relative md:w-full md:h-full   h-full   bg-teal-900 text-green-100 ">

            <div class="flex justify-between items-center space-x-2 px-10 py-3">
                <div>
                    <span class="text-3xl font-bold">D.</span>
                </div>

                <div class="md:hidden sm:flex" onclick="sidebar()">
                    <i class="fa-solid fa-xmark text-3xl"></i>
                </div>
            </div>





            <div class="pl-10 mt-10">
                <span class="text-sm text-teal-50 opacity-70">Dashboard</span>
                <ul class="pl-5 space-y-1 mt-3">
                    <li class="w-full <?php echo active('dashboard'); ?> ">

                        <a href="dashboard"
                            class="w-full inline-block rounded-l-md hover:bg-teal-100 hover:text-teal-900  pl-3 py-3 space-x-1">
                            <i class="fa-solid fa-gauge"></i>
                            <span>Dashboard</span>
                        </a>


                    </li>

                    <li class="w-full ">

                        <span class="w-full inline-block rounded-l-md pl-3 py-3 space-x-1">
                            <i class="fa-brands fa-product-hunt"></i>
                            <span>Products</span>
                        </span>

                        <ul class="pl-10 space-y-1 mt-1">
                            <li class="w-full <?php echo active('productpage'); ?> ">
                                <a href="<?php echo URLROOT; ?>/productpage"
                                    class="w-full text-sm inline-block rounded-l-md hover:bg-teal-100 hover:text-teal-900  pl-3 py-3 space-x-1">
                                    <i class="fa-solid fa-list"></i>
                                    <span>All Products</span>
                                </a>
                            </li>
                            <li class="w-full <?php echo active('productpage/create'); ?> ">
                                <a href="<?php echo URLROOT; ?>/productpage/create"
                                    class="w-full text-sm inline-block rounded-l-md hover:bg-teal-100 hover:text-teal-900  pl-3 py-3 space-x-1">
                                    <i class="fa-solid fa-folder-open"></i>
                                    <span>New Product</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>


    <script>
        function sidebar() {
            const sidebarcontainer = document.querySelector('.sidebar-container');

            sidebarcontainer.children[0].children[0].classList.add('hidden')
            sidebarcontainer.children[0].classList.add('hidden')

            console.log('hi')
        }

    </script>