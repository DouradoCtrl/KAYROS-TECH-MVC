<!-- Modal -->
<div class="modal fade" id="CtoClearModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"> <!-- Cor de fundo e texto -->
            <div class="modal-header border-0">
                <h5 class="modal-title" id="modalLabel">Adicionar Limpeza CTO</h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button> <!-- Alterei o botão para branco -->
            </div>
            <div class="modal-body">
                <form method="post" action="/cto_clear/store">
                    <div class="form-group">
                        <label for="pon_slot">PON Slot:</label>
                        <input type="text" class="form-control" name="pon_slot" required placeholder="Exemplo: 1/2">
                    </div>
                    <div class="form-group">
                        <label>NOC:</label>
                        <input type="text" class="form-control" name="noc" required>
                    </div>
                    <div class="form-group">
                        <label>Técnico:</label>
                        <input type="text" class="form-control" name="tecnico" required>
                    </div>
                    <div class="form-group">
                        <label for="adicionado">Adicionado (Cliente):</label>
                        <input type="text" class="form-control" name="adicionado" required placeholder="Número e nome do cliente">
                    </div>
                    <div class="form-group">
                        <label for="retirado">Retirado (Cliente):</label>
                        <input type="text" class="form-control" name="retirado" required placeholder="Número e nome do cliente">
                    </div>
                    <div class="form-group">
                        <label for="motivo">Motivo:</label>
                        <textarea class="form-control" name="motivo" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="data">Data:</label>
                        <input type="date" class="form-control" name="data" required>
                    </div>
                    <div class="form-group">
                        <label for="hora">Hora:</label>
                        <input type="time" class="form-control" name="hora" required>
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
