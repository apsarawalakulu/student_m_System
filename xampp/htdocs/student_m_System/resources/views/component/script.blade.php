
<script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
<!-- SWEET ALERT -->
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>

<!-- SORTABLEJS -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

<!-- APEXCHARTS -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"></script>

<!-- JSVECTORMAP -->
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        /* =========================
            SORTABLE JS (SAFE)
        ========================= */
        const sortableEls = document.querySelectorAll('.connectedSortable');

        if (sortableEls.length > 0 && typeof Sortable !== 'undefined') {
            sortableEls.forEach(el => {

                if (el) {
                    new Sortable(el, {
                        group: 'shared',
                        handle: '.card-header',
                    });

                    el.querySelectorAll('.card-header').forEach(header => {
                        header.style.cursor = 'move';
                    });
                }

            });
        }


        /* =========================
            SEARCH FILTER (SAFE)
        ========================= */
        const searchInput = document.getElementById('searchInput');
        const table = document.getElementById('studentTable');

        if (searchInput && table) {
            searchInput.addEventListener('keyup', function () {

                let value = this.value.toLowerCase();
                let rows = table.querySelectorAll('tbody tr');

                rows.forEach(row => {
                    let text = row.innerText.toLowerCase();
                    row.style.display = text.includes(value) ? '' : 'none';
                });

            });
        }


        /* =========================
            RESET MODAL (SAFE)
        ========================= */
        const studentModal = document.getElementById('studentModal');

        if (studentModal) {
            studentModal.addEventListener('hidden.bs.modal', function () {
                const form = studentModal.querySelector('form');
                if (form) form.reset();
            });
        }


        /* =========================
            APEXCHART OPTIONS
        ========================= */
        const sales_chart_options = {
            series: [
                {
                    name: 'Digital Goods',
                    data: [28, 48, 40, 19, 86, 27, 90],
                },
                {
                    name: 'Electronics',
                    data: [65, 59, 80, 81, 56, 55, 40],
                },
            ],
            chart: {
                height: 300,
                type: 'area',
                toolbar: { show: false },
            },
            legend: { show: false },
            colors: ['#0d6efd', '#20c997'],
            dataLabels: { enabled: false },
            stroke: { curve: 'smooth' },
            xaxis: {
                type: 'datetime',
                categories: [
                    '2023-01-01',
                    '2023-02-01',
                    '2023-03-01',
                    '2023-04-01',
                    '2023-05-01',
                    '2023-06-01',
                    '2023-07-01',
                ],
            },
            tooltip: {
                x: { format: 'MMMM yyyy' },
            },
        };


        /* =========================
            APEX CHART (SAFE)
        ========================= */
        const revenueChart = document.querySelector('#revenue-chart');

        if (revenueChart && typeof ApexCharts !== 'undefined') {
            new ApexCharts(revenueChart, sales_chart_options).render();
        }


        /* =========================
            VECTOR MAP (SAFE)
        ========================= */
        const worldMap = document.querySelector('#world-map');

        if (worldMap && typeof jsVectorMap !== 'undefined') {
            new jsVectorMap({
                selector: '#world-map',
                map: 'world',
            });
        }


        /* =========================
            SWEET ALERT DELETE (SAFE)
        ========================= */
        window.confirmDelete = function (id) {

            if (typeof Swal === 'undefined') return;

            Swal.fire({
                title: 'Are you sure?',
                text: 'This student will be deleted!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.getElementById('delete-form-' + id);
                    if (form) form.submit();
                }
            });

        };

    });
</script>
