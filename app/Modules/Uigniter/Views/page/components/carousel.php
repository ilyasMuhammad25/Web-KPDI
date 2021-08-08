<?= $this->extend('Uigniter\Views\main'); ?>
<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-album icon-gradient bg-sunny-morning"></i>
                </div>
                <div>Carousels &amp; Slideshows
                    <div class="page-title-subheading">Create easy and beautiful slideshows with these React components.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                    <i class="fa fa-star"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-business-time fa-w-20"></i>
                        </span>
                        Buttons
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-inbox"></i>
                                    <span>
                                        Inbox
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-book"></i>
                                    <span>
                                        Book
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-picture"></i>
                                    <span>
                                        Picture
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a disabled class="nav-link disabled">
                                    <i class="nav-link-icon lnr-file-empty"></i>
                                    <span>
                                        File Disabled
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                <span>Slideshow</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                <span>Carousel</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Full width Slider</h5>
                            <div class="slick-slider">
                                <div>
                                    <div class="slider-item">1</div>
                                </div>
                                <div>
                                    <div class="slider-item">2</div>
                                </div>
                                <div>
                                    <div class="slider-item">3</div>
                                </div>
                                <div>
                                    <div class="slider-item">4</div>
                                </div>
                                <div>
                                    <div class="slider-item">5</div>
                                </div>
                                <div>
                                    <div class="slider-item">6</div>
                                </div>
                                <div>
                                    <div class="slider-item">7</div>
                                </div>
                                <div>
                                    <div class="slider-item">8</div>
                                </div>
                                <div>
                                    <div class="slider-item">9</div>
                                </div>
                                <div>
                                    <div class="slider-item">10</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Multiple Items</h5>
                            <div class="slick-slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
                                <div>
                                    <div class="slider-item">1</div>
                                </div>
                                <div>
                                    <div class="slider-item">2</div>
                                </div>
                                <div>
                                    <div class="slider-item">3</div>
                                </div>
                                <div>
                                    <div class="slider-item">4</div>
                                </div>
                                <div>
                                    <div class="slider-item">5</div>
                                </div>
                                <div>
                                    <div class="slider-item">6</div>
                                </div>
                                <div>
                                    <div class="slider-item">7</div>
                                </div>
                                <div>
                                    <div class="slider-item">8</div>
                                </div>
                                <div>
                                    <div class="slider-item">9</div>
                                </div>
                                <div>
                                    <div class="slider-item">10</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Center Mode</h5>
                            <div class="slick-slider-2">
                                <div>
                                    <div class="slider-item">1</div>
                                </div>
                                <div>
                                    <div class="slider-item">2</div>
                                </div>
                                <div>
                                    <div class="slider-item">3</div>
                                </div>
                                <div>
                                    <div class="slider-item">4</div>
                                </div>
                                <div>
                                    <div class="slider-item">5</div>
                                </div>
                                <div>
                                    <div class="slider-item">6</div>
                                </div>
                                <div>
                                    <div class="slider-item">7</div>
                                </div>
                                <div>
                                    <div class="slider-item">8</div>
                                </div>
                                <div>
                                    <div class="slider-item">9</div>
                                </div>
                                <div>
                                    <div class="slider-item">10</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Variable Width</h5>
                            <div class="slick-slider-variable">
                                <div>
                                    <div class="slider-item" style="width: 100px">
                                        <p>100</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="slider-item" style="width: 200px">
                                        <p>200</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="slider-item" style="width: 75px">
                                        <p>75</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="slider-item" style="width: 300px">
                                        <p>300</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="slider-item" style="width: 225px">
                                        <p>225</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="slider-item" style="width: 175px">
                                        <p>175</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Responsive</h5>
                            <div class="slick-slider-responsive">
                                <div>
                                    <div class="slider-item">1</div>
                                </div>
                                <div>
                                    <div class="slider-item">2</div>
                                </div>
                                <div>
                                    <div class="slider-item">3</div>
                                </div>
                                <div>
                                    <div class="slider-item">4</div>
                                </div>
                                <div>
                                    <div class="slider-item">5</div>
                                </div>
                                <div>
                                    <div class="slider-item">6</div>
                                </div>
                                <div>
                                    <div class="slider-item">7</div>
                                </div>
                                <div>
                                    <div class="slider-item">8</div>
                                </div>
                                <div>
                                    <div class="slider-item">9</div>
                                </div>
                                <div>
                                    <div class="slider-item">10</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Inverted + Images</h5>
                            <div class="slider-light">
                                <div class="slick-slider-inverted">
                                    <div class="p-5 bg-plum-plate">
                                        <div class="slider-content">
                                            <h3>Perfect Balance</h3>
                                            <p>
                                                UIgniter is like a dream. Some think it's too good to be true! Extensive collection of unified React Boostrap Components and Elements.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="p-5 bg-premium-dark">
                                        <div class="slider-content">
                                            <h3>Scalable, Modular, Consistent</h3>
                                            <p>
                                                Easily exclude the components you don't require. Lightweight, consistent
                                                Bootstrap based styles across all elements and components
                                            </p>
                                        </div>
                                    </div>
                                    <div class="p-5 bg-sunny-morning">
                                        <div class="slider-content">
                                            <h3>Complex, but lightweight</h3>
                                            <p>
                                                We've included a lot of components that cover almost all use cases for
                                                any type of application.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Basic Bootstrap 4 Carousel</h5>
                            <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://via.placeholder.com/800x400" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://via.placeholder.com/800x400" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://via.placeholder.com/800x400" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Carousel with Captions</h5>
                            <div id="carouselExampleControls2" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://via.placeholder.com/800x400" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>First Slide</h5>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://via.placeholder.com/800x400" alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Second Slide</h5>
                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://via.placeholder.com/800x400" alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Third Slide</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection('page'); ?>