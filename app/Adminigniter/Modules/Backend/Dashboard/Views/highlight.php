<?= $this->extend('\hamkamannan\adminigniter\Views\layout\backend\main'); ?>
<?= $this->section('page'); ?>
<div class="app-main__inner">
<div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph1 icon-gradient bg-strong-bliss"></i>
                </div>
                <div>Highlight Dashboard
                    <div class="page-title-subheading">Dashboard</div>
                </div>
            </div>
            <div class="page-title-actions">
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('auth') ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="active breadcrumb-item" aria-current="page">Highlight</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="tabs-animation">
        <div class="mbg-3 h-auto pl-0 pr-0 bg-transparent no-border card-header">
            <div class="card-header-title fsize-2 text-capitalize font-weight-normal">Bahan Baku per 4 Pilar</div>
            <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                <button class="btn btn-link btn-sm">Selengkapnya</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content bg-success">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Bioteknologi</div>
                            <div class="widget-subheading">Total semua Bioteknologi</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>1896</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content bg-info">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Vaksin</div>
                            <div class="widget-subheading">Total semua Vaksin</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>568</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content bg-warning">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Natural</div>
                            <div class="widget-subheading">Total semua Natural</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>436</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content bg-danger">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Kimia</div>
                            <div class="widget-subheading">Total semua Kimia</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>123</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mbg-3 h-auto pl-0 pr-0 bg-transparent no-border card-header">
            <div class="card-header-title fsize-2 text-capitalize font-weight-normal">Pengembangan Bahan Baku per Industri</div>
            <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                <button class="btn btn-link btn-sm">Selengkapnya</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="card-hover-shadow-2x mb-3 card">
                    <div class="rm-border responsive-center text-left card-header">
                        <div>
                            <h5 class="menu-header-title text-capitalize text-success">Industri Farmasi Bahan Baku</h5>
                        </div>
                    </div>
                    <div class="widget-chart widget-chart2 text-left pt-0">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-chart-flex">
                                    <div class="widget-numbers">
                                        <div class="widget-chart-flex">
                                            <div class="text-success"><span>348</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                                <div id="dashboard-sparkline-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="card-hover-shadow-2x mb-3 card">
                    <div class="rm-border responsive-center text-left card-header">
                        <div>
                            <h5 class="menu-header-title text-capitalize text-danger">Industri Farmasi Formulasi</h5>
                        </div>
                    </div>
                    <div class="widget-chart widget-chart2 text-left pt-0">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-chart-flex">
                                    <div class="widget-numbers">
                                        <div class="widget-chart-flex">
                                            <div class="text-danger"><span>425</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                                <div id="dashboard-sparkline-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mbg-3 h-auto pl-0 pr-0 bg-transparent no-border card-header">
            <div class="card-header-title fsize-2 text-capitalize font-weight-normal">Progress Pengembangan</div>
            <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                <button class="btn btn-link btn-sm">Selengkapnya</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Pengembangan Bahan Baku
                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">
                                <button class="active btn btn-focus">Minggu Ini</button>
                                <button class="btn btn-focus">Bulan Ini</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Nama Industri</th>
                                    <th class="text-center">Nama Bahan Baku</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Status Pengembangan</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center text-muted">#321</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="<?= base_url('themes/uigniter'); ?>/images/avatars/2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">Industri Farmasi 1</div>
                                                    <div class="widget-subheading opacity-7">Keterangan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">Erythropoetin</td>
                                    <td class="text-center">
                                        <div class="badge badge-danger">Bioteknologi</div>
                                    </td>
                                    <td class="text-center">Inisiasi</td>
                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Detail</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center text-muted">#321</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="<?= base_url('themes/uigniter'); ?>/images/avatars/2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">Industri Farmasi 1</div>
                                                    <div class="widget-subheading opacity-7">Keterangan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">IPV</td>
                                    <td class="text-center">
                                        <div class="badge badge-success">Vaksin</div>
                                    </td>
                                    <td class="text-center">Inisiasi</td>
                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Detail</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center text-muted">#321</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="<?= base_url('themes/uigniter'); ?>/images/avatars/2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">Industri Farmasi 1</div>
                                                    <div class="widget-subheading opacity-7">Keterangan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">Rifampisin</td>
                                    <td class="text-center">
                                        <div class="badge badge-warning">Kimia</div>
                                    </td>
                                    <td class="text-center">Inisiasi</td>
                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Detail</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center text-muted">#321</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="<?= base_url('themes/uigniter'); ?>/images/avatars/2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">Industri Farmasi 1</div>
                                                    <div class="widget-subheading opacity-7">Keterangan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">Erythropoetin</td>
                                    <td class="text-center">
                                        <div class="badge badge-danger">Bioteknologi</div>
                                    </td>
                                    <td class="text-center">Inisiasi</td>
                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Detail</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center text-muted">#321</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="<?= base_url('themes/uigniter'); ?>/images/avatars/2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">Industri Farmasi 1</div>
                                                    <div class="widget-subheading opacity-7">Keterangan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">Ekstrak Jahe</td>
                                    <td class="text-center">
                                        <div class="badge badge-info">Natural</div>
                                    </td>
                                    <td class="text-center">Inisiasi</td>
                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Detail</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-block p-4 text-center card-footer">
                        <button class="btn-pill btn-shadow btn-wide fsize-1 btn btn-dark btn-lg">
                            <span class="mr-2 opacity-7"><i class="fa fa-bar-chart"></i>
                            </span>
                            <span class="mr-1">Lihat Selengkapnya</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('page'); ?>