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
</style>

<!-- 

<div class="app-content">
    <div class="app-content-header">
        <h1 class="app-content-headerText text-gray-200">Products/create</h1>

    </div>
    <div class="app-content-actions ">

        <div>
            <button class="action-button p-3"><span>Cancle</span>

        </div>

    </div>
    <div class="products-area-wrapper ">
        <div class="products-row hover:bg-transparent">
            <form action="" class="w-full " method="post" enctype="multipart/form-data">

                <div class="w-full grid grid-cols-3 gap-5">
                    <div class="w-full mb-3 bg-blue-400 mt-6">
                        <label for="image" class="gallery h-full">Choose Image</label>

                        <input type="file" name="image" id="image" class="" placeholder="Enter your image" value=""
                            hidden />
                    </div>


                    <div class="col-span-2 ">

                        <div class="w-full text-gray-200 grid grid-cols-2 gap-5">
                            <div class="flex flex-col justify-s items-start ">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="w-full bg-[#1d283c] p-3"
                                    placeholder="Enter your title">
                            </div>

                            <div class="flex flex-col justify-s items-start ">
                                <label for="price">Price</label>
                                <input type="number" name="price" id="price" class="w-full bg-[#1d283c] p-3"
                                    placeholder="Enter your title">
                            </div>

                            <div class="col-span-2 flex flex-col justify-s items-start ">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="w-full bg-[#1d283c] p-3"
                                    rows="10"></textarea>
                            </div>


                            <div class="flex flex-col justify-s items-start ">
                                <label for="brand">Brand</label>
                                <input type="text" name="brand" id="brand" class="w-full bg-[#1d283c] p-3"
                                    placeholder="Enter your title">
                            </div>

                            <div class="flex flex-col justify-s items-start ">
                                <label for="category_id">Category</label>
                                <input type="text" name="category_id" id="category_id" class="w-full bg-[#1d283c] p-3"
                                    placeholder="Enter your title">
                            </div>


                            <div class="flex flex-col justify-s items-start ">
                                <label for="status_id">Status</label>
                                <input type="text" name="status_id" id="status_id" class="w-full bg-[#1d283c] p-3"
                                    placeholder="Enter your title">
                            </div>



                            <div class="flex flex-col justify-s items-start ">
                                <label for="count">Count</label>
                                <input type="text" name="count" id="count" class="w-full bg-[#1d283c] p-3"
                                    placeholder="Enter your title">
                            </div>




                            <div class="col-span-2 flex  justify-end items-center space-x-5">
                                <button class="bg-gray-200 text-gray-500 p-3">Cancle</button>
                                <button class="bg-blue-500 text-center p-3">Submit</button>
                            </div>

                        </div>

            </form>

        </div>

    </div>


</div>

</div>

</div>
</div>
</div> -->

<style>
    .scrollbars::-webkit-scrollbar {
        width: 2px;
    }

    /* The container must be positioned relative: */
    .custom-select {
        position: relative;
        font-family: Arial;
    }

    .custom-select select {
        display: none;
        /*hide original SELECT element: */
    }

    .select-selected {
        background-color: #fff;
        border-radius: 6px;
    }

    /* Style the arrow inside the select element: */
    .select-selected:after {
        position: absolute;
        content: "";
        top: 14px;
        right: 10px;
        width: 0;
        height: 0;
        border: 6px solid transparent;
        border-color: #fff transparent transparent transparent;
    }

    /* Point the arrow upwards when the select box is open (active): */
    .select-selected.select-arrow-active:after {
        border-color: transparent transparent #fff transparent;
        top: 7px;
    }

    /* style the items (options), including the selected item: */
    .select-items div,
    .select-selected {
        color: #000;
        padding: 8px 16px;
        border: 1px solid transparent;
        border-color: transparent transparent rgba(0, 0, 0, .1) transparent;
        cursor: pointer;
    }

    /* Style items (options): */
    .select-items {
        position: absolute;
        background-color: #ffff;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 99;
        margin-top: 5px;
        border: 1px solid rgb(153 246 228);
        border-radius: 6px;
    }

    /* Hide the items when the select box is closed: */
    .select-hide {
        display: none;
    }

    .select-items div:hover,
    .same-as-selected {
        background-color: rgb(204 251 241);
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
        <form action="">
            <span class="text-green-100 bg-teal-500 hover:bg-teal-600 rounded-md px-4 py-2 ">
                <button type="submit" class="app-content-headerButton">Create</button>
            </span>
        </form>

    </div>

</div>

<div class="w-full px-10">
    <form action="" method="">

        <div class="w-full grid grid-cols-4 gap-10">
            <div class="col-span-3 w-full bg-teal-100 rounded-md px-10 py-10 ">
                <div class="w-full h-full space-y-5">
                    <div class="flex flex-col justify-center">
                        <label for="name" class="text-teal-700">Product Title</label>
                        <input type="text" name="name" id="name"
                            class="text-teal-700 rounded-md focus:outline-0 focus:ring-1 focus:ring-teal-300 px-3 py-3 mt-2"
                            placeholder="Title">
                    </div>


                    <div class="flex flex-col justify-center">
                        <label for="description" class="text-teal-700">Description</label>
                        <textarea name="description" id="description"
                            class="text-teal-700 rounded-md focus:outline-0 focus:ring-1 focus:ring-teal-300 resize-none  px-3 py-3 mt-2 scrollbars"
                            cols="30" rows="10"></textarea>
                    </div>
                </div>

            </div>

            <div class="space-y-5">
                <div class="w-full bg-teal-100 flex flex-col justify-center items-center rounded-md px-5 py-5">
                    <span class="text-teal-700 self-start mb-5">Product Photo</span>
                    <div
                        class="w-full h-44 border border-teal-200 flex justify-center items-center rounded-md mb-5 gallery">

                    </div>
                    <div class="w-full text-green-100 bg-teal-500  hover:bg-teal-600  py-2">
                        <label for="image" class="w-full text-center inline-block">Add Photo</label>

                        <input type="file" name="" id="image" hidden>
                    </div>
                </div>

                <div class="w-full bg-teal-100 flex flex-col justify-center items-center rounded-md px-5 py-5">
                    <span class="text-teal-700 self-start mb-5">Category</span>


                    <div class="w-full relative custom-select">
                        <select
                            class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-md shadow-sm focus:outline-none focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50">
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
                    <!-- <div class="w-full relative">
                        <select
                            class="block appearance-none w-full bg-white border border-gray-300 px-4 py-2 pr-8 rounded-md shadow-sm focus:outline-none focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50">
                            <option value="1" style="background-color: transparent;" class="hover:bg-red-700">Option 1
                            </option>
                            <option value="2" style="background-color: transparent;" class="hover:bg-red-700">Option 2
                            </option>
                            <option value="3" style="background-color: transparent;" class="hover:bg-red-700">Option 3
                            </option>
                        </select>



                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-red-600">
                            <svg class="w-4 h-4 fill-current text-gray-500" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 12.586L5.707 8.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0l5-5a1 1 0 00-1.414-1.414L10 12.586z" />
                            </svg>
                        </div>
                    </div> -->

                </div>


            </div>
        </div>


</div>

</form>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

    var x, i, j, l, ll, selElmnt, a, b, c;
    /* Look for any elements with the class "custom-select": */
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /* For each element, create a new DIV that will act as the selected item: */
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /* For each element, create a new DIV that will contain the option list: */
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /* For each option in the original select element,
            create a new DIV that will act as an option item: */
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function (e) {
                /* When an item is clicked, update the original select box,
                and the selected item: */
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function (e) {
            /* When the select box is clicked, close any other select boxes,
            and open/close the current select box: */
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {
        /* A function that will close all select boxes in the document,
        except the current select box: */
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }

    /* If the user clicks anywhere outside the select box,
    then close all select boxes: */
    document.addEventListener("click", closeAllSelect);


    $(document).ready(function () {
        // console.log("hi")

        var previewimages = function (input, output) {
            // console.log(input.files);

            if (input.files) {
                var totalfiles = input.files.length;
                // console.log(totalfiles);

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
</script>