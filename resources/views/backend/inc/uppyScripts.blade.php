<script type="module">
    import {
        Uppy,
        Dashboard,
        ImageEditor,
        DropTarget,
        XHRUpload
    } from "{{ staticAsset('backend/assets/js/libs/uppy.min.js') }}"
    var uppy = new Uppy({
            restrictions: {
                allowedFileTypes: TT.allowedFileTypes,
            }
        })
        .use(Dashboard, {
            inline: true,
            target: '.uppy-drag-drop-area',
            proudlyDisplayPoweredByUppy: false,
            hidePauseResumeButton: true,
            width: '100%',
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
        getMediaFiles();
    })
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
