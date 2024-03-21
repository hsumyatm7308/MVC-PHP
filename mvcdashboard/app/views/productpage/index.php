<?php require APPROOT . '/views/layouts/header.php'; ?>
<?php require APPROOT . '/views/layouts/sidebar.php'; ?>
<?php require APPROOT . '/views/layouts/navbar.php'; ?>

<?php
ini_set('display_errors', 1);
?>





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
                <tr class="product_list<?php echo $item['id']; ?>">
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
                        <a href="#">
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
                                <button type="button" class="w-full px-3">Del</button>
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
</style>


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


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>




    $(document).ready(function () {

        var previewimages = function (input, output) {



            if (input.files) {
                var totalfiles = input.files.length;


                if (totalfiles > 0) {
                    $('.gallery').addClass('removetext');
                } else {
                    $(".gallery").removeClass('removetext');
                }

                for (var i = 0; i < totalfiles; i++) {
                    var filereader = new FileReader();
                    filereader.onload = function (e) {
                        $(output).html(""); $($.parseHTML("<img>")).attr("src", e.target.result).appendTo(output);
                    }
                    filereader.readAsDataURL(input.files[i]);

                    console.log(filereader.readAsDataURL(input.files[i]));
                }
            }
        };

        // for single image

        $("#editimage").change(function () {
            previewimages(this, ".gallery");
        })





    });


    // other details 
    let leftdetaileles = document.querySelectorAll('.otherdetails_element_left');
    let rightdetaileles = document.querySelectorAll('.otherdetails_element_right');

    const indexes = [];
    const show = [...leftdetaileles].map((leftdetailele, idx) => {
        leftdetaileles[0].classList.add('bg-teal-500', 'text-teal-50');

        leftdetailele.addEventListener('click', () => {

            const rest = indexes.filter(index => index !== idx);

            rightdetaileles[idx].classList.remove('hidden');
            leftdetailele.classList.add('bg-teal-500', 'text-teal-50');

            rest.forEach(index => {
                rightdetaileles[index].classList.add('hidden');
                leftdetaileles[index].classList.remove('bg-teal-500', 'text-teal-50');

            });


        });



        indexes.push(idx);

    });



    // start show old value 
    let editbtn = document.querySelectorAll('.editbtn');
    const updatebtn = document.querySelector('.update_btn');





    editbtn.forEach(btn => {
        btn.addEventListener('click', (e) => {

            document.getElementById('editmodal').classList.toggle('hidden');




            // get items value from index
            let element = e.target;
            let attributes = element.attributes;
            let productid = attributes['data-id'];
            let status = attributes['data-status'];
            let category = attributes['data-category'];
            let name = attributes['data-name'];
            let price = attributes['data-price'];
            let brand = attributes['data-brand'];
            let quantity = attributes['data-quantity'];
            let description = attributes['data-description'];
            let image = attributes['data-image'];



            // // show old value from server
            document.getElementById('editname').setAttribute('value', name.value);
            document.getElementById('editstatus_id').setAttribute('value', status.value);
            document.getElementById('editcategory_id').setAttribute('value', category.value);
            document.getElementById('editprice').setAttribute('value', price.value);
            document.getElementById('editbrand_id').setAttribute('value', brand.value);
            document.getElementById('editdescription').innerHTML = `${description.value}`;

            document.getElementById('editquantity').setAttribute('value', quantity.value);


            document.querySelector('.gallery').classList.add('removetext')

            let imagesrc = document.querySelector('.gallery').children[0];

            imagesrc.setAttribute('src', image.value);







            // get table list with id
            let productlists = document.querySelector('.product_list');




            let productlist = document.querySelector('.product_list' + productid.value);

            // console.log(e.target.parentElement.parentElement.parentElement.parentElement)
            // console.log(productlist)


            const imageui = productlist.children[1].children[0].children[0].src;
            const itemsui = productlist.children[2].children[0].innerHTML.trim();
            const statusui = productlist.children[3].children[0];
            const categoriesui = productlist.children[4].children[0];

            const priceui = productlist.children[5].children[0].innerHTML.trim();
            const brandui = productlist.children[6].children[0];
            const quantityui = productlist.children[7].children[0].innerHTML.trim();


            // reset
            let editname = document.getElementById('editname');
            let editimage = document.getElementById('editimage');
            let editprice = document.getElementById('editprice');
            let editbrand = document.getElementById('editbrand_id');
            // let editdescription = document.getElementById('editdescription');
            let editquantity = document.getElementById('editquantity');
            editname.value = itemsui;
            editimage.value = '';

            imagesrc.src = imageui;
            editprice.value = priceui;

            editquantity.value = quantityui;




            // product id for update
            updatebtn.setAttribute('productid', productid.value);





        });
    });
    // end show old value 


    // all values from form
    let form = document.getElementById('form');



    document.addEventListener('DOMContentLoaded', function () {




        updatebtn.addEventListener('click', (e) => {






            var getattr = e.target;



            const formdata = new FormData(form);


            const imagefile = document.getElementById('editimage').files[0];
            console.log(imagefile);

            if (imagefile) {
                formdata.append('image', imagefile);
            }



            productid = getattr.attributes['productid'].value;

            formdata.append('productid', productid);



            var xmlhttp = new XMLHttpRequest();
            var url = `http://localhost/mvc/mvcdashboard/productpage/update`;
            xmlhttp.open("POST", url, true);
            xmlhttp.onreadystatechange = function (e) {

                if (xmlhttp.status == 200 && xmlhttp.readyState == 4) {
                    var result = xmlhttp.response;
                    var responseData = JSON.parse(xmlhttp.responseText);

                    document.getElementById('editmodal').classList.toggle('hidden');



                    let productlist = document.querySelector('.product_list' + productid);

                    const id = productlist.children[0].children[0];
                    const image = productlist.children[1].children[0].children[0].src = `<?php echo URLROOT; ?>${responseData['image']}`;
                    const name = productlist.children[2].children[0].innerHTML = `${responseData['name']}`;

                    const status = productlist.children[3].children[0]; // R
                    const categories = productlist.children[4].children[0]; // R

                    const price = productlist.children[5].children[0].innerHTML = `${responseData['price']}`;
                    const brand = productlist.children[6].children[0]; // R
                    const quantity = productlist.children[7].children[0].innerHTML = `${responseData['quantity']}`;





                }
            };

            xmlhttp.send(formdata);
        });

    });







</script>

<?php require APPROOT . '/views/layouts/footer.php'; ?>


<!-- 5:30  -->