export default function Banner(props) {

  document.getElementById("banner").innerHTML = `

<section class="banner-area organic-breadcrumb">
<div class="container">
    <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
        <div class="col-first">
            <h1>`+props.title+`</h1>
            <nav class="d-flex align-items-center">
                
                <a href="category.html">`+props.url+`</a>
            </nav>
        </div>
    </div>
</div>
</section>
`;
}
