<!-- Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"> <!-- Cor de fundo e texto -->
            <div class="modal-header border-0">
                <h5 class="modal-title" id="modalLabel">Adicionar Usuário</h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button> <!-- Alterei o botão para branco -->
            </div>
            <div class="modal-body">
                <form method="post" action="/users/store">
                    <div class="form-group">
                        <label for="username">Nome de Usuário:</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" class="form-control" name="password" required>
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
