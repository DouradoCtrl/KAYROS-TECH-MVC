<!-- Modal de Edição -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"> <!-- Cor de fundo e texto -->
            <div class="modal-header border-0">
                <h5 class="modal-title" id="editUserModalLabel">Editar Usuário</h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button> <!-- Botão de fechar -->
            </div>
            <div class="modal-body">
                <form method="post" action="/users/update" id="editUserForm">
                    <input type="hidden" name="id" id="editUserId"> <!-- Campo oculto para ID -->
                    <div class="form-group">
                        <label for="editUsername">Nome de Usuário:</label>
                        <input type="text" class="form-control" name="username" id="editUsername" required>
                    </div>
                    <div class="form-group">
                        <label for="editPassword">Senha:</label>
                        <input type="password" class="form-control" name="password" id="editPassword" placeholder="Nova Senha" required>
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
            document.getElementById('editUserId').value = id;

            // Atualiza a ação do formulário para incluir o ID
            document.getElementById('editUserForm').action = `/users/update/${id}`;

            // Preenche o campo do formulário com o nome de usuário
            document.getElementById('editUsername').value = this.getAttribute('data-username');

            // Limpa o campo de senha
            document.getElementById('editPassword').value = this.getAttribute('data-password');
        });
    });
});
</script>
