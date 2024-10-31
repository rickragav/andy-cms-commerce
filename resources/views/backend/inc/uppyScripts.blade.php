<script type="module">
    import {
        Uppy,
        Dashboard,
        ImageEditor,
        DropTarget,
        XHRUpload
    } from "{{ staticAsset('backend/assets/js/vendors/uppy.min.js') }}"
    var uppy = new Uppy({
            restrictions: {
                allowedFileTypes: TT.allowedFileTypes,
            }
        })
        .use(Dashboard, {
            inline: false,
            // target: '.uppy-drag-drop-area',
            proudlyDisplayPoweredByUppy: false,
            hidePauseResumeButton: true,
            width: '100%',
            hideUploadButton: false,
            height: 'auto'
        })
        .use(ImageEditor, {
            target: Dashboard
        })
        // Allow dropping files on any element or the whole document
        .use(DropTarget, {
            target: 'DashboardContainer'
        })
        .use(XHRUpload, {
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            endpoint: TT.baseUrl + '/media-manager/add-files',
            fieldName: "media_file",
            formData: true,
        })

    uppy.on('complete', (result) => {
        console.log('result', result)
    })

    // Ensure uppy is available in the jQuery scope
    $(document).ready(function() {
        $('.add-photo').on('click', function() {
            console.log('Button clicked');
            // Ensure uppy Dashboard opens in modal view
            uppy.getPlugin('Dashboard').openModal();
        });
    });
</script>

<script>
    "use strict";

    // required
    TT.getMediaType = 'all';
    TT.getMediaSearch = '';
    TT.allowedFileTypes = [
        ".png",
        ".svg",
        ".gif",
        ".jpg",
        ".jpeg",
        ".webp"
    ];
    TT.uploadQty = "single";
    TT.selectedFiles = null;
    TT.nextPageUrl = null;

    // get the media files via ajax
    async function getMediaFiles(getMediaType = TT.getMediaType, getMediaSearch = TT.getMediaSearch, search = false) {

        let url = '{{ route('uppy.index') }}';

        console.log('url' + url)
    }
</script>
