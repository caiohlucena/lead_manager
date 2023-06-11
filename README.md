# Lead Manager

Lead Manager é um aplicativo web desenvolvido com PHP, React e MySQL. Ele permite que você gerencie e acompanhe leads ou potenciais clientes para o seu negócio.

## Funcionalidades

- Cadastro de leads: Adicione informações sobre leads, como nome, e-mail, telefone e observações adicionais.
- Listagem de leads: Veja uma lista de todos os leads cadastrados, com opções para editar e excluir cada um deles.
- Pesquisa de leads: Busque leads por nome, e-mail ou telefone para encontrar informações específicas facilmente.
- Status do lead: Atribua um status para cada lead, como "Novo", "Em andamento" ou "Concluído", para acompanhar seu progresso.
- Autenticação de usuário: O aplicativo possui um sistema de autenticação de usuário, permitindo que cada usuário acesse apenas seus próprios leads.

## Pré-requisitos

Antes de executar o Lead Manager, verifique se você possui os seguintes requisitos:

- PHP instalado em sua máquina.
- Servidor web (como Apache ou Nginx) configurado para executar aplicativos PHP.
- MySQL ou outro sistema de gerenciamento de banco de dados instalado e configurado.

## Instalação

Siga as etapas abaixo para instalar e configurar o Lead Manager:

1. Clone o repositório do GitHub em seu ambiente local:

   ```bash
   git clone https://github.com/caiohlucena/lead_manager.git

2. Navegue até o diretório do projeto:

bash
Copy code
cd lead_manager
3. Configure a conexão com o banco de dados:

Renomeie o arquivo .env.example para .env.
Edite o arquivo .env e atualize as configurações do banco de dados de acordo com suas credenciais.
4. Importe o banco de dados:

Execute o script SQL fornecido no arquivo lead_manager.sql para criar o esquema do banco de dados e as tabelas necessárias.
5. Inicie o servidor web e certifique-se de que o PHP esteja configurado corretamente para executar o aplicativo.

6. Abra seu navegador e acesse a URL do Lead Manager para usá-lo.