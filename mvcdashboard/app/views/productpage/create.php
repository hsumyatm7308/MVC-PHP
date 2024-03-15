<?php require APPROOT . '/views/layouts/header.php'; ?>
<?php require APPROOT . '/views/layouts/sidebar.php'; ?>
<?php require APPROOT . '/views/layouts/navbar.php'; ?>


<style>
    /* .gallery {


        text-align: center;
        padding: 10px;
        margin: auto;

        display: flex;
        justify-content: center;
        align-items: center;
    } */

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



<div class="w-full text-black  flex justify-between items-center p-10 mb-5">
    <div>
        <div>
            <h1 class="text-2xl">New Product</h1>
        </div>
        <div class="text-gray-500 mt-2">
            <span class="text-sm">Home | Product List</span>
        </div>
    </div>
    <div>
        <span class="text-teal-50 bg-teal-500  transition-all duration-300  hover:bg-teal-600 rounded-md px-4 py-2 ">
            <button type="button" class="create_btn">Publish</button>
        </span>
    </div>

</div>

<div class="w-full px-10">
    <form id="form" action="" method="">

        <div class="w-full grid grid-cols-4 gap-10">
            <div class="col-span-3 w-full bg-teal-100 rounded-md px-10 py-10 ">
                <div class="w-full h-full space-y-5">
                    <div class="flex flex-col justify-center">
                        <label for="name" class="text-teal-700">Product Title

                        </label>
                        <input type="text" name="name" id="name"
                            class="text-teal-700 rounded-md focus:outline-0 focus:ring-1 focus:ring-teal-300 px-3 py-3 mt-2 form-control"
                            placeholder="Title">

                    </div>


                    <div class="flex flex-col justify-center">
                        <label for="description" class="text-teal-700">Description</label>
                        <textarea name="description" id="description"
                            class="text-teal-700 rounded-md focus:outline-0 focus:ring-1 focus:ring-teal-300 resize-none  px-3 py-3 mt-2 scrollbars form-control"
                            cols="30" rows="10"></textarea>
                    </div>
                </div>

            </div>

            <div class="space-y-5">
                <div class="w-full bg-teal-100 flex flex-col justify-center items-center rounded-md px-5 py-5">
                    <span class="text-teal-700 self-start mb-5">Product Photo</span>
                    <div
                        class="w-full h-44 border border-teal-200 flex justify-center items-center rounded-md mb-5 gallery ">

                    </div>
                    <div class="w-full text-teal-50 bg-teal-500  transition-all duration-300   hover:bg-teal-600  py-2">
                        <label for="image" class="w-full text-center inline-block">Add Photo</label>

                        <input type="file" name="image" id="image" class="form-control" hidden>
                    </div>
                </div>

                <div class="w-full bg-teal-100 flex flex-col justify-center items-center rounded-md px-5 py-5">
                    <span class="text-teal-700 self-start mb-5">Category</span>


                    <div class="w-full relative custom-select">
                        <select
                            class="block appearance-none w-full bg-white border border-gray-300  transition-all duration-300  hover:border-gray-400 px-4 py-2 pr-8 rounded-md shadow-sm focus:outline-none focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>

                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-red-600">
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




        <div class="w-full grid grid-cols-4 gap-10 mt-10">
            <div class="col-span-3 w-full bg-teal-100  rounded-md px-10 py-3 ">
                <div class="w-full  space-y-5">
                    Other Details
                </div>

            </div>
        </div>

        <div class="w-full grid grid-cols-4 gap-10 mt-10">
            <div class="col-span-3 w-full rounded-md py-10 ">

                <div class="w-full grid grid-cols-3 gap-10">
                    <div class="w-full bg-teal-100 text-teal-900 rounded-md px-6 py-10">
                        <ul class="space-y-1 otherdetails_container_left">
                            <li
                                class="w-full bg-teal-500 text-teal-50 transition-all duration-300 hover:bg-teal-500 hover:text-teal-50 rounded-md py-3 px-4 space-x-1 otherdetails_element_left">
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
                    <div class="col-span-2 otherdetails_container_right">
                        <div class="bg-teal-100 rounded-md px-10 py-10 space-y-5 otherdetails_element_right">
                            <div class="w-full grid grid-cols-3 items-center">
                                <label for="price">Price:</label>
                                <input type="number" name="price" id="price"
                                    class="col-span-2 w-full text-teal-700 rounded-md focus:outline-0 focus:ring-1 focus:ring-teal-300 px-3 py-3 mt-2  form-control"
                                    placeholder="Price">
                            </div>
                            <div class="w-full grid grid-cols-3 items-center">
                                <label for="discount">Discount:</label>
                                <input type="number" name="discount" id="discount"
                                    class="col-span-2 w-full text-teal-700 rounded-md focus:outline-0 focus:ring-1 focus:ring-teal-300 px-3 py-3 mt-2 "
                                    placeholder="Discount" value="0">
                            </div>
                        </div>

                        <div class="bg-teal-100 rounded-md px-10 py-10 space-y-5 hidden otherdetails_element_right">

                            <div class="w-full grid grid-cols-3 items-center">
                                <label for="">Stock Status:</label>

                                <div class="col-span-2 w-full relative custom-select">
                                    <select
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
                                <label for="quantity">Quantity:</label>
                                <input type="number" name="quantity" id="quantity"
                                    class="col-span-2 w-full text-teal-700 rounded-md focus:outline-0 focus:ring-1 focus:ring-teal-300 px-3 py-2 mt-2 form-control"
                                    value="10">
                            </div>

                        </div>

                        <div
                            class="bg-teal-100 w-full flex justify-start items-start rounded-md px-10 py-10 hidden otherdetails_element_right">
                            <div class=" w-full grid grid-cols-3 items-center">
                                <label for="">Shipping:</label>

                                <div class="col-span-2 w-full relative custom-select">
                                    <select
                                        class="block appearance-none w-full bg-white border border-gray-300  transition-all duration-300  hover:border-gray-400 px-4 py-2 pr-8 rounded-md shadow-sm focus:outline-none focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50">
                                        <option>No Shipping</option>
                                        <option>Free Shipping</option>
                                        <option>Fixed Shipping</option>
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

                </div>

            </div>


        </div>


    </form>


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

        $("#image").change(function () {
            previewimages(this, ".gallery");
        })

    });


    // other details 
    let leftdetaileles = document.querySelectorAll('.otherdetails_element_left');
    let rightdetailele = document.querySelectorAll('.otherdetails_element_right');

    const indexes = [];
    const show = [...leftdetaileles].map((leftdetailele, idx) => {
        leftdetailele.addEventListener('click', () => {
            const rest = indexes.filter(index => index !== idx);
            rightdetailele[idx].classList.remove('hidden');
            rest.forEach(index => {
                rightdetailele[index].classList.add('hidden');
            });
        });
        indexes.push(idx);
    });



    // all values from form
    let form = document.getElementById('form');
    const createbtn = document.querySelector('.create_btn');



    document.addEventListener('DOMContentLoaded', function () {


        createbtn.addEventListener('click', (e) => {

            const formdata = new FormData(form);
            const imagefile = document.getElementById('image').files[0];
            formdata.append('image', imagefile)

            var xmlhttp = new XMLHttpRequest();
            var url = `http://localhost/mvc/mvcdashboard/productpage/store`;
            xmlhttp.open("POST", url, true);
            xmlhttp.onreadystatechange = function (e) {
                if (xmlhttp.status == 200 && xmlhttp.readyState == 4) {
                    var result = xmlhttp.response;

                    let allhasdata = true;

                    for (const [name, value] of formdata.entries()) {
                        if (!value) {
                            allhasdata = false;
                            break;
                        }
                    }

                    if (!imagefile) {
                        allhasdata = false;
                    }

                    checkallhasdata(allhasdata)
                }
            };

            xmlhttp.send(formdata);
        });

    });



    function checkallhasdata(allhasdata) {
        if (allhasdata) {

            window.location.href = 'http://localhost/mvc/mvcdashboard/productpage';

        } else {

            const getinputs = document.querySelectorAll('.form-control');

            const inputsArray = Array.from(getinputs);
            var imgparent = inputsArray[2].parentElement.parentElement;

            if (inputsArray[2].value == '') {
                imgparent.children[1].classList.replace('border-teal-200', 'border-red-300')

            } else {
                imgparent.children[1].classList.replace('border-red-300', 'border-teal-200')

            }

            for (const input of inputsArray) {
                const value = input.value;
                if (value === '') {
                    input.classList.add('border', 'border-red-300');

                } else {
                    input.classList.remove('border', 'border-red-300');

                }
            }


        }

    }





</script>