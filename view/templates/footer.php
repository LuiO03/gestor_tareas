</main>


<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<!-- DataTables JS -->

<script>

    $(document).ready(function(){
        $('.tablaTareas').not('.no-datatable').DataTable({
            "pageLength": 10,
            lengthMenu: [[10, 25, 50],[10, 25, 50]],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json",
                emptyTable: `
                    <div class="text-center text-muted py-4">
                        <i class="ri-folder-warning-line" style="font-size: 2rem;"></i><br>
                        No hay tareas registradas.
                    </div>
                `,
            },
            "responsive": true // Activar modo responsivo
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>