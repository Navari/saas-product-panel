@extends('layouts.master')
@section('content')
    @include('layouts.partials.breadcrumb', [ 'page_title' => 'Secenekler'])
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Ürün Seçenek Grupları</h4>
                    <button
                        class="btn btn-primary float-end waves-effect waves-light"
                        id="add-attribute"
                        data-bs-toggle="modal"
                        data-bs-target=".add-attribute-modal"
                    >Seçenek Grubu Ekle</button>
                    <p class="card-title-desc">Varyantli urunleriniz icin onceden tanimlanmis secenek gruplari.</p>

                    <table
                        id="datatable-buttons"
                        data-href="{{ route('ajax.attributes.list') }}"
                        class="table table-striped table-bordered dt-responsive nowrap auto-datatable"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;"
                    >
                        <thead>
                        <tr>
                            <th data-column="name">SEÇENEK GRUBU ADI</th>
                            <th data-column="options">SEÇENEKLER</th>
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
    <div class="modal fade add-attribute-modal" tabindex="-1" role="dialog"
         aria-labelledby="addAttributeLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAttributeLabel">Yeni Seçenek Grubu Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.attributes.store') }}" method="POST" id="attribute-save">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="attribute-name">SEÇENEK GRUBU ADI</label>
                                    <input type="text" class="form-control" id="attribute-name"
                                           placeholder="SEÇENEK GRUBU ADI" name="name">
                                    <p class="text-muted mb-3 font-14">
                                        Renk,beden,numara vb...
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="attribute-options">SEÇENEK GRUBU DEĞERLERI</label>
                                    <input type="text" class="form-control" id="attribute-options"
                                           placeholder="SEÇENEK GRUBU DEĞERLERI" name="options">
                                    <p class="text-muted mb-3 font-14">
                                        Örnek olarak Renk: Kırmızı, Sarı - Beden: S,M,L,XL - Numara:34,35,36 vb..
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="attribute-type">SEÇENEK GRUBU TIPI</label>
                                    <select class="form-control" name="type" id="attribute-type">
                                        <option value="select">Select</option>
                                        <option value="radio">Radio</option>
                                        <option value="checkbox">Checkbox</option>
                                        <option value="text">Text</option>
                                    </select>
                                    <p class="text-muted mb-3 font-14">
                                        Lutfen on tarafta nasil gozukecegini seciniz.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check form-switch mb-3">
                                            <input type="checkbox" class="form-check-input theme-choice" name="is_filterable" id="is-filtered" checked />
                                            <label class="form-check-label" for="is-filtered">Filtrelenebilir mi ?</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check form-switch mb-3">
                                            <input type="checkbox" class="form-check-input theme-choice" name="is_required" id="is-required" checked />
                                            <label class="form-check-label" for="is-required">Gerekli mi ?</label>
                                        </div>
                                    </div>
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
                    <button class="btn btn-primary btn-md" id="attribute-save-button" onclick="formSubmit('attribute-save', 'attribute-save-button', 'add-attribute-modal')">
                        <i class="mdi mdi-content-save"></i> Kaydet
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

