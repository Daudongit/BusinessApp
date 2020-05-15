<template>
    <!--Service Near you Product Widgets -->
    <section class="product-widget  mt-5  mb-5">
        <div class="header-title pb-2 mb-3">
            <span class="intro-title">{{title}}</span>
            <small class="ml-1 sub-intro"><a href="#">view all services</a> </small>

            <span class="text-right float-right">
                <img src="/assets/img/chevron-left.png" alt="" :class="`${selector}-chevron-button-prev`">
                <img src="/assets/img/chevron-right.png" alt="" :class="`${selector}-chevron-button-next`">
            </span>
        </div>
        <!-- Swiper -->
        <div :class="`swiper-container swiper-${selector}`">
            <div class="swiper-wrapper">
                <div class="swiper-slide" v-for="(item, key) in items[type]" :key="key">
                    <template v-if="type == 'products'">
                        <product-item :product="item"/>
                    </template>
                    <template v-if="type == 'services'">
                        <service-item :service="item"/>
                    </template>
                </div>
            </div> 
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- End service near product Widget -->
</template>

<script>
    import ProductItem from '~/components/ProductItem'
    import ServiceItem from '~/components/ServiceItem'

    export default {
        name: 'ItemsWidget',
        components:{ProductItem,ServiceItem},
        props: {
            type: {
                type: String,
                default: 'service'
            },
            selector: {
                type: String,
                default: 'nearbyservice'
            },
            title: {
                type: String,
                default: 'Services near you'
            },
        },
        data: () => ({
            items:{
                services:[
                    {views:'1.7K',imgUrl:'mary-ann.png',title:'Mary-Anne Da Costa',category:'Architects, Builders and Planners',location:'Port Harcourt',distance:'0.2 Km'},
                    {views:'166',imgUrl:'ruby.png',title:'Ruby Fashion House',category:'Architects, Builders and Planners',location:'Port Harcourt',distance:'0.2 Km'},
                    {views:'1.7K',imgUrl:'mary-ann.png',title:'Mary-Anne Da Costa',category:'Architects, Builders and Planners',location:'Port Harcourt',distance:'0.2 Km'},
                    {views:'166',imgUrl:'ruby.png',title:'Ruby Fashion House',category:'Architects, Builders and Planners',location:'Port Harcourt',distance:'0.2 Km'},
                    {views:'1.7K',imgUrl:'mary-ann.png',title:'Mary-Anne Da Costa',category:'Architects, Builders and Planners',location:'Port Harcourt',distance:'0.2 Km'},
                    {views:'166',imgUrl:'ruby.png',title:'Ruby Fashion House',category:'Architects, Builders and Planners',location:'Port Harcourt',distance:'0.2 Km'},
                    {views:'1.7K',imgUrl:'mary-ann.png',title:'Mary-Anne Da Costa',category:'Architects, Builders and Planners',location:'Port Harcourt',distance:'0.2 Km'},
                    {views:'166',imgUrl:'ruby.png',title:'Ruby Fashion House',category:'Architects, Builders and Planners',location:'Port Harcourt',distance:'0.2 Km'},
                    {views:'1.7K',imgUrl:'mary-ann.png',title:'Mary-Anne Da Costa',category:'Architects, Builders and Planners',location:'Port Harcourt',distance:'0.2 Km'},
                    {views:'166',imgUrl:'ruby.png',title:'Ruby Fashion House',category:'Architects, Builders and Planners',location:'Port Harcourt',distance:'0.2 Km'}
                ],
                products:[
                    {imgUrl:'generator.png',percent:'-16%',title:'Lucidia Stores',sub_title:'Lutian Power Generator',des:'Wigs for Classy Women OMG',price:'N49,999',discounted:'N59,999'},
                    {imgUrl:'sneakers.png',percent:'-16%',title:'Nike stores',sub_title:'Soft Leather Shoes',des:'Unisex, retro-sports shoe',price:'N49,999',discounted:'N59,999'},
                    {imgUrl:'bag.png',percent:'-16%',title:'Gucci stores',sub_title:'Soft Leather Bags',des:'Female, Handbag, Leather bag',price:'N49,999',discounted:'N59,999'},
                    {imgUrl:'bag.png',percent:'-16%',title:'Obiro Fashion House',sub_title:'Dark Eye Glasses',des:'Female, Glasses, Dark Glasses',price:'N49,999',discounted:'N59,999'},
                    {imgUrl:'generator.png',percent:'-16%',title:'Lucidia Stores',sub_title:'Lutian Power Generator',des:'Wigs for Classy Women OMG',price:'N49,999',discounted:'N59,999'},
                    {imgUrl:'sneakers.png',percent:'-16%',title:'Nike stores',sub_title:'Soft Leather Shoes',des:'Unisex, retro-sports shoe',price:'N49,999',discounted:'N59,999'},
                    {imgUrl:'bag.png',percent:'-16%',title:'Gucci stores',sub_title:'Soft Leather Bags',des:'Female, Handbag, Leather bag',price:'N49,999',discounted:'N59,999'},
                    {imgUrl:'bag.png',percent:'-16%',title:'Obiro Fashion House',sub_title:'Dark Eye Glasses',des:'Female, Glasses, Dark Glasses',price:'N49,999',discounted:'N59,999'},
                    {imgUrl:'generator.png',percent:'-16%',title:'Lucidia Stores',sub_title:'Lutian Power Generator',des:'Wigs for Classy Women OMG',price:'N49,999',discounted:'N59,999'},
                    {imgUrl:'sneakers.png',percent:'-16%',title:'Nike stores',sub_title:'Soft Leather Shoes',des:'Unisex, retro-sports shoe',price:'N49,999',discounted:'N59,999'},
                    {imgUrl:'bag.png',percent:'-16%',title:'Gucci stores',sub_title:'Soft Leather Bags',des:'Female, Handbag, Leather bag',price:'N49,999',discounted:'N59,999'},
                    {imgUrl:'bag.png',percent:'-16%',title:'Obiro Fashion House',sub_title:'Dark Eye Glasses',des:'Female, Glasses, Dark Glasses',price:'N49,999',discounted:'N59,999'}
                ]
            }
        }),
        mounted(){
            var swiper = new Swiper(`.swiper-${this.selector}`, {
                slidesPerView: 2,
                spaceBetween: 5,
                loop: false,
                // init: false,
                // pagination: {
                //     el: '.swiper-pagination',
                //     clickable: true,
                // },

                // Navigation arrows
                navigation: {
                    nextEl: `.${this.selector}-chevron-button-next`,
                    prevEl: `.${this.selector}-chevron-button-prev`,
                },

                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 5,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 5,
                    },
                    1024: {
                        slidesPerView: 6,
                        spaceBetween: 5,
                    },
                }
            });
        }
    }
</script>