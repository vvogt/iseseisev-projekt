/*jshint esversion: 6*/

window.onload = function(){
    $('.selectBtn').click(setActive);
    
    $('.arrow').click(changePic);
    $(document).keyup(function (event) {
        if (event.which == 39) {
            $('#L-arrow').trigger('click');
        } else if (event.which == 37) {
            $('#R-arrow').trigger('click');
        }
    });
};

/* function classChange(btName) {
    $(btnName).addClass('activePage');
    $(btName).removeClass('hidden');
} */

function changePic(event) {
    
    let currentImgNum = getCurrentImgNum();
    currentImgNum = currentImgNum.split('.');
/*     let currentImgType = currentImgNum[1]; */
    currentImgNum = currentImgNum[0];

    if($(this).is('#L-arrow')){
       
        currentImgNum --;
       
        if (currentImgNum == 0) {
            currentImgNum = $(".gallery").children().length;
        }

        showPic(currentImgNum);

    } else {
        currentImgNum++;

        if (currentImgNum == $(".gallery").children().length) {
            currentImgNum = 1;
            console.log(currentImgNum);
        }

        showPic(currentImgNum);   
    }

    function getCurrentImgNum() {
        //get current image num
        let currentImgPath = $('.selectedPic').attr('src');
        let currentImgNum = currentImgPath.split('_');
        currentImgNum = currentImgNum[2];
        return currentImgNum;
    }

    

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
    
    let thumbPath = $('.gallery #img' + picId).attr('src');

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

function hideLightbox(e) {
    if ($(e.target).attr('class') == 'lightBox') {
        $('.lightBox').css('display', 'none');
        $('.selectedPic').attr('src', '');
    }
}
