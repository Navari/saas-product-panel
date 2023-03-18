@extends('layouts.master')
@section('content')
    @include('layouts.partials.breadcrumb', [ 'page_title' => 'Etiketler'])
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Etiketler</h4>
                    <button
                        class="btn btn-primary float-end waves-effect waves-light"
                        id="add-attribute"
                        data-bs-toggle="modal"
                        data-bs-target=".add-tag-modal"
                    >Etiket Ekle</button>
                    <p class="card-title-desc">Etiket Listesi.</p>

                    <table
                        id="datatable-buttons"
                        data-href="{{ route('ajax.tags.list') }}"
                        class="table table-striped table-bordered dt-responsive nowrap auto-datatable"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;"
                    >
                        <thead>
                        <tr>
                            <th data-column="name">ETİKET</th>
                            <th data-column="color">RENK</th>
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
    <div class="modal fade add-tag-modal" tabindex="-1" role="dialog"
         aria-labelledby="addtagLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addtagLabel">Yeni Etiket Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.tags.store') }}" method="POST" id="tag-save">
                        <div class="row">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="tag-name">ETIKET ADI</label>
                                    <input type="text" class="form-control" id="tag-name"
                                           placeholder="ETIKET ADI" name="name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="tag-color">RENK</label>
                                    <input type="color" class="form-control form-control-color" id="tag-color"
                                           placeholder="RENK" name="color">
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
                    <button class="btn btn-primary btn-md" id="tag-save-button" onclick="formSubmit('tag-save', 'tag-save-button', 'add-tag-modal')">
                        <i class="mdi mdi-content-save"></i> Kaydet
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

