export function CardProduct (img,id,name,price,soldprice)
{
    return `<div class="col-lg-4 col-md-6">
    <div class="single-product">
        <img class="img-fluid" src="`+img+`" alt="">
        <div class="product-details">
            <h6>`+name+`</h6>
            <div class="price">
                <h6>`+soldprice+`</h6>
                <h6 class="l-through">`+price+`</h6>
            </div>
            <div class="prd-bottom">

                <a href="" class="social-info">
                    <span class="ti-bag"></span>
                    <p class="hover-text" id = `+id+`>add to bag</p>
                </a>
                <a href="" class="social-info">
                    <span class="lnr lnr-heart"></span>
                    <p class="hover-text">Wishlist</p>
                </a>
                <a href="" class="social-info">
                    <span class="lnr lnr-move"></span>
                    <p class="hover-text">view more</p>
                </a>
            </div>
        </div>
    </div>
</div>`

}