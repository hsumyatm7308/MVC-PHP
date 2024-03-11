<?php require APPROOT . '/views/layouts/header.php'; ?>
<?php require APPROOT . '/views/layouts/sidebar.php'; ?>


<style>
    .gallery {

        width: 100%;

        height: 500px;

        background-color: #1d283c;
        color: #ffff;
        text-align: center;
        padding: 10px;
        margin: auto;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .removetext span {
        display: none;
    }

    .gallery img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border: 2px dashed #aaa;
        border-radius: 10px;
        padding: 5px;
        margin: 0 5px;
    }
</style>



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
</div>






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

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