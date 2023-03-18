<div class="btn-group">
    <a href="javascript:void(0);"
       id="brand-edit-{{ $brand->id }}"
       onclick="formEdit(this)"
       data-form="#brand-edit-form-{{ $brand->id }}"
       data-modal=".edit-brand-modal-{{ $brand->id }}"
       data-update-url="{{ route('admin.brands.update', $brand) }}"
       data-href="{{ route('admin.brands.edit', $brand) }}"
       class="btn btn-primary btn-sm">
        <i class="fa fa-edit"></i>
    </a>
    <a href="javascript:void(0);" onclick="formDelete(this);" data-href="{{ route('admin.brands.destroy', $brand) }}" class="btn btn-danger btn-sm">
        <i class="fa fa-trash"></i>
    </a>
</div>
<div class="modal fade edit-brand-modal-{{ $brand->id }}" tabindex="-1" role="dialog"
     aria-labelledby="addbrandLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addbrandLabel">Marka Duzenle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="PUT" id="brand-edit-form-{{ $brand->id }}">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="brand-name">MARKA ADI</label>
                                <input type="text" class="form-control" id="brand-name"
                                       placeholder="Marka Adi" name="name">
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
                <button class="btn btn-primary btn-md" id="brand-edit-button-{{ $brand->id }}" onclick="formSubmit('brand-edit-form-{{ $brand->id }}', 'brand-edit-button-{{ $brand->id }}', 'edit-brand-modal-{{ $brand->id }}')">
                    <i class="mdi mdi-content-save"></i> Kaydet
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

