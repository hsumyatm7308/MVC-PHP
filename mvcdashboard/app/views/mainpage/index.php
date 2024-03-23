<?php require APPROOT . '/views/layouts/header.php'; ?>
<?php require APPROOT . '/views/layouts/sidebar.php'; ?>
<?php require APPROOT . '/views/layouts/navbar.php'; ?>

<?php
ini_set('display_errors', 1);
?>



<style>
    .removetext span {
        display: none;
    }

    .gallery img {
        width: inherit;
        max-height: 11rem;

        object-fit: cover;
        border-radius: 10px;

        display: flex;
        justify-content: center;
        align-items: center;

    }

    .scrollbars::-webkit-scrollbar {
        width: 2px;
    }

    .bg-gradient {
        width: 10%;
        background: rgb(14 165 233);
    }
</style>




<!-- <div class="w-full text-black  flex justify-between items-center p-10 mb-5"> -->
<div class="w-full text-black  flex justify-between items-center p-10 mb-5">
    <div>
        <div>
            <h1 class="text-2xl">Products List</h1>
        </div>
        <div class="text-gray-500 mt-2">
            <span class="text-sm">Home | Product List</span>
        </div>
    </div>
    <div>
        <a href="<?php echo URLROOT; ?>/productpage/create"
            class="text-green-100 bg-teal-500 hover:bg-teal-600 rounded-md px-4 py-2 ">
            <button class="app-content-headerButton">Add Product</button>
        </a>
    </div>

</div>


<div class="w-full px-10 overflow-x-auto ">

    <table class="w-full">
        <thead class="w-full font-medium">
            <td class="px-5 py-3">
                <div>
                    <h1>Id</h1>
                </div>
            </td>
            <td class="px-5 py-3">
                <div>
                    <h1>Photo</h1>
                </div>
            </td>
            <td class="px-5 py-3">
                <div>
                    <h1>Items</h1>
                </div>
            </td>
            <td class="px-5 py-3">
                <div>
                    <h1>Status</h1>
                </div>
            </td>

            <td class="px-5 py-3">
                <div>
                    <h1>Categories</h1>
                </div>
            </td>

            <td class="px-5 py-3">
                <div>
                    <h1>Price</h1>
                </div>
            </td>

            <td class="px-5 py-3">
                <div>
                    <h1>Brand</h1>
                </div>
            </td>

            <td class="px-5 py-3">
                <div>
                    <h1>Quantity</h1>
                </div>
            </td>


            <td class="px-5 py-3">
                <div>
                    <h1>Acion</h1>
                </div>
            </td>

        </thead>

        <?php foreach ($data['items'] as $id => $item): ?>


            <tbody class="w-full border-collapse border-t border-slate-100
            <?php
            if (!is_even($id)) {
                echo "bg-teal-50";
            } else {
                echo "";
            }
            ?> 
                ">
                <tr class="product_list<?php echo $item['id']; ?> text-gray-800">
                    <td class="px-5 py-3">
                        <div>
                            <?php echo ++$id; ?>
                        </div>
                    </td>
                    <td class="px-5 py-3">
                        <div class="w-10 h-10 rounded-md overflow-hidden">
                            <img src="<?php echo URLROOT; ?><?php echo $item['image'] ?>" alt="" class="w-20">
                        </div>
                    </td>
                    <td class="px-5 py-3">
                        <a href="<?php echo URLROOT; ?>/productpage/show">
                            <?php echo $item['name'] ?>
                        </a>
                    </td>
                    <td class="px-5 py-3">
                        <div>
                            <!-- <?php echo $item['status_id'] ?> -->

                            <?php
                            if (is_even($id)) {
                                echo '<span class="text-teal-700 text-xs"> In stock </span>';
                            } else {
                                echo '<span class="text-red-700 text-xs"> Out of stock </span>';
                            }
                            ?>
                        </div>
                    </td>

                    <td class="px-5 py-3">
                        <div>
                            <?php echo $item['category_id'] ?>
                        </div>
                    </td>

                    <td class="px-5 py-3">
                        <div>
                            <?php echo $item['price'] ?>
                        </div>
                    </td>

                    <td class="px-5 py-3">
                        <div>
                            <?php echo $item['brand_id']; ?>
                        </div>
                    </td>

                    <td class="px-5 py-3">
                        <div>
                            <?php echo $item['quantity']; ?>
                        </div>
                    </td>


                    <td class="px-5 py-3">
                        <div class="text-teal-50 flex items-center space-x-2">
                            <div class="bg-teal-100 text-teal-500 rounded-sm hover:bg-green-300 editbtn">
                                <a href="javascript:void(0)" class="w-full px-3" data-id="<?php echo $item['id'] ?>"
                                    data-name="<?php echo $item['name'] ?>"
                                    data-description="<?php echo $item['description'] ?>"
                                    data-status="<?php echo $item['status_id'] ?>"
                                    data-category="<?php echo $item['category_id'] ?>"
                                    data-price="<?php echo $item['price'] ?>" data-brand="<?php echo $item['brand_id'] ?>"
                                    data-quantity="<?php echo $item['quantity'] ?>"
                                    data-image="<?php echo URLROOT; ?><?php echo $item['image'] ?>">Edit</a>
                            </div>
                            <div class=" bg-red-600 rounded-sm hover:bg-red-500">
                                <button type="button" class="w-full px-3 delete_btn"
                                    data-id="<?php echo $item['id'] ?>">Del</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>

        <?php endforeach; ?>

        <tfoot>

        </tfoot>
    </table>

</div>




</div>




<div id="editmodal" class="w-full h-auto hidden">
    <div
        class="w-full h-screen flex justify-center items-center bg-[linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.1))]  overflow-x-auto  absolute left-0 top-0 z-20 md:p-20">
        <div class=" md:w-full flex justify-center items-center md:p-20 md:mt-96 p-10">

            <form id="form" action="" method="" class="">

                <div class="md:w-full  rounded-md shadow-lg  bg-slate-100 p-10 md:mt-0 sm:mt-[1000px]">

                    <div class=" md:w-full text-black flex justify-between items-center mb-10">
                        <div>
                            <div>
                                <h1 class="text-2xl">Edit Product </h1>
                            </div>

                        </div>
                        <div class="space-x-3">
                            <span
                                class="text-slate-500 bg-slate-200  transition-all duration-300  hover:bg-teal-600 rounded-md px-4 py-2 "
                                onclick="document.getElementById('editmodal').classList.add('hidden')">
                                <button type="button" class="">Cancel</button>
                            </span>
                            <span
                                class="text-teal-50 bg-teal-500  transition-all duration-300  hover:bg-teal-600 rounded-md px-4 py-2 ">
                                <button type="button" class="update_btn">Update</button>
                            </span>
                        </div>

                    </div>

                    <div class="w-auto  md:grid md:grid-cols-4 gap-10">
                        <div class="col-span-3 w-full  ">
                            <div class="w-full h-full bg-slate-200 rounded-md px-10 py-10 space-y-5">
                                <div class="flex flex-col justify-center">
                                    <label for="name" class="text-teal-700">Product Title

                                    </label>
                                    <input type="text" name="name" id="editname"
                                        class="text-teal-700 rounded-md focus:outline-0 focus:ring-1 focus:ring-teal-300 px-3 py-3 mt-2 form-control"
                                        placeholder="Title">

                                </div>


                                <div class="flex flex-col justify-center">
                                    <label for="editdescription" class="text-teal-700">Description</label>
                                    <textarea name="description" id="editdescription"
                                        class="text-teal-700 rounded-md focus:outline-0 focus:ring-1 focus:ring-teal-300 resize-none  px-3 py-3 mt-2 scrollbars form-control"
                                        cols="30" rows="10"></textarea>
                                </div>


                            </div>

                        </div>

                        <div class="space-y-5 md:mt-0 mt-5">
                            <div
                                class="w-full bg-slate-200 flex flex-col justify-center items-center rounded-md px-5 py-5">
                                <span class="text-teal-700 self-start mb-5">Product Photo</span>
                                <div
                                    class="w-full h-44 border border-teal-200 flex justify-center items-center rounded-md mb-5 gallery">
                                    <img src="" alt="">
                                </div>
                                <div
                                    class="w-full text-teal-50 bg-teal-500  transition-all duration-300   hover:bg-teal-600  py-2">
                                    <label for="editimage" class="w-full text-center inline-block">Add Photo</label>

                                    <input type="file" name="image" id="editimage" class="form-control" hidden>
                                </div>
                            </div>

                            <div
                                class="w-full bg-slate-200 flex flex-col justify-center items-center rounded-md px-5 py-5">
                                <span class="text-teal-700 self-start mb-5">Category</span>


                                <div class="w-full relative custom-select">
                                    <select name="category_id" id="editcategory_id"
                                        class="block appearance-none w-full bg-white border border-gray-300  transition-all duration-300  hover:border-gray-400 px-4 py-2 pr-8 rounded-md shadow-sm focus:outline-none focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>

                                    <div
                                        class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-red-600">
                                        <svg class="w-4 h-4 fill-current text-gray-500" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10 12.586L5.707 8.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0l5-5a1 1 0 00-1.414-1.414L10 12.586z" />
                                        </svg>
                                    </div>
                                </div>


                            </div>


                            <div
                                class="w-full bg-slate-200 flex flex-col justify-center items-center rounded-md px-5 py-5">
                                <span class="text-teal-700 self-start mb-5">Brand</span>


                                <div class="w-full relative custom-select">
                                    <select name="brand_id" id="editbrand_id"
                                        class="block appearance-none w-full bg-white border border-gray-300  transition-all duration-300  hover:border-gray-400 px-4 py-2 pr-8 rounded-md shadow-sm focus:outline-none focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>

                                    <div
                                        class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-red-600">
                                        <svg class="w-4 h-4 fill-current text-gray-500" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10 12.586L5.707 8.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0l5-5a1 1 0 00-1.414-1.414L10 12.586z" />
                                        </svg>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>




                    <div class="w-full md:grid md:grid-cols-4 gap-10 mt-10">
                        <div class="col-span-3 w-full bg-slate-200  rounded-md px-10 py-3 ">
                            <div class="w-full  space-y-5">
                                Other Details
                            </div>

                        </div>
                    </div>

                    <div class="w-full grid grid-cols-4 gap-10 mt-10 ">
                        <div class="col-span-3 w-full rounded-md py-200 ">

                            <div class="w-full md:grid md:grid-cols-3 gap-10">

                                <div class="w-full bg-slate-200 text-teal-900 rounded-md px-6 py-10">
                                    <ul class="space-y-1 otherdetails_container_left">
                                        <li
                                            class="w-full  transition-all duration-300 hover:bg-teal-500 hover:text-teal-50 rounded-md py-3 px-4 space-x-1 otherdetails_element_left">
                                            <i class="fa-solid fa-stethoscope"></i>
                                            <span>General</span>
                                        </li>
                                        <li
                                            class="w-full  transition-all duration-300 hover:bg-teal-500 hover:text-teal-50 rounded-md py-3 px-4 space-x-1 otherdetails_element_left">
                                            <i class="fa-solid fa-layer-group"></i>
                                            <span>Stock</span>
                                        </li>
                                        <li
                                            class="w-full transition-all duration-300 hover:bg-teal-500 hover:text-teal-50 rounded-md py-3 px-4 space-x-1 otherdetails_element_left">
                                            <i class="fa-solid fa-truck-fast"></i>
                                            <span>Shipping</span>
                                        </li>
                                    </ul>

                                </div>
                                <div class="col-span-2 md:mt-0 mt-5 otherdetails_container_right">
                                    <div
                                        class="bg-slate-200 rounded-md px-10 py-10 space-y-5 otherdetails_element_right">
                                        <div class="w-full grid grid-cols-3 items-center">
                                            <label for="editprice">Price:</label>
                                            <input type="number" name="price" id="editprice"
                                                class="col-span-2 w-full text-teal-700 rounded-md focus:outline-0 focus:ring-1 focus:ring-teal-300 px-3 py-3 mt-2  form-control"
                                                placeholder="Price">
                                        </div>

                                        <div class="w-full grid grid-cols-3 items-center">
                                            <label for="editquantity">Quantity:</label>
                                            <input type="number" name="quantity" id="editquantity"
                                                class="col-span-2 w-full text-teal-700 rounded-md focus:outline-0 focus:ring-1 focus:ring-teal-300 px-3 py-3 mt-2  form-control"
                                                placeholder="Price">
                                        </div>


                                    </div>

                                    <div
                                        class=" bg-slate-200 rounded-md px-10 py-10 space-y-5 hidden otherdetails_element_right">

                                        <div class="w-full grid grid-cols-3 items-center">
                                            <label for="">Stock Status:</label>

                                            <div class="col-span-2 w-full relative custom-select">
                                                <select name="status_id" id="editstatus_id"
                                                    class="block appearance-none w-full bg-white border border-gray-300  transition-all duration-300  hover:border-gray-400 px-4 py-2 pr-8 rounded-md shadow-sm focus:outline-none focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50">
                                                    <option>In Stock</option>
                                                    <option>Out Of Stock</option>
                                                </select>

                                                <div
                                                    class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-red-600">
                                                    <svg class="w-4 h-4 fill-current text-gray-500" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10 12.586L5.707 8.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0l5-5a1 1 0 00-1.414-1.414L10 12.586z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="w-full grid grid-cols-3 items-center">
                                            <label for="editdiscount">Discount:</label>
                                            <input type="number" name="discount" id="editdiscount"
                                                class="col-span-2 w-full text-teal-700 rounded-md focus:outline-0 focus:ring-1 focus:ring-teal-300 px-3 py-3 mt-2 "
                                                placeholder="Discount" value="0">
                                        </div>
                                    </div>


                                    <div
                                        class="w-full bg-slate-200 rounded-md px-10 py-10 space-y-5 hidden otherdetails_element_right">

                                        <div class="w-full grid grid-cols-3 items-center">
                                            <label for="editshipping">Shipping:</label>

                                            <div class="col-span-2 w-full relative custom-select">
                                                <select name="shipping" id="editshipping"
                                                    class="block appearance-none w-full bg-white border border-gray-300  transition-all duration-300  hover:border-gray-400 px-4 py-2 pr-8 rounded-md shadow-sm focus:outline-none focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50">
                                                    <option>No Shipping</option>
                                                    <option>Free Shipping</option>
                                                </select>

                                                <div
                                                    class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-red-600">
                                                    <svg class="w-4 h-4 fill-current text-gray-500" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10 12.586L5.707 8.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0l5-5a1 1 0 00-1.414-1.414L10 12.586z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="w-full grid grid-cols-3 items-start">
                                            <label for="editremark">Remark:</label>
                                            <textarea type="text" name="editremark" id="remark"
                                                class="col-span-2 w-full text-teal-700 rounded-md focus:outline-0 focus:ring-1 focus:ring-teal-300 resize-none px-3 py-3 mt-2 "
                                                placeholder="Remark"></textarea>
                                        </div>


                                    </div>


                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </form>


        </div>
    </div>


</div>

<!-- end edit modal  -->

<!-- start delete modal  -->
<div id="deletemodal" class="w-full h-auto hidden">
    <div
        class="w-full h-screen flex justify-center items-center bg-[linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.1))]  overflow-x-auto  absolute left-0 top-0 z-20 md:p-20">
        <div class="bg-slate-100 shadow-lg rounded-md border flex flex-col justify-center items-center py-5 px-10">

            <div class="w-full flex justify-end">
                <div>
                    <i class="fa-regular fa-circle-xmark text-lg text-slate-500"></i>
                </div>
            </div>

            <div class="flex justify-between items-center space-x-10 mt-3">
                <div class="w-[20%] flex justify-start items-center ">
                    <div class="w-[80px] h-[80px] flex justify-center items-center  text-red-600 shadow-sm ">
                        <div
                            class="w-[70px] h-[70px]  bg-slate-200 bg-slate-200 flex justify-center items-center rounded-full">

                            <i class="fa-regular fa-trash-can text-[40px]"></i>
                        </div>
                    </div>


                </div>

                <div class="w-[80%]  delte_text">
                    <div class="w-full font-normal ">
                        <span>This will delete your product.</span>
                        <p>Are you sure?</p>

                    </div>


                </div>




            </div>

            <div class="w-full flex justify-end items-center mt-10 space-x-2">
                <button
                    class="bg-slate-200 hover:bg-slate-300 transition-all duration-300 rounded-md px-3 py-2 cancledelete"
                    onclick="document.getElementById('deletemodal').classList.toggle('hidden')">Cancle</button>
                <button class="bg-red-500 rounded-md hover:opacity-90 px-3 py-2 deletemodal_btn">Delete</button>
            </div>
        </div>
    </div>




</div>
<!-- end edit modal  -->


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="<?php echo URLROOT; ?>/public/js/product.js"></script>

<?php require APPROOT . '/views/layouts/footer.php'; ?>


<!-- 5:30  -->