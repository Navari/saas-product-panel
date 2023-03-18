<div class="btn-group">
    <a href="javascript:void(0);"
       id="attribute-edit-{{ $attribute->id }}"
       onclick="formEdit(this)"
       data-form="#attribute-edit-form-{{ $attribute->id }}"
       data-modal=".edit-attribute-modal-{{ $attribute->id }}"
       data-update-url="{{ route('admin.attributes.update', $attribute) }}"
       data-href="{{ route('admin.attributes.edit', $attribute) }}"
       class="btn btn-primary btn-sm">
        <i class="fa fa-edit"></i>
    </a>
    <a href="javascript:void(0);" onclick="formDelete(this);" data-href="{{ route('admin.attributes.destroy', $attribute) }}" class="btn btn-danger btn-sm">
        <i class="fa fa-trash"></i>
    </a>
</div>
<div class="modal fade edit-attribute-modal-{{ $attribute->id }}" tabindex="-1" role="dialog"
     aria-labelledby="addAttributeLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAttributeLabel">Seçenek Grubu Duzenle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="PUT" id="attribute-edit-form-{{ $attribute->id }}">
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
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-md"
                        data-bs-dismiss="modal">
                    <i class="mdi mdi-close"></i> Kapat
                </button>
                <button class="btn btn-primary btn-md" id="attribute-edit-button-{{ $attribute->id }}" onclick="formSubmit('attribute-edit-form-{{ $attribute->id }}', 'attribute-edit-button-{{ $attribute->id }}', 'edit-attribute-modal-{{ $attribute->id }}')">
                    <i class="mdi mdi-content-save"></i> Kaydet
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

