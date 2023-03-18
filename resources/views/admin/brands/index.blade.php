@extends('layouts.master')
@section('content')
    @include('layouts.partials.breadcrumb', [ 'page_title' => 'Markalar'])
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Markalar</h4>
                    <button
                        class="btn btn-primary float-end waves-effect waves-light"
                        id="add-attribute"
                        data-bs-toggle="modal"
                        data-bs-target=".add-brand-modal"
                    >Marka Ekle</button>
                    <p class="card-title-desc">Kategori bazli marka listesi.</p>

                    <table
                        id="datatable-buttons"
                        data-href="{{ route('ajax.brands.list') }}"
                        class="table table-striped table-bordered dt-responsive nowrap auto-datatable"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;"
                    >
                        <thead>
                        <tr>
                            <th data-column="name">MARKA ADI</th>
                            <th data-column="sync_statuses">EŞİTLEME DURUMLARI</th>
                            <th data-column="created_at">OLUSTURULMA TARİHİ</th>
                            <th data-column="updated_at">GÜNCELLEME TARİHİ</th>
                            <th data-column="actions">İŞLEMLER</th>
                        </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <div class="modal fade add-brand-modal" tabindex="-1" role="dialog"
         aria-labelledby="addBrandLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBrandLabel">Yeni Marka Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.brands.store') }}" method="POST" id="brand-save">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="brand-name">MARKA ADI</label>
                                    <input type="text" class="form-control" id="brand-name"
                                           placeholder="MARKA ADI" name="name">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-md"
                            data-bs-dismiss="modal">
                        <i class="mdi mdi-close"></i> Kapat
                    </button>
                    <button class="btn btn-primary btn-md" id="brand-save-button" onclick="formSubmit('brand-save', 'brand-save-button', 'add-brand-modal')">
                        <i class="mdi mdi-content-save"></i> Kaydet
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

