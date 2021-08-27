/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$('.owl-carousel').owlCarousel({
    loop:true,
    margin:18,
    nav: false,
    pagination: true,
    autoplay: 100,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
})

