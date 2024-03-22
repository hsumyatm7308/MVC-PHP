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




//Start Edit 

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
                const image = productlist.children[1].children[0].children[0].src = "http://localhost/mvc/mvcdashboard" + responseData['image'];
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


// End Edit



// Start Delete
const deletebtn = document.querySelectorAll('.delete_btn');
deletebtn.forEach(btn => {
    btn.addEventListener('click', (e) => {


        const deletemodal = document.getElementById('deletemodal')
        deletemodal.classList.toggle('hidden');

        const getid = e.target.getAttribute('data-id')

        deletemodal.setAttribute('data-id', getid);


    })

});


const deletemodalbtn = document.querySelector('.deletemodal_btn');
deletemodalbtn.addEventListener('click', () => {
    const deletemodal = document.getElementById('deletemodal')
    const getid = deletemodal.getAttribute('data-id');

    deletedata(getid).then((reponse) => {
        console.log(reponse)
    });

});


async function deletedata(getid) {

    let newpromise = new Promise((resolve, reject) => {

        var xmlhttp = new XMLHttpRequest();
        var url = `http://localhost/mvc/mvcdashboard/productpage/destroy`;
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = function (e) {
            if (xmlhttp.readyState == 4) {
                if (xmlhttp.status == 200) {
                    var result = xmlhttp.responseText;
                    // console.log(result)
                }
            }
        };

        const deletetext = document.querySelector('.delte_text');
        deletetext.innerHTML = `
                    
                        <div class="w-full px-5 space-y-5 ">
                            <div class="flex justify-center items-center">
                                You are now deleting
                            </div>
                            <div class="w-full h-3 bg-slate-200">
                                <div class="w-full h-full bg-gradient"></div>
                            </div>
                        </div>
                            
                    `;

        let progresselement = document.querySelector('.bg-gradient');
        let initialwidth = parseFloat(window.getComputedStyle(progresselement).width);
        let finalwidth = 100;
        let increment = (finalwidth - initialwidth) / 50;
        let currentwidth = initialwidth;

        function increasewidth() {
            currentwidth += increment;
            progresselement.style.width = currentwidth + '%';

            if (currentwidth < finalwidth) {
                const settimeout = setTimeout(increasewidth, 30);

                const cancledelete = document.querySelector('.cancledelete');
                cancledelete.addEventListener('click', () => {
                    clearTimeout(settimeout)
                })

            } else {

                // after delete animation 
                resolve('hello wold');
                deletetext.innerHTML = ` 
                            <div class="w-full font-normal ">
                                <span>This will delete your product.</span>
                                <p>Are you sure?</p>

                            </div>`;
                const deletemodal = document.getElementById('deletemodal');
                deletemodal.classList.toggle('hidden');


                let productlist = document.querySelector('.product_list' + getid);
                productlist.remove();

                var data = `id=${getid}`;
                xmlhttp.send(data);


            }
        }


        increasewidth();

    });


    return await newpromise;




}

// End Delete 