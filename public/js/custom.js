//Changing filename in custom-file-label when file selected
let customFileInputs = document.querySelectorAll('.custom-file-input');
if(customFileInputs) {
    Array.from(customFileInputs).forEach(customFileInput => {
        customFileInput.addEventListener('change', function (e) {
            var nextSibling = e.target.nextElementSibling
            if(nextSibling) {
                nextSibling.innerText = e.target.files[0].name;
            }
        });
    });
}

//Crop image and save through api
function imageFileInputCropper(imageFileInput, modalImageElement, modalElement, aspectRatio,previewElement) {
    //Load modal with selected image file
    let loadImage = function(modalImage, modal, url) {
        modalImage.src = url;
        modal.modal('show');

        //Initiate CropperJS when modal showsup
        let onModalCropperShow = function(modal, modalImage) {
            let cropper;
            modal.on('shown.bs.modal', function () {
                cropper = new Cropper(modalImage, {
                aspectRatio: aspectRatio,
                viewMode: 1,
                preview: previewElement
                });
            }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
            });
        }

        onModalCropperShow(modal, modalImage);
    } 

    imageFileInput.addEventListener('change', function(e) {
        let files = e.target.files;
        if(files &&  files.length > 0) {
            let file = files[0];
            if(URL) {
                loadImage(modalImageElement, modalElement, URL.createObjectURL(file));
            } else if(FileReader) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    loadImage(modalImageElement, modalElement, reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    });
}


//Profile cropping image
var $modalProfileImageCropper = $('#modalProfileImageCropper')
if($modalProfileImageCropper) {

    //file input for profile
    let profileImageFileInput = document.getElementById('profile_image_filename');

    //image element for profile image
    let profileImage = document.getElementById('profileImage');

    //image element for modal image cropping
    let profileModalImage = document.getElementById('profileModalImage');

    //preview element
    let previewElement = document.getElementById('profileImagePreview');
    imageFileInputCropper(profileImageFileInput, profileModalImage, $modalProfileImageCropper, 9 / 3, previewElement);
}




