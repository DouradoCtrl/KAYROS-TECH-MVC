<!-- Modal de Edição de Incidente -->
<div class="modal fade" id="editCtoClearModal" tabindex="-1" aria-labelledby="editCtoClearModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="editCtoClearModalLabel">Editar Limpeza de CTO</h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="/cto_clear/update" id="editCtoClearForm">
                    <input type="hidden" name="id" id="editCtoClearId"> <!-- Campo oculto para ID -->
                    <div class="form-group">
                        <label for="editPonSlot">PON Slot:</label>
                        <input type="text" class="form-control" name="pon_slot" id="editPonSlot" required>
                    </div>
                    <div class="form-group">
                        <label for="editNoc">NOC:</label>
                        <input type="text" class="form-control" name="noc" id="editNoc" required>
                    </div>
                    <div class="form-group">
                        <label for="editTecnico">Técnico:</label>
                        <input type="text" class="form-control" name="tecnico" id="editTecnico" required>
                    </div>
                    <div class="form-group">
                        <label for="editAdicionado">Adicionado:</label>
                        <input type="text" class="form-control" name="adicionado" id="editAdicionado">
                    </div>
                    <div class="form-group">
                        <label for="editRetirado">Retirado:</label>
                        <input type="text" class="form-control" name="retirado" id="editRetirado">
                    </div>
                    <div class="form-group">
                        <label for="editMotivo">Motivo:</label>
                        <textarea class="form-control" name="motivo" id="editMotivo" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editData">Data:</label>
                        <input type="date" class="form-control" name="data" id="editData" required>
                    </div>
                    <div class="form-group">
                        <label for="editHora">Hora:</label>
                        <input type="time" class="form-control" name="hora" id="editHora" required>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.edit-button');
    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            document.getElementById('editCtoClearId').value = id;

            // Atualiza a ação do formulário para incluir o ID
            document.getElementById('editCtoClearForm').action = `/cto_clear/update/${id}`;

            // Preenche os campos do formulário com os dados do incidente
            document.getElementById('editPonSlot').value = this.getAttribute('data-pon_slot');
            document.getElementById('editNoc').value = this.getAttribute('data-noc');
            document.getElementById('editTecnico').value = this.getAttribute('data-tecnico');
            document.getElementById('editAdicionado').value = this.getAttribute('data-adicionado');
            document.getElementById('editRetirado').value = this.getAttribute('data-retirado');
            document.getElementById('editMotivo').value = this.getAttribute('data-motivo');
            document.getElementById('editData').value = this.getAttribute('data-data');
            document.getElementById('editHora').value = this.getAttribute('data-hora');
        });
    });
});
</script>
