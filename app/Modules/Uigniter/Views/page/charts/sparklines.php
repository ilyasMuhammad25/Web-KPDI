<?= $this->extend('Uigniter\Views\main'); ?>
<?= $this->section('page'); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-pendrive icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Sparklines
                    <div class="page-title-subheading">Use these Sparklines charts inside other components or on their own.</div>
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
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Simple Sparklines</h5>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="bar-sparkline mx-auto"></div>
                </div>
                <div class="col-md-4">
                    <div class="bar-sparkline-2 mx-auto">1,2,4,6,9,4,4,3,1,7,2,4,6,9,4,4,3,1,7,5,9,10</div>
                </div>
                <div class="col-md-4">
                    <div class="dynamic-sparkline mx-auto">Loading...</div>
                </div>
                <div class="col-md-4">
                    <div class="tristate-sparkline mx-auto">2,4,6,-4,-2,0,5,7,10,-4,-10,0,0,2,4,-5,4</div>
                </div>
                <div class="col-md-4">
                    <div class="discrete-sparkline mx-auto">1,2,4,6,9,4,4,3,1,7,2,4,6,9,4,4,3,1,7,5,9,10,1,2,4,6,9,4,4,3,1,7,2,4,6,9,4,4,3,1,7,5,9,10</div>
                </div>
                <div class="col-md-4">
                    <div class="pie-sparkline mx-auto">2,4,6,9,4</div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="card-title">ApexCharts Sparklines</div>
            <table class="table table-bordered table-hover table-stripe">
                <thead>
                    <th>Total Value</th>
                    <th>Percentage of Portfolio</th>
                    <th>Last 10 days</th>
                    <th>Volume</th>
                </thead>
                <tbody>
                    <tr>
                        <td>$32,554</td>
                        <td>15%</td>
                        <td>
                            <div id="sparkline-chart1"></div>
                        </td>
                        <td>
                            <div id="sparkline-chart5"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>$23,533</td>
                        <td>7%</td>
                        <td>
                            <div id="sparkline-chart2"></div>
                        </td>
                        <td>
                            <div id="sparkline-chart6"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>$54,276</td>
                        <td>9%</td>
                        <td>
                            <div id="sparkline-chart3"></div>
                        </td>
                        <td>
                            <div id="sparkline-chart7"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>$11,533</td>
                        <td>2%</td>
                        <td>
                            <div id="sparkline-chart4"></div>
                        </td>
                        <td>
                            <div id="sparkline-chart8"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?= $this->endSection('page'); ?>