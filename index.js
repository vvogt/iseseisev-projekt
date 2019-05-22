/*jshint esversion: 6*/

window.onload = function(){
    $('.selectBtn').click(setActive);
};

function classChange(btName) {
    $(btnName).addClass('activePage');
    $(btName).removeClass('hidden');
}

function setActive(event){
    if(!$(this).hasClass('active')){
        $('.selectBtn').removeClass('active');
        $(this).addClass('active');
        $('.activePage').removeClass('activePage');
    }

    $('section').addClass('hidden');

    if ($(this).is('#workBtn')) {
        $('#work').addClass('activePage');
        $('#work').removeClass('hidden');
    } else if ($(this).is('#aboutBtn')) {
        $('#about').addClass('activePage');
        $('#about').removeClass('hidden');
    } else if ($(this).is('#contactBtn')) {
        $('#contact').addClass('activePage');
        $('#contact').removeClass('hidden');
    }
}

function showPic(picId) {
    $('.lightBox').css('display', 'flex');

    let thumbPath = $('.gallery #' + picId).attr('src');
    let imagePath = thumbPath.replace("thumbnails/thumb_", "work/");
    $('.selectedPic').attr('src', imagePath);

    let currentImg = new Image();
    currentImg.src = imagePath;
    currentImg.onload = function () {
        let height = currentImg.height;
        let width = currentImg.width;
        
        if (width > height) {
            $('.selectedPic').css('width', '80vw');
            $('.selectedPic').css('height', 'auto');
            $('.selectedPic').css('max-width', width + 'px');
        } else {
            $('.selectedPic').css('height', '80vh');
            $('.selectedPic').css('width', 'auto');
            $('.selectedPic').css('max-height', height + 'px');
        }
    };
    
}

function hideLightbox() {
    $('.lightBox').css('display', 'none');
    $('.selectedPic').attr('src', '');
}
