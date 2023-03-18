<div class="btn-group">
    <a href="javascript:void(0);" data-href="{{ route('admin.attributes.edit', $attribute) }}" class="btn btn-primary btn-sm">
        <i class="fa fa-edit"></i>
    </a>
    <a href="javascript:void(0);" onclick="formDelete(this);" data-href="{{ route('admin.attributes.destroy', $attribute) }}" class="btn btn-danger btn-sm">
        <i class="fa fa-trash"></i>
    </a>
</div>
