<?php require APPROOT . '/views/layouts/header.php'; ?>
<?php require APPROOT . '/views/layouts/sidebar.php'; ?>


<style>
    .gallery {

        width: 100%;

        height: 500px;

        background-color: #aaa;
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

            <div class="w-full grid grid-cols-3 gap-5">
                <div class="w-full mb-3 bg-blue-400 mt-6">
                    <label for="image" class="gallery h-full">Choose Image</label>

                    <input type="file" name="image" id="image" class="" placeholder="Enter your image"
                        value="{{old('image')}}" hidden />
                </div>

                <div class="col-span-2 ">
                    <form action="" class="w-full ">

                        <div class="w-full text-gray-200 grid grid-cols-2 gap-5">
                            <div class="flex flex-col justify-s items-start ">
                                <label for="">Title</label>
                                <input type="text" class="w-full p-3" placeholder="Enter your title">
                            </div>

                            <div class="flex flex-col justify-s items-start ">
                                <label for="">Title</label>
                                <input type="text" class="w-full p-3" placeholder="Enter your title">
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
                    var filereader = new FileReader(); filereader.onload = function (e) {
                        $(output).html(""); $($.parseHTML("<img>")).attr("src", e.target.result).appendTo(output);
                    }
                    filereader.readAsDataURL(input.files[i]);
                }
            }
        };

        // for single image

        $("#image").change(function () {
            previewimages(this, ".gallery");
        })

    });
</script>