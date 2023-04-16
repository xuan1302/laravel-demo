var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
};
CKEDITOR.replace( 'editor',options );
function openPopup() {
    window.open('/laravel-filemanager?type=image', 'FileManager', 'width=900,height=600');
    window.SetUrl = function (items) {
        var file_path = items.map(function (item) {
            return item.url;
        }).join(',');
        document.getElementById('thumbnail').value = file_path;
    }
}
