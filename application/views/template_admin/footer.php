<footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p><?php echo date("Y"); ?> &copy; <a href="https://ais-research.telkomuniversity.ac.id/">ais-research.telkomuniversity.ac.id</a></p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://instagram.com/timothee.creative/" target="_blank">Timotheè Creative.</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?= base_url(); ?>/public/assets_admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>/public/assets_admin/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url(); ?>/public/assets_admin/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="<?= base_url(); ?>/public/assets_admin/vendors/apexcharts/apexcharts.js"></script>
    <script src="<?= base_url(); ?>/public/assets_admin/js/pages/dashboard.js"></script>

    <script src="<?= base_url(); ?>/public/assets_admin/js/main.js"></script>
</body>

</html>