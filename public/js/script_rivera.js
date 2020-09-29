$(document).ready(function () {

    /* alert("La resolución de tu pantalla es: " + screen.width + " x " + screen.height); */

    /* TOGGLE MENU */
    $("#toggle_menu").on('click', () => {
        /* $('.menu_area').toggleClass('active'); */
        $('.menu_area').addClass('active');
    });
    $("#toggle_menu_close").on('click', () => {
        $('.menu_area').removeClass('active');
    });

    /* VALIDATE FORM */
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    /* UPLOAD IMAGE */
    $(function () {
        $('#img_1').change(function (e) {
            addImage_01(e);
        });

        function addImage_01(e) {
            var file = e.target.files[0],
                imageType = /image.*/;

            if (!file.type.match(imageType))
                return;

            var reader = new FileReader();
            reader.onload = fileOnload;
            reader.readAsDataURL(file);
        }

        function fileOnload(e) {
            var result = e.target.result;
            $('#img_output_01').attr("src", result);
        }
    });
    $(function () {
        $('#img_2').change(function (e) {
            addImage_02(e);
        });

        function addImage_02(e) {
            var file = e.target.files[0],
                imageType = /image.*/;

            if (!file.type.match(imageType))
                return;

            var reader = new FileReader();
            reader.onload = fileOnload;
            reader.readAsDataURL(file);
        }

        function fileOnload(e) {
            var result = e.target.result;
            $('#img_output_02').attr("src", result);
        }
    });
    $(function () {
        $('#img_3').change(function (e) {
            addImage_03(e);
        });

        function addImage_03(e) {
            var file = e.target.files[0],
                imageType = /image.*/;

            if (!file.type.match(imageType))
                return;

            var reader = new FileReader();
            reader.onload = fileOnload;
            reader.readAsDataURL(file);
        }

        function fileOnload(e) {
            var result = e.target.result;
            $('#img_output_03').attr("src", result);
        }
    });

    /* HOVER CHILD EFFECT BLUR DAD*/
    $("#item_start_blur_dad_1").hover(function () {
        $("#item_dad_1").toggleClass("bg__blur");
    });
    $("#item_start_blur_dad_2").hover(function () {
        $("#item_dad_2").toggleClass("bg__blur");
    });
    $("#item_start_blur_dad_3").hover(function () {
        $("#item_dad_3").toggleClass("bg__blur");
    });
});
