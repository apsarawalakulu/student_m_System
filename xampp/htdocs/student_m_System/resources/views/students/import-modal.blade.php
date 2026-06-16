<!-- Import Modal -->
<div class="modal fade" id="importModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">

            <div class="modal-header border-0">
                <div>
                    <h5 class="modal-title fw-bold">Import Students</h5>
                    <small class="text-muted">Upload Excel (.xlsx or CSV)</small>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="{{ route('students.import') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <label for="fileUpload"
                           class="w-100 border border-2 border-dashed rounded-4 p-5 text-center bg-light"
                           style="cursor:pointer;">

                        <i class="bi bi-cloud-arrow-up display-5 text-primary"></i>

                        <h6 class="mt-3 mb-1">Drag & Drop file here</h6>
                        <small class="text-muted">or click to browse</small>

                        <input id="fileUpload"
                               type="file"
                               name="file"
                               class="d-none"
                               required
                               onchange="showFileName(this)">
                    </label>

                    <div id="fileName" class="text-center mt-3 text-success fw-semibold"></div>

                </div>

                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="submit" class="btn btn-primary rounded-pill px-4">
                        Import Now
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

<script>
    function showFileName(input){
        document.getElementById('fileName').innerText =
            input.files[0] ? "Selected: " + input.files[0].name : "";
    }
</script>
