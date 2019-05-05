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
    /* classChange(btName); */

    if ($(this).is('#workBtn')) {
        $('#work').addClass('activePage');
        $('#work').removeClass('hidden');
    } else if ($(this).is('#aboutBtn')) {
        $('#about').addClass('activePage');
        $('#about').removeClass('hidden');
    } else if ($(this).is('#otherBtn')) {
        $('#about').addClass('activePage');
        $('#about').removeClass('hidden');
    }

    
    
    /* if(this.class); */
}
