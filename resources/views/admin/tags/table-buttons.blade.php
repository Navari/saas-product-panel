<div class="btn-group">
    <a href="javascript:void(0);"
       id="tag-edit-{{ $tag->id }}"
       onclick="formEdit(this)"
       data-form="#tag-edit-form-{{ $tag->id }}"
       data-modal=".edit-tag-modal-{{ $tag->id }}"
       data-update-url="{{ route('admin.tags.update', $tag) }}"
       data-href="{{ route('admin.tags.edit', $tag) }}"
       class="btn btn-primary btn-sm">
        <i class="fa fa-edit"></i>
    </a>
    <a href="javascript:void(0);" onclick="formDelete(this);" data-href="{{ route('admin.tags.destroy', $tag) }}" class="btn btn-danger btn-sm">
        <i class="fa fa-trash"></i>
    </a>
</div>
<div class="modal fade edit-tag-modal-{{ $tag->id }}" tabindex="-1" role="dialog"
     aria-labelledby="addtagLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addtagLabel">Etiket Duzenle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="PUT" id="tag-edit-form-{{ $tag->id }}">
                    <div class="row">
                        <div class="col-10">
                            <div class="form-group">
                                <label for="tag-name">Etiket ADI</label>
                                <input type="text" class="form-control" id="tag-name"
                                       placeholder="Etiket Adi" name="name">
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
                <button class="btn btn-primary btn-md" id="tag-edit-button-{{ $tag->id }}" onclick="formSubmit('tag-edit-form-{{ $tag->id }}', 'tag-edit-button-{{ $tag->id }}', 'edit-tag-modal-{{ $tag->id }}')">
                    <i class="mdi mdi-content-save"></i> Kaydet
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

